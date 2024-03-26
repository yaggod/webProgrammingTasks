<!DOCTYPE html>
<html>
    <head>
        <title>Main Page</title>
    </head>
    <body>
        <div>

            <form method="post" action="handleCookies.php">
                <label for="text">Sessions and Cookies</label><br>
                <textarea id="text" name="text"></textarea><br>
                <input type="submit" />
            </form>
            <?php
                if(!isset($_COOKIE["message"]))
                    return;
                $message = $_COOKIE["message"];
                echo str_word_count($message), "<br>";
                echo strlen($message), "<br>";
            ?>
        </div>
    </body>
</html>