<html>
<head>
<title><?=$title?></title>
<meta charset="UTF-8" />
</head>
<body>
<h1><?=$heading?></h1>

<!-- <?=form_open('user/add');?> -->

<!-- <p><input type="text" name="name" /></p> -->
<!-- <p><input type="text" name="password" /></p> -->
<!-- <p><input type="text" name="gender" /></p> -->
<!-- <p><input type="text" name="birthday" /></p> -->
<!-- <p><input type="text" name="grade" /></p> -->
<!-- <p><input type="text" name="industry_id" /></p> -->
<!-- <p><input type="text" name="city" /></p> -->
<!-- <p><input type="text" name="hobby" /></p> -->
<!-- <p><textarea name="description" rows="10"></textarea></p> -->
<!-- <p><input type="submit" value="Submit Comment" /></p> -->
<!-- </form> -->

<p>
	<?php echo validation_errors(); ?>

    <?php echo form_open('user/add'); ?>
    
    <h5>用户名</h5>
    <input type="text" name="username" value="" size="50" />
    
    <h5>密码</h5>
    <input type="text" name="password" value="" size="50" />
    
    <h5>性别</h5>
    <input type="text" name="gender" value="" size="50" />
    
    <h5>出生日期</h5>
    <input type="text" name="birthday" value="" size="50" />
    
    <h5>年级</h5>
    <input type="text" name="grade" value="" size="50" />
        
    <h5>所属行业</h5>
    <input type="text" name="industry" value="" size="50" />
    
    <h5>城市</h5>
    <input type="text" name="city" value="" size="50" />
        
    <h5>爱好</h5>
    <input type="text" name="hobby" value="" size="50" />
    <div><input type="submit" value="Submit" /></div>
    
    </form>
</p>

</body>
</html>