<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/articles/style.css')}}">
    
  </head>

  <body>
  <!--the CONTAINER-->
  <div class="container">
    <!--the row container-->
    <div class="row">
      <div class="col-md-8" >

        <!--THE COL 1-->
           <div style="margin-bottom: 50px; margin-top: 50px;" class="col-md-3 profile box" >
            <aside>
              <img src="{{asset($articles->image_link)}}"  width="300px" alt="{{$articles->title }}" class="img">
              <h4 style="margin-top: 10px;" >Stress</h4>
              <p>Author: {{$articles->editor_name }} </p>
              <hr>
            </aside>
          </div>
        
        <!--THE COL 2-->
        <div style=" margin-top: 70px;" class="col-md-3 ml-auto">
             <header>
               <h2 class="article-title">{{$articles->title }}</h2>
             </header>
             <footer><small>{{$articles->updated_at}}</small></footer>
             <br>
             <div class="lead">{{$articles->body}} <hr> </div>   
        </div>
      </div>
    </div>
  </div>


      <div class="mb-5">
          <h3 class="h5 text-black mb-3 sub_article"><strong>You may also like to see</strong></h3>
          <ul class="list-unstyled">
              <li class="mb-2"><a href="{{route('show',['article'=> $articles[0]->id])}}">An article</a></li>
              <li class="mb-2"><a href="{{route('show',['article'=> $articles[1]->id])}}">Another trend article</a></li>
              <li class="mb-2"><a href="{{route('show',['article'=> $articles[0]->id])}}">NEW cool article</a></li>
          </ul>
      </div>
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>