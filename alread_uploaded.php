<?php
/**
 * Created by PhpStorm.
 * User: Hellhero
 * Date: 26.11.2017
 * Time: 00:42
 */

define("IMAGEPATH",'uploads/');

foreach (glob(IMAGEPATH.'*.jpg') as $filename){
    echo "<img width=\"10%\" src=".IMAGEPATH.basename($filename).">".basename($filename)."<br>\n";
}