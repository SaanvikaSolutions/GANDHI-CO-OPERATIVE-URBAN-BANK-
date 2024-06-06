<?php 
include("includes/sidebar.php");
include('./connections/dbconnect.php');
?>


<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $department = $_POST['department'];
    $location = $_POST['location'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $experience = $_POST['experience'];
    $number = $_POST['number'];
    $email = $_POST['email'];

    $cv = $_FILES['cv']['name'];
    $temp_file1 = $_FILES['cv']['tmp_name'];

    //move uploaded file
    move_uploaded_file($temp_file1,"./includes/images/career/$cv");
    
    //insert query
    $insert_query = "insert into career(department, location, name, gender, dob, experience, cv, number, email) values(?,?,?,?,?,?,?,?,?)";
    $stmt = mysqli_prepare($con,$insert_query);

    mysqli_stmt_bind_param($stmt,"sssssssis",$department, $location, $name, $gender, $dob,  $experience, $cv, $mobile, $email);
    
    $result_query = mysqli_stmt_execute($stmt);

    if($result_query){
        echo "<script>alert('Inserted successfully.'); window.location.href = 'view_career.php';</script>";
        exit();
    }else{
        echo "<script>alert('Error: " . mysqli_error($con) . "')</script>";
    }
}
?>

<div class="orders-container" id="table-container1">
    <div class="orders-header ">
        <h1>Contact Page </h1>

        <div class="search-container">
            <input type="text" placeholder="Search" class="search-input">
            <select class="filter-select">
                <option value="all">All</option>
                <!-- Add more options if needed -->
            </select>
        </div>
    </div>
    <table id="datatable dark" class="orders-table">
        <thead>
            <tr>
                <th>S No</th>
                <th>department</th>
                <th>location</th>
                <th>Name</th>
                <th>gender</th>
                <th>dob</th>
                <th>experience</th>
                <th>CV</th>
                <th>Mobile Number</th>
                <th>Email</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $select_query = "select * from career";
                $result_query = mysqli_query($con,$select_query);
                if($result_query){
                    $serial_number = 1;
                    while($row = mysqli_fetch_assoc($result_query)){
                        $id = $row['id'];
                        $department = $row['department'];
                        $location = $row['location'];
                        $name = $row['name'];
                        $gender = $row['gender'];
                        $dob = $row['dob'];
                        $experience = $row['experience'];
                        $cv = $row['cv'];
                        $number = $row['number'];
                        $email = $row['email'];
                                        

                        echo '<tr>
                        <td>'. $serial_number .'</td>
                        <td>'. $department .'</td>
                        <td>'. $location .'</td>
                        <td>'. $name .'</td>
                        <td>'. $gender .'</td>
                        <td>'. $dob .'</td>
                        <td>'. $experience .'</td>
                        <td>
                            <a href="./includes/images/career/' . $cv.'" target="_blank">
                                <button style="border-radius: 5px; padding: 7px 15px; background-color: blue; width: fit-content; text-decoration: none; color: white;">View</button>
                            </a>
                        </td>
                         <td>'. $number .'</td>
                        <td>'. $email .'</td>
                       
                        <td>
                        <button class="btn btn-primary" style="border-radius: 5px; padding: 7px 15px; background-color: red; width: fit-content">
                        <a href="javascript:void()" onClick="chkalert('.$id.')"  style="text-decoration: none; color: white;">Delete</a>
                    </button>
                    
                        </td>
                        </tr>';
                        $serial_number++;
                    }
                }
            ?>
        </tbody>
        
    </table>
</div>
</div>

<script type="text/javascript">
    function chkalert(id){
        sts = confirm('Are you sure you want to delete it?');
        if(sts){
            document.location.href = `view_career.php?delete_id=${id}`;
        }
    }
</script>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- Include DataTables CSS and JS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>

<script>
    $(document).ready(function() {
        $('#datatable').DataTable();
    });
    </script>


<?php
// Deleting the product
if(isset($_GET['delete_id'])){
    $id = $_GET['delete_id'];

    $delete_query = "delete from career where id=$id";
    $result_query = mysqli_query($con,$delete_query);
    if($result_query){
        echo "<script>alert('sucessfully deleted');window.location.href='view_career.php';</script>";
    }else{
        die(mysqli_error($con));
    }
}
?>

<script src="app.js"></script>



