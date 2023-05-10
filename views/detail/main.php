<main class="flex justify-around max-w-[1200px] mx-auto">

  <aside>
    <?php
    include_once '../components/title.php';
    ?>
    <?php
    include_once '../components/comment_textarea.php';
    ?>
    <?php
    include_once '../components/comment.php';
    ?>
  </aside>

  <aside class='flex flex-col'>
    <div class="top">
      <?php
      include_once '../components/user_card.php';
      ?>
    </div>
    <div class="bottom">
      <div class="card w-96 bg-neutral text-neutral-content">
        <div class="card-body items-center text-center">
          <h2 class="card-title">Cookies!</h2>
          <p>We are using cookies for no reason.</p>
          <div class="card-actions justify-end">
            <button class="btn btn-primary">Accept</button>
            <button class="btn btn-ghost">Deny</button>
          </div>
        </div>
      </div>
    </div>
  </aside>


</main>