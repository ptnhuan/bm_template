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
    $less->compileFile('less/button.less', 'css/button.css');
    ?>
    <link href="css/button.css" rel="stylesheet" type="text/css"/>

</head>
<body>
    <div class="type-button">
        <button class="button">
            <a href="#"class="glyphicon glyphicon-plus-sign"></a>
            <a href="#">Have an interesting case to share?</a>
        </button>
    </div>
</body>