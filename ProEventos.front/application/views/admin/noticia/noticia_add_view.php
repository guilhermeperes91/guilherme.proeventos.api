<div class="container-fluid" id="template">
    <ol class="breadcrumb">
        <li>
            <a href="<?= base_url("admin") ?>">Admin</a>
        </li>
        <li>
            <a href="<?= base_url("admin/noticias") ?>">Notícias</a>
        </li>
        <li  class="active">Adicionar Notícia</li>
    </ol>
    <hr/>
    <h3>Adicionar Notícia</h3>
    <br/>
    <form method="post" action="<?= base_url("noticias/set") ?>" enctype="multipart/form-data" >
        <div class="row">
            <div class="col-xs-12 col-md-8 col-lg-9">
                <div class="form-group">
                    <input type="text" class="form-control" name="titulo" placeholder="Título"/>
                </div>
                <div class="form-group">
                    <textarea class="summernotes" name="texto"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 col-lg-3">
                <div class="form-group">
                    <button type="submit" class="btn btn-success form-control">Salvar</button>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <b>Opções</b>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="datetimepicker-">Data de publicação</label>
                            <input type="text" class="form-control" name="criado" value="<?= date("d/m/Y H:i:s") ?>" id="datetimepicker"/>
                        </div>
                        <div class="form-group">
                            <label for="datetimepicker-">Modo de publicação</label>
                            <select name="publicado" class="form-control">
                                <option value="1">Publicado</option>
                                <option value="0">Rascunho</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <label for="img_destaque">Imagem destacada</label>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <input type="file" class="form-control" name="img_destaque" id="img_destaque"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    var base_url = "<?= base_url() ?>";
</script>