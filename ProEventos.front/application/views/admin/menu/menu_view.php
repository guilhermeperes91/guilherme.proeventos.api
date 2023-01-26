<div class="container-fluid" id="template">
    <ol class="breadcrumb">
        <li>
            <a href="<?= base_url("admin") ?>">Admin</a>
        </li>
        <li  class="active">Menu</li>
    </ol>
    <h3>Menu</h3>

    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#menu_set">Novo</button>
    <hr/>

    <div class="table-responsive">
        <table class="table table-bordered table-condensed sorted_table">
            <thead>
                <tr>
                    <th width="32px">#</th>
                    <th>Nome</th>
                    <th>Link</th>
                    <th width="32px"></th>
                    <th width="32px"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($menu as $b): ?>
                    <tr>
                        <td class="fs-16 col-ordem text-center" data-id="<?= $b['id'] ?>"><i class="fa fa-bars icon-move"></i></td>
                        <td><?= $b['nome'] ?></td>
                        <td>
                            <?php
                            if ($b['interna'] == 1) {
                                echo base_url($b['link']);
                            } else {
                                echo $b['link'];
                            }
                            ?>
                        </td>
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

<div class="modal fade" id="menu_set" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" action="<?= base_url("menu/set") ?>" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Menu</h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="nome" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <select class="form-control campo_int" name="interna">
                            <option value="1">Página interna</option>
                            <option value="2">Página externa</option>
                        </select>
                    </div>
                    <div class="form-group campo_interno">
                        <label>Página</label>
                        <select class="form-control" name="link_interno">
                            <?php foreach ($paginas as $p): ?>
                                <option value="p/<?= $p['url'] ?>"><?= $p['titulo'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label>ou</label>
                        <input type="text" name="link_interno2" class="form-control" placeholder="/contato"/>
                    </div>

                    <div class="form-group campo_externo" style="display:none">
                        <label>URL</label>
                        <input type="text" name="link_externo" class="form-control" placeholder="http://www.site.com.br"/>
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

<div class="modal fade" id="menu_up" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" action="<?= base_url("menu/up/") ?>" enctype="multipart/form-data" id="form_up">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Menu</h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="nome" class="form-control" id="edit-nome"/>
                    </div>
                    <div class="form-group">
                        <select class="form-control campo_int" name="interna" id="edit-interna">
                            <option value="1">Página interna</option>
                            <option value="2">Página externa</option>
                        </select>

                    </div>
                    <div class="form-group campo_interno">
                        <label>Página</label>
                        <select class="form-control" name="link_interno" id="edit-linkinterno">
                            <?php foreach ($paginas as $p): ?>
                                <option value="p/<?= $p['url'] ?>"><?= $p['titulo'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label>ou</label>
                        <input type="text" name="link_interno2" class="form-control" id="edit-linkinterno2" placeholder="/contato"/>
                    </div>
                    <div class="form-group campo_externo" style="display:none">
                        <label>URL</label>
                        <input type="text" name="link_externo" class="form-control" id="edit-linkexterno" placeholder="http://www.site.com.br"/>
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
<script src="<?= base_url("assets/js/menu.js") ?>"></script>
