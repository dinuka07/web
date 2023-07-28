<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
<style>
            @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Poppins:wght@200&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
       
    }

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
        
        
    }

    .footer-logo-main {
        
        display: flex;
        justify-content: center;
        align-items: center;
        
    }
    .f-logo {
        
        
        width: 200px;
        height: 200px;
        background: url("pic/Logo.png");
        background-size:100% 100% ;
        
    }


    .f-nav {
    
        display: flex;
        justify-content: center;
        align-items: center;
    }
            .f-nav-items {
            
                width: 90%;
                height: 90%;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
            }

            .f-nav-items a {
                text-decoration: none;
                font-weight:10;
                font-size:1.1rem ;
                margin-bottom: 10px;
                color: #fff;
                transition: 0.5s;

            }

            .f-nav-items a:hover {
                margin-left: 10px;
                color: #bbb;
                transition: 0.5s;

            }
    .f-hotline {
    
        display: flex;
        justify-content: center;
        align-items: center;
    }


            .hot-main {
            
                width: 90%;
                height: 90%;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                

            }
        
            .tel {
                width: 250px;
                display: flex;
                margin-bottom: 15px;
                
            
                
            }
            .tel > a:hover {
                margin-left: 10px;
                color: #bbb;
                transition: 0.5s;

            }
            .tel > a {

                text-decoration: none;
                color: #fff;
                font-weight:10;
                font-size: large;
                transition: 0.5s;
            }

            .map-img,
            .hot-img,
            .tp-img {
            
                margin-right: 10px;
                width: 30px;
                height: 30px;

            }
            .fa-solid .fa-phone {
                width: 100%;
                height: 100%;
            }
            
            

            .tel-main {
            
                display: grid;
                
            }

    .f-page {
    
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .page-main {
    
        width: 90%;
        height: 90%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;


    }
    .page-main > a > button {
        width: 170px;
        height: 45px;
        border-radius:10px ;
        background-image: linear-gradient(to right, rgb(26, 117, 144) , rgb(70, 223, 223));
        color: #000000;
        font-weight: 600;
        margin-top: 40px;
        
        

    }
    .page-main > a > button:hover {
        background-image: linear-gradient(to right, rgb(70, 223, 223), rgb(26, 117, 144) );
        
    
        transition: 1s;
    }

    .page-main > h3 {
        color: #fff;
        font-weight:10;
    }

    @media only screen and (max-width: 1240px) {
        .footer-container {
        
            display: grid;
            grid-template-columns: 1fr 1fr 1fr ;
            grid-template-rows: 1fr;
            background-color: #000;
            grid-template-areas: "a b c "
                                "d d d";
            
            
        }       
        
        .f-page {
            grid-area: d;
        
        }
        .page-main > h3 {
            margin-top: 20px;
        }

    }

    @media only screen and (max-width: 816px) {
        .footer-container {
        
            display: grid;
            grid-template-columns: 1fr 1fr  ;
            grid-template-rows: 1fr 1fr;
            background-color: #000;
            grid-template-areas: "a b "
                                "c d";
            
            
        }       

    }

    @media only screen and (max-width: 776px) {
        .footer-container {
        
            display: grid;
            grid-template-columns: 1fr  ;
            grid-template-rows: 1fr 1fr 1fr 1fr;
            background-color: #000;
            grid-template-areas: "a"
                                "b"
                                "c"
                                "d";
            
            
        } 
        .footer-logo-main {
            grid-area: a;
            align-items: start;
            height: 170px;
        }
        .f-nav {
            grid-area: b;
            align-items: start;
            margin-top: -22px;
        }
        .f-hotline {
            grid-area: c;
        
        }
        .hot-main {
            
            
        }
        .f-hotline {
            
        }
        .f-page {
            grid-area: d;
            align-items: start;
            
        }

    
        .f-logo {
            width: 150px;
            height: 150px;
            
        }

    }
</style>
</head>
<body>
    <div class="footer-container">
        

            <div class="footer-logo-main">
                <div class="f-logo"></div>
            </div>
            
                <div class="f-nav">
                    <div class="f-nav-items">
                        <a href="home.php">Home</a>
                        <a href="history.php">History</a>
                        <a href="travel.php">Travel</a>
                        <a href="places.php">Places</a>
                        <a href="gallery.php">Gallery</a>
                        <a href="feedback.php">Feedback</a>
                        <a href="contact.php">Contact us</a>
                    </div>
                </div>
                <div class="f-hotline">
                    <div class="hot-main">
                        <div class="tel-main">

                            <div class="tel">
                                <div class="map-img"><i class="fa-sharp fa-solid fa-location-dot" style="color: #ffffff;"></i></div><a href="https://www.google.com/maps/dir//Sigiriya/@7.9689587,80.772766,10.77z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3afca15b724c9ab3:0xab1771275b370d52!2m2!1d80.760257!2d7.9570327?entry=ttu">Sigiriya,SriLanka</a>
                            </div>
                            <div class="tel">
                                <div class="hot-img"><i class="fa-solid fa-phone" style="color: #ffffff;"></i></div> <a href="tel:1912">Tourism Hotline : 1912</a>
                            </div>
                            <div class="tel">
                                <div class="tp-img"><i class="fa-solid fa-phone" style="color: #ffffff;"></i></div> <a href="tel:+94 11 242 1052">
                                    Sri Lanka Tourism Police <br>
                                    : +94 11 242 1052</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="f-page">
                    <div class="page-main">
                        <h3>Get Some Information about this project</h3>
                        <a href="contact.php"><button>Meet Our Developers</button></a>
                    </div>
                </div>
            
        </div>
        
    </div>

    <script src="https://kit.fontawesome.com/7dea9c784f.js" crossorigin="anonymous"></script>
</body>
</html>

