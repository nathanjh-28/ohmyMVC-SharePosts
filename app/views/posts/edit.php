<?php require APPROOT . '/views/inc/header.php'; ?>
            
            <div class="card card-body bg-light mt-5">
            <h2>Edit Post</h2>
            <p>Update a post with this form</p>
            <form method="post" action="<?=URLROOT;?>/posts/edit/<?= $data['id'];?>">
            
            <!-- Title -->
                <div class="form-group form-group-post">
                <label for="title">Title: <sup>*</sup></label>
                <input type="text" name="title" id="" class="form-control form-control-lg 
                <?php echo (!empty($data['title_err']))? 'is-invalid' : '' ;?>" value="<?= $data['title'];?>">
                <span class="invalid-feedback"><?=$data['title_err'];?></span>
                </div>
            
            <!-- Body -->
                <div class="form-group form-group-post">
                <label for="body">Body: <sup>*</sup></label>
                <textarea name="body" id="" class="form-control form-control-lg 
                <?php echo (!empty($data['body_err']))? 'is-invalid' : '' ;?>"><?= $data['body'];?></textarea>
                <span class="invalid-feedback"><?=$data['body_err'];?></span>
                </div>

                <div class="post-footer">
                    

                    <a href="<?=URLROOT;?>/posts" class="btn light-blue-bg"><i class="fa fa-backward"></i> Back</a>
                        <input type="submit" value="Update" class="btn btn-success">
                    

                </div>

            </form>

            
            </div>




<?php require APPROOT . '/views/inc/footer.php'; ?>