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
//[DEF_FUNC name='作成処理']
$__v1["作成処理"]=(function(){
global $nako3, $__v0, $__v1, $__v2;
  $__locals = ['それ'=>''];
  ;$__v0['line']="l46:admin.nako3";
  ;$__v0['line']="l47:admin.nako3";//# パラメータ確認
  $__v0['line']="l47:admin.nako3";if ((($__v2["PW"] == "") || ($__v2["KEY"] == ""))) {
    ;$__v0['line']="l48:admin.nako3";
  $__locals["それ"] = $__v1["エラー表示"]("keyとpasswordが必要です",$nako3);
  ;$__v0["終"]($nako3);
  ;;$__v0['line']="l49:admin.nako3";
  
  };
  ;$__v0['line']="l49:admin.nako3";
  ;$__v0['line']="l50:admin.nako3";
  ;$__locals["PWハッシュ"]=$__locals["それ"] = $__v1["PWハッシュ取得"]($__v2["PW"],$nako3);
  ;;$__v0['line']="l51:admin.nako3";
  $__locals["それ"] = $__v0["PDO一行取得"]("SELECT * FROM items WHERE key=?",[$__v2["KEY"]],$nako3);
  ;;$__v0['line']="l52:admin.nako3";
  $__v0['line']="l52:admin.nako3";if ($__locals["それ"]) {
    ;$__v0['line']="l53:admin.nako3";
  $__locals["それ"] = $__v1["エラー表示"]("既にkeyが存在しています。",$nako3);
  ;$__v0["終"]($nako3);
  ;;$__v0['line']="l54:admin.nako3";
  
  };
  ;$__v0['line']="l54:admin.nako3";
  ;$__v0['line']="l55:admin.nako3";
  ;$__v0['line']="l56:admin.nako3";//# 生成
  ;$__locals["T"]=$__locals["それ"] = $__v0["システム時間"]($nako3);
  ;;$__v0['line']="l57:admin.nako3";
  $__locals["それ"] = $__v0["PDO実行"]("INSERT INTO items (key,value,password,ctime,mtime) VALUES (?,?,?,?,?)",[$__v2["KEY"],$__v2["VALUE"],$__locals["PWハッシュ"],$__locals["T"],$__locals["T"]],$nako3);
  ;;$__v0['line']="l58:admin.nako3";
  $__locals["それ"] = $__v1["画面表示"]((("キー:" . $__v2["KEY"]) . ""),"作成完了。<a href=\"index.php\">→戻る</a>",$nako3);
  ;;$__v0['line']="l59:admin.nako3";
  
  return ($__locals["それ"]);
});
;//[/DEF_FUNC name='作成処理']
//[DEF_FUNC name='取得処理']
$__v1["取得処理"]=(function(){
global $nako3, $__v0, $__v1, $__v2;
  $__locals = ['それ'=>''];
  ;$__v0['line']="l62:admin.nako3";
  ;$__v0['line']="l63:admin.nako3";//# パラメータ確認
  $__v0['line']="l63:admin.nako3";if ((($__v2["PW"] == "") || ($__v2["KEY"] == ""))) {
    ;$__v0['line']="l64:admin.nako3";
  $__locals["それ"] = $__v1["エラー表示"]("keyとpasswordが必要です",$nako3);
  ;$__v0["終"]($nako3);
  ;;$__v0['line']="l65:admin.nako3";
  
  };
  ;$__v0['line']="l65:admin.nako3";
  ;$__v0['line']="l66:admin.nako3";
  ;$__locals["PWH"]=$__locals["それ"] = $__v1["PWハッシュ取得"]($__v2["PW"],$nako3);
  ;;$__v0['line']="l67:admin.nako3";
  $__locals["それ"] = $__v0["PDO一行取得"]("SELECT * FROM items WHERE key=? AND password=?",[$__v2["KEY"],$__locals["PWH"]],$nako3);
  ;;$__v0['line']="l68:admin.nako3";
  $__v0['line']="l68:admin.nako3";if ($__locals["それ"]) {
    ;$__v0['line']="l69:admin.nako3";
  ;$__v2["VALUE"]=$__locals["それ"]["value"];
  ;$__v0['line']="l70:admin.nako3";
  $__locals["それ"] = $__v0["HTML埋込"]((("\n            <div>\n            	<div>" . $__v2["KEY"]) . "の値:</div>\n            	<div class=\"vcode\"><code>[[CODE]]</code></div>\n            </div>\n            <div><br><a href=\"index.php\">→戻る</a></div>\n             "),["CODE" => $__v2["VALUE"],"KEY" => $__v2["KEY"]],$nako3);
  ;$__v0['line']="l76:admin.nako3";$__locals["MSG"]=$__locals["それ"];
  ;;$__v0['line']="l77:admin.nako3";
  $__locals["それ"] = $__v1["画面表示"]((("キー『" . $__v2["KEY"]) . "』の値"),$__locals["MSG"],$nako3);
  ;;$__v0['line']="l78:admin.nako3";
  
  }else {;$__v0['line']="l79:admin.nako3";
  $__locals["それ"] = $__v1["エラー表示"]("見つかりません。",$nako3);
  ;;$__v0['line']="l80:admin.nako3";
  };
  ;
  ;$__v0['line']="l80:admin.nako3";
  ;$__v0['line']="l81:admin.nako3";
  
  return ($__locals["それ"]);
});
;//[/DEF_FUNC name='取得処理']
//[DEF_FUNC name='設定処理']
$__v1["設定処理"]=(function(){
global $nako3, $__v0, $__v1, $__v2;
  $__locals = ['それ'=>''];
  ;$__v0['line']="l84:admin.nako3";
  ;$__v0['line']="l85:admin.nako3";//# パラメータ確認
  $__v0['line']="l85:admin.nako3";if ((($__v2["PW"] == "") || ($__v2["KEY"] == ""))) {
    ;$__v0['line']="l86:admin.nako3";
  $__locals["それ"] = $__v1["エラー表示"]("keyとpasswordが必要です",$nako3);
  ;$__v0["終"]($nako3);
  ;;$__v0['line']="l87:admin.nako3";
  
  };
  ;$__v0['line']="l87:admin.nako3";
  ;$__v0['line']="l88:admin.nako3";
  ;$__locals["PWH"]=$__locals["それ"] = $__v1["PWハッシュ取得"]($__v2["PW"],$nako3);
  ;;$__v0['line']="l89:admin.nako3";
  $__locals["それ"] = $__v0["PDO一行取得"]("SELECT * FROM items WHERE key=? AND password=?",[$__v2["KEY"],$__locals["PWH"]],$nako3);
  ;;$__v0['line']="l90:admin.nako3";
  $__v0['line']="l90:admin.nako3";if ($__locals["それ"]) {
    ;$__v0['line']="l91:admin.nako3";
  ;$__locals["T"]=$__locals["それ"] = $__v0["システム時間"]($nako3);
  ;;$__v0['line']="l92:admin.nako3";
  ;$__locals["CNT"]=$__locals["それ"] = $__v0["PDO実行"]("UPDATE items SET value=?,mtime=? WHERE key=? AND password=?",[$__v2["VALUE"],$__locals["T"],$__v2["KEY"],$__locals["PWH"]],$nako3);
  ;;$__v0['line']="l93:admin.nako3";
  $__v0['line']="l93:admin.nako3";if (($__locals["CNT"] >= 1)) {
    ;$__v0['line']="l94:admin.nako3";
  $__locals["それ"] = $__v1["画面表示"]((("値の更新完了: " . $__v2["KEY"]) . ""),"<a href=\"index.php\">更新完了。戻る</a>",$nako3);
  ;;$__v0['line']="l95:admin.nako3";
  
  }else {;$__v0['line']="l96:admin.nako3";
  $__locals["それ"] = $__v1["エラー表示"]("更新できません。",$nako3);
  ;$__v0["終"]($nako3);
  ;;$__v0['line']="l97:admin.nako3";
  };
  ;
  ;$__v0['line']="l97:admin.nako3";
  ;$__v0['line']="l98:admin.nako3";
  
  }else {;$__v0['line']="l99:admin.nako3";
  $__locals["それ"] = $__v1["エラー表示"]("見つかりません。",$nako3);
  ;$__v0["終"]($nako3);
  ;;$__v0['line']="l100:admin.nako3";
  };
  ;
  ;$__v0['line']="l100:admin.nako3";
  ;$__v0['line']="l101:admin.nako3";
  
  return ($__locals["それ"]);
});
;//[/DEF_FUNC name='設定処理']
//[DEF_FUNC name='PWハッシュ取得']
$__v1["PWハッシュ取得"]=(function(){
global $nako3, $__v0, $__v1, $__v2;
  $__locals = ['それ'=>''];
  $__locals["PW"] = func_get_arg(0);
  ;$__v0['line']="l104:admin.nako3";
  ;$__locals["パスワードSALT"]="NlHRYARkyJyofR3F";
  ;$__v0['line']="l105:admin.nako3";
  $__locals["それ"] = $__v0["ハッシュ値計算"](($__locals["PW"] . $__locals["パスワードSALT"]),"sha256","base64",$nako3);
  ;;$__v0['line']="l106:admin.nako3";
  
  return ($__locals["それ"]);
});
;//[/DEF_FUNC name='PWハッシュ取得']
//[DEF_FUNC name='初期設定実行']
$__v1["初期設定実行"]=(function(){
global $nako3, $__v0, $__v1, $__v2;
  $__locals = ['それ'=>''];
  ;$__v0['line']="l109:admin.nako3";
  ;$__locals["F"]=$__locals["それ"] = $__v0["存在"]($__v2["メインDB"],$nako3);
  ;$__v0['line']="l110:admin.nako3";
  $__locals["それ"] = $__v0["PDO生成"]((("sqlite:" . $__v2["メインDB"]) . ""),$nako3);
  ;;$__v0['line']="l111:admin.nako3";
  $__v0['line']="l111:admin.nako3";if (($__locals["F"] == $__v0["いいえ"])) {
    ;$__v0['line']="l112:admin.nako3";
  $__locals["それ"] = $__v0["PDO実行"]($__v2["初期化SQL"],[],$nako3);
  ;;$__v0['line']="l113:admin.nako3";
  
  };
  ;$__v0['line']="l113:admin.nako3";
  ;$__v0['line']="l114:admin.nako3";
  
  return ($__locals["それ"]);
});
;//[/DEF_FUNC name='初期設定実行']
//[DEF_FUNC name='フォーム画面']
$__v1["フォーム画面"]=(function(){
global $nako3, $__v0, $__v1, $__v2;
  $__locals = ['それ'=>''];
  ;$__v0['line']="l117:admin.nako3";
  $__locals["それ"] = $__v1["画面表示"]((("管理画面 - " . $__v2["アプリタイトル"]) . ""),"\n<h2>新規キーを作成しよう</h2>\n<div class=\"tool\">\n<form action=\"index.php\" method=\"GET\">\n<input type=\"hidden\" name=\"mode\" value=\"create\">\n<p><label>キー:<br><input type=\"text\" name=\"key\" value=\"test\"><label></p>\n<p><label>初期値:<br><input type=\"text\" name=\"value\" value=\"hoge\"></label></p>\n<p><label>パスワード:<br><input type=\"password\" name=\"password\" value=\"\"></label></p>\n<p><input type=\"submit\" value=\"作成\"></p>\n</form>\n</div>\n\n<h2>既存キーを取得しよう</h2>\n<div class=\"tool\">\n<form action=\"index.php\" method=\"GET\">\n<input type=\"hidden\" name=\"mode\" value=\"get\">\n<p><label>キー:<br><input type=\"text\" name=\"key\" value=\"test\"><label></p>\n<p><label>パスワード:<br><input type=\"password\" name=\"password\" value=\"abcd\"></label></p>\n<p><input type=\"submit\" value=\"検索\"></p>\n</form>\n</div>\n\n<h2>既存キーを設定しよう</h2>\n<div class=\"tool\">\n<form action=\"index.php\" method=\"GET\">\n<input type=\"hidden\" name=\"mode\" value=\"set\">\n<p><label>キー:<br><input type=\"text\" name=\"key\" value=\"test\"><label></p>\n<p><label>値:<br><input type=\"text\" name=\"value\" value=\"test\"><label></p>\n<p><label>パスワード:<br><input type=\"password\" name=\"password\" value=\"\"></label></p>\n<p><input type=\"submit\" value=\"更新\"></p>\n</form>\n</div>\n\n",$nako3);
  ;$__v0['line']="l150:admin.nako3";
  ;$__v0['line']="l151:admin.nako3";
  
  return ($__locals["それ"]);
});
;//[/DEF_FUNC name='フォーム画面']
//[DEF_FUNC name='エラー表示']
$__v1["エラー表示"]=(function(){
global $nako3, $__v0, $__v1, $__v2;
  $__locals = ['それ'=>''];
  $__locals["S"] = func_get_arg(0);
  ;$__v0['line']="l154:admin.nako3";
  $__locals["それ"] = $__v0["HTML埋込"]("<!DOCTYPE html><html><head>\n<meta charset=\"UTF-8\">\n<title>エラー - [[アプリタイトル]]</title>\n<link href=\"./res/index.css\" rel=\"stylesheet\">\n</head><body>\n<h1 class=\"error\">エラー</h1>\n<div class=\"box-error\">\n[[エラー]]\n</div>\n</body>\n",["エラー" => $__locals["S"],"アプリタイトル" => $__v2["アプリタイトル"]],$nako3);
  /*[sore]*/ $__v0["表示"]($__locals["それ"],$nako3);
  ;$__v0['line']="l167:admin.nako3";
  ;$__v0['line']="l168:admin.nako3";
  
  return ($__locals["それ"]);
});
;//[/DEF_FUNC name='エラー表示']
//[DEF_FUNC name='画面表示']
$__v1["画面表示"]=(function(){
global $nako3, $__v0, $__v1, $__v2;
  $__locals = ['それ'=>''];
  $__locals["TITLE"] = func_get_arg(0);
  $__locals["MSG"] = func_get_arg(1);
  ;$__v0['line']="l171:admin.nako3";
  $__locals["それ"] = $__v0["HTML埋込"]("\n<!DOCTYPE html><html><head>\n<meta charset=\"UTF-8\">\n<title>[[タイトル]] - [[アプリタイトル]]</title>\n<link href=\"./res/index.css\" rel=\"stylesheet\">\n</head><body>\n<h1>[[タイトル]]</h1>\n<div class=\"box\">\n[[メッセージ|raw]]\n</div>\n</body>\n",["タイトル" => $__locals["TITLE"],"メッセージ" => $__locals["MSG"],"アプリタイトル" => $__v2["アプリタイトル"]],$nako3);
  /*[sore]*/ $__v0["表示"]($__locals["それ"],$nako3);
  ;$__v0['line']="l186:admin.nako3";
  ;$__v0['line']="l187:admin.nako3";
  
  return ($__locals["それ"]);
});
;//[/DEF_FUNC name='画面表示']

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
    $__v0['line']="l0:admin.nako3";;$__v0['line']="l1:admin.nako3";//undefined
