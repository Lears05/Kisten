<?php include('header.php')?>
<link href="styles.css" rel="stylesheet">
<link rel="stylesheet" href="contacto.css">

    <main style="border-top: solid 1px #c1413a">
      <div class="contact-prin">
        <img src="img/contacto.png" class="backconta">
        <p class="idea">¡Platícanos tu idea!</p>
        <p class="details">Recuerda que entre más detalles nos cuentes de tu proyecto mejor te podremos atender.</p>
      </div>
      <div class="formulario">
        <h1 style="color: #000; text-shadow: 0 0 8px rgb(255, 255, 255, 0.8); text-align: left; margin: 0 0 10px 40px;">COMUNÍCATE CON NOSOTROS</h1>
        <p style="margin: 0 0 0 40px; color: #000; line-height: 20px;">Si deseas más información, no dudes en enviarnos un mensaje, en breve uno de nuestros asesores se pondrá en contacto contigo.</p>
        <form action="'enviar.php'" method="post">
          <input type="text" name="name" placeholder="Nombre *" required="">
          <input type="email" name="email" placeholder="Correo *" required="">
          <input type="text" name="asunto" placeholder="Asunto *" required="">
          <textarea name="msg" placeholder="¿Cómo podemos ayudarte?" required=""></textarea>
          <input type="submit" name="enviar">
        </form>
      </div>
    </main>
    
    <?php include('footer.php') ?>
    
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="scripts.js"></script>

  </body>

</html>