<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Formulario de contacto</title>
  <link rel="stylesheet" href="form.css">
</head>
<body>
  <div class="container">
    <form>
		<div class="input-wrapper">
			<input type="text" id="name" placeholder="Nombre">
			<div class="bar"></div>
		  </div>
		  
      
      <div class="input-wrapper">
        <input type="email" id="email" name="email" placeholder="Correo electrónico" required>
      </div>
      
      <div class="input-wrapper">
        <input type="tel" id="phone" name="phone" placeholder="Teléfono" required>
      </div>
      
      <div class="input-wrapper">
        <textarea id="message" name="message" placeholder="Mensaje" required></textarea>
      </div>
      
      <button type="submit">Enviar</button>
    </form>
  </div>
  
  <script>
    const inputFields = document.querySelectorAll('input, textarea');
    inputFields.forEach(input => {
      input.addEventListener('focus', () => {
        input.classList.add('active');
      });
      input.addEventListener('blur', () => {
        if(input.value === '') {
          input.classList.remove('active');
        }
      });
    });
  </script>
</body>
</html>
