<?php

namespace App\controller;

use App\config\DataBaseManager;
use App\core\Controller;
use App\model\Course;
use Exception;
use App\model\Categorie;
class loginController extends Controller
{

    public function index(){
         $this->view('auth/login'); ;
    }


}