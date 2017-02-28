<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/02.less', 'css/02.css');
    ?>

    <link href="css/02.css" rel="stylesheet" type="text/css"/>

</head>
<body>
    <div class="type-01">
        <!--LIST OF HEADER-->
        <main>
            <div class="main-content">
                <div class="app-display">
                    <img src="images/phones-en.png" id="mobile-demo">
                </div>
                <div class="app-info">
                    <h1>Discover medical cases from every specialty</h1>
                    <ul class="text-info medium-minus-hide">
                        <li>View rare conditions, innovative treatments, and teaching cases from around the world</li>
                        <li>Page more than 1 million healthcare professionals for instant feedback</li>
                        <li>Communicate with colleagues using HIPAA-compliant direct messaging</li>
                    </ul> 
                    <div class="web-app-links">
                        <a class="register-link" href="#" id="web-app-register" data-ga-action="HomepageSignUpClick">Sign Up</a>
                        <a class="login-link" href="#" id="web-app-login" data-ga-action="HomepageLoginClick">Log In</a>
                    </div>
                </div>
            </div>
            <div class="mobile-app-links">

                <div class="rating">
                    <a class="store-badge top" href="#" id="apple-store">
                        <img src="images/apple-app-store-en.svg" data-ga-action="AppStoreClick" id="apple1">
                    </a>

                    <div class="rating-info">
                        <div class="star-wrapper">
                            <img src="images/star.svg">
                            <img src="images/star.svg">
                            <img src="images/star.svg">
                            <img src="images/star.svg">
                            <img src="images/star.svg">
                        </div>
                        <span>Based on 784 ratings</span>
                    </div>

                    <a class="store-badge bottom" href="#" id="apple-store">
                        <img src="images/apple-app-store-en.svg" data-ga-action="AppStoreClick" id="apple2">
                    </a>
                </div>

                <div class="rating">
                    <a class="store-badge top" href="#" id="android-store">
                        <img src="images/google-app-store-en.svg" data-ga-action="PlayStoreClick" id="android1">
                    </a>

                    <div class="rating-info">
                        <div class="star-wrapper">
                            <img src="images/star.svg">
                            <img src="images/star.svg">
                            <img src="images/star.svg">
                            <img src="images/star.svg">
                            <img src="images/star-half.svg">
                        </div>
                        <span>Based on 4,806 ratings</span>
                    </div>
                    <a class="store-badge bottom" href="#" id="android-store">
                        <img src="images/google-app-store-en.svg" data-ga-action="PlayStoreClick" id="android2">
                    </a>
                </div>
            </div>
        </main>
        <!--END OF HEADER-->
    </div>
</body>