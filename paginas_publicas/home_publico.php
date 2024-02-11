<script>
  function alerta() {
    alert('Para realizar esta ação deve estar logado!');
  }
</script>

<!DOCTYPE html>
<html lang="pt">
<head>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sobre_nos.css">
    <link rel="shortcut icon" href="logos\Oxford-University-Circlet.svg.png" type="image/x-icon">
    <title>Pagina Inicial</title>
</head>
<body>
     <!-- -------------------MENU DESKTOP------------------- -->


     <header>
    <nav class="menu-desktop">
      <div>
        <ul style="padding-top:1%;" class="submenu-desktop">
        <li style="margin-right:3%;" class="logo01-desktop"><img width="35px" src="../logos/Oxford-University-Circlet.svg.png" width="200px" alt="logo"></li>


          <li class="listas-desktop"><a style="color: white;" class="links-desktop" href="home_publico.php" target="_top">Home</a></li>

          <li class="listas-desktop">
            
         <a class="links-desktop  matricula" href="#">Matrícula</a>
        
          <div class="sub-matricula" style="position:absolute; top:0; left:0; background-color:rgb(37, 37, 37); width:100%; height:50px;; padding:10px; border:2px solid darkgray; animation: vir .60s alternate linear; overflow: hidden;">
          <ul style="display:flex; justify-content: space-around; list-style:none; padding:15px;">
             <li class="listas-desktop" style=" border-right: 2px solid darkgray; padding-right:20px; color:grey; font-size:30px;" class="listas-desktop">Matrículas:</li>
             <li style=" border-right: 2px solid darkgray; padding-right:20px;" class="listas-desktop"><a class="links-desktop" onclick="alerta()" href="../login.php">Matrícula ATL & Iniciação</a></li>
             <li style=" border-right: 2px solid darkgray; padding-right:20px;" class="listas-desktop"><a class="links-desktop" onclick="alerta()" href="../login.php">Matrícula Iº & IIº Ciclo</a></li>
             <li style=" border-right: 2px solid darkgray;  padding-right:20px;" class="listas-desktop"><a class="links-desktop" onclick="alerta()" href="../login.php">Matrícula Ensino Médio</a></li>
             <li style=" border-right: 2px solid darkgray;  padding-right:20px;" class="listas-desktop"><a class="links-desktop" onclick="alerta()" href="../login.php">Inscrições de AEC</a></li>
          </ul>
        </li>

          <li class="listas-desktop"><a class="links-desktop" onclick="alerta()" href="../login.php">Confirmação</a></li>

          <li class="listas-desktop"><a class="links-desktop" onclick="alerta()" href="../login.php">Uniformes</a></li>

          <li class="listas-desktop"><a class="links-desktop" onclick="alerta()" href="../login.php">Pagamentos</a></li>

          <li class="listas-desktop"><a class="links-desktop" onclick="alerta()" href="../login.php" target="_top">Biblíoteca</a></li>

          <li class="listas-desktop"><a class="links-desktop" href="sobre_nos_publico.php" target="_top">SobreNós</a></li>

          <li class="listas-desktop"><a style="border-radius:50px; padding:1px; color: white; margin-left:10%;" class="links-desktop" onclick="alerta()" href="../login.php" target="_top"><img width="30px" src="../icons/comentario-alt.png" alt="notificacao"></a></li>

          <li class="listas-desktop"><a style="border-radius:50px; padding:1px; color: white; margin-left:15%;" class="links-desktop" href="../login.php" target="_top"><img width="30px" src="../icons/usuario-do-circulo.png" alt="entrar"></a></li>
        </ul>

        
      </div>
    </nav>

    <!-- -------------------MENU MOBILE------------------- -->

    <nav>

    <div class="barra-dark-grey"><div class="log"><a style="border-radius:5px; padding:10px; position:absolute; margin-left:90%; text-decoration:none; color:white;" href="../login.php" target="_top"><img width="30px" src="../icons/usuario-do-circulo.png" alt="entrar"></a></div>

    <div class="not"><a style="border-radius:5px; padding:10px; position:absolute; margin-left:80%; text-decoration:none; color:white;" onclick="alerta()" href="../login.php" target="_top"><img width="30px" src="../icons/comentario-alt.png" alt="notificacao"></a></div>
    </div>
      <div class="ico-menu"><img src="../icons\588a6507d06f6719692a2d15.png" alt="Menu" width="40px"></div>
      <div class="menu-mobile">
        <ul class="submenu-mobile">
          <li class="logo01-mobile">Menu:</li>
          
          <li class="listas-mobile"><a style="color: white;" class="links-mobile" href="home_publico.php" target="_top">Home</a></li>

          <li style="border-bottom:none;" class="listas-mobile">
          <li class="listas-mobile"><a class="links-desktop" onclick="alerta()" href="../login.php">Matrícula ATL & Iniciação</a></li>
          <li class="listas-mobile"><a class="links-desktop" onclick="alerta()" href="../login.php">Matrícula Iº & IIº Ciclo</a></li>
          <li class="listas-mobile"><a class="links-desktop" onclick="alerta()" href="../login.php">Matrícula Ensino Médio</a></li>
          <li class="listas-mobile"><a class="links-desktop" onclick="alerta()" href="../login.php">Inscrições de AEC</a></li>

          <li class="listas-mobile"><a class="links-mobile" onclick="alerta()" href="../login.php">Confirmação</a></li>

          <li class="listas-mobile"><a class="links-mobile" onclick="alerta()" href="../login.php">Uniformes</a></li>

          <li class="listas-mobile"><a class="links-mobile"
          onclick="alerta()" href="../login.php">Pagamentos</a></li>

          <li class="listas-mobile"><a class="links-mobile" onclick="alerta()" href="../login.php" target="_top">Biblioteca</a></li>

          <li class="listas-mobile"><a class="links-mobile" href="sobre_nos_publico.php" target="_top">SobreNós</a></li>

        </ul>

      </header>
  <!-- -------------------CORPO------------------- -->

      <section class="corpohome">
        <div style="position:relative;"><img width="100%"

         src="../imagens\mulher-afro-americana-de-aparencia-agradavel-segura-blocos-de-notas-papeis-estudos-na-faculdade-feliz-por-terminar-os-estudos (1).jpg" 

         alt="mulher-afro-americana-de-aparencia-agradavel-segura-blocos-de-notas-papeis-estudos-na-faculdade-feliz-por-terminar-os-estudos">

         <div class="slog">
            <p><img src="../logos\Oxford-University-Circlet.svg.png" alt="logo"></p>
            <h2>Venha construir o futuro!</h2>
            <p><a href="#idsaber-mais"><input class="btn" type="button" value="Saber Mais"></a></p> 
         </div>
         </div>

      </section>

      <div id="idsaber-mais" style="background-color:rgb(37, 37, 37); color:white;  text-shadow: whitesmoke 1px 1px 1px;" class="boas-vidas">
      <marquee behavior="scroll" direction="left" scrollamount="15s"><h1 style="text-align:center;">Seja Bem Vindo(a), a School WebSite Deseja-lhe um Feliz ano Novo!  ----  As Matriculas do ano lectivo 2023/2024 estão abertas!</h1></marquee>
      </div><br>

      <div style="padding:0px;";  id="carouselExampleCaptions" class="carousel slide">
      <h1 style="text-align:center; text-shadow: darkgray 1px 1px 1px;">Destaques</h1>
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../imagens\aniversario.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-md-block">
          <h5 style="color:white; text-shadow: black 1px 1px 1px;">Aniversario do Colégio WebSchool</h5>
          <p style="color:white; text-shadow: black 1px 1px 1px;">O Colégio WebSchool, completa hoje dia 13/01/2024 33 anos de existência.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../imagens\phpThumb(0).jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-md-block">
          <h5 style="color:white; text-shadow: black 1px 1px 1px;">Ministério da educação visita WebSchool</h5>
          <p style="color:white; text-shadow: black 1px 1px 1px;">Nesta ultima quarta-feira dia 20/01/2024, o ministério da educação faz uma visita de rotina as nossas intalações...</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../imagens\taca-fut.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-md-block">
          <h5>Campeonato Intercolegial</h5>
          <p>A equipe de futebol masculina do colegio WebSchool Sagra-se campeã do compeonato intercolegial...</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div><br>

  <hr>

  <h1 style="text-align:center; text-shadow: darkgray 1px 1px 1px;">Principaís Eventos</h1>

