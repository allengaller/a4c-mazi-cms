<?php
App::uses('AppModel', 'Model');
/**
 * AccountsAdmin Model
 *
 * @property Group $Group
 */
class MaziUser extends AppModel {
    public $useTable = 'mazi_users';
    public $hasOne = 'mazi_users_details';

}
