


<!DOCTYPE html>
<html>
<head>
    <title>Llamada a API desde index.php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
          <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4">Simple header</span>
          </a>

          <ul class="nav nav-pills">
            <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link">About</a></li>
          </ul>
        </header>
  </div>
    <div class="container">

        <div class="mb-3">
            <label>Juegos</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                              
                    @foreach ($juegos as $juego)
                        <option value="{{ $juego['id'] }}">{{ $juego['name'] }}</option>
                    @endforeach
               
            </select>
        </div>
        
        <div class="mb-3">
            <label>Generos:</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                
                                   
                    @foreach ($generos as $genero)
                        <option value="{{$genero}}"> {{$genero["name"]}}</option>
                    
                    @endforeach
                
            </select>
        </div>
        
        <div class="mb-3">
            <label>Plataformas:</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                
                                    
                    @foreach ($plataformas as $plataforma)
                        <option value="{{$plataforma}}">{{$plataforma["name"]}}</option>
                    
                    @endforeach
               
            </select>
        </div>
        
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>




