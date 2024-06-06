<?php
include("includes/sidebar.php");
include('./connections/dbconnect.php');

$id = $_GET['update_id'];
$fetch = "SELECT * FROM loans WHERE id=?";
$stmt = mysqli_prepare($con, $fetch);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);

$loan_name = $row['loan_name'];
$loan_description = $row['loan_description'];
$existingImage1 = $row['loan_photo'];

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $new_loan_name = $_POST['loan_name'];
    $new_loan_description = $_POST['loan_description'];

    // Handle image uploads
    $newImage1 = handleFileUpload('loan_photo', $existingImage1);

    if($existingImage1 != $newImage1 || $loan_name != $new_loan_name || $loan_description != $new_loan_description) {
        // Update database with new image filenames
        $update_query = "UPDATE loans SET loan_name=?, loan_description=?, loan_photo=? WHERE id=?";
        $stmt = mysqli_prepare($con, $update_query);
        mysqli_stmt_bind_param($stmt, "sssi", $new_loan_name, $new_loan_description, $newImage1, $id);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            echo "<script>alert('Updated successfully.'); window.location.href='view_loanhome.php';</script>";
        } else {
            echo "<script>alert('Error: Failed to update data.');</script>";
        }
    } else {
        echo "<script>alert('No changes have been made.'); window.location.href='view_loanhome.php';</script>";
    }
}

// Function to handle file upload
function handleFileUpload($fieldName, $existingImage) {
    if (!empty($_FILES[$fieldName]['name'])) {
        $newImage = $_FILES[$fieldName]['name'];
        $tempImage = $_FILES[$fieldName]['tmp_name'];

        // Move the uploaded image
        move_uploaded_file($tempImage, "./includes/images/loan_home/$newImage");

        // Delete the existing image
        if ($existingImage && file_exists("./includes/images/loan_home/$existingImage") && $existingImage !== $newImage) {
            unlink("./includes/images/loan_home/$existingImage");
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
                <label for="loan_photo">Loan Image</label>
                <input type="file" class="form-control-file" id="loan_photo" name="loan_photo">
            </div>
            <div class="form-group">
                <label for="loan_name">Loan Name</label>
                <input type="text" class="form-control" id="loan_name" name="loan_name" value="<?php echo $loan_name; ?>">
            </div>
            <div class="form-group">
                <label for="loan_description">Loan Description</label>
                <input type="text" class="form-control" id="loan_description" name="loan_description" value="<?php echo $loan_description; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</div>
</section>
<script src="app.js"></script>
