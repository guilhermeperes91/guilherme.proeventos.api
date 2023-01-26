<div class="container-fluid" id="template">
    <ol class="breadcrumb">
        <li>
            <a href="<?= base_url("admin") ?>">Admin</a>
        </li>
        <li  class="active">Páginas</li>
    </ol>
    <a href="<?= base_url("paginas/add") ?>" class="btn btn-default">Novo</a>
    <hr/>
    <h3>Páginas</h3>
    <div class="table-responsive">
        <table class="table table-bordered table-condensed sorted_table">
            <thead>
                <tr>
                    <th>Título</th>
                    <th width="32px"></th>
                    <th width="32px"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($paginas as $n): ?>
                    <tr>
                        <td><?= $n['titulo'] ?></td>
                        <td class="text-center">
                            <a href="<?= base_url("paginas/edit/{$n['id']}") ?>" class="btn btn-default btn-xs btn-edit">
                                <i class="fa fa-edit"></i>
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="<?= base_url("paginas/del/{$n['id']}") ?>" class="btn btn-danger btn-xs btn-del">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>