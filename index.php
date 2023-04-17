<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    <form action="/php-badwords/censura.php" method="GET">
        <div>
            <label for="badword-area">Bad word</label>
            <input name="badword" id="badword-area" type="text" placeholder="parola da censurare">
        </div>
        <div>
            <label for="paragraph-area">Paragraph</label>
            <textarea name="paragraph" id="paragraph-area" cols="80" rows="30"></textarea>
        </div>
        <button type="submit">Invia</button>
    </form>
</body>
</html>