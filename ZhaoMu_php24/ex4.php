<?php
$title = "Ex4: Control flow and loops";
include ('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
    <h3>4.2 If-Else</h3>
        <div class="ageForm">
        <form action=""  method="post" class = "col-lg-4 bookform custom-padding">
            Name:<input type="text" class="form-control" name="name" required><br><br>
            Age:<input type="text" class="form-control" name="age" required><br><br>
            <input type="submit" class="btn btn-primary d-grid" value="Submit">
        </form>
        
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $formValue = $_POST["form"];
            if ($formValue == "ageForm") {
                $name = $_POST['name'];
                $age = $_POST['age'];
            
                if($age < 18){
                    echo"<br>$name doesn't have the right to vote!";
                }
                else{
                    echo"<br>$name has the right to vote!";
                }
            }
        }
    
        ?>
        </div>

    <br><h3>4.3 Switch Case</h3>
        <?php
        $currentMonth = date('F');

        switch ($currentMonth){
            case 'August':
                echo"It's August, so it's still holiday.";
                break;
            default:
                echo"Not August, this is $currentMonth so I don't have any holidays.";
        }
        ?>

    <br><h3>4.4 For Loop</h3>
    <div class="multiplicationForm">
            <form name="multiplicationForm" class = "col-lg-6 bookform custom-padding" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                <input type="hidden" name="form" value="multiplicationForm">    
                <div class="mb-3">
                    <label for="number"  class="form-label fs-5">Number for multiplication</label>
                    <input type="text" class="form-control" name="number" placeholder="Please enter a number for creating multiplication table" required>
                </div>
                <div class = "d-grid">
                        <button type="submit" class="btn btn-primary d-grid" value="submit">Submit</button>
                </div> 
            </form>        
        </div>
        <div class="muplicationTable">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $formValue = $_POST["form"];
                    if ($formValue == "multiplicationForm") {
                        $name = $_POST["number"]; 
                        // print the multiplication table of a number (n).
                        for ($i = 1; $i<= 10; $i++){
                            echo $name . " * " . $i . " = " . $name * $i . "<br>";
                        }
                        while ($name > 0){
                            echo $name . " ";
                            $name--;
                        }
                    }
                }
            ?>
        </div>


    <br><h3>4.5 While Loop</h3>
    <div class="printingForm">
            <form name="printingForm" class = "col-lg-6 bookform custom-padding" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                <input type="hidden" name="form" value="printingForm">    
                <div class="mb-3">
                    <label for="number"  class="form-label fs-5">Number for printing</label>
                    <input type="text" class="form-control" name="number" placeholder="Please enter a number" required>
                </div>
                <div class = "d-grid">
                        <button type="submit" class="btn btn-primary d-grid" value="submit">Submit</button>
                </div> 
            </form>        
        </div>
        <div class="printingTask">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $formValue = $_POST["form"];
                    if ($formValue == "printingForm") {
                        $name = $_POST["number"]; 
                        $i = 1;
                        while ($i <= $name ){
                            echo $i. " ";
                            $i++;
                        }
                    }
                }
            ?>
        </div> 

    <br><h3>4.6 Foreach Loop</h3>
    <?php
        $myarrays = array("HTML", "CSS", "PHP", "JavaScript");
        foreach($myarrays as $my){
            echo $my . "<br>";
        }
    ?>


    </main>
<?php include('footer.php');?>  
</body>
</html>


