<html>

<head>
    <link href="css.css" type="text/css" rel="stylesheet" media="screen" />
</head>

<?php
include 'mainPage.html';
// Connect to mysql
include 'config.php';
// do the update
$searchStatus = "";
$searchLink = "";

$id = $_POST['itemId'];
$name = $_POST['itemNm'];
$quantity = $_POST['itemQty'];
$type = $_POST['type'];
$crew = $_POST['crew'];
$year = $_POST['year'];
$command = "Update stock set itemName = '$name', itemQuantity = '$quantity', type='$type',crew = '$crew',year = '$year' where id ='$id'";
$stmt = $dbh->prepare($command);
$result = $stmt->execute();

if ($result) {
    $searchStatus = "Update successful";
} else {
    $searchStatus = "Non-existing item.";
}
?>

<body>
    <p class="heading"><?php echo $searchStatus; ?></p>
    <p class="sub-heading"><?php echo $searchLink; ?></p>
</body>

</html>