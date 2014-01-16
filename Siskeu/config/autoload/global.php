<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */
return array(
'db' => array(
        'driver'         => 'OCI8',
        'connection_string' => '167.205.111.205/siskeu4',
        'character_set' => 'AL32UTF8',
     )
);




