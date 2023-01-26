<div class="container-fluid" id="template">
    <ol class="breadcrumb">
        <li>
            <a href="<?= base_url("admin") ?>">Admin</a>
        </li>
        <li  class="active">Banner</li>
    </ol>
    <h3>Upload</h3>
    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#banner_set">Novo</button>
    <hr/>
    <h3>Fotos da galeria</h3>
    <div class="table-responsive">
        <table class="table table-bordered table-condensed sorted_table">
            <thead>
                <tr>
                    <th width="32px">#</th>
                    <th>Imagem</th>
                    <th width="32px"></th>
                    <th width="32px"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($banner as $b): ?>
                    <tr>
                        <td class="fs-16 col-ordem text-center" data-id="<?= $b['id'] ?>"><i class="fa fa-bars icon-move"></i></td>
                        <td><img src="<?= base_url("assets/upload/{$b['full']}") ?>" class="img-responsive" style="max-height: 100px;"/></td>
                        <td class="text-center">
                            <button type="button" class="btn btn-default btn-xs btn-edit" data-id="<?= $b['id'] ?>">
                                <i class="fa fa-edit"></i>
                            </button>
                        </td>
                        <td class="text-center">
                            <button type="button" class="btn btn-danger btn-xs btn-del" data-id="<?= $b['id'] ?>">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<div class="modal fade" id="banner_set" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" action="<?= base_url("banner/set") ?>" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Banner</h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label>PC</label>
                        <input type="file" name="full" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="file" name="mobile" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Link</label>
                        <input type="text" name="link" class="form-control"/>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-success">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="banner_up" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" action="<?= base_url("banner/up/") ?>" enctype="multipart/form-data" id="form_up">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Banner</h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label>PC</label>
                        <img src="" class="img-responsive" id="banner_full" style="display:none;max-height: 100px;"/>
                        <input type="file" name="full" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Mobile</label>
                        <img src="" class="img-responsive" id="banner_mobile" style="display:none;max-height: 100px;"/>
                        <input type="file" name="mobile" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Link</label>
                        <input type="text" name="link" class="form-control" id="banner_link"/>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-success">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    var base_url = "<?= base_url() ?>";
</script>
<script src="<?= base_url("assets/js/jquery-sortable.js") ?>"></script>
<script src="<?= base_url("assets/js/banner.js") ?>"></script>
