<?php
#
# Array Designator = the playlist name
#
# image   = The url to the series graphic
# pheight = The height of the SoundCloud player 
# title   = The series title
# tracks  = Number of sermons in the series
# url     = SoundCloud url to the playlist
# sdate   = Start date of the sermon series
# edate   = End date of the sermon series
#
#
# Soundcloud Player Sizes
#
# 1 Sermon
$single_player    = "125";
# 2 Sermons
$small_player     = "225";
# 3-4 Sermons
$medium_player    = "375";
# 4-5 Sermons
$large_player     = "450";
# 6-10 Sermons
$huge_player      = "600";


$series = array(
#
# Commitment Single Sermon
#
  "commitment"              => array("image"  => "http://assets.pointenorth.org/img/sermons/PNC_Sermon.jpg",
                                     "pheight"=> $single_player,
                                     "title"  => "Commitment", 
                                     "tracks" => 1, 
                                     "url"    => "https://soundcloud.com/pointe-north/commitment-02-15-2014-timdorn",
                                     "sdate"  => "February 15, 2015",
                                     "edate"  => "February 15, 2015",
                                    ),
#
# Glory Days Sermon Series
#
  "glory-days"              => array("image"  => "http://assets.pointenorth.org/img/sermons/GloryDays.jpg",
                                     "pheight"=> $large_player,
                                     "title"  => "Glory Days", 
                                     "tracks" => 4, 
                                     "url"    => "https://soundcloud.com/pointe-north/sets/glory-days",
                                     "sdate"  => "January 4, 2015",
                                     "edate"  => "February 8, 2015",
                                    ),
#
# Welcome To The Family Sermon Series
#
  "welcome-to-the-family"   => array("image"  => "http://assets.pointenorth.org/img/sermons/WelcomeToTheFamily.jpg",
                                     "pheight"=> $medium_player,
                                     "title"  => "Welcome To The Family", 
                                     "tracks" => 3, 
                                     "url"    => "https://soundcloud.com/pointe-north/sets/welcome-to-the-family",
                                     "sdate"  => "December 7, 2014",
                                     "edate"  => "December 21, 2014",
                                    ),
#
# Thanks-Giving Sermon Series
#
  "thanks-giving"           => array("image"  => "http://assets.pointenorth.org/img/sermons/ThanksGiving.jpg",
                                     "pheight"=> $large_player,
                                     "title"  => "Thanks-Giving", 
                                     "tracks" => 5, 
                                     "url"    => "https://soundcloud.com/pointe-north/sets/thanks-giving",
                                     "sdate"  => "November 2, 2014",
                                     "edate"  => "November 30, 2014",
                                    )
);
?>