<?php
/**
 * <form class="card-body col-gap-3" action="postcomment.php" method="POST">
        <h5 class="card-title"></h5>
        <h6 class="card-subtitle mb-2 text-body-secondary"></h6> 
        <input type="text" class="form-control" name="title" > 
        <textarea class="postbox form-control" name="comment" aria-label="With textarea"></textarea>  
        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Post</button> 
    </form> 
*/
    echo 
    '<div class="card" id="post-card" style="width: 35rem;"> 
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Create Post
        </button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body"> 
                    <form>
                        <div class="row gap-2 justify-content-center">
                            <div class="input-group">
                                <div class="col-12">
                                    <input class="input-field form-control" type="text" name="title" placeholder="Title...">
                                </div> 
                            </div>
                            <div class="input-group">
                                <div class="col-12">
                                    <textarea class="commentbox form-control" name="comment" aria-label="With textarea"></textarea> 
                                </div> 
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
        </div>
    </div>';
?> 