## 目次

1. [プロジェクトについて](#プロジェクトについて)
2. [環境](#環境)
3. [ディレクトリ構成](#ディレクトリ構成)



## プロジェクトについて

HTMLやPHPを用いて何かサービスをひとつ形にする

大学の出席確認を生徒目線でも教授目線でもどちらにおいてもより快適にすることを目標に、
生徒は座席確認から出席確認まで行けるシステムを開発。
教授はログインした生徒の学籍番号がサイトに表示される。

## 環境

<!-- 言語を記載 -->

| 言語・フレームワーク  
| --------------------- | 
| HTML                  | 
| CSS                   | 
| JavaScript            | 
| PHP                   | 


## ディレクトリ構成

生徒用
1.table.html　  座席表画面
2.input.php    パスワード入力画面
3.finish.html  出席完了画面
4.until.html   出席未完了画面

教授用
1.professor.php   出席者確認画面

パスワード 01234

出席の流れ
1.table.htmlで自身の座席を確認後、学籍番号をクリックするとinput.phpにとぶ
2.input.phpにてパスワードと学籍番号を入力
3.パスワードがあっていれば出席完了となりfinish.htmlに、間違っていればuntil.htmlにとぶ
4.finish.htmlにて戻るボタンを押せば座席画面に戻る。until.htmlで戻るボタンを押すとパスワード入力画面に戻る。

出席確認の流れ
1.professor.phpに出席者の学籍番号が羅列されていく。
2.全員確認後、リセットボタンを押すことで白紙に戻すことができる。

