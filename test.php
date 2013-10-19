<?php
require_once(dirname(__FILE__).'/scripts/PHP_markdown/Michelf/Markdown.php');
echo Michelf\Markdown::defaultTransform("##Hello World!");
?>
