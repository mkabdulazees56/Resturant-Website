<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Restaurant</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        
        <script src="assets/jquery/jquery.js"></script>
        <link rel="stylesheet" href= "assets/css/style.css">

        <!-- owl carousel -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    </head>
    <body>  

<!-- header -->
        <div class="container-fluid home" id="home">
            <nav class="navbar navbar-expand-lg fixed-top">
                <div class="container">
                    <a class="navbar-brand logo" href="index.php">Restaurent<span style="color:red;">.</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item ">
                                <a class="nav-link active" aria-current="page" href="#home">Home</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#about">About Us</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#menu">Menu</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#events">Events</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#chefs">Chefs</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#gallery">Gallery</a>
                            </li>
                            
                            <li class="nav-item ">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>
                        </ul>
                        <a href="#book-table"><button class="btn btn-danger rounded-pill" type="submit">Book a Table</button></a>
                    </div>
                </div>
            </nav>
        </div>    
<!-- hero -->
        <div class="container-fluid hero p-5 text-center text-lg-start align-items-center bg-light">
            <div class="row flex-lg-row-reverse align-items-center d-flex justify-content-center g-5 p-5">
                <div class="col-sm-8 col-lg-6" data-aos="zoom-out">
                    <div class="p-5">
                        <img src="assets/img/hero-img.png" class="img-fluid aos-init aos-animate" id="hero-img" alt="Image" data-aos="zoom-out" data-aos-delay="300">
                    </div>    
                </div>
                <div class="col-lg-6" data-aos="fade-up">
                    <h2 class="">Enjoy Your Healthy <br> Delicious Food</h2>
                    <p class="lead">Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</p>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#book-table"><button type="button" class="btn btn-danger rounded-pill btn-md me-md-2">Book a Table</button></a>
                        <a href=""><button type="button" href="#book-table" class="btn btn-outline-danger rounded-pill btn-md outline">Watch a Vedio</button></a>
                    </div>
                </div>
            </div>
        </div>
<!-- About Us Page -->
        <div class="container about py-4" id="about" data-aos="fade-up">
            <div class="about-header text-center">
                <h2>About Us</h2>
                <p>Learn More <span>About Us</span></p>
            </div>
            <div class="container">

                <div class="row">
                    <div class="col-lg-7 col-sm-12 position-relative about-img">
                        <div class="about-call position-absolute m-5 bg-light rounded p-3">
                            <h4>Book a Table</h4>
                            <p>+94 123456789</p>
                            </div>
                            <img src="assets/img/about.jpg" class="w-100" alt="bg">
                        </div>
                        <div class="col-lg-5 col-sm-12 text-justify">
                            <p><strong>Restaurant<span style="color:red;">.</span></strong> is a locally and family owned business that was founded in 2006. 
                            We're dedicated to creating wonderful dish surprises that you'll absolutely love. 
                            When you visit our shop, you won't believe your eyes with the incredible range of options that are available with us. 
                            <br><br>Our dishes are our passion. Without wonderful customers like you, our restaurant would never survive. 
                            That's why we're sure to say "thank you" to everyone who gives us their business and support. 
                            We're extremely thankful for our loyal customers and their love never falls short.
                            <br><br><p>Restaurant<span style="color:red;">.</span> where you'll always be treated like family. 
                            Warm smiles and welcome greetings are our number one guarantee. Carryout and booking table options are available. 
                            Our dishes taste as good as they look!</p>
                        </div> 
                    </div>
                </div>
            </div>
        </div>

