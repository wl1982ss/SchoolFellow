<html>
<head>
<title><?=$title?></title>
</head>
<body>
<h1><?=$heading?></h1>

<?=form_open('user/add');?>

<p><input type="text" name="name" /></p>
<p><input type="text" name="password" /></p>
<p><input type="text" name="gender" /></p>
<p><input type="text" name="birthday" /></p>
<p><input type="text" name="grade" /></p>
<p><input type="text" name="industry_id" /></p>
<p><input type="text" name="city" /></p>
<p><input type="text" name="hobby" /></p>
<p><textarea name="description" rows="10"></textarea></p>
<p><input type="submit" value="Submit Comment" /></p>
</form>

</body>
</html>