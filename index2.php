<!doctype html>
<?php $phpPath = $_SERVER['DOCUMENT_ROOT'] . '/pure4/app';
   include_once($phpPath . '/helpers/data.php');?>
<html lang="en">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>David Lobo - Software Engineer</title>
      <meta name="description" content="I'm David, a Software Engineer based in London. I’ve been working as a developer for over eight years.">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
      <!--[if lte IE 8]>
      <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-old-ie-min.css">
      <![endif]-->
      <!--[if gt IE 8]><!-->
      <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">
      <!--<![endif]-->
      <link type="text/css" rel="stylesheet" href="vendor/lightgallery/dist/css/lightgallery.css" />
      <link rel="stylesheet" href="css/styles.css?v=<?php echo time();?>">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
      <script src="https://cdn.jsdelivr.net/combine/npm/lightgallery,npm/lg-autoplay,npm/lg-fullscreen,npm/lg-hash,npm/lg-pager,npm/lg-share,npm/lg-thumbnail,npm/lg-video,npm/lg-zoom"></script>
      <!-- A jQuery plugin that adds cross-browser mouse wheel support. (Optional) -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
      <script src="vendor/waypoints/jquery.waypoints.min.js"></script>
      <script src="vendor/waypoints/shortcuts/sticky.min.js"></script>
      <script src="vendor/waypoints/shortcuts/inview.min.js"></script>
      <script src="js/app.js?v=<?php echo time(); ?>"></script>
      <?php render_js_vars(); ?>
   </head>
   <body>
      <header role="banner" class="">
         <div class="header">
            <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
               <div class="content-wrapper">
                  <span class="about"><a class="pure-menu-heading" href="#about">David Lobo</a></span>
                  <ul class="pure-menu-list">
                     <li class="pure-menu-item skills"><a href="#skills" class="pure-menu-link">Skills</a></li>
                     <li class="pure-menu-item work"><a href="#work" class="pure-menu-link">Work</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </header>
      <main>
         <section id="about" class="row intro pure-g nav-section">
            <div class="column pure-u-1 pure-u-lg-3-5">
               <h1>I Write Code</h1>
               <h2>I am passionate about producing <mark>web &amp; mobile</mark> applications that work beautifully.</h2>
            </div>
            <figure class="pure-u-1 pure-u-lg-2-5">
               <img class="pure-img-responsive" src="images/devices.png" height="400" width="300" alt="Illustration of Devices">
            </figure>
         </section>
         <section class="row pure-g">
            <div class="column pure-u-1 pure-u-lg-1-3">
               <p>I'm David, a Software Engineer based in London. I’ve been working as a developer for over eight years.</p>
            </div>
            <div class="column pure-u-1 pure-u-lg-1-3">
               <p>During this time I've worked on a variety of projects and technologies both onsite and remotely.</p>
            </div>
            <div class="column pure-u-1 pure-u-lg-1-3">
               <p>For startups and top companies based in New York, Lisbon and of course London.</p>
            </div>
         </section>
         <hr>
         <section id="skills" class="row pure-g nav-section">
            <div class="column pure-u-1">
               <h3>My Skills</h3>
            </div>
         </section>
         <section class="row pure-g">
            <div class="column pure-u-1 pure-u-lg-1-2">
               <div class="chart-wrap">
                  <div class="chart-title">
                     Backend
                  </div>
                  <div id="chart-backend" class="chart bars-horizontal brand-primary">
                     <div class="chart-row">
                        <span class="label">LAMP</span>
                        <div class="bar-wrap">
                           <div class="bar" data-value="80"></div>
                        </div>
                        <span class="number">80</span>
                     </div>
                     <div class="chart-row">
                        <span class="label">Wordpress</span>
                        <div class="bar-wrap">
                           <div class="bar" data-value="70"></div>
                        </div>
                        <span class="number">70</span>
                     </div>
                     <div class="chart-row">
                        <span class="label">Laravel</span>
                        <div class="bar-wrap">
                           <div class="bar" data-value="65"></div>
                        </div>
                        <span class="number">65</span>
                     </div>
                     <div class="chart-row">
                        <span class="label">Zend 1</span>
                        <div class="bar-wrap">
                           <div class="bar" data-value="75"></div>
                        </div>
                        <span class="number">75</span>
                     </div>
                     <div class="chart-row">
                        <span class="label">CodeIgniter</span>
                        <div class="bar-wrap">
                           <div class="bar" data-value="60"></div>
                        </div>
                        <span class="number">60</span>
                     </div>
                     <div class="chart-row">
                        <span class="label">NodeJS</span>
                        <div class="bar-wrap">
                           <div class="bar" data-value="40"></div>
                        </div>
                        <span class="number">40</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="column pure-u-1 pure-u-lg-1-2">
               <div class="chart-wrap">
                  <div class="chart-title">
                     Frontend/Mobile
                  </div>
                  <div id="chart-frontend" class="chart bars-horizontal brand-primary">

                     <div class="chart-row">
                        <span class="label">Javascript</span>
                        <div class="bar-wrap">
                           <div class="bar" data-value="70"></div>
                        </div>
                        <span class="number">70</span>
                     </div>
                     <div class="chart-row">
                        <span class="label">HTML/CSS</span>
                        <div class="bar-wrap">
                           <div class="bar" data-value="65"></div>
                        </div>
                        <span class="number">65</span>
                     </div>
                     <div class="chart-row">
                        <span class="label">Objective-C</span>
                        <div class="bar-wrap">
                           <div class="bar" data-value="55"></div>
                        </div>
                        <span class="number">55</span>
                     </div>
                     <div class="chart-row">
                        <span class="label">jQuery</span>
                        <div class="bar-wrap">
                           <div class="bar" data-value="80"></div>
                        </div>
                        <span class="number">80</span>
                     </div>
                     <div class="chart-row">
                        <span class="label">Swift</span>
                        <div class="bar-wrap">
                           <div class="bar" data-value="50"></div>
                        </div>
                        <span class="number">50</span>
                     </div>
                     <div class="chart-row">
                        <span class="label">Bootstrap</span>
                        <div class="bar-wrap">
                           <div class="bar" data-value="60"></div>
                        </div>
                        <span class="number">60</span>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <hr>
         <section id="work" class="row pure-g nav-section">
            <div class="column pure-u-1">
               <h3>Work I've Done</h3>
            </div>
         </section>
         <section class="row pure-g">
            <?php
               $portfolio = get_portfolio();
               foreach ($portfolio as $project) {
                 //include($phpPath . '/views/portfolio-item.php');
                 include($phpPath . 'app/views/partials/gallery-item.php');
               }
               ?>
         </section>
         <section class="row container">
            <div class="contact-bar pure-g">
               <div class="pure-u-1 pure-u-lg-4-5 container">
                  <span class="message">Send me an email about your project and I will prepare a detailed PDF portfolio with relevant work samples.</span
                     >
               </div>
               <div class="pure-u-1 pure-u-lg-1-5 mail-button">
                  <a href="mailto:david@davidlobo.co.uk" target="_blank" class="email pure-button" title="Email David Lobo (david@davidlobo.co.uk)" role="button">EMAIL</a>
               </div>
            </div>
         </section>
      </main>
      <footer>
         <section class="row">
            <p>© David Lobo</p>
            <p><a target="_blank" href="mailto:david@davidlobo.co.uk" title="Email David Lobo (david@davidlobo.co.uk)">david@davidlobo.co.uk</a></p>
         </section>
      </footer>
      <script></script>
   </body>
</html>
