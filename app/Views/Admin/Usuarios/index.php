<?php echo $this->extend('Admin/layout/principal'); ?>

<!-- TÍTULO HEADER -->
<?php echo $this->section('titulo'); ?><?php echo $titulo; ?><?php echo $this->endSection(); ?>
<!----------------------------------------->



<!-- ÁREA DE ESTILOS -->
<?php echo $this->section('estilos'); ?>

<!-- Aqui fazemos o envio para o para o tamplate principal os estilos  -->

<?php echo $this->endSection(); ?>
<!----------------------------------------->



<!-- ÁREA DE CONTÉUDO -->
<?php echo $this->section('conteudo'); ?>
<!-- Aqui fazemos o envio para o para o tamplate principal os conteudos  -->


<div class="row">
         


            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><?php echo $titulo; ?></h4>
                 
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Nome</th>
                          <th>E-mail</th>
                          <th>CPF</th>
                          <th>Ativo</th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php foreach ($usuarios as $usuario):?>

                        <tr>
                          <td><?php echo $usuario->nome; ?></td>
                          <td><?php echo $usuario->email; ?></td>
                          <td><?php echo $usuario->cpf; ?></td>
                          <td><?php echo $usuario->nome; ?></td>
                         
                          <td><?php echo($usuario->ativo ? '<label class="badge badge-primary">Sim</label>': '<label class="badge badge-danger">Não</label>'); ?></td>
                        </tr>
                        <?php endforeach; ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>



<?php echo $this->endSection(); ?>
<!----------------------------------------->


<!-- ÁREA DE SCRIPTS -->
<?php echo $this->section('scripts'); ?>

<!-- Aqui fazemos o envio para o para o tamplate principal os scripts  -->

<?php echo $this->endSection(); ?>
<!----------------------------------------->