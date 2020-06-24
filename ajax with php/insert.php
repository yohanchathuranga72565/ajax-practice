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

            $strSql = "INSERT INTO student (name,email,contact) VALUES ('{$name}', '{$email}', '{$contact}')";
            $result_set = mysqli_query($connection,$strSql);
            if($result_set){
                echo "record Successfully inserted..!!!";
            }
            else{  
                mysql_error();
            }
        }
    // }

?>