<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Yuri Lava-Jato - Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
  </head>
  <body style="background-color: lightgray;">
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="#">Yuri Lava-Jato</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="#">Área do cliente</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Serviços</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contato</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <section class="py-5" style="background-color: lightgray;">
      <div class="container">
        <div class="row d-flex">
          <div class=" align-items-stretch">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body">
                <h5 class="card-title">Faça login para realizar um agendamento.</h5>
                <form>
                  <div class="mb-3">
                    <label for="cpf" class="form-label">CPF:</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" required>
                  </div>
                  <div class="mb-3">
                    <label for="senha" class="form-label">Senha:</label>
                    <input type="password" class="form-control" id="senha" name="senha" required>
                  </div>
                  <button type="submit" class="btn btn-primary" style="background-color: #ffd043; color: black; border-color: black; width: 100%" onmouseover="this.style.backgroundColor='white'; this.style.color='black';" onmouseout="this.style.backgroundColor='#ffd043'; this.style.color='black';">ENTRAR</button>
                  <p>
                    Não tem uma conta? <a href="/singup">Cadastre-se agora!</a>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="bg-light py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h2>Entre em contato</h2>
            <p>Estamos prontos para atender você. Entre em contato conosco para agendar um serviço ou tirar suas dúvidas.</p>           
          </div>
          <div class="col-lg-4">
            <img src="img/contact.jpg" class="img-fluid" alt="Contato">
          </div>
          <div class="col-lg-4">
            <ul class="list-unstyled">
              <li>
                <strong>Endereço:</strong> Rua Principal, 123, Bairro Edla-Costa, Cruz das Almas
              </li>
              <li>
                <strong>Telefone:</strong> (11) 1234-5678
              </li>
              <li>
                <strong>Email:</strong> seu-email@gmail.com
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <footer class="bg-dark text-light text-center py-3">
      <div class="container">
        <span><a href="https://thiagosousa81.wordpress.com/" style="color: white">Thiago Sousa</a> - <a href="https://ebs-systems.epizy.com/" style="color: white">EBS Security Systems</a> © 2023. Todos os direitos reservados.</span>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>