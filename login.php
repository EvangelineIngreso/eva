
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
   <link rel="stylesheet" href="styles.css">
   
</head>  
<body>
       
    <div class="wrapper">
        <img src = "img/avatar.png" class = "avatar" >
        
        <form action="" method="post">
            <div class="next" style="margin-left:6%;">
            <div class="form-group">
            <?php if (isset($_GET['error'])) { ?>
     		<p class="error" style="background: #F2DEDE;color: #A94442;padding: 10px; width: 70%;border-radius: 5px; margin: 20px auto;margin-left: -2%;"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
                
                <img src="img/user.png" alt="user" width="25px" height="25px">
                <input type="text" name="username" class="form-control" placeholder="Username">
                
            </div>    
            <div class="form-group">
                
                <img src="img/lock.png" alt="user" width="25px" height="25px">
                <input type="password" name="password" class="form-control" placeholder="Password">
               
            </div>
            <br>
            <div class="form-group">
                <span>Forgot <a href="#">password?</a></span>
                <button type="submit" class = "b"> Login </button>
            </div>
            
        
            </div>
        </form>

    
</body>
</html>