;;$__v0['line']="l2:admin.nako3";//# 各種設定
;$__v2["アプリタイトル"]="なでしこ3API - Key-Valueストア";
;$__v0['line']="l3:admin.nako3";
;$__v2["DB保存フォルダ"]=(("" . $__v0["母艦パス"]) . "/db");
;$__v0['line']="l4:admin.nako3";
;$__v2["メインDB"]=(("" . $__v2["DB保存フォルダ"]) . "/db1.sqlite3");
;$__v0['line']="l5:admin.nako3";
;$__v2["最大キー"]=2000;
;$__v0['line']="l6:admin.nako3";//# 保存可能なキーの数を定義
;$__v2["最大値文字数"]=((1024 * 1024) * 3);
;;$__v0['line']="l7:admin.nako3";//#3MB以上のデータは保存できない
;$__v2["初期化SQL"]="\nCREATE TABLE IF NOT EXISTS items (\n  id      INTEGER PRIMARY KEY,\n  key	  TEXT NOT NULL,\n  value TEXT DEFAULT '',\n  password TEXT DEFAULT '',\n  ctime INTEGER DEFAULT 0,\n  mtime INTEGER DEFAULT 0\n);\nCREATE UNIQUE INDEX items_key_index ON items (key);\n";
;$__v0['line']="l18:admin.nako3";
$__v2["それ"] = $__v1["初期設定実行"]($nako3);
;;$__v0['line']="l19:admin.nako3";
;$__v0['line']="l20:admin.nako3";
;$__v0['line']="l21:admin.nako3";//# パラメータ取得
$__v2["それ"] = $__v0["GET取得"]("mode","",$nako3);
;$__v2["MODE"]=$__v2["それ"];
;;$__v0['line']="l22:admin.nako3";
$__v2["それ"] = $__v0["GET取得"]("key","",$nako3);
;$__v2["KEY"]=$__v2["それ"];
;;$__v0['line']="l23:admin.nako3";
$__v2["それ"] = $__v0["GET取得"]("value","",$nako3);
;$__v2["VALUE"]=$__v2["それ"];
;;$__v0['line']="l24:admin.nako3";
$__v2["それ"] = $__v0["GET取得"]("password","",$nako3);
;$__v2["PW"]=$__v2["それ"];
;;$__v0['line']="l25:admin.nako3";
;$__v0['line']="l26:admin.nako3";
;$__v0['line']="l27:admin.nako3";//# 値チェック
$__v0['line']="l27:admin.nako3";if (($__v2["それ"] = $__v0["文字数"]($__v2["KEY"],$nako3) > 1024)) {
  ;$__v0['line']="l28:admin.nako3";
$__v2["それ"] = $__v1["エラー表示"]("keyの文字数が1024を超えています。",$nako3);
;$__v0["終"]($nako3);
;;$__v0['line']="l29:admin.nako3";

};
;$__v0['line']="l29:admin.nako3";
;$__v0['line']="l30:admin.nako3";
$__v0['line']="l30:admin.nako3";if (($__v2["それ"] = $__v0["文字数"]($__v2["VALUE"],$nako3) > $__v2["最大値文字数"])) {
  ;$__v0['line']="l31:admin.nako3";
$__v2["それ"] = $__v1["エラー表示"]((("valueの文字数が" . $__v2["最大値文字数"]) . "を超えています。"),$nako3);
;$__v0["終"]($nako3);
;;$__v0['line']="l32:admin.nako3";

};
;$__v0['line']="l32:admin.nako3";
;$__v0['line']="l33:admin.nako3";
;$__v0['line']="l34:admin.nako3";
;$__v0['line']="l35:admin.nako3";//# MODEで分岐
$__v0['line']="l35:admin.nako3";if (($__v2["MODE"] == "create")) {
  ;$__v0['line']="l36:admin.nako3";
$__v2["それ"] = $__v1["作成処理"]($nako3);
;;$__v0['line']="l37:admin.nako3";

}else {$__v0['line']="l37:admin.nako3";if (($__v2["MODE"] == "get")) {
  ;$__v0['line']="l38:admin.nako3";
$__v2["それ"] = $__v1["取得処理"]($nako3);
;;$__v0['line']="l39:admin.nako3";

}else {$__v0['line']="l39:admin.nako3";if (($__v2["MODE"] == "set")) {
  ;$__v0['line']="l40:admin.nako3";
$__v2["それ"] = $__v1["設定処理"]($nako3);
;;$__v0['line']="l41:admin.nako3";

}else {;$__v0['line']="l42:admin.nako3";
$__v2["それ"] = $__v1["フォーム画面"]($nako3);
;;$__v0['line']="l43:admin.nako3";
};
;
};
;
};
;
;$__v0['line']="l43:admin.nako3";
;$__v0['line']="l44:admin.nako3";
;$__v0['line']="l45:admin.nako3";
;;$__v0['line']="l60:admin.nako3";
;$__v0['line']="l61:admin.nako3";
;;$__v0['line']="l82:admin.nako3";
;$__v0['line']="l83:admin.nako3";
;;$__v0['line']="l102:admin.nako3";
;$__v0['line']="l103:admin.nako3";
;;$__v0['line']="l107:admin.nako3";
;$__v0['line']="l108:admin.nako3";
;;$__v0['line']="l115:admin.nako3";
;$__v0['line']="l116:admin.nako3";
;;$__v0['line']="l152:admin.nako3";
;$__v0['line']="l153:admin.nako3";
;;$__v0['line']="l169:admin.nako3";
;$__v0['line']="l170:admin.nako3";
;;$__v0['line']="l188:admin.nako3";
;$__v0['line']="l189:admin.nako3";
;//---

    } catch (Exception $err) {
        $ninfo = $nako3['__varslist'][0]['line'];
        echo "<pre> [PHP実行時エラー] ($ninfo)
";
        print_r($err);
    }
    //-----------------------------------------------
    