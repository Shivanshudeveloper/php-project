<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <?php
    include_once 'includes/css.inc.php';
    ?>
    
    <title>Document</title>
</head>
<body>

    <?php
    session_start();
    if(isset($_SESSION['uid'])){
        echo "You are Logged in!";
        echo '<form action="includes/logout.inc.php" method="POST">
                <button type="submit" name="submit">Logout</button>
                </form>';
        include_once 'headers.php';   
    }
    elseif(isset($_SESSION['add'])){
        echo "You are Logged in!";
        echo '<form action="includes/logout.inc.php" method="POST">
                <button type="submit" name="submit">Logout</button>
                </form>';
        include_once 'headers.php';
    }
    else{
        echo '  
        <div class="text-center">
                <h2>Administrator Login</h2>
                <form action="includes/login.inc.php" method="POST" class="form-signin">
                <input type="text" name="u_id" value="" placeholder="Username" class="form-control" required autofocus/><br/>
                <input type="password" name="u_pwd" value="" placeholder="Password" id="inputPassword" class="form-control" required/><br/>
                <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
                </div>
                <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block">Login</button><br/><br/>
                </form>
                </div>
                </div>
                ';
        /*
        echo '  <div  class="text-center">
                <h2>Student Login</h2>
                <form action="includes/login.inc.php" method="POST" class="form-signin"><br/>
                <input type="text" name="add-no" value="" placeholder="Admission No." id="inputPassword" class="form-control" required autofocus/><br/>
                <input type="password" name="password" value="" placeholder="Password" class="form-control" required/><br/>
                <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
                </div>
                <button type="submit" name="stu-submit" class="btn btn-lg btn-primary btn-block">Login</button><br/><br/>
                </form>
                <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
                </div>
                ';
        */

    }
    ?>
    
   
</body>
</html>