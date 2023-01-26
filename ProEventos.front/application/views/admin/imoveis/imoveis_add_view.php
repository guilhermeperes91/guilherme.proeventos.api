<div class="container-fluid" id="template">
    <ol class="breadcrumb">
        <li>
            <a href="<?= base_url("admin") ?>">Admin</a>
        </li>
        <li>
            <a href="<?= base_url("admin/imoveis") ?>">Imóveis</a>
        </li>
        <li  class="active">Adicionar Imóvel</li>
    </ol>
    <hr/>
    <h3>Adicionar Imóvel</h3>
    <br/>
    <form method="post" action="<?= base_url("imoveis/set") ?>" enctype="multipart/form-data" >
        <input type="hidden" name="hash" value="<?= $hash ?>"/>
        <div class="row">
            <div class="col-xs-12 col-md-9 col-lg-10">
                <div class="form-group">
                    <input type="text" class="form-control" name="nome" placeholder="Nome"/>
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
                                <input type="text" class="form-control" name="url" id="url"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="seo_title">Título</label>
                            <input type="text" class="form-control" name="seo_title" id="seo_title"/>
                        </div>
                        <div class="form-group">
                            <label for="seo_description">Descrição</label>
                            <textarea class="form-control" name="seo_description" id="seo_description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="seo_keywords">Palavras-chave</label>
                            <input type="text" class="form-control" name="seo_keywords" id="seo_keywords"/>
                        </div>

                    </div>
                </div>
                <div class="form-group">
                    <label for="slogan">Slogan</label>
                    <input type="text" class="form-control" name="slogan" id="slogan"/>
                </div>
                <div class="form-group">
                    <textarea class="summernote" name="sobre"></textarea>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="no-margin">Endereço</h4>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="endereco">Endereço</label>
                            <input type="text" class="form-control" name="endereco" id="input-location"/>
                        </div>
                        <div class="form-group">
                            <label for="lat">Latitude</label>
                            <input type="text" class="form-control" name="lat" id="lat"/>
                        </div>
                        <div class="form-group">
                            <label for="long">Longitude</label>
                            <input type="text" class="form-control" name="long" id="long"/>
                        </div>
                        <div class="form-group">
                            <label for="bairro">Bairro</label>
                            <input type="text" class="form-control" name="bairro" id="bairro"/>
                        </div>
                        <div class="form-group">
                            <label for="cidade">Cidade/Estado</label>
                            <input type="text" class="form-control" name="cidade" id="cidade"/>
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
                            <input type="text" class="form-control" name="dormitorio" id="dormitorio"/>
                        </div>
                        <div class="form-group">
                            <label for="area">Área</label>
                            <input type="text" class="form-control" name="area" id="area"/>
                        </div>
                        <div class="form-group">
                            <label for="preco">Preço</label>
                            <input type="text" class="form-control" name="preco" id="preco"/>
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
                            <input type="text" class="form-control" name="obra_fundacao" id="obra_fundacao"/>
                        </div>
                        <div class="form-group">
                            <label for="obra_alvenaria">Alvenaria</label>
                            <input type="text" class="form-control" name="obra_alvenaria" id="obra_alvenaria"/>
                        </div>
                        <div class="form-group">
                            <label for="obra_instalacoes">Instalações</label>
                            <input type="text" class="form-control" name="obra_instalacoes" id="obra_instalacoes"/>
                        </div>
                        <div class="form-group">
                            <label for="obra_acabamento">Acabamento</label>
                            <input type="text" class="form-control" name="obra_acabamento" id="obra_acabamento"/>
                        </div>                    
                    </div>
                </div>
                <div class="form-group">
                    <label for="whatsapp">Whatsapp</label>
                    <input type="text" class="form-control" name="whatsapp" id="whatsapp"/>
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" name="telefone" id="telefone"/>
                </div>
                <div class="form-group">
                    <label for="banner">Banner Topo (1920x804)</label>
                    <input type="file" class="form-control" name="banner" id="banner"/>
                </div>
                <div class="form-group">
                    <label for="banner">Banner Topo Mobile (600 x 555)</label>
                    <input type="file" class="form-control" name="banner_mobile" id="banner_mobile"/>
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
                            <input type="text"class="form-control" name="tipo" id="tipo" />
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" name="status" id="status">
                                <?php foreach ($fases as $f): ?>
                                    <option value="<?= $f['id'] ?>"><?= $f['nome'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="vendido">100% vendido?</label>
                            <select class="form-control" name="vendido" id="vendido">
                                <option value="0">Não</option>
                                <option value="1">Sim</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="img_destaque">Imagem destacada (264x286)</label>
                            <input type="file" class="form-control" name="img_destaque" id="img_destaque"/>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="no-margin">Código Sua House</h4>
                    </div>
                    <div class="panel-body">
                        <input type="text" class="form-control" name="codigo_suahouse" id="codigo_suahouse"/>
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
                                    <option value="<?= $s['SequenceCode'] ?>"><?= $s['SequenceName'] ?></option>
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
                <input type="hidden" name="hash" value="<?= $hash ?>"/>
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
                <input type="hidden" name="hash" value="<?= $hash ?>"/>
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
                <input type="hidden" name="hash" value="<?= $hash ?>"/>
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

<script>
    var base_url = "<?= base_url() ?>";
    var hash = "<?= $hash ?>";
</script>
<script src="<?= base_url("assets/js/imoveis_edit.js") ?>"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCy9O5XF9-fzAAQY0vzKWNr7v0yl94gcAs&libraries=places&callback=initMap" async defer></script>