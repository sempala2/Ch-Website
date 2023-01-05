<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=nknut Antiqua">
    <title>ch-web</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body {
            background: black;}
        header{
            background-color: black;
            height: 100px;
            width: 100%;
            display: flex;
            position: relative;
        }
        nav{
            position: absolute;
            align-self: center;
            right: 10%;
        }
        ul{
            display: flex;
            list-style-type: none;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bolder;
            font-size: large;
            gap: 20px;
        }
        li{
            text-decoration: underline;
            text-decoration-color: transparent;
            transition: ease .2s;
            user-select: none;
            cursor: pointer;
        }
        li:hover{
           text-decoration-color: red;
            
        }
        .logo{
            position: absolute;
            color: white;
            align-self: center;
            font-size:large;
            left: 10%;
        }
        main{
            position: relative;
        }
        .main-bg{
            position: absolute;
            width: 100vh;
            height: 100%;
        }
        #background-video{
            top: 0;
            width: 100vw;
            height: 100vh;
            object-position: center;
            object-fit: cover;

        }
        .c-name, .c-slogan{
            position: absolute;
            color: white;
            top: 0;
            width: 100%;
            text-align: center;
            align-self: center;
        }
        @media (max-width: 750px) {
    #background-video { display: none; }
    body {
      background: url("https://assets.codepen.io/6093409/river.jpg") no-repeat;
      background-size: cover;
    }
}
        .c-name, .c-slogan {
            color: white;
            font-family: Trebuchet MS;
            font-weight: bold;
            text-align: center;
        }
        .c-name {
            font-size: 6rem;
            margin-top: 30vh; 
            font-family: 'nknut Antiqua', serif;
        }

        .c-slogan { font-size: 3rem; }

    </style>
</head>
<body>
    <header>
        <div class="logo"><img src="logo-demo.png" alt="logo" height="120px"></div>
        <nav>
            <ul>
                <li>Home</li>
                <li>About Us</li>
                <li>News & Events</li>
                <li>Testimonies</li>
                <li>Give</li>
                <li>Contact</li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="main-bg">
            <video id="background-video" autoplay loop muted poster="https://assets.codepen.io/6093409/river.jpg">
                <source src="https://assets.codepen.io/6093409/river.mp4" type="video/mp4">
              </video>
              
              <h1 class="c-name">CHURCH NAME</h1>
              <h2 class="c-slogan">Church Slogan</h2>
        </div>
        <div class="content">
            <div class="card">
                <div class="img"><img src="logo-demo.png" alt=""></div>
                <div class="card-info">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Inventore perferendis fugit, dolore nulla quibusdam natus voluptatem soluta, 
                    quaerat sed voluptas enim! Quae quisquam corrupti iusto magni numquam, porro quia! Eos?
                </div>
            </div>
        </div>
    </main>
</body>
</html>