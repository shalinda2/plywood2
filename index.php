    <?php include "head.php"; ?>
    <title>Plywood boards & Sheets</title>
    <style>

        /* Section 01 */
        #sec1{
            width: 100%;
            /* height: 100vh; */
            background: url(img/plywood-colorful-decorations.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            overflow: hidden;
            background-position: center;
            margin-top: -100px;
            z-index: 5;
        }

        #back{
            background: rgb(26, 26, 26, 0.3);
            z-index: -2;
            width: 100%;
            height: 100%;
        }
        
        #para{
            padding-top: 200px;
            text-align: center;
        }

        #para > h1, #para > h3{
            font-size: 20px;
            font-family: var(--font-1);
            color: #ffffff;
            text-transform: uppercase;
        }

        #para > h1{
            margin-bottom: 20px;
        }

        #para > h2{
            font-size: 35px;
            font-family: var(--font-1);
            color: #ffffff;
            text-transform: uppercase;
        }

        #para > h2{
            margin-bottom: 20px;
        }

        #para > h3{
            margin-bottom: 60px;
        }

        #para > p{
            font-family: var(--font-2);
            font-size: 16px;
            color: #ffffff;
            line-height: 1.5;
            padding: 10px 120px;
            margin-bottom: 50px;
        }

        #para > a{
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
            margin-bottom:70px;
        }

        /* Section 02 */

        #sec2 {
            width: 100%;
            /* height: 300px; */
            background: #beb0a7;
            padding: 20px;
        }

        #mainBox {
            display: flex;
            flex-wrap:wrap;
            justify-content: space-between;
            position: relative;
        }

        .box {
            width: 220px;
            height: 270px;
            background: #ffffff;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            /* padding-top: 15px; */
            position: relative;
            margin-top: -50px;
        }

        .box::before,
        .box::after {
            content: "";
            position: absolute;
            width: 100px;
            transition: 0.75s all;
            display: block;
        }

        .box::before {
            border-top: 20px solid #e8b673;
            left: -6px;
            top: -6px;
        }

        .box:hover::before {
            width: 232px;
        }

        .box::after {
            border-bottom: 20px solid #a45b4f;
            right: -6px;
            bottom: -6px;
        }

        .box:hover::after {
            width: 232px;
        }

        .imgs {
            height: 70px;
            margin-top: 20px;
        }

        .box > h1 {
            font-family: var(--font-1);
            font-size: 25px;
            font-weight: 600;
            margin-top: 15px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .box > p {
            font-family: var(--font-2);
            font-size: 16px;
            padding: 0 30px;
            line-height: 1.5;
            padding-bottom: 10px;
        }

        /* Section 03 */
        #sec3{
            background: #ffffff;
            padding: 50px 100px;
            padding-bottom: 250px;
        }

        #sec3Heading{
            font-family: var(--font-1);
            font-size: 35px;
            color: black;
            margin-bottom: 10px;
        }

        #sec3Para{
            font-family: var(--font-2);
            font-size: 16px;
            text-indent: 10px;
            margin-bottom: 60px;
        }

        .mainBox2{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-left: 40px;
        }

        .box2{
            width: 320px;
            height: 200px;
            position: relative;
            margin-bottom: 80px;
        }

        .box2::before{
            content: "";
            background: #e8b673;
            width: 20px;
            height: 60px;
            display: block;
            position: absolute;
            top: 0;
            left: 20px;
            
        }

        .box2:hover #titles{
           width: 300px;
           background: #e8b673;
        }


        #titles{
            font-family: var(--font-1);
            font-size: 22px;
            display: block;
            font-weight: 500;
            border-bottom: 7px solid #a45b4f;
            text-align: left;
            margin-left: 20px;
            padding-left: 30px;
            display: block;
            transition: 0.95s all;
        }

        .imgProducts{
            width: 320px;
            height: 200px;
        }

        #viewButton{
            font-family: var(--font-1);
            display: block;
            text-decoration: none;
            text-align: center;
            color: black;
            background: linear-gradient(360deg, #e9b76d, #fecb07);
            padding: 8px 15px;
            border-radius: 25px;
            font-size: 25px;
            width: 235px;
            font-weight: 600;
            margin: 30px auto;
        }

        /* Section 04 */
        #sec4{
            width: 100%;
            height: 680px;
            background: #beb0a7;
            padding: 20px;
        }

        #box3{
            background: url(img/plywood-home.jpg);
            background-size: cover;
            width: 1200px;
            height: 800px;
            margin-top: -200px;
            position: relative;

        }

        #subBox{
            width: 430px;
            background: white;
            padding: 40px 40px;
            margin-top: 50px;
            position: absolute;
            right: 0;
            top: 10px;
        }

        #subHeading{
            font-family: var(--font-1);
            font-size: 30px;
            margin: 25px 0;
        }

        #subText{
            font-family: var(--font-2);
        }

        @media screen and (max-width:1240px) {
            #sec3{
                padding: 50px 50px;
                padding-bottom: 250px;
            }

            #sec3Para{
                margin-bottom: 10px;
            }

            .mainBox2{
                margin-left:0;
            }

            .box2{
                width: 280px;
                height: auto;
                margin:30px;
            }
        }

        @media screen and (max-width:1160px){
            #sec3{
                padding: 30px 30px;
            }

            .box2{
                width: 270px;
                height: auto;

            }

            .imgProducts{
                width: 270px;
                height: auto;
            }

            .box2:hover #titles{
                width: 250px;
                background: #e8b673;
            }
        }

        @media screen and (max-width:1050px){
            .box2{
                width: 230px;
                height: auto;

            }

            .imgProducts{
                width: 230px;
                height: auto;
            }

            .box2:hover #titles{
                width: 210px;
                background: #e8b673;
            }
        }

        @media screen and (max-width:980px) {
            .box{
                width: 45%;
                height: auto;
                margin-bottom:80px;
                padding-bottom:20px;
            }

            .box2{
                width: 210px;
                height: auto;

            }

            .imgProducts{
                width: 210px;
                height: auto;
            }

            .box2:hover #titles{
                width: 190px;
                background: #e8b673;
            }
        }

        @media screen and (max-width:870px) {
            .box2{
                width: 42%;
                height: auto;
            }

            .imgProducts{
                width: 100%;
                height: auto;
            }

            .box2:hover #titles{
                width: 318.52px;
                background: #e8b673;
            }
        }

        @media screen and (max-width:810px) {
            .box2{
                width: 40%;
                height: auto;
            }

            .imgProducts{
                width: 100%;
                height: auto;
            }

            .box2:hover #titles{
                width: fit-content;
                background: #e8b673;
            }
        }

        @media screen and (max-width:660px) {
            .mainBox2{
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                margin-left: 0;
            }

            .box2{
                width: 65%;
                height: auto;
            }

            .imgProducts{
                width: 100%;
                height: auto;
            } 
        }

        @media screen and (max-width:520px) {
            
            #para{
                padding-top: 150px;
            }

            #para > p{
                padding: 0 50px;
                margin: 30px;
            }

            .box2{
                width: 75%;
                height: auto;
            }


            .imgProducts{
                width: 100%;
                height: auto;
            } 
        }

        @media screen and (max-width:400px) {
            #sec2{
                padding:10px;
            }
            .box{
                width: 95%;
                height: auto;
                margin-bottom:80px;
                padding-bottom:20px;
            }

            .box2{
                width: 90%;
                height: auto;
            }


            .imgProducts{
                width: 100%;
                height: auto;
            } 
        }

        @media screen and (max-width:320px){
            .box{
                width: 98%;
                height: auto;
                margin-bottom:80px;
                padding-bottom:20px;
            }


            .box2{
                width: 100%;
                height: auto;
            }

            .imgProducts{
                width: 100%;
                height: auto;
            } 
        }

    </style>
