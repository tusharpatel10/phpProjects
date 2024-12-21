<?php
error_reporting(1);
$day = 0;
$yr = 0;
$mon = 0;

if (isset($_POST['b1'])) {
    $d1 = $_POST['t1'];
    $d2 = $_POST['t2'];
    $arr = explode("/", $d1);
    $brr = explode("/", $d2);

    if ($arr[0] < $brr[0]) {
        $arr[0] += 30;
        $arr[1] -= 1;
    }

    if ($arr[1] < $brr[1]) {
        $mon += 12;
        $arr[2] -= 1;
    }

    $mon = $arr[1] - $brr[1];
    $yr = $arr[2] - $brr[2];
}

?>

<!doctype html>
<html lang="en">

<head>
    <title>Age Calculator</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
</head>

<body>

    <form method="POST">
        <table border="4" align="center" bordercolor="Crimson">
            <tr><br><br><br>
                <td align="center" colspan="2" bgcolor="Crimson">
                    <font color="white"><br>
                        <h2><b>AGE CALCULATOR</b></h2>
                    </font>
                </td>
            </tr>
            <tr>
                <td align="center"><b>Enter Current date</b></td>
                <td align="center"><input type="text" name="t1" autofocus></td>
            </tr>
            <tr>
                <td align="center"><b>Enter &nbsp;Your DOB</b></td>
                <td align="center"><input type="text" name="t2"></td>
            </tr>
            <tr>
                <td align="center" colspan="2"><input type="submit" name="b1" value="calculate"></td>
            </tr>
            <tr>
                <td align="center"><b>Your Age</b></td>
                <td align="center">

                    <?php
                    error_reporting(1);
                    echo $yr . 'years ' . $mon . 'Months ' . $day . 'days';
                    echo '</font>';
                    ?>

                </td>
            </tr>
        </table>
    </form>

    <!-- Bootstrap JavaScript Libraries -->
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>