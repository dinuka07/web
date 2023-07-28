<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<style>
    @import url('https://fonts.googleapis.com/css2?family=Cabin:wght@500&family=Montserrat:wght@200&family=Poppins:wght@200&display=swap');
   

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "poppins";
    }

    .navbar-container {

        height: 100vh;
        background: #000;
        background-image: url('DSC_0299.jpg.webp');
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
        animation:   bigText 6s ;
        

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

        
   

    
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Poppins:wght@200&display=swap');


/* ug-section  */

 
.ug-container {
    
    width: 100%;
    height: 300px;
    display: flex;
    justify-content: center;
    align-items: center;
    }

    .ug-text-container {

    width: 85%;
    height: 100%;

    display: grid;
    grid-template-columns: 10fr 1fr 20fr;
    grid-auto-rows: minmax(200px);

    }
    .ug-blank {

    }
    .ug-big-text {

    display: flex;
    justify-content: center;
    align-items: center;

    }
    .ug-small-text {

    font-weight:100;
    display: flex;
    justify-content: start;
    align-items: center;
    flex-wrap: wrap;

    }

    .ug-big-text > h1 >span {
    font-size: 4rem;
    font-weight: bold;

    }
    .ug-big-text > h1  {
    font-size: 3rem;
    font-weight: 500;

    }


    @media  only screen and (max-width: 950px) {
    .ug-text-container {

    display: grid;
    grid-template-columns: 1fr;
        grid-template-rows: 10fr 1fr 10fr;

    }
    .ug-container {
        height: auto;
        margin-bottom: 20px;
        margin-top: 20px;
    }



    }
    @media  only screen and (max-width: 652px) {

    .ug-text-container {

        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: 7fr 1fr 10fr;

        }
        .ug-container {
        height: auto;
        }
    .ug-big-text > h1 >span {
        font-size: 3rem;
        font-weight: bold;
        
    }
    .ug-big-text > h1  {
        font-size: 2.5rem;
        font-weight: 500;
        
    }


    }

/* ug-section  end */
     

.p-container,.p-container3 {
   
    width: 100%;
    height: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 30px;
    background: #d3e4e9;
    font-family: "poppins";

}

.p-main,.p-main3 {
   
    width: 95%;
    height: 400px;
    display: flex;
    
   
    
}

.p-img-main,.p-img-main3 {
   
    width: 500px;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background: url("dambulla.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    border-radius:8px ;

}

.p-img-main2 {
    background: url("pidurangala.jpg");
    background-size: cover;
    background-repeat: no-repeat;

}
.p-img-main3 {
    background: url("mihinthale.jpg");
    background-size: cover;
    background-repeat: no-repeat;

}
.p-img-main4 {
    background: url("minneriya.jpeg");
    background-size: cover;
    background-repeat: no-repeat;

}




.p-text-main,.p-text-main3 {
   
    width: 70%;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: start;
    justify-content: center;
    padding-left: 14px;
   

    

}

.small-text1 > .ts, .small-text3 > .ts  {
    font-weight:600;
}
.big-text1 > .tb,.big-text3 > .tb {
    font-size: 3rem;
}




.p-container2,.p-container4 {
   
    width: 100%;
    height: auto;
    display: flex;
    justify-content: center;
    margin-top: 30px;

}
.p-container4 {
    margin-bottom: 60px;
}

.p-main2,.p-main4 {
    
    width: 95%;
    height: 400px;
    display: flex;
    
   
    
}

.p-img-main2,.p-img-main4 {
   
    width: 500px;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    
    border-radius:8px ;

}




.p-text-main2,.p-text-main4 {
  
    width: 70%;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: start;
    justify-content: center;
    padding-left: 14px;
    padding-right: 10px;

    

}

.small-text2 > .ts, .small-text4 > .ts {
    font-weight:600;
}
.big-text2 > .tb , .big-text4 > .tb{
    font-size: 3rem;
}


@media only screen and (max-width: 1047px)  {
    .p-main,.p-main3 {
       
        width: 95%;
        height: auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        
       
        
    }
    .p-main2,.p-main4{
        
        width: 95%;
        height: auto;
        display: flex;
        flex-direction: column-reverse;
        align-items: center;
        justify-content: center;
        
       
        
    }
    .p-img-main , .p-img-main3{
        height: 350px;
        width: 400px;
        
    }
    .p-img-main2 ,  .p-img-main4 {
        height: 350px;
        width: 400px;
    }
    
    .p-text-main, .p-text-main3 {
        width: 90%;
        padding-top: 15px;
    }
    .p-text-main2 ,.p-text-main4 {
        width: 90%;
    }
   

    
}

@media only screen and (max-width: 589px)  {
    .p-img-main , .p-img-main3{
        height: 250px;
        width: 400px;
        
    }
    .p-img-main2 , .p-img-main4 {
        height: 350px;
        width: 400px;
    }
    
    .small-text1 > .ts ,.small-text3 > .ts {
        font-weight:600;
    }
    .big-text1 > .tb, .big-text3 > .tb {
        font-size: 2rem;
        
    }
    .small-text2 > .ts ,.small-text4 > .ts{
        font-weight:600;
    }
    .big-text2 > .tb, .big-text4 > .tb {
        font-size: 2rem;
    }


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
        <h1>Places</h1>
    </div>
  </div>

</div>
<!--About big End-->

    <!--ug section-->
<div class="ug-container" >
    <div class="ug-text-container" >

        <div class="ug-big-text" data-aos="fade-right" data-aos-duration="1400">
            <h1><span>
                Beautiful places</span> around Sigiriya</h1>
        </div>
        <div class="ug-blank"></div>
       
        <div class="ug-small-text" data-aos="zoom-in" data-aos-delay="20" data-aos-duration="1500"> 
           
Surrounding the iconic Sigiriya Rock Fortress, this region boasts an abundance of beautiful places that will leave you spellbound. From the majestic Pidurangala Rock offering breathtaking panoramic views to the lush countryside, to the serene water gardens and ancient frescoes that whisper tales of a glorious past, the beauty around Sigiriya is truly awe-inspiring. Immerse yourself in the harmonious blend of nature's splendor and historical significance as you explore the stunning landscapes and cultural gems that make this destination a haven for travelers seeking unforgettable experiences.  The beautiful places around Sigiriya promise to create memories that will stay etched in your heart forever.
        </div>
    </div>
</div>

<!--ug section end-->

    <div class="p-container" >
        <div class="p-main"  >
            <div class="p-img-main">
                <div class="p-img"></div>
            </div>
            
            <div class="p-text-main">
                <div class="big-text1"><h1 class="tb"><b>DAMBULLA CAVE TEMPLE</b></h1></div><br>
                <div class="small-text1"><h4 class="ts">Dambulla cave temple is a scent of unique interest. Its rock temples are the most extensive in the Island, and one of the most ancient, and in the highest state of preservation and order.

                                       <br><br> Dambulu–gala (Dambulla Rock), in which these temples are situated, is almost insulated and of a vast size. Its perpendicular height above the plain is about six hundred feet. Very few parts of it are covered with wood, and in general its surface is bare and black</h4></div>
            </div>

        </div>
    </div>


    <div class="p-container2">
        <div class="p-main2"  >
            <div class="p-text-main2">
                <div class="big-text2"><h1 class="tb"><b>PIDURANGALA ROCK </b></h1></div><br>
                <div class="small-text2"><h4 class="ts">Fortunately, Pidurangala Rock, located adjacent to Sigiriya, provides epic views of the surrounding area, a historic cave complex of its own, a tenth of the crowds, and the most incredible view overlooking the famous Sigiriya rock.

                    Hiking Pidurangala Rock for sunrise has become something of a right of passage for tourists visiting Sri Lanka, and it is something one must experience if travelling in Sri Lanka.
                    
                    From the peak, watch the stunning sunrise from this rock-top viewpoint, with panoramic vistas over Sigiriya in the distance. Stare in awe as the sun lights up the misty forests, lakes and villages, showering the vast central Sri Lankan landscapes in golden hues. 
                    
                   </h4></div>
            </div>
            <div class="p-img-main2">
                <div class="p-img2"></div>
            </div>
            

        </div>
    </div>
    <div class="p-container3">
        <div class="p-main3" >
            <div class="p-img-main3">
                <div class="p-img3"></div>
            </div>
            
            <div class="p-text-main3">
                <div class="big-text3"><h1 class="tb"><b>MIHINTALE</b></h1></div><br>
                <div class="small-text3"><h4 class="ts">Mihintale Mountain, with the arrival of Buddhism in Sri Lanka, began to serve as a residential area for the venerable monks headed by Arahath Mahinda Mahathera. But soon, with the royal patronage, the sanctuary housed a multitude of with monastic buildings-stupas, uposathgharas, bodhigharas- to serve the monks.

                  <br><br>  Sixty eight cave dwellings provided the monks shade and shelter. Mihintale, the sanctuary for many thousands of laymen as well as holy men, had all the facilities and amenities for basic living.</h4></div>
            </div>

        </div>
    </div>


    <div class="p-container4">
        <div class="p-main4"  >
            <div class="p-text-main4">
                <div class="big-text4"><h1 class="tb"><b>MINNERIYA NATIONAL PARK</b></h1></div><br>
                <div class="small-text4"><h4 class="ts">Minneriya National Park is located 182 km away from Colombo in the North Central Plains of Sri Lanka. The major city closest to Minneriya National Park is Polonnaruwa.

                    The renovated vast ancient Minneriya Rainwater Reservoir that irrigates the considerable area of the district of Polonnaruwa is the focal point of the Minneriya National Park.
                    
                    Being part of the elephant corridor which joins up with Kaudulla and Wasgomuwa parks, Minneriya National Park gives the opportunity to see herds of Elephants throughout the year.May to October is the best period to visit Minneriya National Park in view of the famous Gathering of the wild elephants.</h4></div>
            </div>
            <div class="p-img-main4">
                <div class="p-img4"></div>
            </div>
            

        </div>
    </div>
  



<?php
   include 'footer.php';
?>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>  
</body>
</html>