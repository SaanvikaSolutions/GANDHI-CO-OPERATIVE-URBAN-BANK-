<?php 
include("includes/sidebar.php");
include('./connections/dbconnect.php');
?>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $home_banner_image = $_FILES['home_banner_image']['name'];
    $temp_file1 = $_FILES['home_banner_image']['tmp_name'];

    //move uploaded file
    move_uploaded_file($temp_file1,"./includes/images/home_banner/$home_banner_image");

    //insert query
    $insert_query = "insert into home(banner_image) values(?)";
    $stmt = mysqli_prepare($con,$insert_query);

    mysqli_stmt_bind_param($stmt,"s",$home_banner_image);
    $result_query = mysqli_stmt_execute($stmt);

    if($result_query){
        echo "<script>alert('Inserted successfully.'); window.location.href = 'index.php';</script>";
        exit();
    }else{
        echo "<script>alert('Error: " . mysqli_error($con) . "')</script>";
    }
}
?>

<div class="orders-container" id="table-container1">
    <div class="orders-header ">
        <h1>Home Page Banner</h1>

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
                <th>Banner Images</th>
                <th>Time</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $select_query = "select * from home";
                $result_query = mysqli_query($con,$select_query);
                if($result_query){
                    $serial_number = 1;
                    while($row = mysqli_fetch_assoc($result_query)){
                        $id = $row['id'];
                        $home_banner_image = $row['banner_image'];
                        $date = $row['date'];

                        echo '<tr>
                        <td>'. $serial_number .'</td>
                        <td><img src="./includes/images/home_banner/' . $home_banner_image . '" alt="file" target="_blank" width="50px"></td>
                        <td>'. $date .'</td>
                        <td>
                            <button class="btn btn-primary" style="border-radius: 5px; padding: 7px 15px; background-color: blue; width: fit-content">
                                <a href="update_home.php?update_id=' . $id . '" class="text-light" style="text-decoration: none; color: white;">Edit</a>
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
            document.location.href = `index.php?delete_id=${id}`;
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
<script src="app.js"></script>



