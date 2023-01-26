<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= base_url("admin") ?>">Painel de administração</a>
        </div>
        <div id="navbar" class="hidden-xs hidden-sm">
            <ul class="nav navbar-nav">
                <li>
                    <a href="<?= base_url("/") ?>" target="_blank">Ver site</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="<?= base_url("usuario/sair") ?>">Sair</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<nav id="menu" class="collapse navbar-collapse">
    <ul>
        <li>
            <a href="<?= base_url("admin/imoveis") ?>">Imoveis</a>
        </li>
        <li>
            <a href="<?= base_url("admin/banner") ?>">Banner</a>
        </li>
        <li>
            <a href="<?= base_url("admin/paginas") ?>">Páginas</a>
        </li>
        <li>
            <a href="<?= base_url("admin/noticias") ?>">Notícias</a>            
        </li>
        <li>
            <a href="<?= base_url("admin/menu") ?>">Menu</a>
        </li>
        <li>
            <a href="<?= base_url("admin/config") ?>">Configurações</a>
        </li>
        <li class="visible-xs visible-sm">
            <a href="<?= base_url("usuario/sair") ?>">Sair</a>
        </li>
    </ul>
</nav>