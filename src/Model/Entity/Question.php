<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Question Entity
 *
 * @property int $id
 * @property string $question
 * @property string $question_details
 * @property string $user_id
 * @property \Cake\I18n\FrozenTime $created
 *
 * @property \CakeDC\Users\Model\Entity\User $user
 * @property \App\Model\Entity\Festival[] $festivals
 * @property \App\Model\Entity\Venue[] $venues
 */
class Question extends Entity
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
        'question' => true,
        'question_details' => true,
        'user_id' => true,
        'created' => true,
        'user' => true,
        'festivals' => true,
        'venues' => true
    ];
}
