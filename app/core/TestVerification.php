<?php

class TestVerification extends TestValidation
{

    public function __construct(array $form, array $rules = [])
    {
        parent::__construct($form, $rules);
    }

    protected function validateRule($field, $rule)
    {
        $tmp = explode(':', $rule);
        $value = null;
        if (count($tmp) > 1) {
            $rule = $tmp[0];
        }
        switch ($rule) {
            case 'answer-one':
                return $this->isTrueAnswerOne($field);
            case 'answer-two':
                return $this->isTrueAnswerTwo($field);
            case 'answer-three':
                return $this->isTrueAnswerThree($field);
        }

        return true;
    }

    public static function showErrors($errors)
    {
        if (!empty($_POST)) {
            if (!empty($errors)) {
                foreach ($errors as $key => $value) {
                    echo '<p class="validate-message">';
                    echo self::describeField($key);
                    foreach ($value as $error) {
                        echo $error . ' ';
                    }
                    echo '<button type="button" class="close" aria-label="Close">' .
                        '<span aria-hidden="true">&times;</span></button></p>';
                }
            } else {
                echo '<p class="bg-success correct-responses">Вы ответили правильно на все впоросы' .
                    '<button type="button" class="close" aria-label="Close">'.
                    '<span aria-hidden="true">&times;</span></button></p>';
            }
        }
    }

    protected function isTrueAnswerOne($field)
    {
        $value = 0;
        if (!empty($this->_form[$field])) {
            $value = floatval($this->_form[$field]);
        }
        return $value == 36.6;
    }

    protected function isTrueAnswerTwo($field)
    {
        $value = 0;
        if (!empty($this->_form[$field])) {
            $value = floatval($this->_form[$field]);
        }
        return $value == 0.7;
    }

    protected function isTrueAnswerThree($field)
    {
        if (!empty($this->_form[$field])) {
            return $this->_form[$field] == 'true';
        }
        return false;
    }

    protected function describeError($error)
    {
        switch ($error) {
            case 'answer-one':
            case 'answer-two':
            case 'answer-three':
                return 'Неправильный ответ на вопрос. ';
            default:
                return '';
        }
    }
}