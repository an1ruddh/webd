<?php
if(isset($_POST['submit']))
{
$xml = new SimpleXMLElement("<?xml version=\"1.0\" encoding=\"utf-8\" ?><miles></miles>");

    $xml->addChild('textarea', $_POST['textarea']);
    $xml->addChild('textfield', $_POST['textfield']);
    $xml->addChild('select', $_POST['select']);

    $asXML = $xml->asXML();
    $file = fopen("data.xml","w+");
    fwrite($file,$asXML);
    fclose($file); 
    print_r(error_get_last());

    if(file_exists('./data.xml'))
    {
        $myXML = file_get_contents('./data.xml');
        $xml = new SimpleXMLElement($myXML);
        $xmlpretty = $xml->asXML();

        // pretty print the XML in browser
        header('content-type: text/xml');
        echo $xmlpretty;
    }

}
?>