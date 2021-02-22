<?php
$digit1 = $_POST['digit1'];
$digit2 = $_POST['digit2'];
$operator = $_POST['operator'];
$result = '';

if (is_numeric($digit1) && is_numeric($digit2)) {
    switch ($operator) {
        case "Add":
           $result = $digit1 + $digit2;
            break;
        case "Subtract":
           $result = $digit1 - $digit2;
            break;
        case "Multiply":
            $result = $digit1 * $digit2;
            break;
        case "Divide":
            $result = $digit1 / $digit2;
    }
}
?>

<html>
    <body>
        <div id="page-wrap">
        <h1>Calculator Program</h1>
        <form action="" method="post" id="quiz-for-task1">
                <p>
                    <input type="number" name="digit1" id="digit1" required="required" value="<?php echo $digit1; ?>" /> <b>First Num</b>
                </p>
                <p>
                    <input type="number" name="digit2" id="digit2" required="required" value="<?php echo $digit2; ?>" /> <b>Second Num</b>
                </p>
                <p>
                    <input readonly="readonly" name="result" value="<?php echo $result; ?>"> <b>Result</b>
                </p>
                <input type="submit" name="operator" value="Add" />
                <input type="submit" name="operator" value="Subtract" />
                <input type="submit" name="operator" value="Multiply" />
                <input type="submit" name="operator" value="Divide" />
        </form>
        </div>
    </body>
</html>