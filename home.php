<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="home.css">
   
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>

	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"/>

	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>




</head>
<body>
    
  

       
        <section id="#" class="home">
            <div>
            <header data-aos="fade-down" data-aos-delay="70">
                <div class="navbar">
                    <div class="logo"><a href="">SIGIRIYA</a></div>
        
                    <ul class="links">
                        <li><a href="home.php" class="abc">Home</a></li>
                        <li><a href="history.php">History</a></li>
                        <li><a href="travel.php">Travel</a></li>
                        <li><a href="tickets.php">Tickets</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="feedback.php">Feedback</a></li>
                    </ul>
                    <a href="contact.php" class="action_btn">Contact us</a>
                    <div class="toggle_btn">
                        <i class="fa-solid fa-bars"></i>
                    </div>
                </div>
        
                <div class="dropdown_menu">
                   
                        <li><a href="home.php">Home</a></li>
                        <li><a href="history.php">History</a></li>
                        <li><a href="travel.php">Travel</a></li>
                        <li><a href="tickets.php">Tickets</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="feedback.php">Feedback</a></li>
                        <li><a href="contact.php" class="action_btn">Contact us</a></li>
                </div>
            </header>
        </div>
        <div>
            <video class="video-slide" src="sigiriya_web_3.mp4" autoplay muted loop style="opacity: 0.7;"></video></div>
            
            <div class="content">
               
                <div class="row">
                    <div class="col">
                        <h2> Welcome to</h2>
                        
                        <h1><span class="input" ></span></h1>
                        
                        
                        
                        
                        
                        
                        <p style="margin-top: 50px; line-height: 22px; font-family: cursive;">"Sigiriya Rock: Unveiling the Majestic Marvels of Ancient Sri Lanka, Where the Echoes of History Resonate and Nature's Splendor Ascends to the Heavens, Inviting You to a Journey of Vertical Legacy and Enchanted Serenity."</p>
                   
                        <a class="explore" href=""  style=" border-radius: 10px; height: 30px;box-shadow: 1px 1px 50px 0.1px black; color: rgba(6, 115, 154, 100);"  >  Explore  </a>
                        
        
                    </div>
                    
                </div>
           
            </div>
            
           
            
            <div class="media-icons">
                <a href="https://web.facebook.com/dinuka.nanayakkara.5" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                
                <a href="https://instagram.com/dinuka_nanayakkara_?igshid=NTc4MTIwNjQ2YQ=="><i class="fa-brands fa-instagram"></i></a>
            
                
                <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
            </div>
           
        </section>
  <?php
   include 'footer.php';
  ?>
   
    
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
     <script>
        const toggleBtn = document.querySelector('.toggle_btn');
        const toggleBtnIcon = document.querySelector('.toggle_btn i');
        const dropDownMenu = document.querySelector('.dropdown_menu');

        toggleBtn.onclick = function () {
            dropDownMenu.classList.toggle('open')
            const isOpen = dropDownMenu.classList.contains('open')

            toggleBtnIcon.classList = isOpen
            ?'fa-solid fa-xmark'
            :'fa-solid fa-bars'


        }

    </script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
   
     <script>
        var typingEffect = new Typed(".input",{
         strings : ["Sigiriya."],
         loop : true,
         typeSpeed : 350,
         backSpeed : 200,
         startDelay : 1000,
         backDelay : 30000
        })
        
     </script>
</body>

</html>