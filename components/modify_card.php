<div class="bg-white rounded-md shadow-sm p-4 max-w-lg mx-auto">
  <h2 class="text-2xl font-bold mb-4">修改个人信息</h2>
  <form>
    <!-- 头像 -->
    <div class="flex items-center mb-4">
      <label for="avatar" class="w-24 text-gray-700">头像</label>
      <div class="flex-1">
        <img class="h-24 w-24 rounded-full" src="https://via.placeholder.com/100" alt="User avatar">
        <input type="file" id="avatar" class="mt-2 file-input w-full max-w-xs">
      </div>
    </div>
    <!-- 用户名 -->
    <div class="flex items-center mb-4">
      <label for="username" class="w-24 text-gray-700">用户名</label>
      <input type="text" id="username"
        class="flex-1 p-2 rounded border border-gray-300 focus:outline-none focus:border-indigo-500"
        placeholder="Username">
    </div>
    <!-- 邮箱 -->
    <div class="flex items-center mb-4">
      <label for="email" class="w-24 text-gray-700">邮箱</label>
      <input type="email" id="email"
        class="flex-1 p-2 rounded border border-gray-300 focus:outline-none focus:border-indigo-500"
        placeholder="Email">
    </div>
    <!-- 个人简介 -->
    <div class="flex items-start mb-4">
      <label for="bio" class="w-24 text-gray-700">个人简介</label>
      <textarea id="bio"
        class="flex-1 p-2 h-32 rounded border border-gray-300 focus:outline-none focus:border-indigo-500"
        placeholder="个人简介"></textarea>
    </div>
    <!-- 提交按钮 -->
    <div class="flex justify-end">
      <button type="submit" class="px-4 py-2 bg-indigo-500 text-white rounded hover:bg-indigo-600">保存</button>
    </div>
  </form>
</div>