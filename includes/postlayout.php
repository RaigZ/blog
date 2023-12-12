<?php
    /**
     * Layout format for posts
     */
    class Post {
        public $username = "";
        public $title = "";
        public $content = "";
        public $idpost = "";
        public $linked = false; 
        public $delete = false;

        function __construct($username, $title, $content, $id, $linked, $delete){
            $this->username = $username;
            $this->title = $title;
            $this->content = $content;
            $this->idpost = $id;
            $this->linked = $linked;
            $this->delete = $delete;
        }

        function set_username($username){
            $this->username = $username;
        }

        function set_title($title){ 
            $this->title = $title;
        }
        
        function set_content($content){
            $this->content = $content; //onclick=\"window.location.href=\'post.php?idpost=' . $this->idpost . '\';\"
        }

        function set_idpost($id){
            $this->idpost = $id;
        }

        function set_linked($linked){
            $this->linked = $linked;
        }

        function print() { 
            echo 
            '<div class="card" id="post-card" style="width: 35rem;" ' . (!$this->linked ? 'onclick="window.location.href=\'post.php?idpost=' . $this->idpost . '\';"' : "") . '>
                <div class="card-body">
                    <h5 class="card-title">' . $this->title . ' </h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">By: ' . $this->username . '</h6>
                    <p class="card-text">' . $this->content . '</p> 
                    '. ($this->delete ? '<form action="deletepost.php" method="POST"><button class="btn btn-outline-secondary" name="id" value="'. $this->idpost .'" type="submit" id="button-addon2">Delete</button></form>' : "" ) . '
                </div>
            </div>';
        } 
    }
?>