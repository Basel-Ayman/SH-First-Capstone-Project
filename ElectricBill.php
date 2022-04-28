<!DOCTYPE html>
<head>
    <title>Calculate Electric Bill</title>
</head>

<?php
$str_result = $bill = '';
if (isset($_POST['units-submit'])) {
    $units = $_POST['units'];
    if (!empty($units)) {
        $bill = calculate($units);
        $str_result = 'Total amount of ' . $units . ' units = ' . $bill;
    }
}

function calculate($units) {
    $unit_cost_first = 3.50;
    $unit_cost_second = 4.00;
    $unit_cost_third = 5.20;
    $unit_cost_fourth = 6.50;

    if ($units <= 50) {
        $bill = $units * $unit_cost_first;
    } elseif ($units <= 150) {
        $temp = 50 * $unit_cost_first;
        $remaining = $units - 50;
        $bill = $temp + ($remaining * $unit_cost_second);
    } elseif ($units <= 250) {
        $temp = (50 * $unit_cost_first) + (100 * $unit_cost_second);
        $remaining = $units - 150;
        $bill = $temp + ($remaining * $unit_cost_third);
    } else {
        $temp =(50 * $unit_cost_first) + (100 * $unit_cost_second) + (100 * $unit_cost_third);
        $remaining = $units - 250;
        $bill = $temp + ($remaining * $unit_cost_fourth);
    }

    return number_format((float)$bill, 2);
}
?>

<body>
<div id="page-wrap">
    <h1>Calculate Electric Bill</h1>

    <form action="" method="post" id="form">
        <label for="units"></label><input type="number" name="units" id="units" placeholder="Enter no. of Units">
        <input type="submit" name="units-submit" id="units-submit" value="Submit">
    </form>

    <div>
        <?php echo '<br/>' . $str_result; ?>
    </div>
</div>
</body>
