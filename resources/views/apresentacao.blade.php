<!doctype html>
<html lang="pt-br">

<head>
  <title>Thplaces</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <!-- Biblioteca de ícones -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- CSS personalizado -->
  <link rel="stylesheet" href="{{url('/')}}/css/style.css">

</head>

<body class="pt-5 ">
  <header>
    <nav class="navbar navbar-expand-sm navbar-light fundo-azul fixed-top">

      <a class="navbar-brand ms-2" href="#"><img src="images/logo-projeto.png " width="100"></a>
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
          <li class="nav-item ">
            <a class="nav-link active" href="#" aria-current="page"><span class="visually-hidden">(current)</span></a>
          </li>
          <li class="nav-item">


            <a href="{{route('register')}}"><button type="button" class="btn btn-primary">cadastre-se</button></a>

            <a href="{{route('login')}}"><button type="button" class="btn btn-primary">Login</button></a>

          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- oque é thplaces -->
   <!-- oque é thplaces -->
   <main>




<aside>
    <figure>
        <section id="Texto e assunto oficial">
            <div class="container mt-5">

                <img src="images/logo-projeto.png" alt="">
                <html>

                <head>
                    <title>Documentação sobre thplaces</title>
                </head>

                <body>
                    <h1>Oque é  thplaces</h1>

                    

                    <p>thplaces é uma aplicação web desenvolvida em Laravel e Bootstrap 5, com o objetivo de
                        auxiliar os usuários na mobilidade urbana, fornecendo indicações de serviços automotivos
                        próximos ao seu local. Essa documentação fornecerá uma visão geral sobre a plataforma,
                        suas principais funcionalidades e o guia de uso.</p>

                    <h2>Funcionalidades Principais</h2>

                    <h3>Localização Automática</h3>
                    <p>A aplicação utiliza a função de localização automática para identificar a posição do
                        usuário. Isso permite que a plataforma sugira serviços automotivos próximos com base em
                        sua localização atual.</p>

                    <h3>Pesquisa de Serviços Automotivos</h3>
                    <p>Os usuários podem pesquisar serviços automotivos específicos, como oficinas, postos de
                        gasolina, lava-rápidos, entre outros. Basta digitar o tipo de serviço desejado na barra
                        de pesquisa e a plataforma retornará os resultados relevantes com base na localização do
                        usuário.</p>

                    <h3>Avaliações e Comentários</h3>
                    <p>Os usuários têm a oportunidade de avaliar e deixar comentários sobre os serviços
                        automotivos que utilizaram. Essas avaliações e comentários são úteis para outros
                        usuários tomarem decisões informadas sobre qual serviço automotivo escolher.</p>

                    <h3>Navegação</h3>
                    <p>A aplicação fornece instruções detalhadas para auxiliar os usuários a chegarem ao serviço
                        automotivo escolhido. Isso inclui direções turn-by-turn e estimativa de tempo de viagem.
                    </p>

                    <h3>Favoritos</h3>
                    <p>Os usuários podem salvar seus serviços automotivos favoritos para acesso rápido no
                        futuro. Basta clicar no botão "Adicionar aos Favoritos" para salvar o serviço automotivo
                        em sua lista pessoal.</p>

                    <h2>Guia de Uso</h2>

                    <p><strong>Pontos para utilizar o thplaces:</strong></p>

                    <ol>
                        <li>Acesse a aplicação web thplaces em <a
                                href="http://www.thplaces.com">www.thplaces.com</a>.</li>
                        <li>Permite acesso à sua localização atual para obter uma melhor experiência.</li>
                        <li>Utilize a barra de pesquisa para encontrar um serviço automotivo específico,
                            inserindo palavras-chave relevantes.</li>
                        <li>Selecione um serviço automotivo nos resultados da pesquisa para visualizar mais
                            informações.</li>
                        <li>Leia avaliações e comentários para obter opiniões de outros usuários sobre o serviço
                            automotivo.</li>
                        <li>Se desejar, adicione o serviço automotivo aos seus Favoritos para acesso rápido no
                            futuro.</li>
                        <li>Utilize a função de navegação para obter instruções detalhadas para chegar ao
                            serviço automotivo escolhido.</li>
                    </ol>

                    <h2>Dicas para aproveitar ao máximo o thplaces</h2>

                    <ul>
                        <li>Mantenha a localização automática ativada para obter resultados mais precisos.</li>
                        <li>Leia avaliações e comentários de outros usuários antes de escolher um serviço
                            automotivo.</li>
                        <li>Salve seus serviços automotivos favoritos para acesso rápido no futuro.</li>
                        <li>Utilize as instruções de navegação para chegar ao serviço automotivo escolhido de
                            forma eficiente.</li>
                    </ul>

                    <p>Esperamos que esta documentação tenha fornecido informações úteis sobre a utilização da
                        aplicação web thplaces. Aproveite ao máximo a plataforma e tenha uma experiência
                        agradável na sua mobilidade urbana!</p>
                </body>

                </html>

                <br>
        </section>

</aside>


</main>



  <!-- place footer here -->

  <footer class="p-5 mt-5 fundo-rodape text-light ">
    <!-- roda pé do site mapa dentro do site -->
    <p>Siga-Me Nas Redes Sociais</p>
    <a href="https://github.com/Thiagofgoliver"><i class="fa-brands fa-github fa-2x"></i></a>
    <a href="https://encurtador.com.br/jBU15"> <i class="fa-brands fa-linkedin fa-2x"></i></a>









    <p>&copy; THIAGO FELIPE - Todos os direitos reservados</p>
  </footer>








  <!-- Inicio Política de privacidade -->
  <div class="aviso-cookies ">
    <p class="texto-cookies">Cookies: a gente guarda estatísticas de visitas para melhorar sua experiência de navegação,
      saiba mais em nossa <a class="link-politica" href="{{route('politica')}}">política de privacidade</a>.</p>
    <button type="button" class="btn btn-secondary botao-fechar-cookies">
      Concordar e Fechar
  </div>
  <!-- final política de privacidade -->





  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
  <!-- Optional: Place to the bottom of scripts -->
  <script src="js/java.js"></script>
</body>

</html>