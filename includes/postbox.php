<?php
    echo 
    '<div class="card" id="post-card" style="width: 35rem;"> 
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Create Post
        </button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Create a post</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="createpost.php" method="post">
                        <div class="modal-body">  
                                <div class="row gap-2 justify-content-center">
                                    <div class="input-group">
                                        <div class="col-12">
                                            <input class="input-field form-control" type="text" name="title" placeholder="Title...">
                                        </div> 
                                    </div>
                                    <div class="input-group">
                                        <div class="col-12">
                                            <textarea class="postbox form-control" name="content" aria-label="With textarea" placeholder="Tell us what you really think..."></textarea> 
                                        </div> 
                                    </div>
                                </div> 
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>';
?> 