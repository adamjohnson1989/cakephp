<?php
/**
 * Created by PhpStorm.
 * User: Sonnv
 * Date: 12/27/13
 * Time: 2:37 PM
 */
class PostsController extends AppController
{
    public $helpers = array('Html','Form','Session');

    public function index()
    {
        $this->set('posts',$this->Post->find('all'));
    }

    public function view($id = "")
    {
        if(!$id){
            throw new NotFoundException(__('Invalid Post'));
        }
        $post = $this->Post->findById($id);
        if(!$post){
            throw new NotFoundException(__('Invalid Post'));
        }
        $this->set('post', $post);

    }

    public function createPost(){
        if($this->request->is('post')){
            $this->Post->create();
            if($this->Post->save($this->request->data)){
                $this->Session->setFlash(__('Your Post is saved!'));
                $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__("Your Post isn't saved!"));
        }
    }
}