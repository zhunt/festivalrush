<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Landings Controller
 *
 *
 * @method \App\Model\Entity\Landing[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LandingsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
       // $landings = $this->paginate($this->Landings);

        $this->set(compact('landings'));
    }

    /**
     * View method
     *
     * @param string|null $id Landing id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */

}
