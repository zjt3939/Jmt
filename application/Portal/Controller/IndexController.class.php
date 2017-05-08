<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2014 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: Dean <zxxjjforever@163.com>
// +----------------------------------------------------------------------
namespace Portal\Controller;
use Common\Controller\HomeBaseController; 
/**
 * 首页
 */
class IndexController extends HomeBaseController {
	
	protected $postsModel ;

	function _initialize(){
		parent::_initialize();
		
		$this->postsModel = D("Common/Posts");

	}
    //首页
	public function index() {
		//获取点击次数最多旅游游记数据（4）
		$travelNoteData = $this->postsModel->where(['content_type'=>'5'])->order("post_hits desc")->limit(0,4)->select();
		// var_dump($travelNoteData);

		//获取旅游游记最新的数据(3)
		$NewTravelNoteData =  $this->postsModel->where(['content_type'=>'5'])->order("post_modified desc")->limit(0,3)->select();
		// var_dump($NewTravelNoteData);

		//获取当地风景介绍()
		$viewIntroData = $this->postsModel->where(['content_type'=>'6'])->order("post_hits desc")->limit(0,8)->select();
		foreach($viewIntroData as &$val){
			$val['smeta']= json_decode($val['smeta'],true);
			// var_dump($val['smeta']['thumb
			$val['smeta'] = sp_get_asset_upload_path($val['smeta']['thumb']);
			// var_dump($val['smeta']);

		}
		// var_dump($viewIntroData);

		//获取当地美食(10)
		$foodData = $this->postsModel->where(['content_type'=>'8'])->order("post_hits desc")->limit(0,10)->select();
		// var_dump($viewIntroData);

		//获取乡村美图(10)
		$ImageData = $this->postsModel->where(['content_type'=>'7','post_status'=>1])->order("post_hits desc")->limit(0,10)->select();
		// var_dump($$ImageData);

		$this->assign("travelNoteData",$travelNoteData);
		$this->assign("NewTravelNoteData",$NewTravelNoteData);
		$this->assign("viewIntroData",$viewIntroData);
		$this->assign("foodData",$foodData);
		$this->assign("ImageData",$ImageData);
		$this->display(":index");

    }   

}


