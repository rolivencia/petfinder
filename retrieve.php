<?php

if (isset($_POST["action"]) && !empty($_POST["action"])) {
    $action = $_POST["action"];

    if ($action == 'retrieve')
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

            $query="SELECT * FROM dogs";
            $result=mysql_query($query);

            $row_number=mysql_num_rows($result);

            $dogs=array();

            for($i=0; $i<$row_number; $i++){
                $dogs[$i]['id']=mysql_result($result,$i,"id");
                $dogs[$i]['name']=mysql_result($result,$i,"name");
                $dogs[$i]['breed']=mysql_result($result,$i,"breed");
                $dogs[$i]['location']=mysql_result($result,$i,"location");
                $dogs[$i]['date']=mysql_result($result,$i,"date");
                $dogs[$i]['gender']=mysql_result($result,$i,"gender");
                $dogs[$i]['description']=mysql_result($result,$i,"description");
                $dogs[$i]['status']=mysql_result($result,$i,"status");
            }

            echo json_encode($dogs);
        }
    }
}

?>