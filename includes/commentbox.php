<?php
    echo 
    '<div class="card" id="post-card" style="width: 35rem;">
        <div class="card-body">
            <h5 class="card-title"></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary"></h6>
            <form class="input-group" action="postcomment.php" method="POST">
                <span class="input-group-text">' . $_SESSION['username'] . '</span>
                <textarea class="commentbox form-control" name="comment" aria-label="With textarea"></textarea> 
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Post</button> 
            </form>
        </div>
    </div>';
?>