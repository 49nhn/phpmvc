<?php
namespace app\core;

/**
 *Class Request
 
 * @author nnam4 <nnam4332@gmail.com>
 * @package app\core
 */
class Request
{
    /**
     * Summary of getPath
     * @return mixed
     */
    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path, '?');
        if ($position === false) {
            return $path;
        }
        return substr($path, 0, $position);
    }

    /**
     * Summary of methor
     * @return string
     */
    public function methor()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    /**
     * Summary of isGet
     * @return bool
     */
    public function isGet()
    {
        return $this->methor() === 'get';
    }
    /**
     * Summary of isPost
     * @return bool
     */
    public function isPost()
    {
        return $this->methor() === 'post';
    }
    /**
     * Summary of getBody
     * @return array
     */
    public function getBody()
    {
        $body = [];
        if ($this->methor() === 'get') {
            foreach ($_GET as $key => $value) {
                $body[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }
        if ($this->methor() === 'post') {
            foreach ($_POST as $key => $value) {
                $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }
        return $body;
    }

}