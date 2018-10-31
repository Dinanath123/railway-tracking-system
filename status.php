<?php
$train_no = $_GET['train_no'];
$date = $_GET['date'];

$y = substr($date,0,4);
$m = substr($date,5,2);
$d = substr($date,8,2);

$new_date = $d . '-' . $m . '-' . $y;

$url = "https://api.railwayapi.com/v2/live/train/" .$train_no. "/date/" .$new_date. "/apikey/ddn1cqfbjs/";

$data = file_get_contents($url);
$json = json_decode($data,true);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>status</title>
</head>
<body>
    <center>
        <div>
            Train no : <?php echo "$train_no" . '<br>' ?>
            Date : <?php echo "$new_date" ?>
        </div><hr>
        <span>
            <?php echo  "";?>
        </span>
        <div>
            <h3>Train name :</h3> <?php echo $json['train']['name']?>
            <b>From :</b> <?php echo $json['route'][0]['station']['name']; ?>
            <b>To :</b> <?php echo $json['route'][count($json['route'])-1]['station']['name']; ?>
        </div>
        <hr>
        <table>
            <tr>
                <th>S.No</th>
                <td>Station name </td>
                <td>arrival</td>
                <td>departure</td>
                <td>status</td>
            </tr>
            <?php
                $i = 0;
                while(isset($json['route'][$i]['station']['name'])){
                    $stn_num = $i + 1;
                    echo '<tr>';
                    echo '<td>' . $stn_num .'</td>';
                    echo '<td>' . $json['route'][$i]['station']['name']. '</td>';
                    echo '<td>' . $json['route'][$i]['actarr']. '</td>';
                    echo '<td>' . $json['route'][$i]['actdep']. '</td>';
                    echo '<td>' . $json['route'][$i]['status']. '</td>';
                    echo '</tr>';
                    $i++;
                }
            ?>
        </table>
    </center>
</body>
</html>
