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
      <center>
@foreach ($training as $trainings)
<a href="/menuselect?id={{ $trainings->userid }}">{{$trainings->name }}</a>
<br>
@endforeach
</center>
<main id="main">

</main>

<aside id="sub">
  <ul>管理者
    <li>ダッシュボード</li>
    <li><a href="/client">クライアント一覧</a></li>
    <li>プログラム</li>
    <li>オリジナル作成</li>
    <li>アカウント </li>
    <li>ログアウト</li>
  </ul>
</aside>
</body>
</html>
