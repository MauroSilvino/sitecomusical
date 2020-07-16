<?php
session_start();
if(isset($_SESSION['mensagem'])): ?>
    <script>
        window.onload = function(){
            M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'})
    };
    </script>

<?php
endif;
session_unset();
?>

<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <link rel="stylesheet" href="css/custom.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>

    <nav>
    <div class="nav-wrapper black">
      <a href="#" class="brand-logo"><img src="img/logo.png" alt="logo text" width=60 height=60></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="http://localhost/Site1/">CO. MUSICAL</a></li>
        <li><a href="http://localhost/Site1/banda.php">BANDA</a></li>
        <li><a href="http://localhost/Site1/material.php">MATERIAL</a></li>
        <li><a href="http://localhost/Site1/eventos.php">EVENTOS</a></li>
        <li><a href="http://localhost/Site1/contato.php">CONTATO</a></li>
        <li><a href="http://localhost/Site1/blog.php">BLOG</a></li>
      </ul>
    </div>
  </nav>


      <div class="row black">
        <div class=" col s12 m6 l8 capa"> 
          <h1> Essa experiência é incrivel!</h1>
          <h4> Você não pode perder nenhum evento.<h4>
          <h6 class="subt"> Navegue pelo nosso site e descubra mais sobre nós:</h6>
          <div class="col s12 m12 l12 black">
            <p>A Co. Musical é uma iniciativa de Músicos e Produtores com o objetivo de influenciar e agregar ao cenário musical sendo a porta de entrada para Músicos e Produtores iniciantes. A Co. Musical conta com a participação de Mauro Silvino, Lucas Serra, Daniel Serra, Marcel Dias e Giovanni Roppa. Confiram nosso Material disponível em Redes Sociais, Streamings e aqui mesmo no nosso site.</p>
          </div>
        </div>
        <div class="col s12 m6 l4 black hide-on-med-and-down">
        <img src="img/dani.jpg" alt="fotodani" width=210 height=170>
        <img src="img/lucas.jpg" alt="fotolucas" width=210 height=170>
        <img src="img/marcel.jpg" alt="fotomarcel" width=210 height=170>
        <img src="img/mauro.jpg" alt="fotomauro" width=210 height=170>
        </div>
        <div class="row black">
        <div class="col s12 m6 l2 black">
          <img class="esp responsive-img" src="img/album1.jpg" alt="fotoalbum1" width=200 height=200>
        </div>
        <div class="col s12 m6 l6 black">
          <p class="esp"> O albúm ROCK N LOVE N ROLL da contra parte artistica DILEMA é uma produção apenas visual embora haja o interesse por meio dos fundadores da Co. Musical pela gravação de seu primeiro album de músicas autorais. Essa ideia veio do gosto musical da maioria dos fundadores em contra partida do cenário musical brasileiro. Ainda é apenas uma arte visual.</p>
        </div>
        <div class="col s12 m6 l4 black hide-on-med-and-down">
          <p>Respectivamente Daniel, Lucas, Marcel, Mauro e Giovanni (sem foto) são os co fundadores da iniciativa Co. Musical em Maio de 2020. Residentes do Rio de Janeiro uniram conhecimentos para forma a Banda, Produtora, Iniciativa Social, Co. Musical. O objetivo geral é a expansão e networking gerados pela interação com Músicos, Produtoras, Distribuidoras, Gravadoras e claro o Público.</p>
        </div>
      </div>

      <div class="row black">
        <div class="col s12 m6 l2 black">
          <img class="esp responsive-img" src="img/album2.jpg" alt="fotoalbum1" width=200 height=200>
        </div>
        <div class="col s12 m6 l10 black">
          <p class="esp"> Esta é outra arte visual criada pelos fundadores da Co. Musical com inspiração em capas de albuns que expressão em metafora o real estado de eterno aprendizado que todos se encontra por meios de crianças, como fez U2, Pearl Jam e Nirvana além de outros grandes nomes da música mundial. No caso o menino está com um equipamento profissional de estúdio simbolizando a gravação de um álbum.
        </div>
      </div>
      <div class="row black esp">
        <div class="col s12 m12 l4 black">
          <div class="video-container">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/oFkzZHIcgFs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <p> Esse show que se passa em 1970 foi a inspiração para muitos guitarristas aprenderem guitarra e na Co. Musical não foi diferente</p>
          </div>
        </div>
        <div class="col s12 m12 l4 black">
          <div class="video-container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/PM_VIATPYQc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>Esse show se passa em 1992 na Holanda, foi inspiração pra muitos jovens se interessaram por música e também muitos dos fundadores da Co. Musical. </p>
          </div>
        </div>
        <div class="col s12 m12 l4 black">
          <div class="video-container">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/8xip8lF-bS4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <p>Esse album lançado nos anos 2000 é o remanescente de uma época onde os jovens eram inspirados ativamente por músicos a se tornarem artistas ou músicos de sucesso. Com a Musical não foi diferente.</p>
          </div>
        </div>
      </div>
      <div class="row black sup">
        <div class="col s12 m12 l4 black alinha">
          
          <p> Esse show que se passa em 1970 foi a inspiração para muitos guitarristas aprenderem guitarra e na Co. Musical não foi diferente</p>
       
        </div>
        <div class="col s12 m12 l4 black alinha">
      
            <p>Esse show se passa em 1992 na Holanda, foi inspiração pra muitos jovens se interessaram por música e também muitos dos fundadores da Co. Musical. </p>
        
        </div>
        <div class="col s12 m12 l4 black alinha">
       
          <p>Esse album lançado nos anos 2000 é o remanescente de uma época onde os jovens eram inspirados ativamente por músicos a se tornarem artistas ou músicos de sucesso. Com a Co. Musical não foi diferente.</p>
      
        </div>
      </div>
      <div class="row black">
        <div class="col s12 m12 l4 black alinha">
        <a href="https://www.facebook.com/Co.Musical"><img src="img/face.jpg" alt="fotoface" width=210 height=170></a>
          <p> Aproveite que está aqui para nos curtir no Facebook, se você gosta de música boa claro. Lá você vai encontrar textos exclusivos sobre as maiores bandas e artistas de todos os tempos.</p>
        </div>
        <div class="col s12 m12 l4 black alinha">
        <a href="https://www.instagram.com/co.musical/"><img src="img/insta.jpg" alt="fotoinsta" width=210 height=170></a>
          <p>Nos siga também no Instagram se vc quer ver fotos dos seus artistas favoritos nos seus melhores momentos shows e até no background do cenário músical de primeiro linha.</p>
        </div>
        <div class="col s12 m12 l4 black alinha">
        <a href="https://www.youtube.com/channel/UC8CeyLLx8YgO7f7aRwh8rlw?view_as=subscriber"><img src="img/yout.jpg" alt="fotoyout" width=210 height=170></a>
          <p>Por terceiro mas não menos importante, se você quer saber mais sobre o background da música de qualidade do Brasil, se inscreve no nosso canal do YouTube, por que lá você vai encontrar muito conteúdo que não tem em nenhum outro lugar.</p>
        </div>
      </div>
      <div class="row black">
      <div class="col s12 m3 l black alinha">
        </div>
        <div class="col s12 m6 l6 black alinha">
          <h5>Quer receber toda semana novidades do mundo da música? Mande seu contato!</h5><br>

          <form class="col s12" action="php/newsletter.php" method="POST">
            <div class="row">
             <div class="input-field col s6">
              <input id="icon_prefix" type="text" class="validate" name="nome">
              <label for="icon_prefix">Nome</label>
            </div>
            <div class="input-field col s6">
             <input id="icon_telephone" type="text" class="validate" name="email">
             <label for="icon_telephone">Email</label>
            </div>
             <button class="btn waves-effect waves-light pulse" type="submit" name="btn-news">ENVIAR<i class="material-icons right">send</i>
            </div>
          </form>

        </div>
        <div class="col s12 m12 l3 black alinha">
        </div>
      </div>
            





      <div class="row black">
        <div class="col s12 m12 l12 black alinha">
          <p>©2020 Todos os direitos reservados pela Co. Musical.</p>
        </div>
      </div>
  </div>





      <!--JavaScript at end of body for optimized loading-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
  </html>