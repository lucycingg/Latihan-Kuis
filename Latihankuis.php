
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: antiquewhite;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 700px;

        }
        td{
            background-color: whitesmoke;
            border-radius: 10px;
            padding: 10px;
            font-size: large;
        }
        .card{
            border-radius: 5px;
            background-color: bisque;
            width: 650px;
        }
        .submit:hover{
            background-color: black;
            color:white;
        }
    </style>
</head>
<body>
    <div class="card">
    <h1 style="text-align: center;">What's the <span style="color: red;">s</span><span style="color: orange;">e</span><span style="color: yellow;">a</span><span style="color: green;">s</span><span style="color: blue;">o</span><span style="color: purple;">n</span></span> at the time?</h1> 
    <table align="center" border="1" cellspacing = "20" style="border-color: transparent;">
        <form action="Latihan.php" method="POST">
        <tr>
            <td>
                <input type="radio" name="bulan" value="January"> January
            </td>
            <td>
                <input type="radio" name="bulan" value="February"> February
            </td>
            <td>
                <input type="radio" name="bulan" value="March"> March
            </td>
            <td>
                <input type="radio" name="bulan" value="April"> April
            </td>
        </tr>
        <tr>
            <td>
                <input type="radio" name="bulan" value="May"> May
            </td>
            <td>
                <input type="radio" name="bulan" value="June"> June
            </td>
            <td>
                <input type="radio" name="bulan" value="July"> July
            </td>
            <td>
                <input type="radio" name="bulan" value="August"> August
            </td>
        </tr>
        <tr>
            <td>
                <input type="radio" name="bulan" value="September"> September
            </td>
            <td>
                <input type="radio" name="bulan" value="October"> October
            </td>
            <td>
                <input type="radio" name="bulan" value="November"> November
            </td>
            <td>
                <input type="radio" name="bulan" value="December"> December
            </td>
        </tr>
        <tr>
            <td colspan="4" style="text-align:center; border-color: transparent;" class="submit">
                <input type="submit" value="See Season" style="border-color: transparent;" >
            </td>
        </tr>
    </form>
    </div>
    </table>
</body>
</html>