<?php ?><?php /** This Software is the property of D³ Data Development and is protected by copyright law - it is NOT Freeware.  Any unauthorized use of this software without a valid license key is a violation of the license agreement and will be prosecuted by civil and criminal law.  Inhaber: Thomas Dartsch Alle Rechte vorbehalten  @package LoginAsCustomer @version 4.0.1.1 SourceGuardian (02.01.2023) @author  Markus Gärtner support@shopmodule.com @copyright (C) 2023, D3 Data Development @see https://www.d3data.de */ ?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
