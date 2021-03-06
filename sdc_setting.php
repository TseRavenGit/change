<?php  
  
if (!defined('THINK_PATH')) exit();  
  
return array(  
  
    //SDC相关配置
  
    'THINK_SDC' => array(  
        'SDC_PRICE'   => 40.00, //SDC购买价格
        'EW_DISCOUNT' => 0.95, //1w以上折扣 *95%
        'WW_DISCOUNT' => 0.92, //5w以上折扣 *92%
        'SW_DISCOUNT' => 0.88, //10w以上折扣 *88%
        'ANNUAL_INCOME' => 0.10, //年收益 8%-12%
        'DELIVERY_VAL' => 1000, //达到该值，可生成交割卷

    ),  

  	'MOBPAY' => array(
		/****基本信息****/
		// 商户APINAME，WEB渠道一 般支付
		'API_NAME_PAY' => 'WEB_PAY_B2C',
		// 商户APINAME，商户订单信息查询
		'API_NAME_QUERY' => 'MOBO_TRAN_QUERY',
		// 商户APINAME，Mo宝支付退款申请
		'API_NAME_REFUND' => 'MOBO_TRAN_RETURN',
		// 商户API版本
		'API_VERSION' => '1.0.0.0',
		/****以下信息以实际为准****/
		// Mo宝支付系统密钥
		'MBP_KEY' => '73e5c26eea98a4915047355367e73ba0',
		// Mo宝支付系统网关地址（正式环境）
		'MBP_GATEWAY' => 'https://trade.mobaopay.com/cgi-bin/netpayment/pay_gate.cgi',
		// 商户在Mo宝支付的平台号
		'PLATFORM_ID'	=>	'210001440011429',
		// Mo宝支付分配给商户的账号
		'MERCHANT_ACC'	=>	'210001440011429',
		// 商户通知地址（请根据自己的部署情况设置下面的路径）
		//'NOTTIFY_URL'	=>	'http://'.$_SERVER['HTTP_HOST'].'/index.php/Home/pay/callback',
	),

	'BANKCODE' => array(
		'ICBC' => '工行',
		'ABC' => '农行',
		'BOC' => '中行',
		'CCB' => '建行',
		'COMM' => '交行',
		'CMB' => '招行',
		'SPDB' => '浦发',
		'CIB' => '兴业',
		'CMBC' => '民生',
		'GDB' => '广发',
		'CNCB' => '中信',
		'CEB' => '光大',
		'HXB' => '华夏',
		'PSBC' => '邮储',
		'PAB' => '平安',
	),
);  
  
?>    
