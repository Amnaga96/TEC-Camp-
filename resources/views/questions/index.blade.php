><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <table class="table table-sm">
        <thead>
          <tr>
            
            <th scope="col">question title</th>
            <th scope="col">time</th>
            <th scope="col">more details</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($questions as $question)
          <tr>
            <td>{{ $question->title }}</td>
            <td>{{ $question->created_at }}</td>
            {{-- <td>{{ $question->body }}</td> --}}
          <td><a href="{{url('/show')}}">more details</a></td>

          </tr>
        @endforeach
          
        </tbody>
      </table>
   
      
   
    
        
    
</body>
</html>