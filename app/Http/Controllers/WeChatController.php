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

class WeChatController extends Controller {

    public function serve(){
//        if(isset($_GET['echostr'])){
//            //laravel打印 调试很有用
//            Log::info($_GET);
//            return $_GET['echostr'];
//            exit;

        Log::info('request arrived.'); # 注意：Log 为 Laravel 组件，所以它记的日志去 Laravel 日志看，而不是 EasyWeChat 日志

        $wechat = app('wechat');
        $wechat->server->setMessageHandler(function($message){
            return "欢迎关注 overtrue！";
        });

        Log::info('return response.');

        return $wechat->server->serve();
    }
    //使用容器自动注入
    public function demo(Application $wechat){


    }
}