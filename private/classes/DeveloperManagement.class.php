<?php

/**
* DeveloperManagement class provide crud operations with deveopers in database
*/
class DeveloperManagement
{   
    public function addDeveloper($id_role,$f_name,$l_name,$username,$email,$password)
    {
        $conn = Database::getInstance()->getConnection();   
        $sql = "INSERT INTO user(id_user,id_role,f_name,l_name,username,email,password)
                VALUES(null,$id_role,'$f_name','$l_name','$username','$email','$password')";
        $query = $conn->query($sql);

        if ($query == false) {
            return false;
        }
        return true;
                
    }

    public function removeDeveloper($email)
    {
        $conn = Database::getInstance()->getConnection();
        $sql = "DELETE FROM user WHERE email = '$email'";
        $query = $conn->query($sql);

        if ($query == false) {
            return false;
        }
        return true;
    }

    public function updateDeveloper($email,$update,$value)
    {
        $conn = Database::getInstance()->getConnection();
        $sql = "UPDATE user SET $update = '$value' WHERE email = '$email'";
        $query = $conn->query($sql);

        if ($query == false) {
            return false;
        }
        return true;        
    }
}