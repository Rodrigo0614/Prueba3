<?php


session_start();
if (!isset($_SESSION['id'])) {
  header("Location: index.php");
}

$nombre = $_SESSION['nombre'];
$tipo_usuario = $_SESSION['tipo_usuario'];

?>



<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>Nuestras ofertas y eventos</title>
  <link rel="icon" type="image/jpg" href="../img/Logoxmoney.png" />
  <meta name="viewport"
    content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
  <script src="https://kit.fontawesome.com/a13612c050.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/bootstrap.css">
  

  <script src="../js/bootstrap.min.js"></script>

</head><br>

<header>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-top: -30px;">

    <img src="../img/Logox.png" width="135" height="105" class="d-inline-block align-top" alt="">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="links">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php"><span class="fs-5 text-light fw-bold  ">Inicio</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../usuario/pag2.php"><span class="fs-5 text-light fw-bold  ">Sacramentos</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../usuario/pag3.php"><span class="fs-5 text-light fw-bold  ">Aprende</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../usuario/pag4.php"><span class="fs-5 text-light fw-bold  ">Sobre nosotros</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../usuario/contacto.php"><span class="fs-5 text-light fw-bold  ">Cont??ctanos</span></a>
          </li>
        </ul>


        </ul>
        <div class="d-flex" id="barra">
          <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $nombre;?></a>
          <a class="nav-link btn btn-outline" aria-current="page" href="../sistema/logout.php">Cerrar sesi??n</a>

        </div>

      </div>
    </div>
    </div>
  </nav>


</header>

