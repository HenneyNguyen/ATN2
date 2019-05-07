<?php
   require_once('./dbconnector.php');
   if (isset($_POST['them'])) {
        //them
    $ID=$_POST['ID'];
    $Name=$_POST['Name'];
    $Age=$_POST['Age'];
    $Phone=$_POST['Phone'];
    $Email=$_POST['Email'];
    $sql="Insert Into customer values(".$ID.",'".$Name."',".$Age.",".$Phone.",'".$Email."')";
    $cn = new DBConnector();
    $return = $cn->execStatement($sql);
    echo($return);
    header('location:index.php');
    }
    else{
    $ID=$_GET['ID'];
    $sql="DELETE FROM customer WHERE ID = $ID";
    $cn = new DBConnector();
    $return = $cn->execStatement($sql); 
    echo($return);   
    header('location:index.php'); 
    }
?>