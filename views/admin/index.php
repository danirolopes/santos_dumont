<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Painel de Controle 
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Vestibulinho
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <?php if(isset($this->falhaArquivo)){ if($this->falhaArquivo) {?>
                <div class="alert alert-danger" id="alert-final" style="color: red;">Falha no upload do edital! Tentar novamente!</div>
                <?php }} ?>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-12 text-center">
                                        <div>Inscrições Vestibulinho Casd</div>
                                    </div>
                                </div>
                            </div>
                            <form method="POST" id="status_casd" enctype="multipart/form-data">
                            <?php if ($this->variables['status_vestibulinho_casd']) {?>
								<input type="hidden" value="0" name="status_vestibulinho_casd">
							<?php  } else {?>
								<input type="hidden" value="1" name="status_vestibulinho_casd">
                                <div class="form-group text-center">
                                    <label style="margin-top: 5px;">Data do Vestibulinho</label>
                                    <input class="form-control" type="text" maxlength="10" id="date_vestibulinho_casd" required name="date_vestibulinho_casd" placeholder="DD/MM/AAAA" />
                                    <label style="margin-top: 5px;">Local do Vestibulinho</label>
                                    <input class="form-control" type="text" maxlength="90" id="local_vestibulinho_casd" required name="local_vestibulinho_casd" placeholder="Digite o local do vestibulinho" />
                                    <label style="margin-top: 5px;">Término das inscrições</label>
                                    <input class="form-control" type="text" maxlength="10" id="termino_vestibulinho_casd" required name="termino_vestibulinho_casd" placeholder="DD/MM/AAAA" />
                                    <label style="margin-top: 5px;">Edital</label>
                                    <input class="form-control" type="file" id="edital_vestibulinho_casd" required name="arquivo" placeholder="Selecione o edital" />

                                </div>
							<?php  }?>
                            <a id="submit_status_casd" href="#">
                                <div class="panel-footer">
                                    <?php if ($this->variables['status_vestibulinho_casd']) {?>
										<span class="text-center">Encerrar Inscrições</span>
									<?php  } else {?>
										<span class="text-center">Iniciar Inscrições</span>
									<?php  }?>
                                </div>
                            </a>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-12 text-center">
                                        <div>Inscrições Vestibulinho Casdinho</div>
                                    </div>
                                </div>
                            </div>
                            <form method="POST" id="status_casdinho" enctype="multipart/form-data">
                            <?php if ($this->variables['status_vestibulinho_casdinho']) {?>
								<input type="hidden" value="0" name="status_vestibulinho_casdinho">
							<?php  } else {?>
								<input type="hidden" value="1" name="status_vestibulinho_casdinho">
                                <div class="form-group text-center">
                                    <label style="margin-top: 5px;">Data do Vestibulinho</label>
                                    <input class="form-control" type="text" id="date_vestibulinho_casdinho" placeholder="DD/MM/AAAA" name="date_vestibulinho_casdinho">
                                    <label style="margin-top: 5px;">Local do Vestibulinho</label>
                                    <input class="form-control" type="text" maxlength="90" id="local_vestibulinho_casdinho" required name="local_vestibulinho_casdinho" placeholder="Digite o local do vestibulinho" />
                                    <label style="margin-top: 5px;">Término das inscrições</label>
                                    <input class="form-control" type="text" maxlength="10" id="termino_vestibulinho_casdinho" required name="termino_vestibulinho_casdinho" placeholder="DD/MM/AAAA" />
                                    <label style="margin-top: 5px;">Edital</label>
                                    <input class="form-control" type="file"  id="edital_vestibulinho_casdinho" required name="arquivo" placeholder="Selecione o edital" />
                                </div>
							<?php  }?>
                            <a id="submit_status_casdinho" href="#">
                                <div class="panel-footer">
                                    <?php if ($this->variables['status_vestibulinho_casdinho']) {?>
										<span class="text-center">Encerrar Inscrições</span>
									<?php  } else {?>
										<span class="text-center">Iniciar Inscrições</span>
									<?php  }?>
                                </div>
                            </a>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-12 text-center">
                                        <div>Consulta Vestibulinho Casd</div>
                                    </div>
                                </div>
                            </div>
                            <form method="POST" id="consulta_casd">
                            <?php if ($this->variables['consulta_vestibulinho_casd']) {?>
								<input type="hidden" value="0" name="consulta_vestibulinho_casd">
							<?php  } else {?>
								<input type="hidden" value="1" name="consulta_vestibulinho_casd">
							<?php  }?>
                            <a id="submit_consulta_casd" href="#">
                                <div class="panel-footer">
                                    <?php if ($this->variables['consulta_vestibulinho_casd']) {?>
										<span class="text-center">Encerrar Consulta</span>
									<?php  } else {?>
										<span class="text-center">Iniciar Consulta</span>
									<?php  }?>
                                </div>
                            </a>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-12 text-center">
                                        <div>Consulta Vestibulinho Casdinho</div>
                                    </div>
                                </div>
                            </div>
                            <form method="POST" id="consulta_casdinho">
                            <?php if ($this->variables['consulta_vestibulinho_casdinho']) {?>
								<input type="hidden" value="0" name="consulta_vestibulinho_casdinho">
							<?php  } else {?>
								<input type="hidden" value="1" name="consulta_vestibulinho_casdinho">
							<?php  }?>
                            <a id="submit_consulta_casdinho" href="#">
                                <div class="panel-footer">
                                    <?php if ($this->variables['consulta_vestibulinho_casdinho']) {?>
										<span class="text-center">Encerrar Consulta</span>
									<?php  } else {?>
										<span class="text-center">Iniciar Consulta</span>
									<?php  }?>
                                </div>
                            </a>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <br>
                <br>
                <br>
                <div class="row">
                	<div class="col-md-6">
                		<div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-12 text-center">
                                        <div>Extrair Tabela Vestibulinho Casd</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo URL;?>admin/exportVestibulinhoCasd">
                                <div class="panel-footer">
                                    <span class="pull-left">Download</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                	</div>
                	<div class="col-md-6">
                		<div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-12 text-center">
                                        <div>Extrair Tabela Vestibulinho Casdinho</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo URL;?>admin/exportVestibulinhoCasdinho">
                                <div class="panel-footer">
                                    <span class="pull-left">Download</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                	</div>
                </div>

             
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->