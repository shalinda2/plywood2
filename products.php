    <?php include "head.php"; ?>
    <title>Our Plywood boards and sheets - Plywood Sandakelum products</title>
    <style>
        /* Section 01 */
        #sec_001{
            background: url(img/plywood-decoration.jpg);
            background-size: cover;
            width: 100%;
            padding: 100px 0 0;
            height: 90vh;
            margin-top: -100px;
        }

        #sec001Container{
            background: rgba(26, 26, 26, 0.3);
            width: 100%;
            height: 75vh;
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

        /* Section 003 */
        #sec3{
            background: #ffffff;
            padding: 20px 100px;
            padding-bottom: 50px;
            z-index: 3;
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
                        <a href="products.php" class="active">All Products</a>
                    </li>
                    <li class="item nav">
                        <a href="contact_us.php">Contact US</a>
                    </li>
                </ul>
                <img src="img/icons/menu.svg" alt="Menu" id="menu">
            </nav>
        </div>
    </header>

    <!-- Section 001 -->
    <section id="sec_001">
        <div id="sec001Container">
            <div class="wrapper" id="contents">
                <h1 id="contHeadd"><span id="contentHead">All </span>Products</h1>
                <p id="contentPara">We sell a range of plywood boards and sheets for your needs. Currently We have plywood sheets ranging in size from 1mm to 25mm.</p>
            </div>
        </div>
    </section>

    <!-- Section 03 -->
    <section id="sec3">
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
                <span id="titles">PVC</span>
                <img src="img/products/pvc-board.jpg" alt="PVC" class="imgProducts">
            </div>
            <div class="box2">
                <span id="titles">M.D.F Melamine</span>
                <img src="img/products/mdf-melamine.jpg" alt="MDF-Melamine" class="imgProducts">
            </div>
            <div class="box2">
                <span id="titles">Chipboard Melamine</span>
                <img src="img/products/chipboard-melamine.jpg" alt="Chipboard Melamine" class="imgProducts">
            </div>
            <div class="box2">
                <span id="titles">Plywood Sheet</span>
                <img src="img/products/plywood-sheet.jpg" alt="Plywood Sheet" class="imgProducts">
            </div>
            <div class="box2">
                <span id="titles">Eco Sheets</span>
                <img src="img/products/eco-sheet.jpg" alt="Eco Sheets" class="imgProducts">
            </div>
            <div class="box2">
                <span id="titles">HDX Sheet</span>
                <img src="img/products/hdx-sheet.jpg" alt="HDX Sheet" class="imgProducts">
            </div>
            <div class="box2">
                <span id="titles">MRX Sheet</span>
                <img src="img/products/mrx-sheet.jpg" alt="MRX Sheet" class="imgProducts">
            </div>
            <div class="box2">
                <span id="titles">HMR Sheet</span>
                <img src="img/products/hmr-sheet.jpg" alt="HMR Sheet" class="imgProducts">
            </div>
            <div class="box2">
                <span id="titles">Filmface</span>
                <img src="img/products/filmface.jpg" alt="Filmface" class="imgProducts">
            </div>
            <div class="box2">
                <span id="titles">MDF Sheet</span>
                <img src="img/products/mdf-sheet.jpg" alt="MDF Sheet" class="imgProducts">
            </div>
            <div class="box2">
                <span id="titles">Cladding Sheets</span>
                <img src="img/products/cladding-sheet.jpg" alt="Cladding Sheets" class="imgProducts">
            </div>
        </div>
    </section>

    <?php include "foot.php";?>