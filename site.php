<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
</head>
<body>
    <div class="container" style="margin-top: 20px;">
        <div style='color: green;'>You are successfully logged in!</div>
        <table class="table table-striped w-25">
            <thead>
                <tr>
                    <th>Visit Count:</th>
                    <th>Last Visited Date:</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $_COOKIE['visit_count'] ?></td>
                    <td><?php echo $_COOKIE['last_visited_date'] ?></td>
                </tr>
            </tbody>
        </table>
        <div class="btn-group">
            <a href='/exit.php' class='btn btn-outline-info'>Back</a>
            <a href="/clearCookie.php" class='btn btn-outline-warning'>Remove coockie</a>
        </div>
    </div>
</body>
</html>
