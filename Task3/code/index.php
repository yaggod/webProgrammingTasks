<!DOCTYPE html>
<html>
    <head>
        <title>Main Page</title>
    </head>
    <body>
    <h1>Session and Cookies</h1>
        <div>
            <h2>Cookies</h2>
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
        <div>
            <h2>Sessions</h2>
            <h3>Sessions. Part 1</h3>
            <div>
                <label>Tell us about you</label>
                <form method="post" action="handlePerson.php">
                    <label for="surname">Surname</label>
                    <input id="surname" name="surname"/><br>
                    <label for="name">Name</label>
                    <input id="name" name="name"/><br>
                    <label for="age">Age</label>
                    <input id="age" type="number" name="age"/><br>

                    <input type="submit"/>
                </form>
            </div>

        </div>
    </body>
</html>