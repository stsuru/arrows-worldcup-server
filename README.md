arrows-worldcup-server
======================

## 環境構築
1. Debian 7.5<br>
[ここから入手](http://cdimage.debian.org/debian-cd/7.5.0/amd64/iso-cd/debian-7.5.0-amd64-netinst.iso)。実機に入れるなり、VMを作成するなりする。

2. Apache 2.2.2<br>
debianにapt-get等を使ってインストール。[ここを参考にインストール](http://www.bnote.net/kuro_box/kuro_debian_apache2.shtml)

3. .htaccessを使えるようにする。<br>
[ここを参考に設定](http://d.hatena.ne.jp/cltea/20091113/p1)

4. Gitのインストール<br>
debianにapt-getを使ってインストール。[ここを参考にインストール](http://git-scm.com/book/ja/使い始める-Gitのインストール)

5. cd /var/www/<br>
コマンドを実行し、ディレクトリを移動。

6. git clone https://github.com/fisproject/arrows-worldcup-server.git<br>
を実行し、ソースコードを取得。

7. git checkout -b feature/fuelphp origin/feature/fuelphp<br>
を実行し、branchを変更

8. cd ArrowsWorldCup/<br>
コマンドを実行し、ディレクトリを移動。

9. php oil refine install<br>
コマンドを実行し、実行権限を変更する。

10. apachectl start<br>
コマンドを実行し、Apacheを起動する。<br>

## 実行

1. ブラウザを起動。

2. URL「http://localhost/arrows-worldcup-server/ArrowsWorldCup/public/api/companies」を入力。

3. URL「http://localhost/arrows-worldcup-server/ArrowsWorldCup/public/api/complimentary」を入力。

4. URL「http://localhost/arrows-worldcup-server/ArrowsWorldCup/public/api/complimentary_example」を入力。

5. URL「http://localhost/arrows-worldcup-server/ArrowsWorldCup/public/api/question」を入力。

6. URL「http://localhost/arrows-worldcup-server/ArrowsWorldCup/public/api/stock_value」を入力。
