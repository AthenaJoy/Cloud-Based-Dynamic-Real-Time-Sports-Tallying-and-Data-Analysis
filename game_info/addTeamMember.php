<?php
        session_start();
        include('../connection/conn.php');    

          $id = $_GET['id'];
          $_SESSION['idOfTeam'] = $_GET['id'];   


          $game_id = $_SESSION['GameId'];
          $event_id = $_SESSION['EventId'];
          $game_type = $_SESSION['GameType'];
          // $team_id = $_SESSION['idOfTeam'];
          $team_count = $_SESSION['teamCount'];


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../template/AdminTemplate/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../template/AdminTemplate/assets/img/favicon.png">
  <title>
    Edit Information
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../template/AdminTemplate/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../template/AdminTemplate/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../template/AdminTemplate/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../template/AdminTemplate/assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="g-sidenav-show  bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/soft-ui-dashboard/pages/dashboard.html " target="_blank">
        <img src="../template/AdminTemplate/assets/img/favicon.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Menu</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link" href="../loadToDashboard.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>shop </title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(0.000000, 148.000000)">
                        <path class="color-background opacity-6" d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"></path>
                        <path class="color-background" d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link  " href="../loadToProfile.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <title>user</title>
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g fill="#000000" transform="translate(4.000000, 2.000000)">
            <path d="M8,2.5 C9.933,2.5 11.5,4.067 11.5,6 C11.5,7.933 9.933,9.5 8,9.5 C6.067,9.5 4.5,7.933 4.5,6 C4.5,4.067 6.067,2.5 8,2.5 Z M8,0.5 C5.514,0.5 3.5,2.514 3.5,6 C3.5,9.486 5.514,11.5 8,11.5 C10.486,11.5 12.5,9.486 12.5,6 C12.5,2.514 10.486,0.5 8,0.5 Z"></path>
            <path d="M12,14.5 C12.75,14.5 13.5,14.774 14.072,15.286 C14.651,15.804 15,16.554 15,17.5 L1,17.5 C1,16.554 1.349,15.804 1.928,15.286 C2.5,14.774 3.25,14.5 4,14.5 L12,14.5 Z M12,12.5 L4,12.5 C2.533,12.5 0.5,13.434 0.5,17.5 C0.5,18.052 0.948,18.5 1.5,18.5 L14.5,18.5 C15.052,18.5 15.5,18.052 15.5,17.5 C15.5,13.434 13.467,12.5 12,12.5 Z"></path>
        </g>
    </g>
</svg>


                <title>office</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g id="office" transform="translate(153.000000, 2.000000)">
                        <path class="color-background opacity-6" d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"></path>
                        <path class="color-background" d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link  active" href="../loadToCreateProgram.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <svg width="45px" height="45px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <g fill="none" stroke="#FFFFFF" stroke-width="2">
        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
        <path d="M7 8h10M7 12h7m-7 4h5"/>
    </g>
