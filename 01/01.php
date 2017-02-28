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
    $less->compileFile('less/01.less', 'css/01.css');
    ?>
    <link href="css/01.css" rel="stylesheet" type="text/css"/>

</head>
<body>
    <div class="type-01">
        <!--LIST OF HEADER-->
        <a href="/" class="logo">
            <img src="images/logo.svg">
        </a>
        <nav class="navbar navbar-inverse navbar-fixed-top" style="float:right">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="navbar" class="collapse navbar-collapse" style="float:right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Medical Cases</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Newsroom</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Prees</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <!--END OF HEADER--> 
    </div>
</body>