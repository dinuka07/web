<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="nav.css">
</head>
<body>
    <div class="nav-container">
        <div class="logo-main"> </div>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <nav class="nav-bar">
            <ul>
                <li><a href="" class="active">Home</a></li>
                      
                <li><a href="" class="">History</a></li>        
           
                <li><a href="" class="">Gallery</a></li>          
            
                <li><a href="" class=""> Travel</a></li>         
            
                <li><a href="" class="">Climb</a></li>

                <li><a href="" class="">Tikets</a></li>

                <li><a href="" class="">About</a></li>
            </ul>
        </nav>

    </div>
    


    <script>
        hamburger = document.querySelector(".hamburger");
        hamburger = onclick = function() {
            navBar = document.querySelector(".nav-bar");
            navBar.classList.toggle("active");
        }

    </script>
</body>
</html>