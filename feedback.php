<?php
            
            include 'config.php';
            
            if (isset($_POST['post_comment'])) {
            
                $name = $_POST['name'];
                $message = $_POST['message'];
                
                $sql = "INSERT INTO demo (name, message)
                VALUES ('$name', '$message')";
            
                if ($conn->query($sql) === TRUE) {
                  echo "";
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
            
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="feedback.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<style>

    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Poppins:wght@200&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "poppins";
    }

    .navbar-container {

        height: 100vh;
        background: #000;
        background-image: url('feedback.webp');
        background-size:cover ;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        z-index: 0;
        
        
        
        
    }

    .navbar-container::before {
        content: "";
        width: 100%;
        height: 100%;
        background-color: #000;
        position: absolute;
        z-index: -1;
        opacity:60%;
        animation:   bigText 6s  ;
        

    }

    /*Big text */

        .big-text-container {
            
            width: 100%;
            height: 93%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .big-text {
            
            width: 100%;
            height: 200px;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            
    
        }
        .big-text > h1 {
            position: relative;
            z-index: -1;
            font-size: 7rem;
            color: #fff;
            letter-spacing: 1px;
            overflow: hidden;
            animation: Text 6s infinite ;
            
    
        }

        .big-text > h1::before {
            
            content: '';
            width: 0%;
            height: 100%;   
            
            background:black;
            position: absolute;
            z-index: -1;
            animation: text-animation 2s ;
            
       }

       @keyframes text-animation {
           0% {
              
               width: 0%;
           }

           50% {
               margin-left: 0%;
               width: 100%;
           }
        
           100% {
               margin-left:100% ;
               width: 100%;
               
           }
       }

        @keyframes bigText {
            50% {
                opacity: 80%;
            }
            100% {
                opacity:60%;
            }
        }
        @keyframes Text {
            50% {
                scale: 1.02;
            }
            100% {
            
            }
        }


        @media  only screen and (max-width: 635px) {

            .big-text > h1 {
            
            font-size: 4rem;
            
    
        }

        }
        @media  only screen and (max-width: 376px) {

            .big-text > h1 {
            
            font-size: 3.2rem;
            
    
        }

        }

    /*Big text End*/
    
    .footer-container {
        font-family: "poppins" ;
        width: 100%;
        height: auto;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        grid-template-rows: 1fr;
        background-color: #000;
        padding-bottom: 30px;
        padding-top: 30px;
        margin-top: 60px;
        
        
    }

</style>

</head>
<body>

<!--feedback big-->

<div class="navbar-container">  
  <?php
    include 'nav.php';
  ?>
  
  <div class="big-text-container">
    <div class="big-text">
        <h1>Feedback</h1>
    </div>
  </div>

</div>
<!--feedback big End-->


<!--comment -->
<div class="comment-container">
        <div class="comment-input">
            <form action="" method="post" class="comment-form">
                <h1>Comment Here</h1>
                <br>
                <input type="text" class="name" name="name" placeholder="Name" required>
                <br>
                <textarea name="message" cols="30" rows="10" class="message" placeholder="Message" required></textarea>
                <br>
                <button type="submit" class="btn" name="post_comment">Post Comment</button>
            </form>
        </div>
        
    </div>
    <div class="comment-content">
            <?php

$sql = "SELECT * FROM demo";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        ?>
        <div class="user-content">
            <div class="user-pic">

            </div>
            <div class="user-text">

                <h3><?php echo $row['name']; ?></h3>
                <p><?php echo $row['message']; ?></p>
            </div>
        </div>
        
        <?php } } ?>
    </div>
   
<!--comment  end-->


<?php
   include 'footer.php';
?>


<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>