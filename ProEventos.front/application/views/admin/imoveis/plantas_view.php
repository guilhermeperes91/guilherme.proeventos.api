<h3>Plantas</h3>
<button type="button" id="btn-add-planta" class="btn btn-default">Adicionar planta</button>
<br/>
<div class="row" id="sortable_planta">
    <?php foreach ($plantas as $p): ?>
        <div class="col-xs-6 col-md-3 col-lg-3 type-gallery default ui-state-default" data-id="<?= $p['id'] ?>">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="#" class="planta-titulo" data-type="text" data-pk="<?= $p['id'] ?>" data-url="<?= base_url("plantas/upTitle") ?>" data-title="Digite o título"><?= $p['titulo'] ?></a>
                </div>
                <div class="panel-body">
                    <img src="<?= base_url("assets/upload/{$p['imagem']}") ?>" class="img-responsive"/>
                </div>
                <div class="panel-footer">
                    <button type="button" class="btn btn-danger form-control btn-remove-planta" data-id="<?= $p['id'] ?>">Remover</button>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<script>
    $(document).ready(function () {

        $('.planta-titulo').editable({
            emptytext: 'Sem título',
            success: function (response, newValue) {

                carregarGaleria();
            }
        });
    });
    $(function () {
        $("#sortable_planta").sortable();
        $("#sortable_planta").disableSelection();
        $('#sortable_planta').on('sortupdate', function () {
            var newOrder = [];
            $("#sortable_planta .ui-state-default").each(function (index, element) {
                newOrder.push({
                    order: index,
                    id: $(element).data('id')
                });
            });
            $.ajax({
                url: "<?= base_url("plantas/upOrdem") ?>",
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