<?php
if (!defined('ELK')) die('No access...');

function VAMAPI_install() {
    add_integration_function('integrate_bbc_codes', 'VAMAPI_addBBC', false);
    add_integration_function('integrate_prepare_display_context', 'VAMAPI_parsePosts', false);
    add_integration_function('integrate_admin_areas', 'VAMAPI_addAdminArea', false);
    add_integration_function('integrate_modify_modifications', 'VAMAPI_modifyModSettings', false);
}

function VAMAPI_uninstall() {
    remove_integration_function('integrate_bbc_codes', 'VAMAPI_addBBC');
    remove_integration_function('integrate_prepare_display_context', 'VAMAPI_parsePosts');
    remove_integration_function('integrate_admin_areas', 'VAMAPI_addAdminArea');
    remove_integration_function('integrate_modify_modifications', 'VAMAPI_modifyModSettings');
}
