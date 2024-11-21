<!-- header.html -->
<style>
    header {
        z-index: 10;
        background: #000000;
        position: sticky;
        top: 0;
        color: #fff;
        padding: 5px 0;
        transition: background 0.3s ease; 
        
    }

    .header-container {
        display: flex;
        justify-content: space-between;
        align-items: center; 
        max-width: 1300px;
        margin: 0 auto;
        padding: 0 1rem;
    }

    .logo img {
        width: 175px;
        height: auto;
        margin-top: 5px;
    }

    nav {
        flex: 1;
        display: flex;
        justify-content: center;
    }

    nav ul {
        list-style: none;
        display: flex;
    }

    nav ul li {
        margin: 0 1rem;
    }

    nav ul li a {
        display: flex;
        color: #FCA311;
        text-transform: uppercase;
        font-family: 'Montserrat', sans-serif;
        font-size: 1rem;
        font-weight: bold;
        letter-spacing: 3px;
        text-decoration: none;
        padding: 5px 10px;
        transition: color 0.3s, background-color 0.3s, text-shadow 0.3s;
        border-radius: 5px;
    }

    nav ul li a:hover {
        display: flex;
        color: #ffffff;
        text-shadow: 0px 0px 20px #ffffff; 
        padding: 5px 10px;
        border-radius: 5px;
    }

    .button-container {
        display: flex; 
        align-items: center; 
        margin-left: auto;
        font-size: 20px;
        font-family: 'Montserrat', sans-serif;
    }

    .login-button {
        border: 2px solid #FCA311; 
        border-radius: 8px; 
        background: linear-gradient(145deg, #1a1a1a, #333); 
        padding: 14px 18px;
        text-transform: uppercase;
        font-family: 'Montserrat', sans-serif;
        font-size: 1rem;
        font-weight: bold;
        letter-spacing: 3px;
        color: #fff;
        text-decoration: none;
        transition: all 0.5s ease;
        margin : 0;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5); 
        cursor: pointer;
    }

    .login-button:hover {
        background: linear-gradient(145deg, #333, #1a1a1a); 
        color: #ffffff;
        text-shadow: 0px 0px 10px #00ff99; 
        box-shadow: 0 0 15px rgba(0, 255, 255, 0.8); 
        border: 2px solid #00ff99;
    }

    .user-icon-container {
        display: flex;                  
        justify-content: center;        
        align-items: center;            
        width: 40px;                   
        height: 40px;                  
        border: 3px solid #FCA311;     
        border-radius: 50%;           
        background-color: rgba(0, 0, 0, 0.5); 
        margin-left: 15px;             
        transition: background-color 0.3s; 
    }

    .user-icon-container:hover {
        background-color: rgba(255, 255, 255, 0.2); 
    }

    .user-icon {
        color: #FCA311;
        font-size: 1.5rem; 
        transition: color 0.3s;
        line-height: 1; 
        margin-left: 10px;
    }

</style>

<div class="header-container">
    <div class="logo">
        <a href="index.php"><img src="Images/logo1.png" alt="Logo"></a>
    </div>
    <nav>
        <ul>
            <li>|</li>
            <li><a href="index.php">Home</a></li>
            <li>|</li>
            <li><a href="about.php">About Us</a></li>
            <li>|</li>
            <li><a href="payment.php">Payment</a></li>
            <li>|</li>
            <li><a href="contact.php">Contact Us</a></li>
            <li>|</li>
        </ul>
    </nav>
    <div class="button-container">
        <a href="signup.php"><button class="login-button">Sign up</button></a>
        <div class="user-icon-container">
        <a href="signin.php"><i class="fas fa-user user-icon"></i></a>
        </div>
    </div>
</div>
