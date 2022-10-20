<?php
    
include "conexao.php";

$buscar_pessoas = "SELECT * FROM usuarios";
$query_pessoas = mysqli_query($conection, $buscar_pessoas);

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>Minha Lista</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="lista.css"/>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Lista de Cadastro</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Dropdown
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">
              Pesquisar
            </button>
          </form>
        </div>
      </div>
    </nav>
    <div class="container">
      <br />
      <table class="table">
        <thead class="table-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">NOME</th>
            <th scope="col">E-MAIL</th>
            <th scope="col">TELEFONE</th>
            <th scope="col">SENHA</th>
            <th scope="col">AÇÕES</th>

          </tr>
        </thead>
        <tbody>
            <?php
                while($receber_pessoas = mysqli_fetch_array($query_pessoas)){

                  $id = $receber_pessoas['id'];
                  $nome = $receber_pessoas['nome'];
                  $email = $receber_pessoas['email'];
                  $telefone = $receber_pessoas['telefone'];
                  $senha = $receber_pessoas['senha'];  
            ?>
          <tr >
          <form action="editar.php" method="post">
            <th scope="row"><?php echo $id; ?></th>-
            <td><input type="text" name="nome" value="<?php echo $nome; ?>"></td>
            <td><input type="text" name="email" value="<?php echo $email; ?>"></td>
            <td><input type="text" name="telefone" value="<?php echo $telefone; ?>"></td>
            <td><input type="text" name="senha" value="<?php echo $senha; ?>"></td>
            <td class="crud">
              <input type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" value= "Editar">
              <input type="hidden" name="id" value="<?php echo $id; ?>">
            </form>
            <form action="excluir.php" method="post">
            <input type="submit" class="btn btn-danger" value="Excluir">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
                </form>
            </td>
          </tr>
          
          <?php
                };
          ?>
          
        </tbody>
      </table>
    </div>
    <br />

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
      crossorigin="anonymous"
    ></script>
    <script src="editar.js"></script>
  </body>
</html>
