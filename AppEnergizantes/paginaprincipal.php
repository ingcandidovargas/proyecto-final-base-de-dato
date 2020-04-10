<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta content="text/html"; charset="UTF8">
    <!-- Required meta tags -->
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Fábrica de bebida dominicana(Ebedom)</title>

</head>
<body backgrond color:black>
<div class="sticky-top">
      <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <a class="navbar-brand" href="#">
            <img src="img/ebedom.jpg" width="50" height="50" alt="">
         </a>
         <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <a class="navbar-brand text-white">
                <i class="fas fa-money-check"></i> Ebedom Dominica
            </a>     
               <li class="nav-item dropdown active">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbardrop" href="#" tabindex="-1"
                     aria-disabled="true">HISTORIA</a>
                  <div class="dropdown-menu dropdown-menu-right bg-info">
                <a>Fábrica de bebidas Dominicana(Ebedom).
                   Es una de las principales fábricas de Bebida ANTI-ESTRES de la República Dominicana, propiedad de la Fundación Cruz.
                   Fue fundada el 24 de abril del año 1982 por el ING Feliz Cruz. 
                   Dio a conocer su principal marca (Energiflex) en el año 1990 y desde entonce, se a expandido en toda la República dominicana.</a>
             </div>
           </li>

               <li class="nav-item dropdown active">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbardrop" href="#" 
                     aria-disabled="true">MISION</a>
                     <div class="dropdown-menu dropdown-menu-right bg-info">
                     <a>Nuestra mision es:
                        Ser la mejor fábrica de bebidas energizantes de la República Dominicana, llevando bebedidas sanas para 
                        el consumo de la poblacion, bajo los estandares de calidad y salud mas altos de nuestra region.</a>
                     </div>
               </li>

               <li class="nav-item dropdown active">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbardrop" href="#" tabindex="-1"
                     aria-disabled="true">VISION</a>
                  <div class="dropdown-menu dropdown-menu-right bg-info">
                  <a>Nuestra vision es:
                    Crear vínculos fuertes y duraderos con nuestro clientes y consumidores, llevando buenos productos y mejorando la vida de las personas en ello.</a>
                  </div>
                 </li>

               <li class="nav-item dropdown active">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbardrop" href="#" tabindex="-1"
                    aria-disabled="true">VALORES</a>
                   <div class="dropdown-menu dropdown-menu-right bg-info">
                  <a>Respetar a nuestros empleados: es el mejor valor que tenemos y el mejor regalo que podemos cultivar.
                     Esto,   a raiz de que la sumatoria de los esfuerzos colectivos va a ser mas sustancial y significaticava siempre, que la sumatoria de los esfuerzos individuales.
                     Esa es nuestra meta dia tras dia. Ser mejores personas creando y cultivando mejores lideres para ir  
                     forjando una empresa solidad como una gran familia.</a>
                  </div>
                 </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
               <input class="form-control mr-sm-2" type="search" placeholder="BUSCAR" aria-label="BUSCAR"> 
            </form>
         </div>
      </nav>
   </div> 
   <input type="button" class="border border-warning" a class href="#" value="Bienvenido a (Ebedom) Dominicana.">

<?php
    include("Libreria/motor.php");
    $elementos = new elementos();
      
     // echo $_SERVER['QUERY_STRING'];  
    if (isset($_POST['guardar'])) {
        $elementos->Id = $_POST['txtId'];
        $elementos->nombre = $_POST['txtNombre'];
        $elementos->precio = $_POST['txtPrecio'];
        $elementos->descrip = $_POST['txtDesc'];
        $elementos->unidad = $_POST['txtUni'];
        $elementos->Guardar();
     //   echo "POST";
    } else if(isset($_GET['edit'])){
       
        $elementos->Id = $_GET['edit']+0;
        $elementos->cargar();
        //echo "OTRO";
    }
    else if(isset($_GET['delete'])){
        $elementos::borrar($_GET['delete']+0);        
    }
?>

<style>
    #tblDetalle {
        width: 100%;
        border: solid 1px black;
    }
    #tblDetalle thead {
        background: black;
        color: white;
}
</style>
   
    <div class="container">
        <form method="POST" action="paginaprincipal.php">
        <input type='hidden' name='guardar' value='guardar'>
        <table>
