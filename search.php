<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="content">
        <div class="main">
            <form action="reflected.php" method="get">
                <label style="font-size:25px;">Search</label><br>
                <input type="text" name="search" id="search" style="margin-top:10px;">
                <button type="submit">Submit</button>
            </form>
            <a href="bank.php" style="margin: 10px;text-decoration: none;color: black;padding: 10px;">go to CSRF</a>
        </div>
    </div>
</body>
</html>