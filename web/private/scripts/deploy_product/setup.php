<?php

print "\n====== Printing environment ======\n\n";
passthru('printenv');

chdir(__DIR__ . '/../../../..');
$cwd = getcwd();
print "\n====== Running 'composer install' in $cwd ======\n\n";
passthru('composer install  2>&1');

print "\n====== Running 'git status' in $cwd ======\n\n";
passthru('git status  2>&1');
