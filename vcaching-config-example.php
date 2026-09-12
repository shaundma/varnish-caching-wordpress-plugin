<?php
/**
 * Varnish Caching plugin - optional settings.
 *
 * The plugin loads settings from the FIRST of these three locations
 * (whichever is present); the others are ignored:
 *
 *   1. `$GLOBALS['vcaching_config']` set from wp-config.php.
 *      RECOMMENDED for production. Survives plugin updates, single
 *      file to maintain (the one every WordPress admin already knows).
 *
 *      Paste block, above the "That's all, stop editing!" line:
 *
 *        // Varnish Caching plugin config
 *        $vcaching_config = array(
 *            'enable' => 1,
 *            'ips'    => 'cache.example.com',
 *            'ttl'    => 3600,
 *            // ... any of the supported keys below ...
 *        );
 *
 *   2. `wp-content/vcaching-config.php`. Survives plugin updates
 *      like option 1, but requires SFTP access rather than wp-config
 *      editing. Must return an associative array (like this example
 *      file does).
 *
 *   3. `wp-content/plugins/varnish-caching/vcaching-config.php`
 *      (i.e. this file's location if you rename it to drop the
 *      `-example` suffix). WIPED by every plugin update because
 *      WordPress deletes the plugin directory before extracting a
 *      new version. Convenient for local development, avoid for
 *      production.
 *
 * All values below are placeholders. Fill in what you need; delete
 * any key you would rather manage through the settings page.
 *
 * Supported keys (map 1:1 to plugin options minus the varnish_caching_
 * prefix): enable, homepage_ttl, ttl, ips, hosts, dynamic_host,
 * purge_key, ssl, debug, truncate_notice, cookie, override,
 * purge_menu_save, stats_json_file, varnish_backends, varnish_acls
 *
 * The `ips` key accepts a comma-separated mix of IP addresses AND
 * hostnames. Any hostname is expanded via DNS A-record lookup at
 * plugin load, so a single entry like 'cache.example.com' fans out
 * to every A record behind that name automatically.
 */

return array(

    'enable'          => 1,

    'homepage_ttl'    => 300,
    'ttl'             => 3600,

    'ips'             => '',

    'dynamic_host'    => 1,
    'hosts'           => '',

    'override'        => 0,

    'purge_key'       => '',

    'cookie'          => '',

    'debug'           => 0,
    'truncate_notice' => 1,
    'purge_menu_save' => 0,

    'ssl'             => 0,

    'stats_json_file' => '',

    // Origin backend + ACL host used by the VCL Generator tab. The special
    // value 'localhost' resolves at runtime to the current server's FQDN
    // (via `hostname -f`), so one config can be deployed unchanged across
    // a fleet of origin hosts.
    'varnish_backends' => 'localhost',
    'varnish_acls'     => 'localhost',
);
