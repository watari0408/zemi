<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>学籍番号の表示</title>
</head>
<body>
  
    <form action="" method="post">
        <input type="submit" name="reset" value="リセット" class = "button">
    </form>

<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['reset'])) {
    // リセットボタンが押された場合、セッションをリセット
    session_unset();
    session_destroy();
    header('Location:'.$_SERVER['PHP_SELF']);
    exit();
  }

  $input_password = isset($_POST['password']) ? $_POST['password'] : '';
  $student_id = isset($_POST['student_id']) ? $_POST['student_id'] : '';

  // パスワードが「01234」であるかどうかを確認
  if ($input_password == '01234') {
    // 一致した場合、学籍番号をセッション変数に保存
    if (!isset($_SESSION['student_ids'])) {
      $_SESSION['student_ids'] = array();
    }
    array_push($_SESSION['student_ids'], $student_id);
    // その後、finish.htmlにリダイレクト
    header('Location:finish.html');
    exit();
  } else {
    // パスワードが一致しなかった場合、untill.htmlにリダイレクト
    header('Location:untill.html');
    exit();
  }
}

// セッションから学籍番号を取得し表示
if (isset($_SESSION['student_ids'])) {
  foreach ($_SESSION['student_ids'] as $id) {
    echo "<h3>学籍番号 " . htmlspecialchars($id, ENT_QUOTES, 'UTF-8') . "</h3>";
  }
}
?>

</body>
</html>






