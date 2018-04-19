<?php

ob_clean();
$_FILE = null;
if (isset($_FILES['broken_file'])) {
    $_FILE = $_FILES['broken_file'];
}
if ($_FILE && is_file($_FILE['tmp_name']) && $_FILE['size'] > 0) {
    $file_content = file_get_contents($_FILE['tmp_name']);
    if (strlen($file_content) > 1) {
        $output = fix_encoding(trim($file_content));
        if(substr($output, 0, 1) == '?') {
            $output = substr($output, 1);
        }
        echo htmlspecialchars($output);
        die;
    }
}
echo 'ERROR &ndash; No content found.';
die;

function fix_encoding($input) {
    if (check_str($input)) {
        return $input;
    } else if (check_str(utf8_decode($input))) {
        return utf8_decode($input);
    } else if (check_str(utf8_decode(utf8_decode($input)))) {
        return utf8_decode(utf8_decode($input));
    } else if (check_str(utf8_encode($input))) {
        return utf8_encode($input);
    } else if (check_str(utf8_encode(utf8_encode($input)))) {
        return utf8_decode(utf8_encode($input));
    } else {
        return 'ERROR &ndash; No solution found.';
    }
}

function check_str($input) {
    if (strstr($input, 'Ã') && strstr($input, 'Â')) {
        return false;
    }
    if (strstr($input, '¤')) {
        return false;
    }
    if (strstr($input, '¶')) {
        return false;
    }
    $no_q = strlen(preg_replace('/[^\?]/', '', $input));
    if ($no_q > strlen($input) / 3) {
        return false;
    }
    return true;
}
