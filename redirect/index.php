<?php

/**
 * Created by PhpStorm.
 * User: AmrAngry
 * Date: 16/10/20
 * Time: 2:23 PM
 * //https://www.w3docs.com/snippets/javascript/how-to-redirect-a-web-page-with-javascript.html
 */

  $url = $_REQUEST[ "url" ];
  $tag = $_REQUEST[ "tag" ];

  if (isset($url)) {
      header('Location: //'.$url);
  } else if (isset($tag)) {
      $tagURL = "seddiqi.com";
      switch ($tag) {
          case "g":
              $tagURL = "google.com";
              break;
          case "f":
              $tagURL = "facebook.com";
              break;
          case "y":
              $tagURL = "youtube.com/channel/UCtqshvr7ywaHFj6DqOnDPyw";//"youtube.com";
              break;
          case "w":
              $tagURL = "dubaiwatchweek.com/horology-forum";
              break;
          default:
              $tagURL = "seddiqi.com";;
      }

      header('Location: //'.$tagURL);
  }

 // header('Location: //www.adkatech.com');
// or die();
  exit();