
<form action="form.php" method="GET">
Name: <input type="text" name="name" > <br>
Last: <input type="text" name="lname" > <br>
<input type="submit"  >
</form>
<?php
echo $_GET["name"];
echo $_GET["lname"];
//echo $_REQUEST["name"];

?>