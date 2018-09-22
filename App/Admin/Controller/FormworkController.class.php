<?php
namespace Admin\Controller;
use Think\Controller;
class FormworkController extends CommonController {

    //管理小程序模板
        public function index(){
	//	$a= $this->user_info=M('jt_user_info')->select();
		
		 $goods = D("qianyue");
            $total = $goods->count();
            $per = 100;
            $page = new \Component\Page($total, $per); //autoload
            $sql = "select * from qianyue order by add_time desc ".$page->limit;
            $info = $goods -> query($sql);
            $pagelist = $page -> fpage();

		for($i=0;$i<count($info);$i++){
			$where["id"]=$info[$i]["muban_type"];
			$a=M("muban_l")->where($where)->find();
			$info[$i]["muban_type_name"]=$a["name"];//模板类型
			
			//模板特色
			if($info[$i]["muban_type"]==1){
				//1 是商城版
                $arr=$this->chaifen($info[$i]["muban_tese"]);
                $muban_t=M("muban_t")->where("lid=1")->order("id")->select();
                if($arr[1]==1){
                    $info[$i]["tese01"]=$muban_t[1]["name"];
                }
                if($arr[2]==1){
                    $info[$i]["tese02"]=$muban_t[2]["name"];
                }
                if($arr[3]==1){
                    $info[$i]["tese03"]=$muban_t[3]["name"];
                }else{
                	$info[$i]["muban_tese"]="基础版";
                }
	   }else{
	   	 	$info[$i]["muban_tese"]="基础版";
	   }
	       
	       
	     /*  else if($info[$i]["muban_type"]==2){
	       	//2 是单页版
	       	$info[$i]["muban_tese"]="基础版";
	       }else if($info[$i]["muban_type"]==5){
	       	//5 是资讯版
	       		$info[$i]["muban_tese"]="基础版";
	       }*/
		}
	

            $this -> assign('user_info', $info);
            $this -> assign('pages', $pagelist);
		
		
		$this->display();
	}
	 //分割函数
    function chaifen($source){
        return explode(',',$source);
    }
	//1011...20.09 使用muban 表的备份
	function muban1011(){
		//	$a= $this->user_info=M('jt_user_info')->select();
		
		 $goods = D("muban");
            $total = $goods->count();
            $per = 10;
            $page = new \Component\Page($total, $per); //autoload
            $sql = "select * from muban ".$page->limit;
            $info = $goods -> query($sql);
            $pagelist = $page -> fpage();

		for($i=0;$i<count($info);$i++){
			$where["id"]=$info[$i]["muban_type"];
			$a=M("muban_l")->where($where)->find();
			$info[$i]["muban_type_name"]=$a["name"];//模板类型
			
		/*	$where01["id"]=$info[$i]["muban_b"];
			$a=M("muban_b")->where($where01)->find();
			$info[$i]["muban_bb_name"]=$a["name"];//模板版本号*/
		}
	
		dump($info);die;
            $this -> assign('user_info', $info);
            $this -> assign('pages', $pagelist);
		
		
		$this->display();
	}
	//小程序模板  根据商户申请条件生成
    public function tir_sh(){
  
        $where=array(
            'state'=>"1",
            'is_tired'=>"1"
        );
        $shanghu=M("qianyue")->where($where)->order("add_time desc")->select();
      //  echo M("qianyue")->_sql();
        for($i=0;$i<count($shanghu);$i++){
            $a["user_id"]=$shanghu[$i]["agency_id"];
            $b=M("jt_user_info")->where($a)->find();
            $shanghu[$i]["agency_name"]=$b["user_company"];//服务商公司名称

			$a2["id"]=$shanghu[$i]["user_id"];
			$b=M("user_info")->where($a2)->find();
			$shanghu[$i]["shagnhu_name"]=$b["name"];//商户账号
			

            $c["id"]=$shanghu[$i]["muban_type"];
            $d=M("muban_l")->where($c)->find();
            $shanghu[$i]["muban_name"]=$d["name"];//模板类型名称
            		
			$c2["id"]=$shanghu[$i]["muban_b"];
			$d=M("muban_b")->where($c2)->find();
			$shanghu[$i]["muban_bb_name"]=$d["name"];//模板版本名称
        }
        $this->shanghu=$shanghu;
                $this->display();
    }
        //小程序模板与商户申请绑定=========================================================
        public function tired_on(){
            //得到的是商户申请表的id，需要绑定的是商户id，这样商户就有了模板id内容，将模板id给商户表，将商户id给模板表
           $this->muban_num="JT".date("YmdHis",time()).rand(1,9999);

		//签约申请基本信息
		$info=M("qianyue")->where("id='".$_GET["id"]."'")->find();
		$this->info=$info;
		
		//模板版本类型
		$lx["id"]=$info["muban_type"];
		$this->leixing=M("muban_l")->where($lx)->find();
		
		//模板版本型号
		$bb["id"]=$info["muban_b"];
		$this->banben=M("muban_b")->where($bb)->find();
		
		//服务商信息
		$agency_id["id"]=$info["agency_id"];
		$agency_info=M("jt_user_info")
		->field('user_id,user_company')
		->where($agency_id)
		->find();	
		
		$this->agency_info=$agency_info;
		
		//商户信息
		$shagnhu_id["id"]=$info["user_id"];
		$shagnhu_info=M("user_info")
		->field('id,name')
		->where($shagnhu_id)
		->find();	
		
		$this->shagnhu_info=$shagnhu_info;

            $a=$this->muban_b=M('muban_l')->select();

            $this->display();
        }

