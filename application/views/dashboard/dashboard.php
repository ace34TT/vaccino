<?php $title = "Formulaire eligibilité"; ?>

<!-- HEADER -->
<?php ob_start(); ?>

<?php $links = ob_get_clean(); ?>

<!-- CONTENT -->
<?php ob_start(); ?>
<p>Dahboard</p>
<?php $content = ob_get_clean(); ?>
<!-- SCRIPT -->
<?php ob_start(); ?>

<?php $scripts = ob_get_clean(); ?>

<?php require('template.php'); ?>