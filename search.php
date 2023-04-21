<html>

<head>
    <?php
    include 'search.html';
    ?>
    <link rel="stylesheet" href="css.css" />
</head>

<body>
    <?php
    // connect to the database

    include 'config.php';
    if (isset($_POST['submit'])) {
        // create variable from user input and eroor message
        $searchStatus = "";
        $st = $_POST["search"];
        // select where the user input is matched with data from database
        $command = "SELECT * FROM stock WHERE itemName='$st'";
        $stmt = $dbh->prepare($command);
        $stmt->execute();
        $rows = $stmt->fetchAll();
        // check if the number of row is equal to 0
        if (count($rows) != 0) {
            // if yes, create a table
            echo '<table>
              <tr>
              <th>ID</th>
              <th>Item Name</th>
              <th> Item Quantity </th>
              <th>Type</th>
                <th> Crew </th>
                <th> Date release </th>
              </tr>';
            // loops through the array and assign new variable called row
            foreach ($rows as $row) {
                // create column and row for each search is found
                echo '<tr>
                  <td>' . $row['id'] . '</td>
                  <td>' . $row['itemName'] . '</td>
                  <td>' . $row['itemQuantity'] . '</td>
                  <td>' . $row['type'] . '</td>
                <td>' . $row['crew'] . '</td>
                <td>' . $row['year'] . '</td>
                  
                </tr>';
            }
            echo  '</table>';
        } else {
            // if not found, display the error message
            $searchStatus = "Data not found.";
            $searchLink = "Please click <a href='search.html'>here</a> to go to the search page.";
        }
    }
    ?>
</body>
<section>
    <p class="heading"><?php echo $searchStatus; ?></p>
    <p class="sub-heading"><?php echo $searchLink; ?></p>

</section>

</html>