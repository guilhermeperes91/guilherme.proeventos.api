<div class="container-fluid" id="template">
    <ol class="breadcrumb">
        <li>
            <a href="<?= base_url("admin") ?>">Admin</a>
        </li>
        <li  class="active">Notícias</li>
    </ol>
    <a href="<?= base_url("noticias/add") ?>" class="btn btn-default">Novo</a>
    <hr/>
    <h3>Notícias</h3>
    <div class="table-responsive">
        <table class="table table-bordered table-condensed sorted_table">
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th width="150px">Data</th>
                    <th width="32px"></th>
                    <th width="32px"></th>
                    <th width="32px"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($noticias as $n): ?>
                    <tr>
                        <td><?= $n['titulo'] ?></td>
                        <td><?= $n['criado'] ?></td>
                        <td class="text-center">
                            <a href="<?= base_url("noticia/{$n['id']}/" . getLink($n['titulo'])) ?>" target="_blank" class="btn btn-default btn-xs btn-edit">
                                <i class="fa fa-search"></i>
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="<?= base_url("noticias/edit/{$n['id']}") ?>" class="btn btn-warning btn-xs btn-edit">
                                <i class="fa fa-edit"></i>
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="<?= base_url("noticias/del/{$n['id']}") ?>" class="btn btn-danger btn-xs btn-del">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>