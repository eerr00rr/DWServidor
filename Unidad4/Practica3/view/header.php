<html>
    <head>
        <title>LoginCookie</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php 
            session_start();
            if (isset($_SESSION['userName'])) {
                echo "Has hecho login como " . $_SESSION['userName'] . "\t";
                echo "<a href='logout.php'>Log Out</a>";
            }
        ?>
