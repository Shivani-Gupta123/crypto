<?php include('header.php') ?>

<div class="body-content">
<div class="row gy-4">
<div class="col-12">
<div class="card py-4 px-3 radius-15">
<div class="d-flex flex-column flex-lg-row gap-3 justify-content-between align-items-center mb-3">
<h3 class="fs-24 mb-0 text-color-2 fw-medium lh-1">Plan times</h3>
<div class="d-flex align-items-center gap-2">
<div class="border radius-10 p-1">
<button id="add-plan-button" data-bs-toggle="modal" data-bs-target="#addPlan" class="btn btn-save lh-sm">
<span class="me-1">Add new</span>
<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1 6H11M6 1V11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
</svg>
</button>
</div>
</div>
</div>

<div class="table-responsive">
<table class="table" id="plan-time-table"><thead><tr><th title="Sl" width="30">Sl</th><th title="Name">Name</th><th title="Hours">Hours</th><th title="Status">Status</th><th title="Action" width="60">Action</th></tr></thead></table>
</div>

</div>
</div>
</div>
<div class="modal fade show" id="addPlan" tabindex="-1" aria-labelledby="modalLabel" aria-modal="true" role="dialog">
<div class="modal-dialog">
<div class="modal-content radius-35">
<div class="modal-header p-4">
<h5 class="modal-title text-color-5 fs-20 fw-medium" id="modalLabel">Add time</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body p-4">
<form action="https://nishuelaravel.bdtask-demo.com/backend/admin/plan-time" data-insert="https://nishuelaravel.bdtask-demo.com/backend/admin/plan-time" method="post" class="needs-validation" data="showCallBackData" id="plan-time-form" novalidate enctype="multipart/form-data">
<input type="hidden" name="_token" value="wg4G36cOThJoNQEBu6DmGlNtTZKtBuYYQpsofzKm" autocomplete="off"> <div class="row mb-3 g-4">
<div class="col-12">
<div class="mb-2">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium">Time name</label>
<input name="name_" id="name_" class="custom-form-control bg-transparent" type="text" placeholder="e.g.Hours, Day, Month" value required>
<div class="invalid-feedback" role="alert">
</div>
</div>
<div class="mb-2">
<div class="d-flex flex-wrap justify-content-between align-items-center">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium">Time in hours
<span class="text-danger">*</label>
</div>
<div class="position-relative">
<input name="hours_" id="hours_" class="custom-form-control bg-transparent " type="text" value required>
<div class="invalid-feedback" role="alert">
</div>
<span class="invest">Hours</span>
</div>
</div>
</div>
<div class="col-12">
<div class="d-flex gap-4 justify-content-between">
<button type="reset" class="btn btn-reset fw-medium rounded-3
                                     w-100 resetBtn"><i class="fa fa-undo-alt"></i></button>
<button type="submit" class="btn btn-save w-100 actionBtn">Submit</button>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>

</div>

<div class="overlay"></div>
</div>

</div>


<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://nishuelaravel.bdtask-demo.com/backend/assets/vendor/jQuery/jquery.min.js"></script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/assets/vendor/metisMenu/metisMenu.min.js"></script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/assets/vendor/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/assets/vendor/emojionearea/dist/emojionearea.min.js"></script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/assets/vendor/sweetalert/sweetalert.all.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://nishuelaravel.bdtask-demo.com/backend/assets/js/sidebar.min.js"></script>

