<?php
include_once __DIR__.'/../../core/form/Form.php';
use app\core\form\Form;
$mode = new \app\core\Model;
$form = new Form();
?>


<?php $form = Form::begin('', 'post') ?>
<div class="grid grid-cols-2 gap-4">
    <div class="">
        <?php echo $form->field($model, 'firstname') ?>
    </div>
    <div class="">
        <?php echo $form->field($model, 'lastname') ?>
    </div>
</div>
<?php echo $form->field($model, 'email') ?>
<?php echo $form->field($model, 'password')->passwordField() ?>
<?php echo $form->field($model, 'passwordConfirm')->passwordField() ?>
<button class="btn bg-blue-600 text-white">Submit</button>
<?php Form::end() ?>

<script>
    var input = document.querySelectorAll('.input-error');
    var errors = document.querySelectorAll('.errors');

    function myFunction() {

    }

    input[0].addEventListener('focus',
        function () {
            for (i = 0; i < input.length; i++) {
                input[i].classList.remove('input-error');
            }
            for (i = 0; i < errors.length; i++) {
                errors[i].classList.add('hidden');
            }

        });
</script>ð