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
    $less->compileFile('less/03.less', 'css/03.css');
    ?>
    <link href="css/03.css" rel="stylesheet" type="text/css"/>

</head>
<body>
    <div class="type-01">
        <!--LIST OF FOOTER-->
        <footer>
            <nav class="footer-links">
                <li><a href="#">Community Guidelines</a></li>
                <li><a href="#">Terms of Service</a> </li>                   
                <li><a href="#">Privacy</a> </li>
                <li><a href="#">Copyright</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Partners</a></li>
            </nav>
        </footer>
        <!--END OF FOOTER--> 
    </div>
</body>