		//生成小程序编码、绑定商户的申请=====================
public function tired_muban(){
			
			//商户申请表里添加备注和绑定小程序编码，带小程序编码的小程序模板表绑定商户id
			//模板表绑定商户id，基本信息
			
			//生成小程序绑定的必须内容   		会员默认等级、会员默认分组、优惠券使用
	//  0922...10.26  取消使用 muban 表========================
	/*		$a["program_id"]=$_POST["program_id"];
			$b=M("muban")->where($a)->find();

	if(empty($b)){*/
			
		//小程序模板管理表添加模板信息    
		$_POST["time_set"]=time();
		if(M('muban')->add($_POST)) {
				
		//商城基本信息表添加小程序id
		$store["program_id"]=$_POST["program_id"];
		$store["program_title"]=$_POST["muban_name"];
		
		M("store")->add($store);
			
			//商户申请表写入绑定小程序模板状态
		$is_tired["is_tired"]="2";
		$is_tired["program_id"]=$_POST["program_id"];
		M("qianyue")->where("id='".$_GET["id"]."'")->save($is_tired);

	
		
		//商户表写入小程序id state
		$shanghu_p["program_id"]=$_POST["program_id"];
		
		$shanghu_id=M("qianyue")->where("id='".$_GET["id"]."'")->find();
		
		$shanghu_p["appid"]=$shanghu_id["appid"];
		$shanghu_p["shanghu_num"]=$shanghu_id["shanghu_num"];
		$shanghu_p["pay_key"]=$shanghu_id["pay_key"];
		
		M("user_info")->where("id='".$_POST["shanghu_id"]."'")->save($shanghu_p);
		
		//添加了小程序id之后-添加分销商 默认等级   
		$fx_lever["program_id"]=$_POST["program_id"];
		$fx_lever["title"]="默认等级";
		$fx_lever["cannot_d"]="1";//1：不能删、2：可以删
		$fx_lever["bl_lever_1"]="10";
		$fx_lever["bl_lever_2"]="5";
		$fx_lever["bl_lever_3"]="0";
		
		M("fx_lever")->add($fx_lever);

		//会员默认等级  member_level_name
		$lever["program_id"]=$_POST["program_id"];
		$lever["member_level_name"]="默认等级";
		$lever["cannot_d"]="1";//1：不能删、2：可以删
		
		M("member_level")->add($lever);
		
		//会员默认分组  member_group_name
		$group["program_id"]=$_POST["program_id"];
		$group["member_group_name"]="默认分组";
		$group["member_level"]="--";
		$group["cannot_d"]="1";//1：不能删、2：可以删
		M("member_group")->add($group);
		
                $this->success('添加成功',U('index'));
            } else {
                $this->error('添加失败');
            }
            
//0922...10.29   去掉muban            
		/*}else{
			$this->error('请勿重复提交');
		}*/
		
		}

