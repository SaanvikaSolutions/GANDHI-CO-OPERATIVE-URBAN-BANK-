class SpecialHeader extends HTMLElement{
connectedCallback(){
this.innerHTML = `
<div class="header-con">
  <div class="header-notification">
    <div class="marquee-content">
      <span>Here we will display the Notifications</span>
      <span>here is the second notification</span>
    </div>
  </div>
  <div class="header-first-div">
    <!-- here we have  write the heading -->
    <div >
     <a href="home.html"  class="header-img-logo"> <img src="./headerimages/gandhilogo.png" alt="gandhi pic" /> </a>
    </div>

    <div class="header-heading">
      <h1>the gandhi co-operative urban bank ltd.</h1>
      <p>since 1928</p>
      <h2>museum road, governorpet, vijayawada-520002</h2>
    </div>
    <div class="header-bank-logo">
      <img src="./headerimages/bancklogo.png" alt="bank logo" />
    </div>

  </div>
  <div class="header-second-div">
    <ul>
      <li><a href="./home.html">Home</a></li>
      <li><a href="./AboutUs.html">About Us</a>
        <div class="services-drop-down">
          <a href="MissionAndObjectives.html">Mission & Objectives</a>
          <a href="history.html">History</a>
          <a href="Management.html">Management</a>
        </div>
      </li>
      <li>
        <a href="./services.html">Services</a>
        <div class="services-drop-down">
          <a href="fixed-deposite.html">fixed deposit</a>
          <a href="./rd.html">recurring deposit</a>
          <!-- <a href="/NRI-FD.html">NRI fixed deposit</a> -->
          <a href="./SDL.html">safe deposit locker</a>
          <a href="./current-account.html">current account</a>
        </div>
      </li>
      <li>
        <a href="./loans.html">Loans</a>
        <div class="services-drop-down">
          <a href="./gold_loan.html">gold loan</a>
          <!-- // <a href="./personal-loan.html">personal loan</a> -->
          <a href="./house_loan.html">home loan</a>
          <a href="./education.html">education loan</a>
          <!-- // <a href="./vegnflower-loan.html">vegetable & flower culture</a> -->
          <!-- // <a href="./two-weeler-loan.html">two-wheeler loan</a> -->
          <a href="./Against-Deposits-Loans.html">Against Deposits loan</a>
          <a href="./business-loan.html">Business loan</a>
          <a href="./LoanCalculator.html">Loan Calculator</a>
        </div>
      </li>

      <li><a href="./Branch.html">branches</a></li>
      <li><a href="./Interest Rates.html">Interest rate</a></li>
      <li><a href="./Downloads.html">downloads</a></li>
      <li><a href="./Auctions.html">auctions</a></li>
      <li><a href="./career.html">Career</a></li>
      <li><a href="./contact.html">Contact</a></li>
    </ul>
  </div>
  <div class="sidenav-trigger-btn">
    <img src="headerimages/menu.png" alt="menu" class="sidenav-menu-icons">
    <img src="headerimages/close.png" alt="close" class="sidenav-close-icons hidden">
  </div>

  <div class="header-sidenav-div">
    <ul>
      <li><a href="./home.html">Home</a></li>
      <li><a href="./AboutUs.html">About Us</a></li>
      <li><a href="./Management.html">Management</a></li>
      <li>
        <a href="./services.html">Services</a>
        <!-- <div class="services-sidenav-down">
                        <a href="./fixed-deposite.html">fixed deposit</a>
                        <a href="./rd.html">recurring deposit</a>
                        // <a href="./NRI-FD.html">NRI fixed deposit</a>
                        <a href="./SDL.html">safe deposit locker</a>
                        <a href="./current-account.html">current account</a>
                    </div> -->
      </li>
      <li>
        <a href="./loans.html">Loans</a>
        <!-- <div class="services-sidenav-down">
                        <a href="./gold_loan.html">gold loan</a>
                        <a href="./personal-loan.html">personal loan</a>
                        <a href="./house_loan.html">house loan</a>
                        <a href="./education.html">education loan</a>
                        <a href="./vegnflower-loan.html">vegetable & flower culture</a>
                        <a href="./two-weeler-loan.html">two-wheeler loan</a>
                        <a href="./Against-Deposits-Loans.html">against deposits loan</a>
                        <a href="./business-loan.html">business loan</a>
                    </div> -->
      </li>

      <li><a href="./Branch.html">branches</a></li>
      <li><a href="./Interest Rates.html">Interest rate</a></li>
      <li><a href="./Downloads.html">downloads</a></li>
      <li><a href="./Auctions.html">auctions</a></li>
      <li><a href="./career.html">Career</a></li>
      <li><a href="./contact.html">Contact</a></li>
    </ul>
  </div>
  `
  }
  }
  customElements.define('specia-header',SpecialHeader)


  class SpecialFooter extends HTMLElement{
  connectedCallback(){
  this.innerHTML = `<section class="footer">
    <div class="footer-row">
      <div class="footer-col">
        <h4>Info</h4>
        <ul class="links">
          <li><a href="./AboutUs.html">About Us</a></li>
          <li><a href="./contact.html">Locate Us</a></li>
          <li><a href="./Branch.html">Branches</a></li>
          <li><a href="./Auctions.html">Auctions</a></li>
          <li><a href="./Interest Rates.html">Intrest Rate</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <a href="./services.html">
          <h4>Our Services</h4>
        </a>
        <ul class="links">
          <li><a href="./fixed-deposite.html">Fixed Deposit</a></li>
          <li><a href="./rd.html">Recurring Deposit</a></li>
          <!-- //   <li><a href="./NRI-FD.html">NRI Fiexed Deposit</a></li> -->
          <li><a href="./SDL.html">Safe Deposit</a></li>
          <li><a href="./current-account.html">Current Account</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <a href="./loans.html">
          <h4>Loans</h4>
        </a>
        <ul class="links">
          <li><a href="./gold_loan.html">Gold Loan</a></li>
          <li><a href="./house_loan.html">House Loan</a></li>
          <!-- //   <li><a href="./personal-loan.html">Personal Loan</a></li> -->
          <li><a href="./education.html">Education Loan</a></li>
          <!-- //   <li><a href="./two-weeler-loan.html">Two-Wheeler Loan</a></li> -->
          <li><a href="./business-loan.html">Business Loan</a></li>
          <!-- //   <li><a href="./vegnflower-loan.html">Vegetable & Flowers Loan</a></li> -->
          <li><a href="./Against-Deposits-Loans.html">Against Deposit Loan</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Help & Support</h4>
        <p>
          Your trusted source for quick help and guidence.
        </p>
        <form action="#">
          <input type="text" placeholder="Your email" required>
          <button type="submit">CONTACT</button>
        </form>

      </div>

    </div>
    <div class="footer-others">
      <ul>
        <li style="color: white;"> Others</li>
        <li><a href="./Important_documents.html"> Important Documents</a></li>
        <!-- <li><a href="">Account Aggregator</a></li> -->
        <li><a href="./TandC.html">Terms & Conditions</a></li>
        <li><a href="./Banking Ombudsman.html">Banking Ombudsman</a></li>
        <li><a href="./BCSBI Members.html">BCSBI</a></li>
      </ul>
    </div>
  </section>
  `
  }
  }

  customElements.define('special-footer', SpecialFooter);