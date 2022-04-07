<?php

class Session
{
    public static function init()
    {
        session_start();
    }

    public static function set($key,$value)
    {
        $_SESSION[$key] = $value;
    }

    public static function get($key)
    {
        if (isset($_SESSION[$key])){
           return $_SESSION[$key];
        }else{
            return  false;
        }
    }

    public static function isAdmin()
    {
       // self::init();
        if (self::get('isAdmin') == true){
            return true;
        }else{
            return  false;
        }
    }

    public function destroy()
    {
       session_destroy();
//       header("Location:categoryIndex.php");
     //   echo '<script>window.location="index.php"</script>';
    }
    
}
