<?php


function sourceCodeGithubUrl(string $pathToFile)
{
  return 'https://github.com/sensasi-delight/material-blade-demo/blob/' . config('app.version') . '/' . $pathToFile;
}