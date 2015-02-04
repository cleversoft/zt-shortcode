<?php
$style = $options->get('style');
$styleFile = __DIR__ . '/galleries/' . $style . '.php';
if (JFile::exists($styleFile))
{
    require $styleFile;
} else // Use default file if asked file is not exists
{
    __DIR__ . '/galleries/default.php';
}
?>