<head>
    <meta charset="UTF-8">
    <title>Figure 1</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/banner.less', 'css/banner.css');
    ?>
    <link href="css/banner.css" rel="stylesheet" type="text/css"/>
</head>

<body>
    <div class="type-07">
        <div class="banner">
            <div class="container">
                <h2>4 cases</h2>
                <span>Paging Physiatrists</span>
                <a href="https://app.figure1.com/browse/paging" class="banner-button">View Paged Cases</a>
            </div>
        </div>
    </div>
</body>