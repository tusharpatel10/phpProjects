<!doctype html>
<html lang="en">

<head>
    <title>Factorial Value</title>
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
        <center><br><br><br><br><br><br>
            <table align="center" border="2" width="30%">
                <tr align="center" bgcolor="darkblue">
                    <td>
                        <font color="white"><br>
                            <h1>FACTORIAL</h1>
                        </font>
                    </td>
                </tr>
                <tr bgcolor="chocolate">
                    <td><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face="arial" size="6" color="white">Enter the DIGIT : </font><input type="text" name="n" size="15" id=""><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="submit" value="&nbsp;&nbsp;&nbsp;SEND&nbsp;&nbsp;&nbsp;"><br><br><br>
                    </td>
                </tr>
            </table>
        </center>
    </form>

    <?php

    if ($_POST) {
        $m = $_POST['n'];
        function factorial($m)
        {
            if ($m < 2)
                return 1;
            else
                return ($m * factorial($m - 1));
        }
        $f = factorial($m);
        echo '<br><table border="2" align="center"><tr><td>';
        echo '<center><font face="arial" size="10" color="crimson">FACTORIAL</font><br><br>';
        echo '<b>---------------------------------------------------</b>';
        echo '<font face="arial" size="8"><br>';
        echo "Given Digit = $m<br>";
        echo '<br><font color="green">';
        echo "factorial &nbsp;&nbsp;= $f";
        echo "</center></font>";
        echo '</td></tr></table>';
    }
    ?>


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