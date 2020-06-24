<?php
    $connection = mysqli_connect('localhost', 'root', '', 'ajax_with_php');
    

    // if(isset($_SESSION['set'])){
        $id = trim($_POST['id']);
        

            $strSql = "DELETE FROM student WHERE id='{$id}'";
            $result_set = mysqli_query($connection,$strSql);
            if($result_set){
                echo "record Successfully deleted..!!!";
    
            }
            else{  
                mysql_error();
            }
    // }

?>