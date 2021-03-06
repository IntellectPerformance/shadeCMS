<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="author" content="Milan">
    <meta name="robots" content="follow, index">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?= getenv('hotel_name') ?>CMS" />
    <meta name="twitter:description" content="Virtuele wereld waar je vrienden kunt maken en ontmoeten." />
    <meta name="twitter:image" content="/assets/images/summary-picture.png" />
    <meta name="twitter:site" content="@<?= getenv('hotel_name') ?>ZoneFans" />
    <meta name="twitter:url" content="http://localhost" />
    <meta name="twitter:widgets:csp" content="on" />
    <meta property="og:title" content="<?= getenv('hotel_name') ?> Hotel">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://localhost">
    <meta property="og:image" content="/assets/images/summary-picture.png">
    <meta property="og:description" content="Virtuele wereld waar je vrienden kunt maken en ontmoeten.">
    <meta property="og:site_name" content="<?= getenv('hotel_name') ?>CMS">
    <meta name="description" content="Virtuele wereld voor jongeren waar je vrienden kunt maken en ontmoeten. Ontmoet en maak vrienden, chat met anderen, maak je eigen avatar, ontwerp gratis je eigen kamer en nog veel meer ...">
    <meta name="keywords" content="<?= getenv('hotel_name') ?>, <?= getenv('hotel_name') ?> hotel, virtueel, wereld, sociaal netwerk, gratis, community, avatar, chat, online, tiener, roleplaying, doe mee, sociaal, groepen, forums, veilig, speel, games, online, vrienden, tieners, zeldzaams, zeldzame meubi, verzamelen, maak, verzamel, kom in contact, meubi, meubeks, huisdieren, kamer inrichten, delen, uitdrukking, badges, hangout, muziek, beroemdheid, VIP-visits, celebs, mmo, mmorpgs, massive multiplayer, dox, dox hotel, doxhotel, space hotel, spacehotel, space, sunnie, sunnie day, sunnieday, habbo, HABBO, habbo hotel, habboo, habbo city, habbocity, cool, virtuele wereld, vip, retro, retro hotel, habbo retro, gratis, gratis habbo, holo, leet, leethotel, hotel">
    <link rel="shortcut icon" href="/favi.ico" type="image/x-icon">
    <title>Maak vrienden, speel games, maak kamers en val op! - <?= getenv('hotel_name') ?> Hotel
    </title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/fonts.css?v=602">
    <link rel="stylesheet" href="/assets/css/iziToast.css?v=602">
    <link rel="stylesheet" href="/assets/css/flaticon.css?v=602">
    <link rel="stylesheet" href="/assets/css/magnific-popup.css?v=602">
    <link rel="stylesheet" href="/assets/css/selectric.css?v=602">
    <link rel="stylesheet" href="/assets/css/circle.css?v=601">
    <link rel="stylesheet" href="/assets/css/web3.css?v=6011f2dds414">
    <link rel="stylesheet" href="/assets/css/app.css?v=612">
    <link rel="stylesheet" href="/assets/css/web.responsive.css?v=601">
    <link rel="stylesheet" href="/assets/css/popup.css?v=601">
    <link rel="stylesheet" href="/assets/css/nanoscroller.css?v=601">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Scripts -->
    <script src="/assets/js/jquery-3.2.1.min.js?v=60">
    </script>
    <script src="/assets/js/jquery.ui.touch-punch.min.js?v=60">
    </script>
    <script src="https://www.google.com/recaptcha/api.js?v=60">
    </script>
    <script async custom-element="amp-auto-ads" src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js">
    </script>
  </head>
  <div class="cookies-accept-container">
    <div class="close-container">&times;
    </div>
    <?= getenv('hotel_name') ?>CMS maakt gebruik van eigen cookies en die van derden om zo een betere service te kunnen verlenen en zorgt er daarnaast voor dat de advertenties beter bij jouw voorkeuren aansluiten. Als je gebruik maakt van onze website ga je akkoord met ons cookie-beleid.
    <a href="/cookies" target="_blank">Lees meer
    </a>
  </div>
  <header class="header-container pixelated is-large">
    <div class="header-content">
      <div class="logo">
        <a href="/"><?= getenv('hotel_name') ?> - Admin Area
        </a>
      </div>
      <div class="account-container">
        <div class="account-title">
          Hotel Staff
          <span>Admin Panel
          </span>
        </div>
        <?php if(isset($user)): ?>
        <div class="account-buttons">
          <?php if($user->rank >= 4): ?>
          <a href="/" class="rounded-button white plain">Terug naar User Area
          </a>
          <?php endif ?>
        </div>
        <?php endif ?>
      </div>
    </div>
  </header>
