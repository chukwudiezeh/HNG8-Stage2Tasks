<?php 
session_start();

if (isset($_POST['next1'])){
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['phone'] = $_POST['phone'];
    $_SESSION['address'] = $_POST['address'];
    $_SESSION['statement'] = $_POST['statement'];
    $_SESSION['role'] = $_POST['role'];

}

if (isset($_POST['next2'])){
    $_SESSION['experience1'] = $_POST['experience1'];
    $_SESSION['experience2'] = $_POST['experience2'];
}

if (isset($_POST['next3'])){
    $_SESSION['skills'] = $_POST['skills'];
    $_SESSION['certifications'] = $_POST['certifications'];

}

if (isset($_POST['next4'])){
    $_SESSION['interests'] = $_POST['interests'];
    $_SESSION['strengths'] = $_POST['strengths'];
}

if (isset($_POST['submit'])){
    header("Location:resume_page.php");
}
?>


<html>
<head>
    <title>Zuri | I4G Interactive Resume Task</title>
    <link rel="stylesheet" type="text/css" href="./styles/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- Smart Wizard CSS -->
    <link href="https://cdn.jsdelivr.net/npm/smartwizard@5/dist/css/smart_wizard_all.min.css" rel="stylesheet"
        type="text/css" />
    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/smartwizard@5/dist/js/jquery.smartWizard.min.js"
        type="text/javascript"></script>
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
        </nav>
    </div>
    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="container d-flex justify-content-center">
                <div class="col-lg-10">
                    <div class="card user-card-full">
                        <div class="card-header">
                            <h5 class="card-title">Interactive Resume page</h5>
                        </div>
                        <form method="post">
                            <div class="card-body ">
                                <div id="smartwizard">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#step-1">Step 1<br />
                                                <small>Basic information</small>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#step-2">Step 2<br />
                                                <small>Experience</small>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#step-3">Step 3<br />
                                                <small>Skills & Certifications</small>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#step-4">Step 4<br />
                                                <small>Interests & Strengths</small>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#step-5">Step 5<br />
                                                <small>generate Your Resume</small>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="mt-4 tab-content">
                                        <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="name">Full Name</label>
                                                    <input type="text" class="form-control" id="name"
                                                        value="Lucas Bryant Wilson" name="name" placeholder="Full Name"
                                                        required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control" id="email"
                                                        value="lucasbryantwilson@gmail.com" name="email"
                                                        placeholder="Email" required>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-md-6">
                                                    <label for="phone">Phone</label>
                                                    <input type="number" class="form-control" id="phone"
                                                        value="5094831039" name="phone" placeholder="Phone" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="address">Address</label>
                                                    <input type="text" class="form-control" id="address"
                                                        value="2330 Mudlick Road" name="address" placeholder="Address"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-md-6">
                                                    <label for="statement">Career Statement/Objective</label>
                                                    <textarea class="form-control" id="statement" name="statement" placeholder="Career Objective/statement" required rows="4"
                                                        cols="50">To work as a Software Engineer applying my knowledge in the field of testing, designing, and maintenance to cater to the specific needs of the people. I wish to work in a team of motivated individuals who wish to work towards the advancement of the company and its goals.</textarea>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Role</label>
                                                    <input type="text" class="form-control" value="Backend Engineer"
                                                        name="role" id="role" placeholder="Role" required>
                                                </div>
                                            </div>

                                            <div class="toolbar toolbar-bottom" style="text-align: right;">
                                                <button name="next1" style="color: #fff;background-color: #17a2b8;border: 1px solid #17a2b8;padding: .375rem .75rem;border-radius: .25rem;font-weight: 400;display: inline-block;" onclick="$('#smartwizard').smartWizard('next')">Next</button>
                                            </div>
                                        </div>
                                        <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
                                            <div id="experience">

                                                <div id="experience-1">

                                                    <p>
                                                        <b>Experience 1</b>
                                                    </p>
                                                    <!-- <span style="margin-left: 10px;"><button id="button10" style="background-color:#fff;border:1px solid #17a2b8; color: #17a2b8; text-decoration: none;padding: 5px; border-radius: 5px;">Add Experience</button></span> -->

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Company name</label>
                                                            <input type="text" class="form-control" name="experience1[]"
                                                                value="Hooli Corporations" placeholder="Company name"
                                                                required>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label>Company Location</label>
                                                            <input type="text" class="form-control" name="experience1[]"
                                                                value="Palo alto,California"
                                                                placeholder="Company Loacation" required>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-md-6">
                                                            <label>Position</label>
                                                            <input type="text" class="form-control" name="experience1[]"
                                                                value="Software Developer" placeholder="Position"
                                                                required>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label>Year</label>
                                                            <input type="text" class="form-control" name="experience1[]"
                                                                value="Jul 2016 - Sep 2016" placeholder="Year" required>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-md-12">
                                                            <label>Duties</label>
                                                            <textarea class="form-control" placeholder="Duties"
                                                                name="experience1[]" required rows="4"
                                                                cols="50">Carried out software maintenance work for a virtual health care service provider.Developed fixes and introduced new functionality to a web-based application using python and Mongo DB.Created a data migration tool for the transition from the existing database in MongoDB.Significantly increased coverage and depth of testing the overall system</textarea>
                                                            <span>seperate each duty with a fullstop.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="experience-2" style="margin-top: 15px;">
                                                    <div style="flex-direction: row; display: flex;">
                                                        <p>
                                                            <b>Experience 2</b>
                                                        </p>
                                                        <!-- <span style="margin-left: 10px;"><button id="button10" style="background-color:#fff;border:1px solid #17a2b8; color: #17a2b8; text-decoration: none;padding: 5px; border-radius: 5px;">Add Experience</button></span> -->
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Company name</label>
                                                            <input type="text" class="form-control"
                                                                value="Umbrella Corporation" name="experience2[]"
                                                                placeholder="Company name" required>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label>Company Location</label>
                                                            <input type="text" class="form-control"
                                                                value="Palo Alto, California" name="experience2[]"
                                                                placeholder="Company Loacation" required>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-md-6">
                                                            <label>Position</label>
                                                            <input type="text" value="Senior Developer"
                                                                class="form-control" name="experience2[]"
                                                                placeholder="Position" required>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label>Year</label>
                                                            <input type="text" value="jun 2017 - Feb 2018"
                                                                class="form-control" name="experience2[]"
                                                                placeholder="Year" required>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-md-12">
                                                            <textarea class="form-control" placeholder="Duties"
                                                                name="experience2[]" required rows="4"
                                                                cols="50">Worked on a high-profile project for a Post office, maintaining software for the POS system and supporting the test, build and deoployment processes for over 11k Post Office branches.Designed and implemented a test harness using Python and TCP/IP sockets.Developed tests to simulate live payments, reducing the overheads of testing directly</textarea>
                                                            <span>seperate each duty with a fullstop.</span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="toolbar toolbar-bottom" style="text-align: right;">
                                                <button class="btn"
                                                    style="color: #fff;background-color: #17a2b8; border: 1px solid #17a2b8; padding: .375rem .75rem;border-radius: .25rem;font-weight: 400;display: inline-block;"
                                                    onclick="$('#smartwizard').smartWizard('prev')"> Previous</button>
                                                <button name="next2" 
                                                    style="color: #fff;background-color: #17a2b8;border: 1px solid #17a2b8;padding: .375rem .75rem;border-radius: .25rem;font-weight: 400;display: inline-block;"
                                                    onclick="$('#smartwizard').smartWizard('next')">Next</button>
                                            </div>
                                        </div>
                                        <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Skills</label>
                                                    <textarea class="form-control" name="skills" placeholder="Skills" required
                                                        rows="4"
                                                        cols="50">Web Development.Graphics Design.UI/UX Design.Project Management.Sales.Microsoft Office Suite</textarea>
                                                    <span>seperate each skill with a fullstop.</span>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Certifications</label>
                                                    <textarea class="form-control" name="certifications" placeholder="Certifications" required
                                                        rows="4"
                                                        cols="50">Frontend Web Development.Scrum Fundamental Certified.Digital Marketing</textarea>
                                                    <span>seperate each certification with a fullstop.</span>
                                                </div>
                                            </div>

                                            <div class="toolbar toolbar-bottom" style="text-align: right;">
                                                <button class="btn"
                                                    style="color: #fff;background-color: #17a2b8; border: 1px solid #17a2b8; padding: .375rem .75rem;border-radius: .25rem;font-weight: 400;display: inline-block;"
                                                    onclick="$('#smartwizard').smartWizard('prev')"> Previous</button>
                                                <button name="next3" 
                                                    style="color: #fff;background-color: #17a2b8;border: 1px solid #17a2b8;padding: .375rem .75rem;border-radius: .25rem;font-weight: 400;display: inline-block;"
                                                    onclick="$('#smartwizard').smartWizard('next')">Next</button>
                                            </div>
                                        </div>
                                        <div id="step-4" class="tab-pane" role="tabpanel" aria-labelledby="step-4">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Interests</label>
                                                    <textarea class="form-control" name="interests" placeholder="Interest" required
                                                        rows="4"
                                                        cols="50">Innovations.Motivating people.Travelling.Meeting new people.Music</textarea>
                                                    <span>seperate each duty with a fullstop.</span>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Strengths</label>
                                                    <textarea class="form-control" name="strengths" placeholder="Strengths" required
                                                        rows="4"
                                                        cols="50">Effective Communicator.Critical thinker / Problem Solving.Team Player</textarea>
                                                    <span>seperate each duty with a fullstop.</span>
                                                </div>
                                            </div>

                                            <div class="toolbar toolbar-bottom" style="text-align: right;">
                                                <button class="btn"
                                                    style="color: #fff;background-color: #17a2b8; border: 1px solid #17a2b8; padding: .375rem .75rem;border-radius: .25rem;font-weight: 400;display: inline-block;"
                                                    onclick="$('#smartwizard').smartWizard('prev')"> Previous</button>
                                                <button name="next4"
                                                    style="color: #fff;background-color: #17a2b8;border: 1px solid #17a2b8;padding: .375rem .75rem;border-radius: .25rem;font-weight: 400;display: inline-block;"
                                                    onclick="$('#smartwizard').smartWizard('next')">Next</button>
                                            </div>
                                        </div>
                                        <div id="step-5" class="tab-pane" role="tabpanel" aria-labelledby="step-5">
                                            <div class="row">
                                                <div class="col-md-12"
                                                    style="justify-content: center; margin-left: auto; margin-right: auto;">
                                                    <span style="text-align: center;">Generate your Resume now</span>
                                                    <button class="btn"
                                                        style="color: #fff;background-color: #17a2b8; border: 1px solid #17a2b8; padding: .375rem .75rem;border-radius: .25rem;font-weight: 400;display: inline-block;"
                                                        type="submit" name="submit">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">

        $(document).ready(function () {

            $('#smartwizard').smartWizard({
                selected: 0, // Initial selected step, 0 = first step
                theme: 'arrows', // theme for the wizard, related css need to include for other than default theme
                justified: true, // Nav menu justification. true/false
                darkMode: false, // Enable/disable Dark Mode if the theme supports. true/false
                autoAdjustHeight: true, // Automatically adjust content height
                cycleSteps: false, // Allows to cycle the navigation of steps
                backButtonSupport: true, // Enable the back button support
                enableURLhash: true, // Enable selection of the step based on url hash
                transition: {
                    animation: 'none', // Effect on navigation, none/fade/slide-horizontal/slide-vertical/slide-swing
                    speed: '400', // Transion animation speed
                    easing: '' // Transition animation easing. Not supported without a jQuery easing plugin
                },
                toolbarSettings: {
                    toolbarPosition: 'bottom', // none, top, bottom, both
                    toolbarButtonPosition: 'right', // left, right, center
                    showNextButton: false, // show/hide a Next button
                    showPreviousButton: false, // show/hide a Previous button
                },
                anchorSettings: {
                    anchorClickable: false, // Enable/Disable anchor navigation
                    enableAllAnchors: false, // Activates all anchors clickable all times
                    markDoneStep: true, // Add done state on navigation
                    markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
                    removeDoneStepOnNavigateBack: true, // While navigate back done step after active step will be cleared
                    enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
                }
            });

        });

    </script>

</body>

</html>