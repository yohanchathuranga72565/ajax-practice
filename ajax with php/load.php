<?php
    $connection = mysqli_connect('localhost', 'root', '', 'ajax_with_php');

    $strSql = "SELECT * FROM student";
    $result_set = mysqli_query($connection,$strSql);

    if(mysqli_num_rows($result_set)> 0){
        echo '<table class="table"><thead class="thead-light"><tr><th>ID</th><th>Name</th><th>Email</th><th>Contact</th></tr></thead>';
        foreach($result_set as $row){
            $url1 = "update.php?id={$row['id']}&name={$row['name']}&email={$row['email']}&contact={$row['contact']}";
            $url2 = "delete.php?id={$row['id']}&name={$row['name']}&email={$row['email']}&contact={$row['contact']}";
            echo '<tr><td>'.$row['id'].'</td><td>'.$row['name'].'</td><td>'.$row['email'].'</td><td>'.$row['contact'].'</td>
            <td><a href="'.$url1.'">Update</a></td><td><a href="'.$url2.'">Delete</a></td></tr>';
        }
        echo '</table>';
    }
    else{
        mysql_error();
        echo 'No any record found';
    }

?>