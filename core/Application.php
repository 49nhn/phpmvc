<?php
namespace app\core;

include_once __DIR__ . "/../vendor/autoload.php";
//use moldel
use app\core\db\Database;
use app\core\Router;

/**
 * Class Application
 * 
 * @author: NamNguyen
 * @package app\core
 * @param Request $request
 * @param Response $response
 */
class Application
{
    public static string $ROOT_DIR;
    public  Router $router;
    public Request $request;
    public Response $response;
    public static Application $app;
    public Controller $controller;

    public Database $db;
    public function __construct( $rootPath, array $dbConfig)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
        $this->db = new Database($dbConfig['db']);
    }


    public function getController( Controller $controller) : void
    {
        $this->controller;
    }
    public function setController( Controller $controller) :void
    {
        $this->controller = $controller;
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}