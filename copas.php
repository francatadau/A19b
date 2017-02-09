<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Copas</title>
  </head>
  <body>
    <a href="equipos.php">Equipos</a>
    <a href="formulariojug.html">Jugadores</a>

    <br><br>
       <table border="1px">
         <thead>
          <tr>
            <th>ID EQUIPO</th>
            <th>NOMBRE EQUIPO</th>
            <th>LIGAS</th>
            <th>COPAS DEL REY</th>
            <th>COPAS TOTALES</th>
          </tr>
         </thead>
         <?php
         include 'basedatos.php';
         $nuevo=new liga();
        $liga=$nuevo->copas();
        while ($fila=$liga->fetch_assoc()) {
          echo "<tr><td>" .$fila["id_equipo"] ."</td>";
          echo "<td>" .$fila["nombre_equipo"] ."</td>";
          echo "<td>" .$fila["ligas"] ."</td>";
          echo "<td>" .$fila["copasrey"] ."</td>";
          echo "<td>" .$fila["copas_totales"] ."</td></tr>";
          }
          ?>
       </table>
  </body>
</html>
