<?php

namespace app\core\form;

require_once __DIR__ . '/BaseField.php';
include_once __DIR__ . '/../Model.php';
use app\core\Model;

abstract class BaseField
{

    public Model $model;
    public string $attribute;
    public string $type;

    public function __construct(Model $model, string $attribute)
    {
        $this->model = $model;
        $this->attribute = $attribute;
    }

    public function __toString()
    {
        return sprintf('<div class="form-control">
                <label class="label">
                <p class="uppercase text-sm font-medium   ">%s</p>
                </label>
                %s
                </div>
                <div class="errors">
                <p class="text-sm text-red-600" style="color:red">%s</p>
            </div>',
            $this->model->getLabel($this->attribute),
            $this->renderInput(),
            $this->model->getFirstError($this->attribute)
        );
    }

    abstract public function renderInput();
}