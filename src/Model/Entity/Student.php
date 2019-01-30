<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Student Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $email
 * @property string $photo
 * @property string $telephone
 * @property string $cpf
 * @property int $sex
 * @property \Cake\I18n\FrozenDate $birthdate
 * @property string $address
 * @property string $uf
 * @property string $city
 * @property string $neighborhood
 * @property string $cep
 * @property string $publicplace
 * @property string $number
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Student extends Entity
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
        'user_id' => true,
        'name' => true,
        'email' => true,
        'photo' => true,
        'telephone' => true,
        'cpf' => true,
        'sex' => true,
        'birthdate' => true,
        'address' => true,
        'uf' => true,
        'city' => true,
        'neighborhood' => true,
        'cep' => true,
        'publicplace' => true,
        'number' => true,
        'created' => true,
        'modified' => true
    ];
}
