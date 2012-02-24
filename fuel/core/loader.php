<?php

// Add some Core classes to the global DiC
_env('dic')->set_classes(array(
	'Request_Curl'   => 'Fuel\\Core\\Request\\Curl',
	'Security_Xss'   => 'Fuel\\Core\\Security\\String\\Xss',
	'View_Markdown'  => 'Fuel\\Core\\View\\Markdown',
	'View_Twig'      => 'Fuel\\Core\\View\\Twig',
));

// Forge and return the Core Package object
return _forge('Package')
	->set_path(__DIR__)
	->set_namespace('Fuel\\Core')
	->add_class_aliases(array(
		'Classes\\Controller\\Template'  => 'Fuel\\Core\\Controller\\Template',
		'Classes\\Request\\Curl'         => 'Fuel\\Core\\Request\\Curl',
	));
