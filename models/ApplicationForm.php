<?php

namespace app\models;

use yii\base\Model;

class ApplicationForm extends Model
{
    public $first_name;
    public $last_name;
    public $date_of_birth;
    public $description;
    public $income;
    public $number_of_dependents;

    public function rules()
    {
        return [
            // the first_name, last_name, date_of_birth attributes are required
            [['first_name', 'last_name', 'date_of_birth'], 'required'],

            // the first_name, last_name, date_of_birth and description attributes are strings
            [['first_name', 'last_name', 'date_of_birth', 'description'], 'string'],

            // the income attribute is a double
            [['income' ], 'double'],

            // the income attribute is an integer
            [['number_of_dependents' ], 'integer'],
        ];
    }

    public function create()
    {
        if ($this->validate()) {
            $application = new Application();
            $application->first_name = $this->first_name;
            $application->last_name = $this->last_name;
            $application->date_of_birth = $this->date_of_birth;
            $application->description = $this->description;
            $application->income = $this->income;
            $application->number_of_dependents = $this->number_of_dependents;

            $application->save();

            return $application;
        }

        return null;
    }
}