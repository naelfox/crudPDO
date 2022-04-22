
<?php


/*Esse é um modelo de url para ajudar a chamar as páginas em decorrer do código */

$URL = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI']. '?') . '/';

