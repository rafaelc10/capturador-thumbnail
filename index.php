<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" />
    <title>Capturador de Thumb</title>
    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    
</head>
<body>
    <header>
        <h1> CAPTURADOR DE THUMBNAIL </h1>
    </header>
    <div class="form">
        <form method="POST" action="thumb.php" id="form" name="form">
            <label>LINK DO VIDEO: </label>
            <input id="gols1" type="text" name="url" placeholder="https://www.youtube.com/watch?v=00000000000">
            <input type="submit" value="Enviar">
        </form>
    </div>
    <div class="results">
    <?php
        session_start();
        if(isset($_SESSION['img'])){
            echo $_SESSION['img'];
            $_SESSION['img'] = null;
        } else if(isset($_SESSION['erro'])){
            echo $_SESSION['erro'];
            $_SESSION['erro'] = null;
        }
    ?>
    
    </div>
</body>
</html>