        //根据模板类型 ajax得到模板版本号选择
    public function ajax_muban(){

        $where["name"]=$_POST["name"];
        $area=M("muban_l")->where($where)->find();

        $where_road["lid"]=$area["id"];
        $a=M("muban_b")->where($where_road)->select();

        for($i=0;$i<count($a);$i++){
            $arr_road[$i]=$a[$i]["name"];

        }
        $this->ajaxReturn($arr_road);
     }

	//小程序模板添加
	 public function add() {
	 	$aa=$this->muban_num="JT".date("YmdHis",time()).rand(1111,9999);
	
	 	$this->muban_b=M('muban_l')->select();
        $this->display();
    }

    public function runAdd() {
    	
    //	dump($_GET);dump($_POST);DIE;
        if(empty($_GET['id'])) {
        	//$_POST["time_set"]=time();
            if(M('qianyue')->add($_POST)) {
                $this->success('添加成功',U('index'));
            } else {
                $this->error('添加失败');
            }
        }
        else {
            M('qianyue')->where(array('id'=>$_GET['id']))->save($_POST);

			$this->success('修改成功',U('index'));
        }
    }


    public function edit() {	
    //小程序基本信息修改  FormworkController.class.php
	
	$field='qianyue.id,
	qianyue.appmcheng,qianyue.start_id,qianyue.appid,qianyue.appsecret,qianyue.program_id,qianyue.shanghu_num,
	qianyue.pay_key,qianyue.muban_type,qianyue.muban_b,qianyue.muban_tese,qianyue.moban_fengge,qianyue.muban_price,qianyue.user_id,
	qianyue.add_time,qianyue.muban_price,qianyue.moban_fengge,
	
	
	muban_l.name as moban_l_name,
	
	user_info.name as user_name,user_info.realname,
	
	muban_f.name as muban_f_name
	';

	$info=M("qianyue")
	->field($field)
	->join('join muban_l ON muban_l.id=qianyue.muban_type')
	->join('join user_info ON user_info.id=qianyue.user_id')
	->join('join muban_f ON muban_f.id=qianyue.moban_fengge')
	->where("qianyue.id='".$_GET["id"]."'")
	->find();


			$where["id"]=$info["muban_type"];
			$a=M("muban_l")->where($where)->find();
			$info["muban_type_name"]=$a["name"];//模板类型
			
			//模板特色
			if($info["muban_type"]==1){
				//1 是商城版
                $arr=$this->chaifen($info["muban_tese"]);
                $muban_t=M("muban_t")->where("lid=1")->order("id")->select();
                if($arr[1]==1){
                    $info["tese01"]=$muban_t[1]["name"];
                }
                if($arr[2]==1){
                    $info["tese02"]=$muban_t[2]["name"];
                }
                if($arr[3]==1){
                    $info["tese03"]=$muban_t[3]["name"];
                }else{
                	$info["muban_tese"]="基础版";
                }
	   }else{
	   	 	$info["muban_tese"]="基础版";
	   }
 
	     /*  else if($info["muban_type"]==2){
	       	//2 是单页版
	       	$info["muban_tese"]="基础版";
	       }else if($info["muban_type"]==5){
	       	//5 是资讯版
	       		$info["muban_tese"]="基础版";
	       }*/
		
	$this->info=$info;
	$this->is_edit="1";//确定页面是修改编辑页面
    $this->display('add');
    }

    public function delete() {
        $user_id = $_GET['id'];
        if(M('qianyue')->delete($user_id)) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }
	/*锁定*/
		public function lock(){
			 $admin_id = array(
			'id'=> $_GET['id'],
			'state'=> "3"
			 );
		
	        if(M('qianyue')->save($admin_id)) {
	            $this->success('禁用成功');
	        } else {
	            $this->error('禁用失败');
	        }
			
		}
		/*解锁*/
		public function lockout(){
			 $admin_id = array(
			'id'=> $_GET['id'],
			'state'=> "1"
			 );
			 
	        if(M('muban')->save($admin_id)) {
	            $this->success('启用成功');
	        } else {
	            $this->error('启用失败');
	        }
			
		}
	
	
	//模板类型管理
	function leixing(){
		$user_info=M('muban_l')->select();
        for($i=0;$i<count($user_info);$i++){
        $where["lid"]=$user_info[$i]["id"];
            $a=M("muban_b")->where($where)->count();
            $user_info[$i]["bb_num"]=$a;
            
            $b=M("muban_t")->where($where)->count();
            $user_info[$i]["ts_num"]=$b;
        }
		$this->user_info=$user_info;
		 $this->display();
	}
	
	
	public function add_leixing() {
	 	$this->muban_b=M('muban_l')->select();
        $this->is_add="1";
        $this->display();
    }

