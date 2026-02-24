<?php include 'includes/header.php'; ?>
<div class="contenedor">
<h2>Reloj en Espejo</h2>
<form action="procesar.php" method="post">
    <label>Hora reflejada:</label><br>
    <label>Hora (1-12):</label>
    <input type="number" name="hora" min="1" max="12" required>
    <br>
    <label>Minutos (0-59):</label>
    <input type="number" name="minutos" min="0" max="59" required>
    <br><br>
    <button type="submit" name="enviar">Calcular hora real</button>
</form>

<?php if(isset($_GET['resultado'])): ?>
<div class="resultado">
    <strong>Hora real:</strong> <?php echo $_GET['resultado']; ?>
</div>
<?php endif; ?>

</div>
<?php include 'includes/footer.php'; ?>