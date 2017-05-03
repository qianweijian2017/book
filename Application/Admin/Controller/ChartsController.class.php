<?php 
namespace Admin\Controller;
use Admin\Common\Controller\AuthController;
use Org\Util\page;
class ChartsController extends AuthController { 
	/**
	 * 显示默认统计
	 * @return [type] [description]
	 */
	public function echart()
	{
		$this->display();
	}
	/**
	 * 获取购买书籍类型统计
	 * @return [type] [description]
	 */
	public function getbuyed()
	{
		if(IS_POST){
			//获取书的类型,通过书的类型计算书的购物量
			//联合表 menu book
			$book = M('book');  
			$menu = M('menu');
			$menu_count=$menu->count(); 
			for($i = 1 ;$i <= $menu_count ; $i ++ ){

				$sale = $book -> alias("b")
							  -> join("__MENU__ m on m.id = b.id")
							  -> field("m.*,b.*,m.id as menu_id,b.id as book_id,type_name")
							  -> where("m.id = '$i'")
							  -> sum("b.book_sale");
 
				$book_type=$menu->find($i);
				$data[$i]['sale'] = $sale;
				$data[$i]['book_type'] = $book_type['type_name'];

			} 
			
			$this->ajaxReturn(
				array(
					"data" => $data
				)
			);
		}
		
	}
	/**
	 * 浏览量
	 * @return [type] [description]
	 */
	public function browse()
	{
		 if(IS_POST){
		 	//获取书的类型,通过书的类型计算书的购物量
			//联合表 menu book
			$book = M('book');  
			$menu = M('menu');
			$menu_count=$menu->count(); 
			for($i = 1 ;$i <= $menu_count ; $i ++ ){

				$browse = $book -> alias("b")
							  -> join("__MENU__ m on m.id = b.id")
							  -> field("m.*,b.*,m.id as menu_id,b.id as book_id,type_name")
							  -> where("m.id = '$i'")
							  -> sum("b.browse");
 
				$book_type=$menu->find($i);
				$data[$i]['browse'] = $browse;
				$data[$i]['book_type'] = $book_type['type_name'];

			} 
			
			$this->ajaxReturn(
				array(
					"data" => $data
				)
			);
		 }
	}


}