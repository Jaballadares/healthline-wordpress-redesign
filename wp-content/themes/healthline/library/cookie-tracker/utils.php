<?php
function hl_ct_get_cookie_domain() {
	$domain = '.' . $_SERVER['SERVER_NAME'];
	// $domain = false; // for localhost testing
	return $domain;
}

function hl_ct_set_old_visitor_cookie() {
	setcookie('hl_old_visitor', date('Y-m-d H:i:s'), time() + 60*60*24*365*2, '/', hl_ct_get_cookie_domain());
}

function hl_ct_set_ad_cookie() {
	setcookie('hl_old_visitor_has_seen_ad', date('Y-m-d H:i:s'), time() + 60*60*24*365*2, '/', hl_ct_get_cookie_domain());
}

function hl_ct_is_old_user() {
	return !empty($_COOKIE['hl_old_visitor']);
}

function hl_ct_user_has_seen_ad() {
	return !empty($_COOKIE['hl_old_visitor_has_seen_ad']);
}

function hl_ct_new_site_ad() {
	require('new-site-ad.php');
}