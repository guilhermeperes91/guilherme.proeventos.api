<div class="container-fluid" id="template">
    <ol class="breadcrumb">
        <li>
            <a href="<?= base_url("admin") ?>">Admin</a>
        </li>
        <li>
            <a href="<?= base_url("admin/midia") ?>">Mídia</a>
        </li>
        <li  class="active">Adicionar Mídia</li>
    </ol>
    <hr/>
    <h3>Adicionar Mídia</h3>
    <br/>
    <form method="post" action="<?= base_url("midia/set") ?>" enctype="multipart/form-data" >
        <div class="row">
            <div class="col-xs-12 col-md-8 col-lg-9">
                <div class="form-group">
                    <input type="text" class="form-control" name="titulo" placeholder="Título"/>
                </div>
                <div class="form-group">
                    <textarea class="summernote" name="integral"></textarea>
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
                            <input type="text" class="form-control" name="veiculo" id="veiculo" placeholder="Veículo"/>
                        </div>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label for="dia">Dia</label>
                                    <input type="text" class="form-control" name="dia" id="dia" placeholder="Dia"/>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label for="mes">Mês</label>
                                    <input type="text" class="form-control" name="mes" id="mes" placeholder="Mês"/>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label for="ano">Ano</label>
                                    <input type="text" class="form-control" name="ano" id="ano" placeholder="Ano"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="palavrachave">Palavra-Chave</label>
                            <textarea id="palavrachave" class="form-control" name="palavrachave"></textarea>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-body">

                        <div class="form-group">
                            <label for="imagem">Imagem</label>
                            <input type="file" class="form-control" name="imagem" id="imagem"/>
                        </div>
                        <div class="form-group">
                            <label for="legenda">Legenda</label>
                            <input type="text" class="form-control" name="legenda" id="legenda" placeholder="Legenda"/>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </form>
</div>

