<div class="container-fluid" id="template">
    <ol class="breadcrumb">
        <li>
            <a href="<?= base_url("admin") ?>">Admin</a>
        </li>
        <li  class="active">Configurações</li>
    </ol>
    <hr/>
    <h3>Configurações</h3>
    <br/>
    <form method="post" action="<?= base_url("config/up") ?>" enctype="multipart/form-data" >
        <div class="row">
            <div class="col-xs-12 col-md-8 col-md-offset-2">
                <div class="form-group">
                    <label for="telefone_comercial">Telefone Comercial</label>
                    <input type="text" class="form-control" name="telefone_comercial" id="telefone_comercial" placeholder="Telefone Comercial" value="<?= $config['telefone_comercial'] ?>"/>
                </div>
                <div class="form-group">
                    <label for="chat">Chat</label>
                    <input type="text" class="form-control" name="chat" id="chat" placeholder="Chat" value="<?= $config['chat'] ?>"/>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?= $config['email'] ?>"/>
                </div>
                <div class="form-group">
                    <label for="whatsapp_comercial">Whatsapp Comercial</label>
                    <input type="text" class="form-control" name="whatsapp_comercial" id="whatsapp_comercial" placeholder="Whatsapp Comercial" value="<?= $config['whatsapp_comercial'] ?>"/>
                </div>
                <hr/>
                <div class="form-group">
                    <label for="facebook">Facebook</label>
                    <input type="text" class="form-control" name="facebook" id="facebook" placeholder="Facebook" value="<?= $config['facebook'] ?>"/>
                </div>
                <div class="form-group">
                    <label for="instagram">instagram</label>
                    <input type="text" class="form-control" name="instagram" id="instagram" placeholder="Instagram" value="<?= $config['instagram'] ?>"/>
                </div>
                <div class="form-group">
                    <label for="linkedin">Linkedin</label>
                    <input type="text" class="form-control" name="linkedin" id="linkedin" placeholder="Linkedin" value="<?= $config['linkedin'] ?>"/>
                </div>
                <div class="form-group">
                    <label for="youtube">Youtube</label>
                    <input type="text" class="form-control" name="youtube" id="youtube" placeholder="Youtube" value="<?= $config['youtube'] ?>"/>
                </div>
                <div class="form-group">
                    <label for="youtube">twitter</label>
                    <input type="text" class="form-control" name="twitter" id="youtube" placeholder="twitter" value="<?= $config['twitter'] ?>"/>
                </div>
                <div class="form-group">
                    <label for="youtube">blog</label>
                    <input type="text" class="form-control" name="blog" id="blog" placeholder="blog" value="<?= $config['blog'] ?>"/>
                </div>
                <div class="form-group">
                    <label for="youtube">pinterest</label>
                    <input type="text" class="form-control" name="pinterest" id="pinterest" placeholder="pinterest" value="<?= $config['pinterest'] ?>"/>
                </div>
                <hr/>
                <div class="form-group">
                    <label for="playlist">playlist</label>
                    <input type="text" class="form-control" name="playlist" id="playlist" placeholder="playlist" value="<?= $config['playlist'] ?>"/>
                </div>
                <hr/>
                <div class="form-group">
                    <label for="analytics">Analytics</label>
                    <textarea class="form-control" name="analytics" id="analytics"><?= $config['analytics'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="remarketing">Remarketing</label>
                    <textarea class="form-control" name="remarketing" id="remarketing"><?= $config['remarketing'] ?></textarea>
                </div>
                <hr/>
                <div class="form-group">
                    <label for="seo_title">Título</label>
                    <input type="text" class="form-control" name="seo_title" id="seo_title" placeholder="Título" value="<?= $config['seo_title'] ?>"/>
                </div>
                <div class="form-group">
                    <label for="seo_description">Descrição</label>
                    <textarea class="form-control" name="seo_description" id="seo_description"><?= $config['seo_description'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="seo_keywords">Palavras-chave</label>
                    <textarea class="form-control" name="seo_keywords" id="seo_keywords"><?= $config['seo_keywords'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="machineCode">MachineCode</label>
                    <input type="text" class="form-control" name="machineCode" value="<?= $config['machineCode'] ?>" id="machineCode"/>
                </div>
                <div class="form-group">
                    <label for="sequenceCode">SequenceCode</label>
                    <input type="text" class="form-control" name="sequenceCode" value="<?= $config['sequenceCode'] ?>" id="sequenceCode"/>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Salvar</button>
                </div>
            </div>
        </div>
    </form>
</div>

