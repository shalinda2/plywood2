    <?php include "head.php"; ?>
    <title>About Plywood Sandakelum</title>
    <style>

        /* Section 01 */
        #sec_01{
            background: url(img/sandakelum-plywood-wareshouse.jpg);
            background-size: cover;
            width: 100%;
            padding: 100px 0 0;
            height: 100vh;
            margin-top: -100px;
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
            display: block;
            color: #ffcc00;
            font-family: var(--font-1);
            font-size: 27px;
            text-transform: uppercase;
            font-weight: bold;
            margin-bottom: 5px;
        }

        #contentPara{
            font-size: 16px;
            font-family: var(--font-2);
            color: #ffffff;
            padding-right: 650px;
        }

        /* CallInfo Section */

        #callInfo{
            background: #a57b4a;
            padding: 20px 0;
        }

        #callIcons{
            width: 25px;
            margin-right: 15px;
            display: flex;
        }

        #callContent{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 10px auto;
        }

        #callContainer{
            display: flex;
            justify-content: center;
            align-items: center;
            background: #fc0;
            padding: 8px 45px;
        }

        #callUs{
            font-family: var(--font-1);
            font-size: 35px;
            color: white;
            font-weight: 500;
            margin-right: 25px;
        }

        #num{
            font-size: 24px;
            font-family: var(--font-1);
            font-weight: 600;
        }

        #line{
            color: #a57b4a;
            margin: 0 10px;
        }

        /* Section 03 */
        #sec_03{
            background: #ffffff;
            padding: 35px 0;
        }

        #sec03Heading{
            font-family: var(--font-1);
            font-weight: bold;
            font-size: 35px;
            margin-bottom: 45px;
        }

        #sec03Para{
            font-family: var(--font-2);
            font-size: 16px;
            text-indent: 10px;
            margin-bottom: 60px;
        }

        #imgBox{
            display: flex;
            justify-content: center;
            margin-bottom: 50px;
        }

        #imgContents{
            display: grid;
            grid-template-columns: 375px 375px 375px;
            grid-gap:10px;
            grid-template-rows: 280px 210px 280px;
            position: relative;
            z-index: 1;
        }

        .sec03Imgs{
            width: 100%;
        }

        #image1{
            grid-column: 1;
            grid-row: 1;
        }

        #image2{
            grid-column: 1;
            grid-row: 2/3;
        }

        #image3{
            grid-column: 2;
            grid-row: 1/2;
        }

        #image4{
            grid-column: 3;
            grid-row: 2/3;
        }

        #image5{
            grid-column: 3;
            grid-row: 1;
        }

        #image6{
            grid-column: 2;
            grid-row: 3;
        }

        #imgContents::before{
            width: 320px;
            content: "";
            height: 100px;
            display: block;
            position: absolute;
            background: #65352eff;
            top: -15px;
            left: -15px;
            z-index: -1;
        }

        #imgContents::after{
            width: 320px;
            content: "";
            height: 100px;
            display: block;
            position: absolute;
            background: #e8b673;
            bottom: -15px;
            right: -15px;
            z-index: -1;
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
                        <a href="about_us.php" class="active">About Us</a>
                    </li>
                    <li class="item nav">
                        <a href="products.php">All Products</a>
                    </li>
                    <li class="item nav">
                        <a href="contact_us.php">Contact US</a>
                    </li>
                </ul>
                <img src="img/icons/menu.svg" alt="Menu" id="menu">
            </nav>
        </div>
    </header>

    <!-- Section 01 -->
    <section id="sec_01">
        <div class="wrapper" id="contents">
            <h1 id="contHeadd"><span id="contentHead">About </span>Plywood Sandakelum</h1>
            <p id="contentPara">The business Sandakelum started with the sale of planks wood and has grown into the sale of plywood boards and sheets today. Having won the trust of our customers for over twenty years, we are always committed to providing a better service to our customers.<br><br>
            We sell a number of imported plywood types in Sri Lanka. Contact us for more information about our sheets and borads</p>
        </div>
    </section>

    <!-- Section 02 -->
    <section id="callInfo">
        <div id="callContent">
            <span id="callUs">Call Us : </span>
            <div id="callContainer">
                <img src="img/icons/call-icon.svg" alt="call-icon" id="callIcons">
                <span id="num">074 150 2503<span id="line">|</span>070 366 2466</span>
            </div>
        </div>
    </section>

    <!-- Section 03 -->
    <section id="sec_03">
        <div class="wrapper" id="sec03Content">
            <h1 id="sec03Heading">Our Warehouse</h1>
            <p id="sec03Para">Come to our warehouse and choose the plywood sheets and boards that suit your needs. Our address is : No 241/A, Kadawatha rd, Ganemulla, Sri Lanka</p>
        </div>
        <div id="imgBox">
            <div id="imgContents">
                <img src="img/warehouse-1.jpg" alt="Warehouse-1" class="sec03Imgs" id="image1">
                <img src="img/warehouse-2.jpg" alt="Warehouse-2" class="sec03Imgs" id="image2">
                <img src="img/warehouse-3.jpg" alt="Warehouse-3" class="sec03Imgs" id="image3">
                <img src="img/warehouse-4.jpg" alt="Warehouse-4" class="sec03Imgs" id="image4">
                <img src="img/warehouse-5.jpg" alt="Warehouse-5" class="sec03Imgs" id="image5">
                <img src="img/warehouse-6.jpg" alt="Warehouse-6" class="sec03Imgs" id="image6">
            </div>
        </div>
    </section>

    <?php include "foot.php";?>