<?php
    // ログインフィルター
    require_once 'login_filter.php';
    // 外部ファイル読込
    require_once 'contact_dao.php';
    require_once 'customer_dao.php';
    // セッション開始
    // session_start();

    // 質問項目入力エラーメッセージ表示
    $my_contact_error = $_SESSION['my_contact_error'];
    // 破棄
    $_SESSION['my_contact_error'] = null;
    // var_dump($contact_error);
    // 送信できた場合のメッセージ
    $my_contact_message = $_SESSION['my_contact_message'];
    // 破棄
    $_SESSION['my_contact_message'] = null;
    // // var_dump($contact_message);
    // idをnullで取得
    $id = null;
    // $idをGETで取得
    if(isset($_GET['id'])){
        $_GET['id'];
    }
?>


<!doctype html>

<thml lang='ja'>
    <head>
        <meta charset='UTF-8'>
        <title>お問い合わせ</title>
        <link rel='stylesheet' href='index.css'>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <div class='container-fluid sticky-top'>
            <div class='row header'>
                <a href='mypage.php' class='logo'><span class='col-lg-2 '>KURIADELE</span></a>
                <span class='offset-lg-4 col-lg-3 px-0 span_c'>
                    <a href='login_contact.php' class='span_d'>お問い合わせ</a>
                    <a href='carts.php' class='span_d'>カート</a>
                    <a href='purchases.php' class='span_d'>購入履歴</a>
                    <a href='logout.php' class='span_d'>ログアウト</a>
                </span>
                
                <span class='col-lg-1 px-0 info'>
                    <form method='POST' action='search.php' class='info'>
                        <input type='search' name='name'/>
                        <input type='submit' value='検索'/>
                    </form>
                
            
                    <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown"></button>
                    <div class="dropdown-menu">
                        <a class='dropdown-item' href='#'><a href='login_company_philosophy.php'>KURIADELEについて</a>
                        <a class='dropdown-item' href='#'><a href='login_product.php'>取扱商品</a>
                        <a class='dropdown-item' href='#'><a href='login_contact.php'>サポート</a>
                    </div>
                </span>
            </div>
        </div>

        <p class='customer'>お問い合わせフォーム</p>
        
        <div class='question'>ご質問・ご要望があればご連絡ください。</div>
        <?php if($my_contact_error !== null): ?>
            <?php foreach($my_contact_error as $error): ?>
                <p><?= $error ?></p>
            <?php endforeach; ?>
        <?php endif; ?>
        <?php if($my_contact_message !== null): ?>
                <p><?= $my_contact_message ?></p>
        <?php endif; ?>
        
        <form method='POST' action='login_contact_new.php'>
            <div class='question_2'>お名前  <input type='text' name='name' class='submit' value='<?= $login_customer->name ?>'/></div>
            <div class='question_2'>件名  <input type='text' name='subject' class='submit' /></div> 
            <div class='question_3'><p>内容</p>  <textarea name='contact' cols='50' rows='10'/></textarea></div>
            <div class='question_2 question_5'>メールアドレス <input type='text' name='email_address' class='submit' value='<?= $login_customer->email_address ?>'/></div>
            <div class='top_d'><input type='submit' value='送信' class='btn-gradient'/></div>
        </form>  
        
        
        

        <div class='footer '>
            <ul><span>KURIADELEについて</span><br>
                <li><a href='login_company_philosophy.php'>企業紹介</a></li>

            </ul>
            <ul><span>取扱商品</span>
                <li><a href='login_product.php'>商品一覧</a></li>
            </ul>
            <ul><span>サポート</span>
                <li><a href='login_contact.php'>お問い合わせ</a></li>
                <li><a href='login_change.php'>お客様情報変更</a></li>
            </ul>
            <!--<ul><span>SNSアカウント</span>-->
            <!--</ul>-->
            
        </div>
    <script src='https://code.jquery.com/jquery-3.5.1.slim.min.js' integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js' integrity='sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js' integrity='sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV' crossorigin='anonymous'></script>
    </body>
</thml>
