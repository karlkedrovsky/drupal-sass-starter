<?php

/*
 *****************************************
 ** Page Preprocessing                   *
 *****************************************
 */

function drupal_sass_starter_preprocess_page(&$variables) {
}

/*
 *****************************************
 ** Node Preprocessing                   *
 *****************************************
 */

function drupal_sass_starter_preprocess_node(&$variables) {
  if (isset($variables['type'])) {
    $function = 'drupal_sass_starter_preprocess_node__' . $variables['type'];
    if (function_exists($function)) {
     $function($variables);
    }
  }
}

function drupal_sass_starter_preprocess_node__page(&$variables) {
}
