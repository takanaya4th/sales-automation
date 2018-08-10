<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Services;


/**
 * Description of WebSpider
 *
 * @author CN_Nagano
 */
class WebSpider {
    
    public static function webScraping(){
        \File::requireOnce("./phpQuery-onefile.php");
        //ページ取得
        $html = file_get_contents('https://job.inshokuten.com/pickup/kanto/?ref=ltop');
        //DOM取得
        $doc = phpQuery::newDocument($html);
        //要素取得
        echo $doc["title"]->text();
    }
}
