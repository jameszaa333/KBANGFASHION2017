<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Design LOOQ</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.3/css/bulma.min.css">
  <link rel="stylesheet" type="text/css" href="css/demo.css" />
  <link rel="stylesheet" type="text/css" href="css/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Chonburi">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mitr">
</head>

<body class="demo-1" onload="" style="color: #000000; background-color: #f0f0f0;">
    <style>
         a:link {
           color: #f09488;
           -webkit-transition: all 0.5s ease;
           -moz-transition: all 0.5s ease;
           -o-transition: all 0.5s ease;
         }
         a:hover {
           color: #ed7263;
           -webkit-transition: all 0.5s ease;
           -moz-transition: all 0.5s ease;
           -o-transition: all 0.5s ease;
           text-shadow: 0.1em 0.1em 0.2em #999;
         }

        .img-container { position: relative; }

        .img-container .tops {
          position: absolute;
          top: 0;
          left: 0;
          z-index: 3;
        }
        .img-container .bottoms {
          position: absolute;
          top: 0;
          left: 0;
          z-index: 2;
        }
        .img-container .modelbg {
          position: absolute;
          top: 0;
          left: 0;
          z-index: 1;
        }
        .topic {
          filter: alpha(opacity=100);
          opacity:1.0;
          -webkit-transition:0.7s;
          -moz-transition:0.7s;
          -o-transition:0.7s;
        }
        .topic:hover {
            filter: alpha(opacity=70);
            opacity:.8;
            cursor: text;
        }
        .button {
          border: solid 1px #999;

          -webkit-transition:0.7s;
          -moz-transition:0.7s;
          -o-transition:0.7s;

          filter: alpha(opacity=100);
          opacity:1.0;

          -webkit-transition: all 0.5s ease;
          -moz-transition: all 0.5s ease;
          -o-transition: all 0.5s ease;
        }

        .button:hover {
          filter: alpha(opacity=70);
          opacity:.8;

          -webkit-transition: all 0.5s ease;
          -moz-transition: all 0.5s ease;
          -o-transition: all 0.5s ease;
          box-shadow: 0.1em 0.1em 0.2em #999;
          text-shadow: none;
        }

      /*tab*/
      /* Style the tab */
        div.tab {
          float: left;
          background-color: #e7c6c2; /*สีพื้นหลังปุ่ม*/
          position:relative;
        }
      /*button*/
      /* Style the buttons inside the tab// text*/
        div.tab a {
          display: block;
          background-color: inherit;
          /*padding: 22px 16px*/
          width: 100%;
          border: none;
          outline: none;
          text-align: left;
          cursor: pointer;
          transition: 0.3s;
          font-size: 1vw;
          font-family: Mitr;
          color: #ffffff;
        }
      /* Change background color of buttons on hover */
        div.tab a:hover {
          background-color: #cea19c; /*สีตอนวาง*/
        }
      /* Create an active/current "tab button" class */
        div.tab a:active {
          background-color: #d69790; /*สีหลังคลิก*/
        }
        .tabname {
          width: 3vw;
          padding: 1vw;
          text-align: center;
        }
        div.tabout {
          background-color: none; /*สีพื้นหลังปุ่ม*/
          position: relative;
          text-align: right;
          padding-right: 20%;
          padding-top: 10%;
        }
      /*button*/
      /* Style the buttons inside the tab// text*/
        div.tabout a {
          transition: 0.3s;
          font-size: 2rem;
        }
        .tabclothes {
          background-color: #ffffff;
          border-top: solid 1px #ccc;
          border-left: solid 1px #ccc;
          -moz-box-shadow: 5px 5px 5px #ccc;
          -webkit-box-shadow: 5px 5px 5px #ccc;
          box-shadow: 5px 5px 5px #ccc;
        }
        .tabclothes img {
          filter: alpha(opacity=100);
          opacity:1.0;
          -webkit-transition:0.7s;
          -moz-transition:0.7s;
          -o-transition:0.7s;
        }
        .tabclothes img:hover {
          filter: alpha(opacity=70);
          opacity:.7;
        }
        .menuclothes {
          text-align: center;
          width: 150px;
          height: 150px;
          background-color: transparent;
          margin: 0% 0% 2% 4.5%;
        }
      /*content*/
      /* Style the tab content */
        .tabcontent {
          position: relative;
          /*padding: 0px 12px;*/
          /*border-left: none;*/
          display: none;
          /*border: 1px solid #976f6c;*/
          /*border-top: none;*/
          line-height: 13pt;
          /*background-image: url('/assets/images/buttons/content 2.png');*/
          width: 100vw;
          height: 70vw;
          overflow: auto;
        }
      /*ในส่วนของติ่น*/
        .w3-sidebar a {
          font-family: "Mitr", sans-serif, 18px;
        }

        .w3-wide {
          font-family: "Mitr", sans-serif, 18px;
        }
        .w3-card-2{
            max-width: 130px;
        }
      /*slide*/
      /* Page content */
        .main {
          margin-left: 200px; /* Same as the width of the sidenav */
        }
      /* Style page content - use this if you want to push the page content to the right when you open the side navigation */
        #main {
          transition: margin-left .5s;
          padding: 20px;
        }
      /*เอฟเฟค*/
        @-webkit-keyframes fadeEffect {
          from {opacity: 0;}
          to {opacity: 1;}
        }

        @keyframes fadeEffect {
          from {opacity: 0;}
          to {opacity: 1;}
        }

        .sidenav {
          height: 100%;
          width: 0;
          position: relative;
          z-index: 1;
          top: 0;
          right: 0;
          background-color: #111;
          overflow-x: hidden;
          transition: 0.5s;
          padding-top: 60px;
          float: right;
        }
      /*in tab*/
        .sidenav a {
          padding: 8px 8px 8px 32px;
          text-decoration: none;
          font-size: 18px;
          color: #818181;
          display: block;
          transition: 0.3s;
        }

        .sidenav a:hover {
          color: #f1f1f1;
        }

        .sidenav .closebtn {
          position: absolute;
          top: 0;
          right: 25px;
          font-size: 18px;
          margin-left: 50px;
        }

        @media screen and (max-height: 450px) {
          .sidenav {padding-top: 18px;}
          .sidenav a {font-size: 18px;}
        }

        input[type=text] {
          width: 130px;
          -webkit-transition: width 0.4s ease-in-out;
          transition: width 0.4s ease-in-out;
          float: right;
        }

      /* When the input field gets focus, change its width to 100% */
        input[type=text]:focus {
          width: 130px;
        }
      </style>

  <div id="ip-container" class="ip-container">
  <!-- initial header -->
  <!-- main content -->
  <div id="loader"></div>
  <div class="w3-animate-top" id="Contentt">
  <!-- Side Navigation -->
      <nav class="w3-sidebar w3-bar-block w3-card animated slideInLeft w3-center" style="display:none;z-index: 7;top:0;" id="mySidebar">
        <img style="width: 25%;height: auto;min-width: 200px;margin-bottom: 30px;margin-top: 100px" src="assets/images/home/Logo4.png">
        <a href="model.html" class="w3-bar-item w3-button w3-hide-large w3-hide-medium w3-hover-red" style="font-size: ;color: lightgrey;font-family: Chonburi">Create LOOQ <img src="assets/images/home/closet3.png" style="width: 32px;height: 29px;"> </a>
        <a href="#" class="w3-bar-item w3-button w3-hover-red" style="font-size: ;color: lightgrey">LOOQ</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-red" style="font-size: ;color: lightgrey">Album</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-red" style="font-size: ;color: lightgrey">Clothes</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-red" style="font-size: ;color: lightgrey">Contact Us</a>
        <button class="w3-bar-item w3-button" onclick="w3_close()" style="margin-top: 30px;color: #d7b3af">Close <i class="fa fa-remove"></i></button>
      </nav>

  <header class="headerr w3-container w3-padding" style="background-image: url();background-repeat: no-repeat;background-size: 100% 100%;position: fixed;z-index: 5;width: 100%;display: flex;background-color: #e7c6c2;top:0">
      <div style="width: 25%;height: 30px">
        <a href="#" onclick="w3_open()" class="fa fa-bars w3-xlarge w3-transparent" style="margin-left: 8px;margin-right: 6px;text-decoration: none;color: white!important"></a>
        <div class="w3-dropdown-hover w3-transparent"><a class="w3-hide-small" href="model.html"><img class="fa w3-xlarge w3-transparent" src="assets/images/home/closet1.png" style="width: 32px;height: 29px;margin-top: 2px;" onmouseover="this.src='assets/images/home/closet4.png';"
          onmouseout="this.src='assets/images/home/closet1.png';"></a>
          <div class="w3-dropdown-content w3-bar-block w3-border jshadow w3-animate-opacity" style="width:250px">
            <div class="w3-container">
              <p>Create a Looq, Submit your Looq now!</p>
            </div>
          </div>
        </div>
      </div>

      <div style="width: 50%;height: 34px;text-align: center;"><a href="index.html" onclick="myFunction2()" class="w3-xlarge w3-transparent"><img style="height: auto;width: 35%;min-height: 25px;min-width: 175px" src="assets/images/home/Logo2.png"></a></div>
      <div style="width: 25%;height: 30px;text-align: right">
        <div class="w3-dropdown-hover w3-transparent" >
          <img style="width: 15px;height: 15PX;" src="assets/images/home/arrowdown.png">
          <div class="w3-dropdown-content w3-bar-block w3-border jshadow" style="right:0;margin-top: 0px;color: gray">
            <a href="#" class="w3-bar-item w3-button" onclick="document.getElementById('id01').style.display='block'"><i class="material-icons">person</i>   Login</a>
            <a href="#" class="w3-bar-item w3-button" onclick="document.getElementById('id02').style.display='block'"><i class="material-icons">person</i>   Register</a>
          </div>
        </div>
      </div>
  </header>

  <!--LOG-IN MODAL    -->
      <div id="id01" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:500px; background-image: url(assets/images/home/BG.png); background-size: 100% 100%">
          <div class="w3-card-4">
            <div class="w3-container w3-block w3-theme-l3 w3-xxlarge w3-card" style="background-image: url(assets/images/home/nav-tab.png); background-size: 100% 100%">
              <h1 style="font-family: Chonburi; font-size: 2rem;">Log in</h1>
            </div>

            <div class="w3-center">
              <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close">×</span>
            </div>

            <form class="w3-container" action="/action_page.php">
              <div class="w3-section" style="display: grid">
                <label><b>Username</b></label>
                <input class="w3-input w3-border w3-margin-bottom w3-round" type="text" placeholder="Enter Username" name="usename" required style="width: 100%">
                <label><b>Password</b></label>
                <input class="w3-input w3-border w3-round" type="text" placeholder="Enter Password" name="psw" required style="width: 100%">
                <span class="w3-left w3-padding w3-large"><a href="#" style="font-size: 12px">Help! I forgot my password </a></span>
              </div>
              <button class="w3-button w3-block w3-section w3-padding w3-round" type="submit" style="background-color: #976f6c;color: white">Login</button>

              <div class="w3-center">
                <label>or just</label>
              </div>

              <button class="w3-button w3-block w3-indigo w3-section w3-padding w3-round" type="submit">Login with Facebook</button>
              <span class="w3-modal-content w3-padding w3-transparent style="font-size: 10px>Don't have an account? <a href="#" style="color: #976f6c" onclick="document.getElementById('id01').style.display='none';document.getElementById('id02').style.display='block'">Sign up</a></span>
            </form>
            <br>
          </div>
        </div>
      </div>

  <!--LOG-IN MODAL-->
      <div id="id02" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:500px; background-image: url(assets/images/home/BG.png); background-size: 100% 100%">
          <div class="w3-card-4">
            <div class="w3-container w3-block w3-theme-l3 w3-xxlarge w3-card" style="background-image: url(assets/images/home/nav-tab.png); background-size: 100% 100%">
              <h1 style="font-family: Chonburi; font-size: 2rem;">Register</h1>
            </div>

            <div class="w3-center">
              <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close">×</span>
            </div>

            <form class="w3-container" action="/action_page.php">
              <div class="w3-section" style="display: grid">
                <label><b>Username</b></label>
                <input class="w3-input w3-border w3-round w3-margin-bottom" type="text" placeholder="Enter Username" name="usename" required style="width: 100%">
                <label><b>Password</b></label>
                <input class="w3-input w3-border w3-round w3-margin-bottom" type="text" placeholder="Enter Password" name="psw" required style="width: 100%">
                <label><b>Confirm Password</b></label>
                <input class="w3-input w3-border w3-round w3-margin-bottom" type="text" placeholder="Confirm Password" name="conpsw" required style="width: 100%">
                <label><b>Email</b></label>
                <input class="w3-input w3-border w3-round w3-margin-bottom" type="text" placeholder="Email" name="mail" required style="width: 100%">
                <label><b>Confirm Email</b></label>
                <input class="w3-input w3-border w3-round" style="margin-top: 14px;width: 100%" type="text" placeholder="Confirm Email" name="conmail" required>
                <span class="w3-left w3-padding w3-large"><a href="#" style="font-size: 12px"> </a></span>
              </div>
              <button class="w3-button w3-block w3-section w3-padding w3-round" type="submit" style="background-color: #976f6c;color: white">Register</button>

              <div>
                <label style="color:black;font-size:13px">By clicking on 'Sign Up' above, you confirm that you accept the <a href="termsofuse.html" target="_blank" style="color: #976f6c"> Terms of Use</a></label>
              </div>
            </form>
            <br>
          </div>
        </div>
      </div>

    <div class="topic" style="padding-top: 85px; width: 100%;">
      <p class="model color" style="font-family: Chonburi; font-size: 30px; color: #464646; padding-left: 6%">DESIGN LOOQ</p>
    </div>
    <div style="display: flex; width: 100%">
      <div class="img-container" style="width: 35%; margin-left: 3%">

      <!--เสื้อ กางเกง ตัวหุ่น อยู่นี่ละจ้าา-->
        <img id="tops" class="tops" src="" alt="" style="width: 100%; max-height: 632px; max-width: 311px;">
        <img id="bottoms" class="bottoms" src="" alt="" style="width: 100%; max-height: 632px; max-width: 311px;">
        <img class="modelbg" src="assets/images/model/modelN0.png" alt=""  style="width: 100%; max-height: 632px; max-width: 311px;">
      </div>
      <div class="menu" style="width: 55%; padding-top: 1%;">
      <!--shirt-->
        <div class="shirt w3-animate-right">
        <!--all tops-->
          <div id="alltops" class="tabcontent" style="width: 100%;height: 100%;padding-bottom: 40px"><br>
            <div style="width: 5%">
              <div class="tab">
                <a class="tablinks" onclick="openCity(event, 'alltops')">
                  <div class="tabname">
                      A<br>
                      L<br>
                      L<br>
                  </div>
                </a>
                <a class="tablinks" onclick="openCity(event, 'blouses')">
                  <div class="tabname">
                      B<br>
                      L<br>
                      O<br>
                      U<br>
                      S<br>
                      E<br>
                      S<br>
                  </div>
                </a>
                <a class="tablinks" onclick="openCity(event, 'tanks')">
                  <div class="tabname">
                      T<br>
                      A<br>
                      N<br>
                      K<br>
                      S<br>
                  </div>
                </a>
                <a class="tablinks" onclick="openCity(event, 'dresses')">
                  <div class="tabname">
                      D<br>
                      R<br>
                      E<br>
                      S<br>
                      S<br>
                      E<br>
                      S<br>
                  </div>
                </a>
              </div>
            </div>
            <div class="tabclothes" style="width: 93%;padding-left: 25px">
              <input type="text" name="search" placeholder="Search.." style="margin: 2% 2% 0% 2%;"><br><br>
              <div class="w3-third menuclothes"><br>
                <div class="w3-card-2 w3-padding-top">
                  <figure class="image is-1by2"></figure>
                  <a onclick="document.getElementById('tops').src='assets/images/clothes/model/model01.png'">
                    <img src="assets/images/clothes/menu/menu01.png" alt="image-1" style="height: 130px">
                  </a>
                </div>
              </div>
              <div class="w3-third menuclothes"><br>
                <div class="w3-card-2 w3-padding-top">
                  <figure class="image is-1by2"></figure>
                  <a onclick="document.getElementById('tops').src='assets/images/clothes/model/model02.png';">
                    <img src="assets/images/clothes/menu/menu02.png" alt="image-1" style="height: 130px">
                  </a>
                </div>
              </div>
              <div class="w3-third menuclothes"><br>
                <div class="w3-card-2 w3-padding-top">
                  <figure class="image is-1by2"></figure>
                  <a onclick="document.getElementById('tops').src='assets/images/clothes/model/model03.png';">
                    <img src="assets/images/clothes/menu/menu03.png" alt="image-1" style="height: 130px">
                  </a>
                </div>
              </div>
              <div class="w3-third menuclothes"><br>
                <div class="w3-card-2 w3-padding-top">
                  <figure class="image is-1by2"></figure>
                  <a onclick="document.getElementById('tops').src='assets/images/clothes/model/model05.png';">
                    <img src="assets/images/clothes/menu/menu05.png" alt="image-1" style="height: 130px">
                  </a>
                </div>
              </div>
              <div class="w3-third menuclothes"><br>
                <div class="w3-card-2 w3-padding-top">
                  <figure class="image is-1by2"></figure>
                  <a onclick="document.getElementById('tops').src='assets/images/clothes/model/model07.png';">
                    <img src="assets/images/clothes/menu/menu07.png" alt="image-1" style="height: 130px">
                  </a>
                </div>
              </div>
              <div class="w3-third menuclothes"><br>
                <div class="w3-card-2 w3-padding-top">
                  <figure class="image is-1by2"></figure>
                  <a onclick="document.getElementById('tops').src='assets/images/clothes/model/model22.png';">
                    <img src="assets/images/clothes/menu/menu22.png" alt="image-1" style="height: 130px">
                  </a>
                </div>
              </div>
              <div class="w3-third menuclothes"><br>
                <div class="w3-card-2 w3-padding-top">
                  <figure class="image is-1by2"></figure>
                  <a onclick="document.getElementById('tops').src='assets/images/clothes/model/model17.png';">
                    <img src="assets/images/clothes/menu/menu17.png" alt="image-1" style="height: 130px">
                  </a>
                </div>
              </div>
              <div class="w3-third menuclothes"><br>
                <div class="w3-card-2 w3-padding-top">
                  <figure class="image is-1by2"></figure>
                  <a onclick="document.getElementById('tops').src='assets/images/clothes/model/model18.png';">
                    <img src="assets/images/clothes/menu/menu18.png" alt="image-1" style="height: 130px">
                  </a>
                </div>
              </div>
              <div class="w3-third menuclothes"><br>
                <div class="w3-card-2 w3-padding-top">
                  <figure class="image is-1by2"></figure>
                  <a onclick="document.getElementById('tops').src='assets/images/clothes/model/model21.png';">
                    <img src="assets/images/clothes/menu/menu21.png" alt="image-1" style="height: 130px">
                  </a>
                </div>
              </div>
          <!-- Pagination -->
              <div class="w3-center w3-padding-32">
                <div class="w3-bar">
                  <br><br>
                  <a href="#!" class="w3-bar-item w3-button w3-hover-black">«</a>
                  <a href="#!" class="w3-bar-item w3-black w3-button">1</a>
                  <a href="#!" class="w3-bar-item w3-button w3-hover-black">2</a>
                  <a href="#!" class="w3-bar-item w3-button w3-hover-black">3</a>
                  <a href="#!" class="w3-bar-item w3-button w3-hover-black">4</a>
                  <a href="#!" class="w3-bar-item w3-button w3-hover-black">»</a>
                </div>
              </div>
            </div>
          </div>

        <!-- blouses -->
          <div id="blouses" class="tabcontent" style="width: 100%;height: 100%;padding-bottom: 40px"><br>
            <div style="width: 5%">
              <div class="tab">
                <a class="tablinks" onclick="openCity(event, 'alltops')">
                  <div class="tabname">
                      A<br>
                      L<br>
                      L<br>
                  </div>
                </a>
                <a class="tablinks" onclick="openCity(event, 'blouses')">
                  <div class="tabname">
                      B<br>
                      L<br>
                      O<br>
                      U<br>
                      S<br>
                      E<br>
                      S<br>
                  </div>
                </a>
                <a class="tablinks" onclick="openCity(event, 'tanks')">
                  <div class="tabname">
                      T<br>
                      A<br>
                      N<br>
                      K<br>
                      S<br>
                  </div>
                </a>
                <a class="tablinks" onclick="openCity(event, 'dresses')">
                  <div class="tabname">
                      D<br>
                      R<br>
                      E<br>
                      S<br>
                      S<br>
                      E<br>
                      S<br>
                  </div>
                </a>
              </div>
            </div>
            <div class="tabclothes" style="width: 93%;padding-left: 25px">
              <input type="text" name="search" placeholder="Search.." style="margin: 2% 2% 0% 2%;"><br><br>
              <div class="w3-third menuclothes"><br>
                <div class="w3-card-2 w3-padding-top">
                  <figure class="image is-1by2"></figure>
                  <a onclick="document.getElementById('tops').src='assets/images/clothes/model/model01.png'">
                    <img src="assets/images/clothes/menu/menu01.png" alt="image-1" style="height: 130px">
                  </a>
                </div>
              </div>
              <div class="w3-third menuclothes"><br>
                <div class="w3-card-2 w3-padding-top">
                  <figure class="image is-1by2"></figure>
                  <a onclick="document.getElementById('tops').src='assets/images/clothes/model/model05.png';">
                    <img src="assets/images/clothes/menu/menu05.png" alt="image-1" style="height: 130px">
                  </a>
                </div>
              </div>
              <div class="w3-third menuclothes"><br>
                <div class="w3-card-2 w3-padding-top">
                  <figure class="image is-1by2"></figure>
                  <a onclick="document.getElementById('tops').src='assets/images/clothes/model/model07.png';">
                    <img src="assets/images/clothes/menu/menu07.png" alt="image-1" style="height: 130px">
                  </a>
                </div>
              </div>
              <div class="w3-third menuclothes"><br>
                <div class="w3-card-2 w3-padding-top">
                  <figure class="image is-1by2"></figure>
                  <a onclick="document.getElementById('tops').src='assets/images/clothes/model/model12.png';">
                    <img src="assets/images/clothes/menu/menu12.png" alt="image-1" style="height: 130px">
                  </a>
                </div>
              </div>
              <div class="w3-third menuclothes"><br>
                <div class="w3-card-2 w3-padding-top">
                  <figure class="image is-1by2"></figure>
                  <a onclick="document.getElementById('tops').src='assets/images/clothes/model/model07.png';">
                    <img src="assets/images/clothes/menu/menu07.png" alt="image-1" style="height: 130px">
                  </a>
                </div>
              </div>
              <div class="w3-third menuclothes"><br>
                <div class="w3-card-2 w3-padding-top">
                  <figure class="image is-1by2"></figure>
                  <a onclick="document.getElementById('tops').src='assets/images/clothes/model/model22.png';">
                    <img src="assets/images/clothes/menu/menu22.png" alt="image-1" style="height: 130px">
                  </a>
                </div>
              </div>
              <div class="w3-third menuclothes"><br>
                <div class="w3-card-2 w3-padding-top">
                  <figure class="image is-1by2"></figure>
                  <a onclick="document.getElementById('tops').src='assets/images/clothes/model/model17.png';">
                    <img src="assets/images/clothes/menu/menu17.png" alt="image-1" style="height: 130px">
                  </a>
                </div>
              </div>
              <div class="w3-third menuclothes"><br>
                <div class="w3-card-2 w3-padding-top">
                  <figure class="image is-1by2"></figure>
                  <a onclick="document.getElementById('tops').src='assets/images/clothes/model/model18.png';">
                    <img src="assets/images/clothes/menu/menu18.png" alt="image-1" style="height: 130px">
                  </a>
                </div>
              </div>
              <div class="w3-third menuclothes"><br>
                <div class="w3-card-2 w3-padding-top">
                  <figure class="image is-1by2"></figure>
                  <a onclick="document.getElementById('tops').src='assets/images/clothes/model/model21.png';">
                    <img src="assets/images/clothes/menu/menu21.png" alt="image-1" style="height: 130px">
                  </a>
                </div>
              </div>
          <!-- Pagination -->
              <div class="w3-center w3-padding-32">
                <div class="w3-bar">
                  <br><br>
                  <a href="#!" class="w3-bar-item w3-button w3-hover-black">«</a>
                  <a href="#!" class="w3-bar-item w3-black w3-button">1</a>
                  <a href="#!" class="w3-bar-item w3-button w3-hover-black">2</a>
                  <a href="#!" class="w3-bar-item w3-button w3-hover-black">3</a>
                  <a href="#!" class="w3-bar-item w3-button w3-hover-black">4</a>
                  <a href="#!" class="w3-bar-item w3-button w3-hover-black">»</a>
                </div>
              </div>
            </div>
          </div>

        <!-- tanks -->
          <div id="tanks" class="tabcontent" style="width: 100%;height: 100%;padding-bottom: 40px"><br>
            <div style="width: 5%">
              <div class="tab">
                <a class="tablinks" onclick="openCity(event, 'alltops')">
                  <div class="tabname">
                      A<br>
                      L<br>
                      L<br>
                  </div>
                </a>
                <a class="tablinks" onclick="openCity(event, 'blouses')">
                  <div class="tabname">
                      B<br>
                      L<br>
                      O<br>
                      U<br>
                      S<br>
                      E<br>
                      S<br>
                  </div>
                </a>
                <a class="tablinks" onclick="openCity(event, 'tanks')">
                  <div class="tabname">
                      T<br>
                      A<br>
                      N<br>
                      K<br>
                      S<br>
                  </div>
                </a>
                <a class="tablinks" onclick="openCity(event, 'dresses')">
                  <div class="tabname">
                      D<br>
                      R<br>
                      E<br>
                      S<br>
                      S<br>
                      E<br>
                      S<br>
                  </div>
                </a>
              </div>
            </div>
            <div class="tabclothes" style="width: 93%;padding-left: 25px">
              <input type="text" name="search" placeholder="Search.." style="margin: 2% 2% 0% 2%;"><br><br>
              <div class="w3-third menuclothes"><br>
                <div class="w3-card-2 w3-padding-top">
                  <figure class="image is-1by2"></figure>
                  <a onclick="document.getElementById('tops').src='assets/images/clothes/model/model07.png'">
                    <img src="assets/images/clothes/menu/menu07.png" alt="image-1" style="height: 130px">
                  </a>
                </div>
              </div>
              <div class="w3-third menuclothes"><br>
                <div class="w3-card-2 w3-padding-top">
                  <figure class="image is-1by2"></figure>
                  <a onclick="document.getElementById('tops').src='assets/images/clothes/model/model03.png';">
                    <img src="assets/images/clothes/menu/menu03.png" alt="image-1" style="height: 130px">
                  </a>
                </div>
              </div>
              <div class="w3-third menuclothes"><br>
                <div class="w3-card-2 w3-padding-top">
                  <figure class="image is-1by2"></figure>
                  <a onclick="document.getElementById('tops').src='assets/images/clothes/model/model17.png';">
                    <img src="assets/images/clothes/menu/menu17.png" alt="image-1" style="height: 130px">
                  </a>
                </div>
              </div>
              <div class="w3-third menuclothes"><br>
                <div class="w3-card-2 w3-padding-top">
                  <figure class="image is-1by2"></figure>
                  <a onclick="document.getElementById('tops').src='assets/images/clothes/model/model18.png';">
                    <img src="assets/images/clothes/menu/menu18.png" alt="image-1" style="height: 130px">
                  </a>
                </div>
              </div>
              <div class="w3-third menuclothes"><br>
                <div class="w3-card-2 w3-padding-top">
                  <figure class="image is-1by2"></figure>
                  <a onclick="document.getElementById('tops').src='assets/images/clothes/model/model21.png';">
                    <img src="assets/images/clothes/menu/menu21.png" alt="image-1" style="height: 130px">
                  </a>
                </div>
              </div>
              <div class="w3-third menuclothes"><br>
                <div class="w3-card-2 w3-padding-top">
                  <figure class="image is-1by2"></figure>
                  <a onclick="document.getElementById('tops').src='assets/images/clothes/model/model24.png';">
                    <img src="assets/images/clothes/menu/menu24.png" alt="image-1" style="height: 130px">
                  </a>
                </div>
              </div>
              <div class="w3-third menuclothes"><br>
                <div class="w3-card-2 w3-padding-top">
                  <figure class="image is-1by2"></figure>
                  <a onclick="document.getElementById('tops').src='assets/images/clothes/model/model25.png';">
                    <img src="assets/images/clothes/menu/menu25.png" alt="image-1" style="height: 130px">
                  </a>
                </div>
              </div>
              <div class="w3-third menuclothes"><br>
                <div class="w3-card-2 w3-padding-top">
                  <figure class="image is-1by2"></figure>
                  <a onclick="document.getElementById('tops').src='assets/images/clothes/model/model18.png';">
                    <img src="assets/images/clothes/menu/menu18.png" alt="image-1" style="height: 130px">
                  </a>
                </div>
              </div>
              <div class="w3-third menuclothes"><br>
                <div class="w3-card-2 w3-padding-top">
                  <figure class="image is-1by2"></figure>
                  <a onclick="document.getElementById('tops').src='assets/images/clothes/model/model21.png';">
                    <img src="assets/images/clothes/menu/menu21.png" alt="image-1" style="height: 130px">
                  </a>
                </div>
              </div>
          <!-- Pagination -->
              <div class="w3-center w3-padding-32">
                <div class="w3-bar">
                  <br><br>
                  <a href="#!" class="w3-bar-item w3-button w3-hover-black">«</a>
                  <a href="#!" class="w3-bar-item w3-black w3-button">1</a>
                  <a href="#!" class="w3-bar-item w3-button w3-hover-black">2</a>
                  <a href="#!" class="w3-bar-item w3-button w3-hover-black">3</a>
                  <a href="#!" class="w3-bar-item w3-button w3-hover-black">4</a>
                  <a href="#!" class="w3-bar-item w3-button w3-hover-black">»</a>
                </div>
              </div>
            </div>
          </div>

        <!-- dresses -->
          <div id="dresses" class="tabcontent" style="width: 100%;height: 100%;padding-bottom: 40px"><br>
            <div style="width: 5%">
              <div class="tab">
                <a class="tablinks" onclick="openCity(event, 'alltops')">
                  <div class="tabname">
                      A<br>
                      L<br>
                      L<br>
                  </div>
                </a>
                <a class="tablinks" onclick="openCity(event, 'blouses')">
                  <div class="tabname">
                      B<br>
                      L<br>
                      O<br>
                      U<br>
                      S<br>
                      E<br>
                      S<br>
                  </div>
                </a>
                <a class="tablinks" onclick="openCity(event, 'tanks')">
                  <div class="tabname">
                      T<br>
                      A<br>
                      N<br>
                      K<br>
                      S<br>
                  </div>
                </a>
                <a class="tablinks" onclick="openCity(event, 'dresses')">
                  <div class="tabname">
                      D<br>
                      R<br>
                      E<br>
                      S<br>
                      S<br>
                      E<br>
                      S<br>
                  </div>
                </a>
              </div>
            </div>
            <div class="tabclothes" style="width: 93%;padding-left: 25px">
              <input type="text" name="search" placeholder="Search.." style="margin: 2% 2% 0% 2%;"><br><br>
              <div class="w3-third menuclothes"><br>
                <div class="w3-card-2 w3-padding-top">
                  <figure class="image is-1by2"></figure>
                  <a onclick="document.getElementById('tops').src='assets/images/clothes/model/model27.png'">
                    <img src="assets/images/clothes/menu/menu27.png" alt="image-1" style="height: 130px">
                  </a>
                </div>
              </div>
              <div class="w3-third menuclothes"><br>
                <div class="w3-card-2 w3-padding-top">
                  <figure class="image is-1by2"></figure>
                  <a onclick="document.getElementById('tops').src='assets/images/clothes/model/model28.png';">
                    <img src="assets/images/clothes/menu/menu28.png" alt="image-1" style="height: 130px">
                  </a>
                </div>
              </div>
              <div class="w3-third menuclothes"><br>
                <div class="w3-card-2 w3-padding-top">
                  <figure class="image is-1by2"></figure>
                  <a onclick="document.getElementById('tops').src='assets/images/clothes/model/model29.png';">
                    <img src="assets/images/clothes/menu/menu29.png" alt="image-1" style="height: 130px">
                  </a>
                </div>
              </div>
              <div class="w3-third menuclothes"><br>
                <div class="w3-card-2 w3-padding-top">
                  <figure class="image is-1by2"></figure>
                  <a onclick="document.getElementById('tops').src='assets/images/clothes/model/model30.png';">
                    <img src="assets/images/clothes/menu/menu30.png" alt="image-1" style="height: 130px">
                  </a>
                </div>
              </div>
              <div class="w3-third menuclothes"><br>
                <div class="w3-card-2 w3-padding-top">
                  <figure class="image is-1by2"></figure>
                  <a onclick="document.getElementById('tops').src='assets/images/clothes/model/model07.png';">
                    <img src="assets/images/clothes/menu/menu07.png" alt="image-1" style="height: 130px">
                  </a>
                </div>
              </div>
              <div class="w3-third menuclothes"><br>
                <div class="w3-card-2 w3-padding-top">
                  <figure class="image is-1by2"></figure>
                  <a onclick="document.getElementById('tops').src='assets/images/clothes/model/model22.png';">
                    <img src="assets/images/clothes/menu/menu22.png" alt="image-1" style="height: 130px">
                  </a>
                </div>
              </div>
              <div class="w3-third menuclothes"><br>
                <div class="w3-card-2 w3-padding-top">
                  <figure class="image is-1by2"></figure>
                  <a onclick="document.getElementById('tops').src='assets/images/clothes/model/model17.png';">
                    <img src="assets/images/clothes/menu/menu17.png" alt="image-1" style="height: 130px">
                  </a>
                </div>
              </div>
              <div class="w3-third menuclothes"><br>
                <div class="w3-card-2 w3-padding-top">
                  <figure class="image is-1by2"></figure>
                  <a onclick="document.getElementById('tops').src='assets/images/clothes/model/model18.png';">
                    <img src="assets/images/clothes/menu/menu18.png" alt="image-1" style="height: 130px">
                  </a>
                </div>
              </div>
              <div class="w3-third menuclothes"><br>
                <div class="w3-card-2 w3-padding-top">
                  <figure class="image is-1by2"></figure>
                  <a onclick="document.getElementById('tops').src='assets/images/clothes/model/model21.png';">
                    <img src="assets/images/clothes/menu/menu21.png" alt="image-1" style="height: 130px">
                  </a>
                </div>
              </div>
          <!-- Pagination -->
              <div class="w3-center w3-padding-32">
                <div class="w3-bar">
                  <br><br>
                  <a href="#!" class="w3-bar-item w3-button w3-hover-black">«</a>
                  <a href="#!" class="w3-bar-item w3-black w3-button">1</a>
                  <a href="#!" class="w3-bar-item w3-button w3-hover-black">2</a>
                  <a href="#!" class="w3-bar-item w3-button w3-hover-black">3</a>
                  <a href="#!" class="w3-bar-item w3-button w3-hover-black">4</a>
                  <a href="#!" class="w3-bar-item w3-button w3-hover-black">»</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      <!--pants-->
        <div class="pants w3-animate-right">
          <!-- allbottoms -->
            <div id="allbottoms" class="tabcontent" style="width: 100%;height: 100%;padding-bottom: 40px"><br>
              <div style="width: 5%">
                <div class="tab">
                  <a class="tablinks" onclick="openCity(event, 'allbottoms')">
                    <div class="tabname">
                        A<br>
                        L<br>
                        L<br>
                    </div>
                  </a>
                  <a class="tablinks" onclick="openCity(event, 'pants')">
                    <div class="tabname">
                        P<br>
                        A<br>
                        N<br>
                        T<br>
                        S<br>
                    </div>
                  </a>
                  <a class="tablinks" onclick="openCity(event, 'shorts')">
                    <div class="tabname">
                        S<br>
                        H<br>
                        O<br>
                        R<br>
                        T<br>
                        S<br>
                    </div>
                  </a>
                  <a class="tablinks" onclick="openCity(event, 'skirts')">
                    <div class="tabname">
                        S<br>
                        K<br>
                        I<br>
                        R<br>
                        T<br>
                        S<br>
                    </div>
                  </a>
                </div>
              </div>
              <div class="tabclothes" style="width: 93%;padding-left: 25px">
                <input type="text" name="search" placeholder="Search.." style="margin: 2% 2% 0% 2%;"><br><br>
                <div class="w3-third menuclothes"><br>
                  <div class="w3-card-2 w3-padding-top">
                    <figure class="image is-1by2"></figure>
                    <a onclick="document.getElementById('bottoms').src='assets/images/clothes/model/model04.png'">
                      <img src="assets/images/clothes/menu/menu04.png" alt="image-1" style="height: 130px">
                    </a>
                  </div>
                </div>
                <div class="w3-third menuclothes"><br>
                  <div class="w3-card-2 w3-padding-top">
                    <figure class="image is-1by2"></figure>
                    <a onclick="document.getElementById('bottoms').src='assets/images/clothes/model/model06.png';">
                      <img src="assets/images/clothes/menu/menu06.png" alt="image-1" style="height: 130px">
                    </a>
                  </div>
                </div>
                <div class="w3-third menuclothes"><br>
                  <div class="w3-card-2 w3-padding-top">
                    <figure class="image is-1by2"></figure>
                    <a onclick="document.getElementById('bottoms').src='assets/images/clothes/model/model08.png';">
                      <img src="assets/images/clothes/menu/menu08.png" alt="image-1" style="height: 130px">
                    </a>
                  </div>
                </div>
                <div class="w3-third menuclothes"><br>
                  <div class="w3-card-2 w3-padding-top">
                    <figure class="image is-1by2"></figure>
                    <a onclick="document.getElementById('bottoms').src='assets/images/clothes/model/model09.png';">
                      <img src="assets/images/clothes/menu/menu09.png" alt="image-1" style="height: 130px">
                    </a>
                  </div>
                </div>
                <div class="w3-third menuclothes"><br>
                  <div class="w3-card-2 w3-padding-top">
                    <figure class="image is-1by2"></figure>
                    <a onclick="document.getElementById('bottoms').src='assets/images/clothes/model/model10.png';">
                      <img src="assets/images/clothes/menu/menu10.png" alt="image-1" style="height: 130px">
                    </a>
                  </div>
                </div>
                <div class="w3-third menuclothes"><br>
                  <div class="w3-card-2 w3-padding-top">
                    <figure class="image is-1by2"></figure>
                    <a onclick="document.getElementById('bottoms').src='assets/images/clothes/model/model11.png';">
                      <img src="assets/images/clothes/menu/menu11.png" alt="image-1" style="height: 130px">
                    </a>
                  </div>
                </div>
                <div class="w3-third menuclothes"><br>
                  <div class="w3-card-2 w3-padding-top">
                    <figure class="image is-1by2"></figure>
                    <a onclick="document.getElementById('bottoms').src='assets/images/clothes/model/model13.png';">
                      <img src="assets/images/clothes/menu/menu13.png" alt="image-1" style="height: 130px">
                    </a>
                  </div>
                </div>
                <div class="w3-third menuclothes"><br>
                  <div class="w3-card-2 w3-padding-top">
                    <figure class="image is-1by2"></figure>
                    <a onclick="document.getElementById('bottoms').src='assets/images/clothes/model/model19.png';">
                      <img src="assets/images/clothes/menu/menu19.png" alt="image-1" style="height: 130px">
                    </a>
                  </div>
                </div>
                <div class="w3-third menuclothes"><br>
                  <div class="w3-card-2 w3-padding-top">
                    <figure class="image is-1by2"></figure>
                    <a onclick="document.getElementById('bottoms').src='assets/images/clothes/model/model20.png';">
                      <img src="assets/images/clothes/menu/menu20.png" alt="image-1" style="height: 130px">
                    </a>
                  </div>
                </div>
            <!-- Pagination -->
                <div class="w3-center w3-padding-32">
                  <div class="w3-bar">
                    <br><br>
                    <a href="#!" class="w3-bar-item w3-button w3-hover-black">«</a>
                    <a href="#!" class="w3-bar-item w3-black w3-button">1</a>
                    <a href="#!" class="w3-bar-item w3-button w3-hover-black">2</a>
                    <a href="#!" class="w3-bar-item w3-button w3-hover-black">3</a>
                    <a href="#!" class="w3-bar-item w3-button w3-hover-black">4</a>
                    <a href="#!" class="w3-bar-item w3-button w3-hover-black">»</a>
                  </div>
                </div>
              </div>
            </div>

          <!-- pants -->
            <div id="pants" class="tabcontent" style="width: 100%"><br>
              <div style="width: 5%">
                <div class="tab">
                  <a class="tablinks" onclick="openCity(event, 'allbottoms')">
                    <div class="tabname">
                        A<br>
                        L<br>
                        L<br>
                    </div>
                  </a>
                  <a class="tablinks" onclick="openCity(event, 'pants')">
                    <div class="tabname">
                        P<br>
                        A<br>
                        N<br>
                        T<br>
                        S<br>
                    </div>
                  </a>
                  <a class="tablinks" onclick="openCity(event, 'shorts')">
                    <div class="tabname">
                        S<br>
                        H<br>
                        O<br>
                        R<br>
                        T<br>
                        S<br>
                    </div>
                  </a>
                  <a class="tablinks" onclick="openCity(event, 'skirts')">
                    <div class="tabname">
                        S<br>
                        K<br>
                        I<br>
                        R<br>
                        T<br>
                        S<br>
                    </div>
                  </a>
                </div>
              </div>
              <div class="tabclothes" style="width: 93%;padding-left: 25px">
                <input type="text" name="search" placeholder="Search.." style="margin: 2% 2% 0% 2%;"><br><br>
                <div class="w3-third menuclothes"><br>
                  <div class="w3-card-2 w3-padding-top">
                    <figure class="image is-1by2"></figure>
                    <a onclick="document.getElementById('bottoms').src='assets/images/clothes/model/model04.png'">
                      <img src="assets/images/clothes/menu/menu04.png" alt="image-1" style="height: 130px">
                    </a>
                  </div>
                </div>
                <div class="w3-third menuclothes"><br>
                  <div class="w3-card-2 w3-padding-top">
                    <figure class="image is-1by2"></figure>
                    <a onclick="document.getElementById('bottoms').src='assets/images/clothes/model/model08.png';">
                      <img src="assets/images/clothes/menu/menu08.png" alt="image-1" style="height: 130px">
                    </a>
                  </div>
                </div>
                <div class="w3-third menuclothes"><br>
                  <div class="w3-card-2 w3-padding-top">
                    <figure class="image is-1by2"></figure>
                    <a onclick="document.getElementById('bottoms').src='assets/images/clothes/model/model09.png';">
                      <img src="assets/images/clothes/menu/menu09.png" alt="image-1" style="height: 130px">
                    </a>
                  </div>
                </div>
                <div class="w3-third menuclothes"><br>
                  <div class="w3-card-2 w3-padding-top">
                    <figure class="image is-1by2"></figure>
                    <a onclick="document.getElementById('bottoms').src='assets/images/clothes/model/model13.png';">
                      <img src="assets/images/clothes/menu/menu13.png" alt="image-1" style="height: 130px">
                    </a>
                  </div>
                </div>
                <div class="w3-third menuclothes"><br>
                  <div class="w3-card-2 w3-padding-top">
                    <figure class="image is-1by2"></figure>
                    <a onclick="document.getElementById('bottoms').src='assets/images/clothes/model/model19.png';">
                      <img src="assets/images/clothes/menu/menu19.png" alt="image-1" style="height: 130px">
                    </a>
                  </div>
                </div>
                <div class="w3-third menuclothes"><br>
                  <div class="w3-card-2 w3-padding-top">
                    <figure class="image is-1by2"></figure>
                    <a onclick="document.getElementById('bottoms').src='assets/images/clothes/model/model11.png';">
                      <img src="assets/images/clothes/menu/menu11.png" alt="image-1" style="height: 130px">
                    </a>
                  </div>
                </div>
                <div class="w3-third menuclothes"><br>
                  <div class="w3-card-2 w3-padding-top">
                    <figure class="image is-1by2"></figure>
                    <a onclick="document.getElementById('bottoms').src='assets/images/clothes/model/model13.png';">
                      <img src="assets/images/clothes/menu/menu13.png" alt="image-1" style="height: 130px">
                    </a>
                  </div>
                </div>
                <div class="w3-third menuclothes"><br>
                  <div class="w3-card-2 w3-padding-top">
                    <figure class="image is-1by2"></figure>
                    <a onclick="document.getElementById('bottoms').src='assets/images/clothes/model/model19.png';">
                      <img src="assets/images/clothes/menu/menu19.png" alt="image-1" style="height: 130px">
                    </a>
                  </div>
                </div>
                <div class="w3-third menuclothes"><br>
                  <div class="w3-card-2 w3-padding-top">
                    <figure class="image is-1by2"></figure>
                    <a onclick="document.getElementById('bottoms').src='assets/images/clothes/model/model20.png';">
                      <img src="assets/images/clothes/menu/menu20.png" alt="image-1" style="height: 130px">
                    </a>
                  </div>
                </div>
            <!-- Pagination -->
                <div class="w3-center w3-padding-32">
                  <div class="w3-bar">
                    <br><br>
                    <a href="#!" class="w3-bar-item w3-button w3-hover-black">«</a>
                    <a href="#!" class="w3-bar-item w3-black w3-button">1</a>
                    <a href="#!" class="w3-bar-item w3-button w3-hover-black">2</a>
                    <a href="#!" class="w3-bar-item w3-button w3-hover-black">3</a>
                    <a href="#!" class="w3-bar-item w3-button w3-hover-black">4</a>
                    <a href="#!" class="w3-bar-item w3-button w3-hover-black">»</a>
                  </div>
                </div>
              </div>
            </div>

          <!-- shorts -->
            <div id="shorts" class="tabcontent" style="width: 100%"><br>
              <div style="width: 5%">
                <div class="tab">
                  <a class="tablinks" onclick="openCity(event, 'allbottoms')">
                    <div class="tabname">
                        A<br>
                        L<br>
                        L<br>
                    </div>
                  </a>
                  <a class="tablinks" onclick="openCity(event, 'pants')">
                    <div class="tabname">
                        P<br>
                        A<br>
                        N<br>
                        T<br>
                        S<br>
                    </div>
                  </a>
                  <a class="tablinks" onclick="openCity(event, 'shorts')">
                    <div class="tabname">
                        S<br>
                        H<br>
                        O<br>
                        R<br>
                        T<br>
                        S<br>
                    </div>
                  </a>
                  <a class="tablinks" onclick="openCity(event, 'skirts')">
                    <div class="tabname">
                        S<br>
                        K<br>
                        I<br>
                        R<br>
                        T<br>
                        S<br>
                    </div>
                  </a>
                </div>
              </div>
              <div class="tabclothes" style="width: 93%;padding-left: 25px">
                <input type="text" name="search" placeholder="Search.." style="margin: 2% 2% 0% 2%;"><br><br>
                <div class="w3-third menuclothes"><br>
                  <div class="w3-card-2 w3-padding-top">
                    <figure class="image is-1by2"></figure>
                    <a onclick="document.getElementById('bottoms').src='assets/images/clothes/model/model10.png'">
                      <img src="assets/images/clothes/menu/menu10.png" alt="image-1" style="height: 130px">
                    </a>
                  </div>
                </div>
                <div class="w3-third menuclothes"><br>
                  <div class="w3-card-2 w3-padding-top">
                    <figure class="image is-1by2"></figure>
                    <a onclick="document.getElementById('bottoms').src='assets/images/clothes/model/model20.png';">
                      <img src="assets/images/clothes/menu/menu20.png" alt="image-1" style="height: 130px">
                    </a>
                  </div>
                </div>
                <div class="w3-third menuclothes"><br>
                  <div class="w3-card-2 w3-padding-top">
                    <figure class="image is-1by2"></figure>
                    <a onclick="document.getElementById('bottoms').src='assets/images/clothes/model/model23.png';">
                      <img src="assets/images/clothes/menu/menu23.png" alt="image-1" style="height: 130px">
                    </a>
                  </div>
                </div>
                <div class="w3-third menuclothes"><br>
                  <div class="w3-card-2 w3-padding-top">
                    <figure class="image is-1by2"></figure>
                    <a onclick="document.getElementById('bottoms').src='assets/images/clothes/model/model09.png';">
                      <img src="assets/images/clothes/menu/menu09.png" alt="image-1" style="height: 130px">
                    </a>
                  </div>
                </div>
                <div class="w3-third menuclothes"><br>
                  <div class="w3-card-2 w3-padding-top">
                    <figure class="image is-1by2"></figure>
                    <a onclick="document.getElementById('bottoms').src='assets/images/clothes/model/model10.png';">
                      <img src="assets/images/clothes/menu/menu10.png" alt="image-1" style="height: 130px">
                    </a>
                  </div>
                </div>
                <div class="w3-third menuclothes"><br>
                  <div class="w3-card-2 w3-padding-top">
                    <figure class="image is-1by2"></figure>
                    <a onclick="document.getElementById('bottoms').src='assets/images/clothes/model/model11.png';">
                      <img src="assets/images/clothes/menu/menu11.png" alt="image-1" style="height: 130px">
                    </a>
                  </div>
                </div>
                <div class="w3-third menuclothes"><br>
                  <div class="w3-card-2 w3-padding-top">
                    <figure class="image is-1by2"></figure>
                    <a onclick="document.getElementById('bottoms').src='assets/images/clothes/model/model13.png';">
                      <img src="assets/images/clothes/menu/menu13.png" alt="image-1" style="height: 130px">
                    </a>
                  </div>
                </div>
                <div class="w3-third menuclothes"><br>
                  <div class="w3-card-2 w3-padding-top">
                    <figure class="image is-1by2"></figure>
                    <a onclick="document.getElementById('bottoms').src='assets/images/clothes/model/model19.png';">
                      <img src="assets/images/clothes/menu/menu19.png" alt="image-1" style="height: 130px">
                    </a>
                  </div>
                </div>
                <div class="w3-third menuclothes"><br>
                  <div class="w3-card-2 w3-padding-top">
                    <figure class="image is-1by2"></figure>
                    <a onclick="document.getElementById('bottoms').src='assets/images/clothes/model/model20.png';">
                      <img src="assets/images/clothes/menu/menu20.png" alt="image-1" style="height: 130px">
                    </a>
                  </div>
                </div>
            <!-- Pagination -->
                <div class="w3-center w3-padding-32">
                  <div class="w3-bar">
                    <br><br>
                    <a href="#!" class="w3-bar-item w3-button w3-hover-black">«</a>
                    <a href="#!" class="w3-bar-item w3-black w3-button">1</a>
                    <a href="#!" class="w3-bar-item w3-button w3-hover-black">2</a>
                    <a href="#!" class="w3-bar-item w3-button w3-hover-black">3</a>
                    <a href="#!" class="w3-bar-item w3-button w3-hover-black">4</a>
                    <a href="#!" class="w3-bar-item w3-button w3-hover-black">»</a>
                  </div>
                </div>
              </div>
            </div>

          <!-- skirts -->
            <div id="skirts" class="tabcontent" style="width: 100%"><br>
              <div style="width: 5%">
                <div class="tab">
                  <a class="tablinks" onclick="openCity(event, 'allbottoms')">
                    <div class="tabname">
                        A<br>
                        L<br>
                        L<br>
                    </div>
                  </a>
                  <a class="tablinks" onclick="openCity(event, 'pants')">
                    <div class="tabname">
                        P<br>
                        A<br>
                        N<br>
                        T<br>
                        S<br>
                    </div>
                  </a>
                  <a class="tablinks" onclick="openCity(event, 'shorts')">
                    <div class="tabname">
                        S<br>
                        H<br>
                        O<br>
                        R<br>
                        T<br>
                        S<br>
                    </div>
                  </a>
                  <a class="tablinks" onclick="openCity(event, 'skirts')">
                    <div class="tabname">
                        S<br>
                        K<br>
                        I<br>
                        R<br>
                        T<br>
                        S<br>
                    </div>
                  </a>
                </div>
              </div>
              <div class="tabclothes" style="width: 93%;padding-left: 25px">
                <input type="text" name="search" placeholder="Search.." style="margin: 2% 2% 0% 2%;"><br><br>
                <div class="w3-third menuclothes"><br>
                  <div class="w3-card-2 w3-padding-top">
                    <figure class="image is-1by2"></figure>
                    <a onclick="document.getElementById('bottoms').src='assets/images/clothes/model/model06.png'">
                      <img src="assets/images/clothes/menu/menu06.png" alt="image-1" style="height: 130px">
                    </a>
                  </div>
                </div>
                <div class="w3-third menuclothes"><br>
                  <div class="w3-card-2 w3-padding-top">
                    <figure class="image is-1by2"></figure>
                    <a onclick="document.getElementById('bottoms').src='assets/images/clothes/model/model11.png';">
                      <img src="assets/images/clothes/menu/menu11.png" alt="image-1" style="height: 130px">
                    </a>
                  </div>
                </div>
                <div class="w3-third menuclothes"><br>
                  <div class="w3-card-2 w3-padding-top">
                    <figure class="image is-1by2"></figure>
                    <a onclick="document.getElementById('bottoms').src='assets/images/clothes/model/model26.png';">
                      <img src="assets/images/clothes/menu/menu26.png" alt="image-1" style="height: 130px">
                    </a>
                  </div>
                </div>
                <div class="w3-third menuclothes"><br>
                  <div class="w3-card-2 w3-padding-top">
                    <figure class="image is-1by2"></figure>
                    <a onclick="document.getElementById('bottoms').src='assets/images/clothes/model/model09.png';">
                      <img src="assets/images/clothes/menu/menu09.png" alt="image-1" style="height: 130px">
                    </a>
                  </div>
                </div>
                <div class="w3-third menuclothes"><br>
                  <div class="w3-card-2 w3-padding-top">
                    <figure class="image is-1by2"></figure>
                    <a onclick="document.getElementById('bottoms').src='assets/images/clothes/model/model10.png';">
                      <img src="assets/images/clothes/menu/menu10.png" alt="image-1" style="height: 130px">
                    </a>
                  </div>
                </div>
                <div class="w3-third menuclothes"><br>
                  <div class="w3-card-2 w3-padding-top">
                    <figure class="image is-1by2"></figure>
                    <a onclick="document.getElementById('bottoms').src='assets/images/clothes/model/model11.png';">
                      <img src="assets/images/clothes/menu/menu11.png" alt="image-1" style="height: 130px">
                    </a>
                  </div>
                </div>
                <div class="w3-third menuclothes"><br>
                  <div class="w3-card-2 w3-padding-top">
                    <figure class="image is-1by2"></figure>
                    <a onclick="document.getElementById('bottoms').src='assets/images/clothes/model/model13.png';">
                      <img src="assets/images/clothes/menu/menu13.png" alt="image-1" style="height: 130px">
                    </a>
                  </div>
                </div>
                <div class="w3-third menuclothes"><br>
                  <div class="w3-card-2 w3-padding-top">
                    <figure class="image is-1by2"></figure>
                    <a onclick="document.getElementById('bottoms').src='assets/images/clothes/model/model19.png';">
                      <img src="assets/images/clothes/menu/menu19.png" alt="image-1" style="height: 130px">
                    </a>
                  </div>
                </div>
                <div class="w3-third menuclothes"><br>
                  <div class="w3-card-2 w3-padding-top">
                    <figure class="image is-1by2"></figure>
                    <a onclick="document.getElementById('bottoms').src='assets/images/clothes/model/model20.png';">
                      <img src="assets/images/clothes/menu/menu20.png" alt="image-1" style="height: 130px">
                    </a>
                  </div>
                </div>
            <!-- Pagination -->
                <div class="w3-center w3-padding-32">
                  <div class="w3-bar">
                    <br><br>
                    <a href="#!" class="w3-bar-item w3-button w3-hover-black">«</a>
                    <a href="#!" class="w3-bar-item w3-black w3-button">1</a>
                    <a href="#!" class="w3-bar-item w3-button w3-hover-black">2</a>
                    <a href="#!" class="w3-bar-item w3-button w3-hover-black">3</a>
                    <a href="#!" class="w3-bar-item w3-button w3-hover-black">4</a>
                    <a href="#!" class="w3-bar-item w3-button w3-hover-black">»</a>
                  </div>
                </div>
              </div>
            </div>
        </div>

      </div>
      <div class="menuicon" style="width: 10%; padding-top: 2%; margin-right: 3%;">
        <div class="tabout">
          <a class="tablinks" onclick="openCity(event, 'alltops'), openNav()">
              <img src="/assets/images/buttons/shirt.png" alt=""><br>
          </a>
          <a class="tablinks" onclick="openCity(event, 'allbottoms'), openNav()">
              <img src="/assets/images/buttons/pants.png" alt=""><br>
          </a>
          <a class="tablinks" onclick="openCity(event, 'allshoes'), openNav()">
              <img src="/assets/images/buttons/shoes.png" alt=""><br>
          </a>
          <a class="tablinks" onclick="openCity(event, 'allass'), openNav()">
              <img src="/assets/images/buttons/ass.png" alt=""><br>
          </a>
        </div>
      </div>
    </div>
    <div class="column has-text-centered">
      <a class="button is-light" href="finishlooq.html" style="color: #ffffff; width: 90px; background-color: #e7c6c2;">DONE</a>
    </div>
    <center>
      <div style="width: 300px; margin-bottom: 5%;padding-bottom: 177px">
        <p class="has-text-centered" style="font-size: 1rem;">By clicking on 'Done' above, you confirm that you're finished.</p>
      </div>
    </center>


  <footer class="w3-container w3-padding-16" style="background-color: #f5f5f5;color: grey;font-size: 11px;padding-left: 30px">
    <div class="w3-row">
      <div class="w3-third w3-container ">
        <p><b>Powered by KBANG</b></p>
        <p>© 2017 LOOQ & STYLE All rights reserved &nbsp;&nbsp;<a href="#">Term of Use</a></p>
      </div>
      <div class="w3-third w3-container ">
      </div>
      <div class="w3-third w3-container w3-hide-small" style="text-align: right"><br><br>
        <a href="#">Our Website</a>&nbsp;&nbsp;<a href="#">Customer Care</a>&nbsp;&nbsp;<a href="#">Contact Us</a>
      </div>
      <div class="w3-third w3-container w3-hide-large w3-hide-medium" style="">
        <a href="#">Our Website</a>&nbsp;&nbsp;<a href="#">Customer Care</a>&nbsp;&nbsp;<a href="#">Contact Us</a>
      </div>
    </div>
  </footer>
  </div>
  </div>

  <script src="js/modernizr.custom.js"></script>
  <script src="js/classie.js"></script>
  <script src="js/pathLoader.js"></script>
  <script src="js/main.js"></script>
  <script>
    //เนวิเกชั่นมาเป็นแถบ
    function w3_open() {
        var x = document.getElementById("mySidebar");
        x.style.width = "100%";
        x.style.fontSize = "20px";
        x.style.paddingTop = "10%";
        x.style.display = "block";
    }
    //ฟังก์ชั่นปิดหน้ต่าง
    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
    }
  </script>
  <script type="text/javascript">
        function openCity(evt, cityName) {
    // Declare all variables
        var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }

    // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
      }

      function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
      }

    /* Set the width of the side navigation to 0 */
      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
      }

    // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
      }

      function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
      }

        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
      }
  </script>

</body>
</html>
