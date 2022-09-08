
/*
	LOVEPHP[Web full stack open source framework]
	Copyright:http://lovephp.com
	License:http://opensource.org/licenses/MIT
	Author:Xiaotong<xiaotong228@qq.com>
*/

function lpdd_expand_toggle(_this)
{

	if('no'===_this.parentElement.getAttribute('lpdd_expand'))
	{
		_this.parentElement.setAttribute('lpdd_expand','yes');
	}
	else
	{
		_this.parentElement.setAttribute('lpdd_expand','no');
	}

}
function lpdd_showblank_toggle(_this)
{

	if('yes'===_this.parentElement.getAttribute('lpdd_showblank_status'))
	{
		_this.parentElement.setAttribute('lpdd_showblank_status','no');
	}
	else
	{
		_this.parentElement.setAttribute('lpdd_showblank_status','yes');
	}

}