<?php
$servername = "localhost";
$username = "ユーザー名";
$password = "パスワード";
$dbname = "データベース名";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("データベースへの接続に失敗しました: " . $conn->connect_error);
}

$sql = "SELECT * FROM アンケートテーブル名";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>アンケートデータ一覧</h1>";
    echo "<table border='1'>";
    echo "<tr><th>名前</th><th>メールアドレス</th><th>聞きたい問い</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["名前"] . "</td><td>" . $row["メールアドレス"] . "</td><td>" . $row["聞きたい問い"] . "</td></tr>";
    }

    echo "</table>";
} else {
    echo "データが見つかりませんでした";
}

$conn->close();
?>