<?php
    session_start();
    if (!isset($_SESSION['array'])) {
        $_SESSION['array']=[10,20,30];
    }

    // Comprobar que los valores no esten vacíos
    if (isset($_POST['position'])&&isset($_POST['new_value'])) {
        switch ($_POST['submit']) {
            case 'Modify':
                $_SESSION['array'][$_POST['position']]=$_POST['new_value'];
                break;

            case 'Average':
                $GLOBALS['average']=0;
                $sum_value=0;
                foreach ($_SESSION['array'] as $key => $value) {
                    $sum_value+=$value;
                }
                $GLOBALS['average']=$sum_value/3;
                break;

            case 'Reset':
                session_destroy();
                $_SESSION['array']=[10,20,30];
        }
    } 
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise Session 02</title>
</head>
<body>

    <h1>Modify array saved in session</h1>

    <form action="ExerciseSession02.php" method="post">
        Position to modify:
            <select name="position">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
            </select>

        <br><br>

        New value:
        <input type="number" name="new_value" >
        <br><br>

        <button type="submit" name="submit" value="Modify">Modify</button>
        <button type="submit" name="submit" value="Average">Average</button>
        <button type="submit" name="submit" value="Reset">Reset</button>

        <br><br>

        Current array: <?php 
        foreach ($_SESSION['array'] as $key => $value) {
            echo "$value " ;
        }?>

        <br>
        <?php
            if (isset($GLOBALS['average'])) {
                echo "Average: {$GLOBALS['average']}";
            }
        ?>
    </form>
    
</body>
</html>