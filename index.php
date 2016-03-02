<!DOCTYPE html>
<html lang="en">
<LINK href="stylesheet.css" rel="stylesheet" type="text/css">
<script src="lib/ajaxget.js"></script>
<script src="lib/ajaxput.js"></script>
<script src= "js/index.js"></script>
<script src="js/validateform.js"></script>

<head>
    <meta charset="UTF-8">
    <title>UniHelp</title>
</head>
<body>
<div id ="login-title">
    <h1>Enter your name Here!</h1>
</div>
<form name ="myForm" onsubmit="return validateForm();" action="UniHelpindex.php">
    <div id ="nameinput">
        <input type="text" name="name" placeholder="Name">
    </div>
    <div id ="submitbutton">
        <input type="submit" name="Submit" value="Sign In">
    </div>
</form>
</body>
</html>
