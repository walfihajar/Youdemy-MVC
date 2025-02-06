<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/youdemy-mvc/autoloader.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/youdemy-mvc/app/view/sweetAlert.php';
ob_start();

use classes\Course;
use classes\CourseTags;
use classes\Review;
use classes\ContentText;
use classes\ContentVideo;
use classes\Teacher;
use classes\Categorie;
use Classes\Enrollment;
use App\config\DataBaseManager;
use App\config\Session;
// affichage 
//session::start();
//if (Session::isLoggedIn()) {
//    // Récupérer les données de session
//    $s_userId = Session::get('user')['id'];
//    $userName = Session::get('user')['name'];
//    $userEmail = Session::get('user')['email'];
//    $userRole = Session::get('user')['role'];
//    $userAvatar = Session::get('user')['avatar'];
//}


?>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        youdemy
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>

<body class="font-sans antialiased">
    <nav class="lg:w-full bg-white shadow-md fixed z-10 top-0">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">
      <div class="flex items-center  justify-center">
           <img alt="youdemy" class="h-12" src="http://localhost/mvc_mina/public/images/logo.png" />

                <div class="flex items-center">
                    <h2 class="text-2xl text-indigo-500 font-bold ">
                        You<span class="text-yellow-500">Demy</span>
                    </h2>
                </div>
                
                </div>

                <a class="text-gray-700" href="home.php">
                    Accueil
                </a>


        <div class="flex items-center space-x-4 relative">
            <?php //if (!Session::isLoggedIn()) : ?>
                <nav class="flex items-center space-x-4">
                    <a class="text-gray-700 hover:text-gray-900" href="#">
                        Enseigner in Youdemy
                    </a>
                    <a class="text-gray-700 hover:text-gray-900" href="#">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <a class="text-gray-700 hover:text-gray-900" href="login">
                        Log In
                    </a>
                    <a class="bg-blue-500 text-white py-2 px-4 rounded-full hover:bg-blue-600 transition" href="Register">
                        Sign Up
                    </a>
                </nav>
            <?php // endif; ?>
          

        </div>
    </nav>