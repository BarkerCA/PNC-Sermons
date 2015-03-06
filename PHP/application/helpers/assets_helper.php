<?php

if ( ! function_exists('assets_path'))
{
  function assets_path($path = "")
  {
    return base_url() . "assets/" . $path;
  }
}

if ( ! function_exists('css_path'))
{
  function css_path($path = "")
  {
    return assets_path() . "css/" . $path;
  }
}

if ( ! function_exists('js_path'))
{
  function js_path($path = "")
  {
    return assets_path() . "js/" . $path;
  }
}

if ( ! function_exists('stylesheet_link'))
{
  function stylesheet_link($path = "")
  {
    $link = '<link rel="stylesheet" media="all" href="%s" />';
    return sprintf($link, css_path() . $path);
  }
}

if ( ! function_exists('javascript_link'))
{
  function javascript_link($path = "")
  {
    $link = '<script type="text/javascript" src="%s"></script>';
    return sprintf($link, js_path() . $path);
  }
}

if ( ! function_exists('sermon_image_path'))
{
  function sermon_image_path($path = "")
  {
    $link = 'http://assets.pointenorth.org/img/sermons/%s';
    return sprintf($link, $path);
  }
}