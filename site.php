<html>
    <head>
        <title>Iotta Net</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="shortcut icon" type="image/x-icon" href="img/logo.png"/>
    </head>

    <body>
        <?php
            error_reporting(0);
            SESSION_START();
            if($_SESSION["user"]){
        ?>

        <div id="push"></div>
        <center>
            <h1>Você está logado!</h1>
            <br/<br/><br/><br/><br/>
            <form action="conf/fimSession.php">
                <input class="bt" type="submit" value="Sair">
            </form>
        </center>

        <?php } else{ ?>
                    <script language="javascript" type="text/javascript">
                        document.url="conf/login.php";
                        window.location.href="conf/login.php";
                    </script>
            <?php } ?>
    </body>
</html>