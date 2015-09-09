<?php

// Plugin definition
$plugin = array(
  'title' => t('Five rows one column'),
  'category' => t('Columns: 1'),
  'icon' => 'fiverowsonecolumn.png',
  'theme' => 'fiverowsonecolumn',
  'css' => 'fiverowsonecolumn.css',
  'regions' => array(
    'header' => t('Header'),
    'main_top' => t('Main Top'),
    'main' => t('Main'),
    'main_bottom' => t('Main Bottom'),
    'footer' => t('Footer')
  ),
);