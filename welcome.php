<?php
echo 'Hello ' . htmlspecialchars($_POST["fname"]) . ' ' .htmlspecialchars($_POST["lname"]) ;
?>
<html>
<body>

<?php
echo htmlspecialchars($_POST["fname"]). "<br>";
echo htmlspecialchars($_POST["fname"]). "<br>";
echo htmlspecialchars($_POST["fname"]) . "<br>";
?>

</body>
</html>