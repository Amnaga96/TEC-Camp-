
<form action="{{ url('therapists') }}" method="get">
    name: <input type="text" name="name"><br>
    city: <input type="text" name="city"><br>
    <input type="submit">
</form>
@foreach ($therapists as $consulter)
    {{ $consulter->name }}
    <br>
@endforeach
