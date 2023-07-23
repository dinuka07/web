<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galle</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/gallery.css">
<style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');

    .gallery{
        margin-bottom: -100px;
        padding-bottom: 100px;
        margin-top: -10px;
        box-sizing: border-box;
        font-family: "Poppins";
        background: #111111;
        
    }

    .gallery-top{
        width: 100%;
        height: 100px;
        display: flex;
        justify-content: center;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .gallery-container{
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }

    .gallery-hero{
        border: 0;
        width: 90%;
        height: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        box-sizing: border-box;
    }

    .gallery-hero .item-1,
    .gallery-hero .item-2,
    .gallery-hero .item-3,
    .gallery-hero .item-4,
    .gallery-hero .item-5,
    .gallery-hero .item-6,
    .gallery-hero .item-7,
    .gallery-hero .item-8,
    .gallery-hero .item-9,
    .gallery-hero .item-10,
    .gallery-hero .item-11,
    .gallery-hero .item-12
    {
        border: 0;
        width: 500px;
        height: 300px;
        margin: 5px;
        opacity: 70%;
        transition: .4s;
    }

    .gallery-hero .item-1:hover,
    .gallery-hero .item-2:hover,
    .gallery-hero .item-3:hover,
    .gallery-hero .item-4:hover,
    .gallery-hero .item-5:hover,
    .gallery-hero .item-6:hover,
    .gallery-hero .item-7:hover,
    .gallery-hero .item-8:hover,
    .gallery-hero .item-9:hover,
    .gallery-hero .item-10:hover,
    .gallery-hero .item-11:hover,
    .gallery-hero .item-12:hover{
        cursor: pointer;
        transform: scale(1.2);
        transition: .4s;
        border-radius: 10px;
        opacity: 100%;
        position: relative;
        z-index: 3;
    }

    .gallery-hero .item-1{
        background: url("pic/gallery/image 1.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }

    .gallery-hero .item-2{
        background: url("pic/gallery/image 2.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 32%;
    }

    .gallery-hero .item-3{
        background: url("pic/gallery/image 3.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 32%;
    }

    .gallery-hero .item-4{
        background: url("pic/gallery/image 4.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 32%;
    }

    .gallery-hero .item-5{
        background: url("pic/gallery/image 5.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 32%;
    }

    .gallery-hero .item-6{
        background: url("pic/gallery/image 6.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 32%;
    }

    .gallery-hero .item-7{
        background: url("pic/gallery/image 7.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 32%;
    }

    .gallery-hero .item-8{
        background: url("pic/gallery/image 8.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 32%;
    }


    .gallery-hero .item-9{
        background: url("pic/gallery/image 9.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 32%;
    }

    .gallery-hero .item-10{
        background: url("pic/gallery/image 10.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 32%;
    }

    .gallery-hero .item-11{
        background: url("pic/gallery/image 11.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 32%;
    }

    .gallery-hero .item-12{
        background: url("pic/gallery/image 12.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 32%;
    }


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
        background-image: url('https://www.traxplorio.com/wp-content/uploads/2021/11/2021-11-08_6188cd6b8a608_Sigiriya.jpg');
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
        opacity:40%;
        animation:   bigText 6s  infinite;
        

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
            letter-spacing: 10px;
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
                opacity:40%;
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

</style>

</head>
<body>

<!--Gallery big-->

<div class="navbar-container">  
  <?php
    include 'nav.php';
  ?>
  
  <div class="big-text-container">
    <div class="big-text">
        <h1>Gallery</h1>
    </div>
  </div>

</div>
<!--Gallery big End-->
<div class="gallery">
    <div class="gallery-top"></div>
    <div class="gallery-container">
        <div class="gallery-hero">
            <div class="item-1"></div>
            <div class="item-2"></div>
            <div class="item-3"></div>
            <div class="item-4"></div>
            <div class="item-5"></div>
            <div class="item-6"></div>
            <div class="item-7"></div>
            <div class="item-8"></div>
            <div class="item-9"></div>
            <div class="item-10"></div>
            <div class="item-11"></div>
            <div class="item-12"></div>
        </div>
    </div>
</div>




<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>