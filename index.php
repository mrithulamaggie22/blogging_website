<?php include "connect.php"; ?>
<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "image_upload");
  if (!$db) {
  echo "Connection failed!";
  exit();
}
  
  
if (isset($_POST['submit'])) {
  
    $name=$_POST['name'];
    $email=$_POST['email'];
    $sub=$_POST['sub'];
    $msg=$_POST['msg'];

    $sql = "INSERT INTO feedback (name , email, sub , msg ) VALUES ('$name', '$email', '$sub' ,'$msg')";

    mysqli_query($db, $sql);
}

if (isset($_POST['comment'])) {
  
    $name=$_POST['name'];
    $msg=$_POST['msg'];

    $sql = "INSERT INTO comment (name ,  msg ) VALUES ('$name', '$msg')";

    mysqli_query($db, $sql);
}
?>
<!doctype html>
<html lang="en">

    <head>
        <title>Tom Blog</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
        <style type="text/css">
        
        </style>
    </head>

    <body>
        <header class="main_header">
            <div class="d-flex justify-content-center align-items-center flex-column py-5">
                <h1 class="text-uppercase main_heading">Tom Blog</h1>
                <p class="main_heading__para">Welcome to  <span class="text-capitalize bg-dark text-white py-2 px-3"> world of blog</span> </p>
            </div>
            <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#home">Home</a></li>
          <li><a class="nav-link scrollto" href="#blog">Blog</a></li>
          <li><a class="nav-link scrollto" href="https://theinternacademy.wordpress.com/">About</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
      </ul>
      </nav><!-- .navbar -->
                

            <!-- //the main image -->
            <section id="home">
            <div class="main_header__div d-flex align-items-start
        justify-content-center  flex-column shadow pl-5">
                <p>Tom Blog</p>
            
                <h2 class="animateWord">
                    <span>Create Your</span>
                    <div>
                      
                        <ul class="flip4">
                            <li> own blog </li>
                            <li> own design</li>
                            <li> own style</li>
                    
                        </ul>
                    </div>
                </h2>
                <button class="text-uppercase"><a href="http://localhost/b/create.php">Create Blog</a></button>

            </div>
        </header>
    </section>
        <!-- header ends -->
        <!-- two sided blog part starts -->

        <section id="blog">  
        <div class="container-fluid ">
            <div class="row ">
                <!-- to get the space form left and right -->
                <div class="col-xl-10  col-lg-10 col-md-12 col-11 mx-auto my-5">
                    <div class="row gx-5 mx-sm-auto">
                        <!-- left side of the blog  -->
                        <div class="col-lg-8 col-md-11 col-11 mx-auto">
                            <div class="row gy-5 ">
                                <div class="col-12 card p-4 shadow blog_left__div">
                                    <div class="d-flex justify-content-center align-items-center flex-column pt-3 pb-5 ">
                                        <h1 class="text-uppercase">I left my heart in the mountains</h1>
                                        <p class="blog_title"> <span class="font-weight-bold"> The mountains are good for soul, </span> -MALIK</p>
                                    </div>
                                    <figure class="right_side_img mb-5">
                                        <img src="images\1.jpg" height="200" width="600" class="img-fluid shadow">
                                    </figure>
                                    <p><span class="font-weight-bold">Tom blog</span> Welcomes, all of you to my world of blog.I have never in my life claimed to be an adventurer or outdoors lover – until I started hiking in the mountains. With the lovely, lush green forests and foothills, the tantalizing teal lakes hidden away like a secret prize waiting to be found, and those stunning sky-high jagged peaks, it was love at first sight. But more than that, hiking in the mountains became an immediate passion because of the way it made me feel. I was able to just be the real me and connect with the version of myself that felt the most authentic and true.</p>
                                    <p>
                                        Being surrounded by the mountains has a powerful effect on something deeper. It’s as if being amidst something greater than ourselves, changes our perspective and insight on life and the things that really matter. Somehow without trying, you are able to confront your demons, re-evaluate your problems or your goals or your desires – you are able to widen your perspective and reflect on ‘the big picture’
                                    </p>
                                    <div class="d-flex justify-content-between left_div_btns">
                                        <div>
                                            <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>

                                            <script>
                                             function myFunction(x) {
                                              x.classList.toggle("fa-thumbs-down");
                                          }
                                              </script>
                                        </div>
                                        <div>
                                            <button class="center_div__comment" onclick="document.getElementById('comment').style.display='block'">Comments</button>
                                        </div>
                                        <div>
                                            <button style="right:100%;" class="left_div__reply" ><a href="https://www.linkedin.com/shareArticle?url=<URL>&title=<TITLE>&summary=<SUMMARY>&source=<SOURCE_URL>">Share</a></button>
                                        </div>
                                    </div>
                                    
                                </div>
                                <!-- 2nd topic  -->
                                <div class="col-12 card p-4 shadow blog_left__div">
                                    <div class="d-flex justify-content-center align-items-center flex-column pt-3 pb-5 ">
                                        <h1 class="text-uppercase">Five Famous Hollywood Football Fans</h1>
                                        <p class="blog_title"> <span class="font-weight-bold"> SPORTS FEATURES, </span> -MRITHULA</p>
                                    </div>
                                    <figure class="right_side_img mb-5">
                                        <img src="images\24.jpeg" height="430" width="600" class="img-fluid shadow">
                                    </figure>
                                    <p><span class="font-weight-bold">Tom Blog</span> Welcomes, all of you to my world of blog. Football without fans is nothing.

            Where is the excitement in watching a goal scored in an empty stadium? Sure, it kept us going over the last 18 months or so, but nothing replaces that euphoria of a stadium erupting in joy.</p><p>

            Television broadcasters tried to mimic the effect, but it was a poor substitute for the real thing.</p>

            <p>Fans and football go hand in hand throughout the world, and the biggest clubs have fans in all corners of the globe.</p>


             
            <p>Those fans often can’t get to games, although FourFourTwo reported that Tom Cruise managed to make the final of Euro 2020. He’s one of the lucky ones.</p>

            <p>Even during a normal season, fans of some of England’s biggest clubs cannot get to matches because of various commitments, even though they still support that team.</p>
                                   
                                    <div class="d-flex justify-content-between left_div_btns">
                                        <div>
                                            <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>

                                            <script>
                                             function myFunction(x) {
                                              x.classList.toggle("fa-thumbs-down");
                                          }
                                              </script>
                                        </div>
                                        <div>
                                            <button class="center_div__comment" onclick="document.getElementById('comment').style.display='block'">Comments</button>
                                        </div>
                                        <div>
                                            <button style="right:100%;" class="left_div__reply" ><a href="https://www.linkedin.com/shareArticle?url=<URL>&title=<TITLE>&summary=<SUMMARY>&source=<SOURCE_URL>">Share</a></button>
                                        </div>
                                    </div>
                                    
                                </div>
                                 <!-- 3nd topic  -->

                                <div class="col-12 card p-4 shadow blog_left__div">
                                    <div class="d-flex justify-content-center align-items-center flex-column pt-3 pb-5 ">
                                        <h1 class="text-uppercase">COVID 19 Vccine</h1>
                                        <p class="blog_title"> <span class="font-weight-bold"> Vaccinate Yourself, </span>-DHANUSH</p>
                                    </div>
                                    <figure class="right_side_img mb-5">
                                        <img src="images\26.jpeg" height="430" width="600" class="img-fluid shadow">
                                    </figure>
                                    <p><span class="font-weight-bold">Tom blog</span> Welcomes, all of you to my world of blog. Many people, including me, have experienced a sense of gratitude and relief after receiving the new COVID-19 mRNA vaccines. But all of us are also wondering how long the vaccines will remain protective against SARS-CoV-2, the coronavirus responsible for COVID-19.</p>

