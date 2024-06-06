<?php 
include("includes/sidebar.php");
include('./connections/dbconnect.php');
?>
<div class="form_container mt-5" >
        <h1>Loans Home Page</h1>
        <form action="view_loanhome.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="loan-image">Loan Image</label>
                <input type="file" class="form-control-file" id="loan-image" name="loan-image"
                    accept="image">
            </div>
            <div class="form-group">
                <label for="loan-name">Loan Name</label>
                <input class="form-control-file" id="loan-name" name="loan-name" rows="3"></input>
            </div>
            <div class="form-group">
                <label for="loan-discription">Loan Discription</label>
                <textarea class="form-control-file" id="loan-discription" name="loan-discription" rows="3"></textarea>
            </div>
           

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <br><br><br>
    </div>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $loan_name = $_POST['loan-name'];
    $loan_discription = $_POST['loan-discription'];
    $loan_image = $_FILES['loan-image']['name'];
    $temp_file1 = $_FILES['loan-image']['tmp_name'];

    //move uploaded file
    move_uploaded_file($temp_file1,"./includes/images/loan_home/$loan_image");

    //insert query
    $insert_query = "insert into loans(loan_name, loan_description, loan_photo) values(?,?,?)";
    $stmt = mysqli_prepare($con,$insert_query);

    mysqli_stmt_bind_param($stmt,"sss",$loan_name, $loan_discription, $loan_image);
    
    $result_query = mysqli_stmt_execute($stmt);

    if($result_query){
        echo "<script>alert('Inserted successfully.'); window.location.href = 'view_loanhome.php';</script>";
        exit();
    }else{
        echo "<script>alert('Error: " . mysqli_error($con) . "')</script>";
    }
}
?>

<div class="orders-container" id="table-container1">
    <div class="orders-header ">
        <h1>Home Loan Page </h1>

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
                <th>Loan Name</th>
                <th>Loan Discription</th>
                <th>Loan Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $select_query = "select * from loans";
                $result_query = mysqli_query($con,$select_query);
                if($result_query){
                    $serial_number = 1;
                    while($row = mysqli_fetch_assoc($result_query)){
                        $id = $row['id'];
                        $loan_name = $row['loan_name'];
                        $loan_discription = $row['loan_description'];
                        $loan_image = $row['loan_photo'];
                    

                        echo '<tr>
                        <td>'. $serial_number .'</td>
                        <td><img src="./includes/images/loan_home/' . $loan_image . '" alt="file" target="_blank" width="50px"></td>
                        <td>'. $loan_name .'</td>
                        <td>'. $loan_discription .'</td>
                        <td>
                            <button class="btn btn-primary" style="border-radius: 5px; padding: 7px 15px; background-color: blue; width: fit-content">
                                <a href="update_loanhome.php?update_id=' . $id . '" class="text-light" style="text-decoration: none; color: white;">Edit</a>
                            </button>
                        </td>
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
            document.location.href = `view_loanhome.php?delete_id=${id}`;
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


<!-- Delete home -->

<?php
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];

    // Select query to fetch images associated with the product
    $select_query = "SELECT loan_photo FROM loans WHERE id=$id";
    $result_query = mysqli_query($con, $select_query);

    if ($result_query) {
        $row = mysqli_fetch_assoc($result_query);
        $loan_image = $row['loan_photo'];

        // Construct file paths for both images
        $file_path1 = './includes/images/loan_home/' . $loan_image;

        // Delete record from the database
        $delete_query = "DELETE FROM loans WHERE id=$id";
        $result_query = mysqli_query($con, $delete_query);

        if ($result_query) {
            // Delete the image files if they exist
            if (file_exists($file_path1)) {
                unlink($file_path1);
            }
           

            echo "<script>alert('Deleted successfully'); window.location.href = 'view_loanhome.php';</script>";
            exit();
        } else {
            echo "<script>alert('Error deleting record'); window.location.href = 'view_loanhome.php';</script>";
        }
    } else {
        echo "<script>alert('Error fetching images'); window.location.href = 'view_loanhome.php';</script>";
    }
}
?>
<script src="app.js"></script>