<div style="padding:30px;" class="card text-bg-dark">
  <img src="../imagens\feira-de-artesanato-600x300-c-top-center.png" class="card-img" alt="...">
  <div style="padding:35px; color:white; text-shadow: black 1px 1px 1px;" class="card-img-overlay">
    <h5 class="card-title">Fera Artesanal</h5>
    <p class="card-text">Dia 04/04/2024 à 06/042024 Será realizado a mais esperada feira Artesanal na WebSchool com diversas culturas englobadas e muita diversidade Artesanal</p>
    <p class="card-text"><small>Last updated 3 mins ago</small></p>
  </div>
</div>

<hr>

  <h1 style="text-align:center; text-shadow: darkgray 1px 1px 1px;">ATL</h1>

<div style="padding:30px;" id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../imagens\school-2761394_1280.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-md-block">
          <h5 style="color:white; text-shadow: black 1px 1px 1px;">ATL</h5>
          <p style="color:white; text-shadow: black 1px 1px 1px;">O melhor lar para o seu filho na sua ausência!</p>
          <a href="../login.php"><input onclick="alerta()" class="btn1" type="button" value="Fazer Inscrição"></a>
        </div>
      </div>
    </div>
  </div>

  <hr>

<h1 style="text-align:center; text-shadow: darkgray 1px 1px 1px;">Notícias</h1>

