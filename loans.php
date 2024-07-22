<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Loans</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" href="headerimages/bancklogo.png" type="image/x-icon">
    <link rel="stylesheet" href="./footer.css">
    <link rel="stylesheet" href="./header.css">
    <link rel="stylesheet" href="LOANS/loans.css">
</head>

<body>
    <header id="top-nav">
        <specia-header></specia-header>
    </header>
    <div class="slider-container">
        <div class="slide">
            <img src="LOANS/loan/8.png" alt="">
        </div>
        <div class="slide">
            <img src="LOANS/loan/9.png" alt="">
        </div>
        <div class="slide">
            <img src="LOANS/loan/11.png" alt="">
        </div>
        <div class="slide">
            <img src="LOANS/loan/Against Deposits.png" alt="">
        </div>
        <div class="slide">
            <img src="LOANS/loan/5.png" alt="">
        </div>
    </div>
    <div class="loans">
        <h1>Loans</h1>
        <p>Discover a diverse selection of loan options tailored to suit your financial needs, each offering competitive
            interest rates and flexible repayment terms. Whether you're planning for a new home, a car, education, or
            personal ventures, we have the perfect loan solution for you.</p>
        <p>Choose the loan option that best matches your financial goals and embark on your journey towards new
            beginnings with confidence. Let us partner with you to make your dreams a reality.</p>
    </div>
   <div class="loan-container">
         <!-- <div class="loan-card">
            <img src="LOANS/loan/personal-loan_2.jpg" alt="Personal Loan">
            <h2>Personal Loan</h2>
            <p>Get the financial flexibility you need to achieve your goals with our personal loans. Our competitive
                interest rates and flexible repayment terms make it easy to customize your loan to fit your unique
                needs.</p>
            <a href="personal-loan.html" class="btn-know-more">Know More</a>
            <a href="loan-applynow.html" class="btn-apply-now">Apply Now</a>
        </div> -->

        <?php
include('admin/connections/dbconnect.php');

$fetct_query = "SELECT * FROM `loans`";
$result = mysqli_query($con, $fetct_query);

while ($row = mysqli_fetch_assoc($result)) {
    $pgt = $row['id'];
    echo '<div class="loan-card">
            <img src="admin/includes/images/loan_home/' . htmlspecialchars($row["loan_photo"], ENT_QUOTES, 'UTF-8') . '" alt="Home Loan">
            <h2>' . htmlspecialchars($row["loan_name"], ENT_QUOTES, 'UTF-8') . '</h2>
            <p>' . htmlspecialchars($row["loan_description"], ENT_QUOTES, 'UTF-8') . '</p>
            <a href="house_loan.php?page=' . urlencode($pgt) . '" class="btn-know-more">Know More</a>
            <a href="apply.php" class="btn-apply-now">Apply Now</a>
        </div>';
}
?>

      
         <!-- <div class="loan-card">
            <img src="LOANS/loan/car-loan_2.jpg" alt="Car Loan">
            <h2>Car Loan</h2>
            <p>Experience the joy of owning your own car with our easy and convenient car loan option that provide you
                with the funding you need to get behind the wheel.</p>
            <a href="car-loan.html" class="btn-know-more">Know More</a>
            <a href="loan-applynow.html" class="btn-apply-now">Apply Now</a>
        </div> -->
        <!-- <div class="loan-card">
            <img src="LOANS/loan/EducationLoan.jpg" alt="Car Loan">
            <h2>Education Loan</h2>
            <p>With competitive interest rates and flexible repayment options, our loans make it easy to pursue higher
                education in India or abroad.</p>
            <a href="education.html" class="btn-know-more">Know More</a>
            <a href="loan-applynow.html" class="btn-apply-now">Apply Now</a>
        </div>
        <div class="loan-card">
            <img src="LOANS/loan/gold.jpg" alt="Car Loan">
            <h2>Gold Loan</h2>
            <p>Get the financial flexibility you need to achieve your goals with our personal loans. Our competitive
                interest rates and flexible repayment terms make it easy to customize your loan to fit your unique
                needs.</p>
            <a href="gold_loan.html" class="btn-know-more">Know More</a>
            <a href="loan-applynow.html" class="btn-apply-now">Apply Now</a>
        </div> -->
        <!-- <div class="loan-card">
            <img src="LOANS/loan/rural-vehicle-finance.jpg" alt="Car Loan">
            <h2>
                Vegetables & flowery culture Loan</h2>
            <p>We provide comprehensive funding solutions tailored to meet the needs of the agricultural community,
                offering financial support for an extensive array of farming equipment.</p>
            <a href="vegnflower-loan.html" class="btn-know-more">Know More</a>
            <a href="loan-applynow.html" class="btn-apply-now">Apply Now</a>
        </div>
        <div class="loan-card">
            <img src="LOANS/loan/two-wheeler-loan_1.jpg" alt="Car Loan">
            <h2>Two-Wheeler Loan</h2>
            <p>With our easy and flexible financing options, you can now ride your dream bike without any financial
                worries.</p>
            <a href="two-weeler-loan.html" class="btn-know-more">Know More</a>
            <a href="loan-applynow.html" class="btn-apply-now">Apply Now</a>
        </div> -->
        <!-- <div class="loan-card">
            <img src="LOANS/loan/easygain-overdraft_1.jpg" alt="Car Loan">
            <h2>Against Deposits Loan</h2>
            <p>Earn interest on your deposit while you enjoy overdraft with EasyGain Overdraft.</p>
            <a href="Against-Deposits-Loans.html" class="btn-know-more">Know More</a>
            <a href="loan-applynow.html" class="btn-apply-now">Apply Now</a>
        </div>
        <div class="loan-card">
            <img src="LOANS/loan/RBL_BusinessLoan.jpg" alt="Car Loan">
            <h2>Business Loan</h2>
            <p>Unlock your business's potential with our personalized loan solutions. Enjoy competitive interest rates
                and flexible terms tailored to your specific financial needs.</p>
            <a href="business-loan.html" class="btn-know-more">Know More</a>
            <a href="loan-applynow.html" class="btn-apply-now">Apply Now</a>
        </div> -->
    </div>
    <special-footer></special-footer>
    <script src="./HeaderFooter.js"></script>
    <script src="hrader.js"></script>
    <script>
        let slideIndex = 0;
     sliderfunc();

     function sliderfunc(){
         let i;
         let slider = document.getElementsByClassName("slide");
         for(i=0; i< slider.length; i++){
             slider[i].style.display="none";
         }
         slideIndex++;
         if (slideIndex > slider.length) {slideIndex=1}
         slider[slideIndex-1].style.display="block";
         setTimeout(sliderfunc, 2000);

     }
 </script>
</body>

</html>