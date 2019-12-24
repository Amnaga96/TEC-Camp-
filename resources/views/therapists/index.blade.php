
<form action="{{ url('therapists') }}" method="get">
  name: <input type="text" name="name"  style="border: 1px solid #86e2d5;"><br> 
  city: <input type="text" name="city"   style="border: 1px solid #86e2d5;"><br>
  clinics:
    <select  style="border: 1px solid #86e2d5;" name="clinic_id">
        <option value="" >-- select --</option>
        @foreach ($clinics as $clinic)
            <option value="{{ $clinic->id }}">{{ $clinic->name }}</option>
        @endforeach
    </select>
   <input type="submit" value="send">
</form>

@foreach ($therapists as $consulter)
            <li class="text-info">{{ $consulter->name }}</li>
@endforeach

