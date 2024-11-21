<!-- footer.html -->
<style>
    .footer-container {
        background-color: #14213D; 
        display: flex;
        align-items: flex-start; 
        width: auto;
        margin: 0 auto;
        padding: 20px 1rem;
        box-shadow: 0 -4px 8px #0f025828;
    }

    .footer-container > div {
        padding-top: 20px;
        margin-left: 150px;
    }

    .footer-logo {
        flex-basis: 20%; 
    }

    .footer-menu {
        flex-basis: 20%; 
    }

    .footer-privacy {
        flex-basis: 20%; 
    }

    .footer-contact {
        flex-basis: 40%; 
    }

    .footer-logo img {
        width: 175px; 
        height: auto;
        margin-top: 5px;
    }

    .footer-menu ul, .footer-privacy ul {
        list-style: none;
        padding: 0;
        display: flex;
        flex-direction: column;
    }

    .footer-menu ul li, .footer-privacy ul li {
        margin-bottom: 0.5rem;
    }

    .footer-menu ul li a, .footer-privacy ul li a {
        color: #fff;
        font-family: 'Montserrat', sans-serif;
        font-size: 1rem;
        font-weight: bold;
        letter-spacing: 3px;
        text-decoration: none;
        transition: transform 0.3s ease, color 0.3s ease;
    }

    .footer-menu ul li a:hover, .footer-privacy ul li a:hover {
        transform: scale(1.1);
        color: #FCA311;
    }

    .footer-privacy {
        color: #fff;
        font-family: 'Montserrat', sans-serif;
        font-size: 1rem;
        font-weight: bold;
        letter-spacing: 2px;
        text-align: left;
    }

    .footer-contact {
        margin-top: 10px;
        color: #fff;
        font-family: 'Montserrat', sans-serif;
        font-size: 1rem;
        font-weight: bold;
        letter-spacing: 2px;
        text-align: left;
    }
    
    i {
        color: #ffffff;
        margin-right: 10px;
    }

    i:hover {
        color: #FCA311;
        margin-right: 10px;
    }

    .footer-contact p {
        margin: 0.3rem 0;
        margin-right: 200px;
    }

    .footer-contact a {
        color: #ffffff;
        text-decoration: none;
        transition: transform 0.3s ease, color 0.3s ease;
    }

    .footer-contact a:hover {
        color: #FCA311;
        text-decoration: underline;
    }

    .social-icon {
        color: #ffffff;
        text-decoration: none;
        margin: 0 0.5rem;
        font-size: 1.5rem;
        transition: transform 0.3s ease, color 0.3s;
    }

    .social-icon:hover {
        transform: scale(1.2);
        color: #FCA311;
    }

    footer {
        background: #000000;
        color: #fff;
        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
        font-weight: bold;
        letter-spacing: 2px;
        text-decoration: none;
        text-align: center;
        padding: 15px 0;
    }
</style>


<div class="footer-container">
   
    <div class="footer-logo">
        <a href="index.php"><img src="Images/logo1.png" alt="Logo"></a>
    </div>

    
    <div class="footer-menu">
        <ul>
            <li><i class="fas fa-circle-dot"></i><a href="index.php">Home</a></li>
            <li><i class="fas fa-circle-dot"></i><a href="about.php">About Us</a></li>
            <li><i class="fas fa-circle-dot"></i><a href="payment.php">Payment</a></li>
            <li><i class="fas fa-circle-dot"></i><a href="contact.php">Contact Us</a></li>
        </ul>
    </div>

    
    <div class="footer-privacy">
        <ul>
            <li><i class="fas fa-circle-dot"></i><a href="privacy.html">Privacy Policy</a></li>
            <li><i class="fas fa-circle-dot"></i><a href="terms_and_cond.html">Terms & Conditions</a></li>
            <li><i class="fas fa-circle-dot"></i><a href="1references.html">References</a></li>
        </ul>
    </div>

    
    <div class="footer-contact">
        <p>Email: <a href="mailto:">AutoParkX@test.com</a></p>
        <p>Phone: <a href="tel:" >123 456-7890</a></p>
        <p>Follow us:</p>
        <p>
            <a href="#" class="social-icon"><i class="fab fa-facebook-square"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
        </p>
    </div>
</div>

<footer>
    <p>&copy; 2024 AutoParkX. All rights reserved.</p>
</footer>
