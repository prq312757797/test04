<?php
namespace Admin\Controller;
use Think\Controller;
class AuditController extends CommonController {
    public function index(){
        $field='
        qianyue.id as qianyue_id,qianyue.appmcheng,qianyue.agency_id,qianyue.user_id,qianyue.muban_type,qianyue.muban_b,qianyue.moban_fengge,qianyue.muban_tese,
         qianyue.muban_price,qianyue.state as qianyue_state,qianyue.is_tired,qianyue.add_time as qianyue_add_time,
        
         jt_user_info.user_id as jt_user_info_user_id,jt_user_info.user_company,
         user_info.id as user_info_id,user_info.name as user_info_name,
         muban_l.id as muban_l_id,muban_l.name as muban_l_name,
         muban_b.id as muban_b_id,muban_b.name as muban_b_name,
         muban_f.id as muban_f_id,muban_f.name as muban_f_name
        ';
        $user_info=M('qianyue')
            ->field($field)
            ->join('jt_user_info ON jt_user_info.user_id=qianyue.agency_id')
            ->join('join muban_l ON muban_l.id=qianyue.muban_type')
            ->join('join muban_b ON muban_b.name=qianyue.muban_b')
            ->join('join user_info ON user_info.id=qianyue.user_id')
            ->join('left join muban_f ON muban_f.id=qianyue.moban_fengge')
            ->order("qianyue.add_time desc")
            ->select();

        for($i=0;$i<count($user_info);$i++){
            if($user_info[$i]["muban_type"]==1){
                $arr=$this->chaifen($user_info[$i]["muban_tese"]);
                $muban_t=M("muban_t")->where("lid=1")->order("id")->select();
                if($arr[1]==1){
                    $user_info[$i]["tese01"]=$muban_t[1]["name"];
                }
                if($arr[2]==1){
                    $user_info[$i]["tese02"]=$muban_t[2]["name"];
                }
                if($arr[3]==1){
                    $user_info[$i]["tese03"]=$muban_t[3]["name"];
                }
            }

        }


	/*	$user_info=M('qianyue')->order("add_time desc")->select();
		
		for($i=0;$i<count($user_info);$i++){
			$a["user_id"]=$user_info[$i]["agency_id"];
			$b=M("jt_user_info")->where($a)->find();
			$user_info[$i]["agency_name"]=$b["user_company"];//服务商公司
			
			$a2["id"]=$user_info[$i]["user_id"];
			$b=M("user_info")->where($a2)->find();
			$user_info[$i]["shagnhu_name"]=$b["name"];//商户账号
			
			$c["id"]=$user_info[$i]["muban_type"];
			$d=M("muban_l")->where($c)->find();
			$user_info[$i]["muban_name"]=$d["name"];//模板类型名称
			
			$c2["id"]=$user_info[$i]["muban_b"];
			$d=M("muban_b")->where($c2)->find();
			$user_info[$i]["muban_bb_name"]=$d["name"];//模板版本名称

            $c3["id"]=$user_info[$i]["moban_fengge"];
            $d3=M("muban_f")->where($c3)->find();
            $user_info[$i]["muban_fg_name"]=$d3["name"];//模板版本风格
		}*/

		$this->user_info=$user_info;
		$this->lever=$_COOKIE["lever"];//判断登录人层级身份
		
		$this->display();
	}
	 public function add() {
        $this->display();
    }
	
    public function runAdd() {
        if(empty($_GET['admin_id'])) {
			$a=array(
			'admin_name'=>$_POST["admin_name"],
			'admin_psw'=>md5($_POST["admin_psw"])
			);
            if(M('qianyue')->add($a)) {
                $this->success('添加成功',U('index'));
            } else {
                $this->error('添加失败');
            }
        }
        else {
			$a=array(
			'admin_name'=>$_POST["admin_name"],
			'admin_psw'=>md5($_POST["admin_psw"])
			);
            M('qianyue')->where(array('id'=>$_GET['id']))->save($a);
            
			$this->success('修改成功',U('index'));
        }
    }

    public function edit() {
        $field='
        qianyue.id as qianyue_id,qianyue.appmcheng as qianyue_appmcheng,qianyue.start_id as qianyue_start_id,qianyue.appid as qianyue_appid,
        qianyue.appsecret as qianyue_appsecret,qianyue.payment as qianyue_payment,qianyue.shanghu_num as qianyue_shanghu_num,qianyue.paykey as qianyue_paykey,
        qianyue.user_id as qianyue_user_id,qianyue.agency_id as qianyue_agency_id,qianyue.beian_time as qianyue_beian_time,qianyue.add_time as qianyue_add_time,
        qianyue.upd_time as qianyue_upd_time,qianyue.state as qianyue_state,qianyue.contract_id as qianyue_contract_id,qianyue.contract_img as qianyue_contract_img,
        qianyue.remark as qianyue_remark,qianyue.program_id as qianyue_program_id,qianyue.muban_tese as qianyue_muban_tese,qianyue.muban_b as qianyue_muban_b,
      qianyue.muban_price as qianyue_muban_price, 
      jt_user_info.user_id as jt_user_info_user_id,jt_user_info.user_company as jt_user_info_user_company,
       
       muban_l.id as muban_l_id,muban_l.name as muban_l_name,
       
       muban_f.id as muban_f_id,muban_f.name as muban_f_name
        ';
        $user_info=M("qianyue")
            ->field($field)
             ->join('jt_user_info ON jt_user_info.user_id=qianyue.agency_id')
            ->join('join muban_l ON muban_l.id=qianyue.muban_type')
            ->join('left join muban_f ON muban_f.id=qianyue.moban_fengge')
            ->where("qianyue.id='".$_GET['id']."'")
            ->find();

        $chaifen=$this->chaifen($user_info["qianyue_muban_tese"]);
        for($p=0;$p<count($chaifen);$p++){
            $order[$p]=M("muban_t")
                ->where("muban_t.id='".$chaifen[$p]."'")
                ->find();
        }
        $user_info["id_arr"]=$order;


		$this->info=$user_info;

       $this->display('add');
    }
    //分割函数
    function chaifen($source){
        return explode(',',$source);
    }
	/*禁用*/
		public function lock(){
			 $admin_id = array(
			'id'=> $_GET['id'],
			'state'=> "3"
			 );
		
        if(M('qianyue')->save($admin_id)) {
            $this->success('锁定成功');
        } else {
            $this->error('锁定失败');
        }
			
		}
		/*通过审核*/
		public function lockout(){
			 $admin_id = array(
			'id'=> $_GET['id'],
			'state'=> "1"
			 );
			 
        if(M('qianyue')->save($admin_id)) {
            $this->success('通过审核');
        } else {
            $this->error('审核失败');
        }
			
		}
		/*通过审核*/
		public function lockout_j(){
			 $admin_id = array(
			'id'=> $_GET['id'],
			'state'=> "4"
			 );
			 
	        if(M('qianyue')->save($admin_id)) {
	            $this->success('拒绝审核');
	        } else {
	            $this->error('审核失败');
	        }	
		}
		
		/**恢复*/
		public function lock_on_1(){
			 $admin_id = array(
			'id'=> $_GET['id'],
			'state'=> "1"
			 );
			 
        if(M('qianyue')->save($admin_id)) {
            $this->success('恢复成功');
        } else {
            $this->error('恢复失败');
        }
		}
	/**删除服务商*/
    public function delete() {
        $user_id = $_GET['id'];
        if(M('qianyue')->delete($user_id)) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }

}