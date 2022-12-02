<?php 
require_once("Models/TCategoria.php");
	class Home extends Controllers{
		use Tcategoria;
		public function __construct()
		{
			parent::__construct();
		}

		public function home()
		{
			// $data['page_id'] = 1;
			$data['page_tag'] = NOMBRE_EMPESA;
			$data['page_title'] = NOMBRE_EMPESA;
			$data['page_name'] = "Online Shop";
			$data['slider']=$this->getCategoriasT(CAT_SLIDER);
			$data['banner']=$this->getCategoriasT(CAT_BANNER);
			$this->views->getView($this,"home",$data);
		}

	}
 ?>