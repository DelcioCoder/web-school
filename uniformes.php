<!DOCTYPE html>
<html lang="pt">
<head>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sobre_nos.css">
    <link rel="shortcut icon" href="logos\Oxford-University-Circlet.svg.png" type="image/x-icon">
    <title>Uniformes</title>
</head>
<body>

    <style>
        *{
            box-sizing:border-box;
        }

        select, input{
          border:solid 2px black;
          border-radius:5px;
        }

    </style>

     <!-- -------------------MENU DESKTOP------------------- -->

    
     <header>
    <nav class="menu-desktop">
      <div>
        <ul style="padding-top:1%;" class="submenu-desktop">
        <li style="margin-right:3%;" class="logo01-desktop"><img width="35px" src="logos/Oxford-University-Circlet.svg.png" width="200px" alt="logo"></li>


          <li class="listas-desktop"><a class="links-desktop" href="home.php" target="_top">Home</a></li>

          <li class="listas-desktop">
            
         <a class="links-desktop  matricula" href="#">Matrícula</a>
        
          <div class="sub-matricula" style="position:absolute; top:0; left:0; background-color:rgb(37, 37, 37); width:100%; height:50px;; padding:10px; border:2px solid darkgray; animation: vir .60s alternate linear; overflow: hidden;">
          <ul style="display:flex; justify-content: space-around; list-style:none; padding:15px;">
             <li class="listas-desktop" style=" border-right: 2px solid darkgray; padding-right:20px; color:grey; font-size:30px;" class="listas-desktop">Matrículas:</li>
             <li style=" border-right: 2px solid darkgray; padding-right:20px;" class="listas-desktop"><a class="links-desktop" href="matricula_iniciacao.php">ATL & Iniciação</a></li>
             <li style=" border-right: 2px solid darkgray; padding-right:20px;" class="listas-desktop"><a class="links-desktop" href="matricula_psc.php">Iº & IIº Ciclo</a></li>
             <li style=" border-right: 2px solid darkgray;  padding-right:20px;" class="listas-desktop"><a class="links-desktop" href="matricula_medio.php">Ensino Médio</a></li>
             <li style=" border-right: 2px solid darkgray;  padding-right:20px;" class="listas-desktop"><a class="links-desktop" href="inscricoes_aec.php">Inscrições de AEC</a></li>
             <li style=" border-right: 2px solid darkgray;  padding-right:20px;" class="listas-desktop"><a class="links-desktop" href="transporte.php">Transporte</a></li>
          </ul>
        </li>

          <li class="listas-desktop"><a class="links-desktop" href="pautaslogin.php">Pautas</a></li>

          <li class="listas-desktop"><a class="links-desktop" href="confirmacao.php">Confirmação</a></li>

          <li class="listas-desktop"><a  style="color: white;" class="links-desktop" href="uniformes.php">Uniformes</a></li>

          <li class="listas-desktop"><a class="links-desktop" href="pagamentos.php">Pagamentos</a></li>

          <li class="listas-desktop"><a class="links-desktop" href="biblioteca.php" target="_top">Biblíoteca</a></li>

          <li class="listas-desktop"><a class="links-desktop" href="sobre_nos.php" target="_top">SobreNós</a></li>

          <li class="listas-desktop"><a style="border-radius:50px; padding:1px; color: white; margin-left:10%;" class="links-desktop" href="notificacoes.php" target="_top"><img width="30px" src="icons/comentario-alt.png" alt="notificacao"></a></li>

          <li class="listas-desktop"><a style="border-radius:50px; padding:1px; color: white; margin-left:15%;" class="links-desktop" href="perfil.php" target="_top"><img width="30px" src="icons/usuario-do-circulo.png" alt="entrar"></a></li>
        </ul> 
      </div>
    </nav>

    <!-- -------------------MENU MOBILE------------------- -->

    <nav>

    <div class="barra-dark-grey"><div class="log"><a style="border-radius:5px; padding:10px; position:absolute; margin-left:90%; text-decoration:none; color:white;" href="perfil.php" target="_top"><img width="30px" src="icons/usuario-do-circulo.png" alt="entrar"></a></div>

    <div class="not"><a style="border-radius:5px; padding:10px; position:absolute; margin-left:80%; text-decoration:none; color:white;" href="notificacoes.php" target="_top"><img width="30px" src="icons/comentario-alt.png" alt="notificacao"></a></div>
    </div>
      <div class="ico-menu"><img src="icons\588a6507d06f6719692a2d15.png" alt="Menu" width="40px"></div>
      <div class="menu-mobile">
        <ul class="submenu-mobile">
          <li class="logo01-mobile">Menu:</li>
          
          <li class="listas-mobile"><a class="links-mobile" href="home.php" target="_top">Home</a></li>

          <li style="border-bottom:none;" class="listas-mobile">
          <li class="listas-mobile"><a class="links-desktop" href="matricula_iniciacao.php">ATL & Iniciação</a></li>
          <li class="listas-mobile"><a class="links-desktop" href="matricula_psc.php">Iº & IIº Ciclo</a></li>
          <li class="listas-mobile"><a class="links-desktop" href="matricula_medio.php">Ensino Médio</a></li>
          <li class="listas-mobile"><a class="links-desktop" href="inscricoes_aec.php">Inscrições de AEC</a></li>
          <li class="listas-mobile"><a class="links-desktop" href="transporte.php">Transporte</a></li>

          <li class="listas-mobile"><a class="links-mobile" href="pautaslogin.php">Pautas</a></li>

          <li class="listas-mobile"><a class="links-mobile" href="confirmacao.php">Confirmação</a></li>

          <li class="listas-mobile"><a style="color: white;" class="links-mobile" href="uniformes.php">Uniformes</a></li>

          <li class="listas-mobile"><a class="links-mobile" href="pagamentos.php">Pagamentos</a></li>

          <li class="listas-mobile"><a class="links-mobile" href="biblioteca.php" target="_top">Biblioteca</a></li>

          <li class="listas-mobile"><a class="links-mobile" href="sobre_nos.php" target="_top">SobreNós</a></li>

        </ul>

      </header>

       <!-- -------------------CORPO------------------- -->

       <section class="corpohome">
        <div style="position:relative;"><img width="100%"

         src="imagens\meninos_de_uniforme.jpg" 

         alt="meninos de uniforme">

         <div class="slog">
            <p><img src="logos\Oxford-University-Circlet.svg.png" alt="logo"></p>
            <h2 style="font-size:25px;">Dê uma olhada a baixo <br> e veja a nossa diversidade de uniformes </h2>
         </div>
         </div>
      </section>

      <h1 style="text-align:center; text-shadow: darkgray 1px 1px 1px;">Úniformes</h1>

      <div class="uni-desktop">
      <div class="grid-container-uni">
      <div class="grid-item">

       <div class="iuni">
       <input placeholder="Introduza a quantidade" type="number" name="qu" id="idqu"><br><br>

      <select nome="tuni" id="idtuni" class="form-select">
      <option disabled nome="tamanho" selected>Selecione o Tamanho</option>
      <option nome="M">M</option>
      <option nome="X">X</option>
      <option nome="L">L</option>
      <option nome="XL">XL</option>
      <option nome="XXL">XXL</option>
      <option nome="XXX">XXX</option>

      </select>
       </div>
      </div>

      <div class="grid-item">
      <div class="iuni">
       <input placeholder="Introduza a quantidade" type="number" name="qu" id="idqu"><br><br>

      <select nome="tuni" id="idtuni" class="form-select">
      <option disabled nome="tamanho" selected>Selecione o Tamanho</option>
      <option nome="M">M</option>
      <option nome="X">X</option>
      <option nome="L">L</option>
      <option nome="XL">XL</option>
      <option nome="XXL">XXL</option>
      <option nome="XXX">XXX</option>

      </select>
       </div>
      </div>

      <div class="grid-item">
      <div class="iuni">
       <input placeholder="Introduza a quantidade" type="number" name="qu" id="idqu"><br><br>

      <select nome="tuni" id="idtuni" class="form-select">
      <option disabled nome="tamanho" selected>Selecione o Tamanho</option>
      <option nome="M">M</option>
      <option nome="X">X</option>
      <option nome="L">L</option>
      <option nome="XL">XL</option>
      <option nome="XXL">XXL</option>
      <option nome="XXX">XXX</option>

      </select>
       </div>
      </div>

      <div class="grid-item">
      <div class="iuni">
       <input placeholder="Introduza a quantidade" type="number" name="qu" id="idqu"><br><br>

      <select nome="tuni" id="idtuni" class="form-select">
      <option disabled nome="tamanho" selected>Selecione o Tamanho</option>
      <option nome="M">M</option>
      <option nome="X">X</option>
      <option nome="L">L</option>
      <option nome="XL">XL</option>
      <option nome="XXL">XXL</option>
      <option nome="XXX">XXX</option>

      </select>
       </div>
      </div>

      <div class="grid-item">
      <div class="iuni">
       <input placeholder="Introduza a quantidade" type="number" name="qu" id="idqu"><br><br>

      <select nome="tuni" id="idtuni" class="form-select">
      <option disabled nome="tamanho" selected>Selecione o Tamanho</option>
      <option nome="M">M</option>
      <option nome="X">X</option>
      <option nome="L">L</option>
      <option nome="XL">XL</option>
      <option nome="XXL">XXL</option>
      <option nome="XXX">XXX</option>

      </select>
       </div>
      </div>

      <div class="grid-item">
      <div class="iuni">
       <input placeholder="Introduza a quantidade" type="number" name="qu" id="idqu"><br><br>

      <select nome="tuni" id="idtuni" class="form-select">
      <option disabled nome="tamanho" selected>Selecione o Tamanho</option>
      <option nome="M">M</option>
      <option nome="X">X</option>
      <option nome="L">L</option>
      <option nome="XL">XL</option>
      <option nome="XXL">XXL</option>
      <option nome="XXX">XXX</option>

      </select>
       </div>
      </div>

      <div class="grid-item">
      <div class="iuni">
       <input placeholder="Introduza a quantidade" type="number" name="qu" id="idqu"><br><br>

      <select nome="tuni" id="idtuni" class="form-select">
      <option disabled nome="tamanho" selected>Selecione o Tamanho</option>
      <option nome="M">M</option>
      <option nome="X">X</option>
      <option nome="L">L</option>
      <option nome="XL">XL</option>
      <option nome="XXL">XXL</option>
      <option nome="XXX">XXX</option>

      </select>
       </div>
      </div>

      <div class="grid-item">
      <div class="iuni">
       <input placeholder="Introduza a quantidade" type="number" name="qu" id="idqu"><br><br>

      <select nome="tuni" id="idtuni" class="form-select">
      <option disabled nome="tamanho" selected>Selecione o Tamanho</option>
      <option nome="M">M</option>
      <option nome="X">X</option>
      <option nome="L">L</option>
      <option nome="XL">XL</option>
      <option nome="XXL">XXL</option>
      <option nome="XXX">XXX</option>

      </select>
       </div>
      </div>

      <div class="grid-item">
      <div class="iuni">
       <input placeholder="Introduza a quantidade" type="number" name="qu" id="idqu"><br><br>

      <select nome="tuni" id="idtuni" class="form-select">
      <option disabled nome="tamanho" selected>Selecione o Tamanho</option>
      <option nome="M">M</option>
      <option nome="X">X</option>
      <option nome="L">L</option>
      <option nome="XL">XL</option>
      <option nome="XXL">XXL</option>
      <option nome="XXX">XXX</option>

      </select>
       </div>
      </div>
    </div>
  </div>

    <!-- úniformes mobile -->

    <div class="uni-mobile">
    <div class="grid-container-uni2">
      <div class="grid-item">1</div>

      <div class="grid-item">2</div>

      <div class="grid-item">3</div>

      <div class="grid-item">4</div>

      <div class="grid-item">5</div>
      
      <div class="grid-item">6</div>
   </div>
    </div>

    <div class="col-12">
    <label for="idnm" class="form-label">Método de Pagamento:</label>
    <a href="#"><img width="30px" src="logos\Itau.jpg" alt="itaú"></a>
    <a href="#"><img width="50px" src="logos\PayPay.jpg" alt="paypay"></a>
    <a href="#"><img width="70px" src="logos\MasterCard.png" alt="mastercard"></a>
    <a href="#"><img width="110px" src="logos\PayPal.jpg" alt="paypal"></a>
    <a href="#"><img width="100px" src="logos\caixa-1.png" alt="caixa"></a>
    <a href="#"><img width="60px" src="logos/Visa.png" alt="visa"></a>
    <a href="#"><img width="130px" src="logos\GooglePay.jpg" alt="googlepay"></a>
    <a href="#"><img width="110px" src="logos\MercadoPago.png" alt="mercadopago"></a>
    <a href="#"><img width="100px" src="logos\pix.jpg" alt="pix"></a>
    <a href="#"><img width="100px" src="logos\tbc.jpg" alt="transferenciab"></a>
  </div>

  <div style="text-align:center;" class="col-12">
    <button style="padding:10px; border-radius:10px; width:320px;" nome="comprar" type="submit" class="btn-primary">Facturar</button>
  </div>

       <!-- -------------------RODAPÉ------------------- -->

   <footer>
    <ul>
            <li class="redes-socias" style="list-style: none;"><a href="#"><i><img style="width: 40px; margin-right: 10px;" src="Icons/facebook.png" alt=""></i></a></li>
            <li class="redes-socias" style="list-style: none;"><a href="#"><i><img style="width: 40px; margin-right: 10px;" src="Icons/instagram.png" alt=""></i></a></li>
            <li class="redes-socias" style="list-style: none;"><a href="#"><i><img style="width: 40px; margin-right: 10px;" src="Icons/snapchat.png" alt=""></i></a></li>
        </ul>
        <p><i class="fa-solid fa-copyright"></i> Todos os direitos reservados - WebSchool 2023</p>
    
    </footer>
   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 