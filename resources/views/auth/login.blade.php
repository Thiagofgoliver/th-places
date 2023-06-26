<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Design by foolishdeveloper.com -->
    <title>THPLACES</title>
     <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{url('/')}}/css/style.css">
    
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #2D6A7D;;
}


    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 col-10 offset-1 p-3 mt-5">
                <div class="card bg-turquesa sombra tamanho-card">
                    <div class="card-body">
                        <form class="w-100" method="post" action="{{route('login')}}">
                            @csrf
                    <p><img src="images/logo-projeto.png " width="200" alt=""></p>    
                
                        <label for="username">nome</label>
                        <input class="form-control" type="text" placeholder="Email ou senha" id="username">
                
                        <label for="password" >senha</label>
                        <input class="form-control" type="password" placeholder="Password" id="password">

                            <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">salvar login</label>
                            </div>
                        
             
                          <a href="{{route('principal')}}"><button type="button" class="btn btn-primary">avançar</button></a>
                          
                          <a href="{{route('register')}}"><p>cadastre-se</p></a>
                
                    </form> 
                     
                    </div>
                </div>
              

            </div>
        </div>
    </div>
   


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
      </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
      </script>
</body>
</html>
