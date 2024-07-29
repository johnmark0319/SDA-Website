<?php

session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SDA Admin</title>
  <link rel="icon" href="images\SDALOGO.png" type="image/png" />
  <link rel="stylesheet" href="adminHomepage.css">
  <link href='https://fonts.googleapis.com/css?family=ADLaM Display' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>

  <main class="main">

    <h1 id="main-intro" class="main-intro">Welcome Admin!</h1>

    <section id="sec1" class="section1">

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

          <li>
            <button id="button1a">
              Add News
              <i class="ri-newspaper-line"></i>
            </button>
          </li>

          <li>
            <button id="button2a">
              Add Events
              <i class="ri-calendar-event-line"></i>
            </button>
          </li>

          <li>
            <button id="button3a">
              Add Triumphs
              <i class="ri-medal-line"></i>
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

          <div id="add-news">
            <div>Add Post to News</div>
            <form id="myForm" method="post" action="embed.php">

              <div>
                <input type="text" name='iframe' id="userInput1" placeholder="Embeded Code Here" required>
              </div>

              <div>
                <input type="submit" class="button" name="news">
              </div>

            </form>

          </div>

          <div id="add-events">
            <div>Add Post to Events</div>
            <form id="myForm" method="post" action="embed.php">

              <div>
                <input type="text" name='iframe' id="userInput1" placeholder="Embeded Code Here" required>
              </div>

              <div>
                <input type="submit" class="button" name="events">
              </div>

            </form>

          </div>

          <div id="add-achievements">
            <div>Add Post to Achievements</div>
            <form id="myForm" method="post" action="embed.php">

              <div>
                <input type="text" name='iframe' id="userInput1" placeholder="Embeded Code Here" required>
              </div>

              <div>
                <input type="submit" class="button" name="achievements">
              </div>

            </form>

          </div>

          <div id="news">

            <?php include 'news-admin.php'; ?>

          </div>

          <div id="events">

            <?php include 'events-admin.php'; ?>

          </div>

          <div id="achievements">

            <?php include 'achievements-admin.php'; ?>


          </div>

        </div>

      </div>

    </section>

    <section id="sec2" class="section2">

      <div id="section2-nav">
        <nav>

          <ul>

            <li>
              <button id="cebu-btn">
                CEBU
                <i class="ri-map-pin-user-fill"></i>
              </button>
            </li>

            <li>
              <button id="makati-btn">
                MAKATI
                <i class="ri-map-pin-user-fill"></i>
              </button>
            </li>

            <li>
              <button id="bohol-btn">
                BOHOL
                <i class="ri-map-pin-user-fill"></i>
              </button>
            </li>

            <li>
              <button id="negros-btn">
                NEGROS ORIENTAL
                <i class="ri-map-pin-user-fill"></i>
              </button>
            </li>

            <li>
              <button id="pampanga-btn">
                PAMPANGA
                <i class="ri-map-pin-user-fill"></i>
              </button>
            </li>

          </ul>

        </nav>
      </div>


      <div id="container-cebu">

        <div class="container-tittle1">Branch Managers</div>

        <div class="manager-cebu" id="cebu-managers">

          <?php include("image-cebu-admin.php"); ?>

          <button id="add-manager-cebu" style="width: 5vw; height: 3vw; margin-top:2vh; font-size:1vw; color:red; ">add manager</button>

          <form class="form-manager-cebu" action="managers.php" method="post" autocomplete="off" enctype="multipart/form-data" >
          <label for="name">Name</label>
          <input type="text" name="fullname" id="" required placeholder="Enter Name: " > <br>
          <label for="image">Image</label>
          <input type="file" name="image" id="" value="" accept=".jpg, .jpeg, .png"> <br> <br>
          <input type="submit" value="Upload" name="cebu" >
          </form> 
         

        </div>

        <div class="container-tittle2">Employees</div>

        <div class="members-cebu">

          <div class="members-intro" id="members-intro-id">Please Select a Branch Manager</div>

          <?php include("image-admin1.php"); ?>

          <button id="add-member-cebu" style="width: 5vw; height: 3vw; margin-top:2vh; font-size:1vw; color:red; ">add member</button>

          <?php
          include("connect.php");
          $sql = mysqli_query($conn, "SELECT name FROM managers WHERE category = 'cebu' ");
          $data = $sql->fetch_all(MYSQLI_ASSOC);
          ?>

          <form class="form-member-cebu" action="member.php" method="post" autocomplete="off" enctype="multipart/form-data" >
          <label for="owner">Owner</label>
          <select name="owner">
              <option value=""></option> <!-- Empty option -->
              <?php foreach ($data as $row): ?>
                  <option value="<?= htmlspecialchars($row['name']) ?>">
                      <?= htmlspecialchars($row['name']) ?>
                  </option>
              <?php endforeach ?>
          </select><br><br>
          <label for="name">Name</label>
          <input type="text" name="fullname" id="" required placeholder="Enter Name: " > <br>
          <label for="image">Image</label>
          <input type="file" name="image" id="" value="" accept=".jpg, .jpeg, .png"> <br> <br>
          <input type="submit" value="Upload" name="cebu" >
          </form> 
         


        </div>

      </div>

      <div id="container-makati">

        <div class="container-tittle1">Branch Managers</div>

        <div class="manager-makati"  id="makati-managers">

          <?php include("image-makati-admin.php"); ?>

          <button id="add-manager-makati" style="width: 5vw; height: 3vw; margin-top:2vh; font-size:1vw; color:red; ">add manager</button>

          <form class="form-manager-makati" action="managers.php" method="post" autocomplete="off" enctype="multipart/form-data" >
          <label for="name">Name</label>
          <input type="text" name="fullname" id="" required placeholder="Enter Name: " > <br>
          <label for="image">Image</label>
          <input type="file" name="image" id="" value="" accept=".jpg, .jpeg, .png"> <br> <br>
          <input type="submit" value="Upload" name="makati" >
          </form> 


        </div>

        <div class="container-tittle2">Employees</div>

        <div class="members-makati">

        <div class="members-intro" id="members-intro-id">Please Select a Branch Manager</div>

          <?php include("image-admin1.php"); ?>

          <button id="add-member-makati" style="width: 5vw; height: 3vw; margin-top:2vh; font-size:1vw; color:red; ">add member</button>

          <?php
          include("connect.php");
          $sql = mysqli_query($conn, "SELECT name FROM managers WHERE category = 'makati' ");
          $data = $sql->fetch_all(MYSQLI_ASSOC);
          ?>

          <form class="form-member-makati" action="member.php" method="post" autocomplete="off" enctype="multipart/form-data" >
          <label for="owner">Owner</label>
          <select name="owner">
              <option value=""></option> <!-- Empty option -->
              <?php foreach ($data as $row): ?>
                  <option value="<?= htmlspecialchars($row['name']) ?>">
                      <?= htmlspecialchars($row['name']) ?>
                  </option>
              <?php endforeach ?>
          </select><br><br>
          <label for="name">Name</label>
          <input type="text" name="fullname" id="" required placeholder="Enter Name: " > <br>
          <label for="image">Image</label>
          <input type="file" name="image" id="" value="" accept=".jpg, .jpeg, .png"> <br> <br>
          <input type="submit" value="Upload" name="makati" >
          </form> 

        </div>

      </div>

      <div id="container-bohol">

        <div class="container-tittle1">Branch Managers</div>

        <div class="manager-bohol"  id="bohol-managers">

        <?php include("image-bohol-admin.php"); ?>

          <button id="add-manager-bohol" style="width: 5vw; height: 3vw; margin-top:2vh; font-size:1vw; color:red; ">add manager</button>

          <form class="form-manager-bohol" action="managers.php" method="post" autocomplete="off" enctype="multipart/form-data" >
          <label for="name">Name</label>
          <input type="text" name="fullname" id="" required placeholder="Enter Name: " > <br>
          <label for="image">Image</label>
          <input type="file" name="image" id="" value="" accept=".jpg, .jpeg, .png"> <br> <br>
          <input type="submit" value="Upload" name="bohol" >
          </form> 

        </div>

        <div class="container-tittle2">Employees</div>

        <div class="members-bohol">

          <div class="members-intro" id="members-intro-id">Please Select a Branch Manager</div>

          <?php include("image-admin1.php"); ?>

            <button id="add-member-bohol" style="width: 5vw; height: 3vw; margin-top:2vh; font-size:1vw; color:red; ">add member</button>

            <?php
            include("connect.php");
            $sql = mysqli_query($conn, "SELECT name FROM managers WHERE category = 'bohol' ");
            $data = $sql->fetch_all(MYSQLI_ASSOC);
            ?>

            <form class="form-member-bohol" action="member.php" method="post" autocomplete="off" enctype="multipart/form-data" >
            <label for="owner">Owner</label>
            <select name="owner">
                <option value=""></option> <!-- Empty option -->
                <?php foreach ($data as $row): ?>
                    <option value="<?= htmlspecialchars($row['name']) ?>">
                        <?= htmlspecialchars($row['name']) ?>
                    </option>
                <?php endforeach ?>
            </select><br><br>
            <label for="name">Name</label>
            <input type="text" name="fullname" id="" required placeholder="Enter Name: " > <br>
            <label for="image">Image</label>
            <input type="file" name="image" id="" value="" accept=".jpg, .jpeg, .png"> <br> <br>
            <input type="submit" value="Upload" name="bohol" >
            </form> 

        </div>

      </div>

      <div id="container-negros">

        <div class="container-tittle1">Branch Managers</div>

        <div class="manager-negros"  id="negros-managers">

        <?php include("image-negros-admin.php"); ?>

          <button id="add-manager-negros" style="width: 5vw; height: 3vw; margin-top:2vh; font-size:1vw; color:red; ">add manager</button>

          <form class="form-manager-negros" action="managers.php" method="post" autocomplete="off" enctype="multipart/form-data" >
          <label for="name">Name</label>
          <input type="text" name="fullname" id="" required placeholder="Enter Name: " > <br>
          <label for="image">Image</label>
          <input type="file" name="image" id="" value="" accept=".jpg, .jpeg, .png"> <br> <br>
          <input type="submit" value="Upload" name="negros" >
          </form> 

        </div>

        <div class="container-tittle2">Employees</div>

        <div class="members-negros">

          <div class="members-intro" id="members-intro-id">Please Select a Branch Manager</div>

          <?php include("image-admin1.php"); ?>

          <button id="add-member-negros" style="width: 5vw; height: 3vw; margin-top:2vh; font-size:1vw; color:red; ">add member</button>

          <?php
          include("connect.php");
          $sql = mysqli_query($conn, "SELECT name FROM managers WHERE category = 'negros' ");
          $data = $sql->fetch_all(MYSQLI_ASSOC);
          ?>

          <form class="form-member-negros" action="member.php" method="post" autocomplete="off" enctype="multipart/form-data" >
          <label for="owner">Owner</label>
          <select name="owner">
              <option value=""></option> <!-- Empty option -->
              <?php foreach ($data as $row): ?>
                  <option value="<?= htmlspecialchars($row['name']) ?>">
                      <?= htmlspecialchars($row['name']) ?>
                  </option>
              <?php endforeach ?>
          </select><br><br>
          <label for="name">Name</label>
          <input type="text" name="fullname" id="" required placeholder="Enter Name: " > <br>
          <label for="image">Image</label>
          <input type="file" name="image" id="" value="" accept=".jpg, .jpeg, .png"> <br> <br>
          <input type="submit" value="Upload" name="negros" >
          </form> 
      

        </div>

      </div>

      <div id="container-pampanga">

        <div class="container-tittle1">Branch Managers</div>

        <div class="manager-pampanga" id="pampanga-managers">

        <?php include("image-pampanga-admin.php"); ?>

        <button id="add-manager-pampanga" style="width: 5vw; height: 3vw; margin-top:2vh; font-size:1vw; color:red; ">add manager</button>

        <form class="form-manager-pampanga" action="managers.php" method="post" autocomplete="off" enctype="multipart/form-data" >
        <label for="name">Name</label>
        <input type="text" name="fullname" id="" required placeholder="Enter Name: " > <br>
        <label for="image">Image</label>
        <input type="file" name="image" id="" value="" accept=".jpg, .jpeg, .png"> <br> <br>
        <input type="submit" value="Upload" name="pampanga" >
        </form> 


        </div>

        <div class="container-tittle2">Employees</div>

        <div class="members-pampanga">

          <div class="members-intro" id="members-intro-id">Please Select a Branch Manager</div>

          <?php include("image-admin1.php"); ?>

          <button id="add-member-pampanga" style="width: 5vw; height: 3vw; margin-top:2vh; font-size:1vw; color:red; ">add member </button>

          <?php
          include("connect.php");
          $sql = mysqli_query($conn, "SELECT name FROM managers WHERE category = 'pampanga' ");
          $data = $sql->fetch_all(MYSQLI_ASSOC);
          ?>

          <form class="form-member-pampanga" action="member.php" method="post" autocomplete="off" enctype="multipart/form-data" >
          <label for="owner">Owner</label>
          <select name="owner">
              <option value=""></option> <!-- Empty option -->
              <?php foreach ($data as $row): ?>
                  <option value="<?= htmlspecialchars($row['name']) ?>">
                      <?= htmlspecialchars($row['name']) ?>
                  </option>
              <?php endforeach ?>
          </select><br><br>
          <label for="name">Name</label>
          <input type="text" name="fullname" id="" required placeholder="Enter Name: " > <br>
          <label for="image">Image</label>
          <input type="file" name="image" id="" value="" accept=".jpg, .jpeg, .png"> <br> <br>
          <input type="submit" value="Upload" name="pampanga" >
          </form> 
                

        </div>

      </div>


    </section>

  </main>

  <header class="header">

    <div id="header-content">

      <div class="navigation">

        <nav class="nav">
          <ul class="nav_list">

            <li class="nav_item">
              <button id="edit-news">Edit News</button>
            </li>

            <li class="nav_item">
              <button id="edit-member">Edit Member</button>
            </li>

            <li class="nav_item">
              <a href="logout.php" class="nav_link_logout">Log out</a>
            </li>

          </ul>
        </nav>

      </div>

    </div>

  </header>

  <script src="adminHomepage.js"></script>
  


</body>

</html>