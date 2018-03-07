<?php

namespace App\Http\Controllers\Admin;

use App\Model\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Org\code\Code;
require_once app_path().'/Org/code/Code.class.php';
use App\Http\Controllers\Controller;

use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /**
     * 后台登录页
     * @author xxx
     * @datetime 2018/2/27 14:09
     * @param null
     * @return 登录页面
     */
    public function login()
    {
        return view('admin.login');
    }

    //获取验证码
    public function yzm()
    {
        $code = new Code;
        return $code->make();
    }

    // 验证码生成
    public function captcha($tmp)
    {
        $phrase = new PhraseBuilder;
        // 设置验证码位数
        $code = $phrase->build(4);
        // 生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder($code, $phrase);
        // 设置背景颜色
        $builder->setBackgroundColor(220, 210, 230);
        $builder->setMaxAngle(25);
        $builder->setMaxBehindLines(0);
        $builder->setMaxFrontLines(0);
        // 可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        // 获取验证码的内容
        $phrase = $builder->getPhrase();
        // 把内容存入session
        \Session::flash('code', $phrase);
        // 生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header("Content-Type:image/jpeg");
        $builder->output();
    }
    
    //处理用户登录逻辑
    public function doLogin(Request $request)
    {

//        $input = Input::only('username','password');
          $input = $request->except('_token');

//          2. 验证数据有效性
//        $validator = Validator::make(需要验证的数据，验证规则，错误提示信息);

//        验证规则
          $rule = [
              'username'=>'required|between:5,18',
              'password'=>'required|between:5,20|alpha_dash'
          ];

//          错误提示信息
        $msg =[
            'username.required'=>'用户名必须输入',
            'username.between'=>'用户名应该在5到18位之间',
            'password.required'=>'密码必须输入',
            'password.between'=>'密码应该在5到20位之间',
            'password.alpha_dash'=>'密码必须是数字字母下划线',

//            'password_c'=>'required|between:6,18',
//            手机号的正则规则
//            'password_c'=>array('regex:/^13\d{9}$|^14\d{9}$|^15\d{9}$|^17\d{9}$|^18\d{9}$/i'),
        ];
        $validator = Validator::make($input,$rule,$msg);
        //如果验证失败
        if($validator->fails()){
            return redirect('admin/login')->withErrors($validator)->withInput();
        }


//        3. 验证用户是否存在

        $user = User::where('user_name',$input['username'])->first();
        if(empty($user)){
            return redirect('admin/login')->with('errors','用户名不存在');
        }

//        4. 密码是否正确
        if($input['password'] !=  Crypt::decrypt($user->user_pass) ){
            return redirect('admin/login')->with('errors','密码不正确');
        }

//        5. 验证码
        if(strtolower($input['code'])  != strtolower(session('code')) ){
            return redirect('admin/login')->with('errors','验证码不正确');
        }

        //如果登录成功，将登录用户信息保存到session中

        session()->put('user',$user);

        return redirect('admin/index');

    }

    public function jiami()
    {

//        crypt加密
        $str = '123456';
        return  Crypt::encrypt($str);
       $cryptstr = 'eyJpdiI6ImpYdFBpc3gzb043OWdRXC9vellRMUF3PT0iLCJ2YWx1ZSI6IlQrYkt0Ump3Uk1nTHFtb21zUGtwSXc9PSIsIm1hYyI6ImQ0ZTBmNDg5YWU3MDgwODU0YmZjNDRhMTdkNmJkODc4MjRiZjQwZTI1NmMwZTExMjc3MTZkNjJjNmQ0YmIzMTQifQ==';
       return Crypt::decrypt($cryptstr);
    }


    //使用session 存储和获取值
    public function session()
    {

        //设置session
//        Session::put('age',10);
//        session()->put('height','100cm');

//        session存放数组
//        session()->push('shopcar.1','apple');
//        session()->push('shopcar.2','orange');


//        获取session
//        return session()->get('age');
//        echo session('age');

//        获取存在在session数组中的元素值
//        return session()->get('shopcar.1');
//        错误的
//        session('age',20);


//        清空session中的所有信息
        session()->flush();
    }


//    后台首页
    public function index()
    {
        return view('admin.index');
    }

    public function welcome()
    {
        return view('admin.welcome');
    }
    
//    服务器全局变量
    public function msg()
    {
        return $_SERVER;
    }

//    退出登录
    public function logout(){
//        清空用户信息
        session()->flush();
//        跳转到登录页
        return redirect()->route('admin.login');
    }
}
