<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <!-- header section starts  -->

   <section class="header">

      <a href="home.php" class="logo">.Travel</a>

      <nav class="navbar">
         <a href="home.php">صفحه اصلی</a>
         <a href="about.php">درباره ما</a>
         <a href="package.php">تور ها</a>
         <a href="book.php">رزرو تور</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </section>

   <!-- header section ends -->

   <!-- ------------------------------------------------------- -->

   <div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
      <h1>رزروِ تور</h1>
   </div>

   <!-- ------------------------------------------------------- -->

   <!-- booking section starts  -->

   <section class="booking">

      <h1 class="heading-title">تور مورد علاقت رو رزرو کن!</h1>

      <form action="book_form.php" method="post" class="book-form">

         <div class="flex">
            <div class="inputBox">
               <span>نام :</span>
               <input type="text" name="name">
            </div>
            <div class="inputBox">
               <span>ایمیل :</span>
               <input type="email" name="email">
            </div>
            <div class="inputBox">
               <span>تلفن :</span>
               <input type="number" name="phone">
            </div>
            <div class="inputBox">
               <span>آدرس :</span>
               <input type="text" name="address">
            </div>
            <div class="inputBox">
               <span>تور :</span>
               <select class="inputBox" name="packages" id="packages">
                  <option value="tehran">تهران</option>
                  <option value="esfahan">اصفهان</option>
                  <option value="kashan">کاشان</option>
                  <option value="hamedan">همدان</option>
                  <option value="shiraz">شیراز</option>
                  <option value="kish">کیش</option>
                  <option value="qeshm">قشم</option>
                  <option value="kerman">کرمان</option>
                  <option value="ramsar">رامسر</option>
                  <option value="bushehr">بوشهر</option>
                  <option value="tabriz">تبریز</option>
                  <option value="ardebil">اردبیل</option>
               </select>
            </div>




            <div class="inputBox">
               <span>تعداد افراد :</span>
               <input type="number" name="guests">
            </div>
            <div class="inputBox">
               <span>شروع سفر :</span>
               <input type="date" name="arrivals">
            </div>
            <div class="inputBox">
               <span>پایان سفر :</span>
               <input type="date" name="leaving">
            </div>
         </div>

         <input type="submit" value="رزرو" class="btn">

      </form>

   </section>

   <!-- booking section ends -->

   <!-- ------------------------------------------------------- -->

   <!-- footer section starts  -->

   <section class="footer">

      <div class="box-container">

         <div class="box">
            <h3>لینک ها</h3>
            <a href="home.php"> <i class="fas fa-angle-left"></i> صفحه اصلی</a>
            <a href="about.php"> <i class="fas fa-angle-left"></i> درباره ما</a>
            <a href="package.php"> <i class="fas fa-angle-left"></i> پکیج ها</a>
            <a href="book.php"> <i class="fas fa-angle-left"></i>رزرو تور</a>
         </div>

         <div class="box">
            <h3>تماس با ما</h3>
            <a href="tel:+98112223333"> <i class="fas fa-phone"></i> 0911-222-3333 </a>
            <a href="tel:01133344455"> <i class="fas fa-phone"></i> 011-33344455 </a>
            <a href="mailto:travel@info.com"> <i class="fas fa-envelope"></i> travel@info.com </a>
            <a href="https://en.wikipedia.org/wiki/Tehran"> <i class="fas fa-map"></i> Tehran, Iran </a>
         </div>

         <div class="box">
            <h3>شبکه های اجتماعی</h3>
            <a href="https://www.facebook.com/"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="https://twitter.com/"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="https://www.instagram.com/"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="https://www.linkedin.com/"> <i class="fab fa-linkedin"></i> linkedin </a>
         </div>

      </div>

      <div class="credit" style="direction:ltr;">All Content © 2022 Travel. All Rights Reserved.</div>
   </section>

   <!-- footer section ends -->

   <!-- ------------------------------------------------------- -->

   <!-- swiper js link  -->
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>