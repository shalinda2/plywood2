    <?php include "head.php"; ?>
    <title>Contact Sandakelum Plywood Ganemulla Sri Lanka</title>
    <style>
        #sec0001{
            background: url(img/phone-on-plywood.jpg);
            background-size: cover;
            margin-top: -100px;
            padding: 100px 0 0;
            height: 95vh;
        }

        #sec0001Container{
            width: 100%;
            height: 79.5vh;
            background: rgba(26, 26, 26, 0.3);
            position: absolute;
            top: 105px;
        }

        #contents{
            display: block;
            margin-top: 150px;
        }

        #contHeadd{
            font-family: var(--font-1);
            text-transform: uppercase;
            font-size: 35px;
            color: #ffffff;
            margin-bottom: 30px;
        }

        #contentHead{
            display: inline-block;
            color: #ffcc00;
            font-family: var(--font-1);
            font-size: 30px;
            text-transform: uppercase;
            font-weight: bold;
            margin-bottom: 5px;
            margin-right: 15px;
        }

        #contentPara{
            font-size: 16px;
            font-family: var(--font-2);
            color: #ffffff;
            padding-right: 650px;
        }

        #subsec0001{
            background: #beb0a7;
            width: 100%;
            height: 300px;
        }

        #sec0002{
            background: #ffffff;
            padding: 230px 0 55px;
            position: relative;
        }

        #map{
            display: flex;
            justify-content: center;
            position: relative;
            z-index: 1;
            margin-top: -470px;
        }

        #button{
            font-family: var(--font-1);
            display: inline-block;
            text-decoration: none;
            color: black;
            background: linear-gradient(360deg, #e9b76d, #fecb07);
            padding: 8px 15px;
            border-radius: 25px;
            font-size: 25px;
            width: 250px;
            font-weight: 600;
            position: absolute;
            top: -40px;
            left: 520px;
            z-index: 1;
        }

        #map::before{
            content: "";
            width: 145px;
            height: 190px;
            display: block;
            background: #65352e;
            position: absolute;
            right: 10px;
            top: -20px;
            z-index: -1;
        }

        #map::after{
            content: "";
            width: 145px;
            height: 190px;
            display: block;
            background: #a57b4a;
            position: absolute;
            left: 10px;
            bottom: -20px;
            z-index: -1;
        }



        #sec0002Content{
            margin-top: 100px;
        }

        #sec0002Heading{
            font-family: var(--font-1);
            font-size: 35px;
            margin-bottom: 45px;
        }

        #sec0002Para{
            font-family: var(--font-2);
            font-size: 16px;
            padding: 10px;
            line-height: 1.5;
            margin-bottom: 30px;
        }

        #sec0002Box{
            display: flex;
            justify-content: space-between;
            
        }

        #boxStyle{
            width: 20px;
            height: 20px;
            background: #65352e;
            display: block;
            margin: 7px 15px 0 0;
        }

        #boxName{
            display: flex;
            font-family: var(--font-1);
            font-size: 27px;
            font-weight: 500;
            margin-bottom: 15px;
        }

        #back{
            background: url(img/plywood-bg.jpg);
            transition: .5s all;
            background-position: -50px 25px;
            background-repeat: no-repeat; 
            height: 155px;
            z-index: -1;
        }

        #sec0002mainBox{
            display: flex;
            flex-direction: column;
            width: 270px;
            height: 145px;
            border: 1px solid black;
            padding: 35px 40px 45px;
            margin-left: 10px;
            background: #ffffff;
            transition: .5s all;
        }

        #sec0002Box1:hover #sec0002mainBox {
            margin-left: 0px;
        }

        #sec0002Box1:hover #back {
            background-position: 0;
            height: auto;
        }

        #boxDetails{
            display: flex;
            font-family: var(--font-1);
            font-size: 18px;
            font-weight: 500;
            margin: 5px 0;
        }

        .callimg{
            display: flex;
            width: 25px;
            align-items: center;
            margin-right: 15px;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header id="headerSec">
        <div class="wrapper" id="header">
            <a href="index.php">
                <img src="img/logo.svg" alt="Logo-Img" id="logo">
            </a>
            <nav id="nav-bar">
                <ul id="list">
                    <li class="item">
                        <a href="index.php">
                            <img src="img/icons/home.svg" alt="Home-Icon" id="home">
                        </a>
                    </li>
                    <li class="item nav">
                        <a href="about_us.php">About Us</a>
                    </li>
                    <li class="item nav">
                        <a href="products.php">All Products</a>
                    </li>
                    <li class="item nav">
                        <a href="contact_us.php" class="active">Contact US</a>
                    </li>
                </ul>
                <img src="img/icons/menu.svg" alt="Menu" id="menu">
            </nav>
        </div>
    </header>
    <!-- Section 01 -->
    <section id="sec0001">
        <div id="sec0001Container">
            <div class="wrapper" id="contents">
                <h1 id="contHeadd"><span id="contentHead">Contact </span>Us</h1>
                <p id="contentPara">We are open on 9AM - 6PM everyday and our mobile numbers are available 24/7.<br><br>If it is hard you to visit us then you can place your order by contacting us and transfer money to our bank account. Call us for more information.</p>
            </div>
        </div>
    </section>
    <div id="subsec0001"></div>
    
    <!-- Section 0002 -->
    <section id="sec0002">
        <div id="map" class="wrapper">
            <img src="img/map.jpg" alt="Map">
        </div>
        <a href="https://goo.gl/maps/vvazZrhyWnGFirbK6" id="button">Open in Google Map</a>
        <div id="sec0002Content" class="wrapper">
            <h1 id="sec0002Heading">Contact Details</h1>
            <p id="sec0002Para">You can contact us at any time using the contact information below</p>
        </div>
        <div id="sec0002Box" class="wrapper">
            <div id="sec0002Box1">
                <h1 id="boxName"><span id="boxStyle"></span> Call Us</h1>
                <div id="back">
                    <div id="sec0002mainBox">
                        <span id="boxDetails"><img src="img/icons/call1.svg" alt="Call-1" class="callimg">074 150 2503</span>
                        <span id="boxDetails"><img src="img/icons/call1.svg" alt="Call-1" class="callimg">070 366 2466</span>
                    </div>
                </div>
            </div>
            <div id="sec0002Box1">
                <h1 id="boxName"><span id="boxStyle"></span> Address</h1>
                <div id="back">
                    <div id="sec0002mainBox">
                        <span id="boxDetails"><img src="img/icons/location1.svg" alt="location1" class="callimg">No 241/A,<br>Kadawatha rd,<br>Ganemulla, Sri Lanka</span>
                    </div>
                </div>
            </div>
            <div id="sec0002Box1">
                <h1 id="boxName"><span id="boxStyle"></span> Social Media</h1>
                <div id="back">
                    <div id="sec0002mainBox">
                        <span id="boxDetails"><img src="img/icons/whatsapp1.svg" alt="Whatsapp-1" class="callimg">074 150 2503</span>
                        <span id="boxDetails"><img src="img/icons/facebook1.svg" alt="Facebook-1" class="callimg">Sandakelum Plywood</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include "foot.php";?>