<?php
session_start();


$skills = explode(".", $_SESSION['skills']);
$certifications = explode(".", $_SESSION['certifications']);
$interests = explode(".", $_SESSION['interests']);
$strengths = explode(".", $_SESSION['strengths']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/Resumestyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>MY RESUME</title>
</head>
<body>
<div id="abc">
        <nav class="bg-c-lite-green" style="width: 100%;height: 80px;background-color: #0005;line-height: 70px;">
            <div style="display: inline;float: left;">
                <a href="https://internship.zuri.team/" target="_blank" alt="zuri_logo">
                    <img src="./images/zuri logo.png" style="width: 70px;height: 70px;" />
                </a>
                <a href="https://ingressive.org/" target="_blank">
                    <img src="./images/i4g.jfif" style="width:150px; height:70px" />
                </a>
            </div>
            <ul>
                <li><a href="https://hng8-stage2-interactive-resume.herokuapp.com/index.php">Back to Home</a></li>
            </ul>
        </nav>
    </div>
  <div class="main">
    <div class="top-section">
        <div>
          <p class="p1"><?= $_SESSION['name']; ?></p>
          <p class="p2"><?= $_SESSION['role']; ?></p>
        </div>
    </div>
    <div class="clearfix"></div>


    <div style="flex-direction: row;">
    <div class="col-dev-4">
        <div class="content-box" style="padding-left:40px;">
          <p class="head">Contact</p>
          <p class="p3"><i class="fa fa-phone"></i>&nbsp;&nbsp; <?= $_SESSION['phone']; ?></p>
          <p class="p3"><i class="fa fa-envelope"></i>&nbsp;&nbsp; <?= $_SESSION['email']; ?></p>
          <p class="p3"><i class="fa fa-home"></i>&nbsp;&nbsp; <?= $_SESSION['address']; ?></p>
        
          <br/>


          <p class="head">My Skills</p>
          <ul class="skills">
              <?php 
              foreach($skills as $skill){
                  ?>

                <li><span><?= $skill ?></span></li>

                  <?php
              }
              ?>
            <!-- <li><span>Graphics Design</span></li>
            <li><span>UI/UX Design</span></li>
            <li><span>Project Management</span></li>
            <li><span>Sales</span></li>
            <li><span>Microsoft Office Suite (Word, Excel, PowerPoint, Access, Publisher</span></li> -->
          </ul>
          
      <br/>
          <p class="head">Certifications</p>
          <?php 
              foreach($certifications as $certification){
                  ?>

                <p class="p3"><?= $certification ?></p>

                  <?php
              }
              ?>
        <!-- <p class="p3">Frontend Web Development</p>
        <p class="p3">Scrum Fundamentals Certified</p>
        <p class="p3">Graphics Design</p>
        <p class="p3">Digita Marketing</p> -->

        <br/>

        <p class="head">Languages</p>
          <p class="p3">English</p>
          <p class="p3">Igbo</p>
          <p class="p3">Yoruba</p>

          <br/>

          <p class="head">Interests</p>
          <ul class="skills">
          <?php 
              foreach($interests as $interest){
                  ?>

                <li><span><?= $interest ?></span></li>

                  <?php
              }
              ?>
            <!-- <li><span>Technology & Innovations</span></li>
            <li><span>Motivating People.</span></li>
            <li><span>Programming</span></li>
            <li><span>Travelling</span></li>
            <li><span>Designing</span></li>
            <li><span>Meeting new people</span></li> -->
          </ul>

          <br/>
          <p class="head">Strengths</p>
          <ul class="skills">
          <?php 
              foreach($strengths as $strength){
                  ?>

                <li><span><?= $strength ?></span></li>

                  <?php
              }
              ?>
            <!-- <li><span>Effective communicator </span></li>
            <li><span>Proficient in ICT </span></li>
            <li><span>Management / Customer relations</span></li>
            <li><span>Effective team player</span></li> -->
          </ul>
    </div>
    </div>
    
   <div class="line"></div>

    
    
    <div class="col-dev-8">
      <div class="content-box" style="padding-left:40px;">

        <p class="head">Profile</p>
        <p class="p3" style="font-size: 16px;"><?= $_SESSION['statement'] ?></p>



        <br/>
        <p class="head">Experience</p>
        <p class="sub-head"><?= $_SESSION['experience1'][0]. ", ". $_SESSION['experience1'][1].", ".$_SESSION['experience1'][3] ?></p>
        <p class="sub-head">Position: <?= $_SESSION['experience1'][2] ?></p>
        <p class="sub-head">Duties:</p>
        <ul class="skills">
                <?php 
                $experience1_duties = explode(".", $_SESSION['experience1'][4]);
                
                foreach ($experience1_duties as $experience1_duty){
                    ?>

                    <li>
                        <span> <?= $experience1_duty ?></span>
                    </li>

                    <?php
                }
                
                
                ?>


          
          <!-- <li><span>
              Hardware and Software Maintenance
              Company’s Social Media Accounts.
            </span></li>
          <li><span>
              Giving reports to top management.
            </span></li> -->
        </ul>
        <br/>
        <p class="sub-head"><?= $_SESSION['experience2'][0]. ", ". $_SESSION['experience2'][1].", ".$_SESSION['experience2'][3] ?></p>
        <p class="sub-head">Position: <?= $_SESSION['experience2'][2] ?></p>
        <p class="sub-head">Duties:</p>
        <ul class="skills">
                <?php 
                $experience2_duties = explode(".", $_SESSION['experience2'][4]);
                
                foreach ($experience2_duties as $experience2_duty){
                    ?>

                    <li>
                        <span> <?= $experience2_duty ?></span>
                    </li>

                    <?php
                }
                
                
                ?>


          
          <!-- <li><span>
              Hardware and Software Maintenance
              Company’s Social Media Accounts.
            </span></li>
          <li><span>
              Giving reports to top management.
            </span></li> -->
        </ul>


      </div>
    </div>
  </div>

  </div>
</body>

</html>