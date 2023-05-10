<?php
function get_markdown_content()
{
  $markdown_file = '../example.md';
  return file_get_contents($markdown_file);
}