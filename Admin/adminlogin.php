<?php
    require_once("Database.php");
    $db = new Database();
    $db->DeleteOldReservation();
?>
<!doctype html>
<html>
    <head>
        <title>Admin Login</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        
        <link rel="stylesheet" href= "css/style.css">        
        <script src="jquery.js"></script>
        
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid vh-100 d-flex position-relative align-items-center justify-content-center">
            <form class="form px-5 py-4 rounded" data-aos="zoom-in" action="do_adminlogin.php" method="post">
                <h2 class="text-center display-5" style="color:white;">Admin Log In</h2>
                <div class="my-4 form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" required>
                </div>
                <div class="my-4 form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
                </div>
                <?php
                    if(isset($_GET['rid'])){
                        $id = $_GET['rid'];
                        if($id == 20){
                            echo "<div class=\"alert alert-danger alert-dismissible fade show\" id=\"email-alert\" role=\"alert\">
                                <strong>Login Failed! </strong> Incorrect Email or Password.
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>";
                        }

                        else if($id == 123){
                                echo "<div class=\"alert alert-success text-center alert-dismissible fade show\" id=\"email-alert\" role=\"alert\">
                                        <strong>Logout Successfull!</strong>
                                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                                    </div>"
                                    ;
                        }
                    }
                ?>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary rounded-pill px-3 fw-500">Log In</button>  
                </div>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init({
                duration: 500
            });
        </script>
    </body>
</html>
