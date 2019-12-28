<?php

if (isset($_POST["action"]) && !empty($_POST["action"])) {
    $action = $_POST["action"];

    $name=$_POST['name'];
    $breed=$_POST['breed'];
    $location=$_POST['location'];
    $date=$_POST['date'];
    $gender=$_POST['gender'];
    $description=$_POST['description'];
    $status='Lost';

    if ($action == 'submitnew')
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

            $query="INSERT INTO dogs VALUES('', '$name', '$breed', '$location', '$date', '$gender', '$description', '$status')";
            $result=mysql_query($query);

            //echo json_encode($result);
            $return=$result;

            echo json_encode($return);
        }
    }
}

?>