<?php
class Router {
    static public function start(){
        // контроллер и действие по умолчанию
		$controller_name = 'news';
		$action_name = 'index';
		
		$routes = explode('/', $_SERVER['REQUEST_URI']);

		// получаем имя контроллера
		if ( !empty($routes[1]) )
		{	
			$controller_name = strtolower($routes[1]);
		}
		
		// получаем имя экшена
		if ( !empty($routes[2]) )
		{
			$action_name = strtolower($routes[2]);
		}

	// 	if ($_SERVER['REQUEST_METHOD'] === "POST"){
 //     $title = filter_input(INPUT_POST, 'title');
 //     $text = filter_input(INPUT_POST, 'text');
 //     $author = filter_input(INPUT_POST, 'author');
 //     $action_name = 'add';
 // }
		// добавляем префиксы
                $controller_name = ucfirst($controller_name);
		$model_class = 'Model'.$controller_name;
		$controller_class = 'Controller'.$controller_name;
		$action = 'action_'.$action_name;


		
		$model_path = "app/models/".$model_class.'.php';
		if(file_exists($model_path))
		{
			include $model_path;
		}

		$controller_path = "app/controllers/".$controller_class.'.php';
		if(file_exists($controller_path))
		{
			include $controller_path;
		}
		else
		{       
			self::ErrorPage404();
		}

		$controller = new $controller_class;
		
		if(method_exists($controller, $action))
		{
			$controller->$action();
		}
		else
		{
			self::ErrorPage404();
		}
    }
    static public function ErrorPage404(){
        header($_SERVER['SERVER_PROTOCOL']. ' 404 not found');
        exit();
    }
}
