<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="travel.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<style>
  @import url('https://fonts.googleapis.com/css2?family=Cabin:wght@500&family=Montserrat:wght@200&family=Poppins:wght@200&display=swap');
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
        background-image: url('shutterstock_557440192.jpg');
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
            font-family: "cabin";
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

    /*Travel css*/
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Poppins:wght@200&display=swap');



.travel-text-container {
   
    width: 100%;
    height: auto;
    padding:200px 60px ;
    display: flex;
    flex-direction: column;
    align-items: start;


}
.travel-text-container > h1 {
    font-size: 4rem;
    font-weight: 100;

}
.travel-text-container > h4 {
    font-size: 1.4rem;
    margin-top: 40px;
    font-weight: 100;

}
.travel-text-container > h4 > span {
    color: red;
    font-weight: 900;

}
@media only screen and (max-width: 750px) {

    .travel-text-container {
        padding:70px 20px ;
    }
    .travel-text-container > h1 {
        font-size: 2rem;
       
    
    }
    .travel-text-container > h4 {
        font-size: 1rem;
       
    
    }

}
@media only screen and (max-width: 822px) {
    .travel-text-container > h1 {
        font-size: 3rem;
       
    
    }

}


.travel-container {
   
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #d7dfe3;
  
}

.vehicle-container {
   
    width: 90%;
    height: 100%;
    margin-top: 20px;
    margin-bottom: 20px;
    
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    
    
   

}

.bus-hero,
.train-hero,
.car-hero,
.flight-hero,
.tuk-hero {
 
    width: 500px;
    height: auto;
    margin: 10px;
    border-radius:10px ;
    box-shadow: 0px 2px 4px 1px rgba(0,0,0,0.4),
0px 7px 13px -3px rgba(0,0,0,0.3),
0px -3px 0px 0px rgba(0,0,0,0.2) inset;

}


.pic-main {
   
    width: 100%;
    height: 300px;
    overflow: hidden;
    border-radius:10px ;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
    
}

.pic-bus,
.pic-train,
.pic-car,
.pic-tuk,
.pic-flight {
    width: 100%;
    height: 100%;
    transition: 0.6s;
    

}

.pic-main:hover > .pic-bus,
.pic-main:hover > .pic-train,
.pic-main:hover > .pic-car,
.pic-main:hover > .pic-tuk,
.pic-main:hover > .pic-flight
 {
    
    scale: 1.2;
    transition: 0.6s;
}

