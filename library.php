<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--<link rel="stylesheet" href="https://demo1.smart-school.in/backend/dist/css/style-main.css"> -->
    <title>Document</title>
    <?php
        include_once 'includes/css.inc.php';
    ?>
</head>
<body>
<nav>
    <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="includes/library.inc.php?Books=Add">Add Books</a></li>
    <li><a href="includes/library.inc.php?Issue=Books">Issue</a></li>
    <li><a href="includes/library.inc.php?Return=Books">Return</a></li>
    <li><a href="includes/library.inc.php?See=All">See All</a></li> <!-- Code Needed To Be Done! -->
    </ul>
    </nav><br/>
    <h2>Books</h2>
    <?php
    
        include_once 'includes/librarybooktable.inc.php';
        include_once 'includes/dbh.inc.php';
        include_once 'includes/css.inc.php';
        $sql = "SELECT * FROM library;";
        //Create a prepare statement
        $stmt = mysqli_stmt_init($conn);
        //Create a prepare statement for prepare statement
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: library.php?Error=Unknown");
            exit();
        }
        else{
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            while($row = mysqli_fetch_assoc($result)){
                include 'includes/librarytabledata.inc.php';
            }
        }
        
    ?>
    
</body>
</html>