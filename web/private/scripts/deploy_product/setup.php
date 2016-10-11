<?php

chdir(__DIR__ . '/../../../web');
print "\n====== Running 'composer install' in $cwd ======\n\n";
passthru('composer install');
