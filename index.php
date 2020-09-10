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
          <div>Pregled svih pacijenata
            <div class="subheader">Sve informacije o pacijentima na jednom mjestu. Vrsite pretrazivanje, pregled i izvoz podataka.</div>
          </div>
          <div class="path">
            <a href="#"><i class="fas fa-home"></i>Naslovna strana </a>/
            <a href="#">Svi pacijenti</a>
          </div>
        </div>
        <div class="button-bar">
          <div class="buts">
            <button style="background: green;"><i class="fas fa-plus"></i>Novi filter</button>
            <button style="background: gray;"><i class="fas fa-columns"></i>Kolone<i class="fas fa-caret-right"></i></button>
            <button style="background: blue;"><i class="fas fa-bars"></i>Pregled</button>
            <button style="background: gray;"><i class="fas fa-file-excel"></i>Excel<i class="fas fa-caret-right"></i></button>
            <div class="select">Ukupno 2 prikazi
              <select>
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="40">40</option>
              </select>
            </div>
          </div>
          <div class="test">
              <i class="fas fa-times" style="color: red;"></i>
              <select>
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="40">40</option>
              </select><input type="text">
          </div>
        </div>
        <div class="table">
          <table>
            <tr>
              <th>#</th>
              <th>Ime i prezime</th>
              <th>JMB</th>
              <th>Broj dokumenta</th>
              <th>Godina rodjena</th>
              <th>Spol</th>
              <th>Akcije</th>
            </tr>
            <tr><?php
                $entrie = new Db();
                $entrie->select();

                if(isset($_POST['2'])){
                    $id = $_POST['name'];
                }
            ?></tr>
          </table>
        </div>
    </div>  
    </div>
  </div>
</div>
<script src="script.js"></script>
</body>
</html>