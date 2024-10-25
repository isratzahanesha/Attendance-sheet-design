<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title> Attendance Sheet </title>
</head>

<body>

 <div class= "container mt-3">


    <?php

    include 'database_connect.php';

    $result= $conn->query( "SELECT * FROM attendance_info ");

    if($result->num_rows > 0 ) {
        echo "<table class='table caption-top'>";
      echo "<caption class='text-center text-info'> Attendance Sheet </caption>";
      echo "<thead>";
        echo "<tr>";
          echo "<th scope='col'>ID</th>";
          echo"<th scope='col'>Full Name</th>";
          echo"<th scope'col'>Department Name</th>";
          echo"<th scope'col'>Batch No</th>";
          echo"<th scope'col'>ID No<</th>";
          echo"<th scope'col'>Date</th>";
          echo"<th scope'col'>Class- time</th>";
          echo"<th scope'col'>Attendance Status</th>";
          echo"<th scope'col'>Student entry time</th>";
          echo"<th scope'col'>Time out</th>";
          echo"<th scope'col'>Cource-Name</th>";
          echo"<th scope'col'>Cource-Code</th>";
          echo"<th scope'col'>Total Cources </th>";
          echo "</tr>";
          echo "</thead>";

          echo"<tboby>";
          while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["first_name"] . " " . $row["last_name"] . "</td>";
            echo "<td>" . $row["department"] . "</td>";
            echo "<td>" . $row["batch_no"] . "</td>";
            echo "<td>" . $row["id_no"] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
            echo "<td>" . $row["class_time"] . "</td>";
            echo "<td>" . $row["attended_status"] . "</td>";
            echo "<td>" . $row["st_entry_time"] . "</td>";
            echo "<td>" . $row["time_out"] . "</td>";
            echo "<td>" . $row["cource_name"] . "</td>";
            echo "<td>" . $row["cource_code"] . "</td>";
            echo "<td>" . $row["total_cources"] . "</td>";
    


          echo "</tr>";
          }
        
        echo "</tbody>";
      echo "</table>";
    } else{
      echo "<br>";
      echo "<p style='text-color:red;'>Oops.. No Data!</p>";
    }

    ?>

<div class="col-sm-12 form-group mb-0 text-center">
    <a class="btn btn-primary float-right" href="index.php">Add User</a>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
