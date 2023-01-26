<section id="banner-paginas">
    <img src="<?= base_url("assets/img/banner_contato.png?v=2") ?>" class="hidden-xs hidden-sm" />
    <img src="<?= base_url("assets/img/banner_contato_mobile.png") ?>" class="visible-xs visible-sm"/>
</section>

<div class="container">
    <section id="financiamento" class="padding financiamento2">

        <div class="row">
            <div class="col-xs-12 col-md-7">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.8618378724555!2d-47.803043785028905!3d-21.197646784447148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b9bf2863ad8c69%3A0xc227ecb0b1e11c06!2sR.%20Jos%C3%A9%20Sapienza%2C%20340%20-%20Jardim%20Sao%20Luiz%2C%20Ribeir%C3%A3o%20Preto%20-%20SP%2C%2014020-450!5e0!3m2!1spt-BR!2sbr!4v1614797087545!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="col-xs-12 col-md-5">
                <div class="form-corretor">

                    <h3>Fale com nossos especialistas.</h3>
                    
                    <div class="forms no-limit">
                        <form class="form-ajax" data-action="contato">
                            <input type="hidden" name="machineCode" value="<?= $configs['machineCode'] ?>"/>
                            <input type="hidden" name="sequenceCode" value="<?= $configs['sequenceCode'] ?>"/>
                            <div class="form-group">
                                <input type="text" name="nome" id="form-nome" class="form-control" placeholder="Seu nome" required="required"/>
                            </div>
                            <div class="form-group">
                                <input type="text" name="telefone" id="form-telefone" class="form-control cel" placeholder="WhatsApp" required="required"/>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" id="form-email" class="form-control" placeholder="E-mail" required="required"/>
                            </div>
                            <div class="form-group">
                                <textarea name="mensagem" id="form-mensagem" class="form-control" placeholder="Mensagem" required="required"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>