<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SISTEMA WEB </title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar bg-primary" data-bs-theme="dark">
   <div class="row">
     <div class="col">
      <div class="container-fluid">
        <a class="navbar-brand nav-text" href="#">SISTEMA WEB</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Cadrastar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Consultar</a>
            </li>
          </ul>
        </div>
      </div>
     </div>
   </div>
  </nav>
  <br>
  <div class="row">
    <div class="col">
      <br>
      <h4 class="h5-text"> Cadastrar - Agendamento de Potenciais Clientes</h4>
      <h6 class="p-text">Sistema ultilizado para Agendamento de serviços.</h6>
      <form class="form-text form-caixa" method="POST">
        <br>
        <h6>Nome:</h6>
        <input class=" form-control  " type=" text " id=" txtNome "> </input>
        <br>
        <h6> Telefone: </h6>
        <input class=" form-control " type=" text " id=" txtNome " placeholder="(xx)xxxxx-xxxx " autofocus></input>
        </div>
        <br>
        <h6>Origem:</h6>
        <select class="form-select" aria-label="Default select example">
          <option selected>Celular</option>
        </select>
        <br>
        <h6>Data de Contato:</h6>
        <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </input>
        <br>
        <h6>Observação:</h6>
        <textarea class="form-control" placeholder="" id="floatingTextareaDisabled"></textarea>
        <label for="floatingTextarea2"></label>
        <br>
        <button type="button" class="btn btn-primary " data-bs-toggle="button" aria-pressed="true">Cadrastar</button>
      
      </form>
    </div>
  </div>





</body>

</html>