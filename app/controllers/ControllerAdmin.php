<?php

class ControllerAdmin extends Controller {
    //------------------------------------------------
    public function action_index(){
        $this->view->page='page_admin_index_view';
        $this->model = new ModelAdmin();
        // $this->view->news = $this->model->getNews();
        $this->view->render();
    }

    public function action_add($title, $text, $author){
        $this->view->page='page_news_news_view';
        $this->model = new ModelAdmin();
        $this->view->news = $this->model->addNews($title, $text, $author);
        $this->view->render();
    }
}