<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>登录</title>
  <link href="../css/daisy.css" rel="stylesheet" type="text/css" />
  <script src="../js/tailwind.js"></script>
</head>

<body>
  <div class="min-h-screen flex items-center justify-center bg-gray-50">
    <div class="bg-white p-6 rounded-md shadow-md w-full max-w-md">
      <h2 class="text-2xl font-bold mb-4 text-center">登陆</h2>
      <form action="../service/login.php" method='post'>
        <!-- 邮箱 -->
        <div class="mb-4">
          <label for="username" class="block text-gray-700">用户名</label>
          <input type="username" id="username" name='username'
            class="mt-1 w-full p-2 rounded border border-gray-300 focus:outline-none focus:border-indigo-500"
            placeholder="请输入用户名">
        </div>
        <!-- 密码 -->
        <div class="mb-4">
          <label for="password" class="block text-gray-700">密码</label>
          <input type="password" id="password" name='password'
            class="mt-1 w-full p-2 rounded border border-gray-300 focus:outline-none focus:border-indigo-500"
            placeholder="请输入密码">
        </div>
        <!-- 提交按钮 -->
        <div class="flex justify-end">
          <button type="submit" class="px-4 py-2 bg-indigo-500 text-white rounded hover:bg-indigo-600"
            name='submit'>登陆</button>
        </div>
      </form>
    </div>
  </div>
</body>

</html>