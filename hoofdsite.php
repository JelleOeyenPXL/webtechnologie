<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="hoofdsite.css">
        <nav>
                <div class = "topnav">
                    <a class="active" href="hoofdsite.html">Home</a>
                    <a href="bootstrap/">bootstrap</a>
                    <a href="eersteprobeersel.html">engineer</a>
                    <a href="javascript1.html">javascript</a>
                    <a href="hoofdsite.php">php</a>
                </div>
        </nav>
    </head>
    <body>
        <?php
        $txt = "php";
        echo "i love $txt !";
        echo "vandaag is het" . date("Y/m/d") . "<br>";
        ?> 
    </body>
</html>