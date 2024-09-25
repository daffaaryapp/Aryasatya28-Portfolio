<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aryasatya Portfolio</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/android-chrome-512x512.png" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="{{ asset('output.css') }}">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
 
</head>

<body>

  <!--
    - #MAIN
  -->

  <main>

    <!--
      - #SIDEBAR
    -->

    <aside class="sidebar" data-sidebar>

      @foreach ($authors as $author )
      <div class="sidebar-info">

        <figure class="avatar-box">
          <img src="./assets/images/daffa1.jpg" alt="" width="80" style="border-radius: 25px;">
        </figure>

        <div class="info-content">
          <h1 class="name" title="">{{ $author->name }}</h1>

          <p class="title">Warga Sipil</p>
        </div>

        <button class="info_more-btn" data-sidebar-btn>
          <span>Show Contacts</span>

          <ion-icon name="chevron-down"></ion-icon>
        </button>

      </div>
        
      @endforeach

      <div class="sidebar-info_more">

        <div class="separator"></div>

        <ul class="contacts-list">

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Email</p>

              <a href="mailto:richard@example.com" class="contact-link">daffaryasatya28@gmail.com</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="phone-portrait-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Phone</p>

              <a href="tel:+12133522795" class="contact-link">+62</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="calendar-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Birthday</p>

              <time datetime="2004-05-28">May, 2004</time>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Location</p>

              <address>Jakarta, IND</address>
            </div>

          </li>

        </ul>

        <div class="separator"></div>

        <ul class="social-list">

          <!-- <li class="social-item">
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li> -->

          <li class="social-item">
            <a href="https://github.com/daffaaryapp" target="_blank" class="social-link">
              <ion-icon name="logo-github"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="https://www.instagram.com/daffa_aryasatya_/" target="_blank" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </aside>





    <!--
      - #main-content
    -->

    <div class="main-content">

      <!--
        - #NAVBAR
      -->

      <nav class="navbar">

        <ul class="navbar-list">

          <li class="navbar-item">
            <button class="navbar-link  active" data-nav-link>Me</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Skul</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Report</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Project</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Contact</button>
          </li>

        </ul>

      </nav>





      <!--
        - #ABOUT
      -->

      <article class="about  active" data-page="me">

        <header>
          <h2 class="h2 article-title">Me</h2>
        </header>

        <section class="about-text">
          <p>
            Introduce my name is daffa aryasatya i grew up in jakarta i was born on May 2004, I have two hobbies, playing soccer and playing computers.
          </p>

          <p>
            I'll tell you first about the soccer so here's how I first got to know soccer because of the 2010 world cup at that time everyone had tremendous euphoria for soccer, every time I left the house I would play soccer or not play winning eleven. at a friend's house, I did that habit until I was in 6th grade so the memories of playing soccer will never disappear in my mind. Now entering my second hobby, namely playing computers, the beginning of why I can like playing computers because I was invited to play internet cafes by my friends, The game that was a hit in its day was definitely point blank because of this game I had to drop lessons to be able to play this game, not until there was one game that I couldn't forget until now, called dota, I played this game without knowing the time I played at 7 in the morning coming home from the internet cafe at 3 in the afternoon because I was so addicted to this game, one of my favorite heroes is the juggernaut, he is a samurai if you say this dota hero op anyway. That's the reason my hobby was created in the first place.
          </p>
        </section>


        <!--
          - service
        -->

        <section class="service">

          <h3 class="h3 service-title">What i'm doing</h3>

          <ul class="service-list">

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/soccer.png
                " alt="" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Bal Balan</h4>

                <p class="service-item-text">
                  non-essential ball-kicking activities.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/sleeping.png" alt="" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Turu</h4>

                <p class="service-item-text">
                  sky-high dreaming activities.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/dota-2.png" alt="" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">NgedotA</h4>

                <p class="service-item-text">
                  click click game that breaks device.
                </p>
              </div>

            </li>

            <!-- <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-photo.svg" alt="camera icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Photography</h4>

                <p class="service-item-text">
                  I make high-quality photos of any category at a professional level.
                </p>
              </div>

            </li> -->

          </ul>

        </section>


        <!--
          - testimonials
        -->

        <!-- <section class="testimonials">

          <h3 class="h3 testimonials-title">Testimonials</h3>

          <ul class="testimonials-list has-scrollbar">

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-1.png" alt="Daniel lewis" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Daniel lewis</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                    lot of experience
                    and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                    consectetur adipiscing
                    elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-2.png" alt="Jessica miller" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Jessica miller</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                    lot of experience
                    and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                    consectetur adipiscing
                    elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-3.png" alt="Emily evans" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Emily evans</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                    lot of experience
                    and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                    consectetur adipiscing
                    elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-4.png" alt="Henry william" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Henry william</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                    lot of experience
                    and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                    consectetur adipiscing
                    elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                  </p>
                </div>

              </div>
            </li>

          </ul>

        </section> -->


        <!--
          - testimonials modal
        -->

        <div class="modal-container" data-modal-container>

          <div class="overlay" data-overlay></div>

          <section class="testimonials-modal">

            <button class="modal-close-btn" data-modal-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

            <div class="modal-img-wrapper">
              <figure class="modal-avatar-box">
                <img src="./assets/images/avatar-1.png" alt="Daniel lewis" width="80" data-modal-img>
              </figure>

              <img src="./assets/images/icon-quote.svg" alt="quote icon">
            </div>

            <div class="modal-content">

              <h4 class="h3 modal-title" data-modal-title>Daniel lewis</h4>

              <time datetime="2021-06-14">14 June, 2021</time>

              <div data-modal-text>
                <p>
                  Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                  lot of experience
                  and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                  consectetur adipiscing
                  elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                </p>
              </div>

            </div>

          </section>

        </div>


        <!--
          - clients
        -->

        <!-- <section class="clients">

          <h3 class="h3 clients-title">Clients</h3>

          <ul class="clients-list has-scrollbar">

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/logo-1-color.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/logo-2-color.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/logo-3-color.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/logo-4-color.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/logo-5-color.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/logo-6-color.png" alt="client logo">
              </a>
            </li>

          </ul>

        </section> -->

      </article>





      <!--
        - #RESUME
      -->

      <article class="resume" data-page="skul">

        <header>
          <h2 class="h2 article-title">Skul/Skil</h2>
        </header>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Educati0n</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">IPDN</h4>

              <span>2022 — 2026</span>

              <p class="timeline-text">
                where I am now
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">SMAN 31 Jakarta</h4>

              <span>2019 — 2022</span>

              <p class="timeline-text">
                High school in Matraman although only 8 months of school, after that covid :((
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">SMPN 92 Jakarta</h4>

              <span>2016 — 2019</span>

              <p class="timeline-text">
                the age that introduced me to the world of futsal and internet cafes
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">SDN Cipinang 01</h4>

              <span>2010 — 2016</span>

              <p class="timeline-text">
                SD Kuda Laut。more often heard like that because it is in the pertamina complex environment 
              </p>

            </li>

          </ol>

        </section>

        <!-- <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Experience</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Creative director</h4>

              <span>2015 — Present</span>

              <p class="timeline-text">
                Nemo enim ipsam voluptatem blanditiis praesentium voluptum delenit atque corrupti, quos dolores et qvuas
                molestias
                exceptur.
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Art director</h4>

              <span>2013 — 2015</span>

              <p class="timeline-text">
                Nemo enims ipsam voluptatem, blanditiis praesentium voluptum delenit atque corrupti, quos dolores et
                quas molestias
                exceptur.
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Web designer</h4>

              <span>2010 — 2013</span>

              <p class="timeline-text">
                Nemo enims ipsam voluptatem, blanditiis praesentium voluptum delenit atque corrupti, quos dolores et
                quas molestias
                exceptur.
              </p>

            </li>

          </ol>

        </section> -->

        <section class="skill">

          <h3 class="h3 skills-title">PROGRAMMING LANGUANGE</h3>

          <ul class="skills-list content-card">

            <li class="skills-item">
              <div class="title-wrapper">
                <img src="logo/JavaScript-logo.png" alt="" width="50">
                <h5 class="h5">  Javascript</h5>
              </div>
              <br>
              <div class="title-wrapper">
                <img src="logo/PHP-logo.svg.png" alt="" width="50">
                <h5 class="h5">  PHP</h5>
              </div>
              <br>
              <div class="title-wrapper">
                <img src="logo/Python-logo-notext.svg.png" alt="" width="50">
                <h5 class="h5">  Python</h5>
              </div>
            </li>

          </ul>

        </section>
        <section class="skill" style="margin-top: 50px;">

          <h3 class="h3 skills-title">FRAMEWORKS</h3>

          <ul class="skills-list content-card">

            <li class="skills-item">
              <div class="title-wrapper" style="justify-content: center;">
                <img src="logo/React-Symbol.png" alt="" width="150" >
                
              </div>
              <br>
              <div class="title-wrapper" style="justify-content: center;">
                <img src="logo/Logo.min.svg.png" alt="" width="150">
                
              </div>
            </li>

          </ul>

        </section>
        <section class="skill" style="margin-top: 50px;">

          <h3 class="h3 skills-title">DATA ANALYST</h3>

          <ul class="skills-list content-card">

            <li class="skills-item">
              <div class="title-wrapper" style="justify-content: center;">
                <img src="logo/numpy.png" alt="" width="150">
                
              </div>
              <br>
              <div class="title-wrapper" style="background-color: aliceblue; border-radius: 3px; justify-content: center;">
                <img src="logo/Pandas_logo.svg.png" alt="" width="150">
              </div>
            </li>

          </ul>

        </section>
        
          

         

      </article>





      <!--
        - #PORTFOLIO
      -->

      <article class="portfolio" data-page="report">

        <header>
          <h2 class="h2 article-title">Report</h2>
        </header>

        <section class="projects">

          <ul class="filter-list">

            <li class="filter-item">
              <button class="active" data-filter-btn>All</button>
            </li>

            
            <li class="filter-item">
              <button data-filter-btn>Certificate</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Pitch Deck</button>
            </li>


          </ul>

          <div class="filter-select-box">

            <button class="filter-select" data-select>

              <div class="select-value" data-selecct-value>Select category</div>

              <div class="select-icon">
                <ion-icon name="chevron-down"></ion-icon>
              </div>

            </button>

            <ul class="select-list">

              <li class="select-item">
                <button data-select-item>All</button>
              </li>
              
              <li class="select-item">
                <button data-select-item>Certificate</button>
              </li>

              <li class="select-item">
                <button data-select-item>Pitch Deck</button>
              </li>


            </ul>

          </div>

          <!-- projek yang mau dimasukin -->
          <ul class="project-list">

            @foreach ( $reports as $report )
            <li class="project-item  active" data-filter-item data-category="{{$report->category->name}}">
              <a href="{{ $report->link }}">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{ Storage::url($report->image) }}" alt="" loading="lazy">
                </figure>

                <h3 class="project-title">{{ $report->name }}</h3>

                <p class="project-category">{{ $report->criteria }}</p>
                <a style="color: blue; text-decoration: underline;" class="project-category" target="_blank" href="{{ $report->link }}">lihat</a>

              </a>
            </li>
            @endforeach

            
            


            <!-- pitch -->

            {{-- <li class="project-item  active" data-filter-item data-category="pitch deck">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/penpra1.png" alt="" loading="lazy">
                </figure>

                <h3 class="project-title">Penpra</h3>

                <p class="project-category">Code</p>
                <a style="color: blue; text-decoration: underline;" class="project-category" target="_blank" href="https://drive.google.com/file/d/1Bd8Y-TXCTD2Ld_yPpPt5G_5-vRguTH4V/view?usp=sharing">lihat</a>

              </a>

              </a>
            </li> --}}
            

          </ul>

        </section>

      </article>





      <!--
        - #BLOG
      -->

      <article class="blog" data-page="project">

        <header>
          <h2 class="h2 article-title">Project</h2>
        </header>

        <section class="blog-posts">

          <ul class="blog-posts-list">

            <li class="blog-post-item">
              <a href="http://kimiaxbindo.epizy.com/index.php" target="_blank"> 

                <figure class="blog-banner-box">
                  <img src="./assets/images/myweb.png" alt="Design conferences in 2022" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Web</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">2021</time>
                  </div>

                  <h3 class="h3 blog-item-title">Asam Benzoat Sebagai Pengawet di Makanan dan Minuman</h3>
                  <p class="blog-text">
                    Asam benzoat (C6H5COOH) merupakan bahan pengawet yang luas penggunaannya dan sering digunakan pada bahan makanan. Penggunaan bahan kimia sebagai bahan tambahan pada makanan saat ini sering ditemui pada makanan dan minuman.
                  </p>
                  

                </div>

              </a>
            </li>

            <li class="blog-post-item">
              <a href="http://jakartatimur.rf.gd/?i=1" target="_blank">

                <figure class="blog-banner-box">
                  <img src="./assets/images/jaktim.png" alt="Best fonts every designer" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Web</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">October, 2023</time>
                  </div>

                  <h3 class="h3 blog-item-title">Jakarta Timur</h3>

                  <p class="blog-text">
                    Jakarta Timur adalah salah satu kota administratif di Jakarta, Indonesia. Dengan luas wilayah sekitar 186,02 kilometer persegi, wilayah ini merupakan bagian yang penting dari ibu kota. 
                  </p>

                </div>

              </a>
            </li>
            <li class="blog-post-item">
              <a href="https://penpra.site/" target="_blank">

                <figure class="blog-banner-box">
                  <img src="./assets/images/penpra.png" alt="Best fonts every designer" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Web</p>

                    <span class="dot"></span>
                    
                    <time datetime="2022-02-23">December, 2023</time>
                    
                  </div>
                  
                  
                  <h3 class="h3 blog-item-title">Pengaduan Praja</h3>
                  
                  
                  <p class="blog-text">
                    Penpra adalah aplikasi Pengaduan Praja, yang mana sekarang praja dapat mengadukan permasalahan melalui website Penpra yang di buat oleh saya di kampus sumbar, aplikasi di develop menggunakan framework laravel 
                  </p>

                </div>

              </a>
            </li>

            <!-- <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-3.jpg" alt="Design digest #80" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">Design digest #80</h3>

                  <p class="blog-text">
                    Excepteur sint occaecat cupidatat no proident, quis nostrum exercitationem ullam corporis suscipit.
                  </p>

                </div>

              </a>
            </li>

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-4.jpg" alt="UI interactions of the week" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">UI interactions of the week</h3>

                  <p class="blog-text">
                    Enim ad minim veniam, consectetur adipiscing elit, quis nostrud exercitation ullamco laboris nisi.
                  </p>

                </div>

              </a>
            </li>

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-5.jpg" alt="The forgotten art of spacing" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">The forgotten art of spacing</h3>

                  <p class="blog-text">
                    Maxime placeat, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>

                </div>

              </a>
            </li>

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-6.jpg" alt="Design digest #79" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">Design digest #79</h3>

                  <p class="blog-text">
                    Optio cumque nihil impedit uo minus quod maxime placeat, velit esse cillum.
                  </p>

                </div>

              </a>
            </li> --> 

          </ul>

        </section>

      </article>





      <!--
        - #CONTACT
      -->

      <article class="contact" data-page="contact">

        <header>
          <h2 class="h2 article-title">Contact</h2>
        </header>

        <section class="mapbox" data-mapbox>
          <figure>
            <iframe
              src="https://maps.google.com/maps?q=cipinang&t=&z=10&ie=UTF8&iwloc=&output=embed"
              width="400" height="300" loading="lazy"></iframe>
          </figure>
        </section>

        <section class="contact-form">

          <h3 class="h3 form-title">Contact Form</h3>

          <form action="#" class="form" data-form>

            <div class="input-wrapper">
              <input type="text" name="fullname" class="form-input" placeholder="Full name" required data-form-input>

              <input type="email" name="email" class="form-input" placeholder="Email address" required data-form-input>
            </div>

            <textarea name="message" class="form-input" placeholder="Your Message" required data-form-input></textarea>

            <button class="form-btn" type="submit" disabled data-form-btn>
              <ion-icon name="paper-plane"></ion-icon>
              <span>Send Message</span>
            </button>

          </form>

        </section>

      </article>

    </div>

  </main>






  <!--
    - custom js link
  -->
  <script src="{{ asset('script.js') }}"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-KFWG5TRSHP"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-KFWG5TRSHP');
  </script>
</body>

</html>