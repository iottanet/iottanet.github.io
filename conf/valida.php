<html>
    <head>
    <meta charset="utf-8"/>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>
        <link rel="shortcut icon" type="image/x-icon" href="../img/logo.png"/>
    </head>

    <body>
        <div id="push"></div>
        <?php
            SESSION_START();
            $login=isset($_POST["usuario"])?strtolower($_POST["usuario"]):"";
            $senha=isset($_POST["senha"])?md5($_POST["senha"]):"";

            include_once("conexao.php");

            $log=mysqli_query($conn, "select * from tbuser where usuario='$login' and senha='$senha'")or die(mysqli_error());

            $linha=mysqli_fetch_array($log);

            if($login=="" || $senha=="")die("<h3>Acesso restrito, efetue LOGIN<div class='border'></div></h3> <br><a href=\"javascript:history.go(-1)\"><p>VOLTAR</p></a>");

            if($login!=$linha["usuario"]||$senha!=$linha["senha"])die ("<h3>Nome de usuario ou senha incorreta<div class='border'></div></h3><br><a href=\"javascript:history.go(-1)\"><p>VOLTAR</p></a>");

            if($login==$linha["usuario"] && $senha==$linha["senha"]) {
            $_SESSION["user"]=$linha["usuario"];
            ?>
            <script language="javascript" type="text/javascript">
                document.url="../site.php";
                window.location.href="../site.php";
            </script>
        <?php } ?>              
    </body>
</html>