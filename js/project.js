var Xtreme_startup_calls = Xtreme_startup_calls || [];
Xtreme_startup_calls.push(function () {
    //
    list_length();
    //
    $('#navi_toggler').click(function () {
        $('#navigation ul').toggleClass('active');
    });
    //
    $ajax_form_iframe = $('<iframe id="__ajax_form__" name="__ajax_form__"></iframe>');
    $(document.body).append($ajax_form_iframe);
    //
    $('#convert_form').each(function () {
        var $form = $(this);
        var $fixfile_form = $('#fixfile_form');
        var $input = $form.find('[name=input]');
        var $encode = $form.find('.encode');
        var $decode = $form.find('.decode');
        var $fixfile = $form.find('.fixfile');
        var $output = $form.find('.output');
        var $output_file = $form.find('.output_file');
        //
        $encode.click(function () {
            $.get('ajax/encode.php', {input: $input.val()}, function (output) {
                $output.text(output);
            });
        });
        $decode.click(function () {
            $.get('ajax/decode.php', {input: $input.val()}, function (output) {
                $output.text(output);
            });
        });
        $fixfile.click(function () {
            $fixfile_form.submit(function () {
                $output_file.text('Please wait while we are trying to fix your File..');
                setTimeout(function () {
                    var output = get_iframe_content($ajax_form_iframe);
                    //var output = format_file_output(output);
                    $output_file.html(output);
                }, 2000);
            });
        });
    });
});

function get_iframe_content(iframe) {
    var x = $(iframe).get(0);
    var y = (x.contentWindow || x.contentDocument);
    if (y.document) {
        y = y.document;
    }
    return y.body.innerHTML;
}
function format_file_output(input) {
    //htmlspecialchars
    //input = input.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/"/g, "&quot;").replace(/'/g, "&#039;");

    //nl2br
    input = input.replace(/\r\n/g, '<br/>').replace(/\r/g, '<br/>').replace(/\n/g, '<br/>');
    //WhiteSpaces
    input = input.replace(/ /g, '&nbsp;').replace(/\t/g, '&nbsp;&nbsp;&nbsp;&nbsp;');
    return input;
}