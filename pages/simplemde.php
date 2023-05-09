<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="../css/simplemde.css" rel="stylesheet" type="text/css" />
  <script src='../js/simplemde.js'></script>
</head>

<body>
  <?php
  include_once '../components/codemirror.php'
    ?>
</body>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const simplemde = new SimpleMDE({ element: document.getElementById('editor') });
  });
</script>

</html>