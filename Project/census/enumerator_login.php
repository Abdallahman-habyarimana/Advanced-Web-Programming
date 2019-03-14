<!DOCTYPE html">
<html xmlns="http://www.w3.org/1999/xhtml" lang="EN" >
<head>
<meta http-equiv="Content-Type" content="text/html"charset=utf-8"/>
<link media="all" type="text/css" rel="stylesheet" href="css/layout.css"/>
<title> Census </title>
</head>

<body>
<div id="container">       
<form>
<label for="username">Username:</label>
<input type="text"id="username" name="username" placeholder="username" pattern="[a-zA-Z0-9]{5,}" title="Minimum 5 letters or numbers." required>
<label for="password">Password:</label>
<input type="password" id="password" name="password" placeholder="password" " pattern=".{5,} title="Minmimum 5 letters or numbers." required>
<div id="lower">
<input type="checkbox"><label for="checkbox">Keep me logged in</label>
<input type="submit" value="Login">
</div><!--/ lower-->
</form>
</div>
</div>
</body>
</html>
