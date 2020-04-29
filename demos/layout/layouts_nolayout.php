<?php

declare(strict_types=1);

chdir('..');
include_once '../vendor/autoload.php';

// nothing to do with Agile UI - will not use any Layout
$a = new \atk4\ui\LoremIpsum();

echo htmlspecialchars($a->generateLorem(150));
