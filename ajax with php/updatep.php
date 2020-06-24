<?php
    $connection = mysqli_connect('localhost', 'root', '', 'ajax_with_php');
    

    // if(isset($_SESSION['set'])){
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $contact = trim($_POST['contact']);

        if($name=="" || $email == "" || $contact == ""){
            echo "Please fill the form correctly";
        }

        else{

        $strSql = "UPDATE student SET name='{$name}', email='{$email}', contact='{$contact}' WHERE id='{$_POST['id']}'";
            $result_set = mysqli_query($connection,$strSql);
            if($result_set){
                echo "record Successfully updated..!!!";
            }
            else{  
                mysql_error();
            }
        }
    // }

?>