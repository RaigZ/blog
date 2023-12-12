<?php
    /**
     * Layout format for comments
     */
    class Comment {
        public $username = "";
        public $idcomment = "";
        public $content = "";
        public $delete = false;

        function __construct($username, $idcomment, $content, $delete){
            $this->username = $username;
            $this->idcomment = $idcomment;
            $this->content = $content;
            $this->delete = $delete;
        }

        function set_username($username){
            $this->username = $username;
        }

        function set_idcomment($idcomment){
            $this->idcomment = $idcomment;
        }

        function set_content($content){
            $this->content = $content; //<button class="btn btn-outline-secondary" type="submit" id="button-addon2">Delete</button>
        }

        function print(){
            echo '<div class="card mb-3" style="width: 35rem;">
                    <div class="card-body testing gap-2">
                        <h5 class="card-title">' . $this->username . ' </h5> 
                        <p class="card-text content">' . $this->content . '</p>  
                        '. ($this->delete ? '<form action="deletecomment.php" method="POST"><button class="btn btn-outline-secondary" name="id" value="'. $this->idcomment .'" type="submit" id="button-addon2">Delete</button></form>' : "" ) . ' 
                    </div>
                  </div>';
        }
    }
?>