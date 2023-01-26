<div class="container-fluid" id="template">
    <ol class="breadcrumb">
        <li>
            <a href="<?= base_url("admin") ?>">Admin</a>
        </li>
        <li>
            <a href="<?= base_url("admin/paginas") ?>">Páginas</a>
        </li>
        <li  class="active">Adicionar Página</li>
    </ol>
    <hr/>
    <h3>Adicionar Página</h3>
    <br/>
    <form method="post" action="<?= base_url("paginas/set") ?>" enctype="multipart/form-data" >
        <div class="row">
            <div class="col-xs-12 col-md-8 col-lg-9">
                <div class="form-group">
                    <label for="banner">Banner Topo (1701x524)</label>
                    <input type="file" class="form-control" name="banner" id="banner"/>
                </div>

                <div class="form-group">
                    <label for="banner">Banner Topo Mobile (800x900)</label>
                    <input type="file" class="form-control" name="banner_mobile" id="banner_mobile"/>
                </div>
                <hr/>
                <div class="form-group">
                    <input type="text" class="form-control" name="titulo" placeholder="Título"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="url" placeholder="<?= base_url("/") ?>"/>
                </div>
                <div class="form-group">
                    <textarea class="summernote" name="texto"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 col-lg-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success form-control">Salvar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

