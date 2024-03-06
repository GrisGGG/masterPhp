<?php
class ConfiguracionStatic {
    public static $color;
    public static $newsletter;
    public static $entorno;
    //self es el this en funciones static
    public static function getColor(){
        return self::$color;
    }
    public static function getNewsletter(){
        return self::$newsletter;
    }
    public static function getEntorno(){
        return self::$entorno;
    }
    public static function setColor($color){
        self::$color =$color ;
    }
    public static function setNewsletter($newsletter){
        self::$newsletter =$newsletter ;
    }
    public static function setEntorno($entorno){
       self::$entorno =$entorno ;
    }

}

