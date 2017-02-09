<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Jugadores</title>
  </head>
  <body>
    <a href="copas.php">Copas</a>
    <a href="equipos.php">Equipos</a>

    <br><br>
       <table border="1px">
         <thead>
          <tr>
            <th>ID JUGADOR</th>
            <th>ID EQUIPO</th>
            <th>NOMBRE</th>
            <th>POSICION</th>
            <th>PAIS</th>
          </tr>
         </thead>
         <?php
         include 'basedatos.php';
         $nuevo=new liga();
        $liga=$nuevo->jugadores($_POST["equipo"]);
        while ($fila=$liga->fetch_assoc()) {
          echo "<tr><td>" .$fila["id_jugador"] ."</td>";
          echo "<td>" .$fila["id_equipo"] ."</td>";
          echo "<td>" .$fila["nombre"] ."</td>";
          echo "<td>" .$fila["posicion"] ."</td>";
          echo "<td>" .$fila["pais"] ."</td></tr>";
          }
          ?>
       </table>
  </body>
</html>
