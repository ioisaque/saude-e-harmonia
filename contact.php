<?php include('default/header.php'); ?> 
    <!-- MAP -->
    <section class="map-block">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15048.596981845021!2d-42.5544307!3d-19.4491311!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x39f298a670f25f9d!2sSa%C3%BAde+e+Harmonia+Cl%C3%ADnica+M%C3%A9dica!5e0!3m2!1spt-BR!2sbr!4v1532548941922" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>	
      <!--<div class="map-wrapper" id="map-canvas" data-lat="-37.814199" data-lng="144.961560" data-zoom="13" data-style="1"></div>
      <div class="markers-wrapper addresses-block"> <a class="marker" data-rel="map-canvas" data-lat="-37.814199" data-lng="144.961560" data-string="Medical Hospital"></a> </div>-->
    </section>
     
    <!-- BOXES -->
    <section class="contact-box margin-top-50">
      <div class="container">
        <div class="row"> 
          
          <!-- Shop Location -->
          <div class="col-md-9">
            <div class="boxes-in">
              <h6>INFORMAÇÕES DE CONTATO</h6>
              <ul class="location">
                <li> <i class="fa fa-location-arrow"></i>
                  <p>Rua Pentateuco, 185 Canaã 
                    35164-200 - Ipatinga/MG</p>
                </li>
                <li> <i class="fa fa-phone"></i>
                  <p>(31) 3826 0311</p>
                  <p>(31) 9 8793 2890</p>
                </li>
                <li> <i class="fa fa-envelope"></i>
                  <p>clinicasaudeeharmonia@hotmail.com</p>
                </li>
                <li> <i class="fa fa-clock-o"></i>
                  <p>Seg-Sex: 08:00 - 18:00</p>
                </li>
              </ul>
            </div>
          </div>
          
          <!-- NEWSLETTER -->
          <div class="col-md-3">
            <div class="boxes-in">
              <h6>REDES SOCIAIS</h6>
              
              <!--======= FOOTER ICONS =========-->
              <ul class="social_icons">
                <li class="facebook"><a href="#."> <i class="fab fa-facebook-f"></i></a></li>
                <li class="twitter"><a href="#."> <i class="fab fa-twitter"></i></a></li>
                <li class="googleplus"><a href="#."> <i class="fab fa-google"></i></a></li>
                <li class="youtube"><a href="#."> <i class="fab fa-youtube"></i></a></li>
                <li class="instagram"><a href="#."> <i class="fab fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Us -->
    <section class="margin-top-50 margin-bottom-50"> 
      <!-- CONTACT FORM -->
      <div class="container"> 
        <!-- Tittle -->
        <div class="heading-block">
          <h4>FALE COM A GENTE!</h4>
          <hr>
		    </div>
        <div class="contact">
          <div class="contact-form"> 
            <!-- FORM  -->
            <form role="form" id="contactForm" class="contact-form" action="" method="post">
              <div class="row">
                <div class="col-md-6">
                  <ul class="row">
                    <li class="col-sm-12">
                      <label>
                        <input type="text" class="form-control" name="nome" id="name" placeholder="*Nome" required>
                      </label>
                    </li>
                    <li class="col-sm-12">
                      <label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="*E-mail" required>
                      </label>
                    </li>
                    <li class="col-sm-12">
                      <label>
                        <input type="phone" class="form-control" name="telefone" id="phone" placeholder="Telefone" required>
                      </label>
                    </li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="row">
                    <li class="col-sm-12">
                      <label>
                        <textarea class="form-control" name="mensagem" id="message" rows="7" placeholder="*Mensagem" required></textarea>
                      </label>
                    </li>
                  </ul>
                </div>
                <div class="col-12" style="width: 100%; display: inline-flex; justify-content: center;">
                  <button type="submit" value="submit" class="btn" id="btn_submit" onClick="proceed();">ENVIAR MENSAGEM</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

<?php include('default/footer.php'); ?>