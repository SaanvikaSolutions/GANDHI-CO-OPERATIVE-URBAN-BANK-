<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gandhi Cooperative Bank - Careers</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" href="headerimages/bancklogo.png" type="image/x-icon">
    <link rel="stylesheet" href="./footer.css">
    <link rel="stylesheet" href="./header.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }

        .banner {
            background-image: url('./images/career-lader.jpg');
            background-size: cover;
            background-position: center;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .banner h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .banner p {
            font-size: 1.5rem;
            margin-bottom: 2rem;
        }

        .job-application {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .stage {
            display: none;
            margin-bottom: 40px;
        }

        .stage.active {
            display: block;
        }

        .stage h3 {
            font-weight: bold;
            margin-bottom: 20px;
            color: #1e4f8c;
            text-align: center;
            font-size: x-large;
        }

        .form-group {
            margin-bottom: 30px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="date"],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="tel"]:focus,
        input[type="date"]:focus,
        select:focus,
        textarea:focus {
            border-color: #1e4f8c;
            outline: none;
        }

        input[type="file"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        textarea {
            resize: vertical;
        }

        button {
            padding: 12px 24px;
            background-color: #1e4f8c;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-size: 16px;
        }

        button:hover {
            background-color: #173a67;
        }

        button.goBack {
            background-color: #ccc;
            color: #333;
            margin-right: 10px;
        }

        button.goBack:hover {
            background-color: #999;
        }

        h2 {
            color: #1e4f8c;
            text-align: center;
        }
    </style>
</head>

<body>
    <header id="top-nav">
        <specia-header></specia-header>
    </header>

    <div class="banner">
        <div>
            <h1>Join Our Winning Team</h1>
            <p>Explore exciting career opportunities at Gandhi Cooperative Bank.</p>
        </div>
    </div>

    <section class="job-application">
        <!-- <h2>Apply for a Position</h2> -->
        <div id="stage1" class="stage active">
            <h3>Which job role & location excites you?</h3>
            <form id="stage1-form"  method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="department">Preferred Department</label>
                    <select id="department" name="department" required>
                        <option value="">Select Department</option>
                        <option value="Finance">Finance</option>
                        <option value="Customer Service">Customer Service</option>
                        <option value="Technology">Technology</option>
                    </select>
                </div>
                <div class="form-group">
                <label for="location">Preferred Location</label>
                    <select id="department" name="department" required>
                        <option value="">Select Location</option>
                        <option value="HEAD OFFICE">Head Office</option>
                        <option value="PATAMATA BRANCH">Patamata Branch</option>
                        <option value="VUYYURU BRANCH">Vuyyuru Branch</option>
                        <option value="AZITSINGHNAGAR BRANCH">Azitsinghnagar Branch</option>
                        <option value="BHAVANIPURAM BRANCH">Bhavanipuram Branch</option>
                        <option value="HANUMAN JUNCTION BRANCH">Hanuman Junction Branch</option>
                        <option value="MYLAVARAM BRANCH">Mylavaram Branch</option>
                        <option value="NUZIVIDU BRANCH">Nuzividu Branch</option>
                        <option value="RAMAVARAPPADU BRANCH">Ramavarappadu Branch</option>
                        <option value="SATYA NARAYANAPURAM BRANCH">Satya Narayanapuram Branch</option>
                        <option value="GUNTUR BRANCH">Guntur Branch</option>
                    </select>

                    <!-- <label for="location">Preferred Location</label>
                    <input type="text" id="location" name="location" required> -->
                </div>
                <button type="button" onclick="nextStage(1)">Next</button>
            <!-- </form> -->
        </div>
        <div id="stage2" class="stage"> 
            <h3>Could you tell us about yourself?</h3>
            <!-- <form id="stage2-form"  method="post" > -->
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select id="gender" name="gender" required>
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" id="dob" name="dob" required>
                </div>
                <div class="form-group">
                    <label for="experience">Are you a fresher or experienced?</label>
                    <select id="experience" name="experience" required>
                        <option value="">Select</option>
                        <option value="Fresher">Fresher</option>
                        <option value="Experienced">Experienced</option>
                    </select>
                </div>
                <button type="button" onclick="prevStage(2)">Go Back</button>
                <button type="button" onclick="nextStage(2)">Next</button>
            <!-- </form> -->
        </div>
        <div id="stage3" class="stage">
            <h3> How can we get in touch with you?</h3>
            <!-- <form id="stage3-form"  method="post"  enctype="multipart/form-data"> -->
                <div class="form-group">
                    <label for="cv">Upload CV</label>
                    <input type="file" id="cv" name="cv" accept=".pdf,.doc,.docx" required>
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile Number</label>
                    <input type="tel" id="mobile" name="number" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <button type="button" onclick="prevStage(3)">Go Back</button>
                <button type="submit">Submit Application</button>
            </form>
        </div>
    </section>

    <script>
        let currentStage = 1;

        function nextStage(stage) {
            if (stage === currentStage && stage < 3) {
                document.getElementById(`stage${stage}`).classList.remove('active');
                currentStage++;
                document.getElementById(`stage${currentStage}`).classList.add('active');
            }
        }

        function prevStage(stage) {
            if (stage === currentStage && stage > 1) {
                document.getElementById(`stage${stage}`).classList.remove('active');
                currentStage--;
                document.getElementById(`stage${currentStage}`).classList.add('active');
            }
        }
    </script>

    <special-footer></special-footer>
    <script src="./HeaderFooter.js"></script>
    <script src="hrader.js"></script>
</body>

</html>



<?php
include('admin/connections/dbconnect.php');

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $department = $_POST['department'] ?? '';
    $location = $_POST['location'] ?? '';
    $name = $_POST['name'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $dob = $_POST['dob'] ?? '';
    $experience = $_POST['experience'] ?? '';
    $number = $_POST['number'] ?? '';
    $email = $_POST['email'] ?? '';

    // File upload handling
    if (isset($_FILES['cv'])) {
        $cv = $_FILES['cv']['name'];
        $temp_cv = $_FILES['cv']['tmp_name'];

        // Move uploaded file
        $upload_dir = './admin/includes/images/career/';
        $cv_path = $upload_dir . $cv;

        if (move_uploaded_file($temp_cv, $cv_path)) {
            // Query to insert data
            $insert_query = "INSERT INTO `career` (department, location, name, gender, dob, experience, cv, number, email) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_prepare($con, $insert_query);

            if ($stmt) {
                mysqli_stmt_bind_param($stmt, "sssssssis", $department, $location, $name, $gender, $dob, $experience, $cv, $number, $email);
                $result = mysqli_stmt_execute($stmt);

                if ($result) {
                    echo "<script>alert('Inserted successfully.')</script>";
                } else {
                    echo "<script>alert('Error: " . mysqli_error($con) . "')</script>";
                }
            } else {
                echo "<script>alert('Error preparing statement.')</script>";
            }
        } else {
            echo "<script>alert('Error moving file.')</script>";
        }
    } else {
        echo "<script>alert('No file uploaded.')</script>";
    }
}
?>