<div style="padding:30px;" class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img width="20px" src="../imagens\taca-fut.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Campeonato Intercolegial</h5>
        <p class="card-text">A equipe de futebol masculina do colegio WebSchool Sagra-se campeã do compeonato intercolegial pela 9ª vez, e torna-se a equipe com mais vitórias em compeonatos intercolegias.</p>
        <a href="#"><input classe="btn-ver-mais" type="button" value="Ver Mais"></a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="../imagens\phpThumb(0).jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Ministério da educação visita WebSchool</h5>
        <p class="card-text">Nesta ultima quarta-feira dia 20/01/2024, o ministério da educação faz uma visita de rotina as nossas intalações, com fim de preservar a educação em nosso país.</p><br>
        <a href="#"><input classe="btn-ver-mais" type="button" value="Ver Mais"></a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="../imagens\aniversario.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">A 33 anos contribuindo para o desesnvolvimento do nosso país</h5>
        <p class="card-text">O Colégio WebSchool, completa hoje dia 13/01/2024 33 anos de existência.</p><br>
        <a href="#"><input classe="btn-ver-mais" type="button" value="Ver Mais"></a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="../imagens\prof-alunos.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Dia do Educador</h5>
        <p class="card-text">WebSchool realiza um evento em homenagem ao dia do educador, e professores são presentiados com muito amor, homenagens e diversas prendas pelos alunos e pelo complexo escolar.</p>
        <a href="#"><input classe="btn-ver-mais" type="button" value="Ver Mais"></a>
      </div>
    </div>
  </div>
</div><br>

<hr>

<h1 style="text-align:center; text-shadow: darkgray 1px 1px 1px;">Atividades Extra Curriculares</h1>

  <div style="padding:10px;" id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../imagens\atividades-extracurriculares-educacao-infantil - Copia.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-md-block">
          <h5 style="color:black; text-shadow: white 1px 1px 1px;">Atividades Extra Curriculares</h5>
          <p style="color:black; text-shadow: white 1px 1px 1px;">Melhore a saúde corporal e mental com as atividades extra curriculares!</p>
          <a href="../login.php"><input onclick="alerta()" class="btn1" type="button" value="Fazer Inscrição"></a>
        </div>
      </div>
    </div>
  </div>

  <hr>

