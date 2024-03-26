<!DOCTYPE html>
<html>
<head>
    <title>Market</title>
</head>
<body>
    <form method="post" action="createListing.php">
        <label for="email">Your email:</label>
        <input type="email" id="email" name="email"><br>
        <label for="category">Category:</label>
        <select id="category" name="category">
            <option value="cars">Cars</option>
            <option value="clothes">Clothes</option>
            <option value="electronics">Electronics</option>
        </select><br>
        <label for="header">Header:</label>
        <input id="header" name="header"><br>
        <label for="description">Product description</label>
        <textarea id="description" name="description"></textarea>
    </form>
</body>
</html>