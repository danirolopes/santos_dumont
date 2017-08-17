<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button id="button-menu" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <div class="navbar-brand" id="social-media-container"> 
                    <div class="row">
                        <a href="http://www.facebook.com/casdvest/?ref=br_rs" target="
                            _blank">
                            <div class="social-media" id="u101"></div>
                        </a>
                        <a href="http://www.instagram.com/santosdumontsjc/" target="_blank">
                            <div class="social-media" id="u103"></div>
                        </a>
                        <a href="https://www.youtube.com/channel/UC9OeeXIZoLlFueoog_og6Kg" target="_blank">  
                            <div class="social-media" id="u107"></div>
                        </a>
                    </div>
                </div>                    
            </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="page-scroll close-menu" href="#page-top">Home</a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Quem Somos
                                <span class="caret"></span></a>
                                <ul class="navbar-dropdown dropdown-menu">
                                    <li><a class="dropdown-item page-scroll close-menu" href="#quemSomos">Nossa História</a></li>
                                    <li><a class="dropdown-item" href="<?php echo CONSTRUCAO_LINK;?>">Nossa Sede</a></li>
                                    <li><a class="dropdown-item page-scroll close-menu" href="#depoimentos">Depoimentos</a></li>
                                    <li><a class="dropdown-item" href="<?php echo CONSTRUCAO_LINK;?>">Nossas Membros</a></li>
                                    <li><a class="dropdown-item" href="<?php echo CONSTRUCAO_LINK;?>">Nossos Professores</a></li>
                                    <li><a class="dropdown-item" href="<?php echo CONSTRUCAO_LINK;?>">Nossos Alunos</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Quero Ajudar
                                    <span class="caret"></span></a>
                                    <ul class="navbar-dropdown dropdown-menu">
                                        <li><a class="dropdown-item page-scroll close-menu" href="#queroAjudar">Seja Doador</a></li>
                                        <li><a class="dropdown-item page-scroll close-menu" href="#queroAjudar">Seja Voluntário</a></li>
                                        <li><a class="dropdown-item page-scroll close-menu" href="#queroAjudar">Seja Parceiro</a></li>
                                        <li><a class="dropdown-item" href="<?php echo CONSTRUCAO_LINK;?>">Lojinha Santos Dumont</a></li>
                                    </ul>
                                </li>
                                <li id = "referencia">
                                    <a class="page-scroll close-menu" href="#resultados">Resultados</a>
                                </li>
                                <li>
                                    <a href="<?php echo VESTIBULINHO_LINK;?>">Seja Aluno</a>
                                </li>
                                <li id="CESDiconDiv" class="hidden">
                                    <img id="CESDicon" src="<?php echo URL;?>images/CESDicon.png" />
                                </li>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
        <!-- /.container-fluid -->        
    </nav>

    <header id="header">
        <div class="container-fluid" style="position: relative; padding-left: 0; padding-right: 0;">
            <img id="logoCesd" src="<?php echo URL;?>images/LogoHome.png" />
        </div>
    </header>

    <section id="quemSomos">
        <div class="container">
            <div class="row">
                <div class="img-container col-md-offset-6 col-md-6 col-xs-10 col-xs-offset-1">
                    <img src="<?php echo URL?>images/quemsomos.png" class="img-responsive">
                </div>
            </div>
            <br/>
            <div class="row" id="quemSomosRow">
                <div class="col-sm-4 clearfix no-padding quemSomosContainer">
                    <div class="col-xs-5 col-sm-12 no-padding">
                        <div class="col-sm-10 no-padding">
                            <div class="quemSomosImagem img-container"><img class="img-responsive" id="logoCasd" src="<?php echo URL;?>images/CASDVest.png"/></div>
                        </div>
                        <div class="quemSomosSimbolo col-sm-2 no-padding">
                            <div class="img-container"><img style="margin: auto;" class="img-responsive" id="mais" src="<?php echo URL;?>images/mais.png"></div>
                        </div>
                    </div>
                    <div class="col-xs-7 col-sm-12 no-padding">
                        <div class="col-sm-10 no-padding">
                            <div id="popCasd" class="popup text-center" >
                                <h3 onclick="descricaoCasd()">O CASD Vestibulares é um curso pré-vestibular sem fins lucrativos...</h3>
                                <p id="descricaoCasd" class="descricaoCurso">O CASD Vestibulares é um curso pré-vestibular sem fins lucrativos, com o objetivo de aprovar pessoas sem condições financeiras, mas com grande potencial, em universidades públicas ao oferecer ensino de qualidade.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 clearfix no-padding quemSomosContainer">
                    <div class="col-xs-5 col-sm-12  no-padding">
                        <div class="col-sm-10 no-padding">
                            <div class="quemSomosImagem img-container"><img class="img-responsive" id="logoCasdinho" src="<?php echo URL;?>images/Casdinho.png"/></div>
                        </div>
                        <div class="quemSomosSimbolo col-sm-2 no-padding">
                            <div class="img-container"><img id="igual" style="margin: auto;" class="img-responsive" src="<?php echo URL;?>images/igual.png"></div>
                        </div>
                    </div>
                    <div class="col-xs-7 col-sm-12 no-padding">
                        <div class="col-sm-10 no-padding">
                            <div id="popCasdinho" class="popup text-center">
                                <h3 onclick="descricaoCasdinho()">O Casdinho desenvolve em alunos de 8º e 9º ano do Ensino Fundamental...</h3>
                                <p id="descricaoCasdinho" class="descricaoCurso">O Casdinho desenvolve em alunos de 8º e 9º ano uma cultura de valorização da educação, preparando-os para olimpíadas científicas e colégio de Ensino Médio de qualidade, como o Colégio Engenheiro Juarez Wanderley (da Embraer).</p>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-sm-4 no-padding clearfix quemSomosContainer">
                    <div class="col-xs-5 col-sm-12 no-padding" style="margin-top: 10px;">
                        <div class="quemSomosImagem img-container"><img class="img-responsive" src="<?php echo URL;?>images/CESD.png"/></div>
                    </div>
                    <div class="col-xs-7 col-sm-12">
                        <div class="row">
                            <div id="quemSomosButton" class="col-sm-12 col-xs-10 col-xs-offset-1 text-center">
                                <a style="white-space: normal;" href="<?php echo HISTORIA_LINK;?>" class="btn btn-block btn-outline">Mais sobre o Centro Educacional Santos
                                    Dumont</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 img-container">
                                    <img id="uhul" class="img-responsive img-centered" src="<?php echo URL;?>images/uhul.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </section>

        <section id="queroAjudar">
            <div id="transitionImage1" class="container-fluid">
            </div>
            <div class="container">
                <div class="row text-center">
                    <h3 id="queroAjudarTexto1">Mais do que um estudante que necessita de auxílio, temos a visão do <span>nosso aluno</span> como um ser humano com <span>muito potencial</span> e que pode <span>conquistar tudo o que deseja</span>. Com os alunos, <span>formamos uma família</span> e ajudamos a trilhar seus <span>sonhos por meio da educação</span>.</h3>
                    <h2 id="queroAjudarTexto2">Você também pode fazer parte dessa transformação!</h2>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-0 col-xs-10 col-xs-offset-1 img-container">
                        <img src="<?php echo URL?>images/queroajudar.png" class="img-responsive" />
                    </div>
                    <div class="col-md-6">
                        <div class="col-xs-4">
                            <div class="row normal-margin">
                                <div  class="queroAjudarImg img-container">
                                    <img src="<?php echo URL?>images/doacao.png" class="img-responsive" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="queroAjudarButtonContainer">
                                    <a href="<?php echo DOADOR_LINK?>" class="btn btn-block btn-outline queroAjudarButton no-padding">Doações</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="row normal-margin">
                                <div  class="queroAjudarImg img-container">
                                    <img src="<?php echo URL?>images/parceiro.png" class="img-responsive" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="queroAjudarButtonContainer">
                                    <a href="<?php echo PARCEIRO_LINK?>" class="btn btn-block btn-outline queroAjudarButton no-padding">Parceria</a>                       
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="row normal-margin">
                                <div  class="queroAjudarImg img-container">
                                    <img src="<?php echo URL?>images/voluntario.png" class="img-responsive" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="queroAjudarButtonContainer">
                                    <a  href="<?php echo VOLUNTARIO_LINK?>" class="btn btn-block btn-outline queroAjudarButton no-padding">Voluntário</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </section>

        <section id="resultados">
            <div id="transitionImage2" class="container-fluid">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-0 col-xs-8 col-xs-offset-2 img-container">
                        <img src="<?php echo URL?>images/resultados.png" class="img-responsive" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-sm-offset-2 img-container">
                        <img src="<?php echo URL?>images/resultados2016.png" class="img-responsive">
                    </div>                
                </div>
            </div>
            <div id="transitionImage3" class="container-fluid">
            </section>

            <section id="depoimentos">
                <div class="container">
                    <div class="row">
                        <div class="col-md-offset-7 col-md-4 col-xs-10 col-xs-offset-1 img-container">
                            <img src="<?php echo URL?>images/depoimentos.png" class="img-responsive" />
                        </div>
                    </div>
                    <div class="row normal-margin">
                        <div class="col-sm-4 depoimento-container">
                            <div class="row img-container depoimento-img">
                                <div class="col-sm-6 col-sm-offset-3 col-xs-4 col-xs-offset-4">
                                    <img src="<?php echo URL;?>images/depoimento1.jpg" class="img-responsive img-circle" />
                                </div>
                            </div>
                            <div class="row normal-margin">
                                <h3 class="nome-depoimento">Juliana Baraúna</h3>
                                <h4>Aluna 2012</h4>
                                <p class="mensagem-depoimento">O Santos Dumont para mim é sinônimo de família, de realização de sonhos e de perspectiva para o futuro. Ele transformou completamente a minha vida, me mostrou que eu era capaz de fazer coisas que antes acreditava serem impossíveis e isso tudo com muita alegria e amizade! Com certeza o tempo que estive no Santos Dumont, recebi um apoio incondicional, que foi indispensável para minha formação e para o meu desejo hoje de contribuir para sociedade.</p>
                            </div>
                        </div>
                        <div class="col-sm-4 depoimento-container">
                            <div class="row img-container depoimento-img">
                                <div class="col-sm-6 col-sm-offset-3 col-xs-4 col-xs-offset-4">
                                    <img src="<?php echo URL;?>images/depoimento2.jpg" class="img-responsive img-circle" />
                                </div>
                            </div>
                            <div class="row normal-margin">
                                <h3 class="nome-depoimento">Leandro Loli</h3>
                                <h4>Diretor Presidente 2017</h4>
                                <p class="mensagem-depoimento">Foi no Santos Dumont que encontrei as pessoas mais incríveis da minha vida. Porque as vi se dedicando com uma intensa paixão para a concretização do sonhos dos nossos alunos. Além de se tornaram, junto comigo, a família: Casdinho e CASDVest. 
                                    Família essa que levarei com muito carinho para sempre. Então só tenho a agradecer a todos nossos voluntários que fazem a mágica da transformação através da educação acontecer todos os dias nos seus trabalhos.</p>
                                </div>
                            </div>
                            <div class="col-sm-4 depoimento-container">
                                <div class="row img-container depoimento-img">
                                    <div class="col-sm-6 col-sm-offset-3 col-xs-4 col-xs-offset-4">
                                        <img src="<?php echo URL;?>images/depoimento3.jpg" class="img-responsive img-circle" />
                                    </div>
                                </div>
                                <div class="row normal-margin">
                                    <h3 class="nome-depoimento">Bárbara Camargo</h3>
                                    <h4>Professora - Ex-aluna 2008</h4>
                                    <p class="mensagem-depoimento">Se eu não tivesse tido a oportunidade de estudar no CASD, eu não teria conseguido ingressar em uma universidade federal. Se eu não tivesse conhecido sonhadores, que se doavam plenamente à causa, eu não teria em quem me espelhar. Se eu não tivesse vivido esse sonho, eu deixaria de mudar a triste realidade de muitos alunos. Se eu não tivesse recebido um abraço num momento de desespero, eu teria desistido.
                                        Muito obrigada, Santos Dumont!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="parceiros">
                        <div class="container-fluid">
                            <div id="nuvemcima" class="row">
                                <div id="nuvemContainer" class="container-fluid">
                                    <div class="container">
                                        <div class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-6 col-md-4 img-container">
                                            <img src="<?php echo URL?>images/parceiros.png" class="img-responsive"  />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row" style="position: relative;">
                                    <div id="wrapper">
                                        <div id="carousel">
                                            <div>
                                                <a href="http://www.aeita.com.br/" target="_blank">
                                                    <img src="<?php echo URL;?>images/aeita.png" width="200" height="200" />
                                                </a>
                                                <span>AEITA</span>
                                            </div>
                                            <div>
                                             <a href="http://www.alphalumen.org.br/" target="_blank">
                                                <img src="<?php echo URL;?>images/Alpha.png" width="200" height="200" />
                                            </a>
                                            <span>Alpha Lumen</span>
                                        </div>

                                        <div>
                                           <a href="http://cmdca.org.br/novo/" target="_blank">
                                            <img src="<?php echo URL;?>images/CMDCA.png" width="200" height="200" />
                                        </a>
                                        <span>CMDCA</span>
                                    </div>

                                    <div><a href="https://br.credit-suisse.com/site/publico/sobre/ihg.seam" target="_blank">
                                        <img src="<?php echo URL;?>images/Credit.png" width="200" height="200" />
                                    </a>
                                    <span>Credit Suisse</span>
                                </div>
                                <div>
                                    <a href="https://descomplica.com.br" target="_blank">
                                        <img src="<?php echo URL;?>images/Descomplica.png" width="200" height="200" />
                                    </a>
                                    <span>Descomplica</span>
                                </div>
                                <div>
                                    <a href="http://www.embraer.com/pt-BR/Paginas/home.aspx" target="_blank">
                                        <img src="<?php echo URL;?>images/embraer.png" width="200" height="200" />
                                    </a>
                                    <span>Embraer</span>
                                </div>
                                <div>
                                    <a href="http://www.gridclass.com.br/" target="_blank">
                                        <img src="<?php echo URL;?>images/gridclass.png" width="200" height="200" />
                                    </a>
                                    <span>Gridclass</span>
                                </div>
                                <div>
                                    <a href="http://www.ita.br/" target="_blank">
                                        <img src="<?php echo URL;?>images/ITA.png" width="200" height="200" />
                                    </a>
                                    <span>ITA</span>
                                </div>
                                <div>
                                    <a href="https://www.aphb.com.br/" target="_blank">
                                        <img src="<?php echo URL;?>images/PranicHealing.png" width="200" height="200" />
                                    </a>
                                    <span>Pranic Healing Brasil</span>
                                </div>
                                <div>
                                    <a href="http://www.sjc.sp.gov.br/" target="_blank">
                                        <img src="<?php echo URL;?>images/Prefeitura.png" width="200" height="200" />
                                    </a>
                                    <span>Prefeitura de São José dos Campos</span>
                                </div>
                                <div>
                                    <a href="http://www.qmagico.com.br/" target="_blank">
                                        <img src="<?php echo URL;?>images/qmagico.png" width="200" height="200" />
                                    </a>
                                    <span>QMágico</span>
                                </div>
                                <div>
                                    <a href="http://novo.portalsas.com.br/" target="_blank">
                                        <img src="<?php echo URL;?>images/SAS.png"width="200" height="200" />
                                    </a>
                                    <span>Sistema Ari de Sá</span>
                                </div>
                                <div>
                                    <a href="http://tarkett.com.br/" target="_blank">
                                        <img src="<?php echo URL;?>images/tarkett.png" width="200" height="200" />
                                    </a>
                                    <span>Tarkett</span>
                                </div>
                                <div>
                                    <a href="http://isemear.org.br/" target="_blank">
                                        <img src="<?php echo URL;?>images/Semear.png" width="200" height="200" />
                                    </a>
                                    <span>Instituto Semear</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


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
        <?php if($this->statusVestibulinho['status_vestibulinho_casd']) {?>
        <section id="popup-vestibulinho-casd">
            <div class="fade-vestibulinho">
            </div>
            <div class="content-popup">
                <div class="row normal-margin header-popup">
                    <h3 class="text-center popup-title"><strong>INSCRIÇÕES ABERTAS!</strong></h3>
                    <a href="#"><i class="fa fa-times fa-lg close-popup" id="close-popup-casd"></i></a>
                </div>
                <div class="row normal-margin body-popup">
                    <div class="content-popup-body">
                        <p class="text-center">Completou ou está completando o Ensino Médio em escola pública e sonha em ingressar numa faculdade pública?</p>
                        <div class="img-container imagem-popup">
                            <img src="<?php echo URL;?>images/vestibulinhoCASDV.png" class="img-responsive"/>
                        </div>
                    </div>
                </div>
                <div class="row normal-margin footer-popup text-center">
                    <a class="action-popup" href="<?php echo VESTIBULINHO_LINK;?>"><strong>Inscreva-se agora!</strong></a>
                </div>
            </div>
        </section>
        <?php } ?>