    public function runAdd_leixing() {
        if(empty($_GET['id'])) {
        
            if(M('muban_l')->add($_POST)) {
                $this->success('添加成功',U('leixing'));
            } else {
                $this->error('添加失败');
            }
        }
        else {
            M('muban_l')->where(array('id'=>$_GET['id']))->save($_POST);

			$this->success('修改成功',U('leixing'));
        }
    }

    public function edit_leixing() {
		
       $this->info=M('muban_l')->where('id='.$_GET['id'])->find();

        $this->is_add="2";
       $this->display('add_leixing');
    }

    //删除类型
    public function delete_leixing() {
        $user_id = $_GET['id'];
        if(M('muban_l')->delete($user_id)) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }

	/**版本特色差异管理
    */
	public function d_fengge(){
		$this->user_info=M("muban_f_characteristics")->select();
		
		$this->display();
	}
public function add_d_fengge() {
	 	$this->muban_b=M('muban_f_characteristics')->select();
        $this->is_add="1";
        $this->display();
    }

    public function runAdd_d_fengge() {
        if(empty($_GET['id'])) {
        
            if(M('muban_f_characteristics')->add($_POST)) {
                $this->success('添加成功',U('d_fengge'));
            } else {
                $this->error('添加失败');
            }
        }
        else {
            M('muban_f_characteristics')->where(array('id'=>$_GET['id']))->save($_POST);

			$this->success('修改成功',U('d_fengge'));
        }
    }

    public function edit_d_fengge() {
		
       $this->info=M('muban_f_characteristics')->where('id='.$_GET['id'])->find();

        $this->is_add="2";
       $this->display('add_d_fengge');
    }

    //删除风格特色
    public function delete_d_fengge() {
        $user_id = $_GET['id'];
        if(M('muban_f_characteristics')->delete($user_id)) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }
    
    
    
    /**版本管理
    */
    public function banben(){
        $user_info=M('muban_b')->where("lid='".$_GET["id"]."'")->select();
        for($i=0;$i<count($user_info);$i++){
            $where["id"]=$user_info[$i]["lid"];
            $a=M("muban_l")->where($where)->find();
            $user_info[$i]["leixing_name"]=$a["name"];
            
             $b=M("muban_f")->where("bid='".$user_info[$i]["id"]."'")->count();
            $user_info[$i]["fg_num"]=$b;
        }
       // dump($user_info);
        $this->add_lid=$_GET["id"];
        $this->user_info=$user_info;
        $this->display('banben');
    }

    //添加版本
    public function add_banben(){
        $this->muban_b=M('muban_b')->select();

//版本名称继承
/*		$muban_l=M('muban_l')->where("id='".$_GET["lid"]."'")->select();
dump($muban_l);die;*/

		switch ($_GET["lid"]){
			case 1:
				$this->prefixes="A-";
				break;
			case 2:
				$this->prefixes="B-";
				break;  
			case 5:
				$this->prefixes="C-";
				break;    
		}
        $this->info2=$_GET["lid"];

        $this->is_add="1";
        $this->display();
    }

    //版本修改
    public function runAdd_banben() {
        if(empty($_GET['id'])) {

$date["name"]=$_POST["name"];
$date["lid"]=$_GET["lid"];

            if(M('muban_b')->add($date)) {
                $this->success('添加成功',U('banben',array('id'=>$_GET['lid'])));
            } else {
                $this->error('添加失败');
            }
        }
        else {
            M('muban_b')->where(array('id'=>$_GET['id']))->save($_POST);

            $this->success('修改成功',U('banben',array('id'=>$_GET['lid'])));
        }
    }
    //版本编辑
    public function edit_banben(){
        $a=$this->info=M('muban_b')->where('id='.$_GET['id'])->find();
        $this->is_add="2";

        $this->lid=$a["lid"];
        $this->display('add_banben');
    }
    //版本删除
    public function delete_banben(){
        $user_id = $_GET['id'];
        if(M('muban_b')->delete($user_id)) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }

