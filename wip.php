<?php

$pathToGitHubOutput = getenv('GITHUB_OUTPUT');

$gitHubOutput = '';

$key = 'changes_detected';
$value = 1;

$gitHubOutput .= "$key=$value\n";

$key = 'release_compare_url';
$value = 'https://github.com/org/repo/compare/v1.0.0...v1.1.0';

$gitHubOutput .= "$key=$value\n";

// putenv("GITHUB_OUTPUT=$gitHubOutput");

file_put_contents($pathToGitHubOutput, $gitHubOutput, FILE_APPEND | LOCK_EX);

echo "Hello World\n";
