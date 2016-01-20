<!DOCTYPE html>
<html>
    <head>
        <title>Formulário Dinâmico</title>
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    </head>
    <body>
    <div class="container">
    <h1>Formulário Dinâmico</h1>
    <?php
    require_once "../autoload.php";

    use SON\Form\Form,
        SON\Form\Validators\Validator,
        SON\Form\Requests\Request;

    use SON\Form\Elements\Input,
        SON\Form\Elements\Label,
        SON\Form\Elements\Textarea;

    $request = new Request();
    $validator = new Validator($request);
    $form = new Form($validator);

    $labelName = new Label(['for'=>'name']);
    $labelName->setText('Nome completo:');

    $inputName = new Input(['type'=>'text', 'id'=>'name', 'name'=>'name']);

    $labelEmail = $form->createField('label', ['for'=>'email']);
    $labelEmail->setText("Email:");

    $inputEmail = $form->createField('input', ['type'=>'email', 'class'=>'form-control']);

    $labelMensagem = new Label();
    $labelMensagem->setText("Insira a sua mensagem:")->setAttribute('for', 'mensagem');
    $inputMensagem = new Textarea(['rows'=>'10', 'name'=>'mensagem', 'class'=>'form-control', 'placeholder'=>'Insira a sua mensagem']);

    $inputSubmit = new Input(['type'=>'submit', 'value'=>'Enviar', 'class'=>'btn btn-primary']);
    $inputReset = $form->createField('input', ['type'=>'reset', 'class'=>'btn btn-default', 'value'=>'Limpar']);

    $inputName->setAttribute('placeholder', 'Insira o seu nome')->setAttribute('class', 'form-control');

    $form->addField($labelName);
    $form->addField($inputName);
    $form->addField($labelEmail);
    $form->addField($inputEmail);
    $form->addField($labelMensagem);
    $form->addField($inputMensagem);
    $form->addField($inputSubmit)->addField($inputReset);
    $form->render();
?>
        </div>
        </body>
</html>
