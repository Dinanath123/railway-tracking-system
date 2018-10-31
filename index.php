<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>status</title>
</head>
<body>
    <div>
        <center>
            <h1>Train status</h1><hr>
        </center>
    </div>
    <div>
        <center>
        <form action="status.php" method="get">
            <table>
                <tr>
                    <td>Enter Train no. : </td>
                    <td><input type="number" name="train_no" id="train_no" size="25"></td>
                </tr>
                <tr>
                    <td>date : </td>
                    <td><input type="date" name="date" id="date" size="25"></td>
                </tr>
            </table>
            <button type="submit">submit</button>
        </form>
        </center>
    </div>
</body>
</html>