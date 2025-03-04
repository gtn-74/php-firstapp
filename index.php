<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>電卓アプリ</title>
</head>

<body>
    <h1>電卓アプリ</h1>
    <?php include 'calc.php'; ?>
    <!-- $resultが、nullじゃなかったら、result。初期値は、null -->
    <h2>計算結果: <?php $result !== null ? $result : "未計算"; ?></h2>
    <section>
        <form method="POST">
            <input type="number" name="num1" placeholder="数値1を入力" required>
            <input type="number" name="num2" placeholder="数値2を入力" required>

            <div>
                <button name="operator" value="+">+</button>
                <button name="operator" value="-">-</button>
                <button name="operator" value="×">×</button>
                <button name="operator" value="÷">÷</button>
            </div>

            <div>
                <button type="submit">計算する</button>
            </div>
        </form>
    </section>

</body>

</html>