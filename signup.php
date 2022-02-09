<?php include('db.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
          <style>
              body{
                  background:url(images/download.jfif);
                  background-repeat:no-repeat;
                  background-size:cover;
                  background-repeat:no-repeat;
                  background-attachment:fixed;
                  background-position:center;
              }
              h1{
                  box-shadow:0px 10px 14px blue;
                  color:chocolate;
              }
              .myform{
                  position:absolute;
                  top:40%;
                  left:50%;
                  display:flex;
                  justify-content:center;
                  align-items:center;
              }
              form{
                  display:grid;
                  grid-gap:10px;
                  border-radius:2px solid green;
                  background:url(images/th.jpg);
              }
              input{
                  padding:5px 15px 5px 15px;
              }
              #submit{
                  background:blue;
              }
            </style>
</head>
<body>
   <center> <h1>please signup this form</h1></center>
   <div class="myform">
   <form action="logins.php" method="post">
       <input type="text" name="username" placeholder="username">
       <input type="email" name="email" placeholder="email">
       <input type="password" name="password" placeholder="password">
       <input type="submit" name="submit" value="submit" id="submit">
            </form>
            </div>
</body>
</html>