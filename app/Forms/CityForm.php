<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class CityForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('description', 'text');
    }
}
