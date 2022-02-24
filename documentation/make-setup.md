
# Makeコマンド　セットアップ

## 1. インストーラーをダウンロード  
http://gnuwin32.sourceforge.net/packages/make.htm

![ダウンロードサイト](./img/make-setup/download.png) 

## 2. ダウンロードした実行ファイルを実行
![ダウンロードサイト](./img/make-setup/setup1.png)
![ダウンロードサイト](./img/make-setup/setup2.png) 
![ダウンロードサイト](./img/make-setup/setup3.png) 
![ダウンロードサイト](./img/make-setup/setup4.png) 
![ダウンロードサイト](./img/make-setup/setup5.png) 
![ダウンロードサイト](./img/make-setup/setup6.png) 
![ダウンロードサイト](./img/make-setup/setup7.png) 
![ダウンロードサイト](./img/make-setup/setup8.png) 

## 3. Makeのパスを設定

コントロールパネル → システムとセキュリティ → システム → システムの詳細設定 → 環境変数

1. 「環境変数」と検索し、「システム環境変数」の編集を選択  
※「環境変数を編集」ではない   
![](./img/make-setup/環境変数1.png) 
2. 環境変数を選択  
![](./img/make-setup/環境変数2.png) 
3. 「システム環境変数」の枠の中にある「Path」を選択し「編集」をクリック  
![](./img/make-setup/環境変数3.png) 
4. 「新規」→「C:\Program Files (x86)\GnuWin32\bin」→「OK」  
![](./img/make-setup/環境変数4.png) 

5. のこりすもすべてOKをクリック
7. VSCode上の左の拡張機能アイコンから、「Makefile Tools」をインストール。  
![](./img/make-setup/環境変数5.png) 
8. 「control + J」でターミナルを開き、```make --version```と打ち、バージョンが表示されたら問題なくインストールできました。