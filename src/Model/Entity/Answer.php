<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Answer Entity
 *
 * @property int $id
 * @property int $question_id
 * @property string $answer
 * @property string $user_id
 * @property \Cake\I18n\FrozenTime $created
 *
 * @property \CakeDC\Users\Model\Entity\User $user
 */
class Answer extends Entity
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
        'question_id' => true,
        'answer' => true,
        'user_id' => true,
        'created' => true,
        'user' => true
    ];
}
