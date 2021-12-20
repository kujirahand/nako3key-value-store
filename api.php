<?php
    //-----------------------------------------------
    // 【なでしこ3PHP】自動生成されたコード
    //-----------------------------------------------
    // global 設定
    global $nako3, $__v0, $__v1, $__v2, $__locals;
    if (empty($nako3)) {
      // init basic object
      $nako3 = [
        'version' => '3.2.30',
        '__varslist'=> [[], [], []], // 変数リスト
        '__module' => [], // モジュールデータ
        '__genMode' => 'PHP',
      ];
      // alias
      $__v0 = &$nako3['__varslist'][0]; // system
      $__v1 = &$nako3['__varslist'][1]; // user global
      $__v2 = &$nako3['__varslist'][2]; // user vars
      $__locals = &$__v2; // stack top
    }
    //-----------------------------------------------
    // 基本設定のインポート
    if (file_exists(__DIR__.'/nako3config.ini.php')) {
      require_once __DIR__.'/nako3config.ini.php';
    }
    //-----------------------------------------------
    // 各種宣言
    
    //-----------------------------------------------
    // ヘッダ
    $nako3['__varslist'][0]['line']='関数の定義';
//[DEF_FUNC name='取得処理']
$__v1["取得処理"]=(function(){
global $nako3, $__v0, $__v1, $__v2;
  $__locals = ['それ'=>''];
  ;$__v0['line']="l33:api.nako3";
  ;$__v0['line']="l34:api.nako3";//# パラメータ確認
  $__v0['line']="l34:api.nako3";if ((($__v2["PW"] == "") || ($__v2["KEY"] == ""))) {
    ;$__v0['line']="l35:api.nako3";
  $__locals["それ"] = $__v1["エラー表示"]("keyとpasswordが必要です",$nako3);
  ;$__v0["終"]($nako3);
  ;;$__v0['line']="l36:api.nako3";
  
  };
  ;$__v0['line']="l36:api.nako3";
  ;$__v0['line']="l37:api.nako3";
  ;$__locals["PWH"]=$__locals["それ"] = $__v1["PWハッシュ取得"]($__v2["PW"],$nako3);
  ;;$__v0['line']="l38:api.nako3";
  $__locals["それ"] = $__v0["PDO一行取得"]("SELECT * FROM items WHERE key=? AND password=?",[$__v2["KEY"],$__locals["PWH"]],$nako3);
  ;;$__v0['line']="l39:api.nako3";
  $__v0['line']="l39:api.nako3";if ($__locals["それ"]) {
    ;$__v0['line']="l40:api.nako3";
  ;$__v2["VALUE"]=$__locals["それ"]["value"];
  ;$__v0['line']="l41:api.nako3";
  $__locals["それ"] = $__v1["成功表示"]($__v2["VALUE"],$nako3);
  ;;$__v0['line']="l42:api.nako3";
  
  }else {;$__v0['line']="l43:api.nako3";
  $__locals["それ"] = $__v1["エラー表示"]("見つかりません。",$nako3);
  ;;$__v0['line']="l44:api.nako3";
  };
  ;
  ;$__v0['line']="l44:api.nako3";
  ;$__v0['line']="l45:api.nako3";
  
  return ($__locals["それ"]);
});
;//[/DEF_FUNC name='取得処理']
//[DEF_FUNC name='設定処理']
$__v1["設定処理"]=(function(){
global $nako3, $__v0, $__v1, $__v2;
  $__locals = ['それ'=>''];
  ;$__v0['line']="l48:api.nako3";
  ;$__v0['line']="l49:api.nako3";//# パラメータ確認
  $__v0['line']="l49:api.nako3";if ((($__v2["PW"] == "") || ($__v2["KEY"] == ""))) {
    ;$__v0['line']="l50:api.nako3";
  $__locals["それ"] = $__v1["エラー表示"]("keyとpasswordが必要です",$nako3);
  ;$__v0["終"]($nako3);
  ;;$__v0['line']="l51:api.nako3";
  
  };
  ;$__v0['line']="l51:api.nako3";
  ;$__v0['line']="l52:api.nako3";
  ;$__locals["PWH"]=$__locals["それ"] = $__v1["PWハッシュ取得"]($__v2["PW"],$nako3);
  ;;$__v0['line']="l53:api.nako3";
  $__locals["それ"] = $__v0["PDO一行取得"]("SELECT * FROM items WHERE key=? AND password=?",[$__v2["KEY"],$__locals["PWH"]],$nako3);
  ;;$__v0['line']="l54:api.nako3";
  $__v0['line']="l54:api.nako3";if ($__locals["それ"]) {
    ;$__v0['line']="l55:api.nako3";
  ;$__locals["T"]=$__locals["それ"] = $__v0["システム時間"]($nako3);
  ;;$__v0['line']="l56:api.nako3";
  ;$__locals["CNT"]=$__locals["それ"] = $__v0["PDO実行"]("UPDATE items SET value=?,mtime=? WHERE key=? AND password=?",[$__v2["VALUE"],$__locals["T"],$__v2["KEY"],$__locals["PWH"]],$nako3);
  ;;$__v0['line']="l57:api.nako3";
  $__v0['line']="l57:api.nako3";if (($__locals["CNT"] >= 1)) {
    ;$__v0['line']="l58:api.nako3";
  $__locals["それ"] = $__v1["成功表示"]("完了",$nako3);
  ;;$__v0['line']="l59:api.nako3";
  
  }else {;$__v0['line']="l60:api.nako3";
  $__locals["それ"] = $__v1["エラー表示"]("更新できません。",$nako3);
  ;$__v0["終"]($nako3);
  ;;$__v0['line']="l61:api.nako3";
  };
  ;
  ;$__v0['line']="l61:api.nako3";
  ;$__v0['line']="l62:api.nako3";
  
  }else {;$__v0['line']="l63:api.nako3";
  $__locals["それ"] = $__v1["エラー表示"]("見つかりません。",$nako3);
  ;$__v0["終"]($nako3);
  ;;$__v0['line']="l64:api.nako3";
  };
  ;
  ;$__v0['line']="l64:api.nako3";
  ;$__v0['line']="l65:api.nako3";
  
  return ($__locals["それ"]);
});
;//[/DEF_FUNC name='設定処理']
//[DEF_FUNC name='PWハッシュ取得']
$__v1["PWハッシュ取得"]=(function(){
global $nako3, $__v0, $__v1, $__v2;
  $__locals = ['それ'=>''];
  $__locals["PW"] = func_get_arg(0);
  ;$__v0['line']="l68:api.nako3";
  ;$__locals["パスワードSALT"]="NlHRYARkyJyofR3F";
  ;$__v0['line']="l69:api.nako3";
  $__locals["それ"] = $__v0["ハッシュ値計算"](($__locals["PW"] . $__locals["パスワードSALT"]),"sha256","base64",$nako3);
  ;;$__v0['line']="l70:api.nako3";
  
  return ($__locals["それ"]);
});
;//[/DEF_FUNC name='PWハッシュ取得']
//[DEF_FUNC name='初期設定実行']
$__v1["初期設定実行"]=(function(){
global $nako3, $__v0, $__v1, $__v2;
  $__locals = ['それ'=>''];
  ;$__v0['line']="l73:api.nako3";
  $__locals["それ"] = $__v0["PDO生成"]((("sqlite:" . $__v2["メインDB"]) . ""),$nako3);
  ;;$__v0['line']="l74:api.nako3";
  
  return ($__locals["それ"]);
});
;//[/DEF_FUNC name='初期設定実行']
//[DEF_FUNC name='エラー表示']
$__v1["エラー表示"]=(function(){
global $nako3, $__v0, $__v1, $__v2;
  $__locals = ['それ'=>''];
  $__locals["S"] = func_get_arg(0);
  ;$__v0['line']="l77:api.nako3";
  $__v0["ヘッダ設定"]("Content-Type: application/json",$nako3);
  ;;$__v0['line']="l78:api.nako3";
  $__locals["それ"] = $__v0["JSONエンコード"](["result" => "error","reason" => $__locals["S"]],$nako3);
  /*[sore]*/ $__v0["表示"]($__locals["それ"],$nako3);
  ;;$__v0['line']="l79:api.nako3";
  
  return ($__locals["それ"]);
});
;//[/DEF_FUNC name='エラー表示']
//[DEF_FUNC name='成功表示']
$__v1["成功表示"]=(function(){
global $nako3, $__v0, $__v1, $__v2;
  $__locals = ['それ'=>''];
  $__locals["S"] = func_get_arg(0);
  ;$__v0['line']="l82:api.nako3";
  $__v0["ヘッダ設定"]("Content-Type: application/json",$nako3);
  ;;$__v0['line']="l83:api.nako3";
  $__locals["それ"] = $__v0["JSONエンコード"](["result" => "ok","value" => $__locals["S"]],$nako3);
  /*[sore]*/ $__v0["表示"]($__locals["それ"],$nako3);
  ;;$__v0['line']="l84:api.nako3";
  
  return ($__locals["それ"]);
});
;//[/DEF_FUNC name='成功表示']

    // <require_once src="plugin_system">
    $mod_file = __DIR__.'/src/plugin_system.php';
    if (defined('PHPNAKO_RUNTIME_PATH')) {
      $mod_file = PHPNAKO_RUNTIME_PATH.'/plugin_system.php';
    }
    if (empty($nako3['__module']['plugin_system'])) {
      require_once $mod_file;
      $nako3['__module']['plugin_system'] = $exports;
      foreach ($exports as $name => $v) { // import to v0
        if ($v['type'] == 'func') { $__v0[$name] = $v['fn']; }
        else { $__v0[$name] = $v['value']; }
      }
    }
    // </require_once>
    
    // <require_once src="plugin_node">
    $mod_file = __DIR__.'/src/plugin_node.php';
    if (defined('PHPNAKO_RUNTIME_PATH')) {
      $mod_file = PHPNAKO_RUNTIME_PATH.'/plugin_node.php';
    }
    if (empty($nako3['__module']['plugin_node'])) {
      require_once $mod_file;
      $nako3['__module']['plugin_node'] = $exports;
      foreach ($exports as $name => $v) { // import to v0
        if ($v['type'] == 'func') { $__v0[$name] = $v['fn']; }
        else { $__v0[$name] = $v['value']; }
      }
    }
    // </require_once>
    
    // <require_once src="plugin_php">
    $mod_file = __DIR__.'/src/plugin_php.php';
    if (defined('PHPNAKO_RUNTIME_PATH')) {
      $mod_file = PHPNAKO_RUNTIME_PATH.'/plugin_php.php';
    }
    if (empty($nako3['__module']['plugin_php'])) {
      require_once $mod_file;
      $nako3['__module']['plugin_php'] = $exports;
      foreach ($exports as $name => $v) { // import to v0
        if ($v['type'] == 'func') { $__v0[$name] = $v['fn']; }
        else { $__v0[$name] = $v['value']; }
      }
    }
    // </require_once>
    
    // パスなどの設定
    $__v0['母艦パス'] = __DIR__;
    //-----------------------------------------------
    // 変換コード
    try {
    $__v0['line']="l0:api.nako3";;$__v0['line']="l1:api.nako3";//undefined
;;$__v0['line']="l2:api.nako3";//# 各種設定
;$__v2["アプリタイトル"]="なでしこ3API - Key-Valueストア";
;$__v0['line']="l3:api.nako3";
;$__v2["DB保存フォルダ"]=(("" . $__v0["母艦パス"]) . "/db");
;$__v0['line']="l4:api.nako3";
;$__v2["メインDB"]=(("" . $__v2["DB保存フォルダ"]) . "/db1.sqlite3");
;$__v0['line']="l5:api.nako3";
;$__v2["最大キー"]=2000;
;$__v0['line']="l6:api.nako3";//# 保存可能なキーの数を定義
;$__v2["最大値文字数"]=((1024 * 1024) * 3);
;;$__v0['line']="l7:api.nako3";//#3MB以上のデータは保存できない
$__v2["それ"] = $__v1["初期設定実行"]($nako3);
;;$__v0['line']="l8:api.nako3";
;$__v0['line']="l9:api.nako3";
;$__v0['line']="l10:api.nako3";//# パラメータ取得
$__v2["それ"] = $__v0["GET取得"]("mode","",$nako3);
;$__v2["MODE"]=$__v2["それ"];
;;$__v0['line']="l11:api.nako3";
$__v2["それ"] = $__v0["GET取得"]("key","",$nako3);
;$__v2["KEY"]=$__v2["それ"];
;;$__v0['line']="l12:api.nako3";
$__v2["それ"] = $__v0["GET取得"]("value","",$nako3);
;$__v2["VALUE"]=$__v2["それ"];
;;$__v0['line']="l13:api.nako3";
$__v2["それ"] = $__v0["GET取得"]("password","",$nako3);
;$__v2["PW"]=$__v2["それ"];
;;$__v0['line']="l14:api.nako3";
;$__v0['line']="l15:api.nako3";
;$__v0['line']="l16:api.nako3";//# 値チェック
$__v0['line']="l16:api.nako3";if (($__v2["それ"] = $__v0["文字数"]($__v2["KEY"],$nako3) > 1024)) {
  ;$__v0['line']="l17:api.nako3";
$__v2["それ"] = $__v1["エラー表示"]("keyの文字数が1024を超えています。",$nako3);
;$__v0["終"]($nako3);
;;$__v0['line']="l18:api.nako3";

};
;$__v0['line']="l18:api.nako3";
;$__v0['line']="l19:api.nako3";
$__v0['line']="l19:api.nako3";if (($__v2["それ"] = $__v0["文字数"]($__v2["VALUE"],$nako3) > $__v2["最大値文字数"])) {
  ;$__v0['line']="l20:api.nako3";
$__v2["それ"] = $__v1["エラー表示"]((("valueの文字数が" . $__v2["最大値文字数"]) . "を超えています。"),$nako3);
;$__v0["終"]($nako3);
;;$__v0['line']="l21:api.nako3";

};
;$__v0['line']="l21:api.nako3";
;$__v0['line']="l22:api.nako3";
;$__v0['line']="l23:api.nako3";
;$__v0['line']="l24:api.nako3";//# MODEで分岐
$__v0['line']="l24:api.nako3";if (($__v2["MODE"] == "get")) {
  ;$__v0['line']="l25:api.nako3";
$__v2["それ"] = $__v1["取得処理"]($nako3);
;;$__v0['line']="l26:api.nako3";

}else {$__v0['line']="l26:api.nako3";if (($__v2["MODE"] == "set")) {
  ;$__v0['line']="l27:api.nako3";
$__v2["それ"] = $__v1["設定処理"]($nako3);
;;$__v0['line']="l28:api.nako3";

}else {;$__v0['line']="l29:api.nako3";
$__v2["それ"] = $__v1["エラー表示"]("指定のmodeがありません。",$nako3);
;;$__v0['line']="l30:api.nako3";
};
;
};
;
;$__v0['line']="l30:api.nako3";
;$__v0['line']="l31:api.nako3";
;$__v0['line']="l32:api.nako3";
;;$__v0['line']="l46:api.nako3";
;$__v0['line']="l47:api.nako3";
;;$__v0['line']="l66:api.nako3";
;$__v0['line']="l67:api.nako3";
;;$__v0['line']="l71:api.nako3";
;$__v0['line']="l72:api.nako3";
;;$__v0['line']="l75:api.nako3";
;$__v0['line']="l76:api.nako3";
;;$__v0['line']="l80:api.nako3";
;$__v0['line']="l81:api.nako3";
;;$__v0['line']="l85:api.nako3";
;$__v0['line']="l86:api.nako3";
;//---

    } catch (Exception $err) {
        $ninfo = $nako3['__varslist'][0]['line'];
        echo "<pre> [PHP実行時エラー] ($ninfo)
";
        print_r($err);
    }
    //-----------------------------------------------
    