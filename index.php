<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Concert Ticket Online Reservation</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <nav>
      <div class="layar-dalam">
        <div class="logo">
          <a href=""><img src="asset/logowh.png" class="putih" /></a>
          <a href=""><img src="asset/logoblack.png" class="hitam" /></a>
        </div>
        <div class="menu">
          <a href="#" class="tombol-menu">
            <span class="garis"></span>
            <span class="garis"></span>
            <span class="garis"></span>
          </a>
          <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#team">About Us</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="Login.php">Login</a></li>
		        <li><a href="Registration.php">Registration</a></li>
            <li><a href="admin_portal/login.php">Admin</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="layar-penuh">
      <header id="home">
        <div class="overlay"></div>
        <video autoplay muted loop>
          <source src="asset/videosmtown_Trim.mp4" type="video/mp4" />
        </video>
        <div class="intro">
          <h3>Concert Ticket Online Reservation</h3><br>
          <p>
            WELCOME TO E-TICKETING FOR CONCERT
          </p>
          <p>
            <a href="Registration.php" class="tombol">MAKE RESERVATIONS NOW</a>
          </p>
        </div>
      </header>
      <main>
        
        <section id="gallery">
          <div><img src="asset/balckkpink.jpg" /></div>
          <div><img src="asset/bts.jpeg" /></div>
          <div><img src="asset/exo2.jpg" /></div>
          <div><img src="asset/westlife.jpg" /></div>
          <div><img src="asset/brunomars.jpg" /></div>
          <div><img src="asset/tulus.jpg" /></div>
          <div><img src="asset/agnezmo.jpg" /></div>
          
        </section>
        <section class="quote">
          <div class="layar-dalam">
            <p>You are happy we are happy too.</p>
          </div>
        </section>
        <section id="team">
          <div class="layar-dalam">
            <h3>About Us</h3>
            <p class="ringkasan">
              Kelompok 6 Kelas IK-2E Politeknik Negeri Semarang 
            </p>
            <div class="tim">
              <div>
                <img src="asset/Deas.jpg" />
                <h6>Anggia Dea Saputri</h6><br>
                <span>3.34.20.4.02</span><br>
                <span>Semarang, Indonesia</span><br>
                <span>Khayrunnas anfa'uhum linnas</span>
                
              </div>
              <div>
                <img src="asset/Ivana.jpg" />
                <h6>Ivana Intan Paramita</h6><br>
                <span>3.34.20.4.11</span><br>
                <span>Ungaran, Indonesia</span><br>
                <span>Be Positive</span>
              </div>
              <div>
                <img src="asset/Zuyyina.jpg" />
                <h6>Zuyyina Hanifatul Muizza</h6><br>
                <span>3.34.20.4.26</span><br>
                <span>Semarang, Indonesia</span><br>
                <span>Man Jadda Wa Jadda</span>
              </div>
            </div>
          </div>
        </section>
        
      </main>
      <footer id="contact">
        <div class="layar-dalam">
          <div>
            <h5>Info</h5>
            Concert Ticket Online Reservation merupakan website yang dibuat untuk memudahkan para penggemar konser 
            memesan tiket secara online tanpa perlu keluar rumah dan berdesak-desakan.
          </div>
          <div>
            <h5>Contact</h5>
            Politeknik Negeri Semarang <br>
            Jalan Prof H. Soedarto SH, Tembalang, Semarang, Jawa Tengah
          </div>
          <div>
            <h5>Social Media</h5>
            Instagram: <br>
            @aaaaads__ <br> 
            @ivana.int7 <br> 
            @zuyyinamuizza
          </div>
        </div>
        <div class="layar-dalam">
          <div class="copyright">&copy; 2022 Kelompok 6</div>
        </div>
      </footer>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script src="javascript.js"></script>
  </body>

</html>
