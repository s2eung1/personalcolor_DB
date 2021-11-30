<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">

<head>
  <title>P-Color Reservation Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://www.gstatic.com/charts/loader.js"></script>
  <link  rel="stylesheet" href="../css/Main.css" >
  <link rel="stylesheet" href="../css/Mypage.css">
  <script type="text/javascript" src="../javascript/Reservation.js"></script>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" style="padding-top:80px;">
  <!-- nav div -->
  <nav class="navbar navbar-expnad-xl navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
          <a class="navbar-grand navbar-left" href="Home.php">
              <img class="navimg" src="../img/logo.png" alt="Logo" width="100"></img>
          </a>
          <button type="button" class="navbar-toggle active" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div id="myNavbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-left" style="text-align:center; font-weight:bold; margin-left:10px;">
                  <li class="nav-item"><a class="nav-link" href="Test.php">test</a></li>
                  <li class="nav-item"><a class="nav-link" href="Spring.php">characteristice</a></li>
                  <li class="nav-item"><a class="nav-link" href="Match.php">mathcing</a></li>
                  <li class="nav-item"><a class="nav-link" href="Store.php">reservation</a></li>
                </ul>

                <?php
                if(isset($_SESSION['userid'])){
                ?>
                <ul class="nav navbar-nav navbar-right" style="text-align:center; font-weight:bold; margin-left:10px;">
                  <li class="nav-item"><a class="nav-link" href="Mypage.php">Mypage</a></li>
                  <li class="nav-item"><a class="nav-link" href="Logout.php">Logout</a></li>
                </ul>
                <?php
                }else{
                ?>
                <ul class="nav navbar-nav navbar-right" style="text-align:center; font-weight:bold; margin-left:10px;">
                  <li class="nav-item"><a class="nav-link" href="SignIn.php">Sign in</a></li>
                  <li class="nav-item"><a class="nav-link" href="SignUp.php">Sign up</a></li>
                </ul>
                <?php
                }
                ?>
          </div>
      </div>
    </nav>

  <!-- content div -->
  <div class="container-fluid">
    <div class="content">
      <!-- MypageSection -->
      <section class="page_section" id="MypageSection">
        <!-- MypageSection title -->
        <div class="section_title">
          <h2 class="section-heading text-uppercase">MyPage</h2>
        </div>
        <!-- MypageSection content -->
        <div class="row">
          <div class="col-md-6">
            <h3 class="section-subheading text-muted">Profile</h3>
            <div class="Mypage_image">
              <img src="../img/profile.jpg" alt="profile" class="img-resonsive">
            </div>
            <div class="Mypage_Info">
              <form class="form-inline">
                <div class="form-group">
                    <label for="name" class="col-sm-2">ID</label>
                    <div class="col-sm-8">
                        <input type="text" class="form control" name="" id="name" placeholder="eunjeong99">
                    </div>
                    <div class="col-sm-2 change">
                      <input type="submit" value="Change">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-2">Password</label>
                    <div class="col-sm-8">
                        <input type="password" class="form control" name="" id="password" placeholder="1234">
                    </div>
                    <div class="col-sm-2 change">
                      <input type="submit" value="Change">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-2">Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form control" name="" id="name" placeholder="Cheon Eun Jeong">
                    </div>
                    <div class="col-sm-2 change">
                      <input type="submit" value="Change">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2">Email</label>
                    <div class="col-sm-8">
                        <input type="email" class="form control" name="" id="email" placeholder="eunjeong1@naver.com">
                    </div>
                    <div class="col-sm-2 change">
                      <input type="submit" value="Change">
                    </div>
                </div>
                <div class="form-group">
                    <label for="nickname" class="col-sm-2">NickName</label>
                    <div class="col-sm-8">
                        <input type="text" class="form control" name="" id="nickname" placeholder="ezzan">
                    </div>
                    <div class="col-sm-2 change">
                      <input type="submit" value="Change">
                    </div>
                </div>
                <div class="submit">
                    <input type="submit" value="Logout">
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-6">
            <h3 class="section-subheading text-muted">Reservation Info</h3>
            <div class="Reservation_Info">
              <div class="Reservation_Date">2021.11.26</div>
              <div class="Reservation_Time">13:00 ~ 15:00</div>
            </div>
            <div class="Reservation_Info row">
              <div class="Reservation_Name col-sm-10">Jenaraum</div>
              <div class="Reservation_Delete col-sm-2"><input type="submit" value="Delete"></div>
            </div>
            <hr id="res_hr">

            <div class="Reservation_Info">
              <div class="Reservation_Date">2021.12.01</div>
              <div class="Reservation_Time">13:00 ~ 15:00</div>
            </div>
            <div class="Reservation_Info row">
              <div class="Reservation_Name col-sm-10">Charming On</div>
              <div class="Reservation_Delete col-sm-2"><input type="submit" value="Delete"></div>
            </div>
            <hr id="res_hr">
          </div>
        </div>
      </section>
    </div>
  </div>

  <!--footer-->
  <footer class="container-fluid text-center" id="footer">
    <a href="#myPage" title="To Top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <br>
    <div class="row">
      <div class="col-md-9" style="text-align:left;">
        <h4>About us</h4>
        <label><b>Team leader :</b> Cheon Eun-jung</label><br>
        <label><b>Team Member :</b> Jeon Seung-won, Lee Bo-Hyeon</label><br>
        <label><b>Address :</b> S4-1-dong No. 116 in Gaeksin-ro, Heungdeok-gu, Chungbuk-do</label>

      </div>
      <div class="col-md-3" style="text-align:left;">
        <h4>Contact us</h4>
        <label><b>Tel :</b> 010-1234-5678</label><br>
        <label><b>Email :</b> a12345@naver.com</label>
      </div>
    </footer>

  </body>
  </html>