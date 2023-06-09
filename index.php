<!DOCTYPE html>
<html>
<head>
  <title>Mantenimiento de Productos</title>
  <link rel="stylesheet" type="text/css" href="estilo.css">
  <link rel="stylesheet" type="text/css" href="estilo2.css">
</head>
<body>
  <h1>Mantenimiento de Productos</h1>

  <!-- CREATE -->
  <h2>Registro de Producto</h2>
  <form action="create.php" method="POST">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br>

    <label for="descripcion">Descripción:</label>
    <textarea id="descripcion" name="descripcion" required></textarea><br>

    <label for="stock">Stock:</label>
    <input type="number" id="stock" name="stock" required><br>

    <label for="precioVenta">Precio de Venta:</label>
    <input type="number" step="0.01" id="precioVenta" name="precioVenta" required><br>
    <div class="registrar">
    <input type="submit" value="Registrar Producto">
</div>
  </form>

  <!-- READ -->
  <h2>Consulta de Productos</h2>
  <form action="read.php" method="GET">
    <label for="search">Buscar por nombre:</label>
    <input type="text" id="search" name="search">
    <div class="buscar">
    <input type="submit" value="Buscar">
</div>
  </form>

  <!-- DELETE -->
  <h2>Eliminar Producto</h2>
  <form action="delete.php" method="POST">
    <label for="idProducto">ID del Producto:</label>
    <input type="number" id="idProducto" name="idProducto" required><br>

    <div class="eliminar">
    <input type="submit" value="Eliminar Producto">
    </div>
  </form>

  <!-- UPDATE -->
  <h2>Actualizar Producto</h2>
<form action="update.php" method="POST">
  <label for="idProducto">ID del Producto:</label>
  <input type="number" id="idProducto" name="idProducto" required><br>

  <label for="nombre">Nombre:</label>
  <input type="text" id="nombre" name="nombre" required><br>

  <label for="descripcion">Descripción:</label>
  <textarea id="descripcion" name="descripcion" required></textarea><br>

  <label for="stock">Stock:</label>
  <input type="number" id="stock" name="stock" required><br>

  <label for="precioVenta">Precio de Venta:</label>
  <input type="number" step="0.01" id="precioVenta" name="precioVenta" required><br>
   <div class="actualizar">
   <input type="submit" value="Actualizar Producto">
   </div>
</form>
</body>
</html>

