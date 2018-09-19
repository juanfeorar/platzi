<?php

require 'app/models/Job.php';
require 'app/models/Projects.php';

class Jobs
{
    private $title;
    public $descriotion;
    public $visible;
    public $month;

    public function __construct($title, $descriotion) {
        $this->title = $title;
        $this->descriotion = $descriotion;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }
}

$job1 = new Jobs('PHP Developer', 'Thisis an awesome job!!!');
$job1->setTitle("PHP Developer");
$job1->descriotion = 'Thisis an awesome job!!!';
$job1->visible = true;
$job1->month = 16;
echo $job1->getTitle();

//$project1 = new Project('Hola', 'Qe tal');

// $jobs = [
//     [
//         'title' => 'PHP Developeer',
//         'description' => 'Thisis an awesome job!!!',
//         'visible' => true,
//         'months' => 16,
//     ],
//     [
//         'title' => 'Python Dev',
//         'visible' => false,
//         'months' => 16,
//     ],
//     [
//         'title' => 'Devs',
//         'visible' => true,
//         'months' => 16,
//     ],
//     [
//         'title' => 'Node Developeer',
//         'visible' => true,
//         'months' => 16,
//     ],

// ];
