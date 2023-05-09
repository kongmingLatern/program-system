<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>新闻发布系统</title>
  <link rel="stylesheet" href="styles.css">
  <link href="./css/daisy.css" rel="stylesheet" type="text/css" />

  <script src="./js/tailwind.js"></script>
  <script src="./js/vue.js"></script>

</head>

<body class='bg-[#F2F3F5]'>
  <div id="app">

    <!-- 头部 -->
    <?php
    include_once './views/index/header.php'
      ?>

    <!-- 轮播图 -->

    <?php
    include_once './components/carousel.php';
    ?>


    <!-- 导航栏 -->
    <?php
    include_once './views/index/navbar.php'
      ?>


    <!-- 内容 -->
    <?php
    include_once './views/index/main.php'
      ?>

    <div class="divider"></div>
    <!-- 底部 -->
    <?php
    include_once './views/index/footer.php'
      ?>




  </div>

  <script>
    const { createApp } = Vue
    function redirectToDetailsPage(card) {
      window.location.href = "/pages/detail.php?card=" + card
    }
    function redirectToPersonal() {
      window.location.href = "/pages/my.php"
    }

    // const simplemde = new SimpleMDE({ autofocus: true, element: document.getElementById("textarea") });

    // simplemde.value("this is a value");




    // const textarea = document.querySelector('textarea[name="content"]');
    // const preview = document.getElementById('preview');
    // const imageUpload = document.getElementById('imageUpload');
    // const converter = new showdown.Converter();

    // function updatePreview() {
    //   const html = converter.makeHtml(textarea.value);
    //   console.log('html', html);
    //   console.log('preview', preview);
    //   preview.innerHTML = html;
    // }

    // console.log('textarea', textarea);
    // textarea.addEventListener('input', (e) => {
    //   console.log('inpt');
    // });
    // // updatePreview();

    // imageUpload.addEventListener('change', function (event) {
    //   const file = event.target.files[0];
    //   if (file) {
    //     const reader = new FileReader();
    //     reader.onload = function (e) {
    //       const imageUrl = e.target.result;
    //       const imgTag = `![${file.name}](${imageUrl})`;
    //       const startPos = textarea.selectionStart;
    //       const endPos = textarea.selectionEnd;
    //       textarea.value = textarea.value.substring(0, startPos) + imgTag + textarea.value.substring(endPos);
    //       updatePreview();
    //     };
    //     reader.readAsDataURL(file);
    //   }
    // });

    // document.addEventListener("DOMContentLoaded", function () {
    //   const editor = CodeMirror.fromTextArea(document.getElementById('codemirror-editor'), {
    //     mode: 'markdown',
    //     lineNumbers: true,
    //     theme: 'default'
    //   });
    // });
    createApp({
      data() {
        return {
          title: "header1"
        }
      }
    }).mount('#app')
  </script>

</body>

</html>