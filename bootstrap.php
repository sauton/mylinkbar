<?php

function site_url(){
        return sprintf(
            "%s://%s%s",
            isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
            $_SERVER['SERVER_NAME'],
            $_SERVER['REQUEST_URI']
        );

}

require_once ('dbo.php');
require_once ('component/helper.php');
require_once ('model/tungduaModel.php');
require_once ('controller/tungduaController.php');
