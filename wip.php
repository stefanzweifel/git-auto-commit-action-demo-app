<?php

$pathToGitHubOutput = getenv('GITHUB_OUTPUT');

$gitHubOutput = '';

$key = 'changes_detected';
$value = 1;

$gitHubOutput .= "$key=$value\n";

// putenv("GITHUB_OUTPUT=$gitHubOutput");

file_put_contents($pathToGitHubOutput, $gitHubOutput, FILE_APPEND | LOCK_EX);

echo "Hello World\n";
