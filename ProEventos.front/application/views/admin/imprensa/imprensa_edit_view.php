<div class="container-fluid" id="template">
    <ol class="breadcrumb">
        <li>
            <a href="<?= base_url("admin") ?>">Admin</a>
        </li>
        <li  class="active">Imprensa</li>
    </ol>
    <hr/>
    <h3>Imprensa</h3>
    <br/>
    <form method="post" action="<?= base_url("imprensa/up") ?>" enctype="multipart/form-data" >
        <input type="hidden" name="id" value="<?= $imprensa['id'] ?>"/>
        <input type="hidden" name="tipo" value="<?= $imprensa['tipo'] ?>"/>
        <div class="row">
            <div class="col-xs-12 col-md-8 col-md-offset-2">
                <div class="form-group">
                    <label for="banner">Banner Topo (1701x524)</label>
                    <input type="file" class="form-control" name="banner" id="banner"/>
                    <?php if ($imprensa['banner']): ?>
                        <Br/>
                        <img src="<?= base_url("assets/upload/{$imprensa['banner']}") ?>" class="img-responsive center-block" style="max-height: 100px;"/>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Título" value="<?= $imprensa['titulo'] ?>"/>
                </div>
                <div class="form-group">
                    <label for="texto">Texto</label>
                    <textarea class="summernote" name="texto" id="texto"><?= $imprensa['texto'] ?></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Salvar</button>
                </div>
            </div>
        </div>
    </form>
</div>