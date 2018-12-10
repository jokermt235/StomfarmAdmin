<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;
use Cake\Event\Event;
/**
 * News Controller
 *
 *
 * @method \App\Model\Entity\News[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NewsController extends AppController
{
    
    public function beforeFilter(Event $event)
    {
        //$this->getEventManager()->off($this->Csrf);
        //$this->eventManager()->off($this->Csrf);
    }
    public $components = ['Image','Translit'];

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $news = $this->paginate($this->News);

        $this->set(compact('news'));
    }

    /**
     * View method
     *
     * @param string|null $id News id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($url = null)
    {
        $pattern = "/id-[0-9]+$/"; 
        preg_match($pattern,$url,$matches);
        if(!empty($matches)){
            $mat = explode("-",$matches[0]);
            $id = $mat[1];
        }  
        $news = $this->News->get($id, [
            'contain' => []
        ]);

        $this->set('news', $news);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $news = $this->News->newEntity();
        $token = md5(time());
        $this->set('token', $token);
        
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $news = $this->News->patchEntity($news, $data);
            $result = $this->News->save($news);
            if ($result) {
                $id = $result->id;
                $news->url = $this->Translit->translit($data['title']).'-id-'.$id;
                $this->News->save($news);
                $this->Flash->success(__('The news has been saved.'));
                //return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The news could not be saved. Please, try again.'));
        }
        
        $this->set('token', $token);
        $this->set(compact('news'));
    }

    /**
     * Edit method
     *
     * @param string|null $id News id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $news = $this->News->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $news = $this->News->patchEntity($news, $this->request->getData());
            if ($this->News->save($news)) {
                $this->Flash->success(__('The news has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The news could not be saved. Please, try again.'));
        }
        $this->set(compact('news'));
    }

    /**
     * Delete method
     *
     * @param string|null $id News id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $news = $this->News->get($id);
        if ($this->News->delete($news)) {
            $this->Flash->success(__('The news has been deleted.'));
        } else {
            $this->Flash->error(__('The news could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function upload()
    {
        $this->viewBuilder()->setLayout('ajax');
        $token = $this->request->header('Token');
        $files = $this->request->data['files'];
        $tmp_dir = "/var/www/html/falconB/webroot/img/news/img/";
        if(!empty($files)){
            $data = [];
            $data['upload_image'] = $files[0];
            $file_name = $this->Image->upload($data, $tmp_dir);
        }
        $this->set('file_name', $file_name);
    }

    public function remove($file_name)
    {
        $token = $this->request->header('Token');
        $tmp_file = "/var/www/html/falconB/webroot/img/news/img/$file_name";
        $tmp_file_small = "/var/www/html/falconB/webroot/img/news/img/small_$file_name";
        unlink($tmp_file_small);
        unlink($tmp_file);
    }
}
