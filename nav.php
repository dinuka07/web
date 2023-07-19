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
    .dropdown_menu.open {
     height: 330px;
     background: #000;
     
     z-index:100;

 
}
</style>
</head>
<body>

        <header data-aos="fade-down" data-aos-delay="70">
            <div class="navbar">
                <div class="logo"><a href="">SIGIRIYA</a></div>
    
                <ul class="links">
                    <li><a href="home.php" class="abc">Home</a></li>
                    <li><a href="">History</a></li>
                    <li><a href="">Travel</a></li>
                    <li><a href="">Climb</a></li>
                    <li><a href="">Tickets</a></li>
                    <li><a href="">Gallery</a></li>
                </ul>
                <a href="about.php" class="action_btn">Contact us</a>
                <div class="toggle_btn">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
    
            <div class="dropdown_menu">
               
                    <li><a href="home.php">Home</a></li>
                    <li><a href="">History</a></li>
                    <li><a href="">Travel</a></li>
                    <li><a href="">Climb</a></li>
                    <li><a href="">Tickets</a></li>
                    <li><a href="">Gallery</a></li>
                    <li><a href="about.php" class="action_btn">Contact us</a></li>
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