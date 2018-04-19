<h1>UTF-8 Online Converter (Decoder&nbsp;&amp;&nbsp;Encoder)</h1>
<div id="convert_form">
    <h2>Mode: Manual</h2>
    <div class="input">
        <textarea name="input" placeholder="input.."></textarea>
    </div>

    <div class="button encode">Encode</div>
    <div class="button decode">Decode</div>

    <div class="clear"></div>

    <textarea disabled class="output">Please enter some text and start conversion.</textarea>

    <hr />
    
    <h2>Mode: Automatic</h2>

    <form id="fixfile_form" action="ajax/fixfile.php" method="post" enctype="multipart/form-data" target="__ajax_form__">
        <div class="input">
            <input type="file" name="broken_file" />
        </div>

        <input type="submit" name="submit_x" class="button fixfile" value="Fix File" />

        <div class="clear"></div>

        <textarea disabled class="output_file">Please upload a broken file and I will try to fix it.</textarea>
    </form>
</div>