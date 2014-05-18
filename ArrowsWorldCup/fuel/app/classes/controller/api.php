<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of api
 *
 * @author stsuru
 */
class Controller_Api extends \Fuel\Core\Controller_Rest{
	
	public function get_list(){
        return $this->response(array(
            'foo' => Input::get('foo'),
            'baz' => array(
                1, 50, 219
            ),
            'empty' => null
        ));
    }
	
	public function get_companies(){
		$response = new Response();
		$response->set_header('Content-Type', '	application/json');
		$path = DOCROOT."json_model/companies.json";
		$file_content = File::read($path);
		$file_content = $response->body();
		return $response;
	}
	
	public function get_complimentary(){
		$response = new Response();
		$response->set_header('Content-Type', '	application/json');
		$path = DOCROOT."json_model/complimentary.json";
		$file_content = File::read($path);
		$file_content = $response->body();
		return $response;
	}
	
	public function get_complimentary_example(){
		$response = new Response();
		$response->set_header('Content-Type', '	application/json');
		$path = DOCROOT."json_model/complimentary_example.json";
		$file_content = File::read($path);
		$file_content = $response->body();
		return $response;
	}
	
	public function get_question(){
		$response = new Response();
		$response->set_header('Content-Type', '	application/json');
		$path = DOCROOT."json_model/question.json";
		$file_content = File::read($path);
		$file_content = $response->body();
		return $response;
	}
	
	public function get_stock_value(){
		$response = new Response();
		$response->set_header('Content-Type', '	application/json');
		$path = DOCROOT."json_model/stock_value.json";
		$file_content = File::read($path);
		$file_content = $response->body();
		return $response;
	}
}
