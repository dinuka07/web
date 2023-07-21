<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/contact.css">
    
    

    
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
            animation: Text 6s infinite ;
            
       
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
    font-size: 3.5rem;
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
    @media  only screen and (max-width: 532px) {

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
     

/*card start*/
    .card-hero {

        width: 100%;
        height: auto;
        padding: 20px;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        

    }

    .container {
        width: 280px;
        height: 380px;
        perspective: 800px;
        padding: 20px;
    }

    .container:hover > .card {
        cursor: pointer;
        transform: rotateY(180deg);
    }


    .card {
        
        border-radius: 10px;
        height: 100%;
        width: 100%;
        position: relative;
        transition: 1s;
        transform-style: preserve-3d;
        
    }



    .front,
    .back {
        height: 100%;
        width: 100%;
        border-radius: 10px;
        box-shadow:  rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;

        position: absolute;
        backface-visibility: hidden;
    }




    .pic-main {
        
        width: 100%;
        height: 70%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .pic-border {
        
        width: 70%;
        height: 70%;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        background: #fff;
    }
    .pic-1,
    .pic-2,
    .pic-3,
    .pic-4,
    .pic-5,
    .pic-6,
    .pic-7,
    .pic-8,
    .pic-9,
    .pic-10
    {
        
        width: 90%;
        height: 90%;
        border-radius: 50%;
        box-shadow: rgba(0, 0, 0, 0.15) 0px 20px 35px, rgba(0, 0, 0, 0.05) 0px 15px 10px;
    }

    /*each photo front*/

    .pic-1
    {
        
        background: url("pic/dinuka.jpg");
        background-size: cover;
        background-repeat: no-repeat;
    }
    .pic-2
    {
        
        background: url("pic/sineth2.jpg");
        background-size: cover;
        background-repeat: no-repeat;
       
    }
    .pic-3
    {
        
        background: url("pic/nemal1.jpg");
        background-size: cover;
        background-repeat: no-repeat;
    }
    .pic-4
    {
        
        background: url("pic/hashen.jpg");
        background-size: cover;
        background-repeat: no-repeat;
    }
    .pic-5
    {
        
        background: url("data:image/jpeg;base64,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");
        background-size: cover;
        background-repeat: no-repeat;
    }
    .pic-6
    {
        
        background: url("pic/heshan2.jpg");
        background-size: cover;
        background-repeat: no-repeat;
       
    }
    .pic-7
    {
        
        background: url("pic/naveen1.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-position-y: 20%;
    }
    .pic-8
    {
        
        background: url("pic/chanaka1.jpg");
        background-size: cover;
        background-repeat: no-repeat;
    }
    .pic-9
    {
        
        background: url("pic/imal1.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        
        

    }
    .pic-10
    {
        
        background: url("pic/yomasha.jpg");
        background-size: cover;
        background-repeat: no-repeat;
    }

    /*each photo front end*/

    .pic-center {
        
        
        width: 100%;
        height: 35%;
        position: absolute;
        z-index: -1;
        margin-top: 123px;
        
        background: linear-gradient(to bottom, #ffffff,#454545);
    }
    .dis-main {
        
        border-bottom-left-radius:10px ;
        border-bottom-right-radius:10px ;
        font-size: 13px;
        background: #8ccbe6;
        width: 100%;
        height: 30%;
        display: flex; justify-content: center; align-items: center;
        flex-direction: column;
        background: linear-gradient(to bottom,#494848, #000000);
        
        
        
    }     

    .name {
        font-size: 23px;
        margin-top: -30px;
        color: #fff;
        padding-left: 10px;
        padding-right: 10px;
    }

    /*card back*/

    .back  {

    transform: rotateY(180deg);

    }


    /*Links*/
    .bio-1,
    .bio-2,
    .bio-3,
    .bio-4,
    .bio-5,
    .bio-6,
    .bio-7,
    .bio-8,
    .bio-9,
    .bio-10
    {
        
        border-radius: 10px;
        width: 100%;
        height: 100%;
        display: flex; flex-direction: column; justify-content: center;align-items: center;

    }
    /* each photos back*/
    .bio-1
    {
        background: url("pic/dinuka.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position-x:27% ;


    }
    .bio-2
    {
        background: url("pic/sineth2.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position-x:50% ;


    }
    .bio-3
    {
        background: url("pic/nemal1.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position-x: 40%;

    }
    .bio-4
    {
        background: url("pic/hashen.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position-x: 10%;


    }
    .bio-5
    {
        background: url("https://media.sproutsocial.com/uploads/2022/06/profile-picture.jpeg");
        background-repeat: no-repeat;
        background-size: cover;


    }
    .bio-6
    {
        background: url("pic/heshan2.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position-x: 20%;


    }
    .bio-7
    {
        background: url("pic/naveen1.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position-x: 25%;
       

    }
    .bio-8
    {
        background: url("pic/chanaka1.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position-x: 20%;


    }
    .bio-9
    {
        background: url("pic/imal1.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position-x: 30%;


    }
    .bio-10
    {
        background: url("pic/yomasha.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position-x: 40%;
       


    }

    /* each photos end*/





    .bio-1::before,
    .bio-2::before,
    .bio-3::before,
    .bio-4::before,
    .bio-5::before,
    .bio-6::before,
    .bio-7::before,
    .bio-8::before,
    .bio-9::before,
    .bio-10::before
    {
        content: "";
        width: 100%;
        height: 100%;
        border-radius: 10px;
        background: #000;
        opacity: 60%;
        position: absolute;
        z-index: 1;
    }
    .link {

        width: 100%;
        height: 30%;
        display: flex;  justify-content: center;align-items: center;
        margin-top: 100px;
        z-index: 1;

    }


    .github,
    .inster,
    .linkedin{
        
        width: 40px;
        height: 40px;
        margin-left: 10px;
        margin-right: 10px;
        border-radius: 50%;
    }
    .job {
        color: #fff;
        font-size: 20px;
        margin-top: 140px;
        z-index: 1;
    }

    .github {
        
        background: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0fpxPRp0Qh4RQusyJm8MnaVzWTW4YJfPfjAKuki13pOkOOnK6QF5Ihj_nce0A1znH_34&usqp=CAU");
        background-repeat: no-repeat;
        background-size: 100% 100%;

    }   
    .inster{
        
        background: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQgBcBoIflWGt5xoQM3TpGj67j9Oap3h-KQzY8Q9qAlN15vcsNdBhq4iwsp5sqfZn6ayGI&usqp=CAU");
        background-repeat: no-repeat;
        background-size: 100% 100%;

    }   
    .linkedin {
        
        background: url("https://cdn1.iconfinder.com/data/icons/logotypes/32/circle-linkedin-512.png");
        background-repeat: no-repeat;
        background-size: 100% 100%;

    }   
    /*Links End*/





    /*card back End*/

/*card End*/


/*nsbm section*/

    .nsbm-container {
        
        margin-top: 50px;
        margin-bottom: 50px;
        background: url("pic/Picture1.png");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        filter: contrast(130%);
        animation: gray 6s infinite;
        
        
        
    }

    .nsbm-container-opacity {
    


        padding-top: 50px;
        padding-bottom: 50px;
        width: 100%;
        height:auto;
        display: flex;
        justify-content: center;
        align-items: center;
        
        background-color: rgba(180, 178, 178, 0.5);
        color: #ffffff;
    }



    .nsbm-center {
        border: 1px solid;
        width: 80%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 30px;
        padding-bottom: 50px;
        backdrop-filter: blur(30px);
        border-radius: 17px;
        text-align: center;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        
        
        
    }

    .nsbm-small-text > h3{
        
        color: #000;
        font-weight: 500;
    }


    .nsbm-big-text > h1 {

        font-size: 4.5rem;
        color: #000000;
        

    }
    .nsbm-big-text > h1 > span{

    
        font-weight: 100;
        

    }




    .nsbm-big-text::before {
        content: '';
        width: 100%;
        height: 100%;
        
        
    }

    @keyframes gray {
        
        
        50% {
            filter: contrast(200%);
        }
        
    }


    @media only screen and (max-width: 813px){
        .nsbm-big-text > h1 {
            
            font-size: 3rem;
            
            
            
        }
    }


    .nsbm-btn {
        width: 100%;
        height: auto;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .nsbm-visit {
        border: 1px solid;
        width: 150px;
        height: 50px;
        font-size: 17px;
        color: #fff;
        background: #000;
        border-radius: 10px;
        position: absolute;
        transition: .6s;
        margin-top: 50px;
        
        transform: translate(-50%, -50%);
        overflow: hidden;
    

    }


    .nsbm-visit:hover {
        background:#073c75;
        cursor: pointer;
        
    }

    .nsbm-visit::before{
        content: '';
        display: block;
        position: absolute;
        background: rgba(255,255,255,0.5);
        width: 60px;
        height: 100%;
        left: 0px;
        top:0;
        opacity: 1;
        filter: blur(40px);
        transform: translateX(-160px) skewX(-15deg);
    }

    .nsbm-visit:hover::before{
        transform: translateX(300px) skewX(-15deg);
        opacity: .6s;
        transition: .7s;
    }

    @media only screen and (max-width: 536px){
        .nsbm-visit {
            width: 130px;
            
        }
    }


/*nsbm section End*/



</style>



</head>
<body>

<div class="navbar-container">  
  <?php
    include 'nav.php';
  ?>
  
  <div class="big-text-container">
    <div class="big-text">
        <h1>Contact Us</h1>
    </div>
  </div>

</div>

<!--ug section-->
<div class="ug-container" >
        <div class="ug-text-container" >

            <div class="ug-big-text" data-aos="fade-right" data-aos-duration="1400">
                <h1><span>We are</span> Undergraduates</h1>
            </div>
            <div class="ug-blank"></div>
           
            <div class="ug-small-text" data-aos="zoom-in" data-aos-delay="20" data-aos-duration="1500">
            Sigiriya. This Website is the final outcome of the work of ten undergraduates at NSBM green university under the faculty of computing. We hope that the travellers from all around the world who will visit Sri Lanka will find this useful. Thank you for choosing our website and we will ensure that you will be able to find everything you need here!! Safe travels.
    
            </div>
        </div>
    </div>

<!--ug section end-->

<!--Developers cards-->
<div class="card-hero" data-aos="fade-up"   data-aos-delay="80">

<div class="container">
  <div class="card" >
    <div class="front">
        <div class="pic-main">
            <div class="pic-center"></div>
            <div class="pic-border">
                <div class="pic-1"></div>
            </div>
        </div>
        <div class="dis-main">
            <h1 class="name">Dinuka </h1>
            
        </div>
    </div>
    <div class="back ">
         <div class="bio-1">
            <h1 class="job">DEVELOPER</h1>
            <div class="link">
                <a href="https://github.com/dinuka07"> <div class="github" ></div></a>
                <a href=""> <div class="inster"></div></a>
                <a href=""> <div class="linkedin"></div></a>
                
                
            </div>
         </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="card">
    <div class="front">
        <div class="pic-main">
            <div class="pic-center"></div>
            <div class="pic-border">
                <div class="pic-2"></div>
            </div>
        </div>
        <div class="dis-main">
            <h1 class="name">Sineth</h1>
            
        </div>
    </div>
    <div class="back">
         <div class="bio-2">
            <h1 class="job">DEVELOPER</h1>
            <div class="link">
                <a href="https://github.com/sineth-Fdo"> <div class="github" ></div></a>
                <a href=""> <div class="inster"></div></a>
                <a href=""> <div class="linkedin"></div></a>
            </div>
         </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="card">
    <div class="front">
        <div class="pic-main">
            <div class="pic-center"></div>
            <div class="pic-border">
                <div class="pic-3"></div>
            </div>
        </div>
        <div class="dis-main">
            <h1 class="name">Nemal</h1>
            
        </div>
    </div>
    <div class="back">
         <div class="bio-3">
            <h1 class="job">DEVELOPER</h1>
            <div class="link">
                <a href="https://github.com/NemalFdo"> <div class="github" ></div></a>
                <a href=""> <div class="inster"></div></a>
                <a href=""> <div class="linkedin"></div></a>
            </div>
         </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="card">
    <div class="front">
        <div class="pic-main">
            <div class="pic-center"></div>
            <div class="pic-border">
                <div class="pic-4"></div>
            </div>
        </div>
        <div class="dis-main">
            <h1 class="name">Hashen</h1>
            
        </div>
    </div>
    <div class="back">
         <div class="bio-4">
            <h1 class="job">UI / UX DESIGNER</h1>
            <div class="link">
                <a href="https://github.com/sineth-Fdo"> <div class="github" ></div></a>
                <a href=""> <div class="inster"></div></a>
                <a href=""> <div class="linkedin"></div></a>
            </div>
         </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="card">
    <div class="front">
        <div class="pic-main">
            <div class="pic-center"></div>
            <div class="pic-border">
                <div class="pic-5"></div>
            </div>
        </div>
        <div class="dis-main">
            <h1 class="name">Rusith</h1>
            
        </div>
    </div>
    <div class="back">
         <div class="bio-5">
            <h1 class="job">UI / UX DESIGNER</h1>
            <div class="link">
                <a href="https://github.com/sineth-Fdo"> <div class="github" ></div></a>
                <a href=""> <div class="inster"></div></a>
                <a href=""> <div class="linkedin"></div></a>
            </div>
         </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="card">
    <div class="front">
        <div class="pic-main">
            <div class="pic-center"></div>
            <div class="pic-border">
                <div class="pic-6"></div>
            </div>
        </div>
        <div class="dis-main">
            <h1 class="name">Heshan</h1>
            
        </div>
    </div>
    <div class="back">
         <div class="bio-6">
            <h1 class="job">Testing / QA</h1>
            <div class="link">
                <a href="https://github.com/sineth-Fdo"> <div class="github" ></div></a>
                <a href=""> <div class="inster"></div></a>
                <a href=""> <div class="linkedin"></div></a>
            </div>
         </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="card">
    <div class="front">
        <div class="pic-main">
            <div class="pic-center"></div>
            <div class="pic-border">
                <div class="pic-7"></div>
            </div>
        </div>
        <div class="dis-main">
            <h1 class="name">Naveen</h1>
            
        </div>
    </div>
    <div class="back">
         <div class="bio-7">
            <h1 class="job">Testing / QA</h1>
            <div class="link">
                <a href="https://github.com/sineth-Fdo"> <div class="github" ></div></a>
                <a href=""> <div class="inster"></div></a>
                <a href=""> <div class="linkedin"></div></a>
            </div>
         </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="card">
    <div class="front">
        <div class="pic-main">
            <div class="pic-center"></div>
            <div class="pic-border">
                <div class="pic-8"></div>
            </div>
        </div>
        <div class="dis-main">
            <h1 class="name">Chanaka</h1>
            
        </div>
    </div>
    <div class="back">
         <div class="bio-8">
            <h1 class="job">Testing / QA</h1>
            <div class="link">
                <a href="https://github.com/sineth-Fdo"> <div class="github" ></div></a>
                <a href=""> <div class="inster"></div></a>
                <a href=""> <div class="linkedin"></div></a>
            </div>
         </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="card">
    <div class="front">
        <div class="pic-main">
            <div class="pic-center"></div>
            <div class="pic-border">
                <div class="pic-9"></div>
            </div>
        </div>
        <div class="dis-main">
            <h1 class="name">Imal</h1>
            
        </div>
    </div>
    <div class="back">
         <div class="bio-9">
            <h1 class="job">RESEARCHER</h1>
            <div class="link">
                <a href="https://github.com/sineth-Fdo"> <div class="github" ></div></a>
                <a href=""> <div class="inster"></div></a>
                <a href=""> <div class="linkedin"></div></a>
            </div>
         </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="card">
    <div class="front">
        <div class="pic-main">
            <div class="pic-center"></div>
            <div class="pic-border">
                <div class="pic-10"></div>
            </div>
        </div>
        <div class="dis-main">
            <h1 class="name">Yomasha</h1>
            
        </div>
    </div>
    <div class="back">
         <div class="bio-10">
            <h1 class="job">RESEARCHER </h1>
            <div class="link">
                <a href="https://github.com/sineth-Fdo"> <div class="github" ></div></a>
                <a href=""> <div class="inster"></div></a>
                <a href=""> <div class="linkedin"></div></a>
            </div>
         </div>
    </div>
  </div>
</div>

</div>

<!--Developers cards End-->

<!--Nsbm section-->
  
<div class="nsbm-container">
        
        <div class="nsbm-container-opacity">
            <div class="nsbm-center" data-aos="fade-up" >

                <div class="nsbm-big-text">
                    <h1><span>We are from</span> NSBM Green University</h1>
                </div>
                <br>
                <div class="nsbm-small-text">
    
                   <h3> NSBM Green University, the nation’s premier degree-awarding institute, is the first of
    its kind in South Asia. It is a government-owned self-financed institute that operates
    under the purview of the Ministry of Education. As a leading educational centre in the
    country, NSBM has evolved into becoming a highly responsible higher education
    institute that offers unique opportunities and holistic education on par with international
    standards while promoting sustainable living.
    <br>
    <br>
    NSBM offers a plethora of undergraduate and postgraduate degree programmes under
    five faculties: Business, Computing, Engineering, Science and Postgraduate &
    Professional Advancement. These study programmes at NSBM are either its own
    programmes recognised by the University Grants Commission and the Ministry of
    Higher Education or world-class international programmes conducted in affiliation with
    top-ranked foreign universities such as University of Plymouth, UK, and Victoria
    University, Australia.
    <br>
    <br>
    Focused on producing competent professionals and innovative entrepreneurs for the
    increasingly globalising world, NSBM nurtures its graduates to become productive
    citizens of society with their specialisation ranging in study fields such as Business,
    Management, Computing, IT, Engineering, Science, Psychology, Nursing, Interior
    design, Quantity Surveying, Law and Multimedia.
    <br>
    <br>
    Inspired by the vision of being Sri Lanka’s best-performing graduate school and being
    recognised internationally, NSBM currently achieves approximately 3000 new
    enrollments per year and houses above 11,000 students reading over 50 degree
    programmes under 4 faculties. Moreover, over the years, NSBM Green University has
    gifted the nation with 14,000+ graduates and has proved its global presence with an
    alumni network spread all across the world.
    <br>
    <br>
    Nestling on a 40-acre land amidst the greenery and serenity in Pitipana, Homagama,
    NSBM Green University, is an ultra-modern university complex constructed with stateof-the-art facilities and amenities that provides the perfect setting for high-quality
    teaching, learning and research. 
    </h3>
   
    
    <br>
    
    
    <div class="nsbm-btn"  data-aos="zoom-in-up"  data-aos-delay="130">
       <a href="https://www.nsbm.ac.lk/story-of-nsbm/"> 
         <button class="nsbm-visit"  >visit NSBM</button>
        </a>

    </div>
    
                </div>
            </div>
        </div>
    </div>

    

<!--Nsbm section End-->


<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>



