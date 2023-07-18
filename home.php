<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="style.css">
   
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>

	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"/>

	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>

</head>
<body>
<div class="navbar-container">  
  <?php
    <section id="#" class="home">
    <video class="video-slide" src="s3.mp4" autoplay muted loop></video>
    <div class="content">
        <h1> <span  class="r"></span><br></h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, animi. Amet illo, dignissimos quisquam voluptatibus explicabo quaerat rem. Temporibus repellendus voluptas quidem assumenda harum ex reprehenderit optio, dolorum laborum et.</p>
    <a href="#">read more</a>
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
     strings : ["Anicient Rock"],
     loop : true,
     typeSpeed : 500,
     backSpeed : 80,
     startDelay : 1000,
     backDelay : 10000
    })
   
    
    
 </script>
  ?>
</div>
   
   This is home
    
</body>
</html>