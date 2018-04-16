<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * LatestQuestions cell
 */
class LatestQuestionsCell extends Cell
{

    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Default display method.
     *
     * @return void
     */
    public function display()
    {
        $this->loadModel('Questions');

        $questions = $this->Questions->find()->contain(['Venues', 'Festivals']);
        $this->set('questions', $questions->toArray() );
    }
}
