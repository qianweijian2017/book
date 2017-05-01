<?php
namespace Admin\Model;
use Think\Model;
class BookModel extends Model{
	protected $_auto=array(
			array(
				"book_up_time",'time',1,'function'
			) 
		);  
	//文件上传
	public function saveData($post,$file)
	{ 
		if(!$file['error']){
			$cfg=array(
					"rootPath" => WORKING_PATH . UPLOAD_PATH,  
				);
			$upload=new \Think\Upload($cfg);
			$info = $upload -> uploadOne($file);
			
			//判断是否上传成功
			if($info){
				//补全字段 
				$post['img_path'] = UPLOAD_PATH . $info['savepath'] . $info['savename'];
				$post['book_publish_time'] = strtotime($post['book_publish_time']);
				$post['book_up_time'] =time();
			 	$result=$this->add($post);   
			} 
		}
		return $result;
 		
	}
}