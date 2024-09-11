<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>パスワード入力</title>
</head>
<body>
    <form action="professor.php" method="post">
        <label for="student_id">学籍番号を入力してください</label><br>
        <input type="text" id="student_id" name="student_id"><br>
        <label for="password">パスワードを入力してください</label><br>
        <input type="password" id="password" name="password"><br>
        <input type="submit" value="送信" class = "button">
    </form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $input_password = isset($_POST['password']) ? $_POST['password'] : '';
  $student_id = isset($_POST['student_id']) ? $_POST['student_id'] : '';

  // パスワードが「01234」であるかどうかを確認
  if ($input_password == '01234') {
    // 一致した場合、学籍番号をセッション変数に保存
    session_start();
    $_SESSION['student_id'] = $student_id;
    // その後、finish.htmlにリダイレクト
    header('Location:finish.html');
    exit();
  } else {
    // パスワードが一致しなかった場合、untill.htmlにリダイレクト
    header('Location:untill.html');
    exit();
  }
}
?>

<script>
// URLパラメータから学籍番号を取得し、それを入力フォームに設定
const urlParams = new URLSearchParams(window.location.search);
const student_id = urlParams.get('student_id');
if (student_id) {
  document.getElementById('student_id').value = decodeURIComponent(student_id);
}
</script>

</body>
</html>