<script src="https://nishuelaravel.bdtask-demo.com/backend/assets/vendor/yajra-laravel-datatables/assets/datatables.js"></script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/assets/vendor/select2/dist/js/select2.min.js"></script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/assets/js/pages/app.select2.js"></script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/assets/vendor/select2/dist/js/select2.min.js"></script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/assets/js/pages/app.select2.js"></script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/assets/js/custom.js"></script>
<script type="text/javascript">$(function(){window.LaravelDataTables=window.LaravelDataTables||{};window.LaravelDataTables["plan-time-table"]=$("#plan-time-table").DataTable({"serverSide":true,"processing":true,"ajax":{"url":"https:\/\/nishuelaravel.bdtask-demo.com\/backend\/admin\/plan-time","type":"GET","data":function(data) {
            for (var i = 0, len = data.columns.length; i < len; i++) {
                if (!data.columns[i].search.value) delete data.columns[i].search;
                if (data.columns[i].searchable === true) delete data.columns[i].searchable;
                if (data.columns[i].orderable === true) delete data.columns[i].orderable;
                if (data.columns[i].data === data.columns[i].name) delete data.columns[i].name;
            }
            delete data.search.regex;}},"columns":[{"data":"DT_RowIndex","name":"DT_RowIndex","title":"Sl","orderable":false,"searchable":false,"width":30,"className":"text-center"},{"data":"name_","name":"name_","title":"Name","orderable":true,"searchable":true},{"data":"hours_","name":"hours_","title":"Hours","orderable":true,"searchable":true},{"data":"status","name":"status","title":"Status","orderable":true,"searchable":true,"className":"text-center"},{"data":"action","name":"action","title":"Action","orderable":false,"searchable":false,"width":60,"className":"text-center"}],"order":[[0,"desc"]],"dom":"<'row m-3'<'col-md-4'l><'col-md-4 text-center'B><'col-md-4'f>>rt<'bottom'<'row'<'col-md-6'i><'col-md-6'p>>><'clear'>","responsive":true,"autoWidth":false,"headerCallback":function(thead, data, start, end, display) {
                            $(thead).addClass("bg-primary");
                            $(thead).find("th").addClass("text-white");
                            $("#plan-time-table").removeClass("table-striped table-hover");
                        },"buttons":[{"extend":"excel","text":"<i class=\"fa fa-file-excel\"><\/i> Excel","className":"btn btn-success box-shadow--4dp btn-sm-menu"},{"extend":"csv","text":"<i class=\"fa fa-file-csv\"><\/i> CSV","className":"btn btn-success box-shadow--4dp btn-sm-menu"},{"extend":"pdf","text":"<i class=\"fa fa-file-pdf\"><\/i> PDF","className":"btn btn-success box-shadow--4dp btn-sm-menu"},{"extend":"print","text":"<i class=\"fa fa-print\"><\/i> Print","className":"btn btn-success box-shadow--4dp btn-sm-menu","attr":{"target":"_blank"}},{"extend":"reset","text":"<i class=\"fa fa-undo-alt\"><\/i> Reset","className":"btn btn-success box-shadow--4dp btn-sm-menu"}]});});</script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/assets/js/datatables.active.min.js"></script>
<script>
            var showCallBackData = function() {
                $("#addPlan").modal('hide');
                $('#plan-time-table').DataTable().ajax.reload();
            }

            $(document).on('click', '#add-plan-button', function() {

                $("#modelLabel").html('Add Plan Time');
                $(".actionBtn").html('Submit');


                $("#plan-time-form").find('input[name="_method"]').remove();
                $("#plan-time-form").attr('action', $("#plan-time-form").attr('data-insert'));

                removeFormValidation($('#plan-time-form'), new FormData(document.querySelector('#plan-time-form')),
                    true)
            });

            $(document).on('click', '.edit-button', function() {
                // set form value
                $("#modelLabel").html('Update Plan Time');
                $(".actionBtn").html('Update');
                $("#plan-time-form").attr('action', $(this).attr('data-action'));

                if (!$("#plan-time-form").find('input[name="_method"]').length) {
                    $("#plan-time-form").prepend('<input type="hidden" name="_method" value="patch" />');
                }

                // set form data by route
                let result = setFormValue($(this).attr('data-route'), $('#plan-time-form'), new FormData(document
                    .querySelector(
                        '#plan-time-form')));

                result.then(data => {
                    $('#name_').val(data.name_);
                    $('#hours_').val(data.hours_);
                }).catch(res => {

                });

                // show model
                $("#addPlan").modal('show');
            });
        </script>

</body>
</html>