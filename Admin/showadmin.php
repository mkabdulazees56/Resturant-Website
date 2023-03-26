<!doctype html>
<html>
    <head>
        <title>Admin Panel</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        
        <!-- <link rel="stylesheet" href= "css/style.css">         -->
        <script src="jquery.js"></script>
        
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    </head>
    <body>    
        <div class="container-fluid home align-items-center">
            <div class="container mb-5">
                <nav class="navbar bg-light fixed-top" style="box-shadow: 0 0 30px rgb(0 0 0 / 20%);">
                    <div class="container">
                        <a class="navbar-brand logo" href="showadmin.php"><strong>Admin Profile<span style="color:red;">.</strong></span></a>
                        <form action="do_logout.php" method="post">
                            <a href="showadmin.php"><button class="btn btn-danger rounded-pill mx-3" type="submit"></i> Logout <i class="fa-solid fa-right-from-bracket"></i></button></a>
                        </form>
                    </div>
                </nav>  
            </div>
            <h2 class="table-heading text-center my-5 display-5">Your Profile</h2>
            <?php
                if(isset($_GET['rid'])){
                    $id = $_GET['rid'];
                    if($id == 1){
                        echo "<div class=\"container mb-5 p-0 alert alert-warning alert-dismissible fade show\" id=\"email-alert\" role=\"alert\">
                            <strong>Deletion Failed! </strong> Atleast One Account Must be Exist.
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>";
                    }
                }
            ?>  
            <table class="table table-bordered table-light text-center" data-aos="fade-up" style="box-shadow: 0 0 30px rgb(0 0 0 / 12%);">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    require_once("Database.php");
                    $db = new Database();

                    if(isset($_COOKIE['email']) && isset($_COOKIE['password'])){
                        $email = $_COOKIE['email'];
                        $password = $_COOKIE['password'];
                        
                        $data = $db->ShowAdminData($email, $password);
                        foreach($data as $row){
                            echo '<tr>';
                            echo '<td>'. $row['id']. '</td>';
                            echo '<td>'. $row['first_name']. '</td>';
                            echo '<td>'. $row['last_name']. '</td>';
                            echo '<td>'. $row['email']. '</td>';
                            echo '</tr>';
                        } 
                    }
                    else{
                        header('Location: adminlogin.php');
                    }
                    ?>
                </tbody>
            </table>  
        </div>    
        <div class="row mt-5">        
                <div class="col-md-2 text-center my-2">
                    <a href="adminsignup.php"><button class="btn btn-warning rounded-pill" type="submit">Add Admin <i class="fa-solid fa-user-plus"></i></button></a>
                </div>
                <div class="col-md-2 text-center my-2">
                    <a href="adminupdate.php"><button class="btn btn-success rounded-pill" type="submit">Update Info <i class="fa-solid fa-pen"></i></button></a>                        
                </div>
                <div class="col-md-3 text-center my-2">
                    <a href="changepassword.php"><button class="btn btn-primary rounded-pill" type="submit">Change Password <i class="fa-solid fa-lock"></i></button></a>
                </div>
                <div class="col-md-3 text-center my-2">
                    <a href="admindelete.php"><button class="btn btn-danger rounded-pill" type="submit">Delete Account <i class="fa-solid fa-trash"></i></button></a>
                </div>
                <div class="col-md-2 text-center my-2">
                    <a href="adminpanel.php"><button class="btn btn-outline-primary px-5 rounded-pill" type="submit"><i class="fa-solid fa-arrow-left"></i> Back</button></a>
                </div>
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
