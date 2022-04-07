<?php include "layouts/head.php"; ?>

<body data-sidebar="dark">
    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php include "layouts/header.php"; ?>

        <!-- ========== Left Sidebar Start ========== -->
        <?php include "layouts/sidebar.php"; ?>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    <h2>Sliders</h2>
                    <div class="card">
                        <div class="card-body">
                            <div class="text-right mb-2">
                                <a href="addSlider.php" class="btn btn-success"><i class="fa fa-plus"></i> Add New Slider</a>
                            </div>

                            <div class="table-responsive">
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Image</th>
                                            <th>title</th>
                                            <th>Sub title</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sliders = $slider->getSliders();
                                        if ($sliders) {
                                            $i = 1;
                                            foreach ($sliders as $slider) { ?>
                                                <tr>
                                                    <td><?php echo $i++; ?></td>
                                                    <td><img src="<?php echo $slider->image; ?>" class="w-25" alt=""></td>
                                                    <td><?php echo $slider->title; ?></td>
                                                    <td><?php echo $slider->sub_title; ?></td>
                                                    <td><?php echo $slider->price; ?></td>
                                                    <td>
                                                        <?php
                                                        if ($slider->status == true) {
                                                            echo ' <span class="badge badge-success">Active</span>';
                                                        } else {
                                                            echo ' <span class="badge badge-danger">Inactive</span>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <a href="editSlider.php?id=<?php echo $slider->id; ?>" class="btn btn-primary"><i class="fa fa-recycle"></i> Update</a>

                                                    </td>
                                                </tr>
                                        <?php
                                            }
                                        }

                                        ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <!-- footer -->
            <?php include "layouts/footer.php"; ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->
    <!-- script file -->
    <?php include "layouts/_script.php"; ?>
    <!--datatable js files-->
    <?php include "layouts/datatableJsFiles.php"; ?>

    <script>
        function deleteCategory(id) {

            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    event.preventDefault();
                    if (result.value) {
                        document.getElementById('trash-form-' + id).submit();
                    }
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                    )
                }
            })
        }
    </script>
    <?php include "layouts/script_file_activate.php"; ?>
</body>

</html>