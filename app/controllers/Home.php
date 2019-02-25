<?php

class Home extends Controller
{
    private static $photos;
    private static $alts;

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
                'tel' => 'required'
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
                'name' => 'required,fio',
                'group' => 'required',
                'answer1' => 'required',
                'answer2' => 'required,float',
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

//    public static function printPhotos()
//    {
//        self::$photos = [];
//        self::$alts = [];
//        for ($i = 0; $i < 15; $i++) {
//            self::$photos[$i] = "/img/gallery/" . ($i + 1) . ".jpg";
//            self::$alts[$i] = "Фотография " . ($i + 1);
//        }
//        for ($i = 0; $i < count(self::$photos); $i++) {
//            printf("<div class='item'>");
//            printf("<img class='photo' src='%s' title='%s' alt='%s'>", self::$photos[$i], self::$alts[$i], self::$alts[$i]);
//            printf("<span class='item_title'>%s</span>", self::$alts[$i]);
//            printf("</div>");
//        }
//    }
//
//    public static function printList($type)
//    {
//        $args = func_get_args();
//        echo "<" . $type . "l>";
//        for ($i = 1; $i < func_num_args(); $i++) {
//            echo "<li>" . $args[$i] . "</li>";
//        }
//        echo "</" . $type . "l>";
//    }
}