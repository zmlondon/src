<?php
$title = "Exercise 3: Variable, Strings & Operators";
include ('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="site.css" />
    
</head>
<body>
    <main>
<h3>3.2 Form Creation</h3>

    <h1>Form Creation: Create a simple HTML form to collect the user’s Firstname 
        and Lastname. Use the echo statement to print “Hello [Firstname] [Lastname], 
        You are welcome to my site.” inside an h3 tag. Table & Form Guide</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"
    class = "col-lg-4 bookform custom-padding">
        First Name: <input type="text" class="form-control" name="fname" required><br><br>
        Last Name: <input type="text" class="form-control" name="lname" required><br><br>
        <input type="submit" class="btn btn-primary d-grid" value="Submit">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fname = htmlspecialchars($_REQUEST["fname"]);
            $lname = htmlspecialchars($_REQUEST["lname"]);
        
            // echo "First Name: " . $fname . "<br>";
            // echo "Last Name: " . $lname;
            echo "<br>Hello $fname  $lname , You are welcome to my site.";
        }
        
    ?>
    
    <br><h3>3.5 String Variables</h3>
    <?php

    $str1 = "Hello";
    $str2 = "World";

    $joinedstr = $str1 . ' ' . $str2;
    $length = strlen($joinedstr);
    echo "$joinedstr";
    echo "<br>Length of Joined String: $length";

    
    $g1 = 5;
    $g2 = 4;
    $g3 = 5;
    
    ?>
    <br><h3>3.4 HTML Table</h3>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Grade</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>John</td>
            <td><?php echo $g1 ?></td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Alice</td>
            <td><?php echo $g2 ?></td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td>Bob</td>
            <td><?php echo $g3 ?></td>
            </tr>
        </tbody>
    </table>
<br><h3>3.6 Number Addition</h3>
<?php
    $x = 298;
    $y = 234;
    $z = 46;
    $total =  $x + $y + $z;
    echo "<br>The sum is: $total";
?>

<br><h3>Browser Detection</h3>
<?php
    function displayBrowser(){
        $browser = $_SERVER['HTTP_USER_AGENT'];
        echo "My browser is: $browser" . "<br>";
    }
    displayBrowser()
?>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </main>
<?php include('footer.php');?>   
</body>
</html>




