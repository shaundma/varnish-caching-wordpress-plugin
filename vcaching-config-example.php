<?php
/**
 * Varnish Caching plugin - optional single settings file.
 *
 * Copy this file to vcaching-config.php in the SAME directory
 * (wp-content/plugins/varnish-caching/) and edit the values below.
 * The plugin auto-loads vcaching-config.php at construction time -
 * no wp-config.php edits, no separate defines, no other locations
 * searched.
 *
 * Any key returned here overrides the matching option in the WP
 * database. Any key NOT returned here (or missing file entirely)
 * falls back to whatever is stored via the settings page. Empty
 * file / empty array = pure DB behavior, identical to 1.8.x.
 *
 * Works on single-site AND on WordPress multisite. On multisite,
 * this ONE file applies to every subsite in the network.
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
    // (via `hostname -f`), so one config file can be deployed unchanged
    // across a fleet of origin hosts.
    'varnish_backends' => 'localhost',
    'varnish_acls'     => 'localhost',
);