<!-- Menu Page -->
        <div class="container-fluid menu bg-light py-4"id="menu" data-aos="fade-up">
            <div class="menu-header text-center">
                <h2>our menu</h2>
                <p>Check Our <span>Yummy Menu</span></p>
            </div>
            <div class="container">
                <ul class="nav d-flex justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" id="starter" aria-current="page">Starters</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" id="bfast">Breakfast</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" id="lunch">Lunch</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" id="dinner">Dinner</a>
                    </li>
                </ul>
                <div class="container">    
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 my-4 text-center ">
                            <div class="card p-4 border-0 bg-light">
                                <img src="assets/img/menu/menu-item-1.png" id="img-1" class="card-img-top" href="assets/img/menu/menu-item-1.png" data-aos="fade-up" data-aos-duration="1200" alt="">                               
                                <div class="card-body" data-aos="fade-up">
                                    <h3 class="card-title">Card title</h3>
                                    <p class="card-text">Some quick example text to build.</p>
                                    <h3><span>$585</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 my-4 text-center" >
                            <div class="card p-4 border-0 bg-light">
                                <img src="assets/img/menu/menu-item-2.png" id="img-2" class="card-img-top" href="assets/img/menu/menu-item-2.png" data-aos="fade-up" data-aos-duration="1200" alt="">                                
                                <div class="card-body" data-aos="fade-up">
                                    <h3 class="card-title">Card title</h3>
                                    <p class="card-text">Some quick example text to build.</p>
                                    <h3><span>$585</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 my-4 text-center">
                            <div class="card p-4 border-0 bg-light">
                                <img src="assets/img/menu/menu-item-3.png" id="img-3" class="card-img-top" href="assets/img/menu/menu-item-3.png" data-aos="fade-up" data-aos-duration="1200" alt="">                                
                                <div class="card-body" data-aos="fade-up">
                                    <h3 class="card-title">Card title</h3>
                                    <p class="card-text">Some quick example text to build.</p>
                                    <h3><span>$585</span></h3>
                                </div>
                            </div>    
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 my-4 text-center">
                            <div class="card p-4 border-0 bg-light">
                                <img src="assets/img/menu/menu-item-4.png" id="img-4" class="card-img-top" href="assets/img/menu/menu-item-4.png" data-aos="fade-up" data-aos-duration="1200" alt="">                                
                                <div class="card-body" data-aos="fade-up">
                                    <h3 class="card-title">Card title</h3>
                                    <p class="card-text">Some quick example text to build.</p>
                                    <h3><span>$585</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 my-4 text-center">
                            <div class="card p-4 border-0 bg-light">
                                <img src="assets/img/menu/menu-item-5.png" id="img-5" class="card-img-top" href="assets/img/menu/menu-item-5.png" data-aos="fade-up" data-aos-duration="1200" alt="">                                
                                <div class="card-body" data-aos="fade-up">
                                    <h3 class="card-title">Card title</h3>
                                    <p class="card-text">Some quick example text to build.</p>
                                    <h3><span>$585</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 my-4 text-center">
                            <div class="card p-4 border-0 bg-light">
                                <img src="assets/img/menu/menu-item-6.png" id="img-6" class="card-img-top" href="assets/img/menu/menu-item-6.png" data-aos="fade-up" data-aos-duration="1200" alt="">                                
                                <div class="card-body" data-aos="fade-up">
                                    <h3 class="card-title">Card title</h3>
                                    <p class="card-text">Some quick example text to build.</p>
                                    <h3><span>$585</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- Events Page -->
        <div class="container-fluid events py-4" id="events" data-aos="fade-up">
            <div class="events-header text-center">
                <h2>Events</h2>
                <p>Share <span>your moments </span>in our restaurant</p>
            </div>
            <div class="container-fluid my-5">
                <div class="owl-carousel owl-theme" data-aos="zoom-in">
                    <div class="item">
                        <div class="card">
                            <img src="assets/img/events-1.jpg" class="" alt="Event Images">
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <img src="assets/img/events-2.jpg" class="" alt="Event Images">
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <img src="assets/img/events-3.jpg" class="" alt="Event Images">
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <img src="assets/img/events-1.jpg" class="" alt="Event Images">
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <img src="assets/img/events-2.jpg" class="" alt="Event Images">
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- Chefs Page -->
        <div class="container-fluid chefs bg-light py-4" id="chefs">
            <div class="chefs-header text-center">
                <h2>Chefs</h2>
                <p>our <span>proffesional</span> chefs</p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-12 my-5" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" >
                        <div class="card border-0 m-2">
                            <img src="assets/img/chefs/chefs-1.jpg" class="card-img-top img-fluid" href="assets/img/chefs/chefs-1.jpg" alt="chef images">                                
                            <div class="social-icons row position-absolute my-2 text-end w-100">
                                <a href="https://twitter.com/i/flow/login" target="blank"><i class="fa-brands m-2 fa-twitter"></i></a>
                                <a href="https://www.facebook.com/" target="blank"><i class="fa-brands m-2 fa-facebook"></i></a>
                                <a href="https://www.instagram.com/accounts/login/" target="blank"><i class="fa-brands m-2 fa-instagram"></i></a>
                                <a href="https://www.linkedin.com/login/" target="blank"><i class="fa-brands m-2 fa-linkedin"></i></a>
                            </div>
                            <div class="card-body text-center" data-aos="fade-up">
                                <h4 class="card-title">Walter White</h4>
                                <p class="card-text text-muted"><span>Master Chef</span></p>
                                <p class="card-text">Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
                            </div>   
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 my-5" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                        <div class="card border-0 m-2">
                            <img src="assets/img/chefs/chefs-2.jpg" class="card-img-top" href="assets/img/chefs/chefs-2.jpg" alt="chef images">                                
                            <div class="social-icons row position-absolute my-2 text-end w-100">
                                <a href="https://twitter.com/i/flow/login" target="blank"><i class="fa-brands m-2 fa-twitter"></i></a>
                                <a href="https://www.facebook.com/" target="blank"><i class="fa-brands m-2 fa-facebook"></i></a>
                                <a href="https://www.instagram.com/accounts/login/" target="blank"><i class="fa-brands m-2 fa-instagram"></i></a>
                                <a href="https://www.linkedin.com/login/" target="blank"><i class="fa-brands m-2 fa-linkedin"></i></a>
                            </div>
                            <div class="card-body text-center" data-aos="fade-up">
                                <h4 class="card-title">Sarah Johnson</h4>
                                <p class="card-text text-muted"><span>Patissier</span></p>
                                <p class="card-text">Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis. Voluptate sed quas reiciendis animi neque sapiente.</p>
                            </div>   
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 my-5" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                        <div class="card border-0 m-2">
                            <img src="assets/img/chefs/chefs-3.jpg" class="card-img-top" href="assets/img/chefs/chefs-3.jpg" alt="chef images">                                
                            <div class="social-icons row position-absolute my-2 text-end w-100">
                                <a href="https://twitter.com/i/flow/login" target="blank"><i class="fa-brands m-2 fa-twitter"></i></a>
                                <a href="https://www.facebook.com/" target="blank"><i class="fa-brands m-2 fa-facebook"></i></a>
                                <a href="https://www.instagram.com/accounts/login/" target="blank"><i class="fa-brands m-2 fa-instagram"></i></a>
                                <a href="https://www.linkedin.com/login/" target="blank"><i class="fa-brands m-2 fa-linkedin"></i></a>
                            </div>
                            <div class="card-body text-center" data-aos="fade-up">
                                <h4 class="card-title">William Anderson</h4>
                                <p class="card-text text-muted"><span>Cook</span></p>
                                <p class="card-text">Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut architecto porro aspernatur molestiae modi.</p>
                            </div>   
                        </div>
                    </div>
                </div>                
            </div>
        </div>

