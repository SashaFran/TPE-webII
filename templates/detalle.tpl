
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title></title>

  <link rel="stylesheet" type="text/css" href="./style/estilo.css" >
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  <div class="Navegador">
    <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link" href="home" id="Home">Home</a>
  </li>
  </ul>
  </div>

<div class="cuerpoDetalle" id="Cuerpo">

{foreach from=$detalle item=det}
<div class="infoTitulo">
  <h2>{$det['Titulo']}</h2>
</div>
<figure class="gameFig" >
  <img class="gameImg" src="{$det['Img_path']}" alt="juego {$det['id_Juego']}">
</figure>
<div class="descripcion">
<div class="info">
  <h5 class="infoGame">Genero: {$det['Genero']} |</h5>
  <h5 class="infoGame">Consola: {$det['Consola']} |</h5>
  <h5 class="infoGame">Precio: $ {$det['Precio']}</h5>
</div>
  <h5>Descripcion:</h5>
  {$det['Descripcion']}<br>
</div>
{/foreach}

</div>
{include file = 'footer.tpl'}
</body>
</html>
