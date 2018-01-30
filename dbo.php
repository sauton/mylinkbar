<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 1/28/18
 * Time: 4:25 AM
 */



namespace mylink\dbo;

class dbo {
private $server_name='localhost';
private $user_name='root';
private $password='';
private $dbname='mylink';

    public function __construct()
    {
        try{

            $conn=new \PDO('mysql:host='.$this->server_name.'dbname='.$this->dbname,$this->user_name,$this->password);
        }catch(\PDOException $e){
            throw($e);
        }
    }



}




