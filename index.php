<!doctype html>
<html lang="pt-br">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#FCC41">
  <link rel="sortcut icon" href="imgs/icon-cat.png" type="image/x-icon" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
  <!-- Fonte -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
  <!-- Font-Awesome -->
  <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">
  <!-- Style CSS -->
  <link rel="stylesheet" href="style/css/style.css">
  <title>Te Deixar Feliz</title>
</head>
<body>
  <!-- Nav Menu -->
  <nav class="navbar navbar-expand-lg navbar-light bg-gradient-warning" id="Home">
    <div class="container-fluid">
      <a class="navbar-brand h1 mb-0" href="#">TeDeixarFeliz :)</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#Home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#ParaVoce">Para você</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Dicas">Dicas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Mensagens">Mensagens</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Sobre">Sobre</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

   <!-- Toast -->
  <div aria-live="polite" class="position-absolute" id="toast-place" style="top:50px; right:20px;">
  </div>

  <!-- Titulo -->
  <div class="container mt-5">
    <div class="row justify-content-sm-center">
      <div class="col-sm-6 col-md-4">
        <img src="imgs/cat.gif" alt="">
      </div>
      <div class="col-sm-6 col-md-8 mt-5">
        <h1 class="display-4">Somente um site para fazer o seu dia melhor...</h1>
      </div>
    </div>
  </div>

  <!-- Card's mensagens -->
  <div class="container mb-5 mx-auto" id="home">
    <div class="row mt-5 justify-content-sm-center">
      <div class="col-sm-6 col-md-4">
        <div class="card mb-4">
          <div class="card-header bg-warning text-center">
            <i class="fa fa-pencil text-dark"></i> Para você...
          </div>
          <div class="card-body">
            <h5 class="card-title">Já é o suficiente...</h5>
            <p class="card-text">Se não puder fazer tudo, faça tudo que puder;</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 ">
        <div class="card mb-4">
          <div class="card-header bg-warning text-center">
            <i class="fa fa-pencil text-dark"></i> Também para você...
          </div>
          <div class="card-body">
            <h5 class="card-title">Pela manhã...</h5>
            <p class="card-text">Comece acreditando que é possível;</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 ">
        <div class="card mb-4" >
          <div class="card-header bg-warning text-center">
            <i class="fa fa-pencil text-dark"></i> Pense sobre...
          </div>
          <div class="card-body">
            <h5 class="card-title">E isso já diz tudo...</h5>
            <p class="card-text">Não se culpe depois de ter feito o seu melhor;</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="card mb-4">
          <div class="card-header bg-warning text-center">
            <i class="fa fa-pencil text-dark"></i> Sobre você...
          </div>
          <div class="card-body">
            <h5 class="card-title">Você é Único(a)...</h5>
            <p class="card-text">Ser você sempre será sua versão mais encantadora;</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 ">
        <div class="card mb-4">
          <div class="card-header bg-warning text-center">
            <i class="fa fa-pencil text-dark"></i> Você é Lindo(a)...
          </div>
          <div class="card-body">
            <h5 class="card-title">A Beleza...</h5>
            <p class="card-text">A beleza é tudo aquilo que não se define;</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 ">
        <div class="card mb-4">
          <div class="card-header bg-warning text-center">
            <i class="fa fa-pencil text-dark"></i> Seu dia...
          </div>
          <div class="card-body">
            <h5 class="card-title">Melhore seu dia...</h5>
            <p class="card-text">Não importa a cor do céu, quem faz o dia bonito é você;</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Imagem Parallax -->
  <div class="parallax-window" data-parallax="scroll" data-image-src="imgs/Cat05.jpg">
    <h3 class="text">Um passarinho quando aprende a voar sabe mais sobre coragem do que de voo...<img src="imgs/bird08.png"></img></h3>
  </div>


  <!-- Jumbotrom-->
  <div class="jumbotron jumbotron-fluid" id="ParaVoce">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center mt-4">
          <h1 class="display-4">Para te alegrar</h1>
          <p class="lead">Videozinhos aqui ;)</p>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <ul class="nav nav-pills justify-content-center mb-3" id="pills-nav" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="nav-pills-01" data-toggle="pill" href="#nav-item-01">Gatinhos Caindo</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" id="nav-pills-02" data-toggle="pill" href="#nav-item-02">Gatinhos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="nav-pills-03" data-toggle="pill" href="#nav-item-03">Doguinhos</a>
            </li>
          </ul>
          <div class="tab-content" id="nav-pills-content">
            <div class="tab-pane fade show active" id="nav-item-01" role="tabpanel">
              <div class="row">
                <div class="col-sm-8 justify-sm-content-center mx-auto">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/v4ps7jmSVsc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade justify-content-center" id="nav-item-02" role="tabpanel">
              <div class="row">
                <div class="col-sm-8 justify-sm-content-center mx-auto">
                  <div class="embed-responsive embed-responsive-16by9 ">
                    <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/hY7m5jjJ9mM?start=13" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade justify-content-center" id="nav-item-03" role="tabpanel">
              <div class="row">
                <div class="col-sm-8 justify-sm-content-center mx-auto">
                  <div class="embed-responsive embed-responsive-16by9 ">
                    <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/S-gWb3sV9mY?start=9" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Acordeão -->
  <div class="container mb-5" id="Dicas">
    <h1 class="title display-4 ">Algumas Dicas</h1>
    <div class="accordion" id="accordionDicas">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <strong>Como Ficar Feliz ?</strong>
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-parent="#accordionDicas">
          <div class="accordion-body">
            <strong>1. Faça uma coisa boa para si mesmo por dia</strong>
            <p>Mantenha consigo mesmo um acordo de se tratar com amor e carinho todos os dias.
            Segundo a autora, pessoas que fazem isso se sentem mais motivadas e não se deixam ser 
            desvalorizadas por alguém.</p>
            <strong>2. Perdoe-se</strong> 
            <p>Desculpar-se ou perdoar-se nem sempre é fácil, pois há uma tendência de se culpar 
            por tudo que não deu certo no passado. As pessoas começam a se complicar quando
            tentam ser perfeitas demais e se castigam por não conseguir. Daylle recomenda um 
            exercício: olhar no espelho e dizer “eu me amo e me perdoo”.</p>
            <strong>3. Aceite-se como você é</strong>
            <p>Dessa lista a insatisfação com o corpo e a idade como grandes obstáculos
            pessoais das pessoas. Para ser feliz, você precisa aprender a gostar do que tem.
            Além disso, essa autoaceitação engloba reconhecer a sua renda e seu sucesso. 
            “Não ganhar o dinheiro estabelecido para uma determinada idade não é um
            problema grave.”</p>
            <strong>4. Elimine pessoas nocivas</strong>
            <p>A dica é mais fácil de falar do que fazer, mas evite se relacionar com clientes,
            sócios, investidores ou funcionários que passam uma sensação negativa.
            É mais difícil ter a mesma postura perante a família, mas não há razões válidas 
            para aturar pessoas grosseiras.</p>
            <strong>5. Priorize a saúde</strong>
            <p>Tenha cuidado para encontrar um equilíbrio entre o que é saudável e o que é
            prazeroso. Não se castigue pela brecha no regime ou pela ausência pontual na
            academia. Seja disciplinado, mas entenda suas vontades.</p>
            <strong>6. Pare de pular refeições</strong>
            <p>“Estar ocupado não é desculpa para não comer”, diz Daylle. Segundo a autora,
            ao pular uma refeição, o nível de açúcar no sangue diminui e os níveis de
            estresse aumentam. Se você realmente não puder sentar para comer, providencie
            um lanche saudável e prático.</p>
            <strong>7. Respire!</strong>
            <p>Não se esqueça de que, quando você está estressado ou deprimido, exercícios
            simples de respiração podem trazer calma e alegria de volta.</p>
            <strong>8. Tenha um espaço aconchegante</strong>
            <p>Arrumar a cama e deixar o quarto em ordem criam um ambiente receptivo para 
            quando você chegar em casa cansado. A mesma postura deve ser mantida no 
            escritório. Jogue fora a papelada desnecessária e organize seus pertences,
            mas não se limite a isso. Decore seu espaço e torne-o agradável para você.</p>
            <strong>9. Tome um pouco de Sol</strong>
            <p>Trabalhar o dia inteiro em um ambiente escuro e fechado não é saudável.
            Se este é o seu caso, saia para tomar um ar de tempos em tempos. Além disso,
            invista em lâmpadas claras para iluminar o ambiente.</p>
            <strong>10. Presenteie-se com produtos de qualidade</strong>
            <p>Você é o tipo de pessoa que dá um presente sofisticado para o colega,
            mas tudo que compra para si mesmo é a versão mais barata disponível?
            Se o produto em questão é indiferente para você, tudo bem. Mas, se for
            algo de seu interesse, compre algo mais caro de vez em quando. Sempre que usá-lo,
            você vai reforçar a ideia de que merece coisas boas.</p>
            <p>Saiba Mais: <a href="https://revistapegn.globo.com/Noticias/noticia/2014/06/11-maneiras-simples-de-ser-mais-feliz-todos-os-dias.html">https://revistapegn.globo.com</a></p>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <strong>Ansiedade ?</strong>
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-parent="#accordionDicas">
          <div class="accordion-body">
            <strong>1. Identificar o problema é o primeiro passo</strong>
            <p>Para isso, é recomendado dedicar um momento para ficar sozinho(a) e avaliar a 
            rotina, atentando-se a observar quais pessoas ou momentos do dia provocam sensação
            de desconforto ou aflição. Outra coisa que costuma despertar aflição são previsões
            de mudança no cotidiano. Fique alerta! 
            Após saber o motivo da sua angústia, o próximo passo é respirar fundo e
            reprogramar a mente para que tal situação não impacte negativamente suas 
            emoções. Em outras palavras, é enxergar as coisas de uma maneira diferente.
            Esse é um processo que pode parecer difícil no começo, mas é possível e se 
            torna mais fácil com o tempo.</p>
            <strong>2. Controle a respiração</strong>
            <p>Quando sentir a ansiedade se aproximando, respire profundamente; inspire
            lentamente até encher o abdômen e, em seguida, expire esse ar bem devagar.
            Repita isso três vezes ou até sentir a respiração voltar ao normal.
            Como é uma técnica simples, é possível realizá-la em qualquer lugar.</p>
            <strong>3. Pratique exercícios físicos</strong>
            <p>A atividade física é uma grande aliada da saúde como um todo.
            E a máxima “corpo são, mente sã” também se aplica para quem precisa aliviar 
            as tensões, viu! Isso ocorre devido à liberação de substâncias que promovem 
            a sensação de prazer durante a prática de exercícios. Além disso, atividades
            fora da academia, como caminhada ou corrida, podem ser realizadas ao ar livre,
            proporcionando outras distrações e a melhoria da circulação sanguínea e 
            das funções cardiorrespiratórias. Parques arborizados, praças, calçadões 
            e até a areia da praia são opções para colocar o corpo em movimento.</p>
            <strong>4. Diminua o estresse do dia a dia</strong>
            <p>Outra coisa que pode ajudar no controle da ansiedade é reduzir o estresse 
            do dia a dia. Algumas técnicas muito recomendadas e eficazes são as sessões de 
            acupuntura, as massagens com abordagem oriental e a meditação.
            A prática de ioga também é excelente nesse processo, pois ensina a manter
            o controle mental e corporal aliando técnicas de respiração, meditação e
            equilíbrio físico. Além de melhorar o estresse, a atividade promove ampliação
            da flexibilidade, da vitalidade e fortalecimento muscular.</p>
            <strong>5. Fuja dos pensamentos negativos</strong>
            <p>Uma tendência no TAG é a preocupação exagerada e a tendência a pensamentos
            catastróficos. Por isso, evitar tais ideias é essencial para começar a
            combater o problema. 
            Uma dica bastante útil é dimensionar a seriedade da situação, avaliando o real 
            impacto que ela pode proporcionar. Para pessoas ansiosas, é fácil superestimar o
            nível de responsabilidade que de fato lhes cabe ou subestimar sua capacidade de
            resolução de problemas. 
            Após essa análise, deve-se trocar os pensamentos que trazem apreensão por outros
            positivos. Assim, toda vez que uma ideia ruim aparecer, ela deve ser substituída
            por uma agradável. No início, é comum sentir dificuldade, mas é importante não
            desistir e continuar tentando. Afinal, insistir com a negatividade só piora a
            ansiedade, estimulando o mal-estar e a tensão.</p>
            <strong>6. Concentre-se no momento presente</strong>
            <p>Deixar a mente vagar entre situações do passado e previsões do futuro é
            um importante ativador ou agravante de preocupações. Por isso concentrar-se 
            no momento atual é tão crucial. Ao fazer isso, sua capacidade de julgamento,
            análise e ação fica potencializada e não sobra espaço para projeções
            catastróficas.</p>
            <strong>7. Invista no autoconhecimento</strong>
            <p>Algo que também ajuda no controle da ansiedade é o processo de 
            autoconhecimento. Isso porque respeitar os próprios limites faz muita diferença 
            quando se tem o distúrbio. Quem se conhece e se aceita do jeito que é sabe dizer 
            “não” e consegue agir sem culpa, por saber exatamente quando algo vai lhe fazer 
            mal. 
            Claro que isso não ocorre do dia para a noite, é preciso que o indivíduo
            aprenda a se olhar com honestidade, reconhecendo as próprias falhas sem
            depreciar suas qualidades, e entenda que é normal para todos lidar com erros
            e acertos.</p>
            <strong>8. Dedique tempo para se cuidar</strong>
            <p>Dedicar uma hora do dia para cuidar de si, pensar nas necessidades que se
            apresentam e tomar atitudes para atendê-las é um importante passo para
            controlar a ansiedade. 
            Além disso, definir metas de vida, coisas que deseja fazer por si mesmo e
            direcionar parte da sua energia e tempo para realizá-las também ajuda. Manter
            hábitos saudáveis, como ter uma alimentação saudável e exercitar-se com
            regularidade, são ótimas formas de se cuidar.</p>
            <p>Saiba Mais: <a href="https://semprebem.paguemenos.com.br/posts/saude/ansiedade-como-controlar-veja-10-dicas-eficazes">https://semprebem.paguemenos.com.br</a></p>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
            <strong>Tédio ?</strong>
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-parent="#accordionDicas">
          <div class="accordion-body">
            <strong>Exercite-se</strong>
            <p>Em uma rotina normal já é necessária a inclusão de atividade física na sua vida.
            Como agora passeios, corridas, caminhadas e outras atividades ao ar livre estão
            restritas, tente adaptar os principais exercícios ao seu espaço físico. Caso você
            tenha uma bicicleta ergométrica ou uma esteira você é um privilegiado. Se não tem,
            adapte, use cadeiras, o chão, almofadas, apoios de sacada (com cuidado), pequenos
            pesos, etc. O importante é se manter ativo, alongado e captar nova energia.
            Exercite-se! Não deixe a preguiça tomar conta.</p>
            <strong>Limpe seus pensamentos</strong>
            <p>São muitas as técnicas para limpar a cabeça e ficar em paz consigo mesmo.
            O importante é se dar esses momentos. Para alguns é o final de tarde, 
            para outros de manhã ou até mesmo antes de dormir. Não importa o momento, 
            o ideal é que você consiga estar pleno na atividade. Pode ser 20 minutos, 
            30, uma hora, você decide. Relaxe, pense em coisas boas, auto estimule-se e 
            acalme-se. São momentos como esse que vão enquadrar a sua mente, relaxar seus 
            músculos e abrir um espaço importante no seu coração.</p>
            <strong>Leia o que te faz bem</strong>
            <p>Muita gente não tem o hábito de ler, o que é compreensível em um mundo
            cada vez mais caótico e com pressa. Mas agora você tem tempo livre. Maratonear
            uma série é ótimo, mas é passivo. Ao ler, você coloca para funcionar um grande
            número de neurônios que interpretam os códigos e traduzem sensações incríveis.
            Não custa tentar. Veja o que te chama atenção e não importa se é no catálogo da
            Amazon físico ou eBook. Importa é a aventura da leitura. Se você conseguir chegar
            no final do primeiro livro, vai querer ler o segundo,com certeza. E se não chegar
            por que não gostou, abandone o livro sem compromisso de finalizar e pegue outro.</p>
            <strong>Escute música</strong>
            <p>A música tem um papel importante neste momento. E não existe música certa 
            ou errada, boa ou ruim. Existe a música que nos faz bem. Então se você curte 
            música clássica, escute música clássica. Se você gosta de metal, escute metal.
            E assim vale para sertaneja, pagode, MPB, clássicos internacionais, você decide.
            E, pasmem, pode variar! A não necessariamente precisa de um momento para ela mas
            pode ter. Tem pessoas que trabalham com música, que almoçam com música, que meditam 
            com música, se exercitam com música e tem aqueles que precisam de um momento
            de ócio criativo para apreciar suas canções favoritas.</p>
            <strong>Cinema em casa</strong>
            <p>O ato de ir as salas de cinema é incomparável, pela atmosfera, pelo cheirinho
            de pipoca, a expectativa de viver duas horas dentro de um outro mundo de
            fantasia, ação, suspense, etc. Mas como as salas de cinema estão fechadas, 
            que tal transformar sua sala em uma mini sala de cinema?
            Pode assistir sozinho ou em família, pode ter pipoca, bebidas, etc.
            Pode ser no escuro ou no claro, você decide. Um bom filme, assim como a música,
            depende de quem está vendo. Já pensou em rever aquele clássico dos anos 80?
            Tá valendo. A grande vantagem do cinema em casa é que os catálogos de streaming
            estão cada dia melhores e para todos os gostos.</p>
            <strong>Live (Happy Hour) com amigos e família </strong>
            <p>Dificil ficar longe de quem a gente gosta. Com o passar do tempo a 
            vontade de ver, de conversar, de rir e compartilhar os bons momentos vai 
            ficando maior ainda. Como não há a possibilidade de fazer isso na casa de
            alguém ou em um bar, vale o improviso organizado. Organize um horário e
            convide todos para um encontro virtual. Cada um com a sua bebida com seus 
            snacks na segurança de casa, interagindo e vivendo os momentos de 
            confraternização. As vezes todo mundo quer falar ao mesmo tempo e dá 
            uma certa confusão, mas quem disse que isso não acontece no bar da esquina 
            com todo mundo ao vivo? Relaxe e divirta-se!</p>
            <strong>Escreva, borde, pinte, tire do papel boas ideias</strong>
            <p>Este já é o estágio avançado para o quarentener. Sabe aquelas ideias que
            nunca entram na agenda porque não têm tempo? Pois é, agora tem. Nem todo mundo
            consegue se concentrar em uma atividade nova, mas se quiser tentar pode descobrir
            a criatividade escondida dentro de você. Escolha um horário do dia para praticar e
            mãos a obra. Importante: se não conseguir ou desistir, não se culpe. Não deixe a
            frustração tomar conta. Você está fazendo aquilo porque quer, não porque precisa.
            Se desistir, não tem nenhum problema. O interessante dessas atividades que estão
            fora da nossa zona de conforto é que precisamos de mais concentração para fazer do
            que estamos acostumados e isso preenche o tempo de maneira efetiva.</p>
            <strong>Estude! Aprenda!</strong>
            <p>Outra atividade que é bônus. Muita gente fala que tem que estudar, fazer
            todos os cursos do mundo mas não é bem assim. Faça apenas aquilo que tem
            vontade no tempo que tiver vontade. Alguns vão estudar línguas, outros
            vão se aprimorar na suas competências e ainda tem aqueles que irão descobrir
            novos conhecimentos. Tudo vale. Aprimorar ou começar no estudo de algo é prazeroso
            e fornece energia para o dia a dia. Mas lembre-se! Não torne isso uma obsessão
            nem faça somente isso nas horas vagas. Tente estabelecer limites nos seus
            horários dentro de uma agenda equilibrada e saudável.</p>
          <strong>Cozinhar, porque não?</strong>
          <p>Muitos chefs de cozinha nasceram do talento, mas outros por necessidade.
          E agora é hora de necessidade. Não dá para comer todo dia de marmita, ou pelo
          preço ou pelo sabor sempre igual. Então mãos à obra! Comece pelo tradicional
          macarrão com molho de salsicha. Passe pelo clássico bife com arroz e ovo e 
          chegue ao frango com salada. São grandes pratos da culinária mundial que os 
          chefs renomados adoram e com certeza, comeram muito no início de suas carreiras.</p>
          <strong>O final de semana está chegando? E agora?</strong>
          <p>Dúvida cruel, mas não impossível de ser respondida. Tudo o que você faz durante
          a semana pode ter um novo capítulo no final de semana. E pode até trabalhar se
          quiser, na sua própria atividade ou em algum projeto pessoal. O final de semana 
          também é perfeito para pensar, planejar, estruturar aquilo que precisa de tempo
          livre para andar. Esteja você sozinho ou acompanhado durante a quarentena pratique
          este exercício que deixará você mais tranquilo durante a semana. Importante alinhar
          a sua expectativa em relação ao final de semana, mas sem cobrança. Mude planos, faça
          o que tiver vontade e se começar a fazer e passar a vontade, pare simplesmente.</p>
          <strong>Pode dormir?</strong>
         <p>Dormir recarrega as energias, mas não pode ser atividade única.
          Para alguns 6 horas, para horas 8, 10, mas não dá para ficar o dia todo na cama.
          Deu sono a tarde? durma 30 minutos com despertador, lave o rosto e volte a sua
          atividade. Integre o sono às suas atividades diárias, respeitando os seus momentos
          e, se possível, não fazendo nada muito estimulante antes de dormir.
          Na hora de acordar, mantenha sua rotina normal. Se você é daqueles que fica um
          pouco mais na cama, fique. Se levanta cedo e rápido, faça. Não mude o que você
          é por obrigação ou por que o momento pede. E no final de semana durma o necessário,
          mas não demais!</p>
          <p>Saiba Mais: <a href="https://www.demobile.com.br/11-dicas-o-que-fazer-na-quarentena-coisas-para-passar-o-tedio/">www.demobile.com.br</a></p>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
          <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
            <strong>Depressão...</strong>
          </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-parent="#accordionDicas">
          <div class="accordion-body">
            <p>1. Procure o hábito de fazer atividades físicas. Por mais difícil que pareça,
            tente manter uma rotina de exercícios. Não é necessário que sejam longos ou
            exaustivos, só precisa mexer o seu corpo. Você pode trocar o elevador pela
            escada, que tal? E se, ao invés de assistir mais um episódio daquela série,
            escolha dar uma volta no seu quarteirão ou passear com o seu cachorro?</p>
            <p>2. Separe um momento do seu dia para aproveitar um pouco da natureza. Pode ser em
            forma de luz solar, pisar na grama descalço ou receber um vento no rosto. 
            A natureza nos lembra de que somos todos os seres viventes e sobreviventes.</p>
            <p>3. Mantenha-se perto de pessoas da sua confiança e que consigam te entender 
            independente do seu estado de humor. Não importa se essa pessoa for alguém da 
            família ou um amigo, é sempre importante saber que podemos contar com alguém e 
            lembrar que somos amados e que não estamos sozinhos.</p>
            <p>4. Tente encontrar uma atividade que lhe proporcione prazer. Volte a tocar 
            aquele instrumento, andar de bicicleta, ou ainda descobrir um novo dom, porque
            não? O mundo está cheio de possibilidades, e você pode encontrar-se em algo 
            inimaginável.</p>
            <p>5. Experimente novos sabores! Comer é prazer para muitos, e com certeza 
            você tem uma comida favorita, mas ter várias comidas preferidas devem ser melhor
            ainda.</p>
            <p>6. Se alimente também de forma mais consciente e saudável. Azeite de oliva
            e oleaginosas são alimentos ricos que ajudam na prevenção da depressão. 
            Provavelmente você deve apreciar algum desses alimentos.</p>
            <p>7. E, não se esqueça de beber água! O seu corpo necessita de energia para
            funcionar corretamente.</p>
            <p><strong>Esteja atento quanto a sua saúde. Busque ajuda profissional ou comunique
            que está precisando de ajuda. Depressão não é sinal de fraqueza, e ela pode ser
            tratada.</strong></p>
            <p>Saiba Mais: <a href="https://cevisa.org.br/portal/7-dicas-de-como-sair-da-depressao/">https://cevisa.org.br</a></p>  
          </div>
        </div>
      </div>    
    </div>
  </div>
  
  <!-- Carrousel -->
  <div id="carouselCaptions" class="carousel slide mb-5" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselCaptions" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="imgs/fundo.png" class="d-block img-fluid w-100" alt="fundo1">
        <div class="carousel-caption">
          <h5>"Pense na pessoa que está do seu lado</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="imgs/fundo.png" class="d-block img-fluid w-100" alt="fundo2">
        <div class="carousel-caption">
          <h5>Talvez ela precisa de alguém para que se sinta bem..."</h5>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden"></span>
    </a>
    <a class="carousel-control-next" href="#carouselCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden"></span>
    </a>
  </div>

  <!-- Mensagens -->
  <div class="container mb-5" id="Mensagens">
      <h4 class="title display-5 mb-3">Deixe mensagens para as pessoas aqui ; )</h4>
      <div class="box mb-5" id="box">
        <?php
        include "PHP_comments/connection.php" 
        ?> 
        <?php 

          mysqli_select_db($link, $banco) or die(mysqli_error());
          
          $resultado = mysqli_query($link ,'SELECT * FROM comentarios ORDER BY id');
        
          while($comentario = mysqli_fetch_object($resultado)){
            ?>

              <div class="card mb-3" style="width: 100%;">
                <div class="card-body">
                  <div class="card-title text-right">
                    <span><?php echo($comentario->DataHora);?>  </span><i class="fa fa-thumb-tack text-dark"></i>
                  </div>
                  <h5 class="card-subtitle mb-2"><?php echo($comentario->nome); ?></h5>
                  <p class="card-text"><?php echo($comentario->comentario);?></p>
            
                </div>
              </div>

            <?php
          }
        ?>
      </div>
    <div class="row justify-content-sm-center">
      <form class="col-sm-5 col-md-7" id="formulario" name="formulario" method="post" action="PHP_comments/insertcomments.php">
        <div class="input-group mb-3">
          <span class="input-group-text">Nome: </span>
          <input type="text" class="form-control" id="nome" placeholder="Autor" name="nome">
        </div>
        <div>
          <textarea class="form-control mb-3" id="comentario" placeholder="Mensagem" name="comentario"></textarea>
        </div>
        <div class="d-flex justify-content-end">
          <input type="submit" class="btn btn-warning" name="submit" id="enviar" value="Enviar">
        </div>
      </form>
    </div>
  </div>
 

  <!--Footer-->
  <footer class="rodape" id="Sobre">
    <div class="container">
      <div class="row">
          <div class="col-sm-4 text-center mt-3">
              <p>Page Links</p>
              <a class="navlink" href="#Home">Home</a><br/>
              <a class="navlink" href="#ParaVoce">Para Você</a><br/>
              <a class="navlink" href="#Dicas">Dicas</a><br/>
              <a class="navlink" href="#Mensagens">Mensagens</a><br/>
            </ul>
          </div>
          <div class="col-sm-4 text-center mt-5">
              <h5>Somente um site para fazer o seu dia melhor...</h5>
              <p>: )</p>
          </div>
          <div class="col-sm-4 text-center mt-3">
            <p>Social</p>
            <p><a href="https://www.facebook.com/welberthy.gustavo.1" class="link-primary"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</a></p>
            <p><a href="https://github.com/WelberthyGustavo" class="link-github"><i class="fa fa-github" aria-hidden="true"></i> GitHub</a></p>
            <p><a href="https://www.instagram.com/gustavo_code/" class="link-insta"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a></p>
          </div>
      </div>
    </div>
  </footer>
  <footer class="footer">
    <p> By Development Welberthy Gustavo &copy; 2021</p>
  </footer>

  <!--Parallax JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="parallax.js/parallax.js"></script>

  <!-- JavaScript-->
  <script src="node_modules/jquery/dist/jquery.js"></script>
  <script src="node_modules/popper.js/dist/popper.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

  <!--Script Toast-->
  <script>
    $(document).ready(()=>{

      $('#toast-place').append(`
      <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="50000">
        <div class="toast-header justify-content-between">
          <div>
            <img src="imgs/iconcat.jpg" class="rounded me-2" style="width:30px; height:30px;" alt="...">
            <strong class="me-auto mr-2">Gatinho</strong>
            <small>11 mins ago</small>
          </div>
          <button type="button" class="btn-close bg-light" data-dismiss="toast" aria-label="Close">&times;</button>
        </div>
        <div class="toast-body">
          Olá, Tudo bem..
          Envie esse site para uma pessoa especial... 
          faça o dia dela melhor... :)
        </div>
      </div>
      `)

      $('.toast').toast('show');
    });
  </script>
  
  <!-- Verificação Formulario -->
  <script language="javascript">
    $("#formulario").submit(function(){

        var nome = $('#nome').val();
        var comentario = $('#comentario').val();

        if(nome == ""){
          alert('É Necessario um Nome...');
          return false;
        }
        if(comentario == ""){
          alert('É Necessario uma Mensagem...');
          return false;
        }
        else{
          alert('Mensagem enviada');
          return;
        }
        
        $('#formulario').submit();

    });
  </script>

  <!-- Box Script -->
  <script>
    $('#box').scrollTop($('#box')[0].scrollHeight);
  </script>


   
  <!--sass --watch node_modules/bootstrap/scss:node_modules/bootstrap/compiler node_modules/font-awesome/scss:node_modules/font-awesome/css style/scss:style/css-->
</body>
</html>