<p>Earlier this year, clinical trials of the Moderna and Pfizer-BioNTech vaccines indicated that both immunizations appeared to protect for at least six months. Now, a study in the journal Nature provides some hopeful news that these mRNA vaccines may be protective even longer [1].</p>

<p>In the new study, researchers monitored key immune cells in the lymph nodes of a group of people who received both doses of the Pfizer-BioNTech mRNA vaccine. The work consistently found hallmarks of a strong, persistent immune response against SARS-CoV-2 that could be protective for years to come.</p>

<p>Though more research is needed, the findings add evidence that people who received mRNA COVID-19 vaccines may not need an additional “booster” shot for quite some time, unless SARS-CoV-2 evolves into new forms, or variants, that can evade this vaccine-induced immunity. That’s why it remains so critical that more Americans get vaccinated not only to protect themselves and their loved ones, but to help stop the virus’s spread in their communities and thereby reduce its ability to mutate.</p>
                                    
                                    <div class="d-flex justify-content-between left_div_btns">
                                        <div>
                                            <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>

                                            <script>
                                             function myFunction(x) {
                                              x.classList.toggle("fa-thumbs-down");
                                          }
                                              </script>
                                        </div>
                                        <div>
                                            <button class="center_div__comment" onclick="document.getElementById('comment').style.display='block'">Comments</button>
                                        </div>
                                        <div>
                                            <button style="right:100%;" class="left_div__reply" ><a href="https://www.linkedin.com/shareArticle?url=<URL>&title=<TITLE>&summary=<SUMMARY>&source=<SOURCE_URL>">Share</a></button>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <!-- 4rd topic -->
                                <div class="col-12 card p-4 shadow blog_left__div">
                                    <div class="d-flex justify-content-center align-items-center flex-column pt-3 pb-5 ">
                                        <h1 class="text-uppercase">Glowing Plants</h1>
                                        <p class="blog_title"> <span class="font-weight-bold"> Grow Up </span>-ERA</p>
                                    </div>
                                    <figure class="right_side_img mb-5">
                                        <img src="images\11.jpg" height="350" width="600" class="img-fluid shadow">
                                    </figure>
                                    <p><span class="font-weight-bold">Tom Blog</span> Welcomes, all of you to my world of blog.The concept of Glowing Plants is gaining more popularity on internet and among scientific communities in the last couple of months. In this regard Indian Botanists Blog-o-Journal also published an article, Will 'Glowing Plants' Replace Street Lights? recently. A group of biologists under the project ‘Glowing Plants’, aims to create a glow-in-the-dark plant using synthetic biology techniques. Will this replace the traditional street lights with glowing plants and trees in dark in near future? Rabish Chandra member of Indian Botanists Blog-o-Journal spoke to Antony Evans, Project Manager, Glowing Plant Project to understand about their ambitious project. </p>
                                    
                                    <div class="d-flex justify-content-between left_div_btns">
                                        <div>
                                            <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>

                                            <script>
                                             function myFunction(x) {
                                              x.classList.toggle("fa-thumbs-down");
                                          }
                                              </script>
                                        </div>
                                        <div>
                                            <button class="center_div__comment" onclick="document.getElementById('comment').style.display='block'">Comments</button>
                                        </div>
                                    
                                        <div>
                                            <button style="right:100%;" class="left_div__reply" ><a href="https://www.linkedin.com/shareArticle?url=<URL>&title=<TITLE>&summary=<SUMMARY>&source=<SOURCE_URL>">Share</a></button>
                                        </div>
                                    </div>
                                    
                                </div>

                                 <!--  topic  -->

                                <?php 
                                    $projects = array();
                                    while ($row =  mysqli_fetch_array($result))
                                    {
                                        $projects[] = $row;
                                    }
                                    foreach ($projects as $row)
                                    {
                                ?>
                                <div class="col-12 card p-4 shadow blog_left__div">
                                    <div class="d-flex justify-content-center align-items-center flex-column pt-3 pb-5 ">
                                

                                        <h1 class="text-uppercase"><?php echo $row['title'];?></h1>
                                        <p class="blog_title"> <span class="font-weight-bold"><?php echo $row['subtitle'];?> <?php echo "-"; ?></span><?php echo $row['user'];?></p>
                                        
                                         
                                            <?php echo "<div id='img_div'>";?>

                                            <?php echo "<img src='images/" .$row['image']."' height='430' width='600'/ >";?>
                                             <p ><spam class="font-weight-bold">Tom Blog</span> Welcomes, all of you to my world of blog.<?php echo $row['image_text'];?></p>
                                            <?php echo "</div>";?>
                                            <section>
                                            <div class="d-flex justify-content-between left_div_btns">
                                            <div>
                                            <i onclick="myFunction(this)"  class="fa fa-thumbs-up"></i>

                                            <script>
                                             function myFunction(x) {
                                              x.classList.toggle("fa-thumbs-down");
                                          }
                                              </script>
                                            </div>
                                        <div>
                                            <button class="center_div__comment" onclick="document.getElementById('comment').style.display='block'">Comments</button>
                                        </div>
                                        <div>
                                            <button style="right:100%;" class="left_div__reply" ><a href="https://www.linkedin.com/shareArticle?url=<URL>&title=<TITLE>&summary=<SUMMARY>&source=<SOURCE_URL>">Share</a></button>
                                        </div>


                                                </div>
                                            </section>
                                    </div>
                                </div>
                                <?php 
                                        }
                                    ?>
                              <!-- comment-->
