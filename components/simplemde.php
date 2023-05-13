<form method="post" action='../service/add_news.php' enctype="multipart/form-data">
  <div class="mb-2 flex justify-between items-center p-2">
    <input name='article_name' placeholder="输入文章标题..." class="input w-full max-w-xs text-xl" />
    <label for="my-modal" class="btn btn-primary flex items-center w-[70px] h-[45px]">发布</label>

    <input type="checkbox" id="my-modal" class="modal-toggle" />
    <div class="modal">
      <div class="modal-box relative">
        <h3 class="font-bold text-lg">填写信息</h3>
        <label for="my-modal"
          class="btn btn-error btn-outline btn-sm btn-circle absolute right-2 top-2 flex items-center">✕</label>
        <p class="py-4">
          <label for='cover'>文章封面：</label>
          <input type='file' id='cover' name='cover' placeholder="输入文章封面..."
            class="file-input w-full max-w-xs text-sm" />
        </p>
        <p class="py-4">
          <label for='cover'>文章分类：</label>
          <input type='text' id='category_name' name='category_name' placeholder="输入文章分类"
            class="input w-full max-w-xs text-sm" />
        </p>
        <p class='py-4'>
          <label for='desc'>文章描述：</label>
          <input name='desc' id='desc' placeholder="输入文章描述..." class="file-input w-full max-w-xs text-sm pl-2" />
        </p>
        <div class="modal-action">
          <input type='submit' for="my-modal" class="btn btn-primary flex items-center w-[60px] h-[45px]"></input>
        </div>
      </div>
    </div>
  </div>
  <div>
    <textarea name="article_content" id="editor" cols="30" rows="10"></textarea>
  </div>
</form>