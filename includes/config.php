<?php
$config['app_path'] = dirname(dirname(__FILE__));
$config['days_to_report'] = 10; //how many days to look backward

$config['db_path'] = $config['app_path'].'/cache/status.db'; //database location, must be writable by webserver
$config['cache_path'] = $config['app_path'].'/cache'; //where smarty will compile and cache its templates, must be writable by webserver
$config['template_name'] = 'default';

$config['twitter_handle'] = 'StatusTwitter'; //this is the twitter account username to reference
$config['twitter_key'] = '';
$config['twitter_secret'] = '';
$config['twitter_oauth_token'] = '';
$config['twitter_oauth_token_secret'] = '';

$config['default_services'] = array('Network', 'One Portal', 'Filtering System', 'Name Servers', 'Storage Servers'); //only used during database initialization
$config['default_facilities'] = array('Dallas, TX Data Center'); //only used during database initialization

$config['pagetitle'] = '';
$config['footer_links'] = array( //this is optional, delete this to get rid of all footer links
	array('title' => 'Dedicated Servers', 'url' => 'http://www.example.com'),
	array('title' => 'Resell Dedicated Servers', 'url' => 'http://www.example.com/partners/resellers.html'),
	array('title' => 'Contact Us', 'url' => 'http://www.example.com/home/contactus.html')
);
$config['textarea'] = array(
	'heading' => 'Помощь',
	'text' => 'Необходима помощь или консультация? Напишите нам письмо на почтовый адрес <a href="mailto:support@megaplan.ru">support@megaplan.ru</a>.';
$config['smarty_debug'] = false;
