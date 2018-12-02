<?php

class ControllerNews extends Controller {
    //------------------------------------------------
    public function action_index(){
        $this->view->page='page_news_news_view';
        $this->model = new ModelNews();
        $this->view->news = $this->model->getNews();
        $this->view->render();
    }
}
