<?php require './layout/header.php' ?>

<!--**********************************
            Content body start
***********************************-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="?mod=slider&action=listSlider">Slider</a></li>
                <li class="breadcrumb-item"><a href="?mod=slider&action=listSlider">Danh sách slider</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Danh sách slider</h4>
                    </div>
                    <?php if (!empty($list_slider)) { ?>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>ID</th>
                                            <th>Hình ảnh</th>
                                            <th class="">Tên ảnh</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $count = 0;
                                            foreach ($list_slider as $slider) {
                                                $count ++;
                                        ?>
                                            <tr>
                                                <td><?php echo $count ?></td>
                                                <td><?php echo $slider['slider_id'] ?></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="./public/upload/slider/<?php echo $slider['slider_name'] ?>" class="" width="82" alt="">
                                                    </div>
                                                </td>
                                                <td><?php echo $slider['slider_name'] ?></td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="?mod=slider&action=updateSlider&id=<?php echo $slider['slider_id'] ?>" class="btn btn-primary shadow btn-xs sharp me-1">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                        <a href="?mod=slider&action=deleteSlider&id=<?php echo $slider['slider_id'] ?>" class="btn btn-danger shadow btn-xs sharp" onclick="return confirm('Bạn chắc chắn có muốn xoá slider này?')">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php 
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <?php 
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************
            Content body end
***********************************-->

<?php require './layout/footer.php' ?>