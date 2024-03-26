<!DOCTYPE html>
<html>
    <head>
        <title>Main Page</title>
    </head>
    <body>
        <div>
            <h1>Session and Cookies</h1>
            <form method="post" action="handleCookies.php">
                <label for="text">Enter your text</label><br>
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