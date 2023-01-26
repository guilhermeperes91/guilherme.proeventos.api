<h3>Obras</h3>
<button type="button" id="btn-add-obra" class="btn btn-default">Adicionar obra</button>
<br/>
<div class="row" id="sortable_obra">
    <?php foreach ($obras as $p): ?>
        <div class="col-xs-6 col-md-3 col-lg-2 type-gallery ui-state-default" data-id="<?= $p['id'] ?>">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="#" class="obra-titulo" data-type="text" data-pk="<?= $p['id'] ?>" data-url="<?= base_url("obra/upTitle") ?>" data-title="Digite o título"><?= $p['titulo'] ?></a>
                </div>
                <div class="panel-body">
                    <img src="<?= base_url("assets/upload/thumb_567x344/{$p['img']}") ?>" class="img-responsive"/>
                </div>
                <div class="panel-footer">
                    <button type="button" class="btn btn-danger form-control btn-remove-obra" data-id="<?= $p['id'] ?>">Remover</button>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<script>
    $(document).ready(function () {

        $('.obra-titulo').editable({
            emptytext: 'Sem título',
            success: function (response, newValue) {

                carregarObra();
            }
        });
    });
    $(function () {
        $("#sortable_obra").sortable();
        $("#sortable_obra").disableSelection();
        $('#sortable_obra').on('sortupdate', function () {
            var newOrder = [];
            $("#sortable_obra .ui-state-default").each(function (index, element) {
                newOrder.push({
                    order: index,
                    id: $(element).data('id')
                });
            });
            $.ajax({
                url: "<?= base_url("obra/upOrdem") ?>",
                method: "post",
                data: {newOrder: newOrder},
                dataType: "json",
                success: function (data) {

                }
            });
            console.log(newOrder);
        });

    });
</script>