<?php session_start(); ?>

<?php if (!isset($_SESSION['login'])) {
	session_start();
	$_SESSION['warning']='please login 1st';

	header('location:../index.php');
	} ?>


<?php include '../layout/header.php' ?>

<div class="rat">

    
</div>


    <p> This is ADMIN PANEL</p>

        <h1>Abir Hasan Apon</h1>
        <img src="../assets/image/a12.jpg" class="img-thumbnail" alt="...">
        dd the .list-group-numbered modifier class (and optionally use an

element) to opt into numbered list group items. Numbers are generated via CSS (as opposed to a
s default browser styling) for better placement inside list group items and to allow for better customization. Numbers are generated by counter-reset on the
, and then styled and placed with a ::before pseudo-element on the

<?php include '../layout/footer.php' ?>