<!-- Book a Table-->
        <div class="container-fluid book-table py-4 position-relative" id="book-table" data-aos="fade-up">
            <div class="book-table-header text-center">
                <h2>Book A Table</h2>
                <p>book <span>your stay</span> with us</p>
            </div>
            <div class="container book-table-main">
                <div class="row bg-light align-items-center">
                    <div class="col-lg-4 col-sm-12 res-img">
                        <img class="w-100" src="assets/img/reservation.jpg" alt="Reservation Images">
                    </div>
                    <div class="col-lg-8 col-sm-12" >
                        <form action="do_booktable.php" method="post">
                            <div class="row">
                                <div class="col-lg-4 my-3 col-sm-12 form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control border-primary" id="name" name="name" placeholder="Enter Name" required>
                                </div>
                                <div class="col-lg-4 my-3 col-sm-12 form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control border-primary" id="email" name="email"  aria-describedby="emailHelp" placeholder="Enter Email">
                                </div>
                                <div class="col-lg-4 my-3 col-sm-12 form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control border-primary" id="phone" name="phone" placeholder="Enter Phone" required>
                                </div>
                                <div class="col-lg-4 my-3 col-sm-12 form-group">
                                    <label for="date">Date</label>
                                    <input type="datetime-local" class="form-control border-primary" id="date" name="date" placeholder="Date" required>
                                </div>
                                <div class="col-lg-4 my-3 col-sm-12 form-group">
                                    <label for="numPeople">No. of People</label>
                                    <input type="number" class="form-control border-primary" id="numPeople" min="11:00:00" max="22:00:00" name="numPeople" placeholder="Number of People" value="1" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Massage</label>
                                <textarea class="form-control border-primary" id="message" name="message" rows="3"></textarea>
                            </div>
                            <div class="my-4 d-flex justify-content-center">
                                <button type="submit" class="btn btn-danger btn-booking-submit rounded-pill px-5 fw-bold">Submit</button>  
                            </div>
                        </form>
                    </div>
                    <?php
                    if(isset($_GET['rid'])){
                        $id = $_GET['rid'];
                        if($id == 1){
                            echo "
                                <div class=\"container pop-up-box d-flex justify-content-center mt-5\">
                                    <div class=\"pop-up text-center p-2\">
                                        <img src=\"assets/logos/tick1.png\" class=\"tick-img\" style=\"width:50%;\" alt=\"tick-logo\">
                                        <div class=\"pop-up-body\">
                                            <h3 class=\"pop-up-title\">Thank You!</h3>
                                            <p class=\"pop-up-desc\">Your details have been submitted succesfully.</p>
                                            <div class=\"my-4 d-flex justify-content-center\">
                                                <a href=\"index.php\"><button type=\"submit\" class=\"btn btn-danger booking-confirmation rounded-pill px-5 fw-bold\">Ok</button></a>  
                                            </div>
                                        </div>
                                    </div>
                                </div>";
                        }
                        else if($id == 2){
                            echo "
                                <div class=\"container pop-up-box d-flex justify-content-center mt-5\">
                                    <div class=\"pop-up text-center py-5 py-3\">
                                        <img src=\"assets/logos/cross.png\" class=\"tick-img w-25\"  alt=\"tick-logo\">
                                        <div class=\"pop-up-body\">
                                            <h3 class=\"pop-up-title\">Ooops!</h3>
                                            <p class=\"pop-up-desc\">Something Went Wrong.<br>Try Again</p>
                                            <div class=\"mt-4 d-flex justify-content-center\">
                                                <a href=\"index.php\"><button type=\"submit\" class=\"btn btn-danger booking-confirmation rounded-pill px-5 fw-bold\">Ok</button></a>  
                                            </div>
                                        </div>
                                    </div>
                                </div>";
                        }
                        else if($id == 3){
                            echo "
                                <div class=\"container pop-up-box d-flex justify-content-center mt-5\">
                                    <div class=\"pop-up text-center py-5 py-3\">
                                        <img src=\"assets/logos/cross.png\" class=\"tick-img w-25\"  alt=\"tick-logo\">
                                        <div class=\"pop-up-body\">
                                            <h3 class=\"pop-up-title\">Sorry!</h3>
                                            <p class=\"pop-up-desc\">All the tables are reserved at this time.<br>Tables will be available after 20 minutes.</p>
                                            <div class=\"mt-4 d-flex justify-content-center\">
                                                <a href=\"index.php\"><button type=\"submit\" class=\"btn btn-danger booking-confirmation rounded-pill px-5 fw-bold\">Ok</button></a>  
                                            </div>
                                        </div>
                                    </div>
                                </div>";
                        }      
                    }
                    ?>
                </div>
            </div>

        </div>

