<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Game Beat</title>
        <link rel="stylesheet" href="<?= BASE_URL ?>/assets/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css">
        <link rel="shortcut icon" href="<?=BASE_URL?>/assets/img/logo-icone.png ">

    </head>
    <body>

        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-dark">   

                <div class="container">
                   

                    <button class="navbar-toggler bg-light mr-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <a href="<?= BASE_URL ?>/Home"><img  class="logo"   src="<?= BASE_URL ?>/assets/img/Logotipo Reduzido.png" style="float:right;"></a>
                    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <ul class="navbar-nav ml-auto" style="padding-right:100px;">



                            <li class="nav-item active">
                                <a class="nav-link text-white" title="Home" href="<?= BASE_URL ?>">Home</a>
                            </li>

                            <li class="nav-item active">
                                <a class="nav-link text-white" title="Fique por dentro" href="<?= BASE_URL ?>/fique">Fique por dentro</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link text-white dropdown-toggle" title="mídias" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                                    Mídias
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?= BASE_URL ?>/video">Vídeos</a>
                                    <a class="dropdown-item" href="<?= BASE_URL ?>/video/podcast">Podcasts</a>
                                    <a class="dropdown-item" href="<?= BASE_URL ?>/video/imagem">Imagens</a>
                                </div>
                            </li>



                            <li class="nav-item active">
                                <a class="nav-link text-white" title="Quem somos" href="<?= BASE_URL ?>/sobre">Quem somos</a>
                            </li> 

                            <li class="nav-item active">
                                <a class="nav-link text-white" title="Fale conosco" href="<?= BASE_URL ?>/contato">Contato</a>
                            </li>
                            
                            <li class="nav-item active">
                                <a class="nav-link text-white" title="Clausula" href="<?= BASE_URL ?>/clausula">Cláusula</a>
                            </li> 
                            
                        </ul>

                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="pesquisa" placeholder="pesquisa" >
                    
                            <button  class="btn btn-secondary" type="submit">Pesquisar</button>
                        </form>

                    </div>

                </div>
            </nav>
        </header>


        <?php $this->loadViewInTemplate($viewName, $viewData); ?>

        <footer>
            <div class="container">
                <div class="row justify-content-md-start" style="padding-top:30px; margin:5%;">
                    <h3 class="white">Redes sociais</h3>
                    <div class="col-sm">
                        <a href="https://www.twitter.com/GameBeat5?s=09" title="twitter"><img src="<?= BASE_URL ?>\assets\img\bg-22.png"></a>
                        
                        <a href="https://www.facebook.com/profile.php?id=105634454479720&ref=content_filter" title="facebook"><img src="<?= BASE_URL ?>\assets\img\bg-24.png"></a>
                        
                        <a href="https://www.instagram.com/g.a.m.e_b.e.a.t/?hl=pt" title="instagram"><img src="<?= BASE_URL ?>\assets\img\bg-23.png"></a>
                    </div>
                    <div class="col-sm">
                        <a href="<?= BASE_URL ?>/contato" class="text-white">Fale conosco</a>
                    </div>
                    
                </div>
            </div> 
        </footer>


        <script src="<?= BASE_URL ?>/assets/js/jquery.js"></script>
        <script src="<?= BASE_URL ?>/assets/bootstrap/dist/js/bootstrap.min.js"></script> 
        <script src="<?= BASE_URL ?>/assets/js/script.js"></script>
    </body>
</html>
