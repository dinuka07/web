<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="history.css" />
    <link rel="stylesheet" href="history.js" />

    

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
    @import url(https://fonts.googleapis.com/css?family=Raleway:400,900);

body{
  font-family: 'Raleway', sans-serif;
  color: #333;
 
  
}

header h1{
  text-align: center;
  font-weight: bold;
  margin-top: 0;
}
  
 header p{
   text-align: center;
   margin-bottom: 0;
 }

.hexa{
  border: 0px;
  float: left;
  text-align: center;
  height: 35px;
  width: 60px;
  font-size: 22px;
  background: #f0f0f0;
  color: #3c3c3c;
  position: relative;
  margin-top: 15px;
}

.hexa:before{
  content: ""; 
  position: absolute; 
  left: 0; 
  width: 0; 
  height: 0;
  border-bottom: 15px solid #f0f0f0;
  border-left: 30px solid transparent;
  border-right: 30px solid transparent;
  top: -15px;
}

.hexa:after{
  content: ""; 
  position: absolute; 
  left: 0; 
  width: 0; 
  height: 0;
  border-left: 30px solid transparent;
  border-right: 30px solid transparent;
  border-top: 15px solid #f0f0f0;
  bottom: -15px;
}

.timeline {
  position: relative;
  padding: 0;
  width: 100%;
  margin-top: 20px;
  list-style-type: none;
}

.timeline:before {
  position: absolute;
  left: 50%;
  top: 0;
  content: ' ';
  display: block;
  width: 2px;
  height: 100%;
  margin-left: -1px;
  background: rgb(213,213,213);
  background: -moz-linear-gradient(top, rgba(213,213,213,0) 0%, rgb(213,213,213) 8%, rgb(213,213,213) 92%, rgba(213,213,213,0) 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(30,87,153,1)), color-stop(100%,rgba(125,185,232,1)));
  background: -webkit-linear-gradient(top, rgba(213,213,213,0) 0%, rgb(213,213,213) 8%, rgb(213,213,213) 92%, rgba(213,213,213,0) 100%);
  background: -o-linear-gradient(top, rgba(213,213,213,0) 0%, rgb(213,213,213) 8%, rgb(213,213,213) 92%, rgba(213,213,213,0) 100%);
  background: -ms-linear-gradient(top, rgba(213,213,213,0) 0%, rgb(213,213,213) 8%, rgb(213,213,213) 92%, rgba(213,213,213,0) 100%);
  background: linear-gradient(to bottom, rgba(213,213,213,0) 0%, rgb(213,213,213) 8%, rgb(213,213,213) 92%, rgba(213,213,213,0) 100%);
  z-index: 5;
}

.timeline li {
  padding: 2em 0;
  
}

.timeline .hexa{
  width: 16px;
  height: 10px;
  position: absolute;
  background: rgba(6, 115, 154, 100);
  z-index: 5;
  left: 0;
  right: 0;
  margin-left:auto;
  margin-right:auto;
  top: -30px;
  margin-top: 0;
  
}

.timeline .hexa:before {
  border-bottom: 4px solid rgba(6, 115, 154, 100);
  border-left-width: 8px;
  border-right-width: 8px;
  top: -4px;
}

.timeline .hexa:after {
  border-left-width: 8px;
  border-right-width: 8px;
  border-top: 4px solid rgba(6, 115, 154, 100);
  bottom: -4px;
}

.direction-l,
.direction-r {
  float: none;
  width: 100%;
  text-align: center;
}

.flag-wrapper {
  text-align: center;
  position: relative;
}

.flag {
  position: relative;
  display: inline;
  background: rgb(255,255,255);
  font-weight: 600;
  z-index: 15;
  padding: 6px 10px;
  text-align: left;
  border-radius: 5px;
  width: 500px;
}

.direction-l .flag:after,
.direction-r .flag:after {
  content: "";
  position: absolute;
  left: 50%;
  top: -15px;
  height: 0;
  width: 0;
  margin-left: -8px;
  border: solid transparent;
  border-bottom-color: rgb(255,255,255);
  border-width: 8px;
  pointer-events: none;
}

