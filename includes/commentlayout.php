<?php
    /**
     * Layout format for comments
     */
    class Comment {
        public $username = "";
        public $idcomment = "";
        public $content = "";

        function set_username($username){
            $this->username = $username;
        }

        function set_idcomment($idcomment){
            $this->idcomment = $idcomment;
        }

        function set_content($content){
            $this->content = $content;
        }

        function print(){
            echo '<div class="card text-center mb-3" style="width: 35rem;">
                    <div class="card-body">
                    <h5 class="card-title">' . $this->username . ' </h5>
                    <p class="card-text">' . $this->content . '</p> 
                    </div>
                  </div>';
        }
    }
?>