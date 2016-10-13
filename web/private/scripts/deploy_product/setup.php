<?php

$version = phpversion();
print "\n====== phpversion: $version ======\n\n";

chdir(getenv('HOME') . '/code');
$cwd = getcwd();

print "\n====== Running 'composer install' in $cwd ======\n\n";
//passthru('composer install  2>&1');

print "\n====== Running 'composer drupal-scaffold' ======\n\n";
//passthru('composer drupal-scaffold  2>&1');
