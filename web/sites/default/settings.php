<?php

$databases = [];

$settings['config_sync_directory'] = '../config/sync';
$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';
$settings['hash_salt'] = 'QErDPlJF-yM0baNj37lrkXU8FMNeDJhmNhd_uL3bbQlF9yGdMU8Zh8vRYo6xaQMVbjQTStgwSg';
$settings['file_private_path'] = '../private';
$settings['file_temp_path'] = '/tmp';
$settings['entity_update_backup'] = TRUE;
$settings['entity_update_batch_size'] = 50;
$settings['migrate_node_migrate_type_classic'] = FALSE;
# $settings['trusted_host_patterns'] = [];
$settings['update_free_access'] = FALSE;

$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];

 if (file_exists($app_root . '/' . $site_path . '/settings.local.php')) {
  include $app_root . '/' . $site_path . '/settings.local.php';
}
