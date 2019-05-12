<?php require_once('header.php')  ?> <!--CABEÇALHO DA PAGINA-->
      
    <div class="container-fluid">
      <div class="row">
        <section class="col-12 col-md-2 " aria-label="Aqui está o menu de navegação principal da página" >
        <?php require_once('menu.php') ?> <!-- MENU DA PAGINA--> 
        </section>
        <div class="col-12 col-md ">
            <nav class="row " aria-label="Veja em qual página você está" > <!-- PROGRESSO DA PAGINA-->
                    <ol class="breadcrumb2">
                        <li class="breadcrumb-item active" aria-current="page" title="Você esta na página inicial"><a>Página inicial</a></li>
                    </ol>
            </nav>
            <div class="container-fluid">
            <span class="badge badge-primary w-100">
                <div class="w-100">              
                </div> 
            </span>
            </div>
            
                <div class="row">
                    <div class="col-md">
                        <main id="content"  aria-label="Você está no conteudo principal">
                            <article id="article" class="acessibilidade" aria-label="Você está no conteudo principal" >
                                <h1>POIS ESTA É A SESSÃO PRINCIPAL DE TESTE</h1>
                                <p>Esse site tem de ser totalmente acessível.</p>
                                <section>
                                <h2> Essa é o primeiro conteudo da minha primeira página</h2>
                                <h3>Rubens que leciona essa matéria de acessibilidade para web.</h3>   
                                <p>Estamos testando com o leitor de tela nátivo da Google.</p>
                                </section>

                                <p>Teremos mais testes</p>

                                <p><strong>Nota:</strong> Testar em outras ferramentas de acessibilidade.</p>
                               
                            </article>
                        </main>
                    </div>
                    <div class="col-md-2">
                        <aside aria-label="Você está no conteudo lateral" >
                            <h6>PROPAGANDA</h6>
                            <?php require_once('aside.php')  ?> 
                        </aside>
                </div> 
        </div>
      </div>
    </div>
<?php require_once('footer.php')  ?>  <!--RODAPÉ DA PAGINA-->

  

      