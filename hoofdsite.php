<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="hoofdsite.css">
        <nav>
                <div class = "topnav">
                    <a class="active" href="hoofdsite.html">Home</a>
                    <a href="eersteprobeersel.html">engineer</a>
                    <a href="javascript1.html">javascript</a>
                    <a href="hoofdsite.php">php</a>
                    <a href="ajax.html">ajax</a>
                    <div class="dropdown">
                        <button class="dropbtn">bootstrap
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="bootstrap/container.html">container</a>
                            <a href="bootstrap/fluidcontainer.html">fluidcontainer</a>
                            <a href="bootstrap/gridbasic.html">gridbasic</a>
                            </div>
                    </div>
                </div>
            </nav>
    </head>
    <body>
        <?php
        $txt = "php";
        echo "i love $txt !";
        echo "vandaag is het" . date("Y/m/d") . "<br>";
        echo(pi());
        ?> 
        <form action="welcome.php" method="post">
        naam: <input type="text" name="naam"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
        </form>
    </body>
</html>