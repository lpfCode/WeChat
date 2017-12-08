<?php
/**
 * Created by PhpStorm.
 * User: yonghu
 * Date: 2017/12/8
 * Time: 上午11:14
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Log;
use PharIo\Manifest\Application;

class WeChatController extends Controller {

    public function service(){
        if($_GET['echostr']==null){
            return "连接失败";
        }else{
            echo $_GET['echostr'];
        }
    }
    //使用容器自动注入
    public function demo(Application $wechat){
        //$wechat 则为容器中 EasyWeChat\Foundation\Application的实例
    }
}