<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <link rel="stylesheet" type="text/css" href="home.css">
    <link rel="stylesheet" type="text/css" href="fonts/css/all.css">
    <link rel="stylesheet" href="fontboot/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">

    <title>Home</title>
</head>
<body>
    <div class="btn">
        <i class="bi bi-list"></i>
        <i class="bi bi-x"></i>
    </div>
    <nav class="sidebar">
        <div class="text">
            <div class="image"><img src="images/mo.jpeg"></div>
            <p>Omondi Milton</p>
        </div>
        <ul>
            <li><a href="index"><i class="bi bi-house-fill"></i> Home</a></li>
            <li class="focus"><a href="#"><i class="bi bi-person-lines-fill"></i> About</a></li>
            <li><a href="contact"><i class="bi bi-envelope-fill"></i> Contact</a></li>
            
        </ul>
    </nav>

    <div class="content-area">
        <div class="wrapper">
            <p class="about-p">About</p>
            <div class="about">
                <div class="image" data-aos="fade-right">
                    <img src="images/me3.jpeg">
                </div>
                <div class="about-content" data-aos="fade-left">
                   <div class="buttons">
                       <button class="bt1" id="btn_diva" onclick="one()">About</button>
                       <button class="bt2" id="btn_divb" onclick="two()">Profile</button>
                       <button class="bt3" id="btn_divc" onclick="three()">Languages</button>
                   </div>
                   <div class="blocks">
                       <div class="diva" id="diva" data-aos="fade-in">
                           <p class="about-p-2">I am a web developer with a substancial amount of experience in this field. I also have the capacity to assist you in basic device repair and maintenance, and conduct a diagnosis on your computer related equipments as well to help you identify the technological problem you may be facing and its possible solution which will assist you in making a better decision in countering the problem.<br><br>
                           I am someone who views all projects under me with the same level of importance and always strives to deliver the perceived end product and in time. Contact me today and you will not be disappointed.</p>
                       </div>
                       <div class="diva" id="divb">
                           <div class="profile">
                               <p><span class="label">Name:</span> <span class="text">Omondi Milton</span></p>
                               <p><span class="label">Email:</span> <span class="text">omondimilton43@gmail.com</span></p>
                               <p><span class="label">Phone:</span> <span class="text">+254797561665</span></p>
                               <p><span class="label">Location:</span> <span class="text">Donholm, Nairobi, Kenya</span></p>
                           </div>
                       </div>
                       <div class="diva" id="divc">
                           <p>
                                <div class="progress-div">
                                   <label for="file">HTML, CSS, Javascript</label><br>
                                    <progress id="file" value="85" max="100"> 85% </progress>
                                </div>
                                <div class="progress-div">
                                    <label for="file">PHP</label><br>
                                    <progress id="file" value="80" max="100"> 80% </progress>
                                </div>
                                <div class="progress-div">
                                    <label for="file">Python</label><br>
                                    <progress id="file" value="75" max="100"> 75% </progress>
                                </div>
                                <div class="progress-div">
                                    <label for="file">Flask</label><br>
                                    <progress id="file" value="70" max="100"> 70% </progress>
                                </div>
                                <div class="progress-div">
                                    <label for="file">SQL(MySQL database)</label><br>
                                    <progress id="file" value="80" max="100"> 80% </progress>
                                </div>
                           </p>
                       </div>
                       
                   </div>
                   <button class="contact-redirect" onclick="window.location.href='contact';">
                       Contact me
                   </button>
                </div>
            </div>
            
        </div>
    </div>




    <script>
        $('.btn').click(function(){
            $(this).toggleClass("click");
            $('.sidebar').toggleClass("show");
        });

        $('nav ul li').click(function(){
            $(this).addClass("active").siblings().removeClass("active");
        });

    </script>

    <script>
        var btn_diva = document.getElementById("btn_diva");
        var btn_divb = document.getElementById("btn_divb");
        var btn_divc = document.getElementById("btn_divc");

        var diva = document.getElementById('diva');
        var divb = document.getElementById('divb');
        var divc = document.getElementById('divc');

        function one(){
            diva.style.display="block";
            divb.style.display="none";
            divc.style.display="none";

            btn_diva.style.color="#00e6e6";
            btn_divb.style.color="#404040";
            btn_divc.style.color="#404040";
        }

        function two(){
            divb.style.display="block";
            diva.style.display="none";
            divc.style.display="none";

            btn_divb.style.color="#00e6e6";
            btn_diva.style.color="#404040";
            btn_divc.style.color="#404040";
        }

        function three(){
            divc.style.display="block";
            divb.style.display="none";
            diva.style.display="none";

            btn_divc.style.color="#00e6e6";
            btn_divb.style.color="#404040";
            btn_diva.style.color="#404040";
        }
    </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: false
        });
    </script>
</body>
</html>