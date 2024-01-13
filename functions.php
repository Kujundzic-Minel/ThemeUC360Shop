<?php
// Cette fonction charge la feuille de style de votre thème.
// Vous pouvez la conserver telle quelle pour charger la feuille de style de votre thème.
function theme_enqueue_styles() {
    wp_enqueue_style( 'mon-style-personnalise', get_stylesheet_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );






//===== Cette fonction enregistre un nouveau menu dans votre thème WordPress =====//
function register_my_menu() {
    // Utilise la fonction intégrée de WordPress 'register_nav_menu' pour enregistrer un menu
    // 'header-menu' est l'identifiant unique du menu
    // 'Menu De Tete' est le nom affiché du menu dans l'interface d'administration de WordPress
    // La fonction __() est utilisée pour la traduction du texte du menu
    register_nav_menu('header-menu', __('Menu De Tete'));
}

// Ajoute une action au crochet 'init' de WordPress
// Lorsque le crochet 'init' est exécuté, la fonction 'register_my_menu' sera également exécutée
add_action('init', 'register_my_menu');








// Système de connexion 

    // Redirection de connexion

    function custom_login_redirect($redirect_to, $request, $user) {
        // Vérifiez si l'utilisateur est connecté
        if (isset($user->ID)) {
            // L'utilisateur est connecté, redirigez-le vers la page d'accueil
            return home_url('./');
        } else {
            // L'utilisateur n'est pas connecté, redirigez-le vers la page de connexion
            return home_url();
        }
    }
    
    add_filter('login_redirect', 'custom_login_redirect', 10, 3);
    
    
    function add_login_logout_link($items, $args) {
      if ($args->theme_location == 'main') {
          if (is_user_logged_in()) {
              $items .= '<li><a href="' . site_url('./profil') . '">Profil</a></li>';
          } else {
              $items .= '<li><a href="' . wp_login_url() . '">Connexion</a></li>';
          }
      }
      return $items;
    }