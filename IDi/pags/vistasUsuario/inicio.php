<?php
 session_start();
    if(!isset($_SESSION["validarIngreso2"]))
    {
         echo "<script>window.location = '/idi/';</script>";
        return; 
    } 
    else
    {
      if($_SESSION["validarIngreso2"] != 'ok') 
      {
         echo "<script>window.location = '/idi/';</script>";
        return; 
      }  
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/idi/css/styles.css" rel="stylesheet" 
 type="text/css" />
    <title>TMB</title>
</head>
<style>
/*Encabezado*/
.container-header{
    width: 100%;
    max-width: 1200px;
    position: relative;
    margin: auto;
}

.logo-title{
    display: flex;
}

.logo-title img{
    width: 60px;
    height: 60px;
    margin-top: 10px;
    margin-left: 10px;
}

header{
    width: 100%;
    height: 80px;
    background-color: #236AD4;
}
/* imagen en movimiento */
.container-portada{
    margin-left: 10%;
    margin-top: 10%;
    width: 80%;
    height: 25%;
    position: relative;
    background-image: url(https://mtpnoticias.com/wp-content/uploads/2022/08/Conoce-la-ruta-horarios-y-paradas-del-Lobobus-1-1024x637.jpeg);
    background-size: 130%;
    animation: movimiento 10s infinite linear alternate;  
}

@keyframes movimiento{
    from{
        background-position: left;
    }to{
        background-position: right;
    }
}


.capa-gradient{
    width: 100%;
    height: 100%;
    position: absolute;
    background: -webkit-linear-gradient(left, black, #0672d0);
    opacity: 0.4;
}

.container-details{
    width: 100%;
    max-width: 100px;
    position: relative;
    margin: auto;
}


.details{
    width: 100%;
    max-width: 500px;
    position: relative;
    top: 50%;
    color: rgb(255, 255, 255);
}

/*Botones*/
.card-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 16px;
  }

  .card {
    border-radius: 4px;
    border: 1px solid #eee;
    background-color: #fafafa;
    height: 40px;
    width: 200px;
    margin: 0 8px 16px;
    padding: 16px;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    transition: all 0.2s ease-in-out;
    line-height: 24px;
  }

  .card-container .card:not(:last-child) {
    margin-right: 0;
  }

  .card.card-small {
    height: 16px;
    width: 168px;
  }

  .card-container .card:not(.highlight-card) {
    cursor: pointer;
  }

  .card-container .card:not(.highlight-card):hover {
    transform: translateY(-3px);
    box-shadow: 0 4px 17px rgba(0, 0, 0, 0.35);
  }

  .card-container .card:not(.highlight-card):hover .material-icons path {
    fill: rgb(105, 103, 103);
  }

  .card.highlight-card {
    background-color: #1976d2;
    color: white;
    font-weight: 600;
    border: none;
    width: auto;
    min-width: 30%;
    position: relative;
  }

</style>

<body>

<!-- Nuestro menú (header) //-->
<header class="main-header">
     <div class="content-wrapper">
      <!-- Logo //-->
      <a href="/idi/"><img src="/idi/images/logo.png" alt="logo de Tracking my bus" class="logo" /></a> 
       <!-- Ícono de menú (Responsive Design) //--> 
       <svg id="open-menu-button" class="jam" xmlns="http://www.w3.org/2000/svg" viewBox="-5 -7 24 24" width="32" fill="currentColor"><path d="M1 0h5a1 1 0 1 1 0 2H1a1 1 0 1 1 0-2zm7 8h5a1 1 0 0 1 0 2H8a1 1 0 1 1 0-2zM1 4h12a1 1 0 0 1 0 2H1a1 1 0 1 1 0-2z"></path></svg>
      <!-- Menú //-->
       <nav id="main-menu" class="main-menu">
         <svg id="close-menu-button" class="jam" xmlns="http://www.w3.org/2000/svg" viewBox="-6 -6 24 24" width="32" fill="currentColor"><path d="M7.314 5.9l3.535-3.536A1 1 0 1 0 9.435.95L5.899 4.485 2.364.95A1 1 0 1 0 .95 2.364l3.535 3.535L.95 9.435a1 1 0 1 0 1.414 1.414l3.535-3.535 3.536 3.535a1 1 0 1 0 1.414-1.414L7.314 5.899z"></path></svg>
         <ul>
           <li>
             <a href="/idi/" class="btn-register">Cerrar Sesión</a>
           </li>
         </ul>
       </nav>
     </div>
   </header>
   <!-- Fin del header //-->
    <!--<header>
        <div class="container-header">
            <div class="logo-title">
                <img src="https://contents.sixshop.com/thumbnails/uploadedFiles/59196/default/image_1550648151932_1000.png" alt="Logo">
                <h2>TMB</h2>
            </div>
        </div>
    </header>-->


    <div class="container-portada">
        <div class="capa-gradient"></div>
        <div class="container-details">
            <div class="details">
                <h1 style="color: white; font-size: 2rem">Traking my bus</h1>
            </div>
        </div>
    </div>

    <div class="card-container ">
        <a class="card" href="http://localhost/idi/pags/vistasUsuario/vrutas.html">
            <span>Rutas</span>
            <svg class="material-icons" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>    
        </a>
    </div>

        
</body>

<footer class="main-footer">
    <p>Todos los derechos resevardos &#169; 2022 | Tracking my bus</p>
</footer>

</html>