<!-- Gallery Page-->
        <div class="container-fluid gallery py-4 " id="gallery">
            <div class="gallery-header text-center">
                <h2>Gallery</h2>
                <p>check <span>our gallery</span></p>
            </div>
            <div class="container-fluid">
                <div class="owl-carousel owl-theme gallery-owl" data-aos="zoom-in">
                    <div class="item">
                        <div class="card">
                            <img src="assets/img/gallery/gallery-1.jpg" class="img-fluid" alt="Event Images">
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <img src="assets/img/gallery/gallery-2.jpg" class="img-fluid" alt="Event Images">
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <img src="assets/img/gallery/gallery-3.jpg" class="img-fluid" alt="Event Images">
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <img src="assets/img/gallery/gallery-4.jpg" class="img-fluid" alt="Event Images">
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <img src="assets/img/gallery/gallery-5.jpg" class="img-fluid" alt="Event Images">
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <img src="assets/img/gallery/gallery-6.jpg" class="img-fluid" alt="Event Images">
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <img src="assets/img/gallery/gallery-7.jpg" class="img-fluid" alt="Event Images">
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <img src="assets/img/gallery/gallery-8.jpg" class="img-fluid" alt="Event Images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- Contact us -->
        <div class="container-fluid contact Us py-4" id="contact" data-aos="fade-up">
            <div class="contact-header text-center">
                <h2>contact</h2>
                <p>need help? <span>contact us</span></p>
            </div>
            <div class="container  position-relative">
                <div id="map-container-google-1" class="z-depth-1-half map-container overflow-auto position-relative" style="height: 400px">
                    <iframe class="position-absolute w-100 h-100" src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <?php
                if(isset($_GET['rid'])){
                    $id = $_GET['rid'];
                    if($id == 1){
                        echo "
                            <div class=\"container pop-up-boxd-flex justify-content-center mt-5\">
                                <div class=\"pop-up text-center p-2\">
                                    <img src=\"assets/logos/tick1.png\" class=\"tick-img\" style=\"width:50%;\" alt=\"tick-logo\">
                                    <div class=\"pop-up-body\">
                                        <h3 class=\"pop-up-title\">Thank You!</h3>
                                        <p class=\"pop-up-desc\">Your details have been submitted succesfully.</p>
                                        <div class=\"my-4 d-flex justify-content-center\">
                                            <a href=\"index.php\"><button type=\"submit\" class=\"btn btn-danger booking-confirmation rounded-pill px-5 fw-bold\">Ok</button></a>  
                                        </div>
                                    </div>
                                </div>
                            </div>";
                    }
                    else if($id == 2){
                        echo "
                            <div class=\"container pop-up-box d-flex justify-content-center mt-5\">
                                <div class=\"pop-up text-center py-5 py-3\">
                                    <img src=\"assets/logos/cross.png\" class=\"tick-img w-25\"  alt=\"tick-logo\">
                                    <div class=\"pop-up-body\">
                                        <h3 class=\"pop-up-title\">Ooops!</h3>
                                        <p class=\"pop-up-desc\">Something Went Wrong.<br>Try Again</p>
                                        <div class=\"mt-4 d-flex justify-content-center\">
                                            <a href=\"index.php\"><button type=\"submit\" class=\"btn btn-danger booking-confirmation rounded-pill px-5 fw-bold\">Ok</button></a>  
                                        </div>
                                    </div>
                                </div>
                            </div>";
                    }
                }
            ?>
            </div>
            <div class="container contact-list " data-aos="fade-up">
                <div class="row justify-content-around">
                    <div class="col-lg-5 col-sm-12 bg-light mt-3">
                        <div class="row align-items-center">
                            <div class="col-sm-2 text-center">
                                <i class="fa-solid fa-location-dot"></i>                                
                            </div>
                            <div class="col-sm-10 pt-3">
                                <h4>Our Address</h4>
                                <p>D 42 J, Danagama, Mawanella</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-12 bg-light mt-3">
                        <div class="row align-items-center" >
                            <div class="col-sm-2 text-center">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="col-sm-10 pt-3 ">
                                <h4>Email Us</h4>
                                <P>restaurant@gmail.com</P>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-12 bg-light mt-3">
                        <div class="row align-items-center">
                            <div class="col-sm-2 text-center">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="col-sm-10 pt-3">
                                <h4>Call Us</h4>
                                <p>+94 012345578</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-12 bg-light mt-3">
                        <div class="row align-items-center">
                            <div class="col-sm-2 text-center">
                                <i class="fa-solid fa-clock"></i>
                            </div>
                            <div class="col-sm-10 pt-3">
                                <h4>Opening Hours</h4>
                                <p><strong>Mon-Sun:</strong> 11AM - 23PM; <strong>Friday:</strong> Closed</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <form class="form my-5 py-5 px-5" data-aos="fade-up" action="do_contactus.php" method="post">
                    <div class="row">
                        <div class="col-lg-6 my-4 col-sm-12 form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-lg-6 my-4 col-sm-12 form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                    </div>
                    <div class="my-4 form-group">
                        <label for="message">Massage</label>
                        <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                    </div>
                    <div class="my-4 d-flex justify-content-center">
                        <button type="submit" class="btn btn-danger rounded-pill px-4 py-2 fw-bold">Send Message</button>  
                    </div>
                </form>
            </div>
        </div>
