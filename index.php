<?php

$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('connection failed');

if (isset($_POST['send'])) {

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

   if (mysqli_num_rows($select_message) > 0) {
      $message[] = 'message sent already!';
   } else {
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Complete Responsive Personal Portfolio Website Design</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php

   if (isset($message)) {
      foreach ($message as $message) {
         echo '
      <div class="message" data-aos="zoom-out">
         <span>' . $message . '</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
      }
   }

   ?>

   <!-- header section starts  -->

   <header class="header">

      <div id="menu-btn" class="fas fa-bars"></div>

      <a href="#home" class="logo">Portfolio</a>

      <nav class="navbar">
         <a href="#home" class="active">home</a>
         <a href="#about">about</a>
         <a href="#services">services</a>
         <a href="#portfolio">portfolio</a>
         <a href="#contact">contact</a>
      </nav>

      <div class="follow">
         <a href="https://www.facebook.com/vrushal.shahare.77" class="fab fa-facebook-f"></a>
         <a href="https://twitter.com/vrushal_shahare" class="fab fa-twitter"></a>
         <a href="https://www.instagram.com/vrushal_shahare_/" class="fab fa-instagram"></a>
         <a href="https://www.linkedin.com/in/vrushal-shahare-929810216" class="fab fa-linkedin"></a>
         <a href="https://github.com/Vrushal143" class="fab fa-github"></a>
      </div>

   </header>

   <!-- header section ends -->

   <!-- home section starts  -->

   <section class="home" id="home">

      <div class="image" data-aos="fade-right">
         <img src="images\IMG_7573.jpg" alt="">
      </div>

      <div class="content">
         <h3 data-aos="fade-up">hi, i am Vrushal Shahare</h3>
         <span data-aos="fade-up">web designer & developer</span>
         <p data-aos="fade-up">“I am a positive, enthusiastic and competent Web Developer who, over the years, has built up a diverse range of skills, qualities and attributes that guarantee I will perform highly in this role.</p>
         <a data-aos="fade-up" href="#about" class="btn">about me</a>
      </div>

   </section>

   <!-- home section ends -->

   <!-- about section starts  -->

   <section class="about" id="about">

      <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>

      <div class="biography">

         <p data-aos="fade-up">Hi, I’m Vrushal! I'm a web developer , I create websites that help organizations address business challenges and meet their needs. I manage everything from website navigation and layout to a company's web hosting and security architecture. My expertise lies within front-end web apps, and the main languages in my tech stack are JavaScript, PHP, and of course HTML/CSS.</p>

         <div class="bio">
            <h3 data-aos="zoom-in"> <span>name : </span> Vrushal Shahare </h3>
            <h3 data-aos="zoom-in"> <span>email : </span> vrushalshahare143@gmail.com </h3>
            <h3 data-aos="zoom-in"> <span>address : </span>Nagpur,Maharastra, India </h3>
            <h3 data-aos="zoom-in"> <span>phone : </span> +91-9112446529 </h3>
            <h3 data-aos="zoom-in"> <span>age : </span> 24 years </h3>
            <h3 data-aos="zoom-in"> <span>experience : </span> 2+ years </h3>
         </div>

         <a href="https://www.linkedin.com/in/vrushal-shahare-929810216" class="btn" data-aos="fade-up">Download CV</a>

      </div>

      <div class="skills" data-aos="fade-up">

         <h1 class="heading"> <span>skills</span> </h1>

         <div class="progress">
            <div class="bar" data-aos="fade-left">
               <h3><span>HTML</span> <span>90%</span></h3>
            </div>
            <div class="bar" data-aos="fade-right">
               <h3><span>CSS</span> <span>70%</span></h3>
            </div>
            <div class="bar" data-aos="fade-left">
               <h3><span>JavaScript</span> <span>65%</span></h3>
            </div>
            <div class="bar" data-aos="fade-right">
               <h3><span>PHP</span> <span>60%</span></h3>
            </div>
         </div>

      </div>

      <div class="edu-exp">

         <h1 class="heading" data-aos="fade-up"> <span>education & experience</span> </h1>

         <div class="row">

            <div class="box-container">

               <h3 class="title" data-aos="fade-right">education</h3>

               <div class="box" data-aos="fade-right">
                  <span>( 2021 - 2023 )</span>
                  <h3>MBA in (IT)</h3>
                  <p>Learning MBA (information technology) from Maratha Vidya Prasarak Samaj’s

                     INSTITUTE OF MANAGEMENT RESEARCH & TECHNOLOGY [ I.M.R.T.] Nashik </p>
               </div>

               <div class="box" data-aos="fade-right">
                  <span>( 2020 - 2021 )</span>
                  <h3>B.voc in (Software Development)</h3>
                  <p>Completed Bacholr's degree from JM Patel College Of Arts Commerce And Science, Bhandara</p>
               </div>



            </div>

            <div class="box-container">

               <h3 class="title" data-aos="fade-left">experience</h3>

               <div class="box" data-aos="fade-left">
                  <span>( 2019 - 2021 )</span>
                  <h3>front-end developer</h3>
                  <p>Knowledge of HTML,CSS & JavaScript,
                     successfully completed project(Online Krushi Store) in ProWiggle Data Solution Private Limited
                  </p>
               </div>

               <div class="box" data-aos="fade-left">
                  <span>( 2021 - 2022 )</span>
                  <h3>back-end developer</h3>
                  <p>Knowledge of PHP & MYSQL
                     successfully completed Academic project(World Time-The News Portal) in ICEICO technologies private limited
                  </p>
               </div>



            </div>

         </div>

      </div>

   </section>

   <!-- about section ends -->

   <!-- services section starts  -->

   <section class="services" id="services">

      <h1 class="heading" data-aos="fade-up"> <span>services</span> </h1>

      <div class="box-container">

         <div class="box" data-aos="zoom-in">
            <i class="fas fa-code"></i>
            <h3>web development</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
         </div>



         <div class="box" data-aos="zoom-in">
            <i class="fab fa-bootstrap"></i>
            <h3>bootstrap</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
         </div>





         <div class="box" data-aos="zoom-in">
            <i class="fab fa-wordpress"></i>
            <h3>wordpress</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
         </div>

      </div>

   </section>

   <!-- services section ends -->

   <!-- portfolio section starts  -->

   <section class="portfolio" id="portfolio">

      <h1 class="heading" data-aos="fade-up"> <span>portfolio</span> </h1>

      <div class="box-container">

         <div class="box" data-aos="zoom-in">
            <img src="images/img-1.jpg" alt="">
            <h3>web development</h3>
            <span>( 2020 - 2022 )</span>
         </div>

         <div class="box" data-aos="zoom-in">
            <img src="images/img-2.jpg" alt="">
            <h3>web development</h3>
            <span>( 2020 - 2022 )</span>
         </div>

         <div class="box" data-aos="zoom-in">
            <img src="images/img-3.jpg" alt="">
            <h3>web development</h3>
            <span>( 2020 - 2022 )</span>
         </div>

         <div class="box" data-aos="zoom-in">
            <img src="images/img-4.jpg" alt="">
            <h3>web development</h3>
            <span>( 2020 - 2022 )</span>
         </div>

         <div class="box" data-aos="zoom-in">
            <img src="images/img-5.jpg" alt="">
            <h3>web development</h3>
            <span>( 2020 - 2022 )</span>
         </div>

         <div class="box" data-aos="zoom-in">
            <img src="images/img-6.jpg" alt="">
            <h3>web development</h3>
            <span>( 2020 - 2022 )</span>
         </div>

      </div>

   </section>

   <!-- portfolio section ends -->

   <!-- contact section starts  -->

   <section class="contact" id="contact">

      <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

      <form action="" method="post">
         <div class="flex">
            <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
            <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
         </div>
         <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
         <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
         <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
      </form>

      <div class="box-container">

         <div class="box" data-aos="zoom-in">
            <i class="fas fa-phone"></i>
            <h3>phone</h3>
            <p>+91-9112446529</p>
         </div>

         <div class="box" data-aos="zoom-in">
            <i class="fas fa-envelope"></i>
            <h3>email</h3>
            <p>vrushalshahare143@gmail.com</p>
         </div>

         <div class="box" data-aos="zoom-in">
            <i class="fas fa-map-marker-alt"></i>
            <h3>address</h3>
            <p>Bhandara, Maharastra, india - 44104</p>
         </div>

      </div>

   </section>

   <!-- contact section ends -->

   <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>mr. web designer</span> </div>



   <!-- custom js file link  -->
   <script src="js/script.js"></script>

   <!-- aos js link  -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

   <script>
      AOS.init({
         duration: 800,
         delay: 300
      });
   </script>

</body>

</html>