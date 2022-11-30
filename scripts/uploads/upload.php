<form action="upload.php" method="POST">
    <button type="sumbit" name="ft-aluno">Foto Alunos</button>
    <button type="sumbit" name="ft-robo">Foto Robos</button>
    <button type="sumbit" name="banner-robo">Banner Robos</button>
</form>

<?php
if (isset($_POST['ft-aluno'])) {
?><script type="text/javascript">
        window.location.href = 'upAluno.php';
    </script>
<?php
}
if (isset($_POST['ft-robo'])) {
?><script type="text/javascript">
        window.location.href = 'upRoboImg.php';
    </script>
<?php
}

if (isset($_POST['banner-robo'])) {
?><script type="text/javascript">
        window.location.href = 'upBanner.php';
    </script>
<?php
}


?>