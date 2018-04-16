<?php
$navi = array(
    'index.html' => 'Home',
    'utf-16.html' => 'UTF-8 oder UTF-16?',
    'unicode-table.html' => 'Unicode Table',
    'converter.html' => 'Converter'
);
?>
<div id="navi_toggler"></div>
<div id="navigation">
    <nav>
        <?php
        $navi_items = array();
        foreach ($navi as $href => $label) {
            array_push($navi_items, Html::link($href, $label));
        }
        echo Html::ul($navi_items);
        ?>
    </nav>
</div>