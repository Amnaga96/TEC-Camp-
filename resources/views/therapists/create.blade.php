<form action="{{ url('find/store') }}" method="post">
    @csrf
    <input type="text" name="name"> <br>
    <input type="email" name="email"> <br>
    <input type="password" name="password"> <br>
    <button type="submit">add!</button>
</form>
