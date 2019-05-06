<?php
   require_once('./dbconnector.php');
   if (isset($_POST['them'])) {
        //them
    $name=$_POST['name'];
    $job=$_POST['job'];
    $address=$_POST['address'];
    $salary=$_POST['salary'];
    $sql="Insert Into staff1 (name, job, address,salary) values('".$name."','".$job."','".$address."','".$salary."')";
    $cn = new DBConnector();
    $return = $cn->execStatement($sql);
    header('location:index.php');
    } elseif (isset($_POST['sua'])) {
    $id=$_GET['id'];
    $name=$_POST['name'];
    $job=$_POST['job'];
    $address=$_POST['address'];
    $salary=$_POST['salary'];
    $sql = "UPDATE staff1 SET name = '".$name."', job = '".$job."', address = '".$address."', salary =  '".$salary."' WHERE id = $id"; 
    $cn = new DBConnector();
    $return = $cn->execStatement($sql);
    header('location:index.php');   
    }else{
    $id=$_GET['id'];
    $sql="DELETE FROM staff1 WHERE id = $id";
    $cn = new DBConnector();
    $return = $cn->execStatement($sql);    
    header('location:index.php'); 
    }
?>
