<?php
namespace Home\Controller;
use Think\Controller;
use \Org\Util\page;
/**
* 书分类 
*/
class BookController extends Controller
{
	/**
	 * 书籍列表
	 * @return [type] [description]
	 */
	public function booklist(){

		 $book=M("book"); //创建书本对象
		 $menu=M("menu");//创建菜单对象
		 $menulist= $menu->select(); 
		 if(!I('get.bk_keyword',0)){ 
			 if(I('type')){
			 	 $where='book_type='.I('type');//是否有分类 
			 } 
			 $sort="book_publish_time desc";
			 if(I('sort')!="2"){
			 	$sort=self::getSort(I('sort'));
			 } 
	     	 $count=$book->alias("b")
						     	 ->join("__MENU__ c on b.book_type=c.id")
						     	 ->where($where)
						     	 ->count(); //where 为条件,可作分类分页  
	     	 $page=new Page($count,8);	//count总页数,limit是显示的行数   
	  	     $sPages=$page->show();  

			 $booklist=$book->alias("b")
						->field("book_name,type_name,book_author,book_detail,
								book_collect,book_prince,book_type,book_zk_prince,img_path,b.id")//查询所需要的字段
						->where($where)	 
						->join("__MENU__ c on b.book_type=c.id") 		//通过字段关联表
						->order($sort)
						->limit($page->firstRow.',8')
						->select(); 
		  }else{
		  	//搜索条件
		  	 $map['book_author|type_name|book_name'] =
		  	 			array('like',array('%'.I('get.bk_keyword').'%'),'OR');
		  	 $count   =   $book->where($map)
				  	 			 ->alias('b')
				  	 			 ->join('__MENU__ m on m.id=b.book_type ')
								 ->count(); //where 为条件,可作分类分页  
	     	 $page    = new Page($count,8);	//count总页数,limit是显示的行数   
	  	     $sPages  = $page->show();  
		  	 $booklist= $book->alias('b')
		  	 				->join('__MENU__ m on m.id=b.book_type')
		  	 				->where($map)
		  				    ->field("book_name,type_name,book_author,book_detail,
								book_collect,book_prince,book_type,book_zk_prince,img_path")
		  				    ->limit($page ->firstRow.',8')
						    ->select();  
		  }
		 
 		 $this->assign('sPages',$sPages);// 赋值分页
		 $this->assign('booklist',$booklist);
  		 $this->assign('menulist',$menulist);	 
		 $this->display();		//展示模板
	}
	/**
	 * 书本详情
	 * @return [] [description]
	 */
	public function bookdetail()
	{ 
		if(I('get.type')){
			$id=I('get.type');
			$model=M('book');
			$bookdetail=$model->find($id);  
			$model->where("id=$id")->setInc("browse",1);    //浏览量+1 
			$this->assign("bookdetail",$bookdetail); 
			$this->display();
		}
		 
	}
	public function delete()
	{
		if(IS_GET){
			$id=I('get.id');
			$buyed=M('buyed');
			if($buyed->where("book_id=$id")->delete()){
				$this->success("删除成功");
			}else{
				$this->error("删除失败");
			}
		}
	}
 	/**
 	 * 根据条件获取分类 
 	 * @param  [string] $iSort [条件]
 	 * @return [string]        [拼凑where条件]
 	 */
	 public function getSort($iSort){

	 	switch ($iSort) {
	 		case 'collect':
	 			$sort="book_collect desc";
	 			break; 
	 		case 'up_time':
	 		 	$sort="book_up_time desc";
	 			break;
	 	}
	 	return $sort;
	 	
	 } 
}