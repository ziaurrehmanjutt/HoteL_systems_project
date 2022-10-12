<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>All Sites</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Simple Tables</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <!-- <h3 class="card-title">Responsive Hover Table</h3> -->

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 250px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>

                                        <a type="button" href=" <?= base_url(getCurrentLocal().'/admin/sites/add') ?>" class="btn btn-primary">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>

                                <!-- <button>Add new</button> -->
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Site</th>
                                        <th>Address</th>
                                        <th>ZIP</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($list_branches as  $value) {
                                       print "<tr>";
                                       print "<td>{$value['branch_name']}</td>";
                                       print "<td>{$value['branch_address']}</td>";
                                       print "<td>{$value['branch_zip']}</td>";
                                       print "<td>{$value['status']}</td>";
                                       print "<td>
                                                <a href=\"".base_url(getCurrentLocal().'/admin/site/update/'.$value['branch_id'])."\" title=\"Edit Branch\" class=\"btn btn-primary btn-sm\">
                                                    <i class=\"fas fa-edit\"></i></i>
                                                </a>

                                                <a href=\"".base_url(getCurrentLocal().'/admin/site/update/'.$value['branch_id'])."\" title=\"See Location On Map\" class=\"btn btn-primary btn-sm\">
                                                    <i class=\"fas fa-map-marker-alt\"></i></i>
                                                </a>
                                                <a href=\"".base_url(getCurrentLocal().'/admin/site/update/'.$value['branch_id'])."\" title=\"See Branch Info and Stat\" class=\"btn btn-primary btn-sm\">
                                                    <i class=\"fas fa-tachometer-alt\"></i></i>
                                                </a>
                                                <a href=\"".base_url(getCurrentLocal().'/admin/site/update/'.$value['branch_id'])."\" title=\"Login to this Branch\" class=\"btn btn-primary btn-sm\">
                                                    <i class=\"fas fa-sign-in-alt\"></i></i>
                                                </a>

                                            </td>";
                                       print "</tr>";
                                    } ?> 
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>