.direction-l .flag {
  -webkit-box-shadow: -1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
  -moz-box-shadow: -1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
  box-shadow: -1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
}

.direction-r .flag {
  -webkit-box-shadow: 1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
  -moz-box-shadow: 1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
  box-shadow: 1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
}

.time-wrapper {
  display: block;
  position: relative;
  margin: 4px 0 0 0;
  z-index: 14;
  line-height: 1em;
  vertical-align: middle;
  color: #fff;
}

.direction-l .time-wrapper {
  float: none;
}

.direction-r .time-wrapper {
  float: none;
}

.time {
  background: rgba(6, 115, 154, 100);
  display: inline-block;
  padding: 8px;
}

.desc {
  position: relative;
  margin: 1em 0 0 0;
  padding: 1em;
  background: rgb(254,254,254);
  -webkit-box-shadow: 0 0 1px rgba(0,0,0,0.20);
  -moz-box-shadow: 0 0 1px rgba(0,0,0,0.20);
  box-shadow: 0 0 1px gray;
  z-index: 15;
  
  
  
  
}

.direction-l .desc,
.direction-r .desc {
  position: relative;
  margin: 1em 1em 0 1em;
  padding: 1em;
  z-index: 15;
}

@media(min-width: 768px){
  .timeline {
    width: 660px;
    margin: 0 auto;
    margin-top: 20px;
  }

  .timeline li:after {
    content: "";
    display: block;
    height: 0;
    clear: both;
    visibility: hidden;
  }
  
  .timeline .hexa {
    left: -28px;
    right: auto;
    top: 8px;
  }

  .timeline .direction-l .hexa {
    left: auto;
    right: -28px;
  }

  .direction-l {
    position: relative;
    width: 310px;
    float: left;
    text-align: right;
  }

  .direction-r {
    position: relative;
    width: 310px;
    float: right;
    text-align: left;
  }

  .flag-wrapper {
    display: inline-block;
  }
  
  .flag {
    font-size: 18px;
  }

  .direction-l .flag:after {
    left: auto;
    right: -16px;
    top: 50%;
    margin-top: -8px;
    border: solid transparent;
    border-left-color: rgb(254,254,254);
    border-width: 8px;
  }

  .direction-r .flag:after {
    top: 50%;
    margin-top: -8px;
    border: solid transparent;
    border-right-color: rgb(254,254,254);
    border-width: 8px;
    left: -8px;
  }

  .time-wrapper {
    display: inline;
    vertical-align: middle;
    margin: 0;
  }

  .direction-l .time-wrapper {
    float: left;
  }

  .direction-r .time-wrapper {
    float: right;
  }

  .time {
    padding: 5px 10px;
  }

  .direction-r .desc {
    margin: 1em 0 0 0.75em;
  }
}

