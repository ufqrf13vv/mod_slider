<?php
defined( '_JEXEC' ) or die;

require_once( dirname( __FILE__ ) . '/helper.php' );
$doc = JFactory::getDocument();
//  Стили
$doc->addStyleSheet(JURI::root() . 'modules/mod_slider/assets/slick/slick.css');
$doc->addStyleSheet(JURI::root() . 'modules/mod_slider/assets/slick/slick-theme.css');
//  Срипты
$doc->addScript('http://code.jquery.com/jquery-2.2.4.min.js');
$doc->addScript(JURI::root() . 'modules/mod_slider/assets/slick/slick.min.js' );
$doc->addScript(JURI::root() . 'modules/mod_slider/assets/js/script.js');

$images = modSliderHelper::getItems($params);
$count = $params->get('count');
$show = $params->get('slideToShow');
$dots = $params->get('dots');
$arrows = $params->get('arrows');
$autoplay = $params->get('autoplay');

require( JModuleHelper::getLayoutPath( 'mod_slider', $params->get( 'layout', 'default' ) ) );