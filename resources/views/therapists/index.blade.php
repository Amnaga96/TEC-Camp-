
<form action="{{ url('therapists') }}" method="get">
    name: <input type="text" name="name"><br>
    city: <input type="text" name="city"><br>
    clinics:
    <select name="clinic_id">
        <option value="">-- select --</option>
        @foreach ($clinics as $clinic)
            <option value="{{ $clinic->id }}">{{ $clinic->name }}</option>
        @endforeach
    </select>
    <input type="submit">
</form>
@foreach ($therapists as $consulter)
    {{ $consulter->name }}
    <br>
@endforeach
