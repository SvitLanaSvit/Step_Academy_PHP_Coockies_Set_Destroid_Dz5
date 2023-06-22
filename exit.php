<?
$visit_count = 1;
if(isset($_COOKIE['visit_count'])){
    $visit_count = $_COOKIE['visit_count'] + 1;
}

setcookie('visit_count', $visit_count, time() + (60 * 60 * 24 * 365), "/", "", 0, 0 );
setcookie("name", "Svitlana", time() + (60 * 60 * 24 *365), "/", "", 0, 0 );
setcookie("last_visited_date", date("Y-m-d"), time() + (60 * 60 * 24 *365), "/", "", 0, 0 );
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
    <div class="container" style="margin-top: 20px;">
        <a href="site.php" class="btn btn-outline-info">Log in to the site</a>
    </div>
</body>
</html>