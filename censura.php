<?php 
    $name = $_GET['badword'];
    $paragraph = $_GET['paragraph'];
    $newParagraph = str_replace($name, '***', $paragraph);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>

    <h1>Paragrafo</h1>
    <p><?php 
        echo $paragraph;
    ?></p>
    <div>Lunghezza paragrafo:<?php echo strlen($paragraph)?></div>

    <h1>Paragrafo censurato</h1>
    <p><?php 
        echo $newParagraph;
    ?></p>
    <div>Lunghezza paragrafo:<?php echo strlen($newParagraph)?></div>
</body>
</html>
