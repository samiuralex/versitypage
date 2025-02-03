<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="icon" type="image" href="/img/logo.png">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <title>BAIUST-Home</title>
    <style>
        /* Facilities Section CSS */
        .facilities {
            text-align: center;
            padding: 2rem 1rem;
            background-color: #f9f9f9;
        }

        .facilities .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .facilities h2 {
            font-size: 2rem;
            margin-bottom: 0.5rem;
            font-weight: bold;
            color: green;
        }

        .facilities p {
            color: #666;
            margin-bottom: 2rem;
        }

        .facilities-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        .facility {
            background-color: #f7f7f7;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 1rem;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .facility:hover {
            transform: scale(1.05);
        }

        .facility img {
            max-width: 50px;
            margin-bottom: 1rem;
        }

        .facility h3 {
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        .facility p {
            color: #555;
            font-size: 0.95rem;
        }

        .apply-now {
            display: inline-block;
            margin-top: 2rem;
            padding: 0.75rem 1.5rem;
            background-color: #e63946;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .apply-now:hover {
            background-color: #d62839;
        }
    </style>
</head>
<body>
<section>
 <div class="navigation">
    <div class="shortmsg">
        <p>BAIUST is a Army Adminitrated University in Bangladesh</p>
    </div>
    <div class="title">
        <img src="img/logo.png" alt="">
        <h2>Bangladesh Army International University of Science and Technology (BAIUST)</h2>
    </div>
    <div class="nav">
        <a class="active" href="index.php">Home</a>
        <a href="admin.php">Admin</a>
        <a href="academic.php">Academic</a>
        <a href="faculties.php">Faculties</a>
        <a href="login.php">IUMSS</a>
    </div>
 </div>
</section>
    <div class="banner">
        <img src="img/webbanner.png" alt="banner">
    </div>
    <hr>
<section>
    <div class="why">
        <h2>Why Choose BAIUST?</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente quisquam consectetur corporis! Expedita dignissimos 
           eveniet officia minus unde impedit aliquam, nemo consectetur cumque cupiditate libero nihil sed quaerat odit placeat provident repellendus possimus! 
           Aspernatur obcaecati, voluptatem praesentium distinctio quibusdam similique? Quod eum eius impedit id molestias odit, ratione commodi optio?
        </p>

    </div>
    <div class="images1">
        <img src="img/im1.jpg" alt="">
        <img src="img/im2.jfif" alt="">
        <img src="img/im3.jpeg" alt="">
        <img src="img/im4.jfif" alt="">
    </div>
</section>

<hr>

<section>
    <div class="facdh">
        <h2>Faculties and Department</h2>
    </div>
    <div class="facd">
        
        <div class="card">
            <h3>Faculty of Electrical and Computer Engineering</h3>
            <ul>
                <li>Department of CSE</li>
                <li>Department of EEE</li>
                <li>Department of ICT</li>
            </ul>
        </div>
        <div class="card">
            <h3>Faculty of Science and Humanitites</h3>
            <ul>
                <li>Department of LAW</li>
                <li>Department of English</li>
                <li>Department of Science and Humanitites</li>
            </ul>
        </div>
        <div class="card">
            <h3>Faculty of Business Studies</h3>
            <ul>
                <li>Department of BBA</li>
                <li>Department of Economics</li>
                <li>Department of Management Studies</li>
                
            </ul>
        </div>
        <div class="card">
            <h3>Faculty of Civil</h3>
            <ul>
                <li>Department of CE</li>
                <li>Department of Mechanical Engineering</li>
                <li>Department of Architecture</li>
            </ul>
        </div>
    </div>
</section>

<hr>

<section class="facilities">
    <div class="container">
        <h2>Our Facilities</h2>
        <p>Our top-notch facilities ensure a conducive environment for student success.</p>
        <div class="facilities-grid">
            <div class="facility">
                <i class="fas fa-bed fa-2x"></i>
                <h3>Residential Hall</h3>
                <p>Comfortable and supportive living environment</p>
            </div>
            <div class="facility">
                <i class="fas fa-apple-alt fa-2x"></i>
                <h3>Central Dining</h3>
                <p>Providing well-balanced meals</p>
            </div>
            <div class="facility">
                <i class="fas fa-flask fa-2x"></i>
                <h3>Laboratory</h3>
                <p>Latest tools and equipment for hands-on learning experiences</p>
            </div>
            <div class="facility">
                <i class="fas fa-bus fa-2x"></i>
                <h3>Transport</h3>
                <p>Convenient commuting for non-resident students</p>
            </div>
            <div class="facility">
                <i class="fas fa-child fa-2x"></i>
                <h3>Day Care Center</h3>
                <p>Childcare services for the convenience of student parents and faculty members</p>
            </div>
            <div class="facility">
                <i class="fas fa-book fa-2x"></i>
                <h3>Library</h3>
                <p>Diverse collection of books, journals, and digital materials</p>
            </div>
            <div class="facility">
                <i class="fas fa-first-aid fa-2x"></i>
                <h3>Health Care Center</h3>
                <p>Comprehensive healthcare services</p>
            </div>
            <div class="facility">
                <i class="fas fa-wifi fa-2x"></i>
                <h3>Wifi & Tech</h3>
                <p>Robust Wi-Fi and comprehensive technological support</p>
            </div>
        </div>
        <a href="#" class="apply-now">Apply Now</a>
    </div>
</section>
<footer>
<?php include('footer.php'); ?>
</footer>
</body>
</html>
