<?php 
$name = "Chukwudi Ezeh";
$role = "Backend Engineer";
$email = "cezeh96@gmail.com";
$username = "@ZionBoi";
$track = "Backend";
$stage = "Stage 2";
$repo_link = "https://github.com/chukwudiezeh/HNG8-Stage2Tasks/tree/main/name_task";
?>


<html>
<head>
    <title>Zuri | I4G Name Task</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
</head>

<body>
    <div id="abc">
        <nav class="bg-c-lite-green" style="width: 100%;height: 80px;background-color: #0005;line-height: 70px;">
            <div style="display: inline;float: left;">
                <a href="https://internship.zuri.team/" target="_blank" alt="zuri_logo">
                    <img src="../images/zuri logo.png logo.png" style="width: 70px;height: 70px;" />
                </a>
                <a href="https://ingressive.org/" target="_blank">
                    <img src="../images/i4g.jfif" style="width:150px; height:70px" />
                </a>
            </div>
        </nav>
    </div>
    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="container d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="card user-card-full">
                        <div class="row m-l-0 m-r-0">
                            <div class="col-sm-4 bg-c-lite-green user-profile">
                                <div class="card-block text-center text-white">
                                    <div class="m-b-20"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                                    <h5 class="f-w-600"><?= $name ?></h5>
                                    <p><?= $role ?></p> <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="card-block">
                                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Slack Email</p>
                                            <h6 class="text-muted f-w-400"><?= $email ?></h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Slack username</p>
                                            <h6 class="text-muted f-w-400"><?= $username ?></h6>
                                        </div>
                                    </div>
                                    <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Others</h6>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Track</p>
                                            <h6 class="text-muted f-w-400"><?= $track ?></h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Stage</p>
                                            <h6 class="text-muted f-w-400"><?= $stage ?></h6>
                                        </div>
                                        <br/>
                                        <div class="col-sm-12">
                                            <p class="m-b-10 f-w-600" style="margin-bottom: 0px; margin-top: 10px;">Github Repository for this task</p>
                                            <h6 class="text-muted f-w-400"><a href="<?= $repo_link ?>" target="_blank"><?= $repo_link ?></a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
