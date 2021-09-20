<?php

namespace Anomaly\VideosModule\Http\Controller;

use Anomaly\Streams\Platform\Http\Controller\PublicController;

class VideosController extends PublicController
{
  public function index(){

      $this->breadcrumbs->add("Home","/");
      $this->breadcrumbs->add("Model","videos");
      $this->template->set("meta_title","Videos");
  return $this->view->make('anomaly.module.videos::videos\index');
  }
}