<h1 style="text-align:center;">Quadro de Honra IIºtrimestre 2023/2024</h1>

      <div class="container">

        <div class="card01">     
          <img class="img-quadro" src="../icons\usuario-do-circulo.png" alt=""> <img class="img-quadro" src="../icons\usuario-do-circulo.png" alt="">

          <h4 class="info-quadro">12ª classe/MTI2-IIºtrimestre/Turno:Tarde/Sala:12</h4>
          <h4 class="nome-aluno1">Rachid Djaló</h4> 
          <h4 class="nome-aluno2">Said José</h4>
        </div>

        <div class="card02">
        <img class="img-quadro" src="../icons\usuario-do-circulo.png" alt=""> <img class="img-quadro" src="../icons\usuario-do-circulo.png" alt="">

        <h4 class="info-quadro">12ª classe/DP1-IIºtrimestre/Turno:Tarde/Sala:10</h4>
          <h4 class="nome-aluno1">Haissato Patrícia</h4> 
          <h4 class="nome-aluno2">Zacarías Pedro</h4>
        </div>

        <div class="card03">
        <img class="img-quadro" src="../icons\usuario-do-circulo.png" alt=""> <img class="img-quadro" src="../icons\usuario-do-circulo.png" alt="">

        <h4 class="info-quadro">12ª classe/GRH1-IIºtrimestre/Turno:Tarde/Sala:08</h4>
          <h4 class="nome-aluno1">Assiato Elizabeth</h4> 
          <h4 class="nome-aluno2">Hadama Arleth</h4>
        </div>

        <div class="card04">
        <img class="img-quadro" src="../icons\usuario-do-circulo.png" alt=""> <img class="img-quadro" src="../icons\usuario-do-circulo.png" alt="">

        <h4 class="info-quadro">11ª classe/DP1-IIºtrimestre/Turno:Tarde/Sala:03</h4>
          <h4 class="nome-aluno1">Lineth Dos Santos</h4> 
          <h4 class="nome-aluno2">João Dos Santos</h4>
        </div>

        <div class="card05">
        <img class="img-quadro" src="../icons\usuario-do-circulo.png" alt=""> <img class="img-quadro" src="../icons\usuario-do-circulo.png" alt="">

        <h4 class="info-quadro">11ª classe/MTI1-IIºtrimestre/Turno:Tarde/Sala:04</h4>
          <h4 class="nome-aluno1">Paulo Cunha</h4> 
          <h4 class="nome-aluno2">Elder Miguel</h4>
        </div>

        <div class="card06">
        <img class="img-quadro" src="../icons\usuario-do-circulo.png" alt=""> <img class="img-quadro" src="../icons\usuario-do-circulo.png" alt="">

        <h4 class="info-quadro">11ª classe/GRH1-IIºtrimestre/Turno:Tarde/Sala:01</h4>
          <h4 class="nome-aluno1">Penolope Dias</h4> 
          <h4 class="nome-aluno2">Azael Cavunza</h4>
        </div>
      </div>
        
   <!-- -------------------RODAPÉ------------------- -->

   <footer>
    <ul>
            <li class="redes-socias" style="list-style: none;"><a href="#"><i><img style="width: 40px; margin-right: 10px;" src="../Icons/facebook.png" alt=""></i></a></li>
            <li class="redes-socias" style="list-style: none;"><a href="#"><i><img style="width: 40px; margin-right: 10px;" src="../Icons/instagram.png" alt=""></i></a></li>
            <li class="redes-socias" style="list-style: none;"><a href="#"><i><img style="width: 40px; margin-right: 10px;" src="../Icons/snapchat.png" alt=""></i></a></li>
        </ul>
        <p><i class="fa-solid fa-copyright"></i> Todos os direitos reservados - WebSchool 2023</p>
    
    </footer>
   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>   
</body>
</html>