<div class="container-fluid" id="template">
    <ol class="breadcrumb">
        <li>
            <a href="<?= base_url("admin") ?>">Admin</a>
        </li>
        <li  class="active">Leads</li>
    </ol>
    <div class="table-responsive">
        <table class="table table-responsive table-bordered table-hover">
            <thead>
                <tr>
                    <?php
                    if ($email):
                        $campos = $email[0]['campos'];
                        $campos = json_decode($campos);
                        foreach ($campos as $e):
                            $x = explode(" : ", $e);
                            ?>
                            <th><?= $x[0] ?></th>
                            <?php
                        endforeach;
                    endif;
                    ?>
                    <th>Data</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($email as $e): ?>
                    <tr>
                        <?php
                        $campos = json_decode($e['campos']);
                        foreach ($campos as $c):
                            $x = explode("</b> : ", $c)
                            ?>
                            <td>
                                <?= $x[1] ?>
                            </td>
                        <?php endforeach; ?>
                        <td><?= $e['data'] ?></td>
                        <td>
                            <a href="<?= base_url("email/ver/{$e['id']}") ?>" target="_blank">Email</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>