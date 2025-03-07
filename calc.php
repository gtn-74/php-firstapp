<?php

// 初期値でnull置いたらwarningが消えた
$result = null;

// postしたタイミングで走る
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // 入力値をhtmlの名前と連結してる情報をpostした時に取得
    // floatは、小数点の型
    $num1 = isset($_POST["num1"]) ? (float)$_POST["num1"] : null;
    $num2 = isset($_POST["num2"]) ? (float)$_POST["num2"] : null;

    // 演算子と計算するの識別
    // 演算子と計算するどっちも、クリックした時点でpostなっちゃう。
    // 参考記事の演算子hiddenの方法をパクる

    if (isset($_POST["operator"])) {
        $calculator = $_POST["operator"];
    } else {
        $calculator = isset($_POST["calculator"]) ? $_POST["calculator"] : null;
    }

    // 計算するボタンをクリックしたら、計算式を走らせる
    if (isset($_POST["button"]) && $_POST["button"] === "calculate") {
        if ($calculator && $num1 !== null && $num2 !== null) {
            switch ($calculator) {
                case "plus":
                    $result = $num1 + $num2;
                    break;
                case "minus":
                    $result = $num1 - $num2;
                    break;
                case "multiply":
                    $result = $num1 * $num2;
                    break;
                case "divide":
                    $result = $num2 != 0 ? $num1 / $num2 : "0は、割れない";
                    break;
                default:
                    $result = "演算子が無効！";
            }
        } else {
            $result = "入力を見直して！";
        }
    }
}
?>

<?php

/*
isset：セットされている変数の中身を確認


*/

?>