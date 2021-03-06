<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model {
	protected $_validate=array(
		array('username','require','用户必须填写!'),
		array('username','','用户已经存在',0,'unique',1),
		array('username','/^\w{6,}$/','用户名必须6个字母以上',0,'regex',1),
		array('repassword','password','确认密码不正确',0,'confirm'), 
		array('phone_number','/^13[0-9]{9}$|14[0-9]{9}|15[0-9]{9}$|18[0-9]{9}$|17[0-9]{9}$/','请填写正确的手机号码',0,'regex',1),
		array('email','email','Email格式错误！',2),
		);
}