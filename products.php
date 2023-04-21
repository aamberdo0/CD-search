<!DOCTYPE html>
<html lange="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width = device-width, initial-scale=1.0" />
    <title>Final Exam</title>
    <script src="https://kit.fontawesome.com/cc63fd1b91.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css.css" />
</head>

<body>
    <header class="header">
        <section class="flex">
            <nav class="navbar">
                <a href="#">Home</a>
                <a href="search.php">Search</a>
                <a href="products.php">Products</a>
            </nav>
        </section>
    </header>
    <h1 class="heading"> Available Products</h1>
    <?php
    include 'config.php';

    // get the information from the CD table
    $command = "SELECT * FROM stock";
    $stmt = $dbh->prepare($command);
    $stmt->execute();

    echo '<table> <tr> <th> ID </th> <th> Movie Name </th> <th> Type </th>
    <th> Movie Crew </th> <th> Date Release </th> <th> Available </th> </tr>';
    while ($row = $stmt->fetch()) {
        // to output mysql data in HTML table format
        echo '<tr > 
        <td>' . $row['id'] . '</td>
                  <td>' . $row['itemName'] . '</td>
                  <td>' . $row['itemQuantity'] . '</td>
                  <td>' . $row['type'] . '</td>
                <td>' . $row['crew'] . '</td>
                <td>' . $row['year'] . '</td></tr>';
    }
    ?>
</body>

</html>