<?php 
    include "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <title>some page</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="wrapper">
    <div class="sidebar">
        <span>Servile APP</span>
        <div class="profile">
          <div><img src="https://colorlib.com/polygon/gentelella/images/img.jpg" alt="user-image"></div>
          <div class="profile-info">
            <p>Root <b>Admin</b></p>
            <p class="little-info">Administrator</p>
            <p class="little-info"><i class="fas fa-circle" style="color: lightgreen;"></i>Online</p>
          </div>
        </div>
        <div class="search-box">
          <input type="text" placeholder="Pretrazite...">
        </div>
        <div class="menu">
          <div class="top-one">
            <p>Opcije</p>
            <ul>
                <li class="row"><a href="#"><i class="fas fa-home" id="icon"></i>Home<span class="fas fa-chevron-right" style="float: right !important;"></span></a></li>
                <li class="row"><a href="#"><i class="fas fa-procedures" id="icon"></i></i>Kartoteka pacijenata<span class="fas fa-chevron-right" style="float: right !important;"></span></a></li>
            </ul>
          </div>
          <div class="bot-one"><p>Admin pristup</p>
              <ul>
                <li class="row" id="drop"><a href="#"><i class="fas fa-users" id="icon"></i></i>Korisnici<span id="arrow" class="fas fa-chevron-right" style="float: right !important;"></span></a>
                  <ul class="drop-menu" id="drop-menu">
                    <li class="drop-item"><a href="index.php">Pregled Korisnika</a></li>
                    <li class="drop-item"><a href="user_entry.php">Unos Korisnika</a></li>
                  </ul>
                </li>
                <li class="row"><a href="#"><i class="fas fa-bug" id="icon"></i></i></i>Izvjestaji<span class="fas fa-chevron-right" style="float: right !important;"></span></a></li>
              </ul>
          </div>
          
        </div>
          
        <div class="bot-icons">
          <a href="#"><i class="fas fa-th"></i></i></a>
          <a href="#"><i class="fas fa-envelope"></i></i></a>
          <a href="#"><i class="fas fa-cog"></i></a>
          <a href="#"><i class="fas fa-power-off"></i></a>
      </div>
    </div>
    <div class="main_content">
        <div class="header">
          <div class="main-page-icon"><i class="fas fa-procedures" id="main-content-icon"></i></div>
          <div>Unos novog korisnika
            <div class="subheader">Unos novog korisnika</div>
          </div>
          <div class="path">
            <a href="#"><i class="fas fa-home"></i>Naslovna strana </a>/
            <a href="#">Svi pacijenti</a>
          </div>
        </div>
        <form action="update.php" method="POST">
            <div class="form-group">
                <label>Ime i prezime</label>
                <input class="form-control" type="text" name="fullname">
            </div>
            <div class="form-group">
                <label>JMB</label>
                <input class="form-control" type="text" name="jmb">
            </div>
            <div class="form-group">
                <label>Datum rodjenja</label>
                <input class="form-control" type="date" name="dob">
            </div>
            <div class="form-group">
                <label>Gender</label>
                <input class="form-control" type="number" name="gender">
            </div>
            <div class="form-group">
                <button class="save-button" value="submit">Save</button>
            </div>
        </form>
    </div>
  </div>
</div>
<script src="script.js"></script>
</body>
</html>