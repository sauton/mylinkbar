<?php
namespace mylink\Controller;

use mylink\component\helper;
use mylink\Model\tungduaModel;

class tungduaController{

    private $row_table;

    public function __construct()
    {

    }

    public function render(){
        $tdModel=new tungduaModel();
        $arr_td=$tdModel->getArrayTungdua();
        helper::render(dirname(__FILE__,2).'/view/tungdua.php',array('de'=>$arr_td,'title'=>'yiss','context'=>$this));

    }
    public function getRow(){
        return 'true';
    }

}