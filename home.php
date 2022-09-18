<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

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


   <!-- home section starts  -->

   <section class="home">

      <div class="swiper home-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
               <div class="content">
                  <span>سفر کن، کشف کن و لذت ببر</span>
                  <h3>سفر به دور دنیا!</h3>
                  <a href="package.php" class="btn">اطلاعات بیشتر</a>
               </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
               <div class="content">
                  <span>سفر کن، کشف کن و لذت ببر</span>
                  <h3>جاهای جدید رو کشف کن</h3>
                  <a href="package.php" class="btn">اطلاعات بیشتر</a>
               </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
               <div class="content">
                  <span>سفر کن، کشف کن و لذت ببر</span>
                  <h3>سفرت رو واسه خودت جذاب تر کن</h3>
                  <a href="package.php" class="btn">اطلاعات بیشتر</a>
               </div>
            </div>

         </div>

         <div class="swiper-button-prev"></div>
         <div class="swiper-button-next"></div>

      </div>

   </section>

   <!-- home section ends -->

   <!-- ------------------------------------------------------- -->

   <!-- services section starts  -->

   <section class="services">

      <h1 class="heading-title"> سرویس های ما </h1>

      <div class="box-container">

         <div class="box">
            <img src="images/icon-1.png" alt="">
            <h3>ماجراجویی</h3>
         </div>

         <div class="box">
            <img src="images/icon-2.png" alt="">
            <h3>تور لیدر</h3>
         </div>

         <div class="box">
            <img src="images/icon-3.png" alt="">
            <h3>پیاده روی</h3>
         </div>

         <div class="box">
            <img src="images/icon-4.png" alt="">
            <h3>کمپ با آتش</h3>
         </div>

         <div class="box">
            <img src="images/icon-5.png" alt="">
            <h3>آفرود</h3>
         </div>

         <div class="box">
            <img src="images/icon-6.png" alt="">
            <h3>کمپ با چادر در طبیعت</h3>
         </div>

      </div>

   </section>

   <!-- services section ends -->

   <!-- ------------------------------------------------------- -->

   <!-- home about section starts  -->

   <section class="home-about">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>درباره تیم ما</h3>
         <p>
         Travel با رویکردی نوین در راستای ارائه راه‌حلی جامع، مبتنی ‌بر فناوری‌های روز دنیا جهت پاسخگویی به نیازهای بازار گردشگری ایران توسط شرکت Travel راه‌اندازی شده است. فعالیت‌های شرکت ایرسا از سال ۱۳۹۱ به عنوان اولین ارائه‌دهنده محصولات گردشگری آنلاین در حوزه بنگاه به بنگاه به آژانس‌های هواپیمایی سراسر ایران آغاز گردیده‌است. فعالیت‌هایی که گستره آن امروز به بیش از ۱۹۰۰ آژانس مسافرتی با ارائه خدمات گوناگونی مانند وب‌سرویس، وایت لیبل و اپلیکیشن، گسترش یافته است. سفر مارکت به عنوان یکی از محصولات این مجموعه با گرد هم آوردن بستر لازم برای همکاری های مشترک با آژانس های مسافرتی در سراسر ایران تلاش کرده است تا بهترین و مناسب ترین شرایط را جهت بررسی و مقایسه و خرید محصول سفر در اختیار مسافران قرار دهد.
         </p>
         <a href="about.php" class="btn">بیشتر...</a>
      </div>

   </section>

   <!-- home about section ends -->

   <!-- ------------------------------------------------------- -->

   <!-- home packages section starts  -->

   <section class="home-packages">

      <h1 class="heading-title"> تور ها</h1>

      <div class="box-container">

         <div class="box">
            <div class="image">
               <img src="images/img-1.jpg" alt="">
            </div>
            <div class="content">
               <h3>adventure & tour</h3>
               <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
               <a href="book.php" class="btn">book now</a>
            </div>
         </div>

         <div class="box">
            <div class="image">
               <img src="images/img-2.jpg" alt="">
            </div>
            <div class="content">
               <h3>adventure & tour</h3>
               <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
               <a href="book.php" class="btn">book now</a>
            </div>
         </div>

         <div class="box">
            <div class="image">
               <img src="images/img-3.jpg" alt="">
            </div>
            <div class="content">
               <h3>adventure & tour</h3>
               <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
               <a href="book.php" class="btn">book now</a>
            </div>
         </div>

      </div>

      <div class="load-more">
         <a href="package.php" class="btn see-all-packs">نمایش همه ی تور ها</i></a>
      </div>

   </section>

   <!-- home packages section ends -->

   <!-- ------------------------------------------------------- -->

   <!-- home offer section starts  -->

   <section class="home-offer">
      <div class="content">
         <h3>تا 50% تخفیف تور ها</h3>
         <p>
            سفر کردن یکی از بهترین تجربیات است که می‌توانیم در طول زندگی داشته باشیم. با سفر کردن می‌توانیم با آدم‌های جدید، فرهنگ‌ها و آداب رسوم نو، غذاهای جدید، اقلیم‌ها ی مختلف آشنا شویم و درک بیشتری نسبت‌به خودمان و زندگی کسب کنیم.
            روش‌های مختلفی برای سفر کردن وجود دارد. می‌توانیم با ماشین شخصی خود به هر کجا که می‌خواهیم برویم، در طبیعت چادر بزنیم یا به خانه اقوام و آشنایانمان برویم. اما اگر بخواهیم به یک مقصد جدید برویم یا یک جاذبه طبیعی را از نزدیک ببینیم یا به خارج از کشور برویم تا با جاذبه‌های گردشگری کشورهای دیگر آشنا شویم، بهترین راه خرید تور مسافرتی است.
         </p>

         <a href="book.php" class="btn">همین الآن رزرو کن!</a>
      </div>
   </section>

   <!-- home offer section ends -->

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

      <div class="credit" style="direction:ltr;">All Content © 2022 Travel. All Rights Reserved.</div>ed.
   </section>

   <!-- footer section ends -->

   <!-- ------------------------------------------------------- -->

   <!-- swiper js link  -->
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>


</body>

</html>