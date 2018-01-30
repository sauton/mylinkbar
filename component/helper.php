<?php
namespace mylink\component;


class helper{





    public static function render($path,$param=[]){

        extract($param);
        $title=isset($title)?$title:'';
        require (dirname(__FILE__,2).'/template/header.php');
        require($path);
        require(dirname(__FILE__,2).'/template/footer.php');
    }
}