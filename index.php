<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Attendance Sheet</title>
</head>

<body>

<?php


include 'database_connect.php';
?>


<form method="POST" action="execution.php">
<div class="container">
    <form>
    <div class="row jumbotron box8">
                <div class="col-sm- 6 mx-t3 mb-4">
    <h2 class="text-center text-info">Attendance Sheet</h2>
    
</div>  
<div class="col-sm-6" form group>
    <label for="first_name" >First Name</label>
    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="" required>
 </div>


 <div class="col-sm-6" form group>
    <label for="last_name" >Last Name</label>
    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="" required>
 </div>

 <div class="col-sm-6" form-group>
            <lable for="department">Department Name</lable>
           <select class="form-control custom-select browser_default" name="department" required>
            <option value=""  selected disabled>select</option>
            <option value="bba">BBA</option>
            <option value="cse">CSE</option>
            <option value="ee">EE</option>
            <option value="tripoly">Tripoly</option>
           </select>
        </div>
 <div class="col-sm-6" form group>
    <lable for="batch_no" >Batch No</lable>
    <input type="batch_no" class="form-control" name="batch_no" id="batch_no" placeholder="" required>
</div>

<div class="col-sm-6" form group>
    <lable for="id_no" >ID No</lable>
    <input type="id_no" class="form-control" name="id_no" id="id_no" placeholder="" required>
</div>

<div class="col-sm-6" form group>
    <label for="date">Date</label>
    <input type="date"  class="form-control" name="date" id="date" placeholder="" rtequired>
</div>
<div class="col-sm-6" from group>
<label for="class_time">Class-time</label>
<input type="time" class="form-control" name="class_time" id="" placeholder="" required>
</div>
<div class="col-sm-6" form-group>
            <lable for="attended_status">Attendance Status</lable>
           <select class="form-control custom-select browser_default" name="attended_status" required>
            <option value=""  selected disabled>select</option>
            <option value="attended">Attended</option>
            <option value="skipped">Skipped</option>
           </select>
        </div>
<div class="col-sm-6" form group>
            <label for="st_entry_time">Student entry time</label>
            <input type="time" class="form-control" name="st_entry_time" id="st_entry_time" placeholder="" >
        </div>
        <div class="col-sm-6" form group>
            <label for="time_out">Time out</label>
            <input type="time" class="form-control" name="time_out" id="time_out" placeholder="">
        </div>
        <div class="col-sm-6" form-group>
            <lable for="cource_name">Cource-Name</lable>
           <select class="form-control custom-select browser_default" name="cource_name" required>
            <option value=""  selected disabled>select</option>
            <option value="data_stracture">Data-Stracture</option>
            <option value="c">C</option>
            <option value="c++">C++</option>
            <option value="ai">AI</option>
           </select>
        </div>

        <div class="col-sm-6" form group>
            <label for="course_code"> Course-Code </label>
            <input type="text" class="form-control" name="course_code" id="course_code" placeholder=""  >
        </div>
<div class="col-sm-6" form group>
            <label for="total_courses"> Total Courses </label>
            <input type="text" class="form-control" name=" total_courses" id="total_courses" placeholder=""  >
        </div>

        <div class="col-sm-12 row-row-space form-group mb-0 text-center">
                        <br>
                            <input type="submit" value="Submit" class="submit" id="submit" name="submit" />
                            <input type="reset" value="Reset" class="reset" id="reset" name="reset" />
                        </div>

</div>



</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>