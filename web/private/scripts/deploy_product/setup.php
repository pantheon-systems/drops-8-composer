<?php

print "\n====== Printing environment ======\n\n";
passthru('printenv');

chdir(__DIR__ . '/../../../..');
$cwd = getcwd();
print "\n====== Running 'composer install' in $cwd ======\n\n";
passthru('composer install');
