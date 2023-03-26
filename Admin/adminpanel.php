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
        
        <script src="jquery.js"></script>
        <style>
            .nav-item a{
                margin: 0 10px;
                padding: 1px 0;
                font-size: 20px;
                color: #37373f;
            }
            .nav-item a:hover, .navbar ul li a:hover{
                color: #ce1212;
                cursor: pointer;
            }
            .nav li .active{
            font-size: 20px;
            border-bottom: #ce1212 2px solid;
            font-weight: 600;
            color: #ce1212;
            }
        </style>
        
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    </head>
    <body>    
        <div class="container mb-5">
            <nav class="navbar bg-light fixed-top" style="box-shadow: 0 0 30px rgb(0 0 0 / 20%);">
                <div class="container">
                    <a class="navbar-brand logo" href="adminpanel.php">Admin Panel<span style="color:red;">.</span></a>
                    <a href="showadmin.php"><button class="btn btn-danger rounded-pill mx-3" type="submit"><i class="fa-solid fa-user"> </i> Profile</button></a>
                </div>
            </nav>  
        </div>
        <div class="container mb-5"style="margin-top: 100px;">
            <?php
                if(!isset($_COOKIE['loggedin']))
                    header('Location:adminlogin.php');
                else
                    if(isset($_GET['rid'])){
                        $id = $_GET['rid'];
                        if($id == 1){
                            echo "<div class=\"alert alert-success alert-dismissible fade show\" id=\"email-alert\" role=\"alert\">
                                    <strong>Welcome To Admin Panel!</strong> Successfully Signed Up.
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                                </div>";
                        }
                        else if($id == 10){
                            echo "<div class=\"alert alert-success alert-dismissible fade show\" id=\"email-alert\" role=\"alert\">
                                    <strong>Welcome To Admin Panel!</strong> Successfully Logged In.
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                                </div>";
                        }
                    }            
            ?>
        </div>
        <div class="container">
            <ul class="nav d-flex justify-content-center mb-5">
                <li class="nav-item">
                    <a class="nav-link active display-3" id="booking" aria-current="page">Booked Tables</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link display-3" id="message">Messages</a>
                </li>
            </ul>
            <div class="container-fluid home mb-5 align-items-center">
                <!-- <h2 class="table-heading text-center mb-5 display-5">Booked Tables</h2> -->
                <table class="table table-bordered table-light" style="box-shadow: 0 0 30px rgb(0 0 0 / 12%);">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Date</th>
                            <th scope="col">#People</th>
                            <th scope="col">Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        require_once("Database.php");
                        $db = new Database();

                        $data = $db->ShowBookedTables();
                        foreach($data as $row){
                            echo '<tr>';
                            echo '<td>'. $row['id']. '</td>';
                            echo '<td>'. $row['name']. '</td>';
                            echo '<td>'. $row['email']. '</td>';
                            echo '<td>'. $row['phone']. '</td>';
                            echo '<td>'. $row['date']. '</td>';
                            echo '<td>'. $row['no_people']. '</td>';
                            echo '<td>'. $row['message']. '</td>';
                            echo '</tr>';
                        } ?>
                    </tbody>
                </table>
            </div>    

            <div class="container-fluid message-table my-5 align-items-center">
                <!-- <h2 class="table-heading text-center mb-5 display-5">Messages</h2> -->
                <table class="table table-bordered table-light" style="box-shadow: 0 0 30px rgb(0 0 0 / 12%);">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        require_once("Database.php");
                        $db = new Database();

                        $data = $db->ShowMessages();
                        foreach($data as $row){
                            echo '<tr>';
                            echo '<td>'. $row['id']. '</td>';
                            echo '<td>'. $row['name']. '</td>';
                            echo '<td>'. $row['email']. '</td>';
                            echo '<td>'. $row['subject']. '</td>';
                            echo '<td>'. $row['message']. '</td>';
                            echo '</tr>';
                        } ?>
                    </tbody>
                </table>
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
