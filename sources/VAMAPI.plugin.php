<?php
/*
 * Plugin Name: V&A Museum API Embedder
 * Description: Embed V&A Museum object info using BBC tags.
 * Author: davidbowieforum
 * Version: 1.0
 */

if (!defined('ELK'))
    die('No access...');

function VAMAPI_loadAPI() {
    add_integration_function('integrate_bbc_codes', 'VAMAPI_addBBC');
    add_integration_function('integrate_prepare_display_context', 'VAMAPI_parsePosts');
    add_integration_function('integrate_admin_areas', 'VAMAPI_addAdminArea');
    add_integration_function('integrate_modify_modifications', 'VAMAPI_modifyModSettings');
}

function VAMAPI_addBBC(&$bbc_codes) {
    $bbc_codes['va:object'] = array('tag' => 'va:object', 'type' => 'unparsed_content');
    $bbc_codes['va:collection'] = array('tag' => 'va:collection', 'type' => 'unparsed_content');
    $bbc_codes['va:search'] = array('tag' => 'va:search', 'type' => 'unparsed_content');
}

function VAMAPI_parsePosts(&$message) {
    $message['body'] = preg_replace_callback('/\\[va:object (\\w+)\\]/i', 'VAMAPI_handleObject', $message['body']);
    $message['body'] = preg_replace_callback('/\\[va:collection (\\w+)\\]/i', 'VAMAPI_handleCollection', $message['body']);
    $message['body'] = preg_replace_callback('/\\[va:search ([^\\]]+)\\]/i', 'VAMAPI_handleSearch', $message['body']);
}

function VAMAPI_addAdminArea(&$admin_areas) {
    $admin_areas['config']['areas']['modsettings']['subsections']['vamapi'] = array('V&A API');
}

function VAMAPI_modifyModSettings(&$sub_actions) {
    $sub_actions['vamapi'] = 'VAMAPI_modifyModSettingsDisplay';
}

function VAMAPI_modifyModSettingsDisplay($return_config = false) {
    global $context;

    $config_vars = array(
        array('title', 'V&A Museum API Einstellungen'),
        array('int', 'vamapi_cache_time', 'subtext' => 'Cache-Dauer in Sekunden (Standard: 3600)'),
    );

    if ($return_config)
        return $config_vars;

    require_once(SUBSDIR . '/Admin.subs.php');

    if (isset($_GET['save'])) {
        checkSession();
        saveDBSettings($config_vars);
        redirectexit('action=admin;area=modsettings;sa=vamapi');
    }

    $context['page_title'] = 'V&A API Einstellungen';
    $context['settings_title'] = 'V&A API';
    $context['post_url'] = '?action=admin;area=modsettings;sa=vamapi;save';
    $context['settings_save_detailed'] = true;

    prepareDBSettingContext($config_vars);
}

VAMAPI_loadAPI();
