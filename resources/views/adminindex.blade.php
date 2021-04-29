<!DOCTYPE html>
<style>
body {
  margin: 0;
  padding: 0;
}
#header {
  box-sizing: border-box;
  background: #ccc;
  height: 50px;
}
#main {
  box-sizing: border-box;
  margin-left: 220px;
  padding: 20px 40px;
}
#sub {
  box-sizing: border-box;
  top: 50px;
  height: 100%;
  width: 220px;
  position: fixed;
  overflow: auto;
  background: #eee;
  padding: 20px;
}
</style>

<html>
    <body>
        <header id="header"></header>



<aside id="sub">
  <ul>
    {{substr(auth()->user()->name,5,strlen(auth()->user()->name))}}
    <li>ダッシュボード</li>
    <li><a href="/client">クライアント一覧</a></li>
    <li><a href="/proguramu">プログラム</a></li>
    <li>オリジナル作成</li>
    <li>アカウント </li>
    <li>ログアウト</li>
  </ul>
</aside>

</body>
</html>
