# memo

確認した方が良いのではないか？なこと

## PHP のメモ

テンプレートエンジンだから下の php タグの中でしか php のロジック記述できない

```php
<?php
"hoge"
?>


下の2つの書き方が同一
<h3><?php echo "hoge"; ?></h3> // 本来の記法
<h3><?= "hoge"; ?></h3> // 短縮記法

$_POST['hoge'] // post時にhogeが持ってるデータを取得する


// デバッグコマンド
    <?php var_dump($result); ?> // 型とか、詳細情報が取れる
    <?php print_r($result); ?> // 変数で持ってるテキストだけ出力する


割とjsxと似てる気がする

phpをhtmlに組み込んで出力できる

```

`````php
<?php echo $_POST["num1"] ?>
<?php echo $_POST["num2"] ?>

<!-- 初期値ブランク、ポストが走ったら入力値を表示 -->
<?php if (isset($_POST['num1'])) {
    echo $_POST['num1'];
}; ?>

<?php if (isset($_POST['num2'])) {
    echo $_POST['num2'];
}; ?>

<?php if (isset($_POST['operator'])) {
    echo $_POST['operator'];
}; ?>
```



````php
<?php if (
    empty($_POST['num1'])
    || empty($_POST['num2']) || empty($_POST['operator'])
) {
    echo "数値を入力してください";
}else {
    echo $_POST['num1'];
    echo $_POST['num2'];
    echo $_POST['operator'];
}; ?>
```
`````