.pic-bus {
    background: url("https://island.lk/wp-content/uploads/2022/02/ctb.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;

}
.pic-train {
    background: url("https://www.absolutelankatours.com/wp-content/uploads/2019/03/Train-Tours-Sri-Lanka.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;

}
.pic-car {
    background: url("https://sigiriyafortress.com/wp-content/uploads/2021/07/Travel-Sigiriya-by-car.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position-y: 50%;
    background-position: center;

}
.pic-tuk {
    background: url("https://packtolife.com/wp-content/uploads/2017/07/featured-image-how-rent-tuktuk-sri-lanka.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;

}
.pic-flight {
    background: url("https://sigiriyafortress.com/wp-content/uploads/2021/07/Travel-Sigiriya-by-plane.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position-y: 50%;
    background-position: center;

}

.vehicle-content {
    
    width: 100%;
    height: 600px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: start;
    padding-left: 15px;
    padding-right: 15px;
    padding-bottom: 20px;
    padding-top: 20px;
    background-color: #f1f1f1;
   
}

.vehicle-content > h1 {
    font-size: 3rem;
    font-weight: 100;
}

.vehicle-content > h4 {
    text-align: center;
    font-size: 1.2rem;
    font-weight: 100;

}

.view-btn {
    height: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    padding-bottom:20px ;
    padding-top:20px ;
    background-color: #f1f1f1;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
}

.view-btn > a > button {
    height: 60px;
    width: 140px;
    background: #000;
    color: #fff;
    font-size: 1.1rem;
    border-radius:7px;
    transition: 0.3s;
}
.view-btn > a > button:hover {
    
    box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
    scale: 1.1;
    transition: 0.3s;

}

@media only screen and (max-width: 443px) {
    .vehicle-content {
        height: auto;
    }

}

@media only screen and (max-width: 443px) {
    .pic-train {
        background: url("https://www.absolutelankatours.com/wp-content/uploads/2019/03/Train-Tours-Sri-Lanka.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position-x: 30%;
    
    }
    .pic-tuk {
        background: url("https://packtolife.com/wp-content/uploads/2017/07/featured-image-how-rent-tuktuk-sri-lanka.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position-x: 40%;
    
    }

}

    /*Travel css end*/

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
        margin-top: 1px;
        
        
    }

</style>


</head>
<body>

<!--About big-->

<div class="navbar-container">  
  <?php
    include 'nav.php';
  ?>
  
  <div class="big-text-container">
    <div class="big-text">
        <h1>Travel</h1>
        
    </div>
  </div>

</div>
<!--About big End-->


<!--Travel start-->

<div class="travel-text-container">
        <h1 data-aos="fade-left">Travel To Sigiriya From Colombo</h1>

        <h4 data-aos="fade-up">
            You can reach Sigiriya from Colombo either by Bus, Train, Tuk tuk, flight and rented vehicle. Click<span> View More </span> to go to Sigiriya official page for more instructions.
        </h4>
    </div>

    <div class="travel-container">
        <div class="vehicle-container">
            <div class="bus-hero" >
                <div class="pic-main">
                    <div class="pic-bus"></div>
                </div>
                <div class="vehicle-content">
                    <br>
                        <h1>BUS</h1>
                        <br><br><br>
                        <h4>
                            4 hours journey by bus to Sigiriya from Colombo
                            <br>
                            <br>
                            The journey is rather tiresome considering there’s no direct bus straight to Sigiriya.
                            <br>
                            <br>
                            If you’re taking route from Colombo to Sigiriya, hop on either a No. 15 bus to Anuradhapura, No. 48 bus to Kaduruwela (Polonnaruwa) or a No. 49 bus to Trinco and get off from Dambulla (Rs. 190, Normal) or Habarana (Rs. 210, Normal). These buses run throughout the day, so you wouldn't have a problem finding one.
                        </h4>
                </div>
                <div class="view-btn">
                    <a href="https://sigiriyafortress.com/travel-sigiriya-by-bus/" target="_blank"><button>View More</button></a>
                </div>
            </div>


            <div class="train-hero"  >
                <div class="pic-main">
                    <div class="pic-train"></div>
                </div>
                <div class="vehicle-content">
                    <br>
                    <h1>TRAIN</h1>
                    <br><br><br>
                    <h4>
                        5-6 hours journey to Sigiriya from Colombo by train
                        <br><br>
                        The closest railway station to Sigiriya is Habarana, 15km away. There’s only one train that runs back and forth daily, so this makes things a little inconvenient unless you plan your trip accordingly. Note that taking the train is the slowest way to get there.
                        <br><br>
                        According to Fort Railway Station, a reserved 3rd class ticket costs Rs. 480 while a reserved seat in 2nd class costs Rs. 600. That’s a little pricey considering the travel time and convenience when weighing out your options.
                    </h4>
                </div>
                <div class="view-btn">
                    <a href="https://sigiriyafortress.com/travel-sigiriya-by-train/" target="_blank"><button>View More</button></a>
                </div>
            </div>



            <div class="car-hero"  >
                <div class="pic-main">
                    <div class="pic-car"></div>
                </div>
                <div class="vehicle-content">
                    <br>
                    <h1>CAR</h1>
                    <br><br><br>
                    <h4>
                        Take a car; it’s the best way to get there. On the road, you’ve got two routes that take you to Sigiriya. The traditional route takes the A01 (Kandy Road) up to Ambepussa where you turn off to Kurunegala on the A06. If you’re lucky and there’s no traffic, the drive should take about 3 hours tops.
                        <br><br>
                        It will take you 3-4 hours to get to Sigiriya on a normal day. It all depends on your luck with the traffic.
                        <br><br>
                        Average cost per km varies from Rs 35 to 60 (for round trip) depends on the vehicle type

                    </h4>
                </div>
                <div class="view-btn">
                    <a href="https://sigiriyafortress.com/travel-sigiriya-by-car/" target="_blank"><button>View More</button></a>
                </div>
            </div>



            <div class="tuk-hero"  >
                <div class="pic-main">
                    <div class="pic-tuk"></div>
                </div>
                <div class="vehicle-content">
                    <br>
                    <h1>TUK TUK</h1>
                    <br><br><br>
                    <h4>
                        4-5 hours journey to Sigiriya From Colombo by tuk tuk
                        <br><br>
                        If you need to enjoy Sri Lanka's special tuk tuk experience you can have it in a cheaer rate (LKR30/km). You can find lot of tuk tuks (Threewheelers) and you can ask to hire it for your journey. You should ask for the price before you start the journey. Almost all the drivers are very friendly.
                    </h4>
                </div>
                <div class="view-btn">
                    <a href="https://sigiriyafortress.com/travel-sigiriya-by-tuk-tuk/" target="_blank"><button>View More</button></a>
                </div>
            </div>


            <div class="flight-hero"  >
                <div class="pic-main">
                    <div class="pic-flight"></div>
                </div>
                <div class="vehicle-content">
                    <br>
                    <h1>FLIGHT</h1>
                    <br><br><br>
                    <h4>
                        30 minutes journey by flight to SIgiriya From Colombo Airport
                        <br><br>
                        Cinnamon Air operates daily flights from their domestic terminal in Katunayake to the Air Force airstrip in Sigiriya. At USD 223, it’s the most expensive way to get there but the experience you get up in the sky is unlike any other.
                        <br><br>
                        If the weather’s good to you, the experience up in the air is magical. The flight to Sigiriya lasts a mere 30 minutes (as opposed to at least 3-4 hours on the road) and offers great panoramic views at a cruising altitude close to 5000 feet     
                      </h4>
                </div>
                <div class="view-btn">
                    <a href="https://sigiriyafortress.com/travel-sigiriya-by-flight/" target="_blank"><button>View More</button></a>
                </div>
            </div>


        </div>
    </div>

<!--Travel end-->


<?php
   include 'footer.php';
?>





<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>  
</body>
</html>