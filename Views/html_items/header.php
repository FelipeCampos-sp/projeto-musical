<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php  echo  gera_titulos();  ?></title>
	<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  
</head>
<body>
   
  <header>
    
   <nav class="navbar navbar-expand-lg navbar-light bg-dark">   
      
     <div class="container-fluid">
      <img src="img/logo.png">
        
          
      
      <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
     
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

       <ul class="navbar-nav mr-auto">
          
          

          <li class="nav-item active">
            <a class="nav-link text-white" title="Home" href="?p=home">Home</a>
          </li>
         
          <li class="nav-item active">
            <a class="nav-link text-white" title="Fique por dentro" href="?p=fique">Fique por dentro</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link text-white dropdown-toggle" title="mídias" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
            Mídias
            </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="?p=videos">Vídeos</a>
            <a class="dropdown-item" href="?p=podcasts">Podcasts</a>
            <a class="dropdown-item" href="?p=imagem">Imagens</a>
         </div>
      </li>
       
        <li class="nav-item active">
            <a class="nav-link text-white" title="Trilha sonoroa" href="?p=trilha">Trilha sonora</a>
          </li>   
       

         <li class="nav-item active">
            <a class="nav-link text-white" title="Quem somos" href="?p=quem-somos">Quem somos</a>
          </li> 
           
          <li class="nav-item active">
            <a class="nav-link text-white" title="Fale conosco" href="?p=contato">Fale conosco</a>
          </li> 
        </ul>
        
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="pesquisa" placeholder="pesquisa">
          <button class="btn btn-secondary" type="submit">Pesquisar</button>
       </form>
             
  
   </div>
  

    </div>
  </nav>
</header>