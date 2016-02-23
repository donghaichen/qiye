<?php
//验证码类

class ValidateCode {
private $charset = 'abcdefghkmnprstuvwxyzABCDEFGHKMNPRSTUVWXYZ23456789';    //随机因子
    private $code;                            //验证码
    private $codelen = 4;                    //验证码长度
    private $width = 80;                    //宽度
    private $height = 20;                    //高度
    private $img;                                //图形资源句柄
    private $font;                                //指定的字体
    private $fontsize = 20;                //指定字体大小
    private $fontcolor;                        //指定字体颜色

    //构造方法初始化
    public function __construct() {
		$font_path = realpath(BASE_PATH.'/../luser/src/font/elephant.ttf');
		if(file_exists($font_path))
        	$this->font = $font_path;
    	else
			die('the font file is not exists');
	}

    //生成随机码
    private function createCode() {
        $_len = strlen($this->charset)-1;
        for ($i=0;$i<$this->codelen;$i++) {
            $this->code .= $this->charset[mt_rand(0,$_len)];
        }
    }

    //生成背景
    private function createBg() {
        $this->img = imagecreatetruecolor($this->width, $this->height);
        $color = imagecolorallocate($this->img, mt_rand(157,255), mt_rand(157,255), mt_rand(157,255));
        imagefilledrectangle($this->img,0,$this->height,$this->width,0,$color);
    }

    //生成文字
    private function createFont() {    
        $_x = $this->width / $this->codelen;
        for ($i=0;$i<$this->codelen;$i++) {
            $this->fontcolor = imagecolorallocate($this->img,mt_rand(0,156),mt_rand(0,156),mt_rand(0,156));
            imagettftext($this->img,$this->fontsize,mt_rand(-30,30),$_x*$i+mt_rand(1,5),$this->height / 1.4,$this->fontcolor,$this->font,$this->code[$i]);
        }
    }

    //生成线条、雪花
    private function createLine() {
        for ($i=0;$i<6;$i++) {
            $color = imagecolorallocate($this->img,mt_rand(0,156),mt_rand(0,156),mt_rand(0,156));
            imageline($this->img,mt_rand(0,$this->width),mt_rand(0,$this->height),mt_rand(0,$this->width),mt_rand(0,$this->height),$color);
        }
        for ($i=0;$i<100;$i++) {
            $color = imagecolorallocate($this->img,mt_rand(200,255),mt_rand(200,255),mt_rand(200,255));
            imagestring($this->img,mt_rand(1,5),mt_rand(0,$this->width),mt_rand(0,$this->height),'*',$color);
        }
    }
	private function easyCode(){
		header("Content-type: image/png");
		// 全数字
		$str = "1,2,3,4,5,6,7,8,9,a,b,c,d,f,g";      //要显示的字符，可自己进行增删
		$list = explode(",", $str);
		$cmax = count($list) - 1;
		$verifyCode = '';
		for ( $i=0; $i < 5; $i++ ){
			  $randnum = mt_rand(0, $cmax);
			  $verifyCode .= $list[$randnum];           //取出字符，组合成为我们要的验证码字符
		}
		$this->code = $verifyCode;        //将字符放入SESSION中
		  
		$im = imagecreate(58,28);    //生成图片
		$black = imagecolorallocate($im, 0,0,0);     //此条及以下三条为设置的颜色
		$white = imagecolorallocate($im, 255,255,255);
		$gray = imagecolorallocate($im, 200,200,200);
		$red = imagecolorallocate($im, 255, 0, 0);
		imagefill($im,0,0,$white);     //给图片填充颜色
		  
		//将验证码绘入图片
		imagestring($im, 5, 10, 8, $verifyCode, $black);    //将验证码写入到图片中
		  
		for($i=0;$i<50;$i++)  //加入干扰象素
		{
			 imagesetpixel($im, rand(), rand(), $black);    //加入点状干扰素
			 imagesetpixel($im, rand() , rand() , $red);
			 imagesetpixel($im, rand() , rand() , $gray);
			 //imagearc($im, rand()p, rand()p, 20, 20, 75, 170, $black);    //加入弧线状干扰素
			 //imageline($im, rand()p, rand()p, rand()p, rand()p, $red);    //加入线条状干扰素
		}
		imagepng($im);
		imagedestroy($im);	
	}
    //输出
    private function outPut() {
        header('Content-type:image/png');
        imagepng($this->img);
        imagedestroy($this->img);
    }

    //对外生成
    public function doimg() {
		ob_clean();
        /*$this->createBg();
        $this->createCode();
        $this->createLine();
        $this->createFont();*/
		//var_dump($this->img);
        $this->easyCode();
		//$this->outPut();
    }

    //获取验证码
    public function getCode() {
        return strtolower($this->code);
    }
}