<?php require './layout/header.php' ?>

<!--**********************************
            Content body start
***********************************-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="?mod=pages&action=about">Trang</a></li>
                <li class="breadcrumb-item"><a href="">Phản hồi</a></li>
            </ol>
        </div>


        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3">Phản hồi</h4>
                        <form class="needs-validation" novalidate="" enctype="multipart/form-data" method="POST">
                            <div class="mb-3">
                                <label for="post-title" class="form-label">Họ tên</label>
                                <input 
                                    type="fullname" 
                                    class="form-control" 
                                    id="post-title"
                                    name="feedback_fullname"
                                    value="<?php 
                                        if (!empty($feedback['feedback_fullname'])) echo $feedback['feedback_fullname'];
                                    ?>"
                                >
                            </div>

                            <div class="mb-3">
                                <label for="post-title" class="form-label">Email</label>
                                <input 
                                    type="email" 
                                    class="form-control" 
                                    id="post-title"
                                    name="feedback_email"
                                    value="<?php 
                                        if (!empty($feedback['feedback_email'])) echo $feedback['feedback_email'];
                                    ?>"
                                >
                            </div>
                            
                            <div class="mb-3">
                                <label for="post-title" class="form-label">Tiêu đề</label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="post-title"
                                    name="feedback_title"
                                    value="<?php 
                                        if (!empty($feedback['feedback_title'])) echo $feedback['feedback_title'];
                                    ?>"
                                >
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="post-desc">Nội dung phản hồi</label>
                                <div class="col-lg-6">
                                    <textarea 
                                        class="form-control" 
                                        id="post-desc" 
                                        rows="5" 
                                        placeholder="Địa chỉ"
                                        name="feedback_content"
                                        ><?php 
                                            if (!empty($feedback['feedback_content'])) echo $feedback['feedback_content']; 
                                        ?></textarea>
                                </div>
                            </div>

                            <button class="btn btn-primary btn-lg float-end">
                                <a class="text-a" href="?mod=pages&action=listFeedback">Quay lại</a>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************
            Content body end
***********************************-->

<?php require './layout/footer.php' ?>