<?php

namespace app\models;

use yii\base\Model;

class MyForm extends Model
{
	public $name;
	public $email;
	public $file;
	
	public function rules()
	{
		return [
			[['name', 'email'], 'required', 'message' => 'Не заполнено поле'],
			['email', 'email', 'message' => 'Некорректный e-mail адрес'],
			[['file'], 'file', 'extension' => 'jpg, png']
		];

	}
}


?>