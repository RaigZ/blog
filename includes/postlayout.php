<?php
    class Post {
        //public $username = "";
        public $title = "";
        public $content = "";

        function set_username(){}

        function set_title($t){ 
            $this->title = $t;
        }
        
        function set_content($c){
            $this->content = $c;
        }

        function print() { 
            echo '<div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">' . $this->title . ' </h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">By: ...</h6>
              <p class="card-text">' . $this->content . '</p> 
            </div>
          </div>';
        }
    }
?>