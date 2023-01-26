<div class="container-fluid" id="template">
    <ol class="breadcrumb">
        <li>
            <a href="<?= base_url("admin") ?>">Admin</a>
        </li>
        <li>
            <a href="<?= base_url("admin/midia") ?>">Mídia</a>
        </li>
        <li  class="active">Editar Mídia</li>
    </ol>
    <hr/>
    <h3>Editar Mídia</h3>
    <br/>
    <form method="post" action="<?= base_url("midia/up/{$midia['id']}") ?>" enctype="multipart/form-data" >
        <div class="row">
            <div class="col-xs-12 col-md-8 col-lg-9">
                <div class="form-group">
                    <input type="text" class="form-control" name="titulo" placeholder="Título" value="<?= $midia['titulo'] ?>"/>
                </div>
                <div class="form-group">
                    <textarea class="summernote" name="integral"><?= $midia['integral'] ?></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 col-lg-3">
                <div class="form-group">
                    <button type="submit" class="btn btn-success form-control">Salvar</button>
                </div>

                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="veiculo">Veículo</label>
                            <input type="text" class="form-control" name="veiculo" id="veiculo" placeholder="Veículo" value="<?= $midia['veiculo'] ?>"/>
                        </div>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label for="dia">Dia</label>
                                    <input type="text" class="form-control" name="dia" id="dia" placeholder="Dia" value="<?= $midia['dia'] ?>"/>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label for="mes">Mês</label>
                                    <input type="text" class="form-control" name="mes" id="mes" placeholder="Mês" value="<?= $midia['mes'] ?>"/>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label for="ano">Ano</label>
                                    <input type="text" class="form-control" name="ano" id="ano" placeholder="Ano" value="<?= $midia['ano'] ?>"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="palavrachave">Palavra-Chave</label>
                            <textarea id="palavrachave" class="form-control" name="palavrachave"><?= $midia['palavrachave'] ?></textarea>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-body">

                        <div class="form-group">
                            <label for="imagem">Imagem</label>
                            <input type="file" class="form-control" name="imagem" id="imagem"/>
                            <?php if ($midia['imagem']): ?>
                                <img src="<?= base_url("assets/upload/{$midia['imagem']}") ?>" class="img-responsive"/>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="legenda">Legenda</label>
                            <input type="text" class="form-control" name="legenda" id="legenda" placeholder="Legenda" value="<?= $midia['legenda'] ?>"/>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </form>
</div>

