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
</head>
<body>
    <header>
        <div id="header-placeholder"></div>
    </header>
    
    <div>
    <img src="images/about.png" class="hero-image" alt="Hero Image">
    </div>

    <div class="about-section">
        <div class="about-left">
            <img src="images/aboutin.jpg" class="imgabt" alt="About Us Image">
        </div>
        <div class="about-right">
            <h2>Introduction</h2>
            <p>Welcome to AutoParkX! We are revolutionizing the way you experience parking by integrating cutting-edge technology into a seamless and convenient parking solution. Our automated parking system provides users with the convenience of reserving spots, hassle-free payments, and real-time parking availability. Explore our services and join us in creating smarter, more efficient parking solutions for everyone.</p>
        </div>
    </div>

    <div class="mission-section">
        <div class="mission-left">
            <h2>Our Mission & Vision</h2>
            <p>At AutoParkX, our mission is to provide a seamless, stress-free parking experience using advanced automation and smart technology. Our vision is to reshape urban spaces with innovative, eco-friendly parking solutions that reduce traffic congestion and increase efficiency. We are committed to sustainability, customer satisfaction, and leading the parking revolution.</p>
        </div>
        <div class="mission-right">
            <img src="images/our.jpg" class="imgmission" alt="Mission Image">
        </div>
    </div>

    <div class="testimonial-container">
        <h2 class="testimonial-title">What Our Customers Say</h2>
        <div class="testimonial-slider">
            <div class="testimonial-slide active">
                <p class="testimonial-quote">"AutoParkX made parking so convenient! It's a must-have for every city driver."</p>
                <h4 class="testimonial-author">- John Doe</h4>
            </div>
            <div class="testimonial-slide">
                <p class="testimonial-quote">"I love the monthly subscription package. Saves me both time and money!"</p>
                <h4 class="testimonial-author">- Sarah Smith</h4>
            </div>
            <div class="testimonial-slide">
                <p class="testimonial-quote">"A fantastic service! The daily rates are affordable and the process is seamless."</p>
                <h4 class="testimonial-author">- Michael Lee</h4>
            </div>
            <div class="testimonial-slide">
                <p class="testimonial-quote">"AutoParkX has made my daily commute stress-free. The real-time availability feature is a game changer!"</p>
                <h4 class="testimonial-author">- Emma Johnson</h4>
            </div>
            <div class="testimonial-slide">
                <p class="testimonial-quote">"The ease of paying for parking through the app is fantastic. No more scrambling for change!"</p>
                <h4 class="testimonial-author">- David Brown</h4>
            </div>
            <div class="testimonial-slide">
                <p class="testimonial-quote">"AutoParkX's automated system is so efficient, I never have to wait for a parking spot. Highly recommended!"</p>
                <h4 class="testimonial-author">- Lisa White</h4>
            </div>
            <div class="testimonial-slide">
                <p class="testimonial-quote">"As a business owner, AutoParkX has helped me manage parking for my customers smoothly and efficiently."</p>
                <h4 class="testimonial-author">- James Green</h4>
            </div>
        </div>
        <div class="testimonial-navigation">
            <button class="prev">❮</button>
            <button class="next">❯</button>
        </div>
    </div>

    <div class="review-form-container">
        <h2>Add Your Review</h2>
        <form action="./about.inc.php" method="POST" class="review-form">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>
    
            <label for="review">Your Review:</label>
            <textarea id="review" name="review" rows="5" required></textarea>
    
            <button type="submit">Submit Review</button>
        </form>
    </div>

    <div id="footer-placeholder"></div>
    
    <script>
        
            const slides = document.querySelectorAll('.testimonial-slide');
            const prevButton = document.querySelector('.prev');
            const nextButton = document.querySelector('.next');
            let currentSlide = 0;

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.remove('active');
                    if (i === index) {
                        slide.classList.add('active');
                    }
                });
            }

            function prevSlide() {
                currentSlide = (currentSlide === 0) ? slides.length - 1 : currentSlide - 1;
                showSlide(currentSlide);
            }

            function nextSlide() {
                currentSlide = (currentSlide === slides.length - 1) ? 0 : currentSlide + 1;
                showSlide(currentSlide);
            }

            prevButton.addEventListener('click', prevSlide);
            nextButton.addEventListener('click', nextSlide);

            setInterval(nextSlide, 5000);

        // Include footer
        fetch('footer.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById('footer-placeholder').innerHTML = data;
            });

        // Include header
        fetch('header.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById('header-placeholder').innerHTML = data;
            });
            
    </script>
</body>
</html>
