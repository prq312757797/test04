<?php
namespace Home\Controller;
use Think\Controller;
class CaseController extends CommonController {

    public function index(){
	
    	$this->display();
    }
    
   function index02(){
		
		$field='
		order_form.order_num,order_form.express_id,order_form.express_num,
		
		express.code
	';

	$order_info=M("order_form")
	->field($field)
	->join('left join express ON express.id=order_form.express_id')
	->where("order_num='".$_GET["order_num"]."'")
	->find();

		if($order_info["express_id"]==0){
			//快递公司为无   无需物流信息
			$result["data"]="0";
			$this->ajaxReturn($result["data"]);
		}else{
				$key = 'c684ab43a28bc3caea53570666ce9762'; 
				$kuaidichaxun = $this->KuaidiAPi($key);
		
		 		$url = "http://highapi.kuaidi.com/openapi-querycountordernumber.html?id=".$this->_APPKEY."&com=".$order_info["code"]."&nu=".$order_info["express_num"]."&show=".$this->_show."&muti=".$this->_muti."&order=".$this->_order;
		
		        $result = $this->http_request($url);
		    dump($url);
		        $result = json_decode($result, true);
  			dump($result);die;
		        $this->ajaxReturn($result["data"]);
		}
		
	
	}
	
	 public function http_request($url,$data = null,$headers=array())
    {
        $curl = curl_init();
        if( count($headers) >= 1 ){
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        }
	        curl_setopt($curl, CURLOPT_URL, $url);
	        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
	        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
    
        if (!empty($data)){
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        }
	        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	        $output = curl_exec($curl);
        curl_close($curl);
        return $output;
    }
    
      private $_show = 0;

    private $_muti = 0;

    private $_order = 'desc';
    
    /**
     * 您获得的快递网接口查询KEY。
     * @param string $key
     */
    public function KuaidiAPi($key){
        $this->_APPKEY = $key;
    }

    /**
     * 设置数据返回类型。0: 返回 json 字符串; 1:返回 xml 对象
     * @param number $show
     */
    public function setShow($show = 1){
        $this->_show = $show;
    }
    
    /**
     * 设置返回物流信息条目数, 0:返回多行完整的信息; 1:只返回一行信息
     * @param number $muti
     */
    public function setMuti($muti = 0){
        $this->_muti = $muti;
    }
    
}