<?php
defined('_JEXEC') or die('Restricted access');

$document = JFactory::getDocument();
$document->addScriptDeclaration('
    window.event("domready", function() {
        alert("An inline JavaScript Declaration");
    });
');

?>

<H2>Woto</H2>


