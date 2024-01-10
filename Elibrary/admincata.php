<?php
require('dbcon.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="notification.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        /* 
        body{
           
           background-size: 120%;
        } */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100%;

        }

        .btn1 {
            margin: 50px;
            width: 510px;
            height: 310px;
            font-size: 32px;
            font-weight: 500;
            padding: 20px;
            width: 350px;
            border-radius: 50px;
            border: none;
            cursor: pointer;
            background: #ebeef1;
            color: black;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
        }

        .btn1:hover {
            transform: scale(1.2);
            /* z-index: 1.2; */
            color: white;
            background-color: black;
        }

        nav {
            display: flex;
            font-size: 1rem;
            background-color: #032f4dbf;
            height: 5rem;
            align-items: center;
        }

        nav img {
            height: 3.5rem;
            margin: 8px 30px;
        }

        nav h1 {
            margin: 20px 0px;
            font-size: 30px;
        }
    </style>
</head>

<body>
    <main>
        <div>
            <nav>
                <div class="dropdown">
                    <a class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img style="border-radius:50%"; src="./icons/avatar.png"></a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="admindashboard.php">Home</a></li>
                        <li><a class="dropdown-item" href="admincata.php">Catagory</a></li>
                        <li><a class="dropdown-item" href="useradmin.php">Users</a></li>
                        <li><a class="dropdown-item" href="comments.php">Comments</a></li>
                        <li><a class="dropdown-item" href="changepass.php">Change Password</a></li>
                        <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
                    </ul>
                </div>
                <h1>Admin</h1>
         
            </nav>
        </div>
        <div class="container">
            <a href="adminpage2.php"><button class="btn1" name="bookadd">Add New Book</button>
            <a href="adminpage1.php"><button class="btn1" name="bookview">View Books</button>
            

        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>