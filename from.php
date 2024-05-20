<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST"> 
        
        Name:<input type="text" name="name"><br>
        Email:<input type="email" name="email"><br>
        Phone Number:<input type="number" name="ph_number"><br>
        password:<input type="password" name="password"><br>
        
        <select name="is_admin" id=""> 
            <option value="1">admin</option>
            <option value="0">user</option>
        </select><br>
        <button type="submit">Submit</button>

    </form>
</body>
</html>
<?php
include './Db.php';
//error_reporting(false);
$obj=new InsertData();
$obj->insert();
if ($obj) {
    echo "data passed";
}
?>