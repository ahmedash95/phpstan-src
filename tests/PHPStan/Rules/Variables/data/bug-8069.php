<?php declare(strict_types = 1);

namespace Bug8069;

/** @var mixed[] $test */
$test = [];

var_dump($test['hello'][0] ?? 'world');
