<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Entity\User;
use App\Model\Entity\UsersProduto;
use App\Model\Table\UsersProdutosTable;
use Cake\Event\Event;
use Cake\Datasource\ConnectionManager;
/**
 * Produtos Controller
 *
 * @property \App\Model\Table\ProdutosTable $Produtos
 * @property \App\Model\Table\UsersTable $Users
 * @property \App\Model\Table\UsersProdutosTable $UsersProdutos
 *
 * @method \App\Model\Entity\Produto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProdutosController extends AppController
{

    public function beforeFilter(\Cake\Event\Event $event)
    {

        // métodos permitidos
        $this->Auth->allow(['telaInicial']);

    }

    public function isAuthorized($user)
    {
        $action = $this->request->params['action'];

        // As ações que não são permitidas sempre.
        if (in_array($action, ['delete','edit'])) {
            return false;
        }

        // Ações permitidas somente se estiver logado.
        if (in_array($action, ['index','votar','confirmarVoto'])) {
            return true;
        }

        return parent::isAuthorized($user);
    }

    public function votar($id = null)
    {
        $produto = $this->Produtos->get($id, [
            'contain' => []
        ]);

        $this->set('usuario',$this->Auth->user());
        $this->set('produto', $produto);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $produtos = $this->paginate($this->Produtos);

        $this->set(compact('produtos'));
    }

    /**
     * TelaInicial method
     *
     * @return \Cake\Http\Response|void
     */
    public function telaInicial()
    {
        $connection = ConnectionManager::get('default');
        $sql = "SELECT count(votos.produtos_id) as qtdVotos,produtos.name,produtos.id FROM votos inner join produtos on produtos.id=votos.produtos_id group by votos.produtos_id order by qtdVotos desc limit 1";
        $results = $connection->execute($sql)->fetchAll('assoc');

        $this->set('qtdVotos', $results[0]['qtdVotos']);
        $this->set('nome_rei', $results[0]['name']);

        $sql = "SELECT count(votos.produtos_id) as qtdVotos,produtos.name,produtos.id FROM votos inner join produtos on produtos.id=votos.produtos_id 
where produtos.id not in (".$results[0]['id'].")
group by votos.produtos_id order by qtdVotos asc";

        $results_menos_votados = $connection->execute($sql)->fetchAll('assoc');
        $this->set('menos_votados', $results_menos_votados);

    }
}
