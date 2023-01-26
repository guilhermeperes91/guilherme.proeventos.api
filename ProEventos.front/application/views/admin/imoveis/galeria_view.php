<h3>Galeria</h3>
<button type="button" id="btn-add-galeria" class="btn btn-default">Adicionar galeria</button>
<br/>
<div class="row" id="sortable_galeria">
    <?php foreach ($galerias as $p): ?>
        <div class="col-xs-6 col-md-3 col-lg-2 type-gallery ui-state-default" data-id="<?= $p['id'] ?>">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="#" class="galeria-titulo" data-type="text" data-pk="<?= $p['id'] ?>" data-url="<?= base_url("galeria/upTitle") ?>" data-title="Digite o título"><?= $p['titulo'] ?></a>
                </div>
                <div class="panel-body">
                    <img src="<?= base_url("assets/upload/thumb_268x171/{$p['img']}") ?>" class="img-responsive"/>
                </div>
                <div class="panel-footer">
                    <button type="button" class="btn btn-danger form-control btn-remove-galeria" data-id="<?= $p['id'] ?>">Remover</button>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<script>
    $(document).ready(function () {

        $('.galeria-titulo').editable({
            emptytext: 'Sem título',
            success: function (response, newValue) {

                carregarGaleria();
            }
        });
    });
    $(function () {
        $("#sortable_galeria").sortable();
        $("#sortable_galeria").disableSelection();
        $('#sortable_galeria').on('sortupdate', function () {
            var newOrder = [];
            $("#sortable_galeria .ui-state-default").each(function (index, element) {
                newOrder.push({
                    order: index,
                    id: $(element).data('id')
                });
            });
            $.ajax({
                url: "<?= base_url("galeria/upOrdem") ?>",
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