<?php 
namespace Ccontrollers;

require_once __DIR__ . '/../core/Controller.php';

use app\core\controller;
use app\core\Request;

class SiteController extends Controller
{
   
    public function home()
    {
        $params = [
            'name' => "The Codeholic",
            'title' => "Home page"
        ];
        return $this->render('home', $params);
    }
    public function contact()
    {
        return $this->render('contact');
    }
    public function handleContact(Request $request)
    {
        $body = $request->getBody();
        return 'Handling submitted data';
    }
    

}