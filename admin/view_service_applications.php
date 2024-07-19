<?php
session_start();

// Check if user is not logged in
if (!isset($_SESSION['username'])) {
    // Redirect user to the login page
    header("Location: login.php");
    exit();
}

include("includes/sidebar.php");
include('./connections/dbconnect.php');
?>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST['name'];
    $service = $_POST['service'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
   
    
    //insert query
    $insert_query = "insert into services_applications( name, service, email, phone) values(?,?,?,?)";
    $stmt = mysqli_prepare($con,$insert_query);

    mysqli_stmt_bind_param($stmt,"sssi", $name, $service, $email, $phone);
    
    $result_query = mysqli_stmt_execute($stmt);

    if($result_query){
        echo "<script>alert('Inserted successfully.'); window.location.href = 'view_service_applications.php';</script>";
        exit();
    }else{
        echo "<script>alert('Error: " . mysqli_error($con) . "')</script>";
    }
}
?>

<div class="orders-container" id="table-container1">
    <div class="orders-header ">
        <h1>Service Applications </h1>

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
                <th>Name</th>
                <th>Service</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $select_query = "select * from services_applications";
                $result_query = mysqli_query($con,$select_query);
                if($result_query){
                    $serial_number = 1;
                    while($row = mysqli_fetch_assoc($result_query)){
                        $id = $row['id'];
                        $name = $row['name'];
                        $service = $row['service'];
                        $email = $row['email'];
                        $phone = $row['phone'];
                        
                        echo '<tr>
                        <td>'. $serial_number .'</td>
                        <td>'. $name .'</td>
                        <td>'. $service .'</td>
                        <td>'. $email .'</td>
                        <td>'. $phone .'</td>
                        
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
            document.location.href = `view_service_applications.php?delete_id=${id}`;
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

    $delete_query = "delete from services_applications where id=$id";
    $result_query = mysqli_query($con,$delete_query);
    if($result_query){
        echo "<script>alert('sucessfully deleted');window.location.href='view_service_applications.php';</script>";
    }else{
        die(mysqli_error($con));
    }
}
?>

<script src="app.js"></script>



