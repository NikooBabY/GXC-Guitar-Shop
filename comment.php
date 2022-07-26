
<form method="get" action="action.php">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <h3 class="fw-bold mb-1" style="color: #0d6efd;">Product Reviews</h3>
                <div class="card-footer py-3 border-0" style="background-color: white;">
                    <div class="d-flex flex-start w-100">
                    <!-- <img class="rounded-circle shadow-1-strong me-3"
                        src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp" alt="avatar" width="40"
                        height="40" /> -->
                        <div class="form-outline w-100">
                            <textarea class="form-control" id="textAreaExample" rows="4" style="background: #fff;" name="cmt"></textarea>
                        </div>
                    </div>
                        <div class="float-end mt-2 pt-1">
                            <button type="submit" class="btn btn-primary btn-sm" name="comments">Post review</button>
                            <button type="submit" class="btn btn-outline-primary btn-sm">Cancel</button>
                        </div>
                    </div>
                </div>
            <div class="col-md-1"></div>
        </div>
            <?php 
            // include('database.php');
                $pid = $_GET['id'];
                    // $pro = "SELECT * FROM comment WHERE productid='$pid'";
                    $pro = "SELECT * FROM comment C JOIN final2 U On C.userid = U.id";
                        $result = $conn->query($pro);
                        while($data = $result->fetch_assoc()){ 
                            if($data['productid'] == $pid){?>
            <div class="row" style="margin-top: 10px; margin-bottom: 10px;">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-start align-items-center">
                                <div>
                                    <h6 class="fw-bold text-primary mb-1"><?php echo $data['first_name']; echo " ";echo $data['last_name'];?></h6>
                                    <p class="text-muted small mb-0">
                                    Shared publicly - Jan 2020
                                    </p>
                                </div>
                            </div>
                            <p class="mt-3 mb-4 pb-2"><?php echo $data['comments'] ?></p>
                            <div class="small d-flex justify-content-start">
                                <a href="#!" class="d-flex align-items-center me-3">
                                    <i class="far fa-thumbs-up me-2"></i>
                                    <p class="mb-0">Like</p>
                                </a>
                                <a href="#!" class="d-flex align-items-center me-3">
                                    <i class="far fa-comment-dots me-2"></i>
                                    <p class="mb-0">Comment</p>
                                </a>
                                <a href="#!" class="d-flex align-items-center me-3">
                                    <i class="fas fa-share me-2"></i>
                                    <p class="mb-0">Share</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div> 
            <?php }} ?>
    </div>
</form>