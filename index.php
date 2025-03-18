<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php初級</title>
</head>
<?php include "calc.php"; ?>
<body>
    <h1>電卓</h1>
    <h2>計算結果: <?php echo $result !== null ? $result : ""; ?></h2>
    <section>
        <form method="POST">
            <input type="number" name="num1" placeholder="数値1を入力" value="<?php echo isset($num1) ? $num1 : ''; ?>" required>
            <input type="number" name="num2" placeholder="数値2を入力" value="<?php echo isset($num2) ? $num2 : ''; ?>" required>
            <input type="hidden" name="calculator" value="<?php echo isset($calculator) ? $calculator : ''; ?>">
            <!-- // 演算子と計算するどっちも、クリックした時点でpostなっちゃう。 -->
            <!-- // 参考記事の演算子hiddenの方法をパクる -->
            <div>
                <button type="submit" name="operator" value="plus">+</button>
                <button type="submit" name="operator" value="minus">-</button>
                <button type="submit" name="operator" value="multiply">×</button>
                <button type="submit" name="operator" value="divide">÷</button>
            </div>
            <div>
                <button type="submit" name="button" value="calculate">計算する</button>
            </div>
        </form>
    </section>
    <p><?php echo var_dump($message); ?></p>
    <p><?php echo var_dump($isActive); ?></p>
    <p><?php echo var_dump($sum); ?></p>
    <p><?php echo var_dump($concat); ?></p>
    <p><?php echo $concat; ?></p>
    <p><?php echo var_dump($resultTrue); ?></p>
    <p><?php echo var_dump($resultFalse); ?></p>
    <p><?php echo PREFECTURES; ?></p>
    <p><?php echo  $greeting; ?></p>
    <!-- secondary -->
    <?php error_log("[" . date('Y-m-d H:i:s') . "]" . "入力エラー", 0); ?>
    <?php error_log(date('Y-m-d H:i:s'), 0); ?>
</body>

</html>

<?php error_log("エラーが発生しました", 3, "error.log"); ?>