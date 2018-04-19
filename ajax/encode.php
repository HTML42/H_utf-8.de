<?php

if(isset($_GET['input'])) {
    ob_clean();
    echo utf8_encode($_GET['input']);
    die;
}