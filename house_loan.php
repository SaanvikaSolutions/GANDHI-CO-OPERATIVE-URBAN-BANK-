<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House Loan Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" href="headerimages/bancklogo.png" type="image/x-icon">
    <link rel="stylesheet" href="./footer.css">
    <link rel="stylesheet" href="./header.css">
    <link rel="stylesheet" href="LOANS/sub-loans.css">
    <style>
        .Section_top {
            width: 100%;
            overflow: hidden;
            position: relative;
            background-image: url(LOANS/loan/5.png);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            text-align: center;
            justify-content: center;
            animation: change 20s infinite ease-in-out;
            height: 80vh;
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <header id="top-nav">
        <specia-header></specia-header>
    </header>
    <?php
            include("admin/connections/dbconnect.php");
            $new = $_GET['page'];
            
            $fetct_query = "SELECT * FROM `loans` WHERE id='$new'";
            $result = mysqli_query($con,$fetct_query);
            $row = mysqli_fetch_assoc($result);
            
        ?>
    <div class="Section_top">
        <div class="slider-content">
        <?php
           echo' <script>
                var sectionTopElement = document.querySelector(".Section_top");
                sectionTopElement.style.backgroundImage = "url(./includes/images/loan_home/'.$row['loanpage_banner'].')";
            </script>'
            ?>
        </div>
    </div>
    <div class="personal-container">
        
     
        <?php foreach($result as $row => $header){?>
        <div class="content-container">
            <h2><strong> <?=$header['loan_name']?></strong></h2>
            <p>  <?=$header['about_loan']?>
                 <!-- Borrow up to <strong>Rs. 60,00,000/-    @ 12% (1.00 paisa monthly) </strong>  against your gold assets, with loan amounts based on appraised values.  Repay 
                conveniently over a minimum of 1 year
                and up to 3 years on a monthly interest basis. Plus, with flexible repayment options, you can choose to
                repay monthly or within the specified period. Rest assured, your gold is safe with us, and in case of
                repayment delays, our fair auction process ensures transparent proceedings. Experience convenience,
                flexibility, and trust with Gold Loans from Gandhi Cooperative Urban Bank Ltd <br> <br>
                Take the
                first step towards availing instant funds by applying for a House Loan offered by Gandhi Cooperative
                Bank today! -->
            </p>
        </div>

        <div class="table-container">
            <h2>House Loan Details</h2>
            <table>
                <tbody>
                    <tr>
                        <th>Amount</th>
                        <td>Duration</td>
                    </tr>
                    <tr>
                        <th>Upto 1,00,000/-</th>
                        <td>60 months</td>
                    </tr>
                    <tr>
                        <th>Above 1,00,000/- and Upto 1,50,000/- </th>
                        <td>72 months</td>
                    </tr>
                    <tr>
                        <th>Above 1,50,000/- and Upto 25,00,000/-</th>
                        <td>180 months</td>
                    </tr>
                    <tr>
                        <th>Above 25,00,000/- and Upto 2,00,00,000/-</th>
                        <td>300 months</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Navigation bar -->
    <nav>
        <a href="#features">Features</a>
        <a href="#eligibility">Eligibility</a>
        <a href="#documents">Documents</a>
        <a href="#how-to-apply">How to Apply</a>
        <!-- <a href="#interest-rates">Interest Rates</a> -->
    </nav>

    <div class="Features-container" id="features">
        <h2>House Loan Features</h2>
        <div class="features-container">
            <div class="feature">
                <img src="LOANS/loan/icon1.png" alt="No Collateral Required">
                <p>No Collateral Required</p>
            </div>
            <div class="feature">
                <img src="LOANS/loan/icon2.png" alt="Simple Easy Online Process">
                <p>Simple Easy Online Process</p>
            </div>
            <div class="feature">
                <img src="LOANS/loan/icon3.png" alt="Low Interest Rates">
                <p>Low Interest Rates</p>
            </div>
            <div class="feature">
                <img src="LOANS/loan/icon4.png" alt="Transparent Terms">
                <p>Transparent Terms</p>
            </div>
            <div class="feature">
                <img src="LOANS/loan/icon5.png" alt="Flexible Tenure">
                <p>Flexible Tenure</p>
            </div>
        </div>
    </div>

    <div class="EandD">
        <h1>Eligibility and Documents</h1>
        <div class="eligibility-documents-container">

            <div class="eligibility" id="eligibility">
                <div class="ribbon">Eligibility for  <?=$header['loan_name']?></div>
                <ul> <?=$header['loan_eligibility']?>
                    <!-- <li>Employment: Salaried individuals, self-employed professionals, and business owners are eligible.
                    </li>
                    <ul>
                        <li>Salaried doctors</li>
                        <li>Employees of public and private limited companies</li>
                        <li> Government sector employees including Public Sector Undertaking, Central and Local bodies
                        </li>
                    </ul>
                    <li>Age: Minimum age of 21 years and maximum age of 60 years at the time of loan maturity.</li>
                    <li> Income: Minimum net monthly income requirement, with specific thresholds for different loan
                        products.</li>
                    <li>Credit History: A good credit score and repayment history are preferred.</li>
                    <li>Documentation: Applicants need to provide proof of identity, address, income, and other relevant
                        documents as per bank requirements.</li>
                    <li>Loan Purpose: The loan should be utilized for the intended purpose, such as purchasing a house,
                        construction, renovation, or extension.</li> -->
                </ul>

            </div>
            <div class="documents" id="documents">
                <div class="ribbon">Documents for Personal Loan</div>
                <ul><?=$header['loan_documents']?>
                    <!-- <li>Original Title deeds relating to the House properties.</li>
                    <li>Link documents.</li>
                    <li>Latest Encumbrance Certificate for 13 years.</li>
                    <li> Latest House Tax receipt.</li>
                    <li>Latest passport size 6 Photos.</li>
                    <li>Latest photos (2 Maxi Size) of the House property.</li>
                    <li>Income proof.</li>
                    <li>. Last 3 years IT returns.</li>
                    <li>KYC documents: (any one from the list mentioned below)</li>
                    <ul>
                        <li>PassportPAN Card</li>
                        <li>Driving license</li>
                        <li>Aadhaar Card with date of birth</li>
                        <li>Voters Id</li> -->
                    </ul>
                </ul>
            </div>
        </div>
    </div>



    <div class="apply" id="how-to-apply">
        <h2>How to apply for a House Loan ?</h2>
        <ul><?=$header['apply_loan']?>
            <!-- <li> House Loan  @ 12% (1.00 paisa monthly).</li>
            <li>Visit the House Loan section .</li>
            <li>Provide your House details such as mobile number and either Date of Birth or PANCARD.</li>
            <li>Key in the OTP that you receive on your mobile number</li>
            <li>Give the consent for sharing your details for the purpose of verification of your documents.</li>
            <li>Keep your last six months bank statements and salary slips ready. </li>
            <li>Complete the  KYC process for your loan application to be complete.</li> -->
        </ul>
    </div>
    <?php } ?>
    <special-footer></special-footer>
    <script src="./HeaderFooter.js"></script>
    <script src="hrader.js"></script>
</body>

</html>