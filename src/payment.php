<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoParkX</title>
    <link rel="icon" href="Images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
        }

        .hero-image {
            width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        .payment-container {
            background-color: #E5E5E5;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            margin: 20px auto; 
        }

        h2 {
            margin-bottom: 20px;
            color: #14213d;
            text-align: center;
        }

        label {
            margin-top: 10px;
            font-weight: bold;
            display: block; 
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="number"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box; 
        }

        button {
            width: 100%;
            border: 2px solid #FCA311;
            border-radius: 8px;
            background: linear-gradient(145deg, #ffffff, #FCA311);
            padding: 14px 18px;
            text-transform: uppercase;
            font-family: 'Montserrat', sans-serif;
            font-size: 1rem;
            font-weight: bold;
            letter-spacing: 3px;
            color: #14213D;
            text-decoration: none;
            transition: all 0.5s ease;
            box-shadow: 0 4px 8px #14213d34;
            cursor: pointer;
            margin-top: 15px; 
        }

        button:hover {
            background: linear-gradient(145deg, #FCA311, #ffffff);
            color: #14213D;
            text-shadow: 0px 0px 10px #00ff99;
            box-shadow: 0 0 15px rgba(0, 255, 255, 0.8);
            border: 2px solid #00ff99;
        }

        .text-center {
            text-align: center;
            margin-top: 10px;
            font-weight: bold; 
        }

    </style>
</head>
<body>
    <header>
        <div id="header-placeholder"></div>
    </header>

    <div>
        <img src="images/payment.png" class="hero-image" type="img/png">
    </div>

    

    <div class="payment-container">
        <h2>Payment Details</h2>
        <form id="paymentForm" action="./payment.inc.php" method = "POST">
            <label for="cardName">Cardholder Name:</label>
            <input type="text" id="cardName" name="cardName" required>

            <label for="cardNumber">Card Number:</label>
            <input type="text" id="cardNumber" name="cardNumber" required oninput="detectCardType()" required placeholder="4111 1111 1111 1111">
            <div id="cardType" class="text-center"></div> <!-- Card type display -->

            <label for="expiryDate">Expiry Date (MM/YY):</label>
            <input type="text" id="expiryDate" name="expiryDate" required placeholder="MM/YY">

            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" required>

            <label for="billingAddress">Billing Address:</label>
            <input type="text" id="billingAddress" name="billingAddress" required>

            <button type="submit">Confirm Payment</button>
        </form>
    </div>

    <div class="pricing-container">
        <h2 class="pricing-title">Pricing Packages</h2>
        <div class="pricing-grid">
            <div class="pricing-package premium">
                <h3 class="package-title">Monthly Subscription</h3>
                <div><hr></div>
                <p class="package-price">Rs.3000 <span>/month</span></p>
                <ul class="package-features">
                    <li><i class="fa fa-check"></i> Unlimited Parking Access</li>
                    <li><i class="fa fa-check"></i> Dedicated Parking Space</li>
                    <li><i class="fa fa-check"></i> 24/7 Access</li>
                    <li><i class="fa fa-check"></i> Security Monitoring</li>
                </ul>
                <a href="payment.php" class="package-button">Subscribe</a>
            </div>
    
            <div class="pricing-package">
                <h3 class="package-title">Daily Rate</h3>
                <div><hr class="pkghr"></div>
                <p class="package-price">Rs.500 <span>/Day</span></p>
                <ul class="package-features">
                    <li><i class="fa fa-check"></i> Full Day Parking</li>
                    <li><i class="fa fa-check"></i> Multiple Entries Allowed</li>
                    <li><i class="fa fa-check"></i> 24/7 Access</li>
                    <li><i class="fa fa-check"></i> Security Monitoring</li>
                </ul>
                <a href="" class="package-button">Book Now</a>
            </div>
    
            <div class="pricing-package">
                <h3 class="package-title">Hourly Rate</h3>
                <div><hr class="pkghr"></div>
                <p class="package-price">Rs.200 <span>/Hour</span></p>
                <ul class="package-features">
                    <li><i class="fa fa-check"></i> Pay-As-You-Go Parking</li>
                    <li><i class="fa fa-check"></i> Ideal for Short Stays</li>
                    <li><i class="fa fa-check"></i> Security Monitoring</li>
                    <li><i class="fa fa-times"></i> Unlimited Entry/Exit</li>
                </ul>
                <a href="" class="package-button">Book Now</a>
            </div>
        </div>
    </div>

    <div id="footer-placeholder"></div>

    <script>
        // Function to detect card type based on the card number
        function detectCardType() {
            const cardNumberInput = document.getElementById('cardNumber');
            const cardTypeDisplay = document.getElementById('cardType');
            const cardNumber = cardNumberInput.value.replace(/\s+/g, ''); 

            let cardType = '';

            // Check card number length and starting digits 
            if (/^4[0-9]{12}(?:[0-9]{3})?$/.test(cardNumber)) {
                cardType = 'Visa';
            } else if (/^5[1-5][0-9]{14}$/.test(cardNumber)) {
                cardType = 'MasterCard';
            } else if (/^3[47][0-9]{13}$/.test(cardNumber)) {
                cardType = 'American Express';
            } else if (/^6(?:011|5[0-9]{2})[0-9]{12}$/.test(cardNumber)) {
                cardType = 'Discover';
            } else {
                cardType = 'Unknown Card Type';
            }

            
            cardTypeDisplay.textContent = cardType ? `Card Type: ${cardType}` : '';
        }

        // to include the footer
        fetch('footer.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById('footer-placeholder').innerHTML = data;
            }); 

        // to include the header   
        fetch('header.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById('header-placeholder').innerHTML = data;
            });   

        
    </script>
</body>
</html>