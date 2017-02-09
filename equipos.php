<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Equipos</title>
  </head>
  <body>
    <a href="copas.php">Copas</a>
    <a href="formulariojug.html">Jugadores</a>

    <br><br>
       <table border="1px">
         <thead>
          <tr>
            <th>ID EQUIPO</th>
            <th>NOMBRE EQUIPO</th>
            <th>PUNTOS</th>
            <th>FUNDACIÓN</th>
            <th>COPAS</th>
          </tr>
         </thead>
         <?php
         include 'basedatos.php';
         $nuevo=new liga();
        $liga=$nuevo->equipos();
        while ($fila=$liga->fetch_assoc()) {
          echo "<tr><td>" .$fila["id_equipo"] ."</td>";
          echo "<td>" .$fila["nombre_equipo"] ."</td>";
          echo "<td>" .$fila["puntos"] ."</td>";
          echo "<td>" .$fila["fundacion"] ."</td>";
          echo "<td>" .$fila["copas"] ."</td></tr>";
          }
          ?>
       </table>
  </body>
</html>
