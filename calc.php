<?php
$result = null; // 初期値

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // フォームから値を取得
    $num1 = isset($_POST["num1"]) ? (float)$_POST["num1"] : null;
    $num2 = isset($_POST["num2"]) ? (float)$_POST["num2"] : null;
    $operator = isset($_POST["operator"]) ? $_POST["operator"] : null;

    // 計算処理
    if ($operator && $num1 !== null && $num2 !== null) {
        switch ($operator) {
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
                $result = $num2 != 0 ? $num1 / $num2 : "エラー: 0 で割ることはできません";
                break;
            default:
                $result = "無効な演算子です";
        }
    } else {
        $result = "入力が不正です";
    }
}
?>
