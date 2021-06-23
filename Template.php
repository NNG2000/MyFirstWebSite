<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title?></title>
        <link href="styles/StyleSheet.css" rel="Stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="wrapper">
            <div id="banner"></div>
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="Cake.php">Cake</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </nav>
            <div id="content-area">
                <?php echo $content; ?>
            </div>
            <div id="sidebar">
                
            </div>
            <footer>
                <p> to do later</p>
            </footer>
            
        </div>
    </body>
</html>
