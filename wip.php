<?php

$gitHubOutput = getenv('GITHUB_OUTPUT');

echo $gitHubOutput;

$key = 'changes_detected';
$value = 1;

// $gitHubOutput .= "$key=$value";

// putenv("GITHUB_OUTPUT=$gitHubOutput");

echo "Hello World";
