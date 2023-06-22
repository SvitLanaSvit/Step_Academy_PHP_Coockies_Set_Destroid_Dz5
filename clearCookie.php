<?
    $isConfirmed = false;
    $isRemoved = false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
    <script>
        let isConfirmed = confirm("Are you sure to remove all cookies?");
        if(isConfirmed){
            <?$isConfirmed = true?>;
        }
    </script>
    <?
    if(isset($_COOKIE['visit_count']) && $isConfirmed){
        $visit_count = $_COOKIE['visit_count'];
        setcookie('visit_count', $visit_count, time() - (60 * 60 * 24 * 365), "/", "", 0, 0 );
        setcookie("name", "Svitlana", time() - (60 * 60 * 24 *365), "/", "", 0, 0 );
        setcookie("last_visited_date", date("Y-m-d"), time() - (60 * 60 * 24 *365), "/", "", 0, 0 );
        $isRemoved = true;
    }
    ?>
    <div class="container">
        <?if($isRemoved){?>
            <p style="color: red;">Coockies was succsessfull removed!</p>
        <?}?>
        <a href="/exit.php" class="btn btn-outline-info">Back to exit</a>
    </div>
</body>
</html>