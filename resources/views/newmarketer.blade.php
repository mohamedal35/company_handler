<x-adminlay>
    <x-admin-header />

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Project Edit</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Project Edit</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">

                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->

            </div><!-- /.container-fluid -->
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <form method="post" style="width:100%" id="sectionForm">

                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">General</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputName">For</label>
                                    <input type="text" id="inputName" class="form-control" name="for">
                                </div>


                                <div class="form-group">
                                    <label for="inputClientCompany">Name</label>
                                    <input type="text" id="inputClientCompany" class="form-control" name="name">
                                </div>

                                <div class="form-group">
                                    <label for="inputClientCompany">Email</label>
                                    <input type="text" id="inputClientCompany" class="form-control" name="email">
                                </div>

                                <div class="form-group">
                                    <label for="inputClientCompany">Phone</label>
                                    <input type="text" id="inputClientCompany" class="form-control" name="phone">
                                </div>

                                <div class="form-group">
                                    <label for="inputClientCompany">Location</label>
                                    <input type="text" id="inputClientCompany" class="form-control" name="location">
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </form>

            </div>
            <div class="row">
                <div class="col-12">
                    <a href="#" class="btn btn-secondary">Cancel</a>
                    <input type="submit" form="sectionForm" value="Save Changes" class="btn btn-success float-right">
                </div>
            </div>
        </section>
    </div>



    <!-- /.content -->
</x-adminlay>
