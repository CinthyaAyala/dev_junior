<?php
//======================================================================
// A N I M A L  P O L Í T I C O
//======================================================================

//======================================================================
// 1. Validación de URL
//======================================================================

/**
* Determina si un URL es seguro
* @TODO Esta función está incompleta, asegúrate de completarla antes de utilizarla.
*
* @param string $url
* @return bool
**/
function url_is_https(string $url) : bool{
  $regex = "/^https:\/\/.*/";
  preg_match($regex, $url, $matches);
  /*
  .
  .
  .
  */
}

/**
* Determina si un URL es de Animal Político
* @TODO Esta función está incompleta, asegúrate de completarla antes de utilizarla.
*
* @param string $url
* @return bool
**/
function url_has_animalpolitico(string $url) : bool{
  $has_ap = strpos($url, 'animalpolitico.com');
  /*
  .
  .
  .
  */
}

/**
* Determina si un URL manda a un 404
* @TODO Esta función está incompleta, asegúrate de completarla antes de utilizarla.
*
* @param string $url
* @return bool
**/
function url_is_404(string $url) : bool{
  $handle = curl_init($url);
  curl_setopt($handle,  CURLOPT_RETURNTRANSFER, TRUE);
  $response = curl_exec($handle);
  $httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
  $is_404 = $httpCode == 404;
  curl_close($handle);
  /*
  .
  .
  .
  */
}

/**
* Determina si un URL es válido
* @TODO Esta función está incompleta, asegúrate de completarla antes de utilizarla.
*
* @param string $url
* @return bool
**/
function url_is_valid(string $url) : bool{
  /*
  .
  .
  .
  */
}

//======================================================================
// 2. Hooks
//======================================================================
/**
* Hook para guardar un post
* @TODO Esta función está incompleta, asegúrate de completarla antes de utilizarla.
*
* @param int $post_id
* @return void
**/
function ap_on_save_post(int $post_id) : void{
  $post_type = get_post_type($post_id);
  /*
  .
  .
  .
  */
}
add_action('save_post', 'ap_on_save_post', 10, 1);
