<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('soundcloud_player_height'))
{
  function soundcloud_player_height($items = "")
  {
    switch ($items) {
        case 1:
            $height = 125;
            break;
        case 2:
            $height = 225;
            break;
        case 3:
            $height = 375;
            break;
        case 4:
            $height = 450;
            break;
        case 5:
            $height = 450;
            break;
        case 6:
            $height = 600;
            break;
        case 7:
            $height = 600;
            break;
        case 8:
            $height = 750;
            break;
        case 9:
            $height = 750;
            break;
        case 10:
            $height = 900;
            break;
        default:
            $height = 450;
    }
    // Return the SoundCloud player height
    return $height;
  }
}