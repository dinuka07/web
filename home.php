<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="css/home.css">
   
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>

	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"/>

	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>

    <title>Document</title>
</head>
<body>
<div class="navbar-container">  
  <?php
    include 'nav.php';
  ?>
</div>
   
<section id="#" class="home">
        <video class="video-slide" src="s3.mp4" autoplay muted loop style="opacity: 0.7;"></video>
        
        <div class="content">
           
            <div class="row">
                <div class="col">
                    <h1>Welcome<br>to <br><span class="r">Sigiriya</span></h1>
                    
                
                   
                   
                    
                    
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis excepturi vero facere omnis veritatis natus magnam pariatur nam, ut eos cum, quia ducimus illo, quaerat et praesentium culpa quas sapiente.</p>
               
               <a href=""  style=" border-radius: 10px; height: 30px;box-shadow: 1px 1px 50px 0.1px black;" >  Explore  </a>
               
    
                </div>
                
            </div>
       
        </div>
       
        
        <div class="media-icons">
            <a href="https://web.facebook.com/dinuka.nanayakkara.5" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
			
			<a href="https://instagram.com/dinuka_nanayakkara_?igshid=NTc4MTIwNjQ2YQ=="><i class="fa-brands fa-instagram"></i></a>
		
			
			<a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
        </div>
       
    </section>

       
    <script type="text/javascript">
        const menuBtn = document.querySelector("menu-btn");
        const navigation = document.querySelector("navigation");

        menuBtn.addEventListener("click",() =>{
            menuBtn.classList.toggle("active");
            navigation.classList.toggle("active");
        });

        const btns = document.querySelectorAll("nav-btn");

        var sliderNav = function(manual){
            btns[manual].classList.add("active");
        }
        btns.forEach((btn,i)=>{
            btn.addEventListener("click",()=>{
                sliderNav(i);
            } );
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        var typingEffect = new Typed(".r",{
         strings : ["Sigiriya"],
         loop : true,
         typeSpeed : 1000,
	 backSpeed : 800,
	 startDelay : 1000,
	 backDelay : 30000
        })
       
        
        
     </script>
    
</body>
</html>