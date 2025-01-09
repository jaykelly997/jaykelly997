<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/dashboard-Css.css">
    <link rel="stylesheet" href="../../fontawesome-free-6.1.1-web/css/all.min.css">
    <title>Emmako_Dashboard</title>
</head>
<body onload="preload()">
    <div class="topbar">
        <div class="container">
            <div class="element">
                <div class="logo">emmako</div>
                
                <div class="containcone">
                <div class="profile">
                    <div class="text">
                        <h4>Mr. Emmanuel Akam</h4>
                        <h5>ceo</h5>
                        <p>status: <i>online</i></p>
                        <span>04-01-2024</span>
                    </div>
                    <div class="prof">
                        <img src="../../images/avater.jpg" alt="">
                    </div>
                </div>
                <div class="log">
                    <a href="profile-setting.php">profile setting</a>
                    <a href="log-out.php">log out</a>
                </div>
</div>
            </div>
        </div>
    </div>


    <script src="../../js/jquery.js"></script>
    <script>
         $(document).ready(function() {
            
            $('.profile').click(function() {
                $('.log').toggleClass('appear')

            })
        })

    </script>
