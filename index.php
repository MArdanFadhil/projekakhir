<?php

    // require 'controller.php';

    // $students = query("SELECT * FROM users");

    // if( isset($_POST["cari"] )) {
    //     $students = cari($_POST["keyword"]);
    // }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>B'Cafe</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo"><a href="#">B'Cafe</a></div>
                <ul class="links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#menu">Daftar Menu</a></li>
                    <li><a href="#contact">Lokasi</a></li>
                </ul>`
                <a href="#" class="action_btn">Get</a>
            <div class="toggle_btn">
            <i class="fa-solid fa-bars"></i>
            </div>
        </nav>

        <div class="dropdown_menu">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#menu">Daftar Menu</a></li>
            <li><a href="#contact">Lokasi</a></li>
            <li><a href="#" class="action_btn">Get</a></li>
        </div>
    </header>

    <script>
        const toggleBtn = document.querySelector('.toggle_btn')
        const toggleBtnIcon = document.querySelector('.toggle_btn i')
        const dropDownMenu = document.querySelector('.dropdown_menu')

        toggleBtn.onclick = function () {
            dropDownMenu.classList.toggle('open')
            const isOpen = dropDownMenu.classList.contains('open')

            toggleBtnIcon.classList = isOpen
                ? 'fa-solid fa-xmark'
                : 'fa-solid fa-bars'
        }
    </script>

    <section class = "hero" id= "home">
        <main class= "content">
            <h1> Mari Nikmati Secangkir <span>Coffee</span></h1>
            <p>Start The Day With Coffee</p>
            <a href="#" class="cta">Beli Sekarang</a>
        </main>
    </section>

    <section id="about" class="about">
        <h2> About </h2>

        <div class= "row">
            <div class= "about-img">
                <img src="img/kopi5.jpg" alt="About">
            </div>
            <div class= "content">
                <p>Kopi pertama kali ditemukan di Ethiopia, Afrika Timur, pada abad ke-9. Orang yang pertama kali menemukan kopi adalah Khaldi, seorang penggembala kambing di Ethiopia.</p>
            </div>
        </div>
    </section>

    <section id="menu" class="menu">
      <h2>Daftar Menu</h2>
      <p>
        Kami menghidangkan berbagai macam-macam menu yang ada di cafe kami,
        anda bisa memilih salah satu menu yang paling enak disini.
      </p>
      <div class="row">
        <div class="menu-card">
          <img
            src="img/cappucino.jpeg"
            alt="Espresso"
            class="menu-card-img"
          />
          <h3 class="menu-card-title">- Black Coffee</h3>
          <p class="menu-card-price">IDR 20k</p>
          <!-- <button type="submit" class="btn">
            <a class="btn1" href="1.html">Pesan</a>
          </button> -->
        </div>
      </div>
      <div class="row">
        <div class="menu-card">
          <img
            src="img/cappucino.jpeg"
            alt="Espresso"
            class="menu-card-img"
          />
          <h3 class="menu-card-title">- Black Coffee</h3>
          <p class="menu-card-price">IDR 15k</p>
          <!-- <button type="submit" class="btn">
            <a class="btn1" href="1.html">Pesan</a>
          </button> -->
        </div>
      </div>
      <div class="row">
        <div class="menu-card">
          <img
            src="img/cappucino.jpeg"
            alt="Espresso"
            class="menu-card-img"
          />
          <h3 class="menu-card-title">- Black Coffee</h3>
          <p class="menu-card-price">IDR 17k</p>
          <!-- <button type="submit" class="btn">
            <a class="btn1" href="1.html">Pesan</a>
          </button> -->
        </div>
      </div>
    </section> 
    <!-- Menu Section end -->

    <section id="contact" class="contact">
      <h2>Lokasi</h2>

      <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15850.831160841662!2d106.82917918398161!3d-6.683074442993667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c93ddbc361a7%3A0xb11456c6a909dfa3!2sBitung%20Sari%2C%20Kec.%20Ciawi%2C%20Kabupaten%20Bogor%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1687449235587!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
      </div>
    </section>

</body>
</html>