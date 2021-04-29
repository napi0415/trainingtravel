<!DOCTYPE html>
<html>
    <body>
@foreach ($training as $trainings)
<tr>
<img src="{{$trainings->imgurl}}" width="314" height="229" border="0">
<a href="/exp?id={{ $trainings->menuid }}">{{$trainings->trainingname }}</a>
<br>
@endforeach

</body>
</html>
