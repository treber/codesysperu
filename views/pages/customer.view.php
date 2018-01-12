<?php $page = 'Contacto'; ?>
<?php include APP_PATH . '/views/overall/head.view.php'; ?>
<?php include APP_PATH . '/views/overall/header.view.php'; ?>

<main id="main-form">
  <section class= "container-group section-form">
    <div class="container-td">
      <div class="group-td">
        <h2 class="title">Póngamonos en contacto</h2>
        <hr>
        <p class="form-description">"Codesys Perú pone a tu disposición nuestro formulario de contacto, así como el teléfono y correo electrónico para que te comuniques con nosotros para cualquier duda o cotización de tu página, sistema o app web y te respondemos dentro de las próximas 24 horas."</p>
      </div>  
    </div>

    <div class="container-intro">
      <!-- formulario -->
      <div class="container-ls container-form">
        <span class="fiel-required">(*) Obligatorio</span>
        <form class="form" name="form" id="form" method="post" action="<?= PUBLIC_PATH . '/contacto' ?>" onsubmit="return validarFormulario()" autocomplete="off">
          <div class="group-field">
            <label for="name">Nombre</label><br/>
            <input class="input" type="text" name="name" id="name" value="<?= $name ?? '' ?>" /><br>
            <span class="error"></span>
            <span class="asterik-form">*</span>
          </div>
          <div class="group-field">
            <label for="last_name">Apellidos</label><br/>
            <input class="input" type="text" name="last_name" id="last_name" value="<?= $last_name ?? '' ?>" /><br/>
            <span class="error"></span>
            <span class="asterik-form">*</span>
          </div>
          <div class="group-field">
            <label for="email">Correo</label><br/>
            <input class="input" type="text" name="email" id="email" value="<?= $email ?? '' ?>" /><br/>
            <span class="error"></span>
            <span class="asterik-form">*</span>
          </div>
          <div class="group-field">
            <label for="telephone" class="free-label">Teléfono</label><br/>
            <input class="input" type="text" name="telephone" id="telephone" value="<?= $telephone ?? '' ?>" /><br/>
            <span class="error"></span>
          </div>
          <div class="group-field">
            <label for="comment">Comentario</label><br/>
            <textarea class="textarea" name="comment" id="comment" onkeypress="return maxchar(200)"><?= $comment ?? '' ?></textarea>
            <span class="error"></span>
            <span class="asterik-form">*</span>
          </div>
          <div class="group-captcha">
            <img src="<?= $captcha->inline() ?>" />
            <input class="input" type="text" name="captcha" id="captcha" placeholder="Escriba el texto de la imagen" />
            <span class="error"></span>
          </div>
          <input class="boton" type="submit" name="send" id="send" value="Enviar" />
        </form>
      </div>
      <!-- information-contacto -->
      <div class="container-ls container-information">
        <div class="information-personal">
          <h3 class="widget-title">Datos personales</h3>
          <p><i class="personal icon-user"></i>Eberth Vallejos Jaramillo</p>
          <p><i class="personal icon-phone"></i>+51 993 132 773</p>
          <p><i class="personal icon-mail-alt"></i><a href="mailto:codesys.pe@gmail.com">codesys.pe@gmail.com</a></p>
        </div>
      </div>
      
      <!-- information-map -->
      <div class="container-ls container-map">
        <h3 class="">Plano de ubicación</h3>
        <div class="container-plano">
          <div id="map">
            <iframe frameborder="0" style="border:0"
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA-_W1VeFom86Ry4ATkhz27Nr8sN8xo0E8&q=place_id:Ei5Bdi4gTGEgUGF6IDExOTUsIERpc3RyaXRvIGRlIExpbWEgMTUwODcsIFBlcsO6" allowfullscreen></iframe>
          </div>
        </div>
      </div>    
    </div>
  </section>
</main>
<?php include APP_PATH . '/views/overall/foot.view.php'; ?>