<?php
include("includes/sidebar.php");
include('./connections/dbconnect.php');

$id = $_GET['update_id'];
$fetch = "SELECT * FROM home WHERE id=?";
$stmt = mysqli_prepare($con, $fetch);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);

$existingImage = $row['banner_image'];

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $newImage = handleFileUpload('home_banner_image', $existingImage);

    // Check if there is a change in the image
    if ($existingImage != $newImage) {
        // Update database with new image filename
        $update_query = "UPDATE home SET banner_image=? WHERE id=?";
        $stmt = mysqli_prepare($con, $update_query);
        mysqli_stmt_bind_param($stmt, "si", $newImage, $id);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            echo "<script>alert('Updated successfully.'); window.location.href='index.php';</script>";
        } else {
            echo "<script>alert('Error: Failed to update data.');</script>";
        }
    } else {
        echo "<script>alert('No changes have been made.'); window.location.href='index.php';</script>";
    }
}

// Function to handle file upload
function handleFileUpload($fieldName, $existingImage) {
    if (!empty($_FILES[$fieldName]['name'])) {
        $newImage = $_FILES[$fieldName]['name'];
        $tempImage = $_FILES[$fieldName]['tmp_name'];

        // Move the uploaded image
        move_uploaded_file($tempImage, "./includes/images/home_banner/$newImage");

        // Delete the existing image if it's different from the new one
        if ($existingImage && file_exists("./includes/images/home_banner/$existingImage") && $existingImage !== $newImage) {
            unlink("./includes/images/home_banner/$existingImage");
        }
        return $newImage;
    } else {
        // If no new image uploaded, retain the existing image
        return $existingImage;
    }
}
?>


<?php
include('./connections/dbconnect.php');

?>

<div class="content-wrapper">
    <div class="update-container" id="update-container-id">
        <h2>Update</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="home_banner_image">Home Banner Image</label>
                <input type="file" class="form-control-file" id="home_banner_image" name="home_banner_image">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>


</div>
</section>
<script src="app.js"></script>

