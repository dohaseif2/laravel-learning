<form method="post" action="{{route('receive',['id'=>123])}}">
    {{ csrf_field() }}
    <input type="submit" value="ok">
</form>

