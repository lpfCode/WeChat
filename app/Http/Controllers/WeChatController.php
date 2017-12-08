<?php
/**
 * Created by PhpStorm.
 * User: yonghu
 * Date: 2017/12/8
 * Time: 上午11:14
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Log;
use EasyWeChat\Foundation\Application;
use function Psy\debug;

class WeChatController extends Controller {

    public function serve(){
        if(isset($_GET['echostr'])) {
            //laravel打印 调试很有用
            Log::info($_GET);
            return $_GET['echostr'];
            exit;
        }

    }
    //使用容器自动注入
    public function demo(Application $wechat){


    }
}