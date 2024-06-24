<?php require './layout/header.php' ?>

<!--**********************************
            Content body start
***********************************-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="?mod=subscriber">Subscriber</a></li>
            </ol>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Danh sách subscriber</h4>
                    </div>
                    <?php if (!empty($list_subs)) {?>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>ID</th>
                                            <th>Email</th>
                                            <th>Ngày subscriber</th>
                                            <th>Xoá</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $count = 0;
                                            foreach($list_subs as $subs) {
                                                $count ++;
                                        ?>
                                            <tr>
                                                <td><?php echo $count ?></td>
                                                <td><?php echo $subs['subs_id'] ?></td>
                                                <td><?php echo $subs['subs_email'] ?></td>
                                                <td><?php echo date_time_format($subs['subs_date']) ?></td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="?mod=subscriber&action=deleteSubs&id=<?php echo $subs['subs_id'] ?>" class="btn btn-danger shadow btn-xs sharp" onclick="return confirm('Bạn muốn xoá subscriber này?')">
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