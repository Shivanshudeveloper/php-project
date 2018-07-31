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
    <form action="includes/admission.inc.php" method="POST" enctype="multipart/form-data">
    <h2>Student Informations</h2>
    <input type="text" name="admission_no" value="" placeholder="Admission No."/><br/>
    <input type="text" name="roll_no" value="" placeholder="Roll No."/><br/>
    <input type="text" name="stu_first" value="" placeholder="First Name"/><br/>
    <input type="text" name="stu_last" value="" placeholder="Last Name"/><br/>
    <select name="gender">
    <option>Male</option>
    <option>Female</option>
    </select><br/>
    <input type="date" name="dob" value="" placeholder="dd/mm/yyyy"><br/>

    <select name="category">
    <option>General</option>
    <option>OBC</option>
    <option>Special</option>
    <option>Physical Challanged</option>
    </select><br/>
    <input type="text" name="phone" value="" placeholder="Contact No."/><br/>
    <input type="email" name="email" value="" placeholder="example@example.com"/><br/>
    <input type="text" name="class" value="" placeholder="Class"/><br/>
    <input type="text" name="section" value="" placeholder="Section"/><br/>
    <input type="date" name="admission_date" value="" placeholder="dd/mm/yyyy"/><br/>
    <input type="text" name="transport" value="" placeholder="Transport"/><br/>
    <input type="text" name="address" value="" placeholder="Address"/><br/>
    <input type="password" name="pwd" value="" placeholder="Password"/><br/>
    <input type="file" name="file"/><br/>
    <br/>
    <h3>Parent Informations</h3>
    <input type="text" name="father" value="" placeholder="Father Name"><br/>
    <input type="text" name="father_contact" value="" placeholder="Father Contact No."><br/>
    <input type="text" name="father_occu" value="" placeholder="Occupation"><br/>
    <br/>
    <input type="text" name="mother" value="" placeholder="Mother Name"><br/>
    <input type="text" name="mother_contact" value="" placeholder="Mother Contact No."><br/>
    <input type="text" name="mother_occu" value="" placeholder="Occupation"><br/><br/>

    <input type="email" name="gurd_email" value="" placeholder="example@example.com"><br/>
    <button name="submit" value="submit" type="submit">Submit</button>
    </form>
    <a href="index.php">Back</a>
    
</body>
</html>