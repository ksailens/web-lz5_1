<?php

class Home extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->className = strtolower(__CLASS__) . '/';
    }

    public function index()
    {
        $this->view->generate($this->className . 'mainPage');
    }

    public function aboutMe()
    {
        $this->view->generate($this->className . 'aboutMe');
    }

    public function myInterests()
    {
        $this->view->generate($this->className . 'myInterests');
    }

    public function photoalbum()
    {
        $this->view->generate($this->className . 'photoalbum');
    }

    public function education()
    {
        $this->view->generate($this->className . 'education');
    }

    public function contacts()
    {
        $errors = [];
        if (!empty($_POST)) {
            $errors = Validation::run([
                'FIO' => 'required',
                'pol' => 'required',
                'dateOfBirth' => 'required',
                'email' => 'email',
                'tel' => 'tel'
            ]);
        }
        $this->view->generate($this->className . 'contacts', compact('errors'));
    }

    public function test()
    {
        $errors = [];
        $responses = [];
        if (!empty($_POST)) {
            $errors = TestValidation::run([
                'FIO' => 'required,fio',
                'groups' => 'required',
                'answer1' => 'required',
                'answer2' => 'required',
                'answer3' => 'required'
            ]);
            $responses = TestVerification::run([
                'answer1' => 'answer-one',
                'answer2' => 'answer-two',
                'answer3' => 'answer-three'
            ]);
        }
        $this->view->generate($this->className . 'test', compact('errors', 'responses'));
    }

    public function history()
    {
        $this->view->generate($this->className . 'history');
    }

    public static function showList($list, $type, $class, $ob) {
        if ($type == 0) {
            echo "<ul class = ". $class . " " ." type = ".$ob. ">";
        }
        else
            if ($type == 1) {
                echo "<ol class = ". $class . " " ."type = ".$ob. ">";
            }
        for ($i = 0; $i < count($list); $i++) {
            echo "<li>$list[$i]</li>";
        }
        if ($type == 0) {
            echo '</ol>';
        }  else {
            echo '</ul>';
        }
    }

    public static function photoGallery(){
        $hrefs = array("img/cirilla.jpg", "img/doctor_who.jpg", "img/dovakin.jpg", "img/geralt.jpg", "img/illidan.jpg",
            "img/jaina.jpeg", "img/Jean.jpeg", "img/konstantin.jpg", "img/legolas.jpg", "img/neo.jpg","img/ragnaros.jpg",
            "img/silvana.jpeg", "img/tauriel.jpg", "img/thrall.jpg", "img/tiranda.png");
        $srcs = array("img/cirilla-sm.jpg", "img/doctor_who-sm.jpg", "img/dovakin-sm.jpg", "img/geralt-sm.jpg", "img/illidan-sm.jpg",
            "img/jaina-sm.jpg", "img/Jean-sm.jpg", "img/konstantin-sm.jpg", "img/legolas-sm.jpg", "img/neo-sm.jpg","img/ragnaros-sm.jpg",
            "img/silvana-sm.jpg", "img/tauriel-sm.jpg", "img/thrall-sm.jpg", "img/tiranda-sm.png");
        $alts = array("Цирилла","Доктор Кто","Довакин","Геральт","Иллидан",
            "Джайна Праудмур","Джин Грей","Джон Константин","Леголас","Нео",
            "Рагнарос","Сильвана Ветрокрылая","Тауриэль","Тралл","Тиранда Шелест Ветра");
        for ($i = 0; $i < count($alts); $i++) {
            echo "<li><a href=$hrefs[$i]  title=$alts[$i]> <img src=$srcs[$i] alt=$alts[$i]>$alts[$i] </a></li>";
        }
    }

}