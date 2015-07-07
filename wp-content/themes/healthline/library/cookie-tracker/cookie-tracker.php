<?php
require('utils.php');

define('HL_CT_TRACK_OLD_USERS', false);

if (HL_CT_TRACK_OLD_USERS) {
	add_action('init', 'hl_ct_set_old_visitor_cookie');
} else {
	if ( hl_ct_is_old_user() && !hl_ct_user_has_seen_ad() ) {
		hl_ct_set_ad_cookie();
		add_action('hl_ct_new_site_ad', 'hl_ct_new_site_ad');
	}
}