</svg>



              <title>Program</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g id="office" transform="translate(153.000000, 2.000000)">
                        <path class="color-background opacity-6" d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"></path>
                        <path class="color-background" d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Program</span>
          </a>
        </li>
        
        
     
       
       
       
      
      </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
   
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Cloud Based Realtime Event</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Edit Information</li>
          </ol>
        
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
             
            
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
         
            <li class="nav-item d-flex align-items-center">
              <a href="../loadToIndex.php" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Logout</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
             
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="template/AdminTemplate/assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0 ">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="template/AdminTemplate/assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0 ">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0 ">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Edit Information</h6>
              <a href="addInformation.php?id=<?php echo $id; ?>" class = "btn btn-danger">Back</a>
              
                
            </div>
            <div class="card-body px-0 pt-0 pb-2" style = "margin-top: -20px;">
              <div class="table-responsive p-0">

                      <form action="ProcessTeamInfo.php" method = "post" enctype="multipart/form-data">

                                <div class="section1" style = "display: flex; margin: 40px;">

                                        <div class="part1">
                                                <div class="forLogo">
                                                    <img src="<?php 

                                                      $selectLogo = "SELECT logo FROM teams WHERE id = $id";
                                                      $getLogo = mysqli_query($conn,$selectLogo);
                                                      $LogoRepresent = mysqli_fetch_assoc($getLogo);


                                                      echo $LogoRepresent['logo'];
                                                      
                                                      ?>" alt="no image" id = "logo" style = "width: 300px; height: 300px; border-radius: 10px;">

                          

                                                </div>

                                                <div class="ForButtonToChangeTheLogo" style = "display: flex;  justify-content: center;">
                                                  <input type="file" id = "changeLogoPicture" name = "changeLogoPicture" hidden value = "<?php echo $LogoRepresent['logo']; ?>" onchange="previewImage(event)">
                                                  <label for="changeLogoPicture" class = "btn btn-primary" style = "margin-top: 10px;" >Upload Team Logo</label>
                                                  </div>
                                        </div>

 
                                        <div class="forInformation1">
                                                        <?php

                                                            $sqlForSelectingInfoInTeams = "SELECT * FROM teams WHERE id = $id";
                                                            $resultForSelectingsql = mysqli_query($conn,$sqlForSelectingInfoInTeams);
                                                            $GETdATA = mysqli_fetch_assoc($resultForSelectingsql);

                                                            $_SESSION['number_of_player'] = $GETdATA['number_of_player'];

                                                          
                                                      
                                                        ?>


                                                    <div class="form-group" style = "margin: 40px; margin-left: 100px;">
                                                          <label for="team_name">Team Name: </label>
                                                          <input type="text" id = "team_name" name = "team_name" class = "form-control" style = "width: 35vw;" value = "<?php echo $GETdATA['team_name']; ?>">
                                                            <?php
                                                                    if($game_type == 'Creative_Folk_Dance' || $game_type == 'Pop_Dance' || $game_type == 'Mass_Dance' || $game_type == 'Dance_Sports'){
                                                                      echo '<label for="player_count">Dancer Count: </label>';
                                                                    }else if($game_type == 'Vocal_Duet' || $game_type == 'Pop_Solo'){
                                                                      echo '<label for="player_count">Singer Count: </label>';
                                                                    }else if($game_type == 'Charcoal_Rendering' || $game_type == 'Pencil_Drawing' || $game_type == 'Painting' || $game_type == 'Poster_Making' || $game_type == 'Phone_Photography'){
                                                                      echo '<label for="player_count">Artist Count: </label>';
                                                                    }else if($game_type == 'Mr_and_Mrs_Panagtigi'){
                                                                      echo '<label for="player_count">Participant: </label>';
                                                                    }else{
                                                                      echo '<label for="player_count">Player Count: </label>';
                                                                    }
                                                            ?>
                                                          <?php

                                                         
                                                                if($_SESSION['GameType'] == 'Runs_Men' || $_SESSION['GameType'] == 'Runs_Men'){
                                                                  $val = 6;
                                                                  echo '<input type="text" id="player_count" name="player_count" class="form-control" style="width: 10vw;" readonly value="' . $val . '">';
                                                                }else if($_SESSION['GameType'] == 'Throws_Men' || $_SESSION['GameType'] == 'Throws_Women'){
                                                                  $val = 6;
                                                                  echo '<input type="text" id="player_count" name="player_count" class="form-control" style="width: 10vw;" readonly value="' . $val . '">';
                                                                }else if($_SESSION['GameType'] == 'Jumps_Men' || $_SESSION['GameType'] == 'Jumps_Women'){
                                                                  $val = 6;
                                                                  echo '<input type="text" id="player_count" name="player_count" class="form-control" style="width: 10vw;" readonly value="' . $val . '">';
                                                                }else if($_SESSION['GameType'] == 'Badminton_Single_Men'|| $_SESSION['GameType'] == 'Badminton_Double_Men'){
                                                                  $val = 3;
                                                                  echo '<input type="text" id="player_count" name="player_count" class="form-control" style="width: 10vw;" readonly value="' . $val . '">';
                                                                }else if($_SESSION['GameType'] == 'Badminton_Single_Women'|| $_SESSION['GameType'] == 'Badminton_Double_Women'){
                                                                  $val = 2;
                                                                  echo '<input type="text" id="player_count" name="player_count" class="form-control" style="width: 10vw;" readonly value="' . $val . '">';
                                                                }else if($_SESSION['GameType'] == 'Table_tennis_Single_Men' || $_SESSION['GameType'] == 'Table_tennis_Double_Men'){
                                                                  $val = 3;
                                                                  echo '<input type="text" id="player_count" name="player_count" class="form-control" style="width: 10vw;" readonly value="' . $val . '">';
                                                                }else if($_SESSION['GameType'] == 'Table_tennis_Single_Women' || $_SESSION['GameType'] == 'Table_tennis_Double_Women'){
                                                                  $val = 2;
                                                                  echo '<input type="text" id="player_count" name="player_count" class="form-control" style="width: 10vw;" readonly value="' . $val . '">';
                                                                }else if($_SESSION['GameType'] == 'Dance_Sports'){
                                                                  $val = 2;
                                                                  echo '<input type="text" id="player_count" name="player_count" class="form-control" style="width: 10vw;" readonly value="' . $val . '">';
                                                                }else if($_SESSION['GameType'] == 'Chess'){
                                                                  $val = 1;
                                                                  echo '<input type="text" id="player_count" name="player_count" class="form-control" style="width: 10vw;" readonly value="' . $val . '">';
                                                                }else if($_SESSION['GameType'] == 'Archery'){
                                                                  $val = 1;
                                                                  echo '<input type="text" id="player_count" name="player_count" class="form-control" style="width: 10vw;" readonly value="' . $val . '">';
                                                                }else if($_SESSION['GameType'] == 'Vocal_Duet'){
                                                                  $val = 1;
                                                                  echo '<input type="text" id="player_count" name="player_count" class="form-control" style="width: 10vw;" readonly value="' . $val . '">';
                                                                }else if($_SESSION['GameType'] == 'Pop_Solo'){
                                                                  $val = 1;
                                                                  echo '<input type="text" id="player_count" name="player_count" class="form-control" style="width: 10vw;" readonly value="' . $val . '">';
                                                                }else if($_SESSION['GameType'] == 'Charcoal_Rendering'){
                                                                  $val = 1;
                                                                  echo '<input type="text" id="player_count" name="player_count" class="form-control" style="width: 10vw;" readonly value="' . $val . '">';
                                                                }else if($_SESSION['GameType'] == 'Pencil_Drawing'){
                                                                  $val = 1;
                                                                  echo '<input type="text" id="player_count" name="player_count" class="form-control" style="width: 10vw;" readonly value="' . $val . '">';
                                                                }else if($_SESSION['GameType'] == 'Painting'){
                                                                  $val = 1;
                                                                  echo '<input type="text" id="player_count" name="player_count" class="form-control" style="width: 10vw;" readonly value="' . $val . '">';
                                                                }else if($_SESSION['GameType'] == 'Poster_Making'){
                                                                  $val = 1;
                                                                  echo '<input type="text" id="player_count" name="player_count" class="form-control" style="width: 10vw;" readonly value="' . $val . '">';
                                                                }else if($_SESSION['GameType'] == 'Phone_Photography'){
                                                                  $val = 1;
                                                                  echo '<input type="text" id="player_count" name="player_count" class="form-control" style="width: 10vw;" readonly value="' . $val . '">';
                                                                }else if($_SESSION['GameType'] == 'Mr_and_Mrs_Panagtigi'){
                                                                  $val = 1;
                                                                  echo '<input type="text" id="player_count" name="player_count" class="form-control" style="width: 10vw;" readonly value="' . $val . '">';
                                                                }else{
                                                                        if($GETdATA['number_of_player'] != 0){
                                                                            echo '<input type="text" id="player_count" name="player_count" class="form-control" style="width: 10vw;" readonly value="' . htmlspecialchars($GETdATA['number_of_player']) . '" >';
                                                                          }else{
                                                                            echo '<input type="text" id="player_count" name="player_count" class="form-control" style="width: 10vw;" value="' . htmlspecialchars($GETdATA['number_of_player']) . '">';
                                                                          }
                                                                }

                                                                


                                                            
                                                          ?>
                                                          <input type = "submit" value = "Submit Primary Information" class = "btn btn-primary" style = "margin-top: 10px;">



                                                          <div class = "message">
                                                               
                                                                <?php 

                                                                  $status = $GETdATA['status'];

                                                                  if($status == 'detailed'){
                                                                          echo '<h6 style = "padding:20px; background-color: green; border-radius: 10px; color: white">You have successfully filled up primary information! You may now fill up information about players.</h6>';
                                                                  }else{
                                                                      echo '<h6 style = "padding:20px; background-color: orange; border-radius: 10px; color: black">Submit primary information to proceed to the Player information settings!</h6>';
                                                                  }
                                                                      
                                                                ?>
                                                         </div>

                                                         
                                                  </div>



                                                    
                                                  
                                        </div>



                         </form>

                                </div>
                                <div class="row"></div>
                                <div class="section2" style = "margin: 40px;">

                                                                 
                                                                 

                                                                

                                            <?php  
                                                  if($GETdATA['status'] == 'detailed'){
                                                            // add information here

                                                            $selectDataOfTeam = "SELECT * FROM teams WHERE id = $id";
                                                            $queryForTeam = mysqli_query($conn,$selectDataOfTeam);
                                                            $getDataForTeam = mysqli_fetch_assoc($queryForTeam);

                                                            $numberOfPlayers = $getDataForTeam['number_of_player'];



                                                              $game_type = $_SESSION['GameType'];
                                                              if($game_type == 'Basketball_Men' || $game_type == 'Basketball_Women'){

                                                                  // start sa basketball

                                                                  $sub = $numberOfPlayers - 5;

                                                                    echo '

                                                                     <div class = "container">
                                                                          <form action="actionRegister.php" method = "post">
                                                                                  <div class="part1">
                                                                                        <h5>First 5 players</h5>
                                                                                    <div class="row">';
                                                                                            
                                                                                                        for($x = 1; $x <=5; $x++){

                                                                                                          $condition = 'player'.$x;

                                                                                                          $game_id = $_SESSION['GameId'];
                                                                                                          $event_id = $_SESSION['EventId'];
                                                                                                         $gameType = $_SESSION['GameType'];
                                                                                                         $team_id = $_SESSION['idOfTeam'];
                                                                                                          
                                                                                                            $selectFromPlayers = "SELECT * FROM players WHERE game_id = $game_id AND event_id = $event_id AND team_id = $team_id AND player_number = '$condition'";
                                                                                                            $queryForPlayers = mysqli_query($conn,$selectFromPlayers);

                                                                                                            $getData = mysqli_fetch_assoc($queryForPlayers);

                                                                                                            if (empty($getData['name'])) {
                                                                                                              $name = 'Please add player name!';
                                                                                                          } else {
                                                                                                              $name = htmlspecialchars($getData['name']);
                                                                                                          }

                                                                                                           
                                                                                                               $age = isset($getData['age']) ? htmlspecialchars($getData['age']) : 0;

                                                                                                               $getName = 'name'.$x;
                                                                                                               $getAge = 'age'.$x;

                                                                                                            
                                                                                                        
                                                                                                               echo "
                                                                                                                      <div class='box' class='col-md-4 col-sm-6' style='box-shadow: 0 0 15px rgba(0, 0, 0, 0.25); border-radius: 20px; margin: 17px; width: 45%; height: 250px;'>
                                                                                                                          <label style='margin-top: 30px;'>Player Name: </label>
                                                                                                                          <input type='text' class='form-control'name = '$getName' value='$name'> 
                                                                                                                          <label style='margin-top: 10px;'>Player Age: </label>
                                                                                                                          <input type='text' class='form-control' name = '$getAge' value='$age'>
                                                                                                                           
                                                                                                                      </div>
                                                                                                                      ";
                                                                                                        }
                                                                                            
                                                                                              
                                                                                            
                                                                                 echo'   </div>
                                                                                      
                                                                              </div>
                                                                              <div class="part2">
                                                                                      <h5>Substitute players</h5>
                                                                                        <div class="row">';
                                                                                      for($y = 1; $y <= $sub; $y++){

                                                                                        $new = $y + 5;

                                                                                        $condition2 = 'player'.$new;

                                                                                        $selectFromPlayers2 = "SELECT * FROM players WHERE game_id = $game_id AND event_id = $event_id AND team_id = $team_id AND player_number = '$condition2'";
                                                                                        $queryForPlayers2 = mysqli_query($conn,$selectFromPlayers2);

                                                                                        $getData2 = mysqli_fetch_assoc($queryForPlayers2);

                                                                                        if (empty($getData2['name'])) {
                                                                                          $name2 = 'Please add player name!';
                                                                                      } else {
                                                                                          $name2 = htmlspecialchars($getData2['name']);
                                                                                      }

                                                                                       
                                                                                           $age2 = isset($getData2['age']) ? htmlspecialchars($getData2['age']) : 0;

                                                                                           $getName2 = 'name'.$new;
                                                                                           $getAge2 = 'age'.$new;

                                                                                       

                                                                                        echo "
                                                                                        <div class='box' class='col-md-4 col-sm-6' style='box-shadow: 0 0 15px rgba(0, 0, 0, 0.25); border-radius: 20px; margin: 17px; width: 45%; height: 250px;'>
                                                                                            <label style='margin-top: 30px;'>Player Name: </label>
                                                                                            <input type='text' class='form-control' name = '$getName2' value='$name2'> 
                                                                                            <label style='margin-top: 10px;'>Player Age: </label>
                                                                                            <input type='text' class='form-control' name = '$getAge2' value='$age2'>
                                                                                          
                                                                                        </div>
                                                                                        ";
                                                                                  }
                                                                                                
                                                                                
                                                                              echo '</div>
                                                                              
                                                                              </div>
                                                                              <div class = "submit">
                                                                                  <input type = "submit" value = "Confirm Players" class = "btn btn-success">
                                                                              </div>
                                                                              
                                                                          </form>
                                                                  </div>
                                                                        
                                                                    ';

                                                                  // end sa basketball na code
                                                                  

                                                              }else if($game_type == 'Vollayball_Men' || $game_type == 'Vollayball_Women'){

                                                                  // start sa Vollayball

                                                                  $sub = $numberOfPlayers - 5;

                                                                  echo '

                                                                   <div class = "container">
                                                                        <form action="actionRegister.php" method = "post">
                                                                                <div class="part1">
                                                                                      <h5>First 6 players</h5>
                                                                                  <div class="row">';
                                                                                          
                                                                                                      for($x = 1; $x <=6; $x++){

                                                                                                        $condition = 'player'.$x;

                                                                                                        $game_id = $_SESSION['GameId'];
                                                                                                        $event_id = $_SESSION['EventId'];
                                                                                                       $gameType = $_SESSION['GameType'];
                                                                                                       $team_id = $_SESSION['idOfTeam'];
                                                                                                        
                                                                                                          $selectFromPlayers = "SELECT * FROM players WHERE game_id = $game_id AND event_id = $event_id AND team_id = $team_id AND player_number = '$condition'";
                                                                                                          $queryForPlayers = mysqli_query($conn,$selectFromPlayers);

                                                                                                          $getData = mysqli_fetch_assoc($queryForPlayers);

                                                                                                          if (empty($getData['name'])) {
                                                                                                            $name = 'Please add player name!';
                                                                                                        } else {
                                                                                                            $name = htmlspecialchars($getData['name']);
                                                                                                        }

                                                                                                         
                                                                                                             $age = isset($getData['age']) ? htmlspecialchars($getData['age']) : 0;

                                                                                                             $getName = 'name'.$x;
                                                                                                             $getAge = 'age'.$x;

                                                                                                          
                                                                                                      
                                                                                                             echo "
                                                                                                                    <div class='box' class='col-md-4 col-sm-6' style='box-shadow: 0 0 15px rgba(0, 0, 0, 0.25); border-radius: 20px; margin: 17px; width: 45%; height: 250px;'>
                                                                                                                        <label style='margin-top: 30px;'>Player Name: </label>
                                                                                                                        <input type='text' class='form-control'name = '$getName' value='$name'> 
                                                                                                                        <label style='margin-top: 10px;'>Player Age: </label>
                                                                                                                        <input type='text' class='form-control' name = '$getAge' value='$age'>
                                                                                                                         
                                                                                                                    </div>
                                                                                                                    ";
                                                                                                      }
                                                                                          
                                                                                            
                                                                                          
                                                                               echo'   </div>
                                                                                    
                                                                            </div>
                                                                            <div class="part2">
                                                                                    <h5>Substitute players</h5>
                                                                                      <div class="row">';
                                                                                    for($y = 1; $y <=$sub; $y++){

                                                                                      $new = $y + 6;

                                                                                      $condition2 = 'player'.$new;

                                                                                      $selectFromPlayers2 = "SELECT * FROM players WHERE game_id = $game_id AND event_id = $event_id AND team_id = $team_id AND player_number = '$condition2'";
                                                                                      $queryForPlayers2 = mysqli_query($conn,$selectFromPlayers2);

                                                                                      $getData2 = mysqli_fetch_assoc($queryForPlayers2);

                                                                                      if (empty($getData2['name'])) {
                                                                                        $name2 = 'Please add player name!';
                                                                                    } else {
                                                                                        $name2 = htmlspecialchars($getData2['name']);
                                                                                    }

                                                                                     
                                                                                         $age2 = isset($getData2['age']) ? htmlspecialchars($getData2['age']) : 0;

                                                                                         $getName2 = 'name'.$new;
                                                                                         $getAge2 = 'age'.$new;

                                                                                     

                                                                                      echo "
                                                                                      <div class='box' class='col-md-4 col-sm-6' style='box-shadow: 0 0 15px rgba(0, 0, 0, 0.25); border-radius: 20px; margin: 17px; width: 45%; height: 250px;'>
                                                                                          <label style='margin-top: 30px;'>Player Name: </label>
                                                                                          <input type='text' class='form-control' name = '$getName2' value='$name2'> 
                                                                                          <label style='margin-top: 10px;'>Player Age: </label>
                                                                                          <input type='text' class='form-control' name = '$getAge2' value='$age2'>
                                                                                        
                                                                                      </div>
                                                                                      ";
                                                                                }
                                                                                              
                                                                              
                                                                            echo '</div>
                                                                            
                                                                            </div>
                                                                            <div class = "submit">
                                                                                <input type = "submit" value = "Confirm Players" class = "btn btn-success">
                                                                            </div>
                                                                            
                                                                        </form>
                                                                </div>
                                                                      
                                                                  ';

                                                                  // end sa Vollayball

                                                              }else if($game_type == 'Softball_Men' || $game_type == 'Softball_Women'){

                                                                  // start sa softball 

                                                                  $sub = $numberOfPlayers - 9;

                                                                  echo '

                                                                   <div class = "container">
                                                                        <form action="actionRegister.php" method = "post">
                                                                                <div class="part1">
                                                                                      <h5>First 9 players</h5>
                                                                                  <div class="row">';
                                                                                          
                                                                                                      for($x = 1; $x <=9; $x++){

                                                                                                        $condition = 'player'.$x;

                                                                                                        $game_id = $_SESSION['GameId'];
                                                                                                        $event_id = $_SESSION['EventId'];
                                                                                                       $gameType = $_SESSION['GameType'];
                                                                                                       $team_id = $_SESSION['idOfTeam'];
                                                                                                        
                                                                                                          $selectFromPlayers = "SELECT * FROM players WHERE game_id = $game_id AND event_id = $event_id AND team_id = $team_id AND player_number = '$condition'";
                                                                                                          $queryForPlayers = mysqli_query($conn,$selectFromPlayers);

                                                                                                          $getData = mysqli_fetch_assoc($queryForPlayers);

                                                                                                          if (empty($getData['name'])) {
                                                                                                            $name = 'Please add player name!';
                                                                                                        } else {
                                                                                                            $name = htmlspecialchars($getData['name']);
                                                                                                        }

                                                                                                         
                                                                                                             $age = isset($getData['age']) ? htmlspecialchars($getData['age']) : 0;

                                                                                                             $getName = 'name'.$x;
                                                                                                             $getAge = 'age'.$x;

                                                                                                          
                                                                                                      
                                                                                                             echo "
                                                                                                                    <div class='box' class='col-md-4 col-sm-6' style='box-shadow: 0 0 15px rgba(0, 0, 0, 0.25); border-radius: 20px; margin: 17px; width: 45%; height: 250px;'>
                                                                                                                        <label style='margin-top: 30px;'>Player Name: </label>
                                                                                                                        <input type='text' class='form-control'name = '$getName' value='$name'> 
                                                                                                                        <label style='margin-top: 10px;'>Player Age: </label>
                                                                                                                        <input type='text' class='form-control' name = '$getAge' value='$age'>
                                                                                                                         
                                                                                                                    </div>
                                                                                                                    ";
                                                                                                      }
                                                                                          
                                                                                            
                                                                                          
                                                                               echo'   </div>
                                                                                    
                                                                            </div>
                                                                            <div class="part2">
                                                                                    <h5>Substitute players</h5>
                                                                                      <div class="row">';
                                                                                    for($y = 1; $y <=$sub; $y++){

                                                                                      $new = $y + 9;

                                                                                      $condition2 = 'player'.$new;

                                                                                      $selectFromPlayers2 = "SELECT * FROM players WHERE game_id = $game_id AND event_id = $event_id AND team_id = $team_id AND player_number = '$condition2'";
                                                                                      $queryForPlayers2 = mysqli_query($conn,$selectFromPlayers2);

                                                                                      $getData2 = mysqli_fetch_assoc($queryForPlayers2);

                                                                                      if (empty($getData2['name'])) {
                                                                                        $name2 = 'Please add player name!';
                                                                                    } else {
                                                                                        $name2 = htmlspecialchars($getData2['name']);
                                                                                    }

                                                                                     
                                                                                         $age2 = isset($getData2['age']) ? htmlspecialchars($getData2['age']) : 0;

                                                                                         $getName2 = 'name'.$new;
                                                                                         $getAge2 = 'age'.$new;

                                                                                     

                                                                                      echo "
                                                                                      <div class='box' class='col-md-4 col-sm-6' style='box-shadow: 0 0 15px rgba(0, 0, 0, 0.25); border-radius: 20px; margin: 17px; width: 45%; height: 250px;'>
                                                                                          <label style='margin-top: 30px;'>Player Name: </label>
                                                                                          <input type='text' class='form-control' name = '$getName2' value='$name2'> 
                                                                                          <label style='margin-top: 10px;'>Player Age: </label>
                                                                                          <input type='text' class='form-control' name = '$getAge2' value='$age2'>
                                                                                        
                                                                                      </div>
                                                                                      ";
                                                                                }
                                                                                              
                                                                              
                                                                            echo '</div>
                                                                            
                                                                            </div>
                                                                            <div class = "submit">
                                                                                <input type = "submit" value = "Confirm Players" class = "btn btn-success">
                                                                            </div>
                                                                            
                                                                        </form>
                                                                </div>
                                                                      
                                                                  ';

                                                                  // end sa softball

                                                              }else if($game_type == 'Runs_Men' || $game_type == 'Runs_Women'){

                                                                    // start sa runs

                                                                 

                                                                    echo '
  
                                                                     <div class = "container">
                                                                          <form action="actionRegister.php" method = "post">
                                                                                  <div class="part1">
                                                                                        <h5>6 players</h5>
                                                                                    <div class="row">';
                                                                                            
                                                                                                        for($x = 1; $x <=6; $x++){
  
                                                                                                          $condition = 'player'.$x;
  
                                                                                                          $game_id = $_SESSION['GameId'];
                                                                                                          $event_id = $_SESSION['EventId'];
                                                                                                         $gameType = $_SESSION['GameType'];
                                                                                                         $team_id = $_SESSION['idOfTeam'];
                                                                                                          
                                                                                                            $selectFromPlayers = "SELECT * FROM players WHERE game_id = $game_id AND event_id = $event_id AND team_id = $team_id AND player_number = '$condition'";
                                                                                                            $queryForPlayers = mysqli_query($conn,$selectFromPlayers);
  
                                                                                                            $getData = mysqli_fetch_assoc($queryForPlayers);
  
                                                                                                            if (empty($getData['name'])) {
                                                                                                              $name = 'Please add player name!';
                                                                                                          } else {
                                                                                                              $name = htmlspecialchars($getData['name']);
                                                                                                          }
  
                                                                                                           
                                                                                                               $age = isset($getData['age']) ? htmlspecialchars($getData['age']) : 0;
  
                                                                                                               $getName = 'name'.$x;
                                                                                                               $getAge = 'age'.$x;
  
                                                                                                            
                                                                                                        
                                                                                                               echo "
                                                                                                                      <div class='box' class='col-md-4 col-sm-6' style='box-shadow: 0 0 15px rgba(0, 0, 0, 0.25); border-radius: 20px; margin: 17px; width: 45%; height: 250px;'>
                                                                                                                          <label style='margin-top: 30px;'>Player Name: </label>
                                                                                                                          <input type='text' class='form-control'name = '$getName' value='$name'> 
                                                                                                                          <label style='margin-top: 10px;'>Player Age: </label>
                                                                                                                          <input type='text' class='form-control' name = '$getAge' value='$age'>
                                                                                                                           
                                                                                                                      </div>
                                                                                                                      ";
                                                                                                        }
                                                                                            
                                                                                              
                                                                                            
                                                                                 echo'   </div>
                                                                                      
                                                                              </div>
                                                                           
                                                                              <div class = "submit">
                                                                                  <input type = "submit" value = "Confirm Players" class = "btn btn-success">
                                                                              </div>
                                                                              
                                                                          </form>
                                                                  </div>
                                                                        
                                                                    ';

                                                                    // end sa runs
                                                                
                                                              }else if($game_type == 'Throws_Men' || $game_type == 'Throws_Women'){

                                                                  // start sa throws 
                                                                  echo '
  
                                                                  <div class = "container">
                                                                       <form action="actionRegister.php" method = "post">
                                                                               <div class="part1">
                                                                                     <h5>6 players</h5>
                                                                                 <div class="row">';
                                                                                         
                                                                                                     for($x = 1; $x <=6; $x++){

                                                                                                       $condition = 'player'.$x;

                                                                                                       $game_id = $_SESSION['GameId'];
                                                                                                       $event_id = $_SESSION['EventId'];
                                                                                                      $gameType = $_SESSION['GameType'];
                                                                                                      $team_id = $_SESSION['idOfTeam'];
                                                                                                       
                                                                                                         $selectFromPlayers = "SELECT * FROM players WHERE game_id = $game_id AND event_id = $event_id AND team_id = $team_id AND player_number = '$condition'";
                                                                                                         $queryForPlayers = mysqli_query($conn,$selectFromPlayers);

                                                                                                         $getData = mysqli_fetch_assoc($queryForPlayers);

                                                                                                         if (empty($getData['name'])) {
                                                                                                           $name = 'Please add player name!';
                                                                                                       } else {
                                                                                                           $name = htmlspecialchars($getData['name']);
                                                                                                       }

                                                                                                        
                                                                                                            $age = isset($getData['age']) ? htmlspecialchars($getData['age']) : 0;

                                                                                                            $getName = 'name'.$x;
                                                                                                            $getAge = 'age'.$x;

                                                                                                         
                                                                                                     
                                                                                                            echo "
                                                                                                                   <div class='box' class='col-md-4 col-sm-6' style='box-shadow: 0 0 15px rgba(0, 0, 0, 0.25); border-radius: 20px; margin: 17px; width: 45%; height: 250px;'>
                                                                                                                       <label style='margin-top: 30px;'>Player Name: </label>
                                                                                                                       <input type='text' class='form-control'name = '$getName' value='$name'> 
                                                                                                                       <label style='margin-top: 10px;'>Player Age: </label>
                                                                                                                       <input type='text' class='form-control' name = '$getAge' value='$age'>
                                                                                                                        
                                                                                                                   </div>
                                                                                                                   ";
                                                                                                     }
                                                                                         
                                                                                           
                                                                                         
                                                                              echo'   </div>
                                                                                   
                                                                           </div>
                                                                        
                                                                           <div class = "submit">
                                                                               <input type = "submit" value = "Confirm Players" class = "btn btn-success">
                                                                           </div>
                                                                           
                                                                       </form>
                                                               </div>
                                                                     
                                                                 ';
                                                                  // end sa throws

                                                              }else if($game_type == 'Jumps_Men' || $game_type == 'Jumps_Women'){

                                                                // start sa jumps

                                                                echo '
  
                                                                <div class = "container">
                                                                     <form action="actionRegister.php" method = "post">
                                                                             <div class="part1">
                                                                                   <h5>6 players</h5>
                                                                               <div class="row">';
                                                                                       
                                                                                                   for($x = 1; $x <=6; $x++){

                                                                                                     $condition = 'player'.$x;

                                                                                                     $game_id = $_SESSION['GameId'];
                                                                                                     $event_id = $_SESSION['EventId'];
                                                                                                    $gameType = $_SESSION['GameType'];
                                                                                                    $team_id = $_SESSION['idOfTeam'];
                                                                                                     
                                                                                                       $selectFromPlayers = "SELECT * FROM players WHERE game_id = $game_id AND event_id = $event_id AND team_id = $team_id AND player_number = '$condition'";
                                                                                                       $queryForPlayers = mysqli_query($conn,$selectFromPlayers);

                                                                                                       $getData = mysqli_fetch_assoc($queryForPlayers);

                                                                                                       if (empty($getData['name'])) {
                                                                                                         $name = 'Please add player name!';
                                                                                                     } else {
                                                                                                         $name = htmlspecialchars($getData['name']);
                                                                                                     }

                                                                                                      
                                                                                                          $age = isset($getData['age']) ? htmlspecialchars($getData['age']) : 0;

                                                                                                          $getName = 'name'.$x;
                                                                                                          $getAge = 'age'.$x;

                                                                                                       
                                                                                                   
                                                                                                          echo "
                                                                                                                 <div class='box' class='col-md-4 col-sm-6' style='box-shadow: 0 0 15px rgba(0, 0, 0, 0.25); border-radius: 20px; margin: 17px; width: 45%; height: 250px;'>
                                                                                                                     <label style='margin-top: 30px;'>Player Name: </label>
                                                                                                                     <input type='text' class='form-control'name = '$getName' value='$name'> 
                                                                                                                     <label style='margin-top: 10px;'>Player Age: </label>
                                                                                                                     <input type='text' class='form-control' name = '$getAge' value='$age'>
                                                                                                                      
                                                                                                                 </div>
                                                                                                                 ";
                                                                                                   }
                                                                                       
                                                                                         
                                                                                       
                                                                            echo'   </div>
                                                                                 
                                                                         </div>
                                                                      
                                                                         <div class = "submit">
                                                                             <input type = "submit" value = "Confirm Players" class = "btn btn-success">
                                                                         </div>
                                                                         
                                                                     </form>
                                                             </div>
                                                                   
                                                               ';

                                                                // end sa jumps

                                                              }else if($game_type == 'MLBB'){

                                                                  // start sa MLBB

                                                                  $sub = $numberOfPlayers - 5;

                                                                  echo '

                                                                   <div class = "container">
                                                                        <form action="actionRegister.php" method = "post">
                                                                                <div class="part1">
                                                                                      <h5>First 5 players</h5>
                                                                                  <div class="row">';
                                                                                          
                                                                                                      for($x = 1; $x <=5; $x++){

                                                                                                        $condition = 'player'.$x;

                                                                                                        $game_id = $_SESSION['GameId'];
                                                                                                        $event_id = $_SESSION['EventId'];
                                                                                                       $gameType = $_SESSION['GameType'];
                                                                                                       $team_id = $_SESSION['idOfTeam'];
                                                                                                        
                                                                                                          $selectFromPlayers = "SELECT * FROM players WHERE game_id = $game_id AND event_id = $event_id AND team_id = $team_id AND player_number = '$condition'";
                                                                                                          $queryForPlayers = mysqli_query($conn,$selectFromPlayers);

                                                                                                          $getData = mysqli_fetch_assoc($queryForPlayers);

                                                                                                          if (empty($getData['name'])) {
                                                                                                            $name = 'Please add player name!';
                                                                                                        } else {
                                                                                                            $name = htmlspecialchars($getData['name']);
                                                                                                        }

                                                                                                         
                                                                                                             $age = isset($getData['age']) ? htmlspecialchars($getData['age']) : 0;

                                                                                                             $getName = 'name'.$x;
                                                                                                             $getAge = 'age'.$x;

                                                                                                          
                                                                                                      
                                                                                                             echo "
                                                                                                                    <div class='box' class='col-md-4 col-sm-6' style='box-shadow: 0 0 15px rgba(0, 0, 0, 0.25); border-radius: 20px; margin: 17px; width: 45%; height: 250px;'>
                                                                                                                        <label style='margin-top: 30px;'>Player Name: </label>
                                                                                                                        <input type='text' class='form-control'name = '$getName' value='$name'> 
                                                                                                                        <label style='margin-top: 10px;'>Player Age: </label>
                                                                                                                        <input type='text' class='form-control' name = '$getAge' value='$age'>
                                                                                                                         
                                                                                                                    </div>
                                                                                                                    ";
                                                                                                      }
                                                                                          
                                                                                            
                                                                                          
                                                                               echo'   </div>
                                                                                    
                                                                            </div>
                                                                            <div class="part2">
                                                                                    <h5>Substitute players</h5>
                                                                                      <div class="row">';
                                                                                    for($y = 1; $y <=$sub; $y++){

                                                                                      $new = $y + 5;

                                                                                      $condition2 = 'player'.$new;

                                                                                      $selectFromPlayers2 = "SELECT * FROM players WHERE game_id = $game_id AND event_id = $event_id AND team_id = $team_id AND player_number = '$condition2'";
                                                                                      $queryForPlayers2 = mysqli_query($conn,$selectFromPlayers2);

                                                                                      $getData2 = mysqli_fetch_assoc($queryForPlayers2);

                                                                                      if (empty($getData2['name'])) {
                                                                                        $name2 = 'Please add player name!';
                                                                                    } else {
                                                                                        $name2 = htmlspecialchars($getData2['name']);
                                                                                    }

                                                                                     
                                                                                         $age2 = isset($getData2['age']) ? htmlspecialchars($getData2['age']) : 0;

                                                                                         $getName2 = 'name'.$new;
                                                                                         $getAge2 = 'age'.$new;

                                                                                     

                                                                                      echo "
                                                                                      <div class='box' class='col-md-4 col-sm-6' style='box-shadow: 0 0 15px rgba(0, 0, 0, 0.25); border-radius: 20px; margin: 17px; width: 45%; height: 250px;'>
                                                                                          <label style='margin-top: 30px;'>Player Name: </label>
                                                                                          <input type='text' class='form-control' name = '$getName2' value='$name2'> 
                                                                                          <label style='margin-top: 10px;'>Player Age: </label>
                                                                                          <input type='text' class='form-control' name = '$getAge2' value='$age2'>
                                                                                        
                                                                                      </div>
                                                                                      ";
                                                                                }
                                                                                              
                                                                              
                                                                            echo '</div>
                                                                            
                                                                            </div>
                                                                            <div class = "submit">
                                                                                <input type = "submit" value = "Confirm Players" class = "btn btn-success">
                                                                            </div>
                                                                            
                                                                        </form>
                                                                </div>
                                                                      
                                                                  ';

                                                                  // end sa MLBB

                                                              }else if($game_type == 'Badminton_Single_Men' || $game_type == 'Badminton_Single_Women'){
                                                                  // start sa Badminton single

                                                                        if($game_type == 'Badminton_Single_Men'){
                                                                              // for men

                                                                              echo '
  
                                                                              <div class = "container">
                                                                                   <form action="actionRegister.php" method = "post">
                                                                                           <div class="part1">
                                                                                                 <h5>3 players</h5>
                                                                                             <div class="row">';
                                                                                                     
                                                                                                                 for($x = 1; $x <=3; $x++){
              
                                                                                                                   $condition = 'player'.$x;
              
                                                                                                                   $game_id = $_SESSION['GameId'];
                                                                                                                   $event_id = $_SESSION['EventId'];
                                                                                                                  $gameType = $_SESSION['GameType'];
                                                                                                                  $team_id = $_SESSION['idOfTeam'];
                                                                                                                   
                                                                                                                     $selectFromPlayers = "SELECT * FROM players WHERE game_id = $game_id AND event_id = $event_id AND team_id = $team_id AND player_number = '$condition'";
                                                                                                                     $queryForPlayers = mysqli_query($conn,$selectFromPlayers);
              
                                                                                                                     $getData = mysqli_fetch_assoc($queryForPlayers);
              
                                                                                                                     if (empty($getData['name'])) {
                                                                                                                       $name = 'Please add player name!';
                                                                                                                   } else {
                                                                                                                       $name = htmlspecialchars($getData['name']);
                                                                                                                   }
              
                                                                                                                    
                                                                                                                        $age = isset($getData['age']) ? htmlspecialchars($getData['age']) : 0;
              
                                                                                                                        $getName = 'name'.$x;
                                                                                                                        $getAge = 'age'.$x;
              
                                                                                                                     
                                                                                                                 
                                                                                                                        echo "
                                                                                                                               <div class='box' class='col-md-4 col-sm-6' style='box-shadow: 0 0 15px rgba(0, 0, 0, 0.25); border-radius: 20px; margin: 17px; width: 45%; height: 250px;'>
                                                                                                                                   <label style='margin-top: 30px;'>Player Name: </label>
                                                                                                                                   <input type='text' class='form-control'name = '$getName' value='$name'> 
                                                                                                                                   <label style='margin-top: 10px;'>Player Age: </label>
                                                                                                                                   <input type='text' class='form-control' name = '$getAge' value='$age'>
                                                                                                                                    
                                                                                                                               </div>
                                                                                                                               ";
                                                                                                                 }
                                                                                                     
                                                                                                       
                                                                                                     
                                                                                          echo'   </div>
                                                                                               
                                                                                       </div>
                                                                                    
                                                                                       <div class = "submit">
                                                                                           <input type = "submit" value = "Confirm Players" class = "btn btn-success">
                                                                                       </div>
                                                                                       
                                                                                   </form>
                                                                           </div>
                                                                                 
                                                                             ';

                                                                              // end sa for men
                                                                        }else{
                                                                              // for women  

                                                                              echo '
  
                                                                              <div class = "container">
                                                                                   <form action="actionRegister.php" method = "post">
                                                                                           <div class="part1">
                                                                                                 <h5>2 players</h5>
                                                                                             <div class="row">';
                                                                                                     
                                                                                                                 for($x = 1; $x <=2; $x++){
              
                                                                                                                   $condition = 'player'.$x;
              
                                                                                                                   $game_id = $_SESSION['GameId'];
                                                                                                                   $event_id = $_SESSION['EventId'];
                                                                                                                  $gameType = $_SESSION['GameType'];
                                                                                                                  $team_id = $_SESSION['idOfTeam'];
                                                                                                                   
                                                                                                                     $selectFromPlayers = "SELECT * FROM players WHERE game_id = $game_id AND event_id = $event_id AND team_id = $team_id AND player_number = '$condition'";
                                                                                                                     $queryForPlayers = mysqli_query($conn,$selectFromPlayers);
              
                                                                                                                     $getData = mysqli_fetch_assoc($queryForPlayers);
              
                                                                                                                     if (empty($getData['name'])) {
                                                                                                                       $name = 'Please add player name!';
                                                                                                                   } else {
                                                                                                                       $name = htmlspecialchars($getData['name']);
                                                                                                                   }
              
                                                                                                                    
                                                                                                                        $age = isset($getData['age']) ? htmlspecialchars($getData['age']) : 0;
              
                                                                                                                        $getName = 'name'.$x;
                                                                                                                        $getAge = 'age'.$x;
              
                                                                                                                     
                                                                                                                 
                                                                                                                        echo "
                                                                                                                               <div class='box' class='col-md-4 col-sm-6' style='box-shadow: 0 0 15px rgba(0, 0, 0, 0.25); border-radius: 20px; margin: 17px; width: 45%; height: 250px;'>
                                                                                                                                   <label style='margin-top: 30px;'>Player Name: </label>
                                                                                                                                   <input type='text' class='form-control'name = '$getName' value='$name'> 
                                                                                                                                   <label style='margin-top: 10px;'>Player Age: </label>
                                                                                                                                   <input type='text' class='form-control' name = '$getAge' value='$age'>
                                                                                                                                    
                                                                                                                               </div>
                                                                                                                               ";
                                                                                                                 }
                                                                                                     
                                                                                                       
                                                                                                     
                                                                                          echo'   </div>
                                                                                               
                                                                                       </div>
                                                                                    
                                                                                       <div class = "submit">
                                                                                           <input type = "submit" value = "Confirm Players" class = "btn btn-success">
                                                                                       </div>
                                                                                       
                                                                                   </form>
                                                                           </div>
                                                                                 
                                                                             ';

                                                                              // end sa for women
                                                                        }

                                                                  // end sa Badminton single

                                                              }else if($game_type == 'Badminton_Double_Men' || $game_type == 'Badminton_Double_Women'){

                                                                  // start sa double badminton

                                                                  if($game_type == 'Badminton_Double_Men'){
                                                                    // for men

                                                                    echo '

                                                                    <div class = "container">
                                                                         <form action="actionRegister.php" method = "post">
                                                                                 <div class="part1">
                                                                                       <h5>3 players</h5>
                                                                                   <div class="row">';
                                                                                           
                                                                                                       for($x = 1; $x <=3; $x++){
    
                                                                                                         $condition = 'player'.$x;
    
                                                                                                         $game_id = $_SESSION['GameId'];
                                                                                                         $event_id = $_SESSION['EventId'];
                                                                                                        $gameType = $_SESSION['GameType'];
                                                                                                        $team_id = $_SESSION['idOfTeam'];
                                                                                                         
                                                                                                           $selectFromPlayers = "SELECT * FROM players WHERE game_id = $game_id AND event_id = $event_id AND team_id = $team_id AND player_number = '$condition'";
                                                                                                           $queryForPlayers = mysqli_query($conn,$selectFromPlayers);
    
                                                                                                           $getData = mysqli_fetch_assoc($queryForPlayers);
    
                                                                                                           if (empty($getData['name'])) {
                                                                                                             $name1 = 'Please add player1 name!';
                                                                                                         } else {
                                                                                                             $name1 = htmlspecialchars($getData['name']);
                                                                                                         }

                                                                                                         if (empty($getData['name1'])) {
                                                                                                          $name2 = 'Please add player2 name!';
                                                                                                      } else {
                                                                                                          $name2 = htmlspecialchars($getData['name1']);
                                                                                                      }

                                                                                                         
    
                                                                                                          
                                                                                                              $age1 = isset($getData['age']) ? htmlspecialchars($getData['age']) : 0;
                                                                                                              $age2 = isset($getData['age1']) ? htmlspecialchars($getData['age1']) : 0;
    
                                                                                                              $getName1 = 'name1'.$x;
                                                                                                              $getAge1 = 'age1'.$x;
                                                                                                              $getName2 = 'name2'.$x;
                                                                                                              $getAge2 = 'age2'.$x;

                                                                                                              
    
                                                                                                           
                                                                                                       
                                                                                                              echo "
                                                                                                                     <div class='box' class='col-md-4 col-sm-6' style='box-shadow: 0 0 15px rgba(0, 0, 0, 0.25); border-radius: 20px; margin: 17px; width: 45%; height: 350px;'>
                                                                                                                         <label style='margin-top: 2px;'>Player1 Name: </label>
                                                                                                                         <input type='text' class='form-control'name = '$getName1' value='$name1'> 
                                                                                                                         <label style='margin-top: 10px;'>Player1 Age: </label>
                                                                                                                         <input type='text' class='form-control' name = '$getAge1' value='$age1'>

                                                                                                                          <label style='margin-top: 30px;'>Player2 Name: </label>
                                                                                                                         <input type='text' class='form-control'name = '$getName2' value='$name2'> 
                                                                                                                         <label style='margin-top: 10px;'>Player2 Age: </label>
                                                                                                                         <input type='text' class='form-control' name = '$getAge2' value='$age2'>
                                                                                                                          
                                                                                                                     </div>
                                                                                                                     ";
                                                                                                       }
                                                                                           
                                                                                             
                                                                                           
                                                                                echo'   </div>
                                                                                     
                                                                             </div>
                                                                          
                                                                             <div class = "submit">
                                                                                 <input type = "submit" value = "Confirm Players" class = "btn btn-success">
                                                                             </div>
                                                                             
                                                                         </form>
                                                                 </div>
                                                                       
                                                                   ';

                                                                    // end sa for men
                                                              }else{
                                                                    // for women  

                                                                    echo '

                                                                    <div class = "container">
                                                                         <form action="actionRegister.php" method = "post">
                                                                                 <div class="part1">
                                                                                       <h5>2 players</h5>
                                                                                   <div class="row">';
                                                                                           
                                                                                                       for($x = 1; $x <=2; $x++){
    
                                                                                                         $condition = 'player'.$x;
    
                                                                                                         $game_id = $_SESSION['GameId'];
                                                                                                         $event_id = $_SESSION['EventId'];
                                                                                                        $gameType = $_SESSION['GameType'];
                                                                                                        $team_id = $_SESSION['idOfTeam'];
                                                                                                         
                                                                                                           $selectFromPlayers = "SELECT * FROM players WHERE game_id = $game_id AND event_id = $event_id AND team_id = $team_id AND player_number = '$condition'";
                                                                                                           $queryForPlayers = mysqli_query($conn,$selectFromPlayers);
    
                                                                                                           $getData = mysqli_fetch_assoc($queryForPlayers);
    
                                                                                                           if (empty($getData['name'])) {
                                                                                                             $name1 = 'Please add player1 name!';
                                                                                                         } else {
                                                                                                             $name1 = htmlspecialchars($getData['name']);
                                                                                                         }

                                                                                                         if (empty($getData['name1'])) {
                                                                                                          $name2 = 'Please add player2 name!';
                                                                                                      } else {
                                                                                                          $name2 = htmlspecialchars($getData['name1']);
                                                                                                      }

                                                                                                         
    
                                                                                                          
                                                                                                              $age1 = isset($getData['age']) ? htmlspecialchars($getData['age']) : 0;
                                                                                                              $age2 = isset($getData['age1']) ? htmlspecialchars($getData['age1']) : 0;
    
                                                                                                              $getName1 = 'name1'.$x;
                                                                                                              $getAge1 = 'age1'.$x;
                                                                                                              $getName2 = 'name2'.$x;
                                                                                                              $getAge2 = 'age2'.$x;

                                                                                                              
    
                                                                                                           
                                                                                                       
                                                                                                              echo "
                                                                                                                     <div class='box' class='col-md-4 col-sm-6' style='box-shadow: 0 0 15px rgba(0, 0, 0, 0.25); border-radius: 20px; margin: 17px; width: 45%; height: 350px;'>
                                                                                                                         <label style='margin-top: 2px;'>Player1 Name: </label>
                                                                                                                         <input type='text' class='form-control'name = '$getName1' value='$name1'> 
                                                                                                                         <label style='margin-top: 10px;'>Player1 Age: </label>
                                                                                                                         <input type='text' class='form-control' name = '$getAge1' value='$age1'>

                                                                                                                          <label style='margin-top: 30px;'>Player2 Name: </label>
                                                                                                                         <input type='text' class='form-control'name = '$getName2' value='$name2'> 
                                                                                                                         <label style='margin-top: 10px;'>Player2 Age: </label>
                                                                                                                         <input type='text' class='form-control' name = '$getAge2' value='$age2'>
                                                                                                                          
                                                                                                                     </div>
                                                                                                                     ";
                                                                                                       }
                                                                                           
                                                                                             
                                                                                           
                                                                                echo'   </div>
                                                                                     
                                                                             </div>
                                                                          
                                                                             <div class = "submit">
                                                                                 <input type = "submit" value = "Confirm Players" class = "btn btn-success">
                                                                             </div>
                                                                             
                                                                         </form>
                                                                 </div>
                                                                       
                                                                   ';

                                                                   

                                                                    // end sa for women
                                                              }

                                                                  // end sa double badminton

                                                              }else if($game_type == 'Table_tennis_Single_Men' || $game_type == 'Table_tennis_Single_Women'){

                                                                    // start sa single table tennis

                                                                    if($game_type == 'Table_tennis_Single_Men'){
                                                                      // for men

                                                                      echo '

                                                                      <div class = "container">
                                                                           <form action="actionRegister.php" method = "post">
                                                                                   <div class="part1">
                                                                                         <h5>3 players</h5>
                                                                                     <div class="row">';
                                                                                             
                                                                                                         for($x = 1; $x <=3; $x++){
      
                                                                                                           $condition = 'player'.$x;
      
                                                                                                           $game_id = $_SESSION['GameId'];
                                                                                                           $event_id = $_SESSION['EventId'];
                                                                                                          $gameType = $_SESSION['GameType'];
                                                                                                          $team_id = $_SESSION['idOfTeam'];
                                                                                                           
                                                                                                             $selectFromPlayers = "SELECT * FROM players WHERE game_id = $game_id AND event_id = $event_id AND team_id = $team_id AND player_number = '$condition'";
                                                                                                             $queryForPlayers = mysqli_query($conn,$selectFromPlayers);
      
                                                                                                             $getData = mysqli_fetch_assoc($queryForPlayers);
      
                                                                                                             if (empty($getData['name'])) {
                                                                                                               $name = 'Please add player name!';
                                                                                                           } else {
                                                                                                               $name = htmlspecialchars($getData['name']);
                                                                                                           }
      
                                                                                                            
                                                                                                                $age = isset($getData['age']) ? htmlspecialchars($getData['age']) : 0;
      
                                                                                                                $getName = 'name'.$x;
                                                                                                                $getAge = 'age'.$x;
      
                                                                                                             
                                                                                                         
                                                                                                                echo "
                                                                                                                       <div class='box' class='col-md-4 col-sm-6' style='box-shadow: 0 0 15px rgba(0, 0, 0, 0.25); border-radius: 20px; margin: 17px; width: 45%; height: 250px;'>
                                                                                                                           <label style='margin-top: 30px;'>Player Name: </label>
                                                                                                                           <input type='text' class='form-control'name = '$getName' value='$name'> 
                                                                                                                           <label style='margin-top: 10px;'>Player Age: </label>
                                                                                                                           <input type='text' class='form-control' name = '$getAge' value='$age'>
                                                                                                                            
                                                                                                                       </div>
                                                                                                                       ";
                                                                                                         }
                                                                                             
                                                                                               
                                                                                             
                                                                                  echo'   </div>
                                                                                       
                                                                               </div>
                                                                            
                                                                               <div class = "submit">
                                                                                   <input type = "submit" value = "Confirm Players" class = "btn btn-success">
                                                                               </div>
                                                                               
                                                                           </form>
                                                                   </div>
                                                                         
                                                                     ';

                                                                      // end sa for men
                                                                }else{
                                                                      // for women  

                                                                      echo '

                                                                      <div class = "container">
                                                                           <form action="actionRegister.php" method = "post">
                                                                                   <div class="part1">
                                                                                         <h5>2 players</h5>
                                                                                     <div class="row">';
                                                                                             
                                                                                                         for($x = 1; $x <=2; $x++){
      
                                                                                                           $condition = 'player'.$x;
      
                                                                                                           $game_id = $_SESSION['GameId'];
                                                                                                           $event_id = $_SESSION['EventId'];
                                                                                                          $gameType = $_SESSION['GameType'];
                                                                                                          $team_id = $_SESSION['idOfTeam'];
                                                                                                           
                                                                                                             $selectFromPlayers = "SELECT * FROM players WHERE game_id = $game_id AND event_id = $event_id AND team_id = $team_id AND player_number = '$condition'";
                                                                                                             $queryForPlayers = mysqli_query($conn,$selectFromPlayers);
      
                                                                                                             $getData = mysqli_fetch_assoc($queryForPlayers);
      
                                                                                                             if (empty($getData['name'])) {
                                                                                                               $name = 'Please add player name!';
                                                                                                           } else {
                                                                                                               $name = htmlspecialchars($getData['name']);
                                                                                                           }
      
                                                                                                            
                                                                                                                $age = isset($getData['age']) ? htmlspecialchars($getData['age']) : 0;
      
                                                                                                                $getName = 'name'.$x;
                                                                                                                $getAge = 'age'.$x;
      
                                                                                                             
                                                                                                         
                                                                                                                echo "
                                                                                                                       <div class='box' class='col-md-4 col-sm-6' style='box-shadow: 0 0 15px rgba(0, 0, 0, 0.25); border-radius: 20px; margin: 17px; width: 45%; height: 250px;'>
                                                                                                                           <label style='margin-top: 30px;'>Player Name: </label>
                                                                                                                           <input type='text' class='form-control'name = '$getName' value='$name'> 
                                                                                                                           <label style='margin-top: 10px;'>Player Age: </label>
                                                                                                                           <input type='text' class='form-control' name = '$getAge' value='$age'>
                                                                                                                            
                                                                                                                       </div>
                                                                                                                       ";
                                                                                                         }
                                                                                             
                                                                                               
                                                                                             
                                                                                  echo'   </div>
                                                                                       
                                                                               </div>
                                                                            
                                                                               <div class = "submit">
                                                                                   <input type = "submit" value = "Confirm Players" class = "btn btn-success">
                                                                               </div>
                                                                               
                                                                           </form>
                                                                   </div>
                                                                         
                                                                     ';

                                                                      // end sa for women
                                                                }

                                                                    // end sa single table tennis 

                                                              }else if($game_type == 'Table_tennis_Double_Men' || $game_type == 'Table_tennis_Double_Women'){
                                                                    // start sa double table tennis     

                                                                    if($game_type == 'Table_tennis_Double_Men'){
                                                                      // for men
  
                                                                      echo '
  
                                                                      <div class = "container">
                                                                           <form action="actionRegister.php" method = "post">
                                                                                   <div class="part1">
                                                                                         <h5>3 players</h5>
                                                                                     <div class="row">';
                                                                                             
                                                                                                         for($x = 1; $x <=3; $x++){
      
                                                                                                           $condition = 'player'.$x;
      
                                                                                                           $game_id = $_SESSION['GameId'];
                                                                                                           $event_id = $_SESSION['EventId'];
                                                                                                          $gameType = $_SESSION['GameType'];
                                                                                                          $team_id = $_SESSION['idOfTeam'];
                                                                                                           
                                                                                                             $selectFromPlayers = "SELECT * FROM players WHERE game_id = $game_id AND event_id = $event_id AND team_id = $team_id AND player_number = '$condition'";
                                                                                                             $queryForPlayers = mysqli_query($conn,$selectFromPlayers);
      
                                                                                                             $getData = mysqli_fetch_assoc($queryForPlayers);
      
                                                                                                             if (empty($getData['name'])) {
                                                                                                               $name1 = 'Please add player1 name!';
                                                                                                           } else {
                                                                                                               $name1 = htmlspecialchars($getData['name']);
                                                                                                           }
  
                                                                                                           if (empty($getData['name1'])) {
                                                                                                            $name2 = 'Please add player2 name!';
                                                                                                        } else {
                                                                                                            $name2 = htmlspecialchars($getData['name1']);
                                                                                                        }
  
                                                                                                           
      
                                                                                                            
                                                                                                                $age1 = isset($getData['age']) ? htmlspecialchars($getData['age']) : 0;
                                                                                                                $age2 = isset($getData['age1']) ? htmlspecialchars($getData['age1']) : 0;
      
                                                                                                                $getName1 = 'name1'.$x;
                                                                                                                $getAge1 = 'age1'.$x;
                                                                                                                $getName2 = 'name2'.$x;
                                                                                                                $getAge2 = 'age2'.$x;
  
                                                                                                                
      
                                                                                                             
                                                                                                         
                                                                                                                echo "
                                                                                                                       <div class='box' class='col-md-4 col-sm-6' style='box-shadow: 0 0 15px rgba(0, 0, 0, 0.25); border-radius: 20px; margin: 17px; width: 45%; height: 350px;'>
                                                                                                                           <label style='margin-top: 2px;'>Player1 Name: </label>
                                                                                                                           <input type='text' class='form-control'name = '$getName1' value='$name1'> 
                                                                                                                           <label style='margin-top: 10px;'>Player1 Age: </label>
                                                                                                                           <input type='text' class='form-control' name = '$getAge1' value='$age1'>
  
                                                                                                                            <label style='margin-top: 30px;'>Player2 Name: </label>
                                                                                                                           <input type='text' class='form-control'name = '$getName2' value='$name2'> 
                                                                                                                           <label style='margin-top: 10px;'>Player2 Age: </label>
                                                                                                                           <input type='text' class='form-control' name = '$getAge2' value='$age2'>
                                                                                                                            
                                                                                                                       </div>
                                                                                                                       ";
                                                                                                         }
                                                                                             
                                                                                               
                                                                                             
                                                                                  echo'   </div>
                                                                                       
                                                                               </div>
                                                                            
                                                                               <div class = "submit">
                                                                                   <input type = "submit" value = "Confirm Players" class = "btn btn-success">
                                                                               </div>
                                                                               
                                                                           </form>
                                                                   </div>
                                                                         
                                                                     ';
  
                                                                      // end sa for men
                                                                }else{
                                                                      // for women  
  
                                                                      echo '
  
                                                                      <div class = "container">
                                                                           <form action="actionRegister.php" method = "post">
                                                                                   <div class="part1">
                                                                                         <h5>2 players</h5>
                                                                                     <div class="row">';
                                                                                             
                                                                                                         for($x = 1; $x <=2; $x++){
      
                                                                                                           $condition = 'player'.$x;
      
                                                                                                           $game_id = $_SESSION['GameId'];
                                                                                                           $event_id = $_SESSION['EventId'];
                                                                                                          $gameType = $_SESSION['GameType'];
                                                                                                          $team_id = $_SESSION['idOfTeam'];
                                                                                                           
                                                                                                             $selectFromPlayers = "SELECT * FROM players WHERE game_id = $game_id AND event_id = $event_id AND team_id = $team_id AND player_number = '$condition'";
                                                                                                             $queryForPlayers = mysqli_query($conn,$selectFromPlayers);
      
                                                                                                             $getData = mysqli_fetch_assoc($queryForPlayers);
      
                                                                                                             if (empty($getData['name'])) {
                                                                                                               $name1 = 'Please add player1 name!';
                                                                                                           } else {
                                                                                                               $name1 = htmlspecialchars($getData['name']);
                                                                                                           }
  
                                                                                                           if (empty($getData['name1'])) {
                                                                                                            $name2 = 'Please add player2 name!';
                                                                                                        } else {
                                                                                                            $name2 = htmlspecialchars($getData['name1']);
                                                                                                        }
  
                                                                                                           
      
                                                                                                            
                                                                                                                $age1 = isset($getData['age']) ? htmlspecialchars($getData['age']) : 0;
                                                                                                                $age2 = isset($getData['age1']) ? htmlspecialchars($getData['age1']) : 0;
      
                                                                                                                $getName1 = 'name1'.$x;
                                                                                                                $getAge1 = 'age1'.$x;
                                                                                                                $getName2 = 'name2'.$x;
                                                                                                                $getAge2 = 'age2'.$x;
  
                                                                                                                
      
                                                                                                             
                                                                                                         
                                                                                                                echo "
                                                                                                                       <div class='box' class='col-md-4 col-sm-6' style='box-shadow: 0 0 15px rgba(0, 0, 0, 0.25); border-radius: 20px; margin: 17px; width: 45%; height: 350px;'>
                                                                                                                           <label style='margin-top: 2px;'>Player1 Name: </label>
                                                                                                                           <input type='text' class='form-control'name = '$getName1' value='$name1'> 
                                                                                                                           <label style='margin-top: 10px;'>Player1 Age: </label>
                                                                                                                           <input type='text' class='form-control' name = '$getAge1' value='$age1'>
  
                                                                                                                            <label style='margin-top: 30px;'>Player2 Name: </label>
                                                                                                                           <input type='text' class='form-control'name = '$getName2' value='$name2'> 
                                                                                                                           <label style='margin-top: 10px;'>Player2 Age: </label>
                                                                                                                           <input type='text' class='form-control' name = '$getAge2' value='$age2'>
                                                                                                                            
                                                                                                                       </div>
                                                                                                                       ";
                                                                                                         }
                                                                                             
                                                                                               
                                                                                             
                                                                                  echo'   </div>
                                                                                       
                                                                               </div>
                                                                            
                                                                               <div class = "submit">
                                                                                   <input type = "submit" value = "Confirm Players" class = "btn btn-success">
                                                                               </div>
                                                                               
                                                                           </form>
                                                                   </div>
                                                                         
                                                                     ';
  
                                                                     
  
                                                                      // end sa for women
                                                                }
  

                                                                    // end sa double table tennis

                                                              }else if($game_type == 'Futsal_Men' || $game_type == 'Futsal_Women'){

                                                                    // start sa futsal

                                                                          $sub = $numberOfPlayers - 5;

                                                                  echo '

                                                                   <div class = "container">
                                                                        <form action="actionRegister.php" method = "post">
                                                                                <div class="part1">
                                                                                      <h5>First 5 players</h5>
                                                                                  <div class="row">';
                                                                                          
                                                                                                      for($x = 1; $x <=5; $x++){

                                                                                                        $condition = 'player'.$x;

                                                                                                        $game_id = $_SESSION['GameId'];
                                                                                                        $event_id = $_SESSION['EventId'];
                                                                                                       $gameType = $_SESSION['GameType'];
                                                                                                       $team_id = $_SESSION['idOfTeam'];
                                                                                                        
                                                                                                          $selectFromPlayers = "SELECT * FROM players WHERE game_id = $game_id AND event_id = $event_id AND team_id = $team_id AND player_number = '$condition'";
                                                                                                          $queryForPlayers = mysqli_query($conn,$selectFromPlayers);

                                                                                                          $getData = mysqli_fetch_assoc($queryForPlayers);

                                                                                                          if (empty($getData['name'])) {
                                                                                                            $name = 'Please add player name!';
                                                                                                        } else {
                                                                                                            $name = htmlspecialchars($getData['name']);
                                                                                                        }

                                                                                                         
                                                                                                             $age = isset($getData['age']) ? htmlspecialchars($getData['age']) : 0;

                                                                                                             $getName = 'name'.$x;
                                                                                                             $getAge = 'age'.$x;

                                                                                                          
                                                                                                      
                                                                                                             echo "
                                                                                                                    <div class='box' class='col-md-4 col-sm-6' style='box-shadow: 0 0 15px rgba(0, 0, 0, 0.25); border-radius: 20px; margin: 17px; width: 45%; height: 250px;'>
                                                                                                                        <label style='margin-top: 30px;'>Player Name: </label>
                                                                                                                        <input type='text' class='form-control'name = '$getName' value='$name'> 
                                                                                                                        <label style='margin-top: 10px;'>Player Age: </label>
                                                                                                                        <input type='text' class='form-control' name = '$getAge' value='$age'>
                                                                                                                         
                                                                                                                    </div>
                                                                                                                    ";
                                                                                                      }
                                                                                          
                                                                                            
                                                                                          
                                                                               echo'   </div>
                                                                                    
                                                                            </div>
                                                                            <div class="part2">
                                                                                    <h5>Substitute players</h5>
                                                                                      <div class="row">';
                                                                                    for($y = 1; $y <=$sub; $y++){

                                                                                      $new = $y + 5;

                                                                                      $condition2 = 'player'.$new;

                                                                                      $selectFromPlayers2 = "SELECT * FROM players WHERE game_id = $game_id AND event_id = $event_id AND team_id = $team_id AND player_number = '$condition2'";
                                                                                      $queryForPlayers2 = mysqli_query($conn,$selectFromPlayers2);

                                                                                      $getData2 = mysqli_fetch_assoc($queryForPlayers2);

                                                                                      if (empty($getData2['name'])) {
                                                                                        $name2 = 'Please add player name!';
                                                                                    } else {
                                                                                        $name2 = htmlspecialchars($getData2['name']);
                                                                                    }

                                                                                     
                                                                                         $age2 = isset($getData2['age']) ? htmlspecialchars($getData2['age']) : 0;

                                                                                         $getName2 = 'name'.$new;
                                                                                         $getAge2 = 'age'.$new;

                                                                                     

                                                                                      echo "
                                                                                      <div class='box' class='col-md-4 col-sm-6' style='box-shadow: 0 0 15px rgba(0, 0, 0, 0.25); border-radius: 20px; margin: 17px; width: 45%; height: 250px;'>
                                                                                          <label style='margin-top: 30px;'>Player Name: </label>
                                                                                          <input type='text' class='form-control' name = '$getName2' value='$name2'> 
                                                                                          <label style='margin-top: 10px;'>Player Age: </label>
                                                                                          <input type='text' class='form-control' name = '$getAge2' value='$age2'>
                                                                                        
                                                                                      </div>
                                                                                      ";
                                                                                }
                                                                                              
                                                                              
                                                                            echo '</div>
                                                                            
                                                                            </div>
                                                                            <div class = "submit">
                                                                                <input type = "submit" value = "Confirm Players" class = "btn btn-success">
                                                                            </div>
                                                                            
                                                                        </form>
                                                                </div>
                                                                      
                                                                  ';

                                                                    // end sa futsal

                                                              }else if($game_type == 'Dance_Sports'){

                                                                    // start sa dance sports


                                                                    echo '
  
                                                                    <div class = "container">
                                                                         <form action="actionRegister.php" method = "post">
                                                                                 <div class="part1">
                                                                                       <h5>2 Dancers</h5>
                                                                                   <div class="row">';
                                                                                           
                                                                                                       for($x = 1; $x <=2; $x++){
    
                                                                                                         $condition = 'player'.$x;
    
                                                                                                         $game_id = $_SESSION['GameId'];
                                                                                                         $event_id = $_SESSION['EventId'];
                                                                                                        $gameType = $_SESSION['GameType'];
                                                                                                        $team_id = $_SESSION['idOfTeam'];
                                                                                                         
                                                                                                           $selectFromPlayers = "SELECT * FROM players WHERE game_id = $game_id AND event_id = $event_id AND team_id = $team_id AND player_number = '$condition'";
                                                                                                           $queryForPlayers = mysqli_query($conn,$selectFromPlayers);
    
                                                                                                           $getData = mysqli_fetch_assoc($queryForPlayers);
    
                                                                                                           if (empty($getData['name'])) {
                                                                                                             $name1 = 'Please add player1 name!';
                                                                                                         } else {
                                                                                                             $name1 = htmlspecialchars($getData['name']);
                                                                                                         }

                                                                                                         if (empty($getData['name1'])) {
                                                                                                          $name2 = 'Please add player2 name!';
                                                                                                      } else {
                                                                                                          $name2 = htmlspecialchars($getData['name1']);
                                                                                                      }

                                                                                                         
    
                                                                                                          
                                                                                                              $age1 = isset($getData['age']) ? htmlspecialchars($getData['age']) : 0;
                                                                                                              $age2 = isset($getData['age1']) ? htmlspecialchars($getData['age1']) : 0;
    
                                                                                                              $getName1 = 'name1'.$x;
                                                                                                              $getAge1 = 'age1'.$x;
                                                                                                              $getName2 = 'name2'.$x;
                                                                                                              $getAge2 = 'age2'.$x;

                                                                                                              
    
                                                                                                           
                                                                                                       
                                                                                                              echo "
                                                                                                                     <div class='box' class='col-md-4 col-sm-6' style='box-shadow: 0 0 15px rgba(0, 0, 0, 0.25); border-radius: 20px; margin: 17px; width: 45%; height: 350px;'>
                                                                                                                         <label style='margin-top: 2px;'>Dancer1 Name: </label>
                                                                                                                         <input type='text' class='form-control'name = '$getName1' value='$name1'> 
                                                                                                                         <label style='margin-top: 10px;'>Dancer1 Age: </label>
                                                                                                                         <input type='text' class='form-control' name = '$getAge1' value='$age1'>

                                                                                                                          <label style='margin-top: 30px;'>Dancer2 Name: </label>
                                                                                                                         <input type='text' class='form-control'name = '$getName2' value='$name2'> 
                                                                                                                         <label style='margin-top: 10px;'>Dancer2 Age: </label>
                                                                                                                         <input type='text' class='form-control' name = '$getAge2' value='$age2'>
                                                                                                                          
                                                                                                                     </div>
                                                                                                                     ";
                                                                                                       }
                                                                                           
                                                                                             
                                                                                           
                                                                                echo'   </div>
                                                                                     
                                                                             </div>
                                                                          
                                                                             <div class = "submit">
                                                                                 <input type = "submit" value = "Confirm Players" class = "btn btn-success">
                                                                             </div>
                                                                             
                                                                         </form>
                                                                 </div>
                                                                       
                                                                   ';


                                                                    // end sa dance sports

                                                              }else if($game_type == 'Chess'){
                                                                  // start sa chess
                                                                echo '

                                                                <div class = "container">
                                                                     <form action="actionRegister.php" method = "post">
                                                                             <div class="part1">
                                                                                   <h5>1 player</h5>
                                                                               <div class="row">';
                                                                                       
                                                                                                   for($x = 1; $x <=1; $x++){

                                                                                                     $condition = 'player'.$x;

                                                                                                     $game_id = $_SESSION['GameId'];
                                                                                                     $event_id = $_SESSION['EventId'];
                                                                                                    $gameType = $_SESSION['GameType'];
                                                                                                    $team_id = $_SESSION['idOfTeam'];
                                                                                                     
                                                                                                       $selectFromPlayers = "SELECT * FROM players WHERE game_id = $game_id AND event_id = $event_id AND team_id = $team_id AND player_number = '$condition'";
                                                                                                       $queryForPlayers = mysqli_query($conn,$selectFromPlayers);

                                                                                                       $getData = mysqli_fetch_assoc($queryForPlayers);

                                                                                                       if (empty($getData['name'])) {
                                                                                                         $name = 'Please add player name!';
                                                                                                     } else {
                                                                                                         $name = htmlspecialchars($getData['name']);
                                                                                                     }

                                                                                                      
                                                                                                          $age = isset($getData['age']) ? htmlspecialchars($getData['age']) : 0;

                                                                                                          $getName = 'name'.$x;
                                                                                                          $getAge = 'age'.$x;

                                                                                                       
                                                                                                   
                                                                                                          echo "
                                                                                                                 <div class='box' class='col-md-4 col-sm-6' style='box-shadow: 0 0 15px rgba(0, 0, 0, 0.25); border-radius: 20px; margin: 17px; width: 45%; height: 250px;'>
                                                                                                                     <label style='margin-top: 30px;'>Player Name: </label>
                                                                                                                     <input type='text' class='form-control'name = '$getName' value='$name'> 
                                                                                                                     <label style='margin-top: 10px;'>Player Age: </label>
                                                                                                                     <input type='text' class='form-control' name = '$getAge' value='$age'>
                                                                                                                      
                                                                                                                 </div>
                                                                                                                 ";
                                                                                                   }
                                                                                       
                                                                                         
                                                                                       
                                                                            echo'   </div>
                                                                                 
                                                                         </div>
                                                                      
                                                                         <div class = "submit">
                                                                             <input type = "submit" value = "Confirm Players" class = "btn btn-success">
                                                                         </div>
                                                                         
                                                                     </form>
                                                             </div>
                                                                   
                                                               ';


                                                              //  end sa chess

                                                              }else if($game_type == 'Archery'){

                                                                  // start sa Archery

                                                                  echo '

                                                                  <div class = "container">
                                                                       <form action="actionRegister.php" method = "post">
                                                                               <div class="part1">
                                                                                     <h5>1 player</h5>
                                                                                 <div class="row">';
                                                                                         
                                                                                                     for($x = 1; $x <=1; $x++){
  
                                                                                                       $condition = 'player'.$x;
  
                                                                                                       $game_id = $_SESSION['GameId'];
                                                                                                       $event_id = $_SESSION['EventId'];
                                                                                                      $gameType = $_SESSION['GameType'];
                                                                                                      $team_id = $_SESSION['idOfTeam'];
                                                                                                       
                                                                                                         $selectFromPlayers = "SELECT * FROM players WHERE game_id = $game_id AND event_id = $event_id AND team_id = $team_id AND player_number = '$condition'";
                                                                                                         $queryForPlayers = mysqli_query($conn,$selectFromPlayers);
  
                                                                                                         $getData = mysqli_fetch_assoc($queryForPlayers);
  
                                                                                                         if (empty($getData['name'])) {
                                                                                                           $name = 'Please add player name!';
                                                                                                       } else {
                                                                                                           $name = htmlspecialchars($getData['name']);
                                                                                                       }
  
                                                                                                        
                                                                                                            $age = isset($getData['age']) ? htmlspecialchars($getData['age']) : 0;
  
                                                                                                            $getName = 'name'.$x;
                                                                                                            $getAge = 'age'.$x;
  
                                                                                                         
                                                                                                     
                                                                                                            echo "
                                                                                                                   <div class='box' class='col-md-4 col-sm-6' style='box-shadow: 0 0 15px rgba(0, 0, 0, 0.25); border-radius: 20px; margin: 17px; width: 45%; height: 250px;'>
                                                                                                                       <label style='margin-top: 30px;'>Player Name: </label>
                                                                                                                       <input type='text' class='form-control'name = '$getName' value='$name'> 
                                                                                                                       <label style='margin-top: 10px;'>Player Age: </label>
                                                                                                                       <input type='text' class='form-control' name = '$getAge' value='$age'>
                                                                                                                        
                                                                                                                   </div>
                                                                                                                   ";
                                                                                                     }
                                                                                         
                                                                                           
                                                                                         
                                                                              echo'   </div>
                                                                                   
                                                                           </div>
                                                                        
                                                                           <div class = "submit">
                                                                               <input type = "submit" value = "Confirm Players" class = "btn btn-success">
                                                                           </div>
                                                                           
                                                                       </form>
                                                               </div>
                                                                     
                                                                 ';

                                                                  // end sa Archery

                                                              }else if($game_type == 'Creative_Folk_Dance'){

                                                                  // start sa folk dance duet

                                                                  echo '

                                                                  <div class = "container">
                                                                       <form action="actionRegister.php" method = "post">
                                                                               <div class="part1">
                                                                                     <h5>Dancers</h5>
                                                                                 <div class="row">';
                                                                                         
                                                                                                     for($x = 1; $x <= $numberOfPlayers; $x++){
  
                                                                                                       $condition = 'player'.$x;
  
                                                                                                       $game_id = $_SESSION['GameId'];
                                                                                                       $event_id = $_SESSION['EventId'];
                                                                                                      $gameType = $_SESSION['GameType'];
                                                                                                      $team_id = $_SESSION['idOfTeam'];
                                                                                                       
                                                                                                         $selectFromPlayers = "SELECT * FROM players WHERE game_id = $game_id AND event_id = $event_id AND team_id = $team_id AND player_number = '$condition'";
                                                                                                         $queryForPlayers = mysqli_query($conn,$selectFromPlayers);
  
                                                                                                         $getData = mysqli_fetch_assoc($queryForPlayers);
  
                                                                                                         if (empty($getData['name'])) {
                                                                                                           $name = 'Please add player name!';
                                                                                                       } else {
                                                                                                           $name = htmlspecialchars($getData['name']);
                                                                                                       }
  
                                                                                                        
                                                                                                            $age = isset($getData['age']) ? htmlspecialchars($getData['age']) : 0;
  
                                                                                                            $getName = 'name'.$x;
                                                                                                            $getAge = 'age'.$x;
  
                                                                                                         
                                                                                                     
                                                                                                            echo "
                                                                                                                   <div class='box' class='col-md-4 col-sm-6' style='box-shadow: 0 0 15px rgba(0, 0, 0, 0.25); border-radius: 20px; margin: 17px; width: 45%; height: 250px;'>
                                                                                                                       <label style='margin-top: 30px;'>Player Name: </label>
                                                                                                                       <input type='text' class='form-control'name = '$getName' value='$name'> 
                                                                                                                       <label style='margin-top: 10px;'>Player Age: </label>
                                                                                                                       <input type='text' class='form-control' name = '$getAge' value='$age'>
                                                                                                                        
                                                                                                                   </div>
                                                                                                                   ";
                                                                                                     }
                                                                                         
                                                                                           
                                                                                         
                                                                              echo'   </div>
                                                                                   
                                                                           </div>
                                                                        
                                                                           <div class = "submit">
                                                                               <input type = "submit" value = "Confirm Players" class = "btn btn-success">
                                                                           </div>
                                                                           
                                                                       </form>
                                                               </div>
                                                                     
                                                                 ';

                                                                  // end sa folk dance
                                                              }else if($game_type == 'Pop_Dance'){

                                                                // start sa Pop_Dance

                                                                echo '

                                                                <div class = "container">
                                                                     <form action="actionRegister.php" method = "post">
                                                                             <div class="part1">
                                                                                   <h5>Dancers</h5>
                                                                               <div class="row">';
                                                                                       
                                                                                                   for($x = 1; $x <= $numberOfPlayers; $x++){

                                                                                                     $condition = 'player'.$x;

                                                                                                     $game_id = $_SESSION['GameId'];
                                                                                                     $event_id = $_SESSION['EventId'];
                                                                                                    $gameType = $_SESSION['GameType'];
                                                                                                    $team_id = $_SESSION['idOfTeam'];
                                                                                                     
                                                                                                       $selectFromPlayers = "SELECT * FROM players WHERE game_id = $game_id AND event_id = $event_id AND team_id = $team_id AND player_number = '$condition'";
                                                                                                       $queryForPlayers = mysqli_query($conn,$selectFromPlayers);

                                                                                                       $getData = mysqli_fetch_assoc($queryForPlayers);

                                                                                                       if (empty($getData['name'])) {
                                                                                                         $name = 'Please add player name!';
                                                                                                     } else {
                                                                                                         $name = htmlspecialchars($getData['name']);
                                                                                                     }

                                                                                                      
                                                                                                          $age = isset($getData['age']) ? htmlspecialchars($getData['age']) : 0;

                                                                                                          $getName = 'name'.$x;
                                                                                                          $getAge = 'age'.$x;

                                                                                                       
                                                                                                   
                                                                                                          echo "
                                                                                                                 <div class='box' class='col-md-4 col-sm-6' style='box-shadow: 0 0 15px rgba(0, 0, 0, 0.25); border-radius: 20px; margin: 17px; width: 45%; height: 250px;'>
                                                                                                                     <label style='margin-top: 30px;'>Player Name: </label>
                                                                                                                     <input type='text' class='form-control'name = '$getName' value='$name'> 
                                                                                                                     <label style='margin-top: 10px;'>Player Age: </label>
                                                                                                                     <input type='text' class='form-control' name = '$getAge' value='$age'>
                                                                                                                      
                                                                                                                 </div>
                                                                                                                 ";
                                                                                                   }
                                                                                       
                                                                                         
                                                                                       
                                                                            echo'   </div>
                                                                                 
                                                                         </div>
                                                                      
                                                                         <div class = "submit">
                                                                             <input type = "submit" value = "Confirm Players" class = "btn btn-success">
                                                                         </div>
                                                                         
                                                                     </form>
                                                             </div>
                                                                   
                                                               ';

                                                                // end sa Pop_Dance
                                                            }else if($game_type == 'Vocal_Duet'){

                                                              // start sa Vocal_Duet

                                                              echo '
  
                                                                    <div class = "container">
                                                                         <form action="actionRegister.php" method = "post">
                                                                                 <div class="part1">
                                                                                       <h5>Vocal Duet</h5>
                                                                                   <div class="row">';
                                                                                           
                                                                                                       for($x = 1; $x <=1; $x++){
    
                                                                                                         $condition = 'player'.$x;
    
                                                                                                         $game_id = $_SESSION['GameId'];
                                                                                                         $event_id = $_SESSION['EventId'];
                                                                                                        $gameType = $_SESSION['GameType'];
                                                                                                        $team_id = $_SESSION['idOfTeam'];
                                                                                                         
                                                                                                           $selectFromPlayers = "SELECT * FROM players WHERE game_id = $game_id AND event_id = $event_id AND team_id = $team_id AND player_number = '$condition'";
                                                                                                           $queryForPlayers = mysqli_query($conn,$selectFromPlayers);
    
                                                                                                           $getData = mysqli_fetch_assoc($queryForPlayers);
    
                                                                                                           if (empty($getData['name'])) {
                                                                                                             $name1 = 'Please add player1 name!';
                                                                                                         } else {
                                                                                                             $name1 = htmlspecialchars($getData['name']);
                                                                                                         }

                                                                                                         if (empty($getData['name1'])) {
                                                                                                          $name2 = 'Please add player2 name!';
                                                                                                      } else {
                                                                                                          $name2 = htmlspecialchars($getData['name1']);
                                                                                                      }

                                                                                                         
    
                                                                                                          
                                                                                                              $age1 = isset($getData['age']) ? htmlspecialchars($getData['age']) : 0;
                                                                                                              $age2 = isset($getData['age1']) ? htmlspecialchars($getData['age1']) : 0;
    
                                                                                                              $getName1 = 'name1'.$x;
                                                                                                              $getAge1 = 'age1'.$x;
                                                                                                              $getName2 = 'name2'.$x;
                                                                                                              $getAge2 = 'age2'.$x;

                                                                                                              
    
                                                                                                           
                                                                                                       
                                                                                                              echo "
                                                                                                                     <div class='box' class='col-md-4 col-sm-6' style='box-shadow: 0 0 15px rgba(0, 0, 0, 0.25); border-radius: 20px; margin: 17px; width: 45%; height: 350px;'>
                                                                                                                         <label style='margin-top: 2px;'>Dancer1 Name: </label>
                                                                                                                         <input type='text' class='form-control'name = '$getName1' value='$name1'> 
                                                                                                                         <label style='margin-top: 10px;'>Dancer1 Age: </label>
                                                                                                                         <input type='text' class='form-control' name = '$getAge1' value='$age1'>

                                                                                                                          <label style='margin-top: 30px;'>Dancer2 Name: </label>
                                                                                                                         <input type='text' class='form-control'name = '$getName2' value='$name2'> 
                                                                                                                         <label style='margin-top: 10px;'>Dancer2 Age: </label>
                                                                                                                         <input type='text' class='form-control' name = '$getAge2' value='$age2'>
                                                                                                                          
                                                                                                                     </div>
                                                                                                                     ";
                                                                                                       }
                                                                                           
                                                                                             
                                                                                           
                                                                                echo'   </div>
                                                                                     
                                                                             </div>
                                                                          
                                                                             <div class = "submit">
                                                                                 <input type = "submit" value = "Confirm Players" class = "btn btn-success">
                                                                             </div>
                                                                             
                                                                         </form>
                                                                 </div>
                                                                       
                                                                   ';
                                                              // end sa Vocal_Duet
                                                          }else if($game_type == 'Pop_Solo'){

                                                            // start sa Pop_Solo

                                                            echo '

                                                            <div class = "container">
                                                                 <form action="actionRegister.php" method = "post">
                                                                         <div class="part1">
                                                                               <h5>Dancer</h5>
                                                                           <div class="row">';
                                                                                   
                                                                                               for($x = 1; $x <= $numberOfPlayers; $x++){

                                                                                                 $condition = 'player'.$x;

                                                                                                 $game_id = $_SESSION['GameId'];
                                                                                                 $event_id = $_SESSION['EventId'];
                                                                                                $gameType = $_SESSION['GameType'];
                                                                                                $team_id = $_SESSION['idOfTeam'];
                                                                                                 
                                                                                                   $selectFromPlayers = "SELECT * FROM players WHERE game_id = $game_id AND event_id = $event_id AND team_id = $team_id AND player_number = '$condition'";
                                                                                                   $queryForPlayers = mysqli_query($conn,$selectFromPlayers);

                                                                                                   $getData = mysqli_fetch_assoc($queryForPlayers);

                                                                                                   if (empty($getData['name'])) {
                                                                                                     $name = 'Please add player name!';
                                                                                                 } else {
                                                                                                     $name = htmlspecialchars($getData['name']);
                                                                                                 }

                                                                                                  
                                                                                                      $age = isset($getData['age']) ? htmlspecialchars($getData['age']) : 0;

                                                                                                      $getName = 'name'.$x;
                                                                                                      $getAge = 'age'.$x;

                                                                                                   
                                                                                               
                                                                                                      echo "
                                                                                                             <div class='box' class='col-md-4 col-sm-6' style='box-shadow: 0 0 15px rgba(0, 0, 0, 0.25); border-radius: 20px; margin: 17px; width: 45%; height: 250px;'>
                                                                                                                 <label style='margin-top: 30px;'>Player Name: </label>
                                                                                                                 <input type='text' class='form-control'name = '$getName' value='$name'> 
                                                                                                                 <label style='margin-top: 10px;'>Player Age: </label>
                                                                                                                 <input type='text' class='form-control' name = '$getAge' value='$age'>
                                                                                                                  
                                                                                                             </div>
                                                                                                             ";
                                                                                               }
                                                                                   
                                                                                     
                                                                                   
                                                                        echo'   </div>
                                                                             
                                                                     </div>
                                                                  
                                                                     <div class = "submit">
                                                                         <input type = "submit" value = "Confirm Players" class = "btn btn-success">
                                                                     </div>
                                                                     
                                                                 </form>
                                                         </div>
                                                               
                                                           ';

                                                            // end sa Pop_Solo
                                                        }else if($game_type == 'Charcoal_Rendering'){

                                                          // start sa Charcoal_Rendering

                                                          echo '

                                                          <div class = "container">
                                                               <form action="actionRegister.php" method = "post">
                                                                       <div class="part1">
                                                                             <h5>Artist</h5>
                                                                         <div class="row">';
                                                                                 
                                                                                             for($x = 1; $x <= $numberOfPlayers; $x++){

                                                                                               $condition = 'player'.$x;

                                                                                               $game_id = $_SESSION['GameId'];
                                                                                               $event_id = $_SESSION['EventId'];
                                                                                              $gameType = $_SESSION['GameType'];
                                                                                              $team_id = $_SESSION['idOfTeam'];
                                                                                               
                                                                                                 $selectFromPlayers = "SELECT * FROM players WHERE game_id = $game_id AND event_id = $event_id AND team_id = $team_id AND player_number = '$condition'";
                                                                                                 $queryForPlayers = mysqli_query($conn,$selectFromPlayers);

                                                                                                 $getData = mysqli_fetch_assoc($queryForPlayers);

                                                                                                 if (empty($getData['name'])) {
                                                                                                   $name = 'Please add player name!';
                                                                                               } else {
                                                                                                   $name = htmlspecialchars($getData['name']);
                                                                                               }

                                                                                                
                                                                                                    $age = isset($getData['age']) ? htmlspecialchars($getData['age']) : 0;

                                                                                                    $getName = 'name'.$x;
                                                                                                    $getAge = 'age'.$x;

                                                                                                 
                                                                                             
                                                                                                    echo "
                                                                                                           <div class='box' class='col-md-4 col-sm-6' style='box-shadow: 0 0 15px rgba(0, 0, 0, 0.25); border-radius: 20px; margin: 17px; width: 45%; height: 250px;'>
                                                                                                               <label style='margin-top: 30px;'>Player Name: </label>
                                                                                                               <input type='text' class='form-control'name = '$getName' value='$name'> 
                                                                                                               <label style='margin-top: 10px;'>Player Age: </label>
                                                                                                               <input type='text' class='form-control' name = '$getAge' value='$age'>
                                                                                                                
                                                                                                           </div>
                                                                                                           ";
                                                                                             }
                                                                                 
                                                                                   
                                                                                 
                                                                      echo'   </div>
                                                                           
                                                                   </div>
                                                                
                                                                   <div class = "submit">
                                                                       <input type = "submit" value = "Confirm Players" class = "btn btn-success">
                                                                   </div>
                                                                   
                                                               </form>
                                                       </div>
                                                             
                                                         ';

                                                          // end sa Charcoal_Rendering
                                                      }else if($game_type == 'Pencil_Drawing'){

                                                        // start sa Pencil_Drawing

                                                        echo '

                                                        <div class = "container">
                                                             <form action="actionRegister.php" method = "post">
                                                                     <div class="part1">
                                                                           <h5>Artist</h5>
                                                                       <div class="row">';
                                                                               
                                                                                           for($x = 1; $x <= $numberOfPlayers; $x++){

                                                                                             $condition = 'player'.$x;

                                                                                             $game_id = $_SESSION['GameId'];
                                                                                             $event_id = $_SESSION['EventId'];
                                                                                            $gameType = $_SESSION['GameType'];
                                                                                            $team_id = $_SESSION['idOfTeam'];
                                                                                             
                                                                                               $selectFromPlayers = "SELECT * FROM players WHERE game_id = $game_id AND event_id = $event_id AND team_id = $team_id AND player_number = '$condition'";
                                                                                               $queryForPlayers = mysqli_query($conn,$selectFromPlayers);

                                                                                               $getData = mysqli_fetch_assoc($queryForPlayers);

                                                                                               if (empty($getData['name'])) {
                                                                                                 $name = 'Please add player name!';
                                                                                             } else {
                                                                                                 $name = htmlspecialchars($getData['name']);
                                                                                             }

                                                                                              
                                                                                                  $age = isset($getData['age']) ? htmlspecialchars($getData['age']) : 0;

                                                                                                  $getName = 'name'.$x;
                                                                                                  $getAge = 'age'.$x;

                                                                                               
                                                                                           
                                                                                                  echo "
                                                                                                         <div class='box' class='col-md-4 col-sm-6' style='box-shadow: 0 0 15px rgba(0, 0, 0, 0.25); border-radius: 20px; margin: 17px; width: 45%; height: 250px;'>
                                                                                                             <label style='margin-top: 30px;'>Player Name: </label>
                                                                                                             <input type='text' class='form-control'name = '$getName' value='$name'> 
                                                                                                             <label style='margin-top: 10px;'>Player Age: </label>
                                                                                                             <input type='text' class='form-control' name = '$getAge' value='$age'>
                                                                                                              
                                                                                                         </div>
                                                                                                         ";
                                                                                           }
                                                                               
                                                                                 
                                                                               
                                                                    echo'   </div>
                                                                         
                                                                 </div>
                                                              
                                                                 <div class = "submit">
                                                                     <input type = "submit" value = "Confirm Players" class = "btn btn-success">
                                                                 </div>
                                                                 
                                                             </form>
                                                     </div>
                                                           
                                                       ';

                                                        // end sa Pencil_Drawing
                                                    }else if($game_type == 'Painting'){

                                                      // start sa Painting

                                                      echo '

                                                      <div class = "container">
                                                           <form action="actionRegister.php" method = "post">
                                                                   <div class="part1">
                                                                         <h5>Artist</h5>
                                                                     <div class="row">';
                                                                             
                                                                                         for($x = 1; $x <= $numberOfPlayers; $x++){

                                                                                           $condition = 'player'.$x;

                                                                                           $game_id = $_SESSION['GameId'];
                                                                                           $event_id = $_SESSION['EventId'];
                                                                                          $gameType = $_SESSION['GameType'];
                                                                                          $team_id = $_SESSION['idOfTeam'];
                                                                                           
                                                                                             $selectFromPlayers = "SELECT * FROM players WHERE game_id = $game_id AND event_id = $event_id AND team_id = $team_id AND player_number = '$condition'";
                                                                                             $queryForPlayers = mysqli_query($conn,$selectFromPlayers);

                                                                                             $getData = mysqli_fetch_assoc($queryForPlayers);

                                                                                             if (empty($getData['name'])) {
                                                                                               $name = 'Please add player name!';
                                                                                           } else {
                                                                                               $name = htmlspecialchars($getData['name']);
                                                                                           }

                                                                                            
                                                                                                $age = isset($getData['age']) ? htmlspecialchars($getData['age']) : 0;

                                                                                                $getName = 'name'.$x;
                                                                                                $getAge = 'age'.$x;

                                                                                             
                                                                                         
                                                                                                echo "
                                                                                                       <div class='box' class='col-md-4 col-sm-6' style='box-shadow: 0 0 15px rgba(0, 0, 0, 0.25); border-radius: 20px; margin: 17px; width: 45%; height: 250px;'>
                                                                                                           <label style='margin-top: 30px;'>Player Name: </label>
                                                                                                           <input type='text' class='form-control'name = '$getName' value='$name'> 
                                                                                                           <label style='margin-top: 10px;'>Player Age: </label>
                                                                                                           <input type='text' class='form-control' name = '$getAge' value='$age'>
                                                                                                            
                                                                                                       </div>
                                                                                                       ";
                                                                                         }
                                                                             
                                                                               
                                                                             
                                                                  echo'   </div>
                                                                       
                                                               </div>
                                                            
                                                               <div class = "submit">
                                                                   <input type = "submit" value = "Confirm Players" class = "btn btn-success">
                                                               </div>
                                                               
                                                           </form>
                                                   </div>
                                                         
                                                     ';

                                                      // end sa Painting
                                                  }else if($game_type == 'Poster_Making'){

                                                    // start sa Poster_Making

                                                    echo '

                                                    <div class = "container">
                                                         <form action="actionRegister.php" method = "post">
                                                                 <div class="part1">
                                                                       <h5>Artist</h5>
                                                                   <div class="row">';
                                                                           
                                                                                       for($x = 1; $x <= $numberOfPlayers; $x++){

                                                                                         $condition = 'player'.$x;

                                                                                         $game_id = $_SESSION['GameId'];
                                                                                         $event_id = $_SESSION['EventId'];
                                                                                        $gameType = $_SESSION['GameType'];
                                                                                        $team_id = $_SESSION['idOfTeam'];
                                                                                         
                                                                                           $selectFromPlayers = "SELECT * FROM players WHERE game_id = $game_id AND event_id = $event_id AND team_id = $team_id AND player_number = '$condition'";
                                                                                           $queryForPlayers = mysqli_query($conn,$selectFromPlayers);

                                                                                           $getData = mysqli_fetch_assoc($queryForPlayers);

                                                                                           if (empty($getData['name'])) {
                                                                                             $name = 'Please add player name!';
                                                                                         } else {
                                                                                             $name = htmlspecialchars($getData['name']);
                                                                                         }

                                                                                          
                                                                                              $age = isset($getData['age']) ? htmlspecialchars($getData['age']) : 0;

                                                                                              $getName = 'name'.$x;
                                                                                              $getAge = 'age'.$x;

                                                                                           
                                                                                       
                                                                                              echo "
                                                                                                     <div class='box' class='col-md-4 col-sm-6' style='box-shadow: 0 0 15px rgba(0, 0, 0, 0.25); border-radius: 20px; margin: 17px; width: 45%; height: 250px;'>
                                                                                                         <label style='margin-top: 30px;'>Player Name: </label>
                                                                                                         <input type='text' class='form-control'name = '$getName' value='$name'> 
                                                                                                         <label style='margin-top: 10px;'>Player Age: </label>
                                                                                                         <input type='text' class='form-control' name = '$getAge' value='$age'>
                                                                                                          
                                                                                                     </div>
                                                                                                     ";
                                                                                       }
                                                                           
                                                                             
                                                                           
                                                                echo'   </div>
                                                                     
                                                             </div>
                                                          
                                                             <div class = "submit">
                                                                 <input type = "submit" value = "Confirm Players" class = "btn btn-success">
                                                             </div>
                                                             
                                                         </form>
                                                 </div>
                                                       
                                                   ';

                                                    // end sa Poster_Making
                                                }else if($game_type == 'Phone_Photography'){

                                                  // start sa Phone_Photography

                                                  echo '

                                                  <div class = "container">
                                                       <form action="actionRegister.php" method = "post">
                                                               <div class="part1">
                                                                     <h5>Artist</h5>
                                                                 <div class="row">';
                                                                         
                                                                                     for($x = 1; $x <= $numberOfPlayers; $x++){

                                                                                       $condition = 'player'.$x;

                                                                                       $game_id = $_SESSION['GameId'];
                                                                                       $event_id = $_SESSION['EventId'];
                                                                                      $gameType = $_SESSION['GameType'];
                                                                                      $team_id = $_SESSION['idOfTeam'];
                                                                                       
                                                                                         $selectFromPlayers = "SELECT * FROM players WHERE game_id = $game_id AND event_id = $event_id AND team_id = $team_id AND player_number = '$condition'";
                                                                                         $queryForPlayers = mysqli_query($conn,$selectFromPlayers);

                                                                                         $getData = mysqli_fetch_assoc($queryForPlayers);

                                                                                         if (empty($getData['name'])) {
                                                                                           $name = 'Please add player name!';
                                                                                       } else {
                                                                                           $name = htmlspecialchars($getData['name']);
                                                                                       }

                                                                                        
                                                                                            $age = isset($getData['age']) ? htmlspecialchars($getData['age']) : 0;

                                                                                            $getName = 'name'.$x;
                                                                                            $getAge = 'age'.$x;

                                                                                         
                                                                                     
                                                                                            echo "
                                                                                                   <div class='box' class='col-md-4 col-sm-6' style='box-shadow: 0 0 15px rgba(0, 0, 0, 0.25); border-radius: 20px; margin: 17px; width: 45%; height: 250px;'>
                                                                                                       <label style='margin-top: 30px;'>Player Name: </label>
                                                                                                       <input type='text' class='form-control'name = '$getName' value='$name'> 
                                                                                                       <label style='margin-top: 10px;'>Player Age: </label>
                                                                                                       <input type='text' class='form-control' name = '$getAge' value='$age'>
                                                                                                        
                                                                                                   </div>
                                                                                                   ";
                                                                                     }
                                                                         
                                                                           
                                                                         
                                                              echo'   </div>
                                                                   
                                                           </div>
                                                        
                                                           <div class = "submit">
                                                               <input type = "submit" value = "Confirm Players" class = "btn btn-success">
                                                           </div>
                                                           
                                                       </form>
                                               </div>
                                                     
                                                 ';

                                                  // end sa Phone_Photography
                                              }else if($game_type == 'Mr_and_Mrs_Panagtigi'){

                                                // start sa Mr_and_Mrs_Panagtigi

                                                echo '
  
                                                <div class = "container">
                                                     <form action="actionRegister.php" method = "post">
                                                             <div class="part1">
                                                                   <h5>Mr and Mrs PANAGTIGI</h5>
                                                               <div class="row">';
                                                                       
                                                                                   for($x = 1; $x <=1; $x++){

                                                                                     $condition = 'player'.$x;

                                                                                     $game_id = $_SESSION['GameId'];
                                                                                     $event_id = $_SESSION['EventId'];
                                                                                    $gameType = $_SESSION['GameType'];
                                                                                    $team_id = $_SESSION['idOfTeam'];
                                                                                     
                                                                                       $selectFromPlayers = "SELECT * FROM players WHERE game_id = $game_id AND event_id = $event_id AND team_id = $team_id AND player_number = '$condition'";
                                                                                       $queryForPlayers = mysqli_query($conn,$selectFromPlayers);

                                                                                       $getData = mysqli_fetch_assoc($queryForPlayers);

                                                                                       if (empty($getData['name'])) {
                                                                                         $name1 = 'Please add player1 name!';
                                                                                     } else {
                                                                                         $name1 = htmlspecialchars($getData['name']);
                                                                                     }

                                                                                     if (empty($getData['name1'])) {
                                                                                      $name2 = 'Please add player2 name!';
                                                                                  } else {
                                                                                      $name2 = htmlspecialchars($getData['name1']);
                                                                                  }

                                                                                     

                                                                                      
                                                                                          $age1 = isset($getData['age']) ? htmlspecialchars($getData['age']) : 0;
                                                                                          $age2 = isset($getData['age1']) ? htmlspecialchars($getData['age1']) : 0;

                                                                                          $getName1 = 'name1'.$x;
                                                                                          $getAge1 = 'age1'.$x;
                                                                                          $getName2 = 'name2'.$x;
                                                                                          $getAge2 = 'age2'.$x;

                                                                                          

                                                                                       
                                                                                   
                                                                                          echo "
                                                                                                 <div class='box' class='col-md-4 col-sm-6' style='box-shadow: 0 0 15px rgba(0, 0, 0, 0.25); border-radius: 20px; margin: 17px; width: 45%; height: 350px;'>
                                                                                                     <label style='margin-top: 2px;'>Dancer1 Name: </label>
                                                                                                     <input type='text' class='form-control'name = '$getName1' value='$name1'> 
                                                                                                     <label style='margin-top: 10px;'>Dancer1 Age: </label>
                                                                                                     <input type='text' class='form-control' name = '$getAge1' value='$age1'>

                                                                                                      <label style='margin-top: 30px;'>Dancer2 Name: </label>
                                                                                                     <input type='text' class='form-control'name = '$getName2' value='$name2'> 
                                                                                                     <label style='margin-top: 10px;'>Dancer2 Age: </label>
                                                                                                     <input type='text' class='form-control' name = '$getAge2' value='$age2'>
                                                                                                      
                                                                                                 </div>
                                                                                                 ";
                                                                                   }
                                                                       
                                                                         
                                                                       
                                                            echo'   </div>
                                                                 
                                                         </div>
                                                      
                                                         <div class = "submit">
                                                             <input type = "submit" value = "Confirm Players" class = "btn btn-success">
                                                         </div>
                                                         
                                                     </form>
                                             </div>
                                                   
                                               ';

                                                // end sa Mr_and_Mrs_Panagtigi
                                            }else if($game_type == 'Mass_Dance'){

                                              // start sa Mass_Dance

                                              echo '

                                              <div class = "container">
                                                   <form action="actionRegister.php" method = "post">
                                                           <div class="part1">
                                                                 <h5>Mass Dance</h5>
                                                             <div class="row">';
                                                                     
                                                                                 for($x = 1; $x <= $numberOfPlayers; $x++){

                                                                                   $condition = 'player'.$x;

                                                                                   $game_id = $_SESSION['GameId'];
                                                                                   $event_id = $_SESSION['EventId'];
                                                                                  $gameType = $_SESSION['GameType'];
                                                                                  $team_id = $_SESSION['idOfTeam'];
                                                                                   
                                                                                     $selectFromPlayers = "SELECT * FROM players WHERE game_id = $game_id AND event_id = $event_id AND team_id = $team_id AND player_number = '$condition'";
                                                                                     $queryForPlayers = mysqli_query($conn,$selectFromPlayers);

                                                                                     $getData = mysqli_fetch_assoc($queryForPlayers);

                                                                                     if (empty($getData['name'])) {
                                                                                       $name = 'Please add player name!';
                                                                                   } else {
                                                                                       $name = htmlspecialchars($getData['name']);
                                                                                   }

                                                                                    
                                                                                        $age = isset($getData['age']) ? htmlspecialchars($getData['age']) : 0;

                                                                                        $getName = 'name'.$x;
                                                                                        $getAge = 'age'.$x;

                                                                                     
                                                                                 
                                                                                        echo "
                                                                                               <div class='box' class='col-md-4 col-sm-6' style='box-shadow: 0 0 15px rgba(0, 0, 0, 0.25); border-radius: 20px; margin: 17px; width: 45%; height: 250px;'>
                                                                                                   <label style='margin-top: 30px;'>Player Name: </label>
                                                                                                   <input type='text' class='form-control'name = '$getName' value='$name'> 
                                                                                                   <label style='margin-top: 10px;'>Player Age: </label>
                                                                                                   <input type='text' class='form-control' name = '$getAge' value='$age'>
                                                                                                    
                                                                                               </div>
                                                                                               ";
                                                                                 }
                                                                     
                                                                       
                                                                     
                                                          echo'   </div>
                                                               
                                                       </div>
                                                    
                                                       <div class = "submit">
                                                           <input type = "submit" value = "Confirm Players" class = "btn btn-success">
                                                       </div>
                                                       
                                                   </form>
                                           </div>
                                                 
                                             ';

                                              // end sa Mass_Dance
                                          }
                                                            
                                                  }else{
                                                       
                                                  }
                                            ?>

                                </div>

                      <!-- </form> -->
                      
                         
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
      
      </div>
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              
                <li class="nav-item">
                  <a href="#" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <div class="fixed-plugin">
   
    <div class="card shadow-lg ">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Soft UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3">
          <h6 class="mb-0">Navbar Fixed</h6>
        </div>
        <div class="form-check form-switch ps-0">
          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/soft-ui-dashboard">Free Download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/soft-ui-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/soft-ui-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
     <!-- Bootstrap JS and dependencies -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script src="../template/AdminTemplate/assets/js/core/popper.min.js"></script>
  <script src="../template/AdminTemplate/assets/js/core/bootstrap.min.js"></script>
  <script src="../template/AdminTemplate/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../template/AdminTemplate/assets/js/plugins/smooth-scrollbar.min.js"></script>

  <script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('logo');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="../template/AdminTemplate/assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
</body>

</html>


