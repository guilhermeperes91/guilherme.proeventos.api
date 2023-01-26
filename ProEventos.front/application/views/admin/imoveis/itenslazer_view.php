<div class="container-fluid" id="template">
    <ol class="breadcrumb">
        <li>
            <a href="<?= base_url("admin") ?>">Admin</a>
        </li>
        <li>
            <a href="<?= base_url("admin/imoveis") ?>">Imóveis</a>
        </li>
        <li  class="active">Itens de lazer</li>
    </ol>
    <h3>Upload</h3>
    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#item_set">Novo</button>
    <hr/>
    <h3>Itens de lazer</h3>
    <div class="table-responsive">
        <table class="table table-bordered table-condensed sorted_table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Imagem</th>
                    <th width="32px"></th>
                    <th width="32px"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($itens as $b): ?>
                    <tr>
                        <td><?= $b['nome'] ?></td>
                        <td><img src="<?= base_url("assets/upload/{$b['img']}") ?>" class="img-responsive" style="max-height: 100px;"/></td>
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

<div class="modal fade" id="item_set" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" action="<?= base_url("itenslazer/set") ?>" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Itens de lazer</h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="nome" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Imagem</label>
                        <input type="file" name="img" class="form-control"/>
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

<div class="modal fade" id="item_up" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" action="<?= base_url("itenslazer/up/") ?>" enctype="multipart/form-data" id="form_up">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Itens de lazer</h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="nome" class="form-control" id="item_nome"/>
                    </div>
                    <div class="form-group">
                        <label>Imagem</label>
                        <img src="" class="img-responsive" id="item_img" style="display:none;max-height: 100px;"/>
                        <input type="file" name="img" class="form-control"/>
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
<script src="<?= base_url("assets/js/itenslazer.js") ?>"></script>
