<?php
$servername = "localhost";
$username = "ユーザー名";
$password = "パスワード";
$dbname = "データベース名";

$name = $_POST['name'];
$email = $_POST['email'];
$question = $_POST['question'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("データベースへの接続に失敗しました: " . $conn->connect_error);
}

$sql = "INSERT INTO アンケートテーブル名 (名前, メールアドレス, 聞きたい問い) VALUES ('$name', '$email', '$question')";

if ($conn->query($sql) === TRUE) {
    echo "データが正常に登録されました";
} else {
    echo "データの登録に失敗しました: " . $conn->error;
}

$conn->close();
?>