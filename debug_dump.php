<?php

/*
	LOVEPHP[Web full stack open source framework]
	Copyright:http://lovephp.com
	License:http://opensource.org/licenses/MIT
	Author:Xiaotong<xiaotong228@qq.com>
*/

//1 debug
function debug_dump//替换print_r,var_dump
(
	$__data,
	$__lv_defaultexpand=-1,//-1时会展开所有节点
	$__showcallinfo=true,
	$__echojscss=true,
)
{

	function _div($cls=null,$sty=null,$tail=null){$cls?$tail.=' class=\''.$cls.'\'':0;$sty?$tail.=' style=\''.$sty.'\'':0;return '<div '.$tail.' >';}
	function _div_(){return '</div>';}
	function _div__($cls=null,$sty=null,$tail=null,$inhtml=null){$cls?$tail.=' class=\''.$cls.'\'':0;$sty?$tail.=' style=\''.$sty.'\'':0;return '<div '.$tail.' >'.$inhtml.'</div>';}

	function _b($cls=null,$sty=null,$tail=null){$cls?$tail.=' class=\''.$cls.'\'':0;$sty?$tail.=' style=\''.$sty.'\'':0;return '<b '.$tail.' >';}
	function _b_(){return '</b>';}
	function _b__($cls=null,$sty=null,$tail=null,$inhtml=null){$cls?$tail.=' class=\''.$cls.'\'':0;$sty?$tail.=' style=\''.$sty.'\'':0;return '<b '.$tail.' >'.$inhtml.'</b>';}

	function _s($cls=null,$sty=null,$tail=null){$cls?$tail.=' class=\''.$cls.'\'':0;$sty?$tail.=' style=\''.$sty.'\'':0;return '<s '.$tail.' >';}
	function _s_(){return '</s>';}
	function _s__($cls=null,$sty=null,$tail=null,$inhtml=null){$cls?$tail.=' class=\''.$cls.'\'':0;$sty?$tail.=' style=\''.$sty.'\'':0;return '<s '.$tail.' >'.$inhtml.'</s>';}

	function _i($cls=null,$sty=null,$tail=null){$cls?$tail.=' class=\''.$cls.'\'':0;$sty?$tail.=' style=\''.$sty.'\'':0;return '<i '.$tail.' >';}
	function _i_(){return '</i>';}
	function _i__($cls=null,$sty=null,$tail=null,$inhtml=null){$cls?$tail.=' class=\''.$cls.'\'':0;$sty?$tail.=' style=\''.$sty.'\'':0;return '<i '.$tail.' >'.$inhtml.'</i>';}

	function _u($cls=null,$sty=null,$tail=null){$cls?$tail.=' class=\''.$cls.'\'':0;$sty?$tail.=' style=\''.$sty.'\'':0;return '<u '.$tail.' >';}
	function _u_(){return '</u>';}
	function _u__($cls=null,$sty=null,$tail=null,$inhtml=null){$cls?$tail.=' class=\''.$cls.'\'':0;$sty?$tail.=' style=\''.$sty.'\'':0;return '<u '.$tail.' >'.$inhtml.'</u>';}

/*
	array
	integer
	double
	string
	boolean
	object
	resource
	NULL
*/

	static $firstcall=1;

	if($firstcall&&$__echojscss)
	{//输出css和js代码,这个是用less编译出来的,原始代码在:pc.core.less,pc.core.jsraw

		echo '<style type="text/css">

[__lpdd__=lpdd] {
	border: 1px solid #000;
	font-size: 12px;
	padding: 10px;
	background: #fff;
	font-family: \'宋体\';
	word-break: break-all;
	white-space: break-spaces;
}
[__lpdd__=lpdd] i,
[__lpdd__=lpdd] s,
[__lpdd__=lpdd] u {
	text-decoration: none;
	font-style: normal;
}
[__lpdd__=lpdd] a {
	cursor: pointer;
}
[__lpdd__=lpdd] [lpdd_role=callinfo] {
	line-height: 20px;
	border-bottom: 1px solid #ddd;
	padding-bottom: 5px;
}
[__lpdd__=lpdd] [lpdd_role=subtree] > [lpdd_role=header] {
	padding-top: 5px;
	padding-bottom: 5px;
	padding-right: 10px;
	position: relative;
}
[__lpdd__=lpdd] [lpdd_role=subtree] > [lpdd_role=header] > b,
[__lpdd__=lpdd] [lpdd_role=subtree] > [lpdd_role=header] > span,
[__lpdd__=lpdd] [lpdd_role=subtree] > [lpdd_role=header] > s,
[__lpdd__=lpdd] [lpdd_role=subtree] > [lpdd_role=header] > i,
[__lpdd__=lpdd] [lpdd_role=subtree] > [lpdd_role=header] > a {
	display: inline-block;
	vertical-align: top;
	line-height: 20px;
}
[__lpdd__=lpdd] [lpdd_role=subtree] > [lpdd_role=header] > b > u,
[__lpdd__=lpdd] [lpdd_role=subtree] > [lpdd_role=header] > span > u,
[__lpdd__=lpdd] [lpdd_role=subtree] > [lpdd_role=header] > s > u,
[__lpdd__=lpdd] [lpdd_role=subtree] > [lpdd_role=header] > i > u,
[__lpdd__=lpdd] [lpdd_role=subtree] > [lpdd_role=header] > a > u {
	display: inline-block;
	vertical-align: top;
	line-height: 20px;
	background: #999;
	color: #fff;
	font-weight: normal !important;
	padding: 0 5px;
}
[__lpdd__=lpdd] [lpdd_role=subtree] > [lpdd_role=header] > i {
	font-weight: bold;
	color: #000;
}
[__lpdd__=lpdd] [lpdd_role=subtree] > [lpdd_role=header] > b {
	color: #fff;
	font-weight: normal;
	padding: 0 5px;
	background: #000;
}
[__lpdd__=lpdd] [lpdd_role=subtree] > [lpdd_role=header] > s {
	padding: 0 5px;
	color: #000;
	background: #eee;
	font-weight: bold;
}
[__lpdd__=lpdd] [lpdd_role=subtree] > [lpdd_role=header] > * {
	margin-right: 10px;
}
[__lpdd__=lpdd] [lpdd_role=subtree] > [lpdd_role=header]:hover {
	background: #d9d9d9;
}
[__lpdd__=lpdd] [lpdd_role=subtree] > [lpdd_role=header] > a[lpdd_showblank=trigger] {
	width: 20px;
	height: 20px;
	position: relative;
	background: #f0f;
}
[__lpdd__=lpdd] [lpdd_role=subtree] > [lpdd_role=header] > a[lpdd_showblank=trigger]:before,
[__lpdd__=lpdd] [lpdd_role=subtree] > [lpdd_role=header] > a[lpdd_showblank=trigger]:after {
	content: \'\';
	position: absolute;
	top: 5px;
	width: 0;
	height: 0;
	border-width: 5px;
	border-style: solid;
}
[__lpdd__=lpdd] [lpdd_role=subtree] > [lpdd_role=header] > a[lpdd_showblank=trigger]:before {
	left: -2px;
	border-color: transparent #fff transparent transparent;
}
[__lpdd__=lpdd] [lpdd_role=subtree] > [lpdd_role=header] > a[lpdd_showblank=trigger]:after {
	right: -2px;
	border-color: transparent transparent transparent #fff;
}
[__lpdd__=lpdd] [lpdd_role=subtree] > [lpdd_role=header] > i[lpdd_showblank=content] {
	display: none;
}
[__lpdd__=lpdd] [lpdd_role=subtree] > [lpdd_role=header][lpdd_showblank_status=yes] > i:not([lpdd_showblank=content]) {
	display: none;
}
[__lpdd__=lpdd] [lpdd_role=subtree] > [lpdd_role=header][lpdd_showblank_status=yes] > i[lpdd_showblank=content] {
	display: inline-block;
}
[__lpdd__=lpdd] [lpdd_role=subtree] > [lpdd_role=header][lpdd_showblank_status=yes] > a[lpdd_showblank=trigger]:before {
	left: 4px;
	border-color: transparent transparent transparent #fff;
}
[__lpdd__=lpdd] [lpdd_role=subtree] > [lpdd_role=header][lpdd_showblank_status=yes] > a[lpdd_showblank=trigger]:after {
	right: 4px;
	border-color: transparent #fff transparent transparent;
}
[__lpdd__=lpdd] [lpdd_role=subtree][lpdd_type=array] > [lpdd_role=header] {
	padding-left: 20px;
}
[__lpdd__=lpdd] [lpdd_role=subtree][lpdd_type=array] > [lpdd_role=header]:after {
	content: \'\';
	position: absolute;
	left: 5px;
	top: 12px;
	width: 0;
	height: 0;
	border-width: 5px;
	border-style: solid;
	border-color: #000 transparent transparent transparent;
}
[__lpdd__=lpdd] [lpdd_role=subtree] > [lpdd_role=subtree] {
	margin-left: 20px;
}
[__lpdd__=lpdd] [lpdd_role=subtree] > [lpdd_role=subtree]:not([lpdd_type=array]) > [lpdd_role=header] {
	padding-left: 20px;
}
[__lpdd__=lpdd] [lpdd_role=subtree] > [lpdd_role=subtree]:not([lpdd_type=array]) > [lpdd_role=header]:after {
	content: \'\';
	position: absolute;
	left: 8px;
	top: 10px;
	width: 0;
	height: 0;
	border-width: 5px;
	border-style: solid;
	border-color: transparent transparent transparent #aaa;
}
[__lpdd__=lpdd] [lpdd_role=subtree][lpdd_type=array] > [lpdd_role=header] {
	cursor: pointer;
}
[__lpdd__=lpdd] [lpdd_role=subtree][lpdd_type=array] > [lpdd_role=header] > b {
	background: #c08;
}
[__lpdd__=lpdd] [lpdd_role=subtree][lpdd_type=array] > [lpdd_role=header]:hover {
	background: #f7d9ed;
}
[__lpdd__=lpdd] [lpdd_role=subtree][lpdd_type=integer] > [lpdd_role=header] > b {
	background: #4c0;
}
[__lpdd__=lpdd] [lpdd_role=subtree][lpdd_type=integer] > [lpdd_role=header]:hover {
	background: #e3f7d9;
}
[__lpdd__=lpdd] [lpdd_role=subtree][lpdd_type=string] > [lpdd_role=header] > b {
	background: #44c;
}
[__lpdd__=lpdd] [lpdd_role=subtree][lpdd_type=string] > [lpdd_role=header] > i:not([lpdd_emptystring]):before,
[__lpdd__=lpdd] [lpdd_role=subtree][lpdd_type=string] > [lpdd_role=header] > i:not([lpdd_emptystring]):after {
	display: inline-block;
	vertical-align: top;
	content: \'\';
	width: 2px;
	height: 20px;
	border-width: 0 0 0 2px;
	border-style: dashed;
	border-color: #f0f;
}
[__lpdd__=lpdd] [lpdd_role=subtree][lpdd_type=string] > [lpdd_role=header] > i:not([lpdd_emptystring]):after {
	border-width: 0 2px 0 0;
}
[__lpdd__=lpdd] [lpdd_role=subtree][lpdd_type=string] > [lpdd_role=header]:hover {
	background: #e3e3f7;
}
[__lpdd__=lpdd] [lpdd_role=subtree][lpdd_type=float] > [lpdd_role=header] > b {
	background: #4c8;
}
[__lpdd__=lpdd] [lpdd_role=subtree][lpdd_type=float] > [lpdd_role=header]:hover {
	background: #e3f7ed;
}
[__lpdd__=lpdd] [lpdd_role=subtree][lpdd_type=boolean] > [lpdd_role=header] > b {
	background: #08c;
}
[__lpdd__=lpdd] [lpdd_role=subtree][lpdd_type=boolean] > [lpdd_role=header]:hover {
	background: #d9edf7;
}
[__lpdd__=lpdd] [lpdd_role=subtree][lpdd_type=null] > [lpdd_role=header] > b {
	background: #88c;
}
[__lpdd__=lpdd] [lpdd_role=subtree][lpdd_type=null] > [lpdd_role=header]:hover {
	background: #ededf7;
}
[__lpdd__=lpdd] [lpdd_role=subtree][lpdd_type=object] > [lpdd_role=header] > b {
	background: #80c;
}
[__lpdd__=lpdd] [lpdd_role=subtree][lpdd_type=object] > [lpdd_role=header]:hover {
	background: #edd9f7;
}
[__lpdd__=lpdd] [lpdd_role=subtree][lpdd_type=resource] > [lpdd_role=header] > b {
	background: #cc0;
}
[__lpdd__=lpdd] [lpdd_role=subtree][lpdd_type=resource] > [lpdd_role=header]:hover {
	background: #f7f7d9;
}
[__lpdd__=lpdd] [lpdd_role=subtree][lpdd_expand=no][lpdd_type=array] > [lpdd_role=header] {
	padding-left: 20px;
}
[__lpdd__=lpdd] [lpdd_role=subtree][lpdd_expand=no][lpdd_type=array] > [lpdd_role=header]:after {
	left: 8px;
	top: 10px;
	border-color: transparent transparent transparent #000;
}
[__lpdd__=lpdd] [lpdd_role=subtree][lpdd_expand=no] > [lpdd_role=subtree] {
	display: none;
}
[__lpdd__=lpdd] + [__lpdd__=lpdd] {
	margin-top: 20px;
}

</style><script type="text/javascript">

function lpdd_expand_toggle(_this)
{

	if(\'no\'===_this.parentElement.getAttribute(\'lpdd_expand\'))
	{
		_this.parentElement.setAttribute(\'lpdd_expand\',\'yes\');
	}
	else
	{
		_this.parentElement.setAttribute(\'lpdd_expand\',\'no\');
	}

}
function lpdd_showblank_toggle(_this)
{

	if(\'yes\'===_this.parentElement.getAttribute(\'lpdd_showblank_status\'))
	{
		_this.parentElement.setAttribute(\'lpdd_showblank_status\',\'no\');
	}
	else
	{
		_this.parentElement.setAttribute(\'lpdd_showblank_status\',\'yes\');
	}

}

			</script>';

		$firstcall=0;

	}

	$__lv_current=0;

	$__keypath_keys=[];

	$__gettype=function($__data)
	{

		$type=strtolower(gettype($__data));

		if(
			'double'==$type||
			'real'==$type
		)
		{
			$type='float';
		}

		return $type;

	};

	$__valueconvertstr=function($__value,$__replaceblank=0) use (&$__gettype)
	{

		if([]===$__value)
		{
			return _u__('','','','[emptyArray]');
		}
		else if(null===$__value)
		{
			return _u__('','','','[null]');
		}
		else if(true===$__value)
		{
			return _u__('','background:#080;','','[true]');
		}
		else if(false===$__value)
		{
			return _u__('','background:#f00;','','[false]');
		}
		else if(''===$__value)
		{
			return _u__('','','','[emptyString]');
		}
		else
		{

			$__type=$__gettype($__value);

			if('string'==$__type)
			{

				$__value=htmlentities($__value);

				if($__replaceblank)
				{
					$__value=strtr($__value,
						[
							' '=>_u__('','','','[space]'),
							'	'=>_u__('','','','[tab]'),
							"\n"=>_u__('','','','[newLine]'),
						]);
				}

				return $__value;

			}
			else if('object'==$__type)
			{
				return _u__('','','','[object]');
			}
			else
			{
				return $__value;
			}
		}
	};

	$__recu=function
	(
		$__key=null,
		$__data,
		$__lv_current
	)
	use
	(
		&$__recu,
		&$__valueconvertstr,
		&$__gettype,
		$__lv_defaultexpand,
		&$__keypath_keys
	)
	{

		$__keypath_keys[$__lv_current]=$__key;

		$__type=$__gettype($__data);

		$__tail_0='';
		$__tail_1='';

		if('array'==$__type)
		{
			if((-1!==$__lv_defaultexpand&&$__lv_current>=$__lv_defaultexpand)||[]===$__data)
			{
				$__tail_0.=' lpdd_expand=no';
			}

			$__tail_1.=' onclick="lpdd_expand_toggle(this);" ';

		}

		$temp=$__keypath_keys;

		$temp=array_slice($temp,1,$__lv_current);

		$__tail_1.=' lpdd_keypath="'.implode('/',$temp).'"';

		$H.=_div('','','lpdd_role=subtree lpdd_type='.$__type.$__tail_0);

	 		$H.=_div('','','lpdd_role=header'.$__tail_1);

				if(!is_null($__key))
				{
					$H.=_s__('','','',$__valueconvertstr($__key,1));
				}

				$H.=_b();

					$H.=ucfirst($__type);

					if('array'==$__type)
					{
						$H.='('.count($__data).')';
					}
					else if('string'==$__type)
					{
						$H.='('.strlen($__data).')';
					}
					else if('resource'==$__type)
					{
						$H.='('.get_resource_type($__data).')';
					}
					else if('object'==$__type)
					{
						$H.='(\\'.get_class($__data).')';
					}
					else
					{}
				$H.=_b_();

				if('array'==$__type&&[]!==$__data)
				{
				}
				else
				{

					$H.=_i__('','',(''===$__data?'lpdd_emptystring':''),$__valueconvertstr($__data));

					if(
						'string'==$__type&&
						(
							false!==strpos($__data,' ')||
							false!==strpos($__data,'	')||
							false!==strpos($__data,"\n")
						)
					)
					{
						$H.=_i__('','','lpdd_showblank=content',$__valueconvertstr($__data,1));
						$H.=_a0__('','','lpdd_showblank=trigger onclick="lpdd_showblank_toggle(this);" ');
					}

				}
			$H.=_div_();

			if('array'==$__type)
			{

				foreach($__data as $k=>$v)
				{
					$H.=$__recu($k,$v,$__lv_current+1);
				}

			}

		$H.=_div_();

		return $H;
	};

	$H.=_div('','','__lpdd__=lpdd');

		if($__showcallinfo)
		{
			$H.=_div('','','lpdd_role=callinfo');
				$temp=debug_backtrace();
				$H.=$temp[0]['file'].'(line:'.$temp[0]['line'].')';
//				$H.='/'.time_str();
			$H.=_div_();
		}

		$H.=$__recu(null,$__data,$__lv_current);

	$H.=_div_();

	return $H;

}

$__test=[];
$__test[]='aaa';
$__test[]=111;
$__test[]=111.222;
$__test[]=true;
$__test[]=false;
$__test[]=null;
$__test[]=[];
$__test[]=$__test;

echo debug_dump($__test);
//print_r($__test);
//var_dump($__test);

