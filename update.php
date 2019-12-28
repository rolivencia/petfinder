<?php

if (isset($_POST["action"]) && !empty($_POST["action"])) {
    $action = $_POST["action"];

    $id=$_POST['id'];
    $status=$_POST['status'];

    echo $id . '--' . $status . '-';

    if ($action == 'update')
    {
        $username="root";
        $password="dba";
        $database="petfinder";

        $connection=mysql_connect('localhost', "root", "dba");

        if(mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        else{
            @mysql_select_db($database) or die ("Unable to select database");

            $query="UPDATE dogs SET status='$status' WHERE id='$id'";

            $result=mysql_query($query);

            $return=$result;

            echo json_encode($return);
        }
    }
}

?>