<?php
namespace App\Controller;

/**
 * Votos Controller
 *
 * @property \App\Model\Table\VotosTable $Votos
 *
 * @method \App\Model\Entity\Voto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VotosController extends AppController
{

    public function isAuthorized($user)
    {
        $action = $this->request->params['action'];

        // Ações permitidas somente se estiver logado.
        if (in_array($action, ['confirmarVoto'])) {
            return true;
        }

        return parent::isAuthorized($user);
    }
    public function confirmarVoto($users_id, $produtos_id)
    {
        try{
            $voto = $this->Votos->newEntity();

            $data = ['users_id'=>$users_id,'produtos_id'=>$produtos_id];
            $voto = $this->Votos->patchEntity($voto, $data);
            if ($this->Votos->save($voto)) {
                $this->Flash->success(__('Voto realizado com sucesso!'));

                return $this->redirect(['controller' => 'Produtos','action' => 'index']);
            }
            $this->Flash->error(__('Erro ao votar.'));
        }catch (\Exception $e){
            if($e->getCode()==23000){
                $this->Flash->error('É permitido somente um voto por usuário.');
                return $this->redirect(['controller' => 'Produtos','action' => 'index']);
            }
        }
    }
}
