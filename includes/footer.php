

<div id="map"></div>
<div class="footer">
  <div class="uk-grid-collapse uk-child-width-expand@s uk-width-3-3@m" uk-grid>
    <div class="uk-padding">
      <h2>Praktisk info</h2>
      <ul class="praktisk-info">
        <li>4800 Nykøbing F.</li>
        <li><i class="fas fa-address-book"></i> Belgiensvej 4</li>
        <li><i class="fas fa-phone-square"></i><a href="tel:54852366"> 54 85 23 66</a></li>
        <li><i class="fas fa-envelope"></i> <a href="mailto:kontor@p-k.dk"> Kontor@p-k.dk</a></li>
        <hr>
        <div class="NFC">
          <h2>Sponsor af:</h2>
          <img width="15%" src="images/4090.png" alt="NFC">
        </div>
      </ul>
    </div>
    <div class="footer-box uk-padding">
      <h2>Navigation</h2>
      <ul class="navigation">
        <a href="index.php"><li><span class="arrow-right-footer" uk-icon="forward"></span>Forside</li></a>
        <a href="produkter.php"><li><span class="arrow-right-footer" uk-icon="forward"></span>Produkter</li></a>
        <ul>
          <a href="t-shirt.php"><li><span  uk-icon="forward"></span>T-shirt</li></a>
          <a href="hoodies.php"><li><span  uk-icon="forward"></span>Hoodies</li></a>
          <a href="skilte.php"><li><span  uk-icon="forward"></span>Skilte</li></a>
          <a href="banner.php"><li><span  uk-icon="forward"></span>Banner</li></a>
        </ul>
        <a href="om-os.php"><li><span class="arrow-right-footer" uk-icon="forward"></span>Om os</li></a>
        <a href="kontakt.php"><li><span class="arrow-right-footer" uk-icon="forward"></span>Kontakt</li></a>
        <p></p>
        <a href="sitemap.php"><li><span class="arrow-right-footer" uk-icon="forward"></span>Sitemap</li></a>
        <a href="forhandlingsbetingelser.php"><li><span class="arrow-right-footer" uk-icon="forward"></span>Forhandlingsbetingelsers</li></a>
        <p></p>
        <a href="login.php"><li><span class="arrow-right-footer" uk-icon="forward"></span>Log ind</li></a>
        <a href="brugeroprettelse.php"><li><span class="arrow-right-footer" uk-icon="forward"></span>Opret bruger</li></a>
        <?php if(isset($_SESSION['id_kunde'])) { ?><a href="logud.php"><li><span class="arrow-right-footer" uk-icon="forward"></span>Log ud</li></a><?php }; ?>

      </ul>
    </div>
    <div class="footer-box openinghours uk-padding">
      <h2>Åbningstider</h2>
      <p>Vores normale åbningstider er fra 9-16. Men vi har også åbent efter aftale.<br />Det
      er også muligt at skrive til os, så vi kan aftale en tid.</p>
      <ul>
        <li id="Mandag">Mandag: <span>9:00 - 16:00</span> </li>
        <li id="Tirsdag">Tirsdag: <span>9:00 - 16:00</span> </li>
        <li id="Onsdag">Onsdag: <span>9:00 - 16:00</span> </li>
        <li id="Torsdag">Torsdag: <span>9:00 - 16:00</span> </li>
        <li id="Fredag">Fredag: <span>9:00 - 16:00</span> </li>
        <li id="Lordag">Lørdag: <span>9:00 - 16:00</span> </li>
        <li id="Sondag">Søndag: <span>Lukket</span> </li>
      </ul>
    </div>
  </div>
</div>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0aUMUma5yJFtItY_hBseBFZ69I6D4hN0&callback=initMap">
</script>
<script type="text/javascript" src="js/lightslider.js"></script>
<script type="text/javascript" src="js/uikit.js"></script>
<script type="text/javascript" src="js/uikit-icons.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>
