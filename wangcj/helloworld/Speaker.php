<?php
/**
 * Speaker.php
 * Just a demo for composer
 *
 * @author  wangchaojie <wangchaojie@huoban.com>
 * @date    2018-09-06 14:36:07
 * @version $Id$
 */
namespace wangcj\helloworld;

class Speaker {

    public function __construct(){
        echo 'I\'m a speaker V0.3 !';
    }
    public function getVolume(){
        echo 'Speaker volume value is 54';
    }
}
