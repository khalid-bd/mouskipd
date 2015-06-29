<?php

require_once "vendor/autoload.php";

use Knp\Snappy\Pdf;

if(isset($_POST) && isset($_POST["envoyer"]))
{
    $myProjectDirectory = '/var/www/html/mouskipd';

    $snappy = new Pdf();
    $snappy->setBinary('/var/www/html/mouskipd/vendor/h4cc/wkhtmltopdf-amd64/bin/wkhtmltopdf-amd64');

    $snappy->generateFromHtml('<h1>Bill</h1><p>You owe me money, dude.</p>', '/var/www/html/mouskipd/tmp/bill-123.pdf');
var_dump($snappy);

    echo "<pre>";
    var_dump($snappy);
    echo "</pre>";
}

?>

<form action="index.php" method="POST" accept-charset="utf-8">
    <input type="submit" name="envoyer">
</form>