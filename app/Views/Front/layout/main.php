<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?= $this->renderSection('title')  ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
	<link href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css" rel="stylesheet">
	<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>


    <?= $this->renderSection('css')  ?>
</head>

<body>
    <?= $this->include('Front/layout/header')  ?>
    <?= $this->renderSection('content')  ?>
    <?= $this->include('Front/layout/footer')  ?>
    <?= $this->renderSection('js')  ?>
</body>

</html>