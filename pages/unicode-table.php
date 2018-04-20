<h1>Unicode Table</h1>

<h2>Most important Characters:</h2>

<div class="box">
    <h3>&amp;nbsp;</h3>
    <p>A non-breaking-space, very useful for words which should never be seperated.</p>
</div>
<div class="box">
    <h3>&amp;shy;</h3>
    <p>A dash which appears when there is not enough space in the content to write the Word.</p>
</div>
<div class="box">
    <h3>&amp;ndash;</h3>
    <p>A n-length dash, used in lyric. Some fonts can only render it properly when you use this unicode.</p>
</div>
<div class="box">
    <h3>&amp;reg;</h3>
    <p>Registered Symbol for HTML.</p>
</div>
<div class="box">
    <h3>&amp;copy;</h3>
    <p>Copy-Right Symbol for HTML.</p>
</div>

<h2>Complete Charater List:</h2>
<ul class="unicode_table unicode_table_head_line">
    <?php for ($i = 1; $i <= 6; $i++) { ?>
        <li class="col_<?= $i ?>">
            <div class="field_1">Code</div>
            <div class="field_2">Character</div>
        </li>
    <?php } ?>
</ul>

<ul class="unicode_table unicode_table_charaters">
    <?php for ($i = 1; $i <= 128; $i++) { ?>
        <li>
            <div class="field_1">&amp;#<?= $i ?>;</div>
            <div class="field_2">&#<?= $i ?>;</div>
        </li>
    <?php } ?>
</ul>