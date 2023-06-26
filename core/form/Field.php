<?php
namespace app\core\form;
include_once __DIR__.'/../Model.php';
include_once __DIR__.'/BaseField.php';
use app\core\Model;
use app\core\form\BaseField;


class Field extends BaseField
{
    const TYPE_TEXT = 'text';
    const TYPE_PASSWORD = 'password';
    const TYPE_FILE = 'file';

    public function __construct(Model $model, string $attribute)
    {
        $this->type = self::TYPE_TEXT;
        parent::__construct($model, $attribute);
    }

    public function renderInput()
    {
        return sprintf(
            '<input type="%s" class="input input-bordered w-full max-w-md  input-lg%s" name="%s" value="%s">',
            $this->type,
            $this->model->hasError($this->attribute) ? ' input-error' : '',
            $this->attribute,
            $this->model->{$this->attribute},
        );
    }

    public function passwordField()
    {
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }

    public function fileField()
    {
        $this->type = self::TYPE_FILE;
        return $this;
    }
}