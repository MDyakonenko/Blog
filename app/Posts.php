<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Posts extends Model {

	

	public function getTeaser(){
		return mb_substr($this->body, 0, 100);
	}

}
