<!DOCTYPE html>
<html>
    <body>
        <form method="POST" action="/a">
@foreach ($training as $trainings)
<tr>
 <input type="checkbox" name="training[]" value="{{$trainings->menuid}}">
<img src="{{$trainings->imgurl}}" width="314" height="229" border="0">
{{$trainings->trainingname }}
<br>
重さ<input type="number" name="weight" step="10">kg<br>
回数<input type="number" name="times" step="10">×<input type="number" name="set">
<br>
@endforeach
 <input type="date" name="date">
 <input type="submit" value="メニュー追加">
 </form>
</body>
</html>
