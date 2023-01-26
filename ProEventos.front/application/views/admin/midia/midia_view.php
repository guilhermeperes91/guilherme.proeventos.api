<div class="container-fluid" id="template">
    <ol class="breadcrumb">
        <li>
            <a href="<?= base_url("admin") ?>">Admin</a>
        </li>
        <li  class="active">Mídia</li>
    </ol>
    <a href="<?= base_url("midia/add") ?>" class="btn btn-default">Novo</a>
    <hr/>
    <h3>Mídia</h3>
    <div class="table-responsive">
        <table class="table table-bordered table-condensed sorted_table">
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Veículo</th>
                    <th width="32px"></th>
                    <th width="32px"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($midias as $n): ?>
                    <tr>
                        <td><?= $n['titulo'] ?></td>
                        <td><?= $n['veiculo'] ?></td>
                        <td class="text-center">
                            <a href="<?= base_url("midia/edit/{$n['id']}") ?>" class="btn btn-default btn-xs btn-edit">
                                <i class="fa fa-edit"></i>
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="<?= base_url("midia/del/{$n['id']}") ?>" class="btn btn-danger btn-xs btn-del">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>