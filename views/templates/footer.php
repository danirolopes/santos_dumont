<footer id="footer">
        <div class="container">
            <div class="row">
                <div id="CesdFooter" class="col-xs-6 col-sm-3">
                    <div class="row normal-margin img-container">
                        <img src="<?php echo URL;?>images/CESDfooter.png" class="img-responsive" />
                    </div>
                    <div class="row normal-margin">
                        <h4>Centro Educacional Santos Dumont</h4>
                        <p>Rua Tsunessaburo Makiguti, 139, Floradas São José, São José dos Campos - SP</p>
                        <p><i class="fa fa-phone"></i> (12)3934-9386</p>
                        <p><i class="fa fa-envelope-o"></i> mkt@casdvest.org.br</p>
                    </div>
                </div>
                <div id="cursoFooter" class="col-xs-6 col-sm-3">
                    <div class="footer-logo row normal-margin img-container">
                        <img src="<?php echo URL;?>images/CASDVestfooter.png" class="img-responsive" />
                    </div>
                    <div class="footer-logo row normal-margin img-container">
                        <img src="<?php echo URL;?>images/Casdinhofooter.png" class="img-responsive" />
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <h3>Fale Conosco!</h3>
                    <form action="<?php echo URL.$this->controller;?>/contact" method="POST">
                        <div class="form-group">
                            <input class="form-control" name="nome" placeholder="Nome" type="text" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="email" placeholder="Email" type="email" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="mensagem" rows="3" placeholder="Mensagem" required></textarea>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-xs-offset-3">
                                <button id="buttonContato" class="btn btn-block btn-outline no-padding" type="submit">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div id="footerInfo" class="row">
                <p>Copyright &copy <?php echo date("Y") ?> Associação Curso Vencedor. Todos os direitos reservados.</p>
                <p>Desenvolvido por Daniel Rocha Lopes. Arte por Rafaella Bambokian</p>
            </div>
        </div>
    </footer>