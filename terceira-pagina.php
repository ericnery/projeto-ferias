<?php require_once('header.php')  ?> <!--CABEÇALHO DA PAGINA-->
      
    <div class="container-fluid">
      <div class="row">
        <section class="col-2">
        <?php require_once('menu.php')  ?> <!-- MENU DA PAGINA--> 
        </section>
        <div class="col-12 col-md ">
            
            <?php require_once('breadcrumbs.php')
 ?>
            <div class="container-fluid"><span class="badge badge-primary w-100"><div class="w-100">              
            </div> </span></div>
            
                <div class="row">
                    <div class="col-md">
                        <main id="content">
                            <article id="article" class="acessibilidade" >
                                <h1>SESSAO PRINCIPAL</h1>
                                <p>Change the default CSS settings to see the effect.</p>
                                <section>
                                    <h1> Essa é a terceira pagina</h1>
                                    <h1>WWF</h1>   
                                    <p>The World Wide Fund for Nature (WWF) is an international organization working on issues regarding the conservation, research and restoration of the environment, formerly named the World Wildlife Fund. WWF was founded in 1961.</p>
                                </section>

                                <p>Change the default CSS settings to see the effect.</p>

                                <p><strong>Note:</strong> The section tag is not supported in Internet Explorer 8 and earlier versions.</p>
                            </article>
                        </main>
                    </div>
                    <div class="col-md-2">
                        <aside>
                            <h6>PROPAGANDA</h6>
                            <?php require_once('aside.php')  ?> 
                        </aside>
                </div> 
        </div>
      </div>
    </div>
<?php require_once('footer.php')  ?>  <!--RODAPÉ DA PAGINA-->

  

      