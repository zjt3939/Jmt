<?php
namespace Content\Controller;
use Common\Controller\HomeBaseController;
class ImageController extends HomeBaseController{
	protected $posts_model;
	protected $term_relationships_model;
	protected $terms_model;
	
	function _initialize(){
		parent::_initialize();
		$this->posts_model = D("Common/Posts");
		$this->terms_model = D("Common/Terms");
		$this->term_relationships_model = D("Common/TermRelationships");
	}

	public function index(){
		//获取乡村美图(10)
		$ImageData = $this->posts_model->where(['content_type'=>'7','post_status'=>1])->order("post_date desc")->select();
		foreach($ImageData as &$val){
			$val['smeta']= json_decode($val['smeta'],true);
			// var_dump($val['smeta']['thumb
			$val['smeta'] = sp_get_asset_upload_path($val['smeta']['thumb']);
			// var_dump($val['smeta']);

		}

		$this->assign("ImageData",$ImageData);
		$this->display();
	}
}