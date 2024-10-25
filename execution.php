<?php

include 'database_connect.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $first_name= $_POST["first_name"];
    $last_name= $_POST["last_name"];
    $department= $_POST["department"];
    $batch_no= $_POST["batch_no"];
    $id_no= $_POST["id_no"];
    $date= $_POST["date"];
    $class_time= $_POST["class_time"];
    $attended_status= $_POST["attended_status"];
    $st_entry_time= $_POST["st_entry_time"];
    $time_out= $_POST["time_out"];
    $course_name= $_POST["course_name"];
    $course_code= $_POST["course_code"];
    $total_courses= $_POST["total_courses"];
   


    $sql="INSERT INTO  attendance_info ( first_name, last_name, department, batch_no, id_no, date, class_time, attended_status, st_entry_time, time_out, course_name, course_code, total_courses)
    VALUE( '$first_name', '$last_name', '$department','$batch_no', '$id_no', ''$date', '$class_time','$attended_status',  '$st_entry_time', '$time_out', '$course_name', '$course_code','$total_courses')";
    
    if($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: "  .$sql. "<br>" .$conn-> error;
    }
 
}
$conn->close();
 header("Location:show.php ");
 exit();


?>