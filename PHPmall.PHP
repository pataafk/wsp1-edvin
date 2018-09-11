<?php
/**
 * 
 * [med en mening förklaras vad denna fill innehåller och gör]
 * 
 * [med några meningar förklaras det i mer detalj]
 */

 //[kodblock med inställningar och inledande bearbetningar]
 data_default_timezone_set("Europe/stockholm");
 setlocale(LC_ALL, "sv_SE", "Swedish");

 header("content-type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8" />
    <title></title>
    <style>
        body{
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <h1>
<?php
//[kodblock med output]
echo "<p>" . strftime("%C") . "</p>\n";
?>
</body>
</html>