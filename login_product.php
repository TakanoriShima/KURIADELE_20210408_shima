<?php
    // ログインフィルター
    require_once 'login_filter.php';
    // 外部ファイル読込
    require_once 'item_dao.php';
    // セッション開始
    // session_start();
    $id = null;
    // $idをGETで取得
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    // 登録した全ての商品情報取得
    $items = ItemDAO::get_all_items();
    // var_dump($items);
    $message = '';
    
    // キーワードに類似した商品表示
    // $serch_message = $_SESSION['search_message'];
    // var_dump($serch_message);
    
    include_once 'products.php';
?>

