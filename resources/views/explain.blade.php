<!DOCTYPE html>
<html>
    <body>
@foreach ($training as $trainings)
<h2>{{$trainings->trainingname}}</h2><br>

<iframe src="{{$trainings->videourl}}"></iframe>
<br>
<h2>回数</h2>
{{$trainings->weight}}kg {{$trainings->times}}×{{$trainings->set}}
<br>
<h2>ターゲット</h2>
<br>           
{{$trainings->target}}
<h2>方法</h2>
<?php
 echo $trainings->form
 ?>
<br>
<h2>注意点</h2><br>  
{{$trainings->point}}
@endforeach

</body>
</html>
