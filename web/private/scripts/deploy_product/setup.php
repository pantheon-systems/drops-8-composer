<?php

print "\n====== Sleep for a minute. (phpversion: " . phpversion() . ") ======\n\n";
sleep(60);

chdir(getenv('HOME') . '/code');
$cwd = getcwd();

print "\n====== Running 'composer install' in $cwd ======\n\n";
passthru('composer install  2>&1');

print "\n====== Running 'composer drupal-scaffold' ======\n\n";
passthru('composer drupal-scaffold  2>&1');

print "\n====== Running 'git status' ======\n\n";
passthru('git status  2>&1');
