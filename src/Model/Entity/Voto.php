<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Voto Entity
 *
 * @property int $id
 * @property int $users_id
 * @property int $produtos_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Produto $produto
 */
class Voto extends Entity
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
        'users_id' => true,
        'produtos_id' => true,
        'user' => true,
        'produto' => true
    ];
}
