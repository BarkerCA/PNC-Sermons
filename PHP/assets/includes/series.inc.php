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


$series = array(
#
# Glory Days Sermon Series
#
  "glory-days"              => array("image"  => "http://assets.pointenorth.org/img/sermons/GloryDays.jpg",
                                     "pheight"=> "400",
                                     "title"  => "Glory Days", 
                                     "tracks" => 4, 
                                     "url"    => "https://soundcloud.com/pointe-north/sets/glory-days",
                                     "sdate"  => "January 4, 2015",
                                     "edate"  => "Current",
                                    ),
#
# Welcome To The Family Sermon Series
#
  "welcome-to-the-family"   => array("image"  => "http://assets.pointenorth.org/img/sermons/WelcomeToTheFamily.jpg",
                                     "pheight"=> "400",
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
                                     "pheight"=> "400",
                                     "title"  => "Thanks-Giving", 
                                     "tracks" => 5, 
                                     "url"    => "https://soundcloud.com/pointe-north/sets/thanks-giving",
                                     "sdate"  => "November 2, 2014",
                                     "edate"  => "November 30, 2014",
                                    )
);
?>