<div class="form-group col-sm-12">   
    <input type="date" class="btn btn-dark auto float-right" name="cumpleanios" step="1" min="2020-01-01" max="2020 -12-31" 
        value="<?php echo date("Y-m-d");?>">
        <div class="form-row">
    <!-- <div class="form-group col-md-6"> -->
    <input type="button" class="btn btn-outline-info ml-auto" a class href="AppEnergizantes/Cerrar.php" value="Cerrar Sesión"></a>
 </div>
</div>

    <h4>Mantenimiento e Inventario de Productos</h4>
    <tr> 
        <th>Id:</th>
        <td>
            <input readonly value= "<?php echo $elementos->Id; ?>" type="text" name="txtId" id="txtId"/>
                </td>
                </tr>
            <tr>
            <th>Producto:</th>
               <td>
                   <input value= "<?php echo $elementos->nombre; ?>" type="text" name="txtNombre" id="txtNombre" required/>
                   </td>
            </tr>
            <tr>
                <th>Precio:</th>
                <td>
                    <input value= "<?php echo $elementos->precio; ?>" type="text" name="txtPrecio" id="txtPrecio" />
                   </td>
            </tr>
            <tr>
            <th>Descripcion:</th>
               <td>
                   <input value= "<?php echo $elementos->descrip; ?>" type="text" name="txtDesc" id="txtDesc" required/>
                   </td>
             </tr>
            <tr>
            <th>Unidades:</th>
               <td>
                   <input value= "<?php echo $elementos->unidad; ?>" type="text" name="txtUni" id="txtUni" required/>
                   </td>
            </tr>
            <tr>
            <td colspan ="2" align="center">
            <!-- <button onclick = "window.location.replace='paginaprincipal.php';" type ="botton">Nuevo</button> -->
            <button onclick = "javascript:getInputValue();" class="btn btn-outline-dark" type ="botton">Agregar</button>
            <button type="submit" class="btn btn-outline-dark">Guardar</button>
          </td>
        </tr> 
        </table>
        </form>

        <fieldset>
            <legend>Articulos Agregados Para Compra</legend>
            <table id="tblDetalle">
                <thead>
                    <tr>
                    <th>Id</th>
                    <th>Producto</th>
                    <th>Precio unidad</th>
                    <th>Descripcion</th>
                    <th>Total Unidades</th>
                    <th>Mantenimientos</th>
               </tr>
            </thead>
    </div>
    <tbody>
        <?php
            $elementos = elementos::lista();
            foreach($elementos as $art){
                $Id = $art['ID'];
                echo <<<CODIGO
                <tr>
                    <td>{$Id}</td>
                    <td>{$art['Nombre']}</td> 
                    <td>{$art['Precio']}</td> 
                    <td>{$art['Descripcion']}</td> 
                    <td>{$art['Unidades']}</td> 
                    <td>
                    <a href ='paginaprincipal.php?edit={$Id}'>Modificar</a>
                    <a onclick="return confirm('Seguro que deseas eliminar el registro ($Id)');"
                    href='paginaprincipal.php?delete={$Id}'>Eliminar</a>
                </td>              
            </tr>
CODIGO;
}
?>

<script>
function envioFactura(){
       if (confirm("Seguro que desea enviar este pedido?") == true) {
        reenVForm();
     }
}
function reenVForm() {
    alert("Pedido enviado correctamente a Ebedom(Dominica).");      
}

</script>

    </tbody>
    </table>
    </fieldset>
    <div class="form-row">
    <!-- <div class="form-group col-md-6"> -->
    <input type="button" class="btn btn-outline-primary ml-auto text-dark" value="Enviar Pedido" onclick="envioFactura()">
     </div>
</body>

<script>
        function getInputValue(){
           document.getElementById("txtId").value = "";
           document.getElementById("txtNombre").value = "";
           document.getElementById("txtPrecio").value = "";
           document.getElementById("txtDesc").value = "";
           document.getElementById("txtUni").value = "";
    }
    
</script>
<span class="d-block p-0 bg-white text-dark md-2"><p>®Marca registra por los derechos del autor: mas informacion en www.ebedom.com (S.R.L)...</p></span>

   <!-- jquery libery for efects -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
         <!-- Bootstrap CSS -->
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"></script>
        <!-- popper libery for efects -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"></script>
      
</html>