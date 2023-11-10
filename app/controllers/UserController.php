<?php
namespace app\controllers;
class UserController
{
    private $model;
    public function __construct($model)
    {
        $this->model=$model;
    }
    public function index()
    {
        $users=$this->model->getusers();
        include "app/views/user.php";
     
    }
    public function adduser()
    {   
        if ($_SERVER['REQUEST_METHOD'] === 'POST') 
        {
            $username=$_POST['username'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $birthday=$_POST['birthday'];
            $gender=$_POST['gender'];
            $rule=$_POST['rule'];
                $data=[
                    "email"=> $email,
                    "password"=>$password,
                    "rule"=>$rule,
                    "username"=>$username,
                    "birthday"=>$birthday,
                    "gender"=> $gender
                ];
            
                $insert=$this->model->adduser($data);
                if ($insert)
                {
                  
                 echo "succesfully insert";
                 header("location:".BASE_PATH);
                }
                else {
                    echo "failed insert";
                }
        }
    }
    public function updateuser($id)
    {  
        $users=$this->model->getuser($id);
        if($_SERVER['REQUEST_METHOD'] === 'POST') 
      
          { 
              $username=$_POST['username'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $birthday=$_POST['birthday'];
            $gender=$_POST['gender'];
            $rule=$_POST['rule'];
                $data=[
                    "email"=> $email,
                    "password"=>$password,
                    "rule"=>$rule,
                    "username"=>$username,
                    "birthday"=>$birthday,
                    "gender"=> $gender
                ];
                $update=$this->model->updateuser($id,$data);
                if ($update)
                {
                  
                 echo "succesfully update";
                 header("location:".BASE_PATH);
                }
                else {
                    echo "failed update";
                }
        }
        include "app/views/update.php";
    }
    public function deleteuser($id)
    {
      $delete=$this->model->deleteuser($id);
      if($delete)
      {
        echo "succesfully delete";
        header("location:".BASE_PATH);
                }
                else {
                    echo "failed delete";
                }
      
    }


}




?>