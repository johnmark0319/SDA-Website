<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sto. Domingo Associates Agency</title>
  <link rel="icon" href="images\SDALOGO.png" type="image/png" />
  <link rel="stylesheet" href="news.css">
  <link href='https://fonts.googleapis.com/css?family=ADLaM Display' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />


</head>

<body>

  <main class="main">

    <section class="section1">



      <nav>

        <ul>

          <li>
            <button id="button1">
              News
              <i class="ri-newspaper-line"></i>
              <span class="label" id="news-num">0</span>
            </button>
          </li>

          <li>
            <button id="button2">
              Events
              <i class="ri-calendar-event-line"></i>
              <span class="label" id="events-num">0</span>
            </button>
          </li>

          <li>
            <button id="button3">
              Triumphs
              <i class="ri-medal-line"></i>
              <span class="label" id="achievements-num">0</span>
            </button>
          </li>

        </ul>

        <div class="nav-tittle">News & Media</div>
      </nav>

      <div class="container">



        <div id="section1-intro">“Welcome to SDA’s News and Media, where we showcase our latest news, events, and
          achievements. Explore the
          vibrancy and success that defines us!”</div>


        <div class="sec1-part1">

          <div id="news">

            <?php include 'news-user.php'; ?>

          </div>

          <div id="events">

          <?php include 'events-user.php'; ?>






          </div>



          <div id="achievements">

          <?php include 'achievements-user.php'; ?>



          </div>

        </div>

      </div>



    </section>

    <section class="section2">

      <nav>
        <span id="nav-tittle">STO.DOMINGO'S APPRECIATION VIDEO</span>
      </nav>

      <div class="video-container">
        <video width="100%" height="100%" controls autoplay loop muted>
          <source src="video/SdaVideo.mp4" type="video/mp4">
        </video>
      </div>

    </section>

  </main>

  <header class="header">

    <div id="header-content">

      <div class="logo">

        <a href="index.html">
          <div id="logo-img" style="  background-image: url(images/SDALOGO.png); background-size: contain; background-repeat: no-repeat;">
          </div>
        </a>

        <div class="company-name">Sto Domingo Associates</div>

      </div>



      <div class="navigation">

        <nav class="nav">
          <ul class="nav_list">


            <li class="nav_item">
              <a href="index.html" class="nav_link_home">Home</a>
            </li>

            <li class="nav_item">
              <a href="news.php" class="nav_link_news">News & Media</a>
            </li>

            <li class="nav_item">
              <a href="org.php" class="nav_link_org">Organization</a>
            </li>

            <li class="nav_item">
              <a href="about.html" class="nav_link_about">About</a>
            </li>

            <li class="nav_item">
              <a href="join.html" class="nav_link_join">Join Now</a>
            </li>

          </ul>
        </nav>

      </div>

    </div>

  </header>

  <footer class="footer">

    <div class="footer-content" style="  background-image: url(images/footer1.png); background-size: cover; background-repeat: no-repeat;">

      <div class="upper-part">

        <div class="footer-logo" style="  background-image: url(images/SDALOGO.png); background-size: cover;"></div>

        <div class="footer-address">

          <h1>Location</h1> <br>

          <a href="https://maps.app.goo.gl/fPQdGm9nRuXq1Y1B9" class="address" target="_blank">
            <p>GF, Philam Salcedo Bldg, 126 L.P. Leviste Street, Salcedo Village, Makati, 1227 Metro Manila</p>
          </a> <br>

          <a href="https://maps.app.goo.gl/u1LUdvj3ff1S2mTx8" class="address" target="_blank">
            <p>MV34+25H, North Road, Tagbilaran City, Bohol</p>
          </a> <br>

          <a href="https://maps.app.goo.gl/1nj4YVSikmqrpH6z5" class="address" target="_blank">
            <p>8W84+JFQ, Cardinal Rosales Ave, Cebu City, 6000 Cebu</p>
          </a><br>

          <a href="https://maps.app.goo.gl/PMezx8YhhEfXuAoB7" class="address" target="_blank">
            <p>8854+X43, Silliman Ave, Dumaguete, Negros Oriental</p>
          </a><br>

          <a href="https://maps.app.goo.gl/BeXzPfQPxBtoxket9" class="address" target="_blank">
            <p>2/F Kingsborough Building, Jose Abad Santos Ave, San Fernando, 2000 Pampanga</p>
          </a>

        </div>

        <div class="footer-contact">
          <h1>Contact Information</h1>
          <p class="contact">Email: stodomingoassociates@gmail.com <br>

            Landline: (+63) 17 800 9303 <br>

            Smart: (+63) 17 800 9303 <br>

            Globe: (+63) 17 800 9303</p>
        </div>

      </div>

      <div class="lower-part">

        <div class="footer-terms">

          <a href="terms.html" class="terms">Terms and Conditions</a>
          <span class="copyrights">Copyright © 2023, This Website is made by John Mark Umpad</span>

        </div>

        <div class="footer-logo-link">


          <a href="https://www.facebook.com/SDAFinancialAdvisors" target="_blank"><img src="images/fb.png" class="fb-logo"></a>
          <a href="https://www.linkedin.com/company/stodomingoassociates/about/?fbclid=IwAR0_03-7ES3Ls_e30WHtbHiF0WxDl6OZiF2ccjDp8aGviNTh3jNPxkgIxCY" target="_blank"><img src="images/linked.png" class="linked-logo"></a>

        </div>

      </div>

    </div>

  </footer>

  <script src="news.js"></script>
  <script src="header-awareness.js"></script>
  <script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>

</body>

</html>