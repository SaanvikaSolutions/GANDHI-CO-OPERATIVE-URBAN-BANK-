<?php 
include("includes/sidebar.php");
include('./connections/dbconnect.php');
?>
<!-- <div class="form_container mt-5">
        <h1>Contact Page</h1>
        <form action="view_contact.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile Number</label>
                <input type="tel" class="form-control" id="mobile" name="mobile" required>
            </div>
            <div class="form-group">
                <label for="query">Query</label>
                <textarea class="form-control" id="query" name="query" rows="3" required></textarea>
            </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

        <br><br><br>
    </div> -->

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $query = $_POST['query'];

    
    //insert query
    $insert_query = "insert into contact(name, email, mobile_number, query) values(?,?,?,?)";
    $stmt = mysqli_prepare($con,$insert_query);

    mysqli_stmt_bind_param($stmt,"ssss",$name, $email, $mobile, $query);
    
    $result_query = mysqli_stmt_execute($stmt);

    if($result_query){
        echo "<script>alert('Inserted successfully.'); window.location.href = 'view_contact.php';</script>";
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
                <th>Name</th>
                <th>Email</th>
                <th>Mobile Number</th>
                <th>Query</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $select_query = "select * from contact";
                $result_query = mysqli_query($con,$select_query);
                if($result_query){
                    $serial_number = 1;
                    while($row = mysqli_fetch_assoc($result_query)){
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile_number'];
                        $query = $row['query'];
                    

                        echo '<tr>
                        <td>'. $serial_number .'</td>
                        <td>'. $name .'</td>
                        <td>'. $email .'</td>
                        <td>'. $mobile .'</td>
                        <td>'. $query .'</td>
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
            document.location.href = `view_contact.php?delete_id=${id}`;
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

    $delete_query = "delete from contact where id=$id";
    $result_query = mysqli_query($con,$delete_query);
    if($result_query){
        echo "<script>alert('sucessfully deleted');window.location.href='view_contact.php';</script>";
    }else{
        die(mysqli_error($con));
    }
}
?>

<script src="app.js"></script>



