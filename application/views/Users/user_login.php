<html>
<head>
<title><?=$title?></title>
</head>
<body>
<h1><?=$heading?></h1>

<?=form_open('user/login');?>

<p><input type="text" name="name" /></p>
<p><input type="text" name="password" /></p>

<p><input type="submit" value="Submit Comment" /></p>
</form>

</body>
</html>