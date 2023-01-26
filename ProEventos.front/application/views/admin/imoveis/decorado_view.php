<h3>Decorado</h3>
<button type="button" id="btn-add-decorado" class="btn btn-default">Adicionar decorado</button>
<br/>
<div class="row">
    <?php foreach ($decorados as $p): ?>
        <div class="col-xs-6 col-md-3 col-lg-2 type-gallery">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="#" class="decorado-titulo" data-type="text" data-pk="<?= $p['id'] ?>" data-url="<?= base_url("decorado/upTitle") ?>" data-title="Digite o título"><?= $p['titulo'] ?></a>
                </div>
                <div class="panel-body">
                    <img src="<?= base_url("assets/upload/{$p['thumb_553x359']}") ?>" class="img-responsive"/>
                </div>
                <div class="panel-footer">
                    <button type="button" class="btn btn-danger form-control btn-remove-decorado" data-id="<?= $p['id'] ?>">Remover</button>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<script>
    $(document).ready(function () {

        $('.decorado-titulo').editable({
            emptytext: 'Sem título',
            success: function (response, newValue) {

                carregarObra();
            }
        });
    });
</script>