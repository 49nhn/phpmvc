<?php
namespace app\controller;

use app\core\controller;
use app\core\Request;

use app\models\User;


class AuthController extends controller
{
    public function login()
    {
        $this->setLayout('auth');
        return $this->render('login');
    }
    public function register(Request $request)
    {
        $resgisterModel = new User();
        $this->setLayout('auth');
        if ($request->isPost()) {
            $resgisterModel->loadData($request->getBody());
            if ($resgisterModel->validate() && $resgisterModel->register()) {
                return 'Success';
            } 
             return $this->render('register', ['model' => $resgisterModel]);
            
        }
        return $this->render('register', ['model' => $resgisterModel]);
    }
}