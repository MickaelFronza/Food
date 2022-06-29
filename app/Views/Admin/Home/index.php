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

<?php echo $titulo; ?>

<?php echo $this->endSection(); ?>
<!----------------------------------------->


<!-- ÁREA DE SCRIPTS -->
<?php echo $this->section('scripts'); ?>

<!-- Aqui fazemos o envio para o para o tamplate principal os scripts  -->

<?php echo $this->endSection(); ?>
<!----------------------------------------->