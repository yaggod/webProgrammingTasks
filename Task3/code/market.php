<!DOCTYPE html>
<html>
<head>
    <title>Market</title>
</head>
<body>
<div>
    <h1>Create your own listing</h1>
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
        <input type="submit">
    </form>
</div>
<div>
    <h1>Existing listings</h1>
    <table border="1px">
        <thead>
            <th>Product name</th>
            <th>Category</th>
            <th>Description</th>
            <th>Seller's email</th>
        </thead>
        <tbody>
        <?php
        $categories = array_slice(scandir("categories"), 2);
        /*
         pretty ugly loop. can get better by extracting function from the body, but that will cause creation of similar functions like
        doSmth(a)
        doSmth(a, b) etc

        can be implemented recursively but that will break all the abstractions
        */
        foreach($categories as $category)
        {
            $emailsFolder = "categories/{$category}";
            if(!is_dir($emailsFolder))
                continue;

            $emails = array_slice(scandir($emailsFolder), 2);
            foreach($emails as $email)
            {
                $listingsFolder = "{$emailsFolder}/{$email}";
                if(!is_dir($listingsFolder))
                    continue;

                $listings = array_slice(scandir($listingsFolder), 2);
                foreach($listings as $listing)
                {
                    printListing($category, $email, $listing, $listingsFolder);
                }
            }
        }
        function printListing($category, $email, $listing, $folder)
        {
            $description = file_get_contents("{$folder}/{$listing}");

            $name = substr($listing, 0, -4);
            printRow($name, $category, $description, $email);
        }
        function printRow($name, $category, $description, $email)
        {
            echo "<tr>";
            echo "<td>{$name}</td>";
            echo "<td>{$category}</td>";
            echo "<td>{$description}</td>";
            echo "<td>{$email}</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>