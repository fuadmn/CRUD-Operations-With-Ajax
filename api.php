<?php

header("Content-type: application/json);

// function readAll
// function Insert
// function Delete
// function Update

function raadAll($conn){
 
 $data = array();
 $massage = array();
 //read All  students in the database
 $query = "SELECT * FORM student";

 // excute the quert

 $result $conn->query($query);
 
 // success or error

 if($reqult){

        while($row = $result->fetch_assoc()){
    
           $data [] = $row;
       }

       $massage = array("status" => true, "data" =? $data);

 }else{

       $massage = array("status" => false, "data" => $conn->error);

       
     }

     echo json_encode($massage);

}

?>