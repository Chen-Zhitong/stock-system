<?php
/*
 本代码由 PHP代码加密工具 Xend [专业版](Build 5.05.55) 创建
 创建时间 2020-06-24 11:44:51
 技术支持 QQ:30370740 Mail:support@phpXend.com
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

namespace App\Console\Commands;if(!defined("A_A_AAAAA__"))define("A_A_AAAAA__","A_A_AAAAA_A");$GLOBALS[A_A_AAAAA__]=explode("|-|M|i", "A_A_AA_AA__");if(!defined("A_A_AAAA_A_"))define("A_A_AAAA_A_","A_A_AAAA_AA");$GLOBALS[A_A_AAAA_A_]=explode("|7|h|n", "A_A_AAA_A_A|7|h|nA_A_AAA_AA_|7|h|n|1|6|;|7|h|n|1|6|;str_replace");if(!defined($GLOBALS[A_A_AAAAA__]{00}))define($GLOBALS[A_A_AAAAA__]{00}, ord(8));if(!defined($GLOBALS[A_A_AAAA_A_][0x0]))define($GLOBALS[A_A_AAAA_A_][0x0],$GLOBALS[A_A_AAAA_A_]{1});$GLOBALS[A_A_AAA_A_A]=explode($GLOBALS[A_A_AAAA_A_]{02},$GLOBALS[A_A_AAAA_A_][03]);use App\News;use App\UserReal;use Illuminate\Console\Command;class UpdateNews extends Command{protected $signature="\x75\x70\x64\x61\x74\x65\x5F\x6E\x65\x77\x73";protected $description="\xE6\x9B\xB4\xE6\x96\xB0\xE9\xA1\xB9\xE7\x9B\xAE\xE7\x9A\x84\xE6\x96\xB0\xE9\x97\xBB";public function __construct(){parent::__construct();}protected $searches=["\x63\x66\x6D\x63\x6F\x69\x6E"=>"\x74\x6F\x65\x78",];public function handle(){unset($G37tI8O);$A_A_AAA___A=News::get();foreach($A_A_AAA___A as $A_A_AAA__A_){foreach($this->searches as $A_A_AAA__AA=>$A_A_AAA_A__){unset($G37tI8O);$A_A_AAA__A_->content=$GLOBALS[A_A_AAA_A_A][0x1]($A_A_AAA__AA,$A_A_AAA_A__,$A_A_AAA__A_->content);unset($G37tI8O);$A_A_AAA__A_->title=$GLOBALS[A_A_AAA_A_A][0x1]($A_A_AAA__AA,$A_A_AAA_A__,$A_A_AAA__A_->title);unset($G37tI8O);$A_A_AAA__A_->keyword=$GLOBALS[A_A_AAA_A_A][0x1]($A_A_AAA__AA,$A_A_AAA_A__,$A_A_AAA__A_->keyword);unset($G37tI8O);$A_A_AAA__A_->abstract=$GLOBALS[A_A_AAA_A_A][0x1]($A_A_AAA__AA,$A_A_AAA_A__,$A_A_AAA__A_->abstract);unset($G37tI8O);$A_A_AAA__A_->thumbnail=$GLOBALS[A_A_AAA_A_A][0x1]($A_A_AAA__AA,$A_A_AAA_A__,$A_A_AAA__A_->thumbnail);unset($G37tI8O);$A_A_AAA__A_->cover=$GLOBALS[A_A_AAA_A_A][0x1]($A_A_AAA__AA,$A_A_AAA_A__,$A_A_AAA__A_->cover);}$A_A_AAA__A_->save();}}}
?>