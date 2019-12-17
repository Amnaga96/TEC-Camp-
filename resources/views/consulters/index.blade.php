<form action="{{ url('consulters') }}" method="get">
    name: <input type="text" name="name"><br>
    city: <input type="text" name="city"><br>
    <input type="submit">
</form>
@foreach ($consulters as $consulter)
    {{ $consulter->name }}
    <br>
@endforeach