</head>
<body>
    <!-- Header -->
    <?php include "header.php";?>

    <!-- Section 01  -->
    <<section id="sec1">
        <div id="back" class="wrapper">
            <div id="para">
                <h1>We Are</h1>
                <h2>Plywood Boards & Sheet Sellers</h2>
                <h3>In Sri Lanka</h3>
                <p>Today there is a huge trend towards plywood in Sri Lanka as well as in many other countries in the world, the main reason being the low price, ease of use and special finish. There are many types of plywood boards and sheets available in the market tailored to your various needs. Plywood Sandakelum is located in Ganemulla, Sri Lanka and We sell plywood boards and plywood sheets in any quantity.</p>
                <a href="products.php">Our Boards & Sheets</a>
            </div>
        </div>
    </section>

     <!-- Section 02 -->
    <!-- <section id="sec2">
        <div id="mainBox" class="wrapper">
            <div class="box">
                <img src="img/icons/door.svg" alt="Door" class="imgs">
                <h1>Doors</h1>
                <p>Plywood can be used to make your doors and windows</p>
            </div>
            <div class="box">
                <img src="img/icons/furniture.svg" alt="Furniture" class="imgs">
                <h1>Furniture</h1>
                <p>You can use plywood in your outdoor furniture</p>
            </div>
            <div class="box">
                <img src="img/icons/floor.svg" alt="Floor" class="imgs">
                <h1>Floors</h1>
                <p>Interior plywood can be used for flooring</p>
            </div>
            <div class="box">
                <img src="img/icons/staircases.svg" alt="Staircase" class="imgs">
                <h1>Staircases</h1>
                <p>Plywood will add a good look in your staircases</p>
            </div>
        </div>
    </section> -->

    <!-- Section 03 -->
    <!-- <section id="sec3">
        <h1 id="sec3Heading">Our Plywood Boards and Sheets</h1>
        <p id="sec3Para">We have different types and sizes of plywood boards and sheets for your needs. You can see them below</p>
        <div class="mainBox2">
            <div class="box2">
                <span id="titles">Shutter Board</span>
                <img src="img/products/shutter-board.jpg" alt="Shutter Board" class="imgProducts">
            </div>
            <div class="box2">
                <span id="titles">Hard Board</span>
                <img src="img/products/hard-board.jpg" alt="Hard Board" class="imgProducts">
            </div>
            <div class="box2">
                <span id="titles">M.D.F Melamine</span>
                <img src="img/products/mdf-melamine.jpg" alt="MDF-Melamine" class="imgProducts">
            </div>
            <div class="box2">
                <span id="titles">PVC</span>
                <img src="img/products/pvc-board.jpg" alt="PVC" class="imgProducts">
            </div>
            <div class="box2">
                <span id="titles">Eco Sheets</span>
                <img src="img/products/eco-sheet.jpg" alt="Eco Sheets" class="imgProducts">
            </div>
            <div class="box2">
                <span id="titles">Cladding Sheets</span>
                <img src="img/products/cladding-sheet.jpg" alt="Cladding Sheets" class="imgProducts">
            </div>
        </div>
        <a href="products.php" id="viewButton">View All</a>
    </section> -->

    <!-- Section 04 -->
    <!-- <section id="sec4">
        <div class="wrapper" id="box3">
            <div id="subBox">
                <h1 id="subHeading">Why Plywood</h1>
                <p id="subText">Plywood is made with two or more layers of wood boards which are pressed and glued together. And it is stronger and more durable than ordinary single plank board due to its special manufacturing method. That is one reason why plywood is so popular all over the world. With plywood you can add beauty as well as natural look to your home or garden.<br><br><br>
                There are many benefits to using plywood instead of the usual wood panels and other substitutes. As Ceramic tiles, aluminum and other substitutes are very expensive, using plywood will save your money. Plywood is also non-corrosive and is suitable for chemical work where aluminum and ceramic cannot be used. Plywood boards remain stable to moisture and temperature changes than ordinary wood panels.</p>
            </div>
        </div>
    </section> -->
    <?//php include "foot.php";>