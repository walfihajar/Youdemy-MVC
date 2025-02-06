<?php
namespace config ;

class Session {

    public static function start() {
        if (session_status() == PHP_SESSION_NONE) {   
            session_start();
        }
    }
    public static function destroy() {
        if (session_status() != PHP_SESSION_NONE) {
            session_unset(); 
            session_destroy();
        }
    }

    public static function set($key, $value) {
        $_SESSION[$key] = $value;
    }
    public static function get($key) {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }

    public static function exists($key) {
        return isset($_SESSION[$key]);
    }


    public static function isLoggedIn() {
        return self::exists('logged_in') && self::get('logged_in') === true;
    }

    public static function hasRole($role) {
        if (self::exists('user') && isset($_SESSION['user']['role'])) {
            return $_SESSION['user']['role'] === $role;
        }
        return false; 
    }

    public static function gotoLocation($role){
    
        if ($role == "student") {
      
            header('Location: ../home.php');
         
            exit(); 
        } elseif ($role == "teacher") {
            header('Location: ../espaceTeacher/mesCourses.php');
            exit();
        }  elseif ($role == "admin") {
           
            header('Location: ../espaceAdmin/dashboard.php');
            exit();
        }
    }



}

?>
