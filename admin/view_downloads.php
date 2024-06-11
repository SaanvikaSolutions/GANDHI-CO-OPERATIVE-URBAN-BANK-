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

<div class="form_container mt-5" >
        <h1>Downloads Page</h1>
        <form action="view_downloads.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
                <label for="file_name">File Name</label>
                <textarea class="form-control-file" id="file_name" name="file_name" rows="3"></textarea>
            </div>
        <div class="form-group">
            <label for="upload_file">Upload PDF File</label>
            <input type="file" class="form-control-file" id="upload_file" name="upload_file" accept="pdf">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
        <br><br><br>
    </div>


<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $file_name = $_POST['file_name'];
    $upload_file = $_FILES['upload_file']['name'];
    $temp_file1 = $_FILES['upload_file']['tmp_name'];

    //move uploaded file
    move_uploaded_file($temp_file1,"./includes/images/download/$upload_file");

    //insert query
    $insert_query = "insert into downloads(upload_file, file_name) values(?,?)";
    $stmt = mysqli_prepare($con,$insert_query);

    mysqli_stmt_bind_param($stmt,"ss",$file_name, $upload_file);
    $result_query = mysqli_stmt_execute($stmt);

    if($result_query){
        echo "<script>alert('Inserted successfully.'); window.location.href = 'view_downloads.php';</script>";
        exit();
    }else{
        echo "<script>alert('Error: " . mysqli_error($con) . "')</script>";
    }
}
?>

<div class="orders-container" id="table-container1">
    <div class="orders-header ">
        <h1>Downloads Page</h1>

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
                <th>File</th>
                <th>File Name</th>
                <th>Time</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $select_query = "select * from downloads";
                $result_query = mysqli_query($con,$select_query);
                if($result_query){
                    $serial_number = 1;
                    while($row = mysqli_fetch_assoc($result_query)){
                        $id = $row['id'];
                        $file_name = $row['file_name'];
                        $date = $row['date'];
                        $upload_file = $row['upload_file'];

                        echo '<tr>
                        <td>'. $serial_number .'</td>
                       
                        <td>
                            <a href="./includes/images/download/' . $file_name.'" target="_blank">
                                <button style="border-radius: 5px; padding: 7px 15px; background-color: blue; width: fit-content; text-decoration: none; color: white;">View</button>
                            </a>
                        </td>
                        <td>'. $upload_file .'</td>
                        <td>'. $date .'</td>
                        <td>
                            <button class="btn btn-primary" style="border-radius: 5px; padding: 7px 15px; background-color: blue; width: fit-content">
                                <a href="update_downloads.php?update_id=' . $id . '" class="text-light" style="text-decoration: none; color: white;">Edit</a>
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
            document.location.href = `view_downloads.php?delete_id=${id}`;
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
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];

    // Select query to fetch images associated with the product
    $select_query = "SELECT file_name FROM downloads WHERE id=$id";
    $result_query = mysqli_query($con, $select_query);

    if ($result_query) {
        $row = mysqli_fetch_assoc($result_query);
        $file_name = $row['file_name'];

        // Construct file paths for both images
        $file_path1 = './includes/images/download/' . $file_name;

        // Delete record from the database
        $delete_query = "DELETE FROM downloads WHERE id=$id";
        $result_query = mysqli_query($con, $delete_query);

        if ($result_query) {
            // Delete the image files if they exist
            if (file_exists($file_path1)) {
                unlink($file_path1);
            }
           

            echo "<script>alert('Deleted successfully'); window.location.href = 'view_downloads.php';</script>";
            exit();
        } else {
            echo "<script>alert('Error deleting record'); window.location.href = 'view_downloads.php';</script>";
        }
    } else {
        echo "<script>alert('Error fetching images'); window.location.href = 'view_downloads.php';</script>";
    }
}
?>
<script src="app.js"></script>



