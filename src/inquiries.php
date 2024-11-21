

<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <title>Dashboard </title>
      <link rel="icon" href="Images/favicon.png" type="image/x-icon">
      <link rel="stylesheet" href="styles.css">
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <style>

        /* @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700"); */
        *{
          margin: 0;
          padding: 0;
          outline: none;
          border: none;
          text-decoration: none;
          box-sizing: border-box;
          font-family: "Poppins", sans-serif;
        }
        body{
          background: #E5E5E5;
        }

        .title{
          font-size:30px;
        }
        .container{
          display: flex;
        }
        nav{
          position: relative;
          position: sticky;
          top: 0;
          bottom: 0;
          height: 100vh;
          left: 0;
          background: #14213D;
          width: 280px;
          overflow: hidden;
          box-shadow: 0 20px 35px rgba(0, 0, 0, 0.2);
        }
        .logo{
          display: flex;
          margin:  10px 0 0 10px ;
          width: 180px;
        }
       
        .nav-a{
          position: relative;
          color: rgb(255, 255, 255);
          font-size: 14px;
          display: table;
          width: 280px;
          padding: 10px;
        }
        nav .fas{
          position: relative;
          width: 70px;
          height: 40px;
          top: 14px;
          font-size: 20px;
          text-align: center;
        }
        .nav-item{
          position: relative;
          top: 12px;
          margin: 0 0 0 0;
          padding: 10px;
        }
        nav a:hover{
          background: #111;
        }

        .logout{
          position: absolute;
          bottom: 0;
        }
        
        
        .main{
          position: relative;
          padding: 20px;
          width: 100%;
        }
       
        
        
        .main-container{
          margin-top:20px ;
          text-transform: capitalize;
        }
        .container-box{
          width: 100%;
          height: 400px;
          padding: 10px 10px 30px 10px;
          margin-top: 10px;
          background: #fff;
          border-radius: 10px;
          box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
        }
       
      

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 2px solid #8f8b8b;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }
        </style>
      
    </head>
    <body>
        <div class="container">
            <nav>
                <ul>
                  <li><a href="index.php">
                    <img src="images/logo1.png" class="logo">
                  </a></li>
                  <li><a href="index.php" class="nav-a">
                    <i class="fas fa-home "></i>
                    <span class="nav-item">Home</span>
                  </a></li>
                  <li><a href="admindashboard.php" class="nav-a">
                    <i class="fas fa-chart-line"></i>
                    <span class="nav-item">Dashboard</span>
                  </a></li>
                  <li><a href="ad_userprof.php" class="nav-a">
                    <i class="fas fa-user"></i>
                    <span class="nav-item">Profile</span>
                  </a></li>
                  <li><a href="ad_reviews.php" class="nav-a">
                    <i class="fas fa-cog"></i>
                    <span class="nav-item">Reviews</span>
                  </a></li>
                  <li><a href="inquiries.php" class="nav-a">
                    <i class="fas fa-envelope"></i>
                    <span class="nav-item">Inquiries</span>
                  </a></li>
                  <li><a href="" class="logout nav-a">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-item">Log out</span>
                  </a></li>
                </ul>
            </nav>

                <section class="main">
                <div style="pading:10px; margin-bottom:20px;"><h2 class="title">Inquiries</h2></div>
                    <section class="main-container">
                        <h1>Inbox</h1>
                        <div class="container-box">
                          <?php include 'inquiries.inc.php'; ?>
                        </div>
                    </section>
                </section>
        </div>
    </body>
    </html>