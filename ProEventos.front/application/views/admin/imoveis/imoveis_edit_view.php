<div class="container-fluid" id="template">
    <ol class="breadcrumb">
        <li>
            <a href="<?= base_url("admin") ?>">Admin</a>
        </li>
        <li>
            <a href="<?= base_url("admin/imoveis") ?>">Imóveis</a>
        </li>
        <li  class="active">Editar Imóvel</li>
    </ol>
    <hr/>
    <h3>Editar Imóvel</h3>
    <br/>
    <form method="post" action="<?= base_url("imoveis/up/{$imovel['id']}") ?>" enctype="multipart/form-data" >
        <div class="row">
            <div class="col-xs-12 col-md-9 col-lg-10">
                <div class="form-group">
                    <input type="text" class="form-control" name="nome" placeholder="Nome" value="<?= $imovel['nome'] ?>"/>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="no-margin">SEO</h4>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="url">Url:</label>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><?= base_url("/") ?></span>
                                <input type="text" class="form-control" name="url" id="url" value="<?= $imovel['url'] ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="seo_title">Título</label>
                            <input type="text" class="form-control" name="seo_title" id="seo_title" value="<?= $imovel['seo_title'] ?>"/>
                        </div>
                        <div class="form-group">
                            <label for="seo_description">Descrição</label>
                            <textarea class="form-control" name="seo_description" id="seo_description"><?= $imovel['seo_description'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="seo_keywords">Palavras-chave</label>
                            <input type="text" class="form-control" name="seo_keywords" id="seo_keywords" value="<?= $imovel['seo_keywords'] ?>"/>
                        </div>

                    </div>
                </div>
                <div class="form-group">
                    <label for="slogan">Slogan</label>
                    <input type="text" class="form-control" name="slogan" id="slogan" value="<?= $imovel['slogan'] ?>"/>
                </div>
                <div class="form-group">
                    <textarea class="summernote" name="sobre"><?= $imovel['sobre'] ?></textarea>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="no-margin">Endereço</h4>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="localizacao">Localização</label>
                            <input type="text" class="form-control" name="localizacao" id="input-localizacao" value="<?= $imovel['localizacao'] ?>"/>
                        </div>
                        <div class="form-group">
                            <label for="endereco">Endereço</label>
                            <input type="text" class="form-control" name="endereco" id="input-location" value="<?= $imovel['endereco'] ?>"/>
                        </div>
                        <div class="form-group">
                            <label for="lat">Latitude</label>
                            <input type="text" class="form-control" name="lat" id="lat" value="<?= $imovel['lat'] ?>"/>
                        </div>
                        <div class="form-group">
                            <label for="long">Longitude</label>
                            <input type="text" class="form-control" name="long" id="long" value="<?= $imovel['long'] ?>"/>
                        </div>
                        <div class="form-group">
                            <label for="bairro">Bairro</label>
                            <input type="text" class="form-control" name="bairro" id="bairro" value="<?= $imovel['bairro'] ?>"/>
                        </div>
                        <div class="form-group">
                            <label for="cidade">Cidade/Estado</label>
                            <input type="text" class="form-control" name="cidade" id="cidade" value="<?= $imovel['cidade'] ?>"/>
                        </div>

                    </div>
                </div>


                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="no-margin">Informações</h4>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="dormitorio">Dormitório</label>
                            <input type="text" class="form-control" name="dormitorio" id="dormitorio" value="<?= $imovel['dormitorio'] ?>"/>
                        </div>
                        <div class="form-group">
                            <label for="area">Área</label>
                            <input type="text" class="form-control" name="area" id="area" value="<?= $imovel['area'] ?>"/>
                        </div>
                        <div class="form-group">
                            <label for="preco">Preço</label>
                            <input type="text" class="form-control" name="preco" id="preco" value="<?= $imovel['preco'] ?>"/>
                        </div>
                         <div class="form-group">
                            <label for="video">Vídeo</label>
                            <textarea class="form-control" name="video" id="video"><?= $imovel['video'] ?></textarea>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="no-margin">O Bairro</h4>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="bairro_texto">Texto</label>
                            <textarea class="form-control" name="bairro_texto" id="bairro_texto"><?= $imovel['bairro_texto'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="bairro_fundo">Imagem</label>
                            <input type="file" class="form-control" name="bairro_fundo" id="bairro_fundo"/>
                            <?php if ($imovel['banner']): ?>
                                <Br/>
                                <div id="area-banner">
                                    <img src="<?= base_url("assets/upload/{$imovel['bairro_fundo']}") ?>" class="img-responsive center-block" style="max-height: 100px;"/>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="no-margin">Status da obra</h4>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="obra_fundacao">Fundação</label>
                            <input type="text" class="form-control" name="obra_fundacao" id="obra_fundacao" value="<?= $imovel['obra_fundacao'] ?>"/>
                        </div>
                        <div class="form-group">
                            <label for="obra_alvenaria">Alvenaria</label>
                            <input type="text" class="form-control" name="obra_alvenaria" id="obra_alvenaria" value="<?= $imovel['obra_alvenaria'] ?>"/>
                        </div>
                        <div class="form-group">
                            <label for="obra_instalacoes">Instalações</label>
                            <input type="text" class="form-control" name="obra_instalacoes" id="obra_instalacoes" value="<?= $imovel['obra_instalacoes'] ?>"/>
                        </div>
                        <div class="form-group">
                            <label for="obra_acabamento">Acabamento</label>
                            <input type="text" class="form-control" name="obra_acabamento" id="obra_acabamento" value="<?= $imovel['obra_acabamento'] ?>"/>
                        </div>                        
                    </div>
                </div>


                <div class="form-group">
                    <label for="whatsapp">Whatsapp</label>
                    <input type="text" class="form-control" name="whatsapp" id="whatsapp" value="<?= $imovel['whatsapp'] ?>"/>
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" name="telefone" id="telefone" value="<?= $imovel['telefone'] ?>"/>
                </div>

                <div class="form-group">
                    <label for="banner">Banner Topo (1920x804)</label>
                    <input type="file" class="form-control" name="banner" id="banner"/>
                    <?php if ($imovel['banner']): ?>
                        <Br/>
                        <div id="area-banner">
                            <img src="<?= base_url("assets/upload/{$imovel['banner']}") ?>" class="img-responsive center-block" style="max-height: 100px;"/>
                            <p class="text-center">
                                <button type="button" class="btn btn-danger" id="btn-del-banner">Excluir</button>
                            </p>
                            <input type="hidden" name="del_banner" id="del_banner" value="false"/>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="banner">Banner Topo Mobile (600 x 555)</label>
                    <input type="file" class="form-control" name="banner_mobile" id="banner_mobile"/>
                    <?php if ($imovel['banner_mobile']): ?>
                        <Br/>
                        <div id="area-banner-mobile">
                            <img src="<?= base_url("assets/upload/{$imovel['banner_mobile']}") ?>" class="img-responsive center-block" style="max-height: 100px;"/>
                            <p class="text-center">
                                <button type="button" class="btn btn-danger" id="btn-del-banner-mobile">Excluir</button>
                            </p>
                            <input type="hidden" name="del_banner_mobile" id="del_banner_mobile" value="false"/>
                        </div>
                    <?php endif; ?>
                </div>
                <hr/>
                <div id="galeria_local"></div>
                <hr/>
                <div id="plantas_local"></div>

            </div>
            <div class="col-xs-12 col-md-3 col-lg-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success form-control">Salvar</button>
                        </div>
                        <div class="form-group">
                            <label for="tipo">Tipo</label>
                            <input type="text"class="form-control" name="tipo" id="tipo" value="<?=$imovel['tipo']?>" />
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" name="status" id="status">
                                <?php foreach ($fases as $f): ?>
                                    <option value="<?= $f['id'] ?>" <?php if ($f['id'] == $imovel['status']): ?>selected<?php endif; ?>><?= $f['nome'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="vendido">100% vendido?</label>
                            <select class="form-control" name="vendido" id="vendido">
                                <option value="0" <?php if (0 == $imovel['vendido']): ?>selected<?php endif; ?>>Não</option>
                                <option value="1" <?php if (1 == $imovel['vendido']): ?>selected<?php endif; ?>>Sim</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="itens_lazer">Itens</label>
                            <select class="form-control" name="itens_lazer[]" id="itens_lazer" multiple="multiple">
                                <?php foreach ($itenslazer as $f): ?>
                                    <option value="<?= $f['id'] ?>" <?php $itens = json_decode($imovel['itens_lazer'],true);foreach($itens as $i):if ($f['id'] == $i): ?>selected<?php endif;endforeach; ?>><?= $f['nome'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="img_destaque">Imagem destacada (264x286)</label>
                            <input type="file" class="form-control" name="img_destaque" id="img_destaque"/>
                            <?php if ($imovel['img_destaque']): ?>
                                <Br/>
                                <img src="<?= base_url("assets/upload/thumb_264x286/{$imovel['img_destaque']}") ?>" class="img-responsive center-block"/>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
               

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="no-margin">Código Sua House</h4>
                    </div>
                    <div class="panel-body">
                        <input type="text" class="form-control" name="codigo_suahouse" value="<?= $imovel['codigo_suahouse'] ?>" id="codigo_suahouse"/>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="no-margin">LeadLovers</h4>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="machineCode" value="552312" id="machineCode"/>

                            <select class="form-control" name="sequenceCode" id="sequenceCode">
                                <option value="" >Nenhum</option>
                                <?php foreach ($sequence as $s): ?>
                                    <option value="<?= $s['SequenceCode'] ?>" <?php if ($s['SequenceCode'] == $imovel['sequenceCode']): ?>selected<?php endif; ?>><?= $s['SequenceName'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </form>
</div>
<div class="modal fade" id="galeria_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" id="form-galeria" enctype="multipart/form-data">
                <input type="hidden" name="hash" value="<?= $imovel['hash'] ?>"/>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Galeria</h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label>Imagem</label>
                        <input type="file" name="files[]" class="form-control" multiple/>
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

<div class="modal fade" id="plantas_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" id="form-planta" enctype="multipart/form-data">
                <input type="hidden" name="hash" value="<?= $imovel['hash'] ?>"/>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Plantas</h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label>Imagem</label>
                        <input type="file" name="files[]" class="form-control" multiple/>
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

<div class="modal fade" id="obra_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" id="form-obra" enctype="multipart/form-data">
                <input type="hidden" name="hash" value="<?= $imovel['hash'] ?>"/>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Fotos da obra</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Imagem</label>
                        <input type="file" name="files[]" class="form-control" multiple/>
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

<div class="modal fade" id="decorado_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" id="form-decorado" enctype="multipart/form-data">
                <input type="hidden" name="hash" value="<?= $imovel['hash'] ?>"/>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Fotos do decorado</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Imagem</label>
                        <input type="file" name="files[]" class="form-control" multiple/>
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

<div class="modal fade" id="certificacao_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" id="form-certificacao" enctype="multipart/form-data">
                <input type="hidden" name="hash" value="<?= $imovel['hash'] ?>"/>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Certificação</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Imagem</label>
                        <input type="file" name="files[]" class="form-control" multiple/>
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
    var hash = "<?= $imovel['hash'] ?>";
</script>

<script src="<?= base_url("assets/js/imoveis_edit.js") ?>"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCy9O5XF9-fzAAQY0vzKWNr7v0yl94gcAs&libraries=places&callback=initMap" async defer></script>