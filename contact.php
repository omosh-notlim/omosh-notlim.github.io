<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
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
            <li><a href="about"><i class="bi bi-person-lines-fill"></i> About</a></li>
            <li class="focus"><a href="#"><i class="bi bi-envelope-fill"></i> Contact</a></li>
            
        </ul>
    </nav>

    <div class="content-area">
        <div class="wrapper contact-page">
            <div class="message" data-aos="flip-up">
                <h4>Contact me</h4>
                <form action="" method="POST">
                    <?php 
                        if(isset($_POST['send'])){
                            $to = "omondimilton43@gmail.com";
                            $from = $_POST['email'];
                            $name = $_POST['name'];
                            $phone = $_POST['phone'];

                            $subject = $_POST['subject'];
                            $subject2 = "Copy of your form submission";

                            $message = $from . " " . "Phone: " . $phone . "\n\n" . "Name: " . $name . "\n\n" . " wrote the following:" . "\n\n" .  $_POST['message'];
                            $message2 = $_POST['message'];

                            $headers = "From:" . $from;
                            $headers2 = "To:" . $to;
                            mail($to,$subject,$message,$headers);
                            mail($from,$subject2,$message2,$headers2);

                            echo '<script type ="text/JavaScript">';  
                            echo 'alert("Message Sent. I will respond shortly.")';  
                            echo '</script>';
                        }
                    ?>
                    <div class="my-input"><input type="text" name="name" placeholder="Name" required></div>
                    <div class="my-input"><input type="email" name="email" placeholder="Email" required></div>
                    <div class="my-input"><input type="number" name="phone" placeholder="Phone" required></div>
                    <div class="my-input"><input type="text" name="subject" placeholder="Subject" required></div>
                    <div class="my-text" required><textarea placeholder="Enter the message..." name="message"></textarea></div>
                    <div class="send-bt">
                        <div class="send-bt-1">
                            <input type="submit" name="send" value="SEND">
                        </div>
                        <div class="send-bt-2">
                            <input type="reset" name="clear" value="CLEAR">
                        </div>
                    </div>
                </form>
            </div>
            <div class="contact" data-aos="zoom-in">
                <div class="call">
                    <i class="bi bi-telephone-fill"></i>
                    <a href="tel:254797561665">+254 797561665</a>
                </div>
                <div class="call">
                    <i class="bi bi-envelope-fill"></i>
                    <a href="mailto:omondimilton43@gmail.com">omondimilton43@gmail.com</a>
                </div>
                <div class="call">
                    <i class="bi bi-whatsapp"></i>
                    <a href="https://api.whatsapp.com/send?phone=254797561665">+254 797561665</a>
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

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: false
        });
    </script>
</body>
</html>