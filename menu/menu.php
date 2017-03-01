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
    $less->compileFile('less/menu.less', 'css/menu.css');
    ?>
    <link href="css/menu.css" rel="stylesheet" type="text/css"/>

</head>
<body>
    <div class="type-menu">
        <!-- BEGIN OF HEADER -->
        <header class="heading">
            
            <div class="left-menu-header col-md-4 col-xs-12">
                <ul>
                    <li class="item col-md-3 col-xs-2"><a href="#" class="glyphicon glyphicon-home"> Home </a></li>
                    <li class="item col-md-3 col-xs-2"><a href="#" class="glyphicon glyphicon-folder-close"> Brow </a></li>
                    <li class="item col-md-3 col-xs-2"><a href="#" class="glyphicon glyphicon-search"> Search </a></li>
                </ul>
            </div>
            <div class="header-logo col-md-4 col-xs-12">
                <img src="images/logo.svg" />
            </div>
            <div class="right-menu-header col-md-4 col-xs-12">
                <ul>
                    <li class="item"><a href="#" class="glyphicon glyphicon-plus-sign"></a></li>
                    <li class="item"><a href="#" class="glyphicon glyphicon-folder-close"></a></li>
                    <li class="item"><a href="#" class="glyphicon glyphicon-comment"></a></li>
                    <li class="item"><a href="#" class="glyphicon glyphicon-user"></a></li>
                </ul>
            </div>
        </header>
        <!--END OF HEADER--> 
    </div>
</body>