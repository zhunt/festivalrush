<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Festival Entity
 *
 * @property int $id
 * @property string $name
 * @property string $festival_description
 * @property int $festival_start_date
 * @property int $festival_end_date
 * @property string $festival_month
 * @property string $festival_logo_image
 *
 * @property \App\Model\Entity\Question[] $questions
 */
class Festival extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'festival_description' => true,
        'festival_start_date' => true,
        'festival_end_date' => true,
        'festival_month' => true,
        'festival_logo_image' => true,
        'questions' => true
    ];
}
