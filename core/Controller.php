<?php
class Controller{

    public function model($model){
        if(file_exists(_DIR_ROOT.'/app/Models/'.$model.'.php')){
            require_once _DIR_ROOT.'/app/Models/'.$model.'.php';
            if(class_exists($model)){
                $data = new $model;
                return $data;
            }
        }
        return false;
    }  

    public function  view($nameview ,$data=[])
    {
        extract($data);
        if(file_exists(_DIR_ROOT.'/app/Views/'.$nameview.'.php')){
            require_once _DIR_ROOT.'/app/Views/'.$nameview.'.php';
        }
        else{
            echo 'loi';
        }
    }

}
?>