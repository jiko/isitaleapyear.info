<?php
function next_leap_year() {
    $year = date("Y");
    $this_year = $year;
    $today = date("d F Y");
    while (!(date("L",strtotime("4 January $year")))) {
        $year++;
    }
    if ($year == $this_year && strtotime($today)<strtotime("29 February $year"))
        return $year;
    else {
        $year++;
        while (!(date("L",strtotime("4 January $year")))) {
            $year++;
        }
        return $year;
    }
}
?>
<!doctype html>
<html>
    <head>
        <title>Is it a Leap Year?</title>
        <style>
            body { text-align: center; font-family: Helvetica, Arial, sans serif; }
            h1 { font-size: 72pt; }
            h2 { font-size: 48pt; }
            #next { font-size: 14pt; }
        </style>
    </head>
    <body>
        <h1><?php
            if (date("L")) echo "YES";
            else echo "NO" ?></h1>
        <p id="next">The next leap day is February 29th, <?php echo next_leap_year() ?></p>
        <p><a href="http://jameskoppen.com">You're welcome.</a></p>
    </body>
</html>

