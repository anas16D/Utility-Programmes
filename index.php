
<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Utility Programs</title>

</head>
<body>

<header id = "pageHeader">Utility Programs</header>
<hr>

<header id = "countHeader" class = "programHeader"> 1. Counting Programme</header>



    <textarea type="text" name = "text" id = "text" placeholder="Type Here"></textarea>
    <button type = "button" name = "countButton" id = "countButton" class = "resultButton">Count </button>
    

<br>
<div id="answerCount" class = "answer"></div>
<hr>

<header id = "whatsAppChatHeader" class = "programHeader"> 2. Whatsapp Message Sender 
    <span class = "subHeader">(without saving number)</span>
</header>
<ul>
    <li>Type number including country code</li>
    <li>Do not type '+' before the country code</li>
</ul>
<input type="number" name="whatsAppNumber" id="whatsAppNumber" placeholder="91xxxxxxxxxx">
<button type = "button" name = "sendWhatsAppButton" id = "sendWhatsAppButton" class = "resultButton">Send Message</button>
<br><br>
<hr>

<header id = "makePdfHeader" class = "programHeader"> 3. PDF Generator</header>

    <textarea type="text" name = "text" id = "text" placeholder="Type Here"></textarea>
    <button type = "button" name = "pdfGeneratorButton" id = "pdfGeneratorButton" class = "resultButton">Get PDF </button>
    

<br>

<?php
    //error_reporting(E_ALL);
    require("vendor/autoload.php");
    header('Content-Type: application/pdf');
    //$mpdf = new MPDF();
    ob_clean();
    $mpdf = new \mPDF();
    //$mpdf = new \Mpdf\Mpdf();
    $mpdf->WriteHTML('<h1>Hello world!</h1>');
    error_reporting(E_ERROR | E_PARSE);
    
    $mpdf->Output()
?>


<script src = "index.js"></script>

</body>
</html>