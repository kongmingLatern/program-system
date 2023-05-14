<?php
include_once $_COOKIE["root_path"] . '/config.php';
$sql = "SELECT * FROM user WHERE uid = '{$_COOKIE['uid']}'";
$result = $conn->query($sql);
$user = $result->fetch_assoc();
$avatar = $user["avatar"];
?>
<header class="navbar justify-between border-b-[2px]">
  <div>
    <h1 class="font-bold whitespace-nowrap text-2xl px-4">稀土掘金</h1>
    <ul class="menu menu-horizontal w-[100%]">
      <li class="ml-2"><a href='/index.php'>首页</a></li>
      <li class="ml-2"><a>前端</a></li>
      <li class="ml-2"><a>后端</a></li>
      <li class="ml-2"><a href='/pages/admin/index.php'>后台</a></li>
    </ul>

  </div>

  <div class='flex'>

    <form method="get" class='relative'>
      <input name='article' type="text" placeholder="搜索文章" class="input input-bordered input-primary " />
      <button type='submit' class='btn btn-outline absolute right-0 top-0'>🍭</button>
    </form>
    <div class="avatar dropdown dropdown-end dropdown-hover placeholder cursor-pointer ml-3"
      onclick="redirectToPersonal()">

      <div class="bg-neutral-focus text-neutral-content rounded-full w-12">
        <img src='<?php echo $avatar; ?>' alt='头像' />
      </div>
      <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
        <li><a href='<?php echo '/pages/my.php' ?>'>个人中心</a></li>
        <li><a href='<?php echo '/pages/simplemde.php' ?>'>写文章</a></li>
      </ul>
    </div>
  </div>
</header>