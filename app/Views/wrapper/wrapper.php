<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Guru</title>
    <link rel="stylesheet" href="<?= base_url('/assets/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('/assets/css/style.css');?>">
</head>

<?= $this->include('wrapper/navbar')   ; ?>

<?= $this->renderSection('content')   ; ?>
<script src="<?= base_url('/assets/js/bootstrap.bundle.min.js');?>"></script>

</body>
</html>