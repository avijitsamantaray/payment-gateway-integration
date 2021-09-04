<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Gateway Integration</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap');
        *{
            padding: 0;
            margin: 0;
            text-decoration: none;
         } 
        body{ 
            width: 100vw;
            height: 100vh;
            background-image: url('imgs/bg.png');
            background-size: 100% 100%;
            background-attachment: fixed;
            background-repeat: no-repeat;
            
            
        }
        .parent{
            position:absolute;
            width: 100vw;
            height: 100vh;
            background-color: rgba(55 12 79 / 71%);
        }
        .maindiv{
            width:100vw;
            margin: 0;
            position: absolute;
            top: 50%;
            -ms-transform: translatey(-50%);  
            transform: translatey(-50%);
        }
        .maindiv h1{
            color:white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-align:center;
            font-weight:bold;
        } 
        .donate a { 
            width:150px;
            
            font-size:20px;
            display:block;
            margin:10px auto; 
            font-weight: bold;
            background: #ea2c58;
            color: #fff;
            border: 1px solid #ea2c58;
            text-decoration: none;
            text-align: center;
            line-height:2;
        }
        .donate a:hover{
            background:rgba(0,0,0,0);
            list-style: none;
            text-decoration: none;
            color: #ea2c58;
        }
       a{
        text-decoration: none;
       }
    </style>
</head>
<body>
    <div class="parent">
   
   <?php include 'navbar.php'; ?>

    <!-- Container start -->
      <div class="maindiv"> 
        <h1>"An effort made for the happiness of others lifts us above ourselves."</h1> 
        <div class="donate">
        <a href="form.php">DONATE</a>
        </div>
      </div>
    <!-- Container end -->

    <!-- footer start -->
     <?php include 'footer.php' ?>
    <!-- footer end -->
    </div>
</body>
</html>