<!-- footer         -->
        <div class="container-fluid footer bg-dark" data-aos="fade-up">
            <div class="container">
                <div class="row px-lg-5 py-5">
                    <div class="col-xl-3 col-lg-6 col-sm-12">
                        <div class="row">
                            <div class="col-sm-1">
                                <i class="fa-solid fa-location-dot"></i>                                
                            </div>
                            <div class="col-sm-11">
                                <h5>Address</h5>
                                <p>D 42 J, Danagama, Mawanella</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-12">
                        <div class="row">
                            <div class="col-sm-1">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="col-sm-11">
                                <h5>Reservations</h5>
                                <p><strong>Phone: </strong>+94 012345578<br><strong>Email: </strong>restaurant@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-12">
                        <div class="row">
                            <div class="col-sm-1">
                                <i class="fa-solid fa-clock"></i>
                            </div>
                            <div class="col-sm-11">
                                <h5>Opening Hours</h5>
                                <p><strong>Mon-Sun:</strong> 11AM - 23PM <strong>Friday:</strong> Closed</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-12">
                        <h5>Follow Us</h5>
                        <div class="row">
                            <div class="col-sm-1">
                            </div>
                            <div class="social-icons col-sm-11">
                                <i class="fa-brands m-2 fa-twitter"></i>
                                <i class="fa-brands m-2 fa-facebook"></i>
                                <i class="fa-brands m-2 fa-instagram"></i>
                                <i class="fa-brands m-2 fa-linkedin"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>

        <!-- owl carousel -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            AOS.init({
                duration: 1200
            });
        </script>
        <script type="text/javascript">
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:false,
                responsiveClass:true,
                center:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:5
                    }
                }
            })
        </script>
    </body>
</html>