@media(min-width: 992px){
  .timeline {
    width: 800px;
    margin: 0 auto;
    margin-top: 20px;
  }

  .direction-l {
    position: relative;
    width: 380px;
    float: left;
    text-align: right;
  }

  .direction-r {
    position: relative;
    width: 380px;
    float: right;
    text-align: left;
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
        <h1>History</h1>
    </div>
  </div>

</div>

<!--About big End-->

<header>
    
        <br><br>
        <h1>A Creative Timeline of the Enchanting Lion Rock</h1>
        <br>
        <p style="font-size:30px;"> "Sigiriya: A Stairway Through Time" </p>
    </header>
    
    <ul class="timeline">
      <!-- Item 1 -->
      <li>
        <div class="direction-r">
          <div class="flag-wrapper">
            <span class="hexa"></span>
            <span class="flag"> Construction begins</span><br><br>
            <span class="time-wrapper"><span class="time">1st century AD</span></span>
          </div>
          <div class="desc" > King Kashyapa I, a ruler of Sri Lanka, decides to build his palace atop the massive rock outcrop of Sigiriya. Construction starts around this time, and it is believed that it took several years to complete the fortress and surrounding gardens.
            
          <br><br> <img style="height: 300px;  width: 330px; border-radius: 5px; " src="https://miro.medium.com/v2/resize:fit:538/0*p0FAVnzBTHQCHAhC" alt="">
          </div>
        </div>
      </li>
    
      <!-- Item 2 -->
      <li>
        <div class="direction-l">
          <div class="flag-wrapper">
            <span class="hexa"></span>
            <span class="flag">Reign of King Kashyapa I</span><br><br>
            <span class="time-wrapper"><span class="time">477-495 AD</span></span>
          </div>
          <div class="desc"> The construction of Sigiriya reaches its peak during the reign of King Kashyapa I. He relocates the capital from Anuradhapura to Sigiriya and builds his royal residence on the summit of the rock.
          <br><br><img style="height: 300px;  width: 330px; border-radius: 5px;" src="Lion-Rock-459x400.jpg" alt="">
          </div>
        </div>
      </li>
    
      <!-- Item 3 -->
      <li>
        <div class="direction-r">
          <div class="flag-wrapper">
            <span class="hexa"></span>
            <span class="flag">The Lion Gate and Frescoes</span>
            <br><br>
            <span class="time-wrapper"><span class="time">5th-century AD</span></span>
          </div>
          <div class="desc">During the construction of Sigiriya, a massive stone lion statue is carved at the entrance of the palace on the summit. The walls of the rock are also adorned with colorful frescoes of beautiful women, some of which still survive today.
          <br><br><img style="height: 300px;  width: 330px; border-radius: 5px;" src="3c472715900783.562986b3d5fc1.jpg" alt="">
          </div>
        </div>
      </li>

      <li>
        <div class="direction-l">
          <div class="flag-wrapper">
            <span class="hexa"></span>
            <span class="flag">Death of King Kashyapa I</span><br><br>
            <span class="time-wrapper"><span class="time">Late 5th-century AD</span></span>
          </div>
          <div class="desc"> King Kashyapa I is defeated and killed by his half-brother, Moggallana, in a battle near Sigiriya. The capital is moved back to Anuradhapura, and Sigiriya loses its significance as a royal residence.
          <br><br> <img style="height: 300px;  width: 330px; border-radius: 5px;" src="CNKCr3NUAAAxcTI.jpg" alt="">
          </div>
        </div>
      </li>

      <li>
        <div class="direction-r">
          <div class="flag-wrapper">
            <span class="hexa"></span>
            <span class="flag">Monastic period</span><br><br>
            <span class="time-wrapper"><span class="time">14th to 16th centuries</span></span>
          </div>
          <div class="desc">After its abandonment as a royal residence, Buddhist monks inhabit Sigiriya, converting it into a monastery. They add numerous shrines, frescoes, and other religious structures to the site.
          <br><br> <img style="height: 300px;  width: 330px; border-radius: 5px;" src="sigiriya-old-7.jpg" alt="">
          </div>
        </div>
      </li>

      <li>
        <div class="direction-l">
          <div class="flag-wrapper">
            <span class="hexa"></span>
            <span class="flag"> Rediscovery</span><br><br>
            <span class="time-wrapper"><span class="time">1831</span></span>
          </div>
          <div class="desc"> The site of Sigiriya is "rediscovered" by British explorer Major Jonathan Forbes during his expedition in Sri Lanka.
          <br><br><img style="height: 300px;  width: 330px; border-radius: 5px;" src="General_John_Forbes_from_the_Darlington_Digital_Collection_University_of_Pittsburgh.jpg" alt="">
          </div>
        </div>
      </li>

      <li>
        <div class="direction-r">
          <div class="flag-wrapper">
            <span class="hexa"></span>
            <span class="flag">Restoration and Conservation</span><br><br>
            <span class="time-wrapper"><span class="time">20th century</span></span>
          </div>
          <div class="desc">The Sri Lankan government undertakes significant efforts to restore and preserve Sigiriya as an important historical and cultural site. The site is designated as a UNESCO World Heritage Site in 1982.
            <br><br><img style="height: 300px;  width: 330px; border-radius: 5px;" src="6068ffc95f0a63001da27f89.jpg" alt="">
          </div>
        </div>
      </li>

    </ul>
    




    <?php
   include 'footer.php';
    ?>



<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>  
</body>
</html>