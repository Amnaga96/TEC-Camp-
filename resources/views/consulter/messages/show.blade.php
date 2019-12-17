<h3>{{ $msg->title }}</h3>

<p>{{  $msg->body }}</p>

<h4>Add reply:</h4>
<form action="{{  url("/messages/{$msg->id}/replies") }}" method="psot">
    <textarea name="reply" cols="30" rows="10"></textarea>
    <input type="submit">
</form>
