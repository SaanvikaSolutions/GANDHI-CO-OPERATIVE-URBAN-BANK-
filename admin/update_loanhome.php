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
$fetch = "SELECT * FROM loans WHERE id=?";
$stmt = mysqli_prepare($con, $fetch);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);

$loan_name = $row['loan_name'];
$loan_description = $row['loan_description'];
$existingImage1 = $row['loan_photo'];
$existingImage2 = $row['loanpage_banner'];
$loan_about = $row['about_loan'];
$loan_eligibility = $row['loan_eligibility'];
$loan_docs = $row['loan_documents'];
$loan_apply = $row['apply_loan'];


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $new_loan_name = $_POST['loan-name'];
    // $new_loan_banner = $_POST['loanpage_banner'];
    $new_loan_description = $_POST['loan-discription'];
    $new_loan_about = $_POST['loan-about'];
    $new_loan_eligibility = $_POST['loan-eligibility'];
    $new_loan_docs = $_POST['loan-docs'];
    $new_loan_apply = $_POST['loan-apply'];

    // Handle image uploads
    $newImage1 = handleFileUpload('loan_photo', $existingImage1);
    $newImage2 = handleFileUpload('loanpage_banner', $existingImage2);

    if($existingImage1 != $newImage1 || $existingImage2 != $newImage2 || $loan_name != $new_loan_name || $loan_description != $new_loan_description ||
     $loan_about != $new_loan_about || $loan_eligibility != $new_loan_eligibility || $loan_docs != $new_loan_docs || $loan_apply != $new_loan_apply) {
        // Update database with new image filenames
        $update_query = "UPDATE loans SET loan_name=?, loan_description=?, loan_photo=?, about_loan=?, loan_eligibility=?, loan_documents=?, apply_loan=?, loanpage_banner=?  WHERE id=?";
        $stmt = mysqli_prepare($con, $update_query);
        mysqli_stmt_bind_param($stmt, "ssssssssi", $new_loan_name, $new_loan_description, $newImage1,  $new_loan_about , $new_loan_eligibility, $new_loan_docs, $new_loan_apply,  $newImage2, $id);
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
        <h1>Loans Home Page</h1> <br>
        <form  method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="loan-image">Loan Image</label>
                <input type="file" class="form-control-file" id="loan-image" name="loan-image"
                    accept="image" >
            </div>
            <div class="form-group">
                <label for="loan-name">Loan Name</label>
            <div class="form-group">
                <input class="form-control-file" id="loan-name" name="loan-name" rows="3"><?php echo $loan_name; ?></input>
            </div>
            <div class="form-group">
                <label for="loan-discription">Loan Discription</label>
                <textarea class="form-control-file" id="loan-discription" name="loan-discription" rows="3"><?php echo $loan_description; ?></textarea>
            </div>
            <div class="form-group">
                <label for="loanpage_banner">Loan Banner Image </label>
                <input type="file" class="form-control-file" id="loanpage_banner" name="loanpage_banner"
                    accept="image">
            </div>
            <div class="form-group">
                <label for="loan-about">About Loan </label>
                <textarea class="form-control-file" id="loan-about" name="loan-about" rows="3"><?php echo $loan_about; ?></textarea>
            </div>
            <div class="form-group">
                <label for="loan-eligibility">Loan Eligibility</label>
                <textarea class="form-control-file" id="loan-eligibility" name="loan-eligibility" rows="3"><?php echo $loan_eligibility; ?></textarea>
            </div>
            <div class="form-group">
                <label for="loan-docs">Loan required Documents</label>
                <textarea class="form-control-file" id="loan-docs" name="loan-docs" rows="3"><?php echo $loan_docs; ?></textarea>
            </div>
            <div class="form-group">
                <label for="loan-apply">How to Apply for Loan </label>
                <textarea class="form-control-file" id="loan-apply" name="loan-apply" rows="3"><?php echo $loan_apply; ?></textarea>
            </div>
           

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <br><br><br>
   
</div>
</section>
<script>
        ClassicEditor
            .create(document.querySelector('#loan-about'), {
                toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedlist', 'outdent', 'indent', 'imageUpload', 'blockQuote', 'insertTable', 'mediaEmbed', 'undo', 'redo']
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#loan-eligibility'), {
                toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedlist', 'outdent', 'indent', 'imageUpload', 'blockQuote', 'insertTable', 'mediaEmbed', 'undo', 'redo']
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#loan-docs'), {
                toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedlist', 'outdent', 'indent', 'imageUpload', 'blockQuote', 'insertTable', 'mediaEmbed', 'undo', 'redo']
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#loan-apply'), {
                toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedlist', 'outdent', 'indent', 'imageUpload', 'blockQuote', 'insertTable', 'mediaEmbed', 'undo', 'redo']
            })
            .catch(error => {
                console.error(error);
            });
    </script>
<script src="app.js"></script>
