 <div class="container" style="margin-top: 90px;">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form method="post" action="<?php echo base_url("index.php/Sesion/iniciarSesion"); ?>"class="form-signin">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" id="correo" class="form-control" placeholder="Correo Electrónico" required autofocus>
                <input type="password" id="clave" class="form-control" placeholder="Contraseña" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Recordar Usuario
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Entrar</button>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Olvidaste la clave?
            </a>
        </div><!-- /card-container -->
  </div><!-- /container -->