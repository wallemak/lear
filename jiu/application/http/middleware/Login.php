<?php

namespace app\http\middleware;

use think\Controller;
use think\response\Redirect;

class Login 
{
    


    public function handle($request, \Closure $next)
    {
    	// if(isset($_SERVER)){    
     //        if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
     //            $realip = $_SERVER['HTTP_X_FORWARDED_FOR'];
     //            }elseif(isset($_SERVER['HTTP_CLIENT_IP'])) {
     //                $realip = $_SERVER['HTTP_CLIENT_IP'];
     //            }else{
     //                $realip = $_SERVER['REMOTE_ADDR'];
     //            }
     //    }else{
     //        if(getenv("HTTP_X_FORWARDED_FOR")){
     //              $realip = getenv( "HTTP_X_FORWARDED_FOR");
     //            }elseif(getenv("HTTP_CLIENT_IP")) {
     //              $realip = getenv("HTTP_CLIENT_IP");
     //            }else{
     //              $realip = getenv("REMOTE_ADDR");
     //            }
     //    }
     //    $r = redis::get($realip);
     //    if(is_null($r)){
            
     //        Redirect('login');
     //      }
        $Redirect = new Redirect('admin/login/login');
        // return $Redirect;
    	// return Redirect('admin/login/login');
        // return $this->redirect('admin/login/login');

    	return $next($request);
    }
}
