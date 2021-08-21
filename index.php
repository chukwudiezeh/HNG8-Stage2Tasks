<?php
session_start();

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $_SESSION['success'] = "message Sent Successfully";

    header("location:https://hng8-stage2-interactive-resume.herokuapp.com/#contact-form");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/Resumestyle.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
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
                <li><a href="#contact-form">Send me a message</a></li>
            </ul>
        </nav>
    </div>
    <div class="main">
        <div class="top-section">
            <div>
                <p class="p1">Chukwudi Ezeh</p>
                <p class="p2">Backend Engineer</p>
            </div>
        </div>
        <div class="clearfix"></div>


        <div style="flex-direction: row;">
            <div class="col-dev-4">
                <div class="content-box" style="padding-left:40px;">
                    <p class="head">Contact</p>
                    <p class="p3"><i class="fa fa-phone"></i>&nbsp;&nbsp; 09123468944</p>
                    <p class="p3"><i class="fa fa-envelope"></i>&nbsp;&nbsp; cezeh96@gmail.com</p>
                    <p class="p3"><i class="fa fa-home"></i>&nbsp;&nbsp; Lagos, Nigeria</p>

                    <br />


                    <p class="head">My Skills</p>
                    <ul class="skills">
                        <li><span>Web Development</span></li>
                        <li><span>Graphics Design</span></li>
                        <li><span>UI/UX Design</span></li>
                        <li><span>Project Management</span></li>
                        <li><span>Sales</span></li>
                        <li><span>Microsoft Office Suite</span></li>
                    </ul>

                    <br />
                    <p class="head">Certifications</p>
                    <p class="p3">Web Development (Backend)</p>
                    <p class="p3">Scrum Fundamentals Certified</p>
                    <p class="p3">Graphics Design</p>
                    <p class="p3">Digita Marketing</p>

                    <br />

                    <p class="head">Languages</p>
                    <p class="p3">English</p>
                    <p class="p3">Igbo</p>
                    <p class="p3">Yoruba</p>

                    <br />

                    <p class="head">Interests</p>
                    <ul class="skills">
                        <li><span>Technology & Innovations</span></li>
                        <li><span>Motivating People.</span></li>
                        <li><span>Programming</span></li>
                        <li><span>Travelling</span></li>
                        <li><span>Designing</span></li>
                        <li><span>Meeting new people</span></li>
                    </ul>

                    <br />
                    <p class="head">Strengths</p>
                    <ul class="skills">
                        <li><span>Effective communicator </span></li>
                        <li><span>Proficient in ICT </span></li>
                        <li><span>Management / Customer relations</span></li>
                        <li><span>Effective team player</span></li>
                    </ul>
                </div>
            </div>

            <div class="line"></div>



            <div class="col-dev-8">
                <div class="content-box" style="padding-left:40px;">

                    <p class="head">Profile</p>
                    <p class="p3" style="font-size: 16px;">To work as a Software Engineer applying my knowledge in the field of testing, designing, and maintenance to cater to the specific needs of the people. I wish to work in a team of motivated individuals who wish to work towards the advancement of the company and its goals.</p>



                    <br />
                    <p class="head">Experience</p>
                    <p class="sub-head">Hooli Corporations, Palo alto,California. (Jul 2016 - Sep 2016)</p>
                    <p class="sub-head">Position: Software Developer</p>
                    <p class="sub-head">Duties:</p>
                    <ul class="skills">

                        <li><span>
                                Carried out software maintenance work for a virtual health care service provider.
                            </span></li>
                        <li><span>
                                Developed fixes and introduced new functionality to a web-based application using python and Mongo DB.
                            </span></li>
                        <li><span>Created a data migration tool for the transition from the existing database in MongoDB.</span></li>
                        <li><span>Significantly increased coverage and depth of testing the overall system.</span></li>

                    </ul>
                    <br />
                    <p class="sub-head">Umbrella Corporation, Palo Alto, California. (Jun 2017 - Feb 2018)</p>
                    <p class="sub-head">Position: Senior Developer</p>
                    <p class="sub-head">Duties:</p>
                    <ul class="skills">

                        <li><span>
                                Worked on a high-profile project for a Post office, maintaining software for the POS system and supporting the test, build and deoployment processes for over 11k Post Office branches.
                            </span></li>
                        <li><span>
                                Designed and implemented a test harness using Python and TCP/IP sockets.
                            </span></li>
                        <li><span>Developed tests to simulate live payments, reducing the overheads of testing directly</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container contact-form" id="contact-form">
        <div class="contact-image">
            <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact" />
        </div>
        <form method="post">
            <h3>Drop me a Message</h3>
            <?php
            if (isset($_SESSION['success'])) {
            ?>
                <div class="alert alert-success"><?= $_SESSION['success'] ?></div>
            <?php
            } else if (isset($_SESSION['error'])) {
            ?>
                <div class="alert alert-danger"><?= $_SESSION['error'] ?></div>
            <?php
            }
            ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Your Name *" value="" required />
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Your Email *" value="" required />
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" class="form-control" placeholder="Your Phone Number *" value="" required />
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btnContact">Send Message</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea name="message" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;" required></textarea>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>