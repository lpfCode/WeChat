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

    public function service(){
//        if(isset($_GET['echostr'])) {
//            //laravel打印 调试很有用
//            Log::info($_GET);
//            return $_GET['echostr'];
//            exit;
//        }
        Log::info('request arrived'.$_GET);
        $wechat = new Application(config('config'));
        $wechat->server->setMessageHandler(function($message){
            return "欢迎关注 overtrue！";
        });

        Log::info('return response.'.$_REQUEST.'dd'.$http_response_header);

        return $wechat->server->serve();

    }
    //使用容器自动注入
    public function demo(Application $wechat){


    }
}