    //版本特色管理、 商城类：基础版、多店铺版、分销版、DIY版本      单页类：基础版

    public function banben_ts(){
              $info=M('muban_t')->where('lid='.$_GET['id'])->select();
            for($i=0;$i<count($info);$i++){
            $where["id"]=$info[$i]["lid"];
            $a=M("muban_l")->where($where)->find();
            $info[$i]["leixing_name"]=$a["name"];
        }
        $this->lid=$_GET['id'];
        $this->info=$info;
        $this->display('banben_ts');
    }

 //添加版本特色
    public function add_banben_ts(){
        $this->muban_b=M('muban_t')->select();


        $this->info2=$_GET["lid"];

        $this->is_add="1";
        $this->display();
    }

    //版本特色修改
    public function runAdd_banben_ts() {
        if(empty($_GET['id'])) {

            $date["name"]=$_POST["name"];
            $date["price"]=$_POST["price"];
            $date["lid"]=$_GET["lid"];

            if(M('muban_t')->add($date)) {
                $this->success('添加成功',U('banben_ts',array('id'=>$_GET['lid'])));
            } else {
                $this->error('添加失败');
            }
        }
        else {
            M('muban_t')->where(array('id'=>$_GET['id']))->save($_POST);

            $this->success('修改成功',U('banben_ts',array('id'=>$_GET['lid'])));
        }
    }
    //版本特色编辑
    public function edit_banben_ts(){
        $a=$this->info=M('muban_t')->where('id='.$_GET['id'])->find();
        $this->is_add="2";

        $this->lid=$a["lid"];
        $this->display('add_banben_ts');
    }
    //版本特色删除
    public function delete_banben_ts(){
        $user_id = $_GET['id'];
        if(M('muban_t')->delete($user_id)) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }


    //版本风格管理

 public function banben_fg(){
        $info=M('muban_f')->where('bid='.$_GET['id'])->select();
            for($i=0;$i<count($info);$i++){
            $where["id"]=$info[$i]["bid"];
            $a=M("muban_b")->where($where)->find();
            $info[$i]["leixing_name"]=$a["name"];
        }
 //  $muban_l=   M("muban_l")->where("id='".$_GET['id']."'")->find();//根据版本号得到版本类型信息、返回用到
      //  $this->back_id=$muban_l['id'];//所属版本号 id
      
      $this->back_id=$_GET['id'];//所属版本号 id
         
        $this->info=$info;
        $this->display('banben_fg');
    }

 //添加版本风格================
    public function add_banben_fg(){
        $this->muban_b=M('muban_f')->select();

		//风格特点 多选框
		$this->fg_ts=M("muban_f_characteristics")->where("state=1")->select();
	
	//模板版本号名称继承
		$a=M("muban_b")->where("id='".$_GET["bid"]."'")->find();
		$this->up_name=$a["name"];
	
        $this->info2=$_GET["bid"];//用来返回上一页

        $this->is_add="1";
        $this->display();
    }

    //版本风格修改
    public function runAdd_banben_fg() {
 //   dump(implode(",",$_POST["Fruit"]));die;
 
 $_POST["characteristics"]=implode(",",$_POST["characteristics"]);

        if(empty($_GET['id'])) {

            $date["name"]=$_POST["name"];
            $date["price"]=$_POST["price"];
            $date["bid"]=$_GET["bid"];

            if(M('muban_f')->add($date)) {
                $this->success('添加成功',U('banben_fg',array('id'=>$_GET['bid'])));
            } else {
                $this->error('添加失败');
            }
        }
        else {
        		
            M('muban_f')->where(array('id'=>$_GET['id']))->save($_POST);

            $this->success('修改成功',U('banben_fg',array('id'=>$_GET['bid'])));
        }
    }
    //版本风格编辑
    public function edit_banben_fg(){
        $a=$this->info=M('muban_f')->where('id='.$_GET['id'])->find();
        $this->is_add="2";
         $this->bid=$a["bid"];
         //风格特点 多选框
$this->fg_ts=M("muban_f_characteristics")->where("state=1")->select();
         
       //$this->info2=$_GET["bid"];//用来返回上一页
       
        $this->display('add_banben_fg');
    }
    //版本风格删除
    public function delete_banben_fg(){
        $user_id = $_GET['id'];
        if(M('muban_f')->delete($user_id)) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }
}