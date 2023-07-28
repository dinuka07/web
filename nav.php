<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>


    <link rel="stylesheet" href="css/nav.css">
<style>

    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
    }



    li {
    list-style: none;
    }
    a{
    text-decoration: none;
    color: #fff;
    font-size: 1.2rem;

    }

    a:hover {
    color: rgba(5, 32, 115, 100);
    
    
    
    }

    header {
    position: relative;
    padding: 0 2rem;
    backdrop-filter: blur(15px);
    
    

    
    }

    .navbar {
    width: 100%;
    height: 80px;
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    }

    .navbar .logo {
        
        height: 70px;
        width: 110px;

    }

    

    .navbar .logo a img {
        
        width: 70px;
        height: 100%;

    }

    .navbar .links {
    display: flex;
    gap: 2rem;
    }

    .navbar .toggle_btn {
    color: #fff;
    font-size: 1.5rem;
    cursor: pointer;
    display: none;
    }

    .action_btn {
    background-color: rgba(6, 115, 154, 100);
    color: #fff;
    padding: 0.5rem 1rem;
    border: none;
    outline: none;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: bold;
    cursor: pointer;
    transition: scale 0.2 ease;

    }

    .action_btn:hover {
    scale: 1.05;
    color: #fff;
    } 

    .action_btn:active {
    scale: 0.95;
    }

    /*Dropdown menu*/

    .dropdown_menu {
    display: none;
    position: absolute;
    right: 2rem;
    top: 60px;
    height: 0;
    width: 300px;
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(15px);
    border-radius: 10px;
    overflow: hidden;
    transition: height 0.2 cubic-bezier(0.175, 0.885, 0.32, 1.275);

    }

    .dropdown_menu.open {
    height: 330px;
    }

    .dropdown_menu li {
    padding: 0.7rem;
    display: flex;
    align-items: center;
    justify-content: center;
    }

    .dropdown_menu .action_btn {
    width: 100%;
    display: flex;
    justify-content: center;
    }



    /*Responsive nav*/

    @media (max-width: 992px) {
    .navbar .links,
    .navbar .action_btn {
        display: none;  
    }

    .navbar .toggle_btn {
        display: block;
    }

    .dropdown_menu {
        display: block;
    } 


    }

    @media (max-width: 576px) {
    .dropdown_menu {
        left: 2rem;
        width: unset;
    }
    }

   
    .dropdown_menu.open 
    {
     height: 330px;
     background: #000;
     z-index:100;
     
     
    }
</style>
</head>
<body>
        

        <header data-aos="fade-down" data-aos-delay="70">
            <div class="navbar">
                <div class="logo"><a href="index.php"><img src="pic/Logo.png" alt=""></a></div>
                
                <ul class="links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="history.php">History</a></li>
                    <li><a href="travel.php">Travel</a></li>
                    <li><a href="places.php">Places</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="feedback.php">Feedback</a></li>
                </ul>
                <a href="contact.php" class="action_btn">Contact us</a>
                <div class="toggle_btn">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
            
            <div class="dropdown_menu">
                
                    <li><a href="index.php">Home</a></li>
                    <li><a href="history.php">History</a></li>
                    <li><a href="travel.php">Travel</a></li>
                    <li><a href="places.php">Places</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="feedback.php">Feedback</a></li>
                    <li><a href="contact.php" class="action_btn">Contact us</a></li>
            </div>
            </header>

   

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