<?php

header("Content-type: application/json");

include 'conn.php';

// function readAll
// function Insert
// function Delete
// function Update

//POST

$action = $_POST['action'];


function readAll($conn){
    
    $data = array();
    $massage = array();
    //read All students in the database
    $query = "SELECT * FROM student";

    //excute the query

    $result = $conn->query($query);

    //success or error
   
    if($result){

        while($row = $result->fetch_assoc()){

            $data [] = $row;

        }

        $massage = array("status" => true, "data" => $data);

    }else{
          
        $massage = array ("status" => false, "data" => $conn->error);

    }

       echo json_encode($massage);


}

if(isset($action)){

    $action($conn);

}else{
    echo "Action is Required.....";
}




?>