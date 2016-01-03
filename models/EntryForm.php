<?php
/**
 * Created by PhpStorm.
 * User: yunlong
 * Date: 16/1/3
 * Time: 下午11:54
 */

namespace app\models;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }

}