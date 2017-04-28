 <?php
namespace Home\Controller;
use Think\Controller; 
/**
* 书分类 
*/
class AjaxController extends Controller
{
	public function incart()
	{
		 if(IS_POST){
		 	$controller=I("post.controllerName");
		 	$id=I('post.id');
		 	$model=D($controller);
		 	$cart=D('cart');
		 	if($book=$model->find($id)){

		 	}

		 }
	}
}