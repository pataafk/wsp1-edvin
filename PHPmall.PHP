<?php
/**
 * 
 * [med en mening förklaras vad denna fill innehåller och gör]
 * 
 * [med några meningar förklaras det i mer detalj]
 */

 //[kodblock med inställningar och inledande bearbetningar]
 mb_internal_encoding("UTF-8");
 function utf8_strrev($str){
     //namnet baklänges -se detta svart magi tills vidare!
     preg_match_all('/./us', $str, $temp_arr);
     return join('', array_reverse($temp_arr[0]));

 }
 $submitted_name = filter_input(INPUT_POST, 'name', FILTER_UNSAFE_RAW, FILTER_FLAG_STRIP_LOW);
echo "Hej" . $submitted_name;
 $namedata = false;
 if (!empty($submitted_name)) {
     $submitted_name = trim($submitted_name);

     $output_name = htmlspecialchars($submitted_name, ENT_QUOTES);

     $charcount = mb_strlen($submitted_name);

     $name_reversed = utf8_strrev($submitted_name);

     $name_reversed = htmlspecialchars($name_reversed, ENT_QUOTES);
     $namedata = true;
 }

 $alla_citat = array(
     "i did not develop the PHP we know today. Dozens, if not hundreds of people, developed PHP. i was simply the first developer",

     "fuck",
     "da",
     "no"
 );
 $random_key = array_rand($alla_citat);
 $citat      = $alla_citat[$random_key];
 date_default_timezone_set("Europe/stockholm");
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
    <h1>Avsnitt 2.3: namntest</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
     <p>
         <label for="name">vad heter du?</label>
         <input type="text" name="name" id="name"
                  placeholder="ex. Åke svensson" />
    </p>
    <p>
        <input type="submit" value="testa namnet" />
    </p>
<?php
if ($namedata) {
    echo <<<DATA
    <dl>
     <dt>name</dt>
     <dd>{$output_name}</dd>
     <dt>Antal tecken (inklusive ev. mellanslag i mitten)</dt>
     <dd>{$charcount}</dd>
     <dt>Namnet baklänges</dt>
     <dd>{$name_reversed}</dd>
    </dl>
DATA;

}
//[kodblock med output]
echo "<p>" . strftime("%c") . "</p>\n";
echo "<p lang=\"en\">{$citat}</p>\n";
?>
</body>
</html>