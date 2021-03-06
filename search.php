<?php
    // 外部ファイル読込
    require_once 'item_dao.php';
    // セッション開始
    // session_start();
    // 入力された情報を保存
    $keyword = $_GET['name'];
    // var_dump($_POST);
    
    // var_dump($keyword);
    // 入力されたキーワードが空でなければ
    if($keyword !== ''){
        $items = ItemDAO::find_by_keyword($keyword);
        $message = 'キーワード ' . $keyword . 'で検索しました。' . count($items) . '件ヒットしました。';
    }else{
        // 登録した全ての商品情報取得
        $items = ItemDAO::get_all_items();
        $message = 'キーワードを入力して検索ボタンを押してください';
    }
    
    // var_dump($items);
    // 商品名と検索ワードが一致するキーワードならば
    // if(strpos($items, $keyword) === false){
    // if(preg_match('/[^ぁ-んーァ-ヶー]/u', $items)){
        
    //     // // キーワードにヒットする商品を抜き出す
        
        
    //     $_SESSION['search_message'] = 'キーワードの類似商品が表示されました。';
    //     // var_dump($_SESSION);
    //     // // 画面遷移
    //     header('Location: login_product.php');
    //     exit;
        
    // }else{ // キーワードと商品名が一致しないならば
    //     // エラーメッセージ表示
    //     $_SESSION['search_errors'] = '入力された商品名は存在しません。';
    //     // var_dump($_SESSION);
    //     // // 画面遷移
    //     header('Location: mypage.php');
    //     exit;
    // }
    
    // 呼び込み
    include 'products.php';
    
    // 現在、検索フォームについて進めてます
    // 、
    // やりたい事
    //     商品名と検索ワードが一致するキーワード（商品名）であれば
    //     商品を表示したいです。
    
    // 現状
    //     1,検索ワードを入力する（とりあえず、カメラと入力）、
    //     2,if関数を使う
    //         ↓
    //     「入力エラーメッセージ表示」
    //     「キーワードの類似商品が表示されました。」
    //     の表示はif関数の中身を変更したりすると、
    //     両方のメッセージを表示する事ができました。
        
    // しかし、if関数の中身が上手く作動しておらず、
    // if関数の中身を変更せずに
    // 商品名のキーワードを入力するとエラーメッセージ表示になったり、
    // 商品名と関係のない言葉を入力しても、商品が表示されます。
    
    // それで、if関数をどの様にしたら上手く作動するか
    // アドバイスお願いしたいです。
    
    
    // validateによって
    // キーワードと商品名が一致しないと
    // 「表示できない」と表示したいのですが
    // これができません。
    // アドバイスが欲しいです。
    
    // また、取り扱い商品に表示されている商品をキーワードによって
    // 選別し、同一ページに抜き出した商品を表示させたいです。
    
    
?>