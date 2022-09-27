<?php

//include_once 'dbconn.php';


class Model{

    Public $db;

   



Public function createEmployee($username,$phonenumber,$email,$password)
    {

        $run="INSERT INTO employee (UserName,PhoneNumber,Email,Password
        ) VALUES('$username','$phonenumber','$email','$password')";
        $stmt=$this->db->query($run);
        return $stmt;
        
    
            
    }
}


