<?php
$sql = "SELECT * FROM user WHERE uid = '{$_COOKIE['uid']}'";
$result = $conn->query($sql);
$user = $result->fetch_assoc();
$avatar = $user['avatar'];
?>
<form action='../service/submit_comment.php' method='post' class="mt-4 bg-white rounded-md shadow-sm">
  <div class="flex space-x-3 p-4">
    <img class="h-10 w-10 rounded-full" src="<?php echo $avatar; ?>" alt="User avatar">
    <div class="flex-1">
      <textarea name='comment_content'
        class="w-full h-20 p-2 rounded border border-gray-300 focus:outline-none focus:border-indigo-500"
        placeholder="写下你的评论..."></textarea>
      <input type='hidden' name='article_id' value='<?php echo $_GET["card"]; ?>'>
    </div>
  </div>
  <div class="px-6 border-gray-200 flex justify-end mb-2">
    <button type='submit' class="px-4 py-1 bg-indigo-500 text-white rounded hover:bg-indigo-600 focus:outline-none">
      发布
    </button>
  </div>

  <div class='divider'></div>
</form>