<body>
   
  <div class="container">
    <p> <h2>Sacramentos</h2>
            Para la Iglesia cat??lica, los sacramentos son signos eficaces de la gracia de Dios,??? celebrados bajo ritos visibles, que fueron instituidos por Cristo y confiados a la Iglesia, mediante los cuales se dispensa la vida divina a todas personas que los reciben con la disposici??n adecuada.???
            Existen siete sacramentos: bautismo, confirmaci??n, eucarist??a, penitencia, unci??n de enfermos, orden sacerdotal y matrimonio. Los sacramentos se corresponden a todas las etapas y momentos importantes de la vida del creyente, estableciendo un paralelismo entre las etapas de la vida natural y las etapas de la vida espiritual. As??, los sacramentos se pueden clasificar en tres grupos: los "sacramentos de la iniciaci??n cristiana", los "sacramentos de curaci??n" y los "sacramentos al servicio de la comuni??n y la misi??n de los fieles".

        </p>

        <p>
            <h2>Sacramentos de iniciaci??n cristiana</h2> 
            <ul>
                <li>Bautismo: Es el fundamento de toda la vida cristiana, el p??rtico de la vida en el esp??ritu y la puerta que abre el acceso a los otros sacramentos. Por el Bautismo los cristianos son liberados del pecado y regenerados como hijos de Dios, llegan a ser miembros de Cristo y son incorporados a la Iglesia y hechos part??cipes de su misi??n. </li>  <br>
                 <li> <b>???Confirmaci??n:</b> Con el bautismo y la eucarist??a, el sacramento de la confirmaci??n constituye el conjunto de los "sacramentos de la iniciaci??n cristiana". La confirmaci??n une a los bautizados m??s ??ntimamente a la Iglesia y "los enriquece con una fortaleza especial del Esp??ritu Santo. De esta forma se comprometen mucho m??s, como aut??nticos testigos de Cristo, a extender y defender la fe con sus palabras y sus obras"  </li> <br>
                 <li> <b>???Eucarist??a:</b> Este sacramento culmina la iniciaci??n cristiana. Los que han sido elevados a la dignidad del sacerdocio real por el Bautismo y configurados m??s profundamente con Cristo por la Confirmaci??n, participan por medio de la Eucarist??a con toda la comunidad en el sacrificio mismo del Se??or.</li>  <br> ???Cabe mencionar que para el catolicismo la Eucarist??a no representa un s??mbolo sino que es Jesucristo mismo con su cuerpo, sangre, alma y divinidad presentes en la Eucarist??a.
                </ul>     
        </p>
      

        <div class="text-center">
          
          <img src="..\img\img5.jfif" height="300px" width="650px" alt="Imagen no encontrada">
        
        </div>

      

      <p>
          <ol>
              <b><li>Sacramentos de curaci??n</li></b> <br>
              <ul>
               <li> <a href="https://es.wikipedia.org/wiki/Sacramento_de_la_penitencia" target="blank" rel="noopener noreferrer"><b>Penitencia</b> </a>: Mediante este sacramento los fieles obtienen de la misericordia de Dios el perd??n de los pecados cometidos contra ??l y se reconcilian con la Iglesia. Recibe el nombre de sacramento de conversi??n, ya que realiza sacramentalmente la llamada de Cristo a la conversi??n, la vuelta al Padre del que el hombre se hab??a alejado por el pecado; sacramento de la penitencia, al consagrar un proceso personal y eclesial de conversi??n, de arrepentimiento y de reparaci??n por parte del cristiano pecador; sacramento de la confesi??n, porque la manifestaci??n de los pecados ante el sacerdote es un elemento esencial de este sacramento; sacramento del perd??n porque Dios concede al penitente "el perd??n y la paz"; y sacramento de reconciliaci??n, porque otorga al pecador el amor de Dios que reconcilia.</li>
               <li>Unci??n de los enfermos: Con la sagrada unci??n de los enfermos y con la oraci??n de los presb??teros, toda la Iglesia entera encomienda a los enfermos al Se??or sufriente y glorificado para que los alivie y los salve. Incluso los anima a unirse libremente a la pasi??n y muerte de Cristo; y contribuir, as??, al bien del Pueblo de Dios" </li> <br>
               
              
              </ul>
              <b><li>Sacramentos al servicio de la comunidad</li></b> <br>
              <ul>
                  <li> <a href="https://es.wikipedia.org/wiki/Sacramento_del_orden" target="blank" rel="noopener noreferrer"><b>Orden sacerdotal:</b> </a> El Orden es el sacramento gracias al cual la misi??n confiada por Cristo a sus Ap??stoles sigue siendo ejercida en la Iglesia hasta el fin de los tiempos: es, pues, el sacramento del ministerio apost??lico. Comprende tres grados: el diaconado, el presbiterado y el episcopado.
                  Es el ??nico sacramento que solo puede ser recibido por los hombres.</li>
                  <li> <b>Matrimonio</b> "La alianza matrimonial, por la que el var??n y la mujer constituyen entre s?? un consorcio de toda la vida, ordenado por su misma ??ndole natural al bien de los c??nyuges y a la generaci??n y educaci??n de la prole, fue elevada por Cristo Nuestro Se??or a la dignidad de sacramento entre bautizados"</li>
                  
              </ul>
      </p>
      <div class="d-flex justify-content-center">
      <table>
          <tr>
             
              <th>Mandamientos</th>
              <th>Cita biblica</th>
              
          </tr>
      
          <tr>
        
            <td>1. Amar??s a Dios sobre todas las cosas.</td>
            <td>(Ex 20, 2-5)</td>
            
          </tr>
        
          <tr>
        
            <td>2. No tomar??s el nombre de Dios en vano</td>
            <td>(Ex 20, 7; Dt 5, 11)</td>
            
        
          </tr>
          <tr>
              <td>3. Santificar??s las fiestas</td>
              <td>(Ex 20, 8-10; cf Dt 5, 12-15)</td>
          </tr>
          <tr>
              <td>4. Honrar??s a tu padre y a tu madre</td>
              <td>(Ex 20, 12)</td>
          </tr>
          <tr>
              <td>5. No matar??s</td>
              <td>(Ex 20, 13)</td>
          </tr>
          <tr>
              <td>6. No cometer??s actos impuros</td>
              <td>(Ex 20, 14; Dt 5, 17)</td>
          </tr>
          <tr>
              <td>7. No robar??s</td>
              <td>(Ex 20, 15; Dt 5,19)</td>
          </tr>
          <tr>
              <td>8. No dar??s falsos testimonios ni mentir??s</td>
              <td>(Ex 20, 16)</td>
          </tr>
          <tr>
              <td>9. No consentir??s pensamientos ni deseos impuros</td>
              <td>(Ex 20, 17)</td>
          </tr>
          <tr>
              <td>10. No codiciar??s los bienes ajenos</td>
              <td>(Dt 5, 21)</td>
          </tr>

      </table>
    </div>
 </div><br><br>
    

    

 <footer class="footer">
  <div class="container bg-dark text-light">
      <div class="text-center">
        <img src="../img/icono1.png " class="rounded" alt="Facebook" title="" width="5%" >
        <img src="../img/icono2.png" class="rounded" alt="Twitter" title="" width="5%" >
        <img src="../img/icono3.png" class="rounded" alt="Youtube" title="" width="5%" >
      </div>
      
   
    <p class="copy text-center">&copy; Todos los derechos reservados a Iglesia LosAndes | 2022 <br> Steven rizo, Rodrigo gonzales, Jose navarro</p>

    
      </div>
  
  </footer>   
  <script src="../js/sesion.js"></script>
</body>

</html>