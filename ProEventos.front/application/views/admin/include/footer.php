<script src="<?= base_url("assets/js/bootstrap.min.js") ?>"></script>
<script src="<?= base_url("assets/js/summernote.min.js") ?>"></script>
<script src="<?= base_url("assets/js/bootstrap-editable.min.js") ?>"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(".summernote").summernote({
        height: 400,
    });

    $(function () {
        if ($("#editor").length > 0) {
            var editor = ace.edit("editor");
            editor.setTheme("ace/theme/monokai");
            editor.getSession().setMode("ace/mode/html");



            var textarea = $('textarea[name="formulario"]').hide();
            editor.getSession().setValue(atob(textarea.val()));
            editor.getSession().on('change', function () {
                textarea.val(btoa(editor.getSession().getValue()));
            });
        }

        if ($("#editorvideo").length > 0) {
            var editorvideo = ace.edit("editorvideo");
            editorvideo.setTheme("ace/theme/monokai");
            editorvideo.getSession().setMode("ace/mode/html");



            var textarea = $('textarea[name="video"]').hide();
            editorvideo.getSession().setValue(atob(textarea.val()));
            editorvideo.getSession().on('change', function () {
                textarea.val(btoa(editorvideo.getSession().getValue()));
            });
        }

        $(".submenu").click(function () {
            if ($(this).hasClass("active")) {
                $(this).removeClass("active");
            } else {
                $(this).addClass("active");
            }
        });
    });
    

</script>
<?php if (!empty($js)): ?>
    <?php
    foreach ($js as $j):
        $pos = strpos($j, "http");
        if ($pos === false) :
            ?>
            <script type="text/javascript" src="<?= base_url("assets/{$j}") ?>"></script>
            <?php
        else:
            ?>
            <script type="text/javascript" src="<?= $j ?>"></script>
        <?php
        endif;
    endforeach;
    ?>
<?php endif; ?>
</body>
</html>
