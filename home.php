<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="MFitness reponsive webite build using HTML5, CSS3 and Javascript The complete layout of the page is build using grid layout and flexbox with some cool animations." />
    <title>GANDHI CO-OPERATIVE URBAN BANK LTD</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" href="./headerimages/bancklogo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./header.css">
    <link rel="stylesheet" href="./footer.css">
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
    <header id="top-nav">
        <specia-header></specia-header>
    </header>
    <main>

        <!-- HERO SECTION -->
        <section class="slider-container">
            <!-- <div class="slider-container"> -->

                <?php 
                include("admin/connections/dbconnect.php");
                  $home_query = "Select * from `home`";
                  $home_result = mysqli_query($con,$home_query);
                  foreach ($home_result as $row => $header) : ?>
            <div class="slide">
                <img src="admin/includes/images/home_banner/<?= $header['banner_image'] ?>" alt="">
            </div>
            <?php endforeach; ?>

            <!-- <div class="slide">
                <img src="homepage/17.png" alt="">
            </div>
            <div class="slide">
                <img src="homepage/19.png" alt="">
            </div>
            <div class="slide">
                <img src="homepage/22.png" alt="">
            </div>
            <div class="slide">
                <img src="homepage/23.png" alt="">
            </div> -->

    
        </section>


        <!-- SECTION ABOUT -->
        <section class="section-about" id="about">
            <div class="about-box container">
                <div class="about-box__content" data-aos="fade-up">
                    <h2 class="heading heading--2">
                        WELCOME TO <br>
                        <span class="yellow">G</span>ANDHI CO-OPERATIVE BANK
                    </h2>
                    <p>
                        96 years in service, with the spirit of the Cooperation, the Bank is growing day by day from its
                        formation, gaining trust of the Depositors by providing Safety and Security to their funds
                        deposited in the Bank and lending to lower and middle class people to provide financial
                        assistance for their development.
                    </p>
                    <a href="AboutUs.html" class="link-button" style="color: black;">Read More →</a>

                </div>
                <figure class="about-box__image" data-aos="fade-up">
                    <img src="homepage/home.avif" alt="about-image-one" width="350" height="233" />
                    <img src="homepage/intrestrate.jpg" alt="about-image-twwo" width="350" height="233" />
                    <img src="homepage/money.jpg" alt="about-image-three" width="420" height="280" />
                </figure>
            </div>
        </section>

        <!-- SECTION COURSES -->
        <section class="section-courses" id="courses">
            <div class="container courses-box" data-aos="fade-up">
                <header class="courses-heading">
                    <h2 class="heading heading--2 underline">LOANS</h2>
                    <p>
                        At GANDHI CO-OPERATIVE BANK , we believe your journey should continue without any speed bumps.
                        This is why we
                        bring you customized Bank Loans at competitive interest rates. To get started, check your loan
                        eligibility using our simple loan calculators. You can submit your Bank Loan application 
                        in three easy steps and avail the most attractive interest rates and comfortable repayment
                        tenures.
                    </p>
                </header>

                <article class="courses-content">
                    <div class="class-card">
                        <img class="class-card__img" src="homepage/home.avif" alt="body building course" width="550"
                            height="550" />

                        <div class="class-card__overlay">
                            <div class="text">
                                <p>
                                    Unlock your dream home: Access flexible financing options, personalized support.
                                </p>

                                <a href="house_loan.php" class="link-button">Read More →</a>
                            </div>
                        </div>

                        <div class="class-card__title">House Loans</div>
                    </div>

                    <div class="class-card">
                        <img class="class-card__img" src="homepage/gold.avif" alt="cross fit course" width="550"
                            height="550" />
                        <div class="class-card__overlay">
                            <div class="text">
                                <p>
                                    Empower your financial journey: Secure funds with your gold assets
                                </p>

                                <a href="gold_loan.php" class="link-button">Read More →</a>
                            </div>
                        </div>
                        <div class="class-card__title">Gold Loan </div>
                    </div>

                    <!-- <div class="class-card">
                        <img class="class-card__img" src="homepage/education.jpg" alt="gymnastic course" width="550"
                            height="550" />

                        <div class="class-card__overlay">
                            <div class="text">
                                <p>
                                    "Invest in your future: Fulfill academic aspirations with tailored loan solutions."
                                </p>

                                <a href="education.html" class="link-button">Read More →</a>
                            </div>
                        </div>

                        <div class="class-card__title">
                            Education Loans</div>
                    </div> -->

                    <!-- <div class="class-card">
                        <img class="class-card__img" src="homepage/Vehicle-laon.avif" alt="fitness course" width="550"
                            height="550" />
                        <div class="class-card__overlay">
                            <div class="text">
                                <p>
                                    Hit the road with ease: Drive off in your dream vehicle
                                </p>

                                <a href="car-loan.html" class="link-button">Read More →</a>
                            </div>
                        </div>
                        <div class="class-card__title">Car Loans</div>
                    </div> -->

                    <div class="class-card">
                        <img class="class-card__img" src="homepage/trader.webp" alt="fitness course" width="550"
                            height="550" />
                        <div class="class-card__overlay">
                            <div class="text">
                                <p>
                                    Fuel your business ambitions: Access tailored financing for small traders.
                                </p>

                                <a href="business-loan.html" class="link-button">Read More →</a>
                            </div>
                        </div>
                        <div class="class-card__title">Business Loans</div>
                    </div>

                    <div class="class-card">
                        <img class="class-card__img" src="homepage/deposite.jpg" alt="fitness course" width="550"
                            height="550" />
                        <div class="class-card__overlay">
                            <div class="text">
                                <p>
                                    "Maximize your assets: Unlock liquidity with hassle-free deposit-backed loans."
                                </p>

                                <a href="Against-Deposits-Loans.html" class="link-button">Read More →</a>
                            </div>
                        </div>
                        <div class="class-card__title">Against Deposits Loans</div>
                    </div>
                    <!-- <div class="class-card">
                        <img class="class-card__img" src="homepage/TW-2.png" alt="fitness course" width="550"
                            height="550" />
                        <div class="class-card__overlay">
                            <div class="text">
                                <p>
                                    "Two Wheeler Financing: Easy loans for your dream ride.""
                                </p>

                                <a href="two-weeler-loan.html" class="link-button">Read More →</a>
                            </div>
                        </div>
                        <div class="class-card__title">Two Wheeler Loans</div>
                    </div> -->
                    <!-- <div class="class-card">
                        <img class="class-card__img" src="homepage/personal.webp" alt="fitness course" width="550"
                            height="550" />
                        <div class="class-card__overlay">
                            <div class="text">
                                <p>
                                    ""Gandhi Cooperative Bank offers flexible and competitive personal loan solutions.""
                                </p>

                                <a href="personal-loan.html" class="link-button">Read More →</a>
                            </div>
                        </div>
                        <div class="class-card__title">Personal Loans</div>
                    </div> -->
                    <!-- <div class="class-card">
                        <img class="class-card__img" src="homepage/agriculture.jpg" alt="fitness course" width="550"
                            height="550" />
                        <div class="class-card__overlay">
                            <div class="text">
                                <p>
                                    "Gandhi Bank offers loans for vegetable and flower cultivation."
                                </p>

                                <a href="vegnflower-loan.html" class="link-button">Read More →</a>
                            </div>
                        </div>
                        <div class="class-card__title">Agriculture Loans</div>
                    </div> -->
                </article>
            </div>
        </section>

        <!-- SECTION OFFER -->
        <section class="section-offer" id="offer">
            <div class="offer-box">
                <div class="offer" data-aos="fade-up">
                    <h2 class="heading heading--2 margin-bottom">
                        Explore Our Extensive Branch Network and Service Locations
                    </h2>
                    <p class="margin-bottom">
                        Discover Our Convenient Branch Locations Near You for Expert Assistance!"
                    </p>
                    <a href="Branch.html"><button class="btn btn__primary">Explore Branches</button></a>
                </div>

                <div class="offer-img"></div>
            </div>
        </section>

        <!-- SECTION COACHES -->
        <section class="section-coaches" id="trainers">
            <div class="container coaches-box" data-aos="fade-up">
                <header class="coache-heading">
                    <h2 class="heading heading--2 underline margin-bottom">
                        OUR SERVICES
                    </h2>
                    <p>
                        "Discover tailored solutions and personalized support at our bank. From loans to investments,
                        we're here to empower your financial goals with expertise and dedication. Experience excellence
                        with us today.
                    </p>
                </header>

                <article class="coache-content">
                    <div class="c-card">
                        <img src="BANK SERVICES/images/Recurring deposit.jpg" alt="coache one" class="c-card__img"
                            width="550" height="550" />

                        <!-- <div class="overlay">
                            <img src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/logo-whatsapp.svg"
                                alt="whatsapp-icon" width="30" height="30" />

                            <img src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/logo-facebook.svg"
                                alt="facebook-icon" width="30" height="30" />

                            <img src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/logo-instagram.svg"
                                alt="instagram-icon" width="30" height="30" />

                            <img src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/logo-twitter.svg"
                                alt="twitter-icon" width="30" height="30" />
                        </div> -->

                        <div class="c-card__content">
                            <p class="c-name">RECURRING DEPOSITS</p>
                            <p class="c-title">deposits</p>
                        </div>
                    </div>

                    <div class="c-card">
                        <img src="BANK SERVICES/images/rd banner.webp" alt="coache one" class="c-card__img" width="550"
                            height="550" />

                        <!-- <div class="overlay">
                            <img src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/logo-whatsapp.svg"
                                alt="whatsapp-icon" width="30" height="30" />

                            <img src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/logo-facebook.svg"
                                alt="facebook-icon" width="30" height="30" />

                            <img src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/logo-instagram.svg"
                                alt="instagram-icon" width="30" height="30" />

                            <img src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/logo-twitter.svg"
                                alt="twitter-icon" width="30" height="30" />
                        </div> -->

                        <div class="c-card__content">
                            <p class="c-name">FIXED DEPOSITS</p>
                            <p class="c-title">deposits</p>
                        </div>
                    </div>

                    <!-- <div class="c-card">
                        <img src="BANK SERVICES/images/nri banner.png" alt="coache one" class="c-card__img" width="550"
                            height="550" />

                        <div class="overlay">
                            <img src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/logo-whatsapp.svg"
                                alt="whatsapp-icon" width="30" height="30" />

                            <img src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/logo-facebook.svg"
                                alt="facebook-icon" width="30" height="30" />

                            <img src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/logo-instagram.svg"
                                alt="instagram-icon" width="30" height="30" />

                            <img src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/logo-twitter.svg"
                                alt="twitter-icon" width="30" height="30" />
                        </div>

                        <div class="c-card__content">
                            <p class="c-name">NRI FIXED DEPOSITS</p>
                            <p class="c-title">deposits</p>
                        </div>
                    </div> -->

                    <div class="c-card">
                        <img src="BANK SERVICES/images/locker.png" alt="coache three" class="c-card__img" width="550"
                            height="550" />
                        <!-- <div class="overlay">
                            <img src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/logo-whatsapp.svg"
                                alt="whatsapp-icon" width="30" height="30" />

                            <img src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/logo-facebook.svg"
                                alt="facebook-icon" width="30" height="30" />

                            <img src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/logo-instagram.svg"
                                alt="instagram-icon" width="30" height="30" />

                            <img src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/logo-twitter.svg"
                                alt="twitter-icon" width="30" height="30" />
                        </div> -->

                        <div class="c-card__content">
                            <p class="c-name">SAFE DEPOSIT LOCKERS</p>
                            <p class="c-title">locker</p>
                        </div>
                    </div>

                    <div class="c-card">
                        <img src="BANK SERVICES/images/current.webp" alt="coache three" class="c-card__img" width="550"
                            height="550" />
                        <!-- <div class="overlay">
                            <img src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/logo-whatsapp.svg"
                                alt="whatsapp-icon" width="30" height="30" />

                            <img src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/logo-facebook.svg"
                                alt="facebook-icon" width="30" height="30" />

                            <img src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/logo-instagram.svg"
                                alt="instagram-icon" width="30" height="30" />

                            <img src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/logo-twitter.svg"
                                alt="twitter-icon" width="30" height="30" />
                        </div> -->

                        <div class="c-card__content">
                            <p class="c-name">CURRENT ACCOUNT</p>
                            <p class="c-title">Account</p>
                        </div>
                    </div>
                    
                    
                </article>
            </div>
        </section>
        <!-- ----------------------------------------calc banner----------------------------------- -->

        <!-- /New code/ -->
        <div class="CALC-BANNER">
        </div>
      
        <!-- // -->

        <!-- -------------------------------------------calc banner end---------------------------------------->

        <!-- ------------------------------------------------------LOAN CAlculator ---------------------------------------------------------------------------- -->
        <div class="loan-calculator">
            <div class="top">

                <h2>EMI Calculator</h2>

                <form action="#">
                    <div class="group">
                        <div class="title">Amount</div>
                        <input type="text" value="10000" class="loan-amount" />
                    </div>

                    <div class="group">
                        <div class="title">Interest Rate</div>
                        <input type="text" value="8.50" class="interest-rate" />
                    </div>

                    <div class="group">
                        <div class="title">Tenure (in months)</div>
                        <input type="text" value="24" class="loan-tenure" />
                    </div>
                </form>
            </div>

            <div class="result">
                <div class="left">
                    <div class="loan-emi">
                        <h3>Loan EMI</h3>
                        <div class="value">123</div>
                    </div>

                    <div class="total-interest">
                        <h3>Total Interest Payable</h3>
                        <div class="value">1234</div>
                    </div>

                    <div class="total-amount">
                        <h3>Total Amount</h3>
                        <div class="value">12345</div>
                    </div>

                    <button class="calculate-btn">Calculate</button>
                </div>

                <div class="right">
                    <canvas id="myChart" width="400" height="400"></canvas>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.2/dist/chart.min.js"></script>

        <script src="./LOANS/LoanCalculator.js"></script>

        <!-- --------------------------------------------------------------- LOAN Calculator End---------------------------------------------------------------------- -->



        <!-- SECTION REVIEW -->
        <div class="tcontainer">

            <div class="contents-wraper">

                <section class="theader">
                    <h1>OUR MANAGEMENT</h1>
                </section>

                <section class="testRow">

                    <div class="testItem active">
                        <img src="homepage/vemuri.jpg">
                        <h3>SRI VEMURI VENKATRAO</h3>
                        <h4>CHAIRMAN</h4>

                    </div>

                    <div class="testItem">
                        <img src="homepage/ABDUL.jpg">
                        <h3>SRI ABDUL KHAYYUM ANSARI</h3>
                        <h4>VICE CHAIRMAN</h4>

                    </div>
                    <div class="testItem">
                        <img src="homepage/KOGANTI.jpg">
                        <h3>SRI KOGANTI VENKATA RAMAIAH</h3>
                        <h4>VICE CHAIRMAN</h4>

                    </div>

                    <div class="testItem">
                        <img src="homepage/SAGGURTHI.jpg">
                        <h3>SRI SAGGURTHI NAGESWARA RAO</h3>
                        <h4>DIRECTOR</h4>

                    </div>

                    <div class="testItem">
                        <img src="homepage/TVS.jpg">
                        <h3>SRI TVS ANJANEYA RAJU</h3>
                        <h4>DIRECTOR</h4>

                    </div>

                    <div class="testItem">
                        <img src="homepage/SAGGURTHI venkat.jpg">
                        <h3>SRI SAGGURTHI VENKATESWARA RAO</h3>
                        <h4>DIRECTOR</h4>

                    </div>
                    <div class="testItem">
                        <img src="homepage/JOGA RAU.jpg">
                        <h3>SRI JOGA RAU</h3>
                        <h4>DIRECTOR</h4>

                    </div>
                    <div class="testItem">
                        <img src="homepage/BOGADI.jpg">
                        <h3> SRI BOGADI SIVARAMA KRISHNA PRASAD</h3>
                        <h4>DIRECTOR</h4>

                    </div>
                    <div class="testItem">
                        <img src="homepage/TALLAPRAGADA.jpg">
                        <h3> SRI TALLAPRAGADA SUBBA RAO</h3>
                        <h4>DIRECTOR</h4>

                    </div>
                    <div class="testItem">
                        <img src="homepage/KALLE.jpg">
                        <h3> SRI KALLE NAGESWARA RAO</h3>
                        <h4>DIRECTOR</h4>

                    </div>
                    <div class="testItem">
                        <img src="homepage/SAJJA.jpeg">
                        <h3> SRI SAJJA VENKATA NAGA SUBHASH TEJA</h3>
                        <h4>DIRECTOR</h4>

                    </div>
                    <div class="testItem">
                        <img src="homepage/PENUMATSA.jpg">
                        <h3> SRI PENUMATSA PATTABHI RAMARAJU</h3>
                        <h4>PROFESSIONAL DIRECTOR</h4>

                    </div>
                    <div class="testItem">
                        <img src="homepage/DATLA.jpg">
                        <h3> SRI DATLA JAGAPATHI RAJU</h3>
                        <h4>PROFESSIONAL DIRECTOR</h4>

                    </div>



                </section>

                <section class="indicators">
                    <div class="dot active" attr='0' onclick="switchTest(this)"></div>
                    <div class="dot" attr='1' onclick="switchTest(this)"></div>
                    <div class="dot" attr='2' onclick="switchTest(this)"></div>
                    <div class="dot" attr='3' onclick="switchTest(this)"></div>
                    <div class="dot" attr='4' onclick="switchTest(this)"></div>
                    <div class="dot" attr='5' onclick="switchTest(this)"></div>
                    <div class="dot" attr='6' onclick="switchTest(this)"></div>
                    <div class="dot" attr='7' onclick="switchTest(this)"></div>
                    <div class="dot" attr='8' onclick="switchTest(this)"></div>
                    <div class="dot" attr='9' onclick="switchTest(this)"></div>
                    <div class="dot" attr='10' onclick="switchTest(this)"></div>
                    <div class="dot" attr='11' onclick="switchTest(this)"></div>
                    <div class="dot" attr='12' onclick="switchTest(this)"></div>
                    <div class="dot" attr='13' onclick="switchTest(this)"></div>
                </section>

            </div>
        </div>


    </main>

    <special-footer></special-footer>
    <script src="./HeaderFooter.js"></script>
    <script src="hrader.js"></script>
    <script>
        let slideIndex = 0;
        sliderfunc();

        function sliderfunc() {
            let i;
            let slider = document.getElementsByClassName("slide");
            for (i = 0; i < slider.length; i++) {
                slider[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slider.length) { slideIndex = 1 }
            slider[slideIndex - 1].style.display = "block";
            setTimeout(sliderfunc, 2000);

        }
    </script>
    <script type="text/javascript">

        // Access the testimonials
        let testSlide = document.querySelectorAll('.testItem');
        // Access the indicators
        let dots = document.querySelectorAll('.dot');

        var counter = 0;

        // Add click event to the indicators
        function switchTest(currentTest) {
            currentTest.classList.add('active');
            var testId = currentTest.getAttribute('attr');
            if (testId > counter) {
                testSlide[counter].style.animation = 'next1 0.5s ease-in forwards';
                counter = testId;
                testSlide[counter].style.animation = 'next2 0.5s ease-in forwards';
            }
            else if (testId == counter) { return; }
            else {
                testSlide[counter].style.animation = 'prev1 0.5s ease-in forwards';
                counter = testId;
                testSlide[counter].style.animation = 'prev2 0.5s ease-in forwards';
            }
            indicators();
        }

        // Add and remove active class from the indicators
        function indicators() {
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(' active', '');
            }
            dots[counter].className += ' active';
        }

        // Code for auto sliding
        function slideNext() {
            testSlide[counter].style.animation = 'next1 0.5s ease-in forwards';
            if (counter >= testSlide.length - 1) {
                counter = 0;
            }
            else {
                counter++;
            }
            testSlide[counter].style.animation = 'next2 0.5s ease-in forwards';
            indicators();
        }
        function autoSliding() {
            deleteInterval = setInterval(timer, 2000);
            function timer() {
                slideNext();
                indicators();
            }
        }
        autoSliding();

        // Stop auto sliding when mouse is over the indicators
        const container = document.querySelector('.indicators');
        container.addEventListener('mouseover', pause);
        function pause() {
            clearInterval(deleteInterval);
        }

        // Resume sliding when mouse is out of the indicators
        container.addEventListener('mouseout', autoSliding);

    </script>
</body>

</html>