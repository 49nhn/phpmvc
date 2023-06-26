<?php 
namespace app\core;
class Response 
{
    /**
     * Summary of setStatusCode
     * @param mixed $code
     * @return void
     */
    public function setStatusCode(int $code)
    {
        http_response_code($code);
    }
}