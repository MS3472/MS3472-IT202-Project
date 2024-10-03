<?php
require_once('database.php');
$emailAddress = $_POST['emailAddress'];
$password = $_POST['password'];
$query = "SELECT firstName, lastName, pronouns FROM Portable_Power_Banks_Managers " .
        "WHERE emailAddress = ? AND password = SHA2(?,256)";
$db = getDB();
$stmt = $db->prepare($query);
$stmt->bind_param("ss", $emailAddress, $password);
$stmt->execute();
$stmt->bind_result($firstName, $lastName, $pronouns);
$fetched = $stmt->fetch();
if ($fetched) {
   $_SESSION['login'] = true;
   $_SESSION['emailAddress'] = $emailAddress;
   $_SESSION['firstName'] = $firstName;
   $_SESSION['lastName'] = $lastName;
   $_SESSION['pronouns'] = $pronouns;
}
$name = "$firstName $lastName $pronouns ";
if ($fetched && isset($name)) {
   echo "<h2>Welcome to the inventory helper for Portable Powerbank</h2>\n";
   echo "<h2>Welcome, $name </h2>\n";
   $_SESSION['login'] = $name;
   header("Location: index.php");
} else {
   echo "<h2>Sorry, login incorrect for Portable Powerbank inventory website</h2>\n";
   echo "<a href=\"index.php\">Please try again</a>\n";
}

?>
