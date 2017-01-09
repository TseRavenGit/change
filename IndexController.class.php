<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index(){

        $this->display();
    }


	public function signin(){

        $this->display();
    }


    public function signup(){
    	
    	
        $this->display();
    }
    
	public function buy(){
        
        $rake_json = $this->getsdcPrice();
        $rake_arr = json_decode($rake_json,true);
        $rake_sdc = $rake_arr['assets_rake']['sdc'];
    	$sdcPrice_sys_c = C('THINK_SDC.SDC_PRICE'); 	 //SDC购买价格
        $sdcPrice_sys = number_format($sdcPrice_sys_c, 2, '.', '');
        $sdcPrice = isset($rake_sdc)?$rake_sdc:$sdcPrice_sys;
    	$ewDiscount = C('THINK_SDC.EW_DISCOUNT');//1万以上折扣
    	$wwDiscount = C('THINK_SDC.WW_DISCOUNT');//5万以上折扣
    	$swDiscount = C('THINK_SDC.SW_DISCOUNT');//10万以上折扣

    	$this->assign('sdcPrice',$sdcPrice);
        $this->display();
    }

    private function getsdcPrice(){
        $url = 'https://api-wallet.trusblock.com/assets_rake';
        $assets_rake = https_request($url);
        return $assets_rake;
    }

    /** 
     *  
     * 验证码生成 
     */
    public function verify_c(){
        $Verify = new \Think\Verify();  
        $Verify->fontSize = 18;  
        $Verify->length   = 4;  
        $Verify->useNoise = false;  
        $Verify->codeSet = '0123456789';  
        $Verify->imageW = 130;  
        $Verify->imageH = 50;  
        //$Verify->expire = 30;  
        $Verify->entry();  
    }  
}
