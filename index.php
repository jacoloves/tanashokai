<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>たなしょ会</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
    <script src="main.js"></script>
    <link rel="shortcut icon" href="{{ url_for('static', filename='favicon.ico') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
        <div class="main">
            <div class="container_first">
                <h2>たなしょ会</h2>
                <p>Developers_Circle</p>
                <div class="first_img">
                    <img src="img/fisrt_img.png">
                </div>
                <a href="#icon_img"><img class="allow_first" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj48c3ZnIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHZpZXdCb3g9IjAgMCA0OCAyNCIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4bWw6c3BhY2U9InByZXNlcnZlIiB4bWxuczpzZXJpZj0iaHR0cDovL3d3dy5zZXJpZi5jb20vIiBzdHlsZT0iZmlsbC1ydWxlOmV2ZW5vZGQ7Y2xpcC1ydWxlOmV2ZW5vZGQ7c3Ryb2tlLWxpbmVjYXA6cm91bmQ7c3Ryb2tlLWxpbmVqb2luOnJvdW5kO3N0cm9rZS1taXRlcmxpbWl0OjEuNTsiPjxnPjxwYXRoIGQ9Ik0yNCwyM2wyMiwtMjIiIHN0eWxlPSJmaWxsOm5vbmU7c3Ryb2tlOiM4ODg7c3Ryb2tlLXdpZHRoOjJweDsiLz48cGF0aCBkPSJNMjQsMjNsLTIyLC0yMiIgc3R5bGU9ImZpbGw6bm9uZTtzdHJva2U6Izg4ODtzdHJva2Utd2lkdGg6MnB4OyIvPjwvZz48L3N2Zz4=" alt="allow"></a>
            </div>
            <div class="container_second">
                <h2>ABOUT US</h2>
                <h1>たなしょ会</h1>
                <p id="icon_img">
                    東京で働いているエンジニア集団。<br>
                    エンジニア談義したり鍋を突っついたりして、<br>
                    わいわいがやがや活動しています。<br>
                </p>
                <div class="sns_img">
                    <a href="https://twitter.com/piklus100yen"><img class="twitter_icon" src="./img/Twitter_Logo_Blue.png"></a>
                    <a href="https://github.com/jacoloves"><img class="github_icon" src="./img/GitHub-Mark.png"></a>
                    <a href="https://motomidoridevelopers.slack.com"><img class="slack_icon" src="./img/Slack_Mark.png"></a>
                </div>
            </div>
            <div class="container_third" >
                <h2>SKILLS</h2>
                <ul class="skill_set">
                    <li class="skill html">
                        <img src="./img/html_logo.png">
                        <p>HTML5</p>
                    </li>
                    <li class="skill css">
                        <img src="./img/css_icon.png">
                        <p>CSS3</p>
                    </li>
                    <li class="skill php">
                        <img src="./img/php-logo.svg">
                        <p>PHP</p>
                    </li>
                    <li class="skill c">
                        <img src="./img/c_icon.png">
                        <p>C</p>
                    </li>
                </ul>
            </div>
            <div class="container_fourth">
                <h1>MEMBER</h1>
                <ul class="members">
                    <li class="member m_first">
                        <div class="shokai">  
                            <img src="./img/fisrt_img.png">
                            <p class="tanto">ランニング担当</p>
                            <p class="name">たなしょ</p>
                        </div>
                    </li>
                    <li class="member m_second">
                        <div class="shokai">
                            <img src="https://pbs.twimg.com/profile_images/1043310228115050496/LDy7CD7y_400x400.jpg">
                            <p class="tanto">作家担当</p>
                            <p class="name">たまき先生</p>
                        </div>
                    </li>
                    <li class="member m_third">
                        <div class="shokai">
                            <img src="https://pbs.twimg.com/profile_images/984382145752809472/XUZfXn27_400x400.jpg">
                            <p class="tanto">二郎担当</p>
                            <p class="name">にへー氏</p>
                        </div>
                    </li>
                    <li class="member m_fourth">
                        <div class="shokai">
                            <img src="https://pbs.twimg.com/profile_images/3019243980/db0a6b51022b1b6a0187330715206032_400x400.jpeg">
                            <p class="tanto">先輩担当</p>
                            <p class="name">ぱいせん</p>
                        </div>
                    </li>
                </ul>
            </div>
    </div>
    <footer>
        <div class="footer_font">
            <p>Copyright 2018 たなしょ会</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>