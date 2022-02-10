<html>
<body>

<?php
echo 'Hello ' . htmlspecialchars($_POST["fname"]) . ' ' .htmlspecialchars($_POST["lname"]). "<br>";

echo htmlspecialchars($_POST["businessType"]). "<br>";
echo htmlspecialchars($_POST["contact"]). "<br>";
?>

</body>
</html>