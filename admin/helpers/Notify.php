<?php

trait Notify
{
    public function notifySuccess($string){
        return '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success! </strong> '.$string.'.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
    }
     public function notifyError($string){
        return '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Error! </strong> '.$string.'.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
    }
}