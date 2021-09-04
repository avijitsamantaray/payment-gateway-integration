<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        *{
            padding: 0;
            margin: 0;
         } 
        body{ 
            width: 100vw;
            height: 100vh;
            background-image: url('imgs/bg.png');
            background-size: 100% 100%;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }
        form{ 
            background-color: rgba(0,0,0,0.7);
            height: 70vh;
            margin: 50px auto;
            padding: 30px
        }
        form label{
            color:white;
        }
        .ani{
            font-size: 3vw;
            background: url("imgs\\back.jpg");
            background-size: 40%;
            background-position: 50% 50%;
            -webkit-background-clip: text;
            color: rgba(0,0,0,0.08);
            animation: zoomout 6s  ease-in-out  infinite alternate;
        }
        .parent{
            position:absolute;
            width: 100vw;
            height: 110vh;
            background-color: rgba(55 12 79 / 71%);
        }
        @keyframes zoomout {
        from {
        background-size: 40%;
        }
        to {
        background-size: 10%;
  }
}
    </style>
</head>
<body>
    <div class="parent">
    <!-- navbar start -->
    <?php include 'navbar.php'; ?>
    <!-- navbar end -->

    <!-- container start -->
    <div class="container"> 
        <h1 class="text-center ani">A STEP TOWARDS HAPPINESS</h1>
        <form action="request.php" method="post">
          <div class="form-group col-md-auto">
              <label for="name">Name : </label> <br>
              <input type="text" name="name" id="name" class="form-control" style="border: 1px solid #ea2c58" required>

              <br>

              <label for="email">Email : </label><br>
              <input type="text" name="email" id="email" class="form-control " style="border: 1px solid #ea2c58" required>

              <br>

              <label for="phn_no">Contact No. : </label><br>
              <input type="text" name="phn_no" id="phn_no" class="form-control" style="border: 1px solid #ea2c58" required>

              <br>

              <label for="amount">Amount : </label> <br>
              <input type="text" name="amount" id="amount" class="form-control" style="border: 1px solid #ea2c58" required>

              <br>

              <input type="submit" name="submit" id="submit" class="btn btn-success">
          </div>
        </form>
    </div>
    <!-- container end -->
    </div>
</body>
</html>
