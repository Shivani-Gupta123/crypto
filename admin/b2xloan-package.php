<?php include('header.php') ?>

<div class="body-content">
<div class="row gy-4">
<div class="col-12">
<div class="card py-4 px-3 radius-15">
<div class="d-flex flex-column flex-lg-row gap-3 justify-content-between align-items-center mb-3">
<h3 class="fs-24 mb-0 text-color-2 fw-medium lh-1">Packages</h3>
<div class="d-flex align-items-center gap-2">
<div class="border radius-10 p-1">
<button id="add-package-button" data-bs-toggle="modal" data-bs-target="#addPackage" class="btn btn-save lh-sm">
<span class="me-1">Add new</span>
<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1 6H11M6 1V11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
</svg>
</button>
</div>
</div>
</div>

<div class="table-responsive">
<table class="table" id="packages-table"><thead><tr><th title="Sl" width="30">Sl</th><th title="Name">Name</th><th title="Interest (%)">Interest (%)</th><th title="Status">Status</th><th title="Action" width="60">Action</th></tr></thead></table>
</div>

</div>
</div>
</div>
<div class="modal fade" id="addPackage" tabindex="-1" aria-labelledby="addPackageLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable modal-lg">
<div class="modal-content radius-35">
<div class="modal-header p-4">
<h5 class="modal-title text-color-5 fs-20 fw-medium" id="modelLabel">Add package
</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body p-4">
<form action="https://nishuelaravel.bdtask-demo.com/backend/admin/b2xloan-package" data-insert="https://nishuelaravel.bdtask-demo.com/backend/admin/b2xloan-package" method="post" class="needs-validation" data="showCallBackData" id="b2x-loan-package-form" novalidate enctype="multipart/form-data">
<input type="hidden" name="_token" value="wg4G36cOThJoNQEBu6DmGlNtTZKtBuYYQpsofzKm" autocomplete="off"> <div class="row mb-3 g-4">
<div class="col-12">
<div class="row">
<div class="col-12 col-lg-12">
<div class="mb-2">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium" for="no_of_month">No of month <span class="text-danger">*</span></label>
<input type="text" name="no_of_month" id="no_of_month" value class="custom-form-control bg-transparent " placeholder="Number of month" required />
<div class="invalid-feedback" role="alert">
</div>
</div>
</div>
<div class="col-12 col-lg-12">
<div class="mb-2">
<label class="col-form-label text-start text-color-1 fs-16
                                            fw-medium">Interest percent
<span class="text-danger">*</span></label>
<input name="interest_percent" id="interest_percent" class="custom-form-control bg-transparent " type="text" placeholder="Interest percent" required />
<div class="invalid-feedback" role="alert">
</div>
</div>
</div>
<div class="col-12 col-lg-12 d-lg-flex flex-lg-column justify-content-lg-center">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium">Status
<span class="text-danger">*</span>
</label>
<div class="d-flex gap-3">
<div class="form-check">
<input class="form-check-input" type="radio" name="status" id="loanPackActive" checked value="1" />
<label class="form-check-label" for="loanPackActive">Active </label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="status" id="loanPackInactive" value="0" />
<label class="form-check-label" for="loanPackInactive">
Inactive
</label>
</div>
</div>
<div class="invalid-feedback" role="alert">
</div>
</div>
</div>
</div>
<div class="col-12 d-lg-flex flex-lg-column justify-content-lg-end">
<div class="d-flex justify-content-end">
<button class="btn btn-reset w-auto resetBtn" type="button"><i class="fa
                                    fa-undo-alt"></i>
Reset
</button>
<button class="btn btn-save ms-3 w-auto actionBtn" type="submit">Submit</button>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="modal fade" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true" id="_edit_modal">
<div class="modal-dialog">
<div class="modal-content radius-35">
<div class="modal-header p-4">
<h5 class="modal-title text-color-5 fs-20 fw-medium" id="editModalLabel">Edit</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body p-4 pt-2 edit-modal">
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
<script src="https://nishuelaravel.bdtask-demo.com/backend/assets/js/custom.js"></script>
<script type="text/javascript">$(function(){window.LaravelDataTables=window.LaravelDataTables||{};window.LaravelDataTables["packages-table"]=$("#packages-table").DataTable({"serverSide":true,"processing":true,"ajax":{"url":"https:\/\/nishuelaravel.bdtask-demo.com\/backend\/admin\/b2xloan-package","type":"GET","data":function(data) {
            for (var i = 0, len = data.columns.length; i < len; i++) {
                if (!data.columns[i].search.value) delete data.columns[i].search;
                if (data.columns[i].searchable === true) delete data.columns[i].searchable;
                if (data.columns[i].orderable === true) delete data.columns[i].orderable;
                if (data.columns[i].data === data.columns[i].name) delete data.columns[i].name;
            }
            delete data.search.regex;}},"columns":[{"data":"DT_RowIndex","name":"DT_RowIndex","title":"Sl","orderable":false,"searchable":false,"width":30,"className":"text-center"},{"data":"no_of_month","name":"no_of_month","title":"Name","orderable":true,"searchable":true},{"data":"interest_percent","name":"interest_percent","title":"Interest (%)","orderable":false,"searchable":false},{"data":"status","name":"status","title":"Status","orderable":true,"searchable":true,"className":"text-center"},{"data":"action","name":"action","title":"Action","orderable":false,"searchable":false,"width":60,"className":"text-center"}],"order":[[0,"desc"]],"dom":"<'row m-3'<'col-md-4'l><'col-md-4 text-center'B><'col-md-4'f>>rt<'bottom'<'row'<'col-md-6'i><'col-md-6'p>>><'clear'>","responsive":true,"autoWidth":false,"headerCallback":function(thead, data, start, end, display) {
                            $(thead).addClass("bg-primary");
                            $(thead).find("th").addClass("text-white");
                            $("#packages-table").removeClass("table-striped table-hover");
                        },"buttons":[{"extend":"excel","text":"<i class=\"fa fa-file-excel\"><\/i> Excel","className":"btn btn-success box-shadow--4dp btn-sm-menu"},{"extend":"csv","text":"<i class=\"fa fa-file-csv\"><\/i> CSV","className":"btn btn-success box-shadow--4dp btn-sm-menu"},{"extend":"pdf","text":"<i class=\"fa fa-file-pdf\"><\/i> PDF","className":"btn btn-success box-shadow--4dp btn-sm-menu"},{"extend":"print","text":"<i class=\"fa fa-print\"><\/i> Print","className":"btn btn-success box-shadow--4dp btn-sm-menu","attr":{"target":"_blank"}},{"extend":"reset","text":"<i class=\"fa fa-undo-alt\"><\/i> Reset","className":"btn btn-success box-shadow--4dp btn-sm-menu"}]});});</script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/assets/js/datatables.active.min.js"></script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/module-assets/B2xloan/js/package.js"></script>

</body>
</html>
