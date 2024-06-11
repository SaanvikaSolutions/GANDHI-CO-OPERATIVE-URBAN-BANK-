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

$id = $_GET['update_id'];
$fetch = "SELECT * FROM auctions WHERE id=?";
$stmt = mysqli_prepare($con, $fetch);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);

$file_name = $row['file_name'];
$existingImage1 = $row['upload_file'];

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $new_file_name = $_POST['file_name'];

    // Handle image uploads
    $newImage1 = handleFileUpload('upload_file', $existingImage1);

    if($existingImage1 != $newImage1 || $file_name != $new_file_name ) {
        // Update database with new image filenames
        $update_query = "UPDATE auctions SET upload_file=?, file_name=? WHERE id=?";
        $stmt = mysqli_prepare($con, $update_query);
        mysqli_stmt_bind_param($stmt, "ssi",  $new_file_name,  $newImage1, $id);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            echo "<script>alert('Updated successfully.'); window.location.href='view_auctions.php';</script>";
        } else {
            echo "<script>alert('Error: Failed to update data.');</script>";
        }
    } else {
        echo "<script>alert('No changes have been made.'); window.location.href='view_auctions.php';</script>";
    }
}

// Function to handle file upload
function handleFileUpload($fieldName, $existingImage) {
    if (!empty($_FILES[$fieldName]['name'])) {
        $newImage = $_FILES[$fieldName]['name'];
        $tempImage = $_FILES[$fieldName]['tmp_name'];

        // Move the uploaded image
        move_uploaded_file($tempImage, "./includes/images/auctions/$newImage");

        // Delete the existing image
        if ($existingImage && file_exists("./includes/images/auctions/$existingImage") && $existingImage !== $newImage) {
            unlink("./includes/images/auctions/$existingImage");
        }
        return $newImage;
    } else {
        // If no new image uploaded, retain the existing image
        return $existingImage;
    }
}
?>

<div class="content-wrapper"> 
    <!-- /.content-header -->
    <div class="update-container" id="update-container-id" >
        <h2>Update</h2>
        <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
                <label for="file_name">File Name</label>
                <input type="text" class="form-control" id="file_name" name="file_name" value="<?php echo $existingImage1; ?>">
            </div>
            <div class="form-group">
                <label for="upload_file">Upload PDF File</label>
                <input type="file" class="form-control-file" id="upload_file" name="upload_file">
            </div>         
           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</div>
</section>
<script src="app.js"></script>
