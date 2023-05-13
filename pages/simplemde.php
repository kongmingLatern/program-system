<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src='../js/simplemde.js'></script>
  <script src='../js/tailwind.js'></script>
  <link href="../css/daisy.css" rel="stylesheet" type="text/css" />
  <link href='../css/editor.css' rel="stylesheet" type="text/css" />
  <link href="../css/markdown.css" rel="stylesheet" type="text/css">
  <link href="../css/simplemde.css" rel="stylesheet" type="text/css" />
  <script>
    tailwind.config = {
      corePlugins: {
        preflight: false,
      }
    }
  </script>
</head>

<body>
  <?php
  include_once '../components/simplemde.php';
  ?>
</body>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const simplemde = new SimpleMDE({ element: document.getElementById('editor') });
    // TODO: 保存用户上传的图片
    const editor = document.querySelector('.CodeMirror');
    console.log(editor);
    // 给 editor 绑定 paste 事件
    editor.addEventListener('paste', function (e) {
      console.log('e', e);
      const items = (event.clipboardData || event.originalEvent.clipboardData)?.items;
      for (index in items) {
        const item = items[index];
        if (item.kind === 'file') {
          const blob = item.getAsFile();
          const reader = new FileReader();
          reader.onload = function (event) {
            // 读取到图片后，发送到后端
            uploadImage(event.target.result);
          };
          reader.readAsDataURL(blob);
        }
      }
    })

    function uploadImage(dataUrl) {
      const xhr = new XMLHttpRequest();
      xhr.open('POST', '../service/uploadImage.php', true); // 这里'/upload'是你的上传路由
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.onload = function () {
        if (xhr.status === 200) {
          // 上传成功后，将图片URL插入到Markdown文本中
          const imageUrl = xhr.responseText;
          simplemde.value('![](' + imageUrl + ')');
        }
      };
      xhr.send('image=' + encodeURIComponent(dataUrl));
    }
  });



</script>

</html>