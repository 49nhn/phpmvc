<?php
namespace app\core;

/**
 * Class Router
 * 
 * @package app\core
 * @property Request $request
 */
class Router
{
    public Request $request;
    public Response $response;
    protected array $routes = [];
    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }



    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    /**
     * Summary of resolve
     * @return mixed
     */
    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->methor();
        $callback = $this->routes[$method][$path] ?? false;
        if ($callback === false) {
            $this->response->setStatusCode(404);
            return $this->renderView("_404");
        }
        if (is_string($callback)) {
            return $this->renderView($callback);
        }
        if (is_array($callback)) {
            Application::$app->controller = new $callback[0]();
            $callback[0] = Application::$app->controller;
        }
        return call_user_func($callback, $this->request);
    }
    /**
     * Summary of renderView
     * @param mixed $view
     * @param mixed $params
     * @return array|string
     */
    public function renderView($view, $params = [])
    {
        $layoutContent = $this->layoutContent();
        $viewContent = $this->renderOnlyView($view, $params);
        return str_replace('{{contentHere}}', $viewContent, $layoutContent);
    }

    /**
     * Summary of renderContent
     * @param mixed $viewContent
     * @return array|string
     */
    public function renderContent($viewContent)
    {
        $layoutContent = $this->layoutContent();
        return str_replace('{{contentHere}}', $viewContent, $layoutContent);
    }
    protected function layoutContent()
    {
        $layout = Application::$app->controller->layout;
        ob_start();
        include_once Application::$ROOT_DIR . "/views/layouts/$layout.php";
        return ob_get_clean();
    }

    protected function renderOnlyView($view, $params)
    {
        foreach ($params as $key => $value) {
            $$key = $value;
        }
        ob_start();
        include_once Application::$ROOT_DIR . "/views/pages/$view.php";
        return ob_get_clean();
    }
}