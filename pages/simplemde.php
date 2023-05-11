<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src='../js/simplemde.js'></script>
  <link href="../css/daisy.css" rel="stylesheet" type="text/css" />
  <link href='../css/editor.css' rel="stylesheet" type="text/css" />
  <link href="../css/simplemde.css" rel="stylesheet" type="text/css" />
  <link href="../css/markdown.css" rel="stylesheet" type="text/css">
</head>

<body>
  <?php
  include_once '../components/simplemde.php';
  ?>
</body>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const simplemde = new SimpleMDE({ element: document.getElementById('editor') });
  });
</script>

</html>