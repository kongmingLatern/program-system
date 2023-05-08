<h1>新闻发布系统</h1>

<h2>添加新闻</h2>
<form action="add_news.php" method="post">
  <label for="title">标题：</label>
  <input type="text" id="title" name="title" required>
  <br>
  <label for="content">内容：</label>
  <textarea id="content" name="content" required></textarea>
  <br>
  <input type="submit" name="submit" value="发布新闻">
</form>

<h2>新闻列表</h2>
<?php
include_once './config.php';

$sql = "SELECT * FROM news ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo "<div class='news-item'>";
    echo "<h3>" . $row["title"] . "</h3>";
    echo "<p>" . $row["content"] . "</p>";
    echo "</div>";
  }
} else {
  echo "暂无新闻";
}

$conn->close();
?>