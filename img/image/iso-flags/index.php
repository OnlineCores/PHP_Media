<?php
  require_once('../../../config/Config.php');
  require_once(CLASS_FOLDER.'/Global.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>API OnlineCores</title>
    <meta name="description" content="Private api library"/>
    <meta name="keywords" content="API,Flags,Calendar"/>
    <meta name="author" content="Mikael Sundström"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style>
      <?php 
        echo file_get_contents(ASSETS.'/css/Prism.css');
      ?>
    </style>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>
  <body>

    <h1>Official Flags - SVG</h1>
    <ul>
      <li><a href="ABB">ABB</a> Asia</li>
      <li><a href="EEE">EEE</a> Europe</li>
      <li><a href="FFF">FFF</a> Africa</li>
      <li><a href="NNN">NNN</a> North America</li>
      <li><a href="SRR">SRR</a> South America</li>
      <li><a href="UUU">UUU</a> Oceania</li>
      <li><a href="NTT">NTT</a> NATO countries</li>
    </ul>

    <div class="w3-row w3-border">
      <div class="w3-container w3-half w3-red">

        <?php // https://stackoverflow.com/questions/6155533/loop-code-for-each-file-in-a-directory
          $files = glob("*.svg");
          foreach ($files as $svg) {
            echo '
              <div>
                <a href="'.$svg.'">
                  <img src="'.$svg.'" height="80px">
                </a>
                <span>'.$svg.'</span>
                <span>'.filesize($svg).' byte</span>
              </div>
            ';
          }
        ?>

      </div>
      <div class="w3-container w3-half">
        <h2>w3-half</h2>  
      </div>
    </div>
  </body>
</html>