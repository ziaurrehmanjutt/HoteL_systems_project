<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?=lang('admin/Branches.branches')?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>"><?=lang('admin/Branches.branches')?></a></li>
                        <li class="breadcrumb-item active"><?=lang('admin/Branches.branch_add.add_branch')?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"><?=lang('admin/Branches.branch_add.add_branch')?></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="quickForm">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="branch_name"><?=lang('admin/Branches.branch_add.branch_name')?></label>
                                            <input type="text" name="branch_name" class="form-control" id="branch_name" placeholder="<?=lang('admin/Branches.branch_add.branch_name')?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="branch_zip"><?=lang('admin/Branches.branch_add.branch_zip')?></label>
                                            <input type="text" name="branch_zip" class="form-control" id="branch_zip" placeholder="<?=lang('admin/Branches.branch_add.branch_zip')?>">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="branch_address"><?=lang('admin/Branches.branch_add.branch_address')?></label>
                                            <input type="text" name="branch_address" class="form-control" id="branch_address" placeholder="<?=lang('admin/Branches.branch_add.branch_address')?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="branch_lat"><?=lang('admin/Branches.branch_add.branch_lat')?></label>
                                            <input type="text" name="branch_lat" class="form-control" id="branch_lat" placeholder="<?=lang('admin/Branches.branch_add.branch_lat')?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group"> 
                                            <label for="branch_lng"><?=lang('admin/Branches.branch_add.branch_lng')?></label>
                                            <input type="text" name="branch_lng" class="form-control" id="branch_lng" placeholder="<?=lang('admin/Branches.branch_add.branch_lng')?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary"><?=lang('admin/Branches.branch_add.add_branch')?></button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>