

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<div class="container">
    {!! Form::open(['myforms'=>'MyFormController@store']) !!}
    <br>
{{Form::label('title','Main Title')}}
{{Form::text("title","",['class'=>'form-control'])}}
<br>
{{Form::label('description','Main Description')}}<br>
{{ Form::textarea('description','')}}
{{-- {{Form::select('size', array('L' => 'Large', 'S' => 'Small'))}} --}}
{{-- {{Form::selectMonth('month')}} --}}
<br>
<br>
{{Form::submit("Send",['class'=>'btn btn-success'])}}
{!!Form::close()!!}
</div>
    
