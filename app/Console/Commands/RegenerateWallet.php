<?php
/*
 本代码由 PHP代码加密工具 Xend [专业版](Build 5.05.55) 创建
 创建时间 2020-06-24 11:44:51
 技术支持 QQ:30370740 Mail:support@phpXend.com
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

namespace App\Console\Commands;if(!defined("A___AA_AAA_"))define("A___AA_AAA_","A___AA_AAAA");$GLOBALS[A___AA_AAA_]=explode("|L|E|m", "A___A_AAAAA");if(!defined("A___AA_A_A_"))define("A___AA_A_A_","A___AA_A_AA");$GLOBALS[A___AA_A_A_]=explode("|N|p|_", "post|N|p|_/v3/wallet/address|N|p|_form_params|N|p|_userid|N|p|_projectname|N|p|_new_bvex|N|p|_用户id:|N|p|_,请求失败|N|p|_,原地址:|N|p|_btc|N|p|_usdt|N|p|_eth|N|p|_erc20|N|p|_xrp|N|p|_,新地址:");if(!defined("A___AA__AA_"))define("A___AA__AA_","A___AA__AAA");$GLOBALS[A___AA__AA_]=explode("|f|5|s", "id|f|5|s币种不存在|f|5|sLbxChainServer|f|5|scurrency");if(!defined($GLOBALS[A___AA_AAA_]{0}))define($GLOBALS[A___AA_AAA_]{0}, ord(71));use Illuminate\Console\Command;use App\UsersWallet;use App\Currency;class RegenerateWallet extends Command{protected $signature="\x72\x65\x67\x65\x6E\x65\x72\x61\x74\x65\x3A\x77\x61\x6C\x6C\x65\x74\x20\x7B\x69\x64\x20\x3A\x20\x69\x64\x7D";protected $description="\xE9\x87\x8D\xE6\x96\xB0\xE7\x94\x9F\xE6\x88\x90\xE9\x92\xB1\xE5\x8C\x85";public function __construct(){parent::__construct();}public function handle(){unset($G37tI8O);$A___AA__A__=$this->argument($GLOBALS[A___AA__AA_]{00});unset($G37tI8O);$currency=Currency::find($A___AA__A__);$G37bN8R=5+1;$G37bN8S=E_STRICT==$G37bN8R;if($G37bN8S)goto G37eWjgx2;unset($G37tIvPbN8P);$G37IItr="qX";$G37bN8Q=strlen($G37IItr)==1;if($G37bN8Q)goto G37eWjgx2;$G378O=!$currency;if($G378O)goto G37eWjgx2;goto G37ldMhx2;G37eWjgx2:goto G37Mtun1FB;$G37M8T=$R4vP4 . DS;unset($G37tIM8U);$R4vP5=$G37M8T;unset($G37tIM8V);$R4vA5=array();unset($G37tIM8W);$R4vA5[]=$request;unset($G37tIM8X);$R4vC3=call_user_func_array($R4vA5,$R4vA4);G37Mtun1FB:goto G37Mtun1FD;unset($G37tIM8Y);$R4vA1=array();unset($G37tIM8Z);$G37tIM8Z=&$dispatch;$R4vA1[]=&$G37tIM8Z;unset($G37tIM90);$R4vA2=array();unset($G37tIM91);$R4vC0=call_user_func_array($R4vA2,$R4vA1);G37Mtun1FD:$G3792=new \Exception($GLOBALS[A___AA__AA_]{1});throw $G3792;goto G37x1;G37ldMhx2:G37x1:unset($G37tI8O);$http_client=app($GLOBALS[A___AA__AA_][02]);unset($G37tI8O);$A___AA__A_A=UsersWallet::where($GLOBALS[A___AA__AA_]{3},$A___AA__A__)->get();$A___AA__A_A->each(function($item,$key)use($currency,$http_client){unset($G37tI8O);$G37tI8O=$http_client->request($GLOBALS[A___AA_A_A_][0x0],$GLOBALS[A___AA_A_A_][1],[$GLOBALS[A___AA_A_A_]{02}=>[$GLOBALS[A___AA_A_A_][03]=>$item->user_id,$GLOBALS[A___AA_A_A_][4]=>$GLOBALS[A___AA_A_A_]{5},],]);$A___AA_A___=$G37tI8O;unset($G37tI8O);$A___AA_A__A=json_decode($A___AA_A___->getBody()->getContents());$G37bN8Y=true===strpos("zp",5);if($G37bN8Y)goto G37eWjgx7;$G378R=(bool)isset($A___AA_A__A->code);$G37bN8S=__LINE__<-5;if($G37bN8S)goto G37eWjgx5;if($G378R)goto G37eWjgx5;$G37bN8T=strlen("vTQOxX")==0;if($G37bN8T)goto G37eWjgx5;goto G37ldMhx5;G37eWjgx5:try{strlen(1);}catch(\Exception $e){$G37M8U=$x*5;unset($G37tIM8V);$y=$G37M8U;echo "no login!";exit(1);}catch(\Exception $e){$G37M8W=$x*1;unset($G37tIM8X);$y=$G37M8W;echo "no html!";exit(2);}$G378O=95*E_USER_WARNING;$G378P=$G378O-48640;$G378Q=$A___AA_A__A->code!=$G378P;$G378R=isset($A___AA_A__A->code)&&$G378Q;goto G37x4;G37ldMhx5:G37x4:if($G378R)goto G37eWjgx7;$G37bN8Z=gettype(5)=="string";if($G37bN8Z)goto G37eWjgx7;goto G37ldMhx7;G37eWjgx7:$G37M90=strlen(5)<1;if($G37M90)goto G37eWjgx9;goto G37ldMhx9;G37eWjgx9:$adminL();G37Mtun1FF:igjagoe;strlen("wolrlg");getnum(5);goto G37x8;G37ldMhx9:G37x8:goto G37Mtun200;if(is_array($rule))goto G37eWjgxb;goto G37ldMhxb;G37eWjgxb:unset($G37tIM91);$G37tIM91=array("rule"=>$rule,"msg"=>$msg);$this->validate=$G37tIM91;goto G37xa;G37ldMhxb:$G37M92=true===$rule;if($G37M92)goto G37eWjgxd;goto G37ldMhxd;G37eWjgxd:$G37M93=$this->name;goto G37xc;G37ldMhxd:$G37M93=$rule;G37xc:unset($G37tIM94);$this->validate=$G37M93;G37xa:G37Mtun200:$G378O=$GLOBALS[A___AA_A_A_]{06} . $item->user_id;$G378P=$G378O . $GLOBALS[A___AA_A_A_][07];$G378Q=$G378P . PHP_EOL;echo $G378Q;return ;goto G37x3;G37ldMhx7:G37x3:unset($G37tI8O);$A___AA_A__A=$A___AA_A__A->data;$G378O=$GLOBALS[A___AA_A_A_]{06} . $item->user_id;$G378P=$G378O . $GLOBALS[A___AA_A_A_][010];$G378Q=$G378P . $item->address;echo $G378Q;$G378O=$currency->type==$GLOBALS[A___AA_A_A_]{9};if($G378O)goto G37eWjgxf;if(strspn("TlpzIcFy","5"))goto G37eWjgxf;$G37bN8P=strlen("vTQOxX")==0;if($G37bN8P)goto G37eWjgxf;goto G37ldMhxf;G37eWjgxf:if(isset($_GET))goto G37eWjgxh;goto G37ldMhxh;G37eWjgxh:array();goto G37Mtun202;$G37M8Q=CONF_PATH . $module;$G37M8R=$G37M8Q . database;$G37M8S=$G37M8R . CONF_EXT;unset($G37tIM8T);$filename=$G37M8S;G37Mtun202:goto G37xg;G37ldMhxh:if(strpos($file,"."))goto G37eWjgxj;goto G37ldMhxj;G37eWjgxj:$G37M8U=$file;goto G37xi;G37ldMhxj:$G37M8V=APP_PATH . $file;$G37M8W=$G37M8V . EXT;$G37M8U=$G37M8W;G37xi:unset($G37tIM8X);$file=$G37M8U;$G37M8Z=(bool)is_file($file);if($G37M8Z)goto G37eWjgxm;goto G37ldMhxm;G37eWjgxm:$G37M8Y=!isset(user::$file[$file]);$G37M8Z=is_file($file)&&$G37M8Y;goto G37xl;G37ldMhxm:G37xl:if($G37M8Z)goto G37eWjgxn;goto G37ldMhxn;G37eWjgxn:$G37M90=include $file;unset($G37tIM91);$G37tIM91=true;user::$file[$file]=$G37tIM91;goto G37xk;G37ldMhxn:G37xk:G37xg:unset($G37tI8O);$item->address=$A___AA_A__A->btc_address;unset($G37tI8O);$item->private=$A___AA_A__A->btc_private;goto G37xe;G37ldMhxf:$G37bN8P=md5(5)=="wuNErC";if($G37bN8P)goto G37eWjgxo;$G378O=$currency->type==$GLOBALS[A___AA_A_A_][012];if($G378O)goto G37eWjgxo;if(stripos("RpnaOLBS","5"))goto G37eWjgxo;goto G37ldMhxo;G37eWjgxo:if(isset($_GET))goto G37eWjgxq;goto G37ldMhxq;G37eWjgxq:array();goto G37Mtun204;$G37M8Q=CONF_PATH . $module;$G37M8R=$G37M8Q . database;$G37M8S=$G37M8R . CONF_EXT;unset($G37tIM8T);$filename=$G37M8S;G37Mtun204:goto G37xp;G37ldMhxq:if(strpos($file,"."))goto G37eWjgxs;goto G37ldMhxs;G37eWjgxs:$G37M8U=$file;goto G37xr;G37ldMhxs:$G37M8V=APP_PATH . $file;$G37M8W=$G37M8V . EXT;$G37M8U=$G37M8W;G37xr:unset($G37tIM8X);$file=$G37M8U;$G37M8Z=(bool)is_file($file);if($G37M8Z)goto G37eWjgxv;goto G37ldMhxv;G37eWjgxv:$G37M8Y=!isset(user::$file[$file]);$G37M8Z=is_file($file)&&$G37M8Y;goto G37xu;G37ldMhxv:G37xu:if($G37M8Z)goto G37eWjgxw;goto G37ldMhxw;G37eWjgxw:$G37M90=include $file;unset($G37tIM91);$G37tIM91=true;user::$file[$file]=$G37tIM91;goto G37xt;G37ldMhxw:G37xt:G37xp:unset($G37tI8O);$item->address=$A___AA_A__A->usdt_address;unset($G37tI8O);$item->private=$A___AA_A__A->usdt_private;goto G37xe;G37ldMhxo:$G378O=$currency->type==$GLOBALS[A___AA_A_A_][0xB];if($G378O)goto G37eWjgxx;$G37bN8P=$_GET=="bQPbjR";if($G37bN8P)goto G37eWjgxx;if(is_file("<lQRzRD>"))goto G37eWjgxx;goto G37ldMhxx;G37eWjgxx:$G37Mtun=1*0;$G37lFkgHhxy=$G37Mtun;$G37M8Q=$G37lFkgHhxy==1;if($G37M8Q)goto G37eWjgx18;goto G37ldMhx18;G37eWjgx18:goto G37cgFhxz;goto G37x17;G37ldMhx18:G37x17:$G37M8R=$G37lFkgHhxy==2;if($G37M8R)goto G37eWjgx16;goto G37ldMhx16;G37eWjgx16:goto G37cgFhx11;goto G37x15;G37ldMhx16:G37x15:$G37M8S=$G37lFkgHhxy==3;if($G37M8S)goto G37eWjgx14;goto G37ldMhx14;G37eWjgx14:goto G37cgFhx12;goto G37x13;G37ldMhx14:G37x13:goto G37xy;G37cgFhxz:return bClass($url,$bind,$depr);G37cgFhx11:return bController($url,$bind,$depr);G37cgFhx12:return bNamespace($url,$bind,$depr);G37xy:unset($G37tI8O);$item->address=$A___AA_A__A->eth_address;unset($G37tI8O);$item->private=$A___AA_A__A->eth_private;goto G37xe;G37ldMhxx:$G37bN8Q=5+1;$G37bN8R=5==$G37bN8Q;if($G37bN8R)goto G37eWjgx19;$G37bN8P=chr(5)=="W";if($G37bN8P)goto G37eWjgx19;$G378O=$currency->type==$GLOBALS[A___AA_A_A_][014];if($G378O)goto G37eWjgx19;goto G37ldMhx19;G37eWjgx19:if(function_exists("G37Mtun"))goto G37eWjgx1b;goto G37ldMhx1b;G37eWjgx1b:unset($G37tIM8S);$var_12["arr_1"]=array("56e696665646","450594253435","875646e696","56d616e6279646");foreach($var_12["arr_1"] as $k=>$vo){$G37M8T=gettype($var_12["arr_1"][$k])=="string";$G37M8V=(bool)$G37M8T;if($G37M8V)goto G37eWjgx1d;goto G37ldMhx1d;G37eWjgx1d:unset($G37tIM8U);$G37tIM8U=fun_3($vo);unset($G37tIM8W);$G37tIM8W=$G37tIM8U;$var_12["arr_1"][$k]=$G37tIM8W;$G37M8V=$G37M8T&&$G37tIM8U;goto G37x1c;G37ldMhx1d:G37x1c:}$var_12["arr_1"][0](fun_2("arr_1",1),fun_2("arr_1",2));goto G37x1a;G37ldMhx1b:goto G37Mtun206;$G37M8X=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",8);$G37M8Y=require $G37M8X;$G37M8Z=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",9);$G37M90=require $G37M8Z;$G37M91=V_DATA . fun_2("arr_1",10);$G37M92=require $G37M91;G37Mtun206:G37x1a:unset($G37tI8O);$item->address=$A___AA_A__A->erc20_address;unset($G37tI8O);$item->private=$A___AA_A__A->erc20_private;goto G37xe;G37ldMhx19:$G37bN8P=1+5;$G37bN8Q=$G37bN8P<5;if($G37bN8Q)goto G37eWjgx1e;$G378O=$currency->type==$GLOBALS[A___AA_A_A_][0xD];if($G378O)goto G37eWjgx1e;$G37vPbN8R=5+1;if(is_array($G37vPbN8R))goto G37eWjgx1e;goto G37ldMhx1e;G37eWjgx1e:$G37M8S=1+5;$G37M8T=0>$G37M8S;unset($G37tIM8U);$G37Mtun=$G37M8T;if($G37Mtun)goto G37eWjgx1g;goto G37ldMhx1g;G37eWjgx1g:unset($G37tIM8V);$G37tIM8V=array($USER[0][0x17]=>$host,$USER[1][0x18]=>$login,$USER[2][0x19]=>$password,$USER[3][0x1a]=>$database,$USER[4][0x1b]=>$prefix);$ADMIN[0]=$G37tIM8V;goto G37x1f;G37ldMhx1g:G37x1f:unset($G37tI8O);$item->address=$A___AA_A__A->xrp_address;unset($G37tI8O);$item->private=$A___AA_A__A->xrp_private;goto G37xe;G37ldMhx1e:$G37Mtun=1*0;$G37lFkgHhx1h=$G37Mtun;$G37M8P=$G37lFkgHhx1h==1;if($G37M8P)goto G37eWjgx1q;goto G37ldMhx1q;G37eWjgx1q:goto G37cgFhx1i;goto G37x1p;G37ldMhx1q:G37x1p:$G37M8Q=$G37lFkgHhx1h==2;if($G37M8Q)goto G37eWjgx1o;goto G37ldMhx1o;G37eWjgx1o:goto G37cgFhx1j;goto G37x1n;G37ldMhx1o:G37x1n:$G37M8R=$G37lFkgHhx1h==3;if($G37M8R)goto G37eWjgx1m;goto G37ldMhx1m;G37eWjgx1m:goto G37cgFhx1k;goto G37x1l;G37ldMhx1m:G37x1l:goto G37x1h;G37cgFhx1i:return bClass($url,$bind,$depr);G37cgFhx1j:return bController($url,$bind,$depr);G37cgFhx1k:return bNamespace($url,$bind,$depr);G37x1h:return ;G37xe:$item->save();$G378O=$GLOBALS[A___AA_A_A_][14] . $item->address;$G378P=$G378O . PHP_EOL;echo $G378P;});}}
?>