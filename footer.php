<footer>
<a href="/uc360shop"><img src="http://localhost/uc360shop/wp-content/uploads/2023/11/Fichier-1-3.svg" alt="logo unified champions" class="logo-footer"></a> 

<div class="logos">
  <img src="http://localhost/uc360shop/wp-content/uploads/2023/11/Group.svg" alt="logo université de franche-comté" class="logo-ufc">

  <div class="logo-rs-div">
  <img src="http://localhost/uc360shop/wp-content/uploads/2023/11/Vector.svg" alt="logo discord" class="logo-rs">
  <img src="http://localhost/uc360shop/wp-content/uploads/2023/11/Vector-1.svg" alt="logo tiktok" class="logo-rs">
  <img src="http://localhost/uc360shop/wp-content/uploads/2023/11/Vector-2.svg" alt="logo twitter" class="logo-rs">
  <img src="http://localhost/uc360shop/wp-content/uploads/2023/11/Group-14000.svg" alt="logo twitch" class="logo-rs">
  <img src="http://localhost/uc360shop/wp-content/uploads/2023/11/Group-13999.svg" alt="logo instagram" class="logo-rs">
  </div>
</div>
<hr class="footer-line" />
  <div class="menu_footer"><?php wp_nav_menu (); ?></div>
<p class="copyright">©2023 Unified Champions. All rights reserved</p>
</footer>
<?php wp_footer(); ?>
</body>
</html>

<style>
    

    /* Footer.php */
    footer {
        color: white;
        padding: 10px;
        text-align: center;
    }
    
    .logo-footer, .logo-rs, .menu-footer a {
        transition: transform 0.3s ease, filter 0.3s ease; /* Ajoute une transition douce pour l'effet de survol */
    }
    
    .logo-footer:hover, .logo-rs:hover, .menu-footer a:hover {
        transform: scale(1.1); /* Effet de grossissement */
        filter: drop-shadow(2px 2px 5px #7209B7); /* Effet d'ombre violette */
    }
    
    .logo-footer {
        width: 50px;
        display: block;
        margin: auto;
    }
    
    .logos img {
        margin: 10px;
    }
    
    .logo-rs-div {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        
    }
    
    .logo-rs {
        width: 30px;
        height: 30px;
        margin: 5px;
    }
    
    .footer-line {
        border: 3px solid white;
        color: white;
        overflow: visible;
        text-align: center;
        margin-left: 50px;
        margin-right: 50px;
        box-shadow: 0px 0px 2px 0px #7209B7 inset;
        filter: drop-shadow(0px 0px 10px #7209B7);
    }
    
    .copyright {
        color: white;
        text-align: center;
        color: gray !important;
    }
</style>