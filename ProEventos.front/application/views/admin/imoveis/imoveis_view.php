<div class="container-fluid" id="template">
    <ol class="breadcrumb">
        <li>
            <a href="<?= base_url("admin") ?>">Admin</a>
        </li>
        <li  class="active">Imóveis</li>
    </ol>
    <div class="row">
        <div class="col-xs-6 text-left">
            <a href="<?= base_url("imoveis/add") ?>" class="btn btn-default">Novo</a> 
        </div>
        <div class="col-xs-6">
            <div style="float:right;">
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <i class="fa fa-cog"></i>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                        <li>
                            <a href="<?= base_url("itenslazer") ?>">Cadastro de itens de lazer</a>
                        </li>
                        <li>
                            <a href="<?= base_url("fasesempreendimento") ?>">Cadastro de fases do empreendimento</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <hr/> 
    <h3>Imóveis</h3>
    <div class="table-responsive">
        <table class="table table-bordered table-condensed sorted_table">
            <thead>
                <tr>
                    <th width="32px">ID</th>
                    <th width="32px">Imagem</th>
                    <th>Nome</th>
                    <th>Status</th>
                    <th>Endereço</th>
                    <th>SH</th>
                    <th width="32px"></th>
                    <th width="32px"></th>
                    <th width="32px"></th>
                    <th width="32px"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($imoveis as $i): ?>
                    <tr>
                        <td><?= $i['id'] ?></td>
                        <td>
                            <img src="<?= base_url("assets/upload/thumb_264x286/{$i['img_destaque']}") ?>" class="img-responsive" style="max-height: 100px;"/>
                        </td>
                        <td><?= $i['nome'] ?></td>
                        <td><?= ($i['fases']) ?></td>
                        <td><?= $i['endereco'] ?></td>
                        <td><?= $i['codigo_suahouse'] ?></td>
                        <td class="text-center">
                            <?php if ($i['home'] == 0): ?>
                                <a href="<?= base_url("imoveis/home/add/{$i['id']}") ?>" class="btn btn-default btn-xs btn-edit icon-no-selected" title="Colocar na Home">
                                    <i class="fa fa-home"></i>
                                </a>
                            <?php endif; ?>
                            <?php if ($i['home'] == 1): ?>
                                <a href="<?= base_url("imoveis/home/del/{$i['id']}") ?>" class="btn btn-default btn-xs btn-edit icon-selected" title="Remover na Home">
                                    <i class="fa fa-home"></i>
                                </a>
                            <?php endif; ?>
                        </td>
                        <td class="text-center">
                            <?php if ($i['destaque'] == 0): ?>
                                <a href="<?= base_url("imoveis/destaque/add/{$i['id']}") ?>" class="btn btn-default btn-xs btn-edit icon-no-selected" title="Marcar como destaque">
                                    <i class="fa fa-star"></i>
                                </a>
                            <?php endif; ?>
                            <?php if ($i['destaque'] == 1): ?>
                                <a href="<?= base_url("imoveis/destaque/del/{$i['id']}") ?>" class="btn btn-default btn-xs btn-edit icon-selected" title="Desmarcar destaque">
                                    <i class="fa fa-star"></i>
                                </a>
                            <?php endif; ?>
                        </td>
                        <td class="text-center">
                            <a href="<?= base_url("imoveis/edit/{$i['id']}") ?>" class="btn btn-default btn-xs btn-edit" title="Editar">
                                <i class="fa fa-edit"></i>
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="<?= base_url("imoveis/del/{$i['id']}") ?>" class="btn btn-danger btn-xs btn-del" title="Deletar">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>