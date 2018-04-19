<?php

if(isset($_GET['input'])) {
    ob_clean();
    echo utf8_decode($_GET['input']);
    die;
}