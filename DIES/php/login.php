<?php
session_start();

try {
    $pdo = new PDO ( 'mysql:dbname=dies; host=localhost;port=3306; charset=utf8',
        'root', 'dies2017' );
} catch ( PDOException $e ) {
    echo "接続エラー:{$e->getMessage()}";
}

if (!empty($_POST["user_id"]) && !empty($_POST["pass"])) {
    // 入力したユーザIDを格納
    $user_name = $_POST["user_id"];
    // 3. エラー処理

        $stmt = $pdo->prepare('SELECT * FROM user WHERE user_id = ?');
        $stmt->execute(array($user_name));

        $password = $_POST["pass"];

        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            if ($password == $row['pass']) {
                session_regenerate_id(true);

                // 入力したIDのユーザー名を取得
                $id = $row['id'];
                $sql = "SELECT * FROM user WHERE id = $id";  //入力したIDからユーザー名を取得
                $stmt = $pdo->query($sql);
                foreach ($stmt as $row) {
                    $row['user_name'];  // ユーザー名
                }
                $_SESSION["user_id"] = $row['user_id'];
                $_SESSION["user_name"] = $row['user_name'];
                header("Location: ../dies.php");  // メイン画面へ遷移
                exit();  // 処理終了
            } else {
                // 認証失敗
                echo "#1";
                $e = "ユーザーIDあるいはパスワードに誤りがあります。#1";
                header("Location: ../index.php?e=$e");
            }
        } else {
            // 該当データなし
            echo "#2";
            $e = "ユーザーIDあるいはパスワードに誤りがあります。#2";
            header("Location: ../index.php?e=$e");

        }
} else {
    //該当データなし
    echo "#3";
    $e = "ユーザーIDとパスワードを入力してください。";
    header("Location: ../index.php?e=$e");

}

?>
