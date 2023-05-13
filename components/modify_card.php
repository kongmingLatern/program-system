<?php
include_once '../config.php';
$sql = "SELECT * FROM user WHERE uid = '{$_COOKIE['uid']}'";
$result = $conn->query($sql);
$user = $result->fetch_assoc();
$nickname = $user["nickname"];
$desc = $user["desc"];
$job = $user["job"];
$avatar = $user["avatar"];
?>
<div class="bg-white rounded-md shadow-sm p-4 max-w-lg mx-auto">
  <h2 class="text-2xl font-bold mb-4">修改个人信息</h2>
  <form action='../service/upload.php' enctype="multipart/form-data" method="post">
    <!-- 头像 -->
    <div class="flex items-center mb-4">
      <label for="avatar" class="w-24 text-gray-700">头像</label>
      <div class="flex-1">
        <img id='output' class="h-24 w-24 rounded-full" src="<?php echo $avatar; ?>" alt="头像">
        <input type="file" name='avatar' id="avatar" class="mt-2 file-input w-full max-w-xs" onchange='loadFile(event)'>
      </div>
    </div>
    <!-- 用户名 -->
    <div class="flex items-center mb-4">
      <label for="nickname" class="w-24 text-gray-700">用户名</label>
      <input type="text" id="nickname" name="nickname"
        class="flex-1 p-2 rounded border border-gray-300 focus:outline-none focus:border-indigo-500" placeholder="请输入昵称"
        value=<?php echo $nickname; ?>>
    </div>
    <!-- 个人简介 -->
    <div class="flex items-start mb-4">
      <label for="job" class="w-24 text-gray-700">个人职业</label>
      <input type="text" id="job" name="job"
        class="flex-1 p-2 rounded border border-gray-300 focus:outline-none focus:border-indigo-500"
        placeholder="请输入个人职业" value=<?php echo $job; ?>>
    </div>
    <div class="flex items-start mb-4">
      <label for="desc" class="w-24 text-gray-700">个人简介</label>
      <textarea id="desc"
        class="flex-1 p-2 h-32 rounded border border-gray-300 focus:outline-none focus:border-indigo-500" name="desc"
        placeholder="请输入个人简介"><?php echo trim($desc); ?></textarea>
    </div>
    <!-- 提交按钮 -->
    <div class="flex justify-end">
      <button type="submit" class="px-4 py-2 bg-indigo-500 text-white rounded hover:bg-indigo-600">保存</button>
    </div>
  </form>
</div>