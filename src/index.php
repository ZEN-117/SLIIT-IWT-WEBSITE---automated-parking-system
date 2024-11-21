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
        <hero>
        <video autoplay muted loop id="hero">
                <source src="images/hero1.mp4" type="video/mp4">
              </video>
            <div class="hero-button-container">
                <a href="about.php"><button class="hero-button">READ MORE</button></a>
            </div>
        </hero>
    </div>
    
    <div class="form-container" id="reserve">
        <h2 class="form_h2">Find a Car Park and Prepay Online</h2>
        <p class="form_p">Find a convenient parking spot and prepay online with ease. <br>Reserve your space ahead of time, skip the hassle, and enjoy a smooth parking experience wherever you go.</p>

        
        <form action="./index.inc.php" method="POST" >
            <div class="form-row" >
                <div class="column">
                    <label for="arrival-date">Arrival Date:</label>
                    <input type="date" id="arrival-date" name="arrival-date" required>
                    
                    <label for="arrival-time">Arrival Time:</label>
                    <input type="time" id="arrival-time" name="arrival-time" required>
                </div>
                <div class="column">
                    <label for="exit-date">Exit Date:</label>
                    <input type="date" id="exit-date" name="exit-date" required>
                    
                    <label for="exit-time">Exit Time:</label>
                    <input type="time" id="exit-time" name="exit-time" required>
                </div>
                <div class="column">
                    <label for="car-park">Select Car Park:</label>
                    <select id="car-park" name="car-park" required>
                        <option value="malabe">SLIIT Car park Malabe</option>
                        <option value="kurunegala">SLIIT Car park Kurunegala</option>
                        <option value="kandy">SLIIT Car park Kandy</option>
                    </select>
                </div>
                <button class="reserve-button" type="submit">Reserve</button>
            </div>
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
                <a href="#reserve" class="package-button">Book Now</a>
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
                <a href="#reserve" class="package-button">Book Now</a>
            </div>
        </div>
    </div>
    

    <div class="maps-container">
        <h2 class="maps-title">Parking Locations</h2>
        <div class="maps-grid">
            <div class="map" id="map1">
                <h3 class="map-title">SLIIT Car Park Malabe</h3>
                <div class="map-frame">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3162.6859313175113!2d79.9703696!3d6.9146828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae256db1a6771c5%3A0x2c63e344ab9a7536!2sSri%20Lanka%20Institute%20of%20Information%20Technology!5e0!3m2!1sen!2slk!4v1695393387813!5m2!1sen!2slk"
                    width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            
            <div class="map" id="map2">
                <h3 class="map-title">SLIIT Car Park Kurunegala</h3>
                <div class="map-frame">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7950.612559127697!2d80.3627942!3d7.4890502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae33a1f76f3dfaf%3A0x288f333fefb6c535!2sSLIIT%20Kurunegala!5e0!3m2!1sen!2slk!4v1695301519395!5m2!1sen!2slk" 
                    width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="map" id="map3">
                <h3 class="map-title">SLIIT Car Park Kandy</h3>
                <div class="map-frame">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15949.764897462965!2d80.6101468!3d7.2755275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae368bfd631eeb9%3A0x881fd608acc078bb!2sSLIIT%20Kandy%20Center!5e0!3m2!1sen!2slk!4v1695301591048!5m2!1sen!2slk" 
                    width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
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
        </div>
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

            setInterval(nextSlide, 5000);
            
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
