<h3>Certificação</h3>
<button type="button" id="btn-add-certificacao" class="btn btn-default">Adicionar</button>
<br/><br/>
<div class="row">
    <?php foreach ($certificacao as $p): ?>
        <div class="col-xs-6 col-md-3 col-lg-2 type-gallery">
            <div class="panel panel-default">
                <div class="panel-body">
                    <img src="<?= base_url("assets/upload/{$p['img']}") ?>" class="img-responsive center-block"/>
                </div>
                <div class="panel-footer">
                    <button type="button" class="btn btn-danger form-control btn-remove-certificacao" data-id="<?= $p['id'] ?>">Remover</button>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<br/><br/>