<?php if(isset($user)): ?>
    <nav class="navigation-container">
    <ul class="navigation-menu flex-container">
      <li class="navigation-item main-link-item">
        <a href="/">
        </a>
      </li>
      <li class="navigation-item has-items" data-category="index">
        <a href="/admin/dashboard">Dashboard
        </a>
        <ul class="navigation-submenu">
        <li class="navigation-subitem">
            <a href="/profile/<?= $user->username; ?>">My Profiel (user)
            </a>
          </li>
          <li class="navigation-subitem">
            <a href="/account/information">Settings (user)
            </a>
          </li>
          <li class="navigation-subitem">
            <a href="/">User Area
            </a>
          </li>
        </ul>
      </li>
      <li class="navigation-item has-items" data-category="index">
        <a href="#">Community
        </a>
        <ul class="navigation-submenu">
          <li class="navigation-subitem">
            <a href="/admin/community/online">Online Users
            </a>
          </li>
        </ul>
      </li>
	  <li class="navigation-item has-items" data-category="index">
        <a href="#">Moderatie
        </a>
        <ul class="navigation-submenu">
          <li class="navigation-subitem">
            <a href="/admin/moderation/reports">Reports
            </a>
          </li>
		  <li class="navigation-subitem">
            <a href="/admin/moderation/login">Login Users
            </a>
          </li>
		  <li class="navigation-subitem">
            <a href="/admin/moderation/rcon">RCON
            </a>
          </li>
        </ul>
      </li>
    </ul>
   </li>
  </ul>
</nav>
<?php endif ?>
</div>

<?= $this->renderSection('content') ?>



<footer class="footer-container">
  <div class="footer-social-buttons flex-container flex-horizontal-center">
    <a href="https://www.instagram.com/<?= getenv('hotel_name') ?>hotel.nl" class="instagram-button" target="_blank">
    </a>
    <a href="https://www.facebook.com/<?= getenv('hotel_name') ?>hotelnl" class="facebook-button" target="_blank">
    </a>
    <a href="https://www.twitter.com/<?= getenv('hotel_name') ?>ZoneFans" class="twitter-button" target="_blank">
    </a>
    <a href="https://discord.gg/AUAb9GKFm3" class="discord-button" target="_blank">
    </a>
  </div>
  <div class="footer-copyright">&copy; <?= getenv('hotel_name') ?> |
    <a href="/info/rules">De <?= getenv('hotel_name') ?> Regels
    </a> |
    <a href="/info/terms">Algemene voorwaarden
    </a> |
    <a href="/info/privacy">Privacyverklaring
    </a><br>
    ShadeCMS <?= getenv('shade_version') ?> (beta) | Made By Milan
  </div>
</footer>
<script src="/assets/js/js.cookie.js?v=60">
</script>
<script src="/assets/js/jquery.history.js?v=60">
</script>
<script src="/assets/js/jquery.fullscreen.min.js?v=60">
</script>
<script src="/assets/js/jquery.magnific-popup.js?v=60">
</script>
<script src="/assets/js/iziToast.min.js" type="text/javascript">
</script>
<script>
  <?php
  if(session('errors') && is_array(session('errors'))) {
    foreach(array_slice(session('errors'), 0, 1) as $errors => $index) {
      ?>
        iziToast.error({
        position: "topRight", timeout: 5000, icon: 'fa fa-check', title: 'Oops..', message: '<?php echo $index ?>'}
                      );
      <?php }
  }
  elseif(session('errors')) {
    ?>
      iziToast.error({
      position: "topRight", timeout: 5000, icon: 'fa fa-check', title: 'Oops..', message: '<?php echo session('errors') ?>'}
                    );
    <?php }
  ?>
    <?php
  if(session('success') && is_array(session('success'))) {
    foreach(array_slice(session('success'), 0, 1) as $errors => $index) {
      ?>
        iziToast.success({
        position: "topRight", timeout: 5000, icon: 'fa fa-check', title: 'Gelukt!', message: '<?php echo $index ?>'}
                        );
      <?php }
  }
  elseif(session('success')) {
    ?>
      iziToast.success({
      position: "topRight", timeout: 5000, icon: 'fa fa-check', title: 'Gelukt!', message: '<?php echo session('success') ?>'}
                      );
    <?php }
  ?>
</script>
<script type="text/javascript">
  ;
  ( function( $ ) {
    $( '.swipebox' ).swipebox( {
      useCSS : true,
      useSVG : true,
      initialIndexOnArray : 0,
      hideCloseButtonOnMobile : false,
      removeBarsOnMobile : false,
      hideBarsDelay : 3000,
      videoMaxWidth : 1140,
      beforeOpen: function() {
      }
      ,
      afterOpen: null,
      afterClose: function() {
      }
      ,
      loopAtEnd: false
    }
                             );
  }
  )( jQuery );
</script>
<script src="/assets/js/nanoscroller.js?v=60">
</script>
<script src="/assets/js/selectric.js?v=60">
</script>
<script src="/assets/js/functions.js?v=60">
</script>
<script src="/assets/js/web/loading.js?v=60">
</script>
</body>
</html>