<div id="comment" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-black w3-display-container">
      <span onclick="document.getElementById('comment').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>COMMENT</h1>
    </div>
    <div class="w3-container">
      <h4>Your comments are valuable!.</h4>
      <form action="#blog" target="_blank" method="POST">
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="name"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message" name="msg" required ></p>
        <p><button class="w3-button w3-black" type="submit" padding="5px" name="comment">COMMENT</button></p>
      </form>
    </div>
  </div>
</div>
                    </div>
                </div>
            </div>
        </div>
        
        <br><br><br><br><br>
        </section>
                                            
                                 
                                 
                                 <br><br><br>


    <section id="contact">
        <div class="col-12 card p-4 shadow blog_left__div">
                                    <div class="d-flex justify-content-center align-items-center flex-column pt-3 pb-5 ">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <center><h3  class="text-uppercase">Contact Us</h3></center><br>
           <div class="container mb-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="container">
        <div class="form">
          <form action="index.php" method="POST" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group col-md-6 mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="sub" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="msg" rows="6" placeholder="Message" required></textarea>
            </div>

            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>

            <div class="text-center"><button type="submit" name="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    
  </div>
</div>

    
              
    </section><!-- End Contact Section -->

                      
                        
        <footer>
            <p class="text-center py-5 bg-light">copy rights<spam>❤</span><a href="https://theinternacademy.wordpress.com/">©The Intern Academy</a></p>
        </footer>
        <!-- Optional JavaScript -->
        <!-- Popper.js first, then Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
        
    
    </body>

</html>