<?php
//require_once 'dbconn.php';

class Controller{


Public $model;

public function buttonAction(){

    if(isset($_POST['register']))
    {
        $username=($_POST['username']);
        $phonenumber=($_POST['phoneNo']);
        $email=($_POST['email']);
        $password=($_POST['password']);

      $this->model->createEmployee($username,$phonenumber,$email,$password);
         
        //$_SESSION['userLogInStatus']=1;
       echo'Button clicked';
    }
}
    
}
