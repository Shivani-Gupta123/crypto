<?php include('header.php') ?>

<div class="body-content">
<div class="row gy-4">
<div class="col-12">
<div class="card py-4 px-3 radius-15">
<div class="d-flex flex-column flex-lg-row gap-3 justify-content-between align-items-center mb-3">
<h3 class="fs-24 mb-0 text-color-2 fw-medium lh-1">Package list</h3>
<div class="d-flex align-items-center gap-2">
<div class="border radius-10 p-1">
<button id="add-user-button" data-bs-toggle="modal" data-bs-target="#addPackage" class="btn btn-save lh-sm">
<span class="me-1">Add new</span>
<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1 6H11M6 1V11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
</svg>
</button>
</div>
</div>
</div>

<div class="table-responsive">
<table class="table" id="packages-table"><thead><tr><th title="Sl" width="30">Sl</th><th title="Name">Name</th><th title="Plan time">Plan time</th><th title="Price">Price</th><th title="Interest">Interest</th><th title="Return type">Return type</th><th title="Repeat time">Repeat time</th><th title="Capital back">Capital back</th><th title="Status">Status</th><th title="Action" width="60">Action</th></tr></thead></table>
</div>

</div>
</div>
</div>
<div class="modal fade" id="addPackage" tabindex="-1" aria-labelledby="addPackageLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable modal-lg">
<div class="modal-content radius-35">
<div class="modal-header p-4">
<h5 class="modal-title text-color-5 fs-20 fw-medium" id="modelLabel">Add new plan
</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body p-4">
<form action="https://nishuelaravel.bdtask-demo.com/backend/admin/package" data-insert="https://nishuelaravel.bdtask-demo.com/backend/admin/package" method="post" class="needs-validation" data="showCallBackData" id="package-form" novalidate enctype="multipart/form-data">
<input type="hidden" name="_token" value="wg4G36cOThJoNQEBu6DmGlNtTZKtBuYYQpsofzKm" autocomplete="off"> <div class="row mb-3 g-4">
<div class="col-12">
<div class="row">
<div class="col-12 col-lg-6">
<div class="mb-2">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium" for="name">Name <span class="text-danger">*</span></label>
<input type="text" name="name" id="name" value class="custom-form-control bg-transparent " placeholder="Plan name" required />
<div class="invalid-feedback" role="alert">
</div>
</div>
</div>
<div class="col-12 col-lg-6">
<div class="mb-2">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium">
Invest type
<span class="text-danger">*</span></label>
<select class="custom-form-control bg-transparent placeholder-single  " name="invest_type" id="invest_type" required>
<option value="1" selected>
RANGE</option>
<option value="2">
FIXED</option>
</select>
<div class="invalid-feedback" role="alert">
</div>
</div>
</div>
</div>
<div class="row rangeRow">
<div class="col-12 col-lg-6">
<div class="mb-2">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium">Minimum invest
<span class="text-danger">*</span></label>
<div class="position-relative">
<input name="min_price" id="min_price" class="custom-form-control
                                                bg-transparent " type="text" required />
<div class="invalid-feedback" role="alert">
</div>
<span class="invest">USD</span>
</div>
</div>
</div>
<div class="col-12 col-lg-6">
<div class="mb-2">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium">Maximum invest
<span class="text-danger">*</span></label>
<div class="position-relative">
<input name="max_price" id="max_price" class="custom-form-control bg-transparent " type="text" required />
<div class="invalid-feedback" role="alert">
</div>
<span class="invest">USD</span>
</div>
</div>
</div>
</div>
<div class="row amountRow">
<div class="col-12 col-lg-12">
<div class="mb-2">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium">
Invest amount <span class="text-danger">*</span></label>
<div class="position-relative">
<input name="amount" id="amount" class="custom-form-control
                                                bg-transparent " type="text" />
<div class="invalid-feedback" role="alert">
</div>
<span class="invest">USD</span>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-12 col-lg-6">
<div class="mb-2 modal-select">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium">Interest type
<span class="text-danger">*</span></label>
<select class="custom-form-control bg-transparent placeholder-single " name="interest_type" id="interest_type" required>
<option value="1">PERCENT</option>
<option value="2">FIXED</option>
</select>
<div class="invalid-feedback" role="alert">
</div>
</div>
</div>
<div class="col-12 col-lg-6">
<div class="mb-2">
<label class="col-form-label text-start text-color-1 fs-16
                                            fw-medium"><span class="interestPercent">Interest percent </span>
<span class="interestAmt">Interest amount</span>
<span class="text-danger">*</span></label>
<input name="interest" id="interest" class="custom-form-control bg-transparent " type="text" required />
<div class="invalid-feedback" role="alert">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-12 col-lg-6">
<div class="mb-2 modal-select">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium">Time
<span class="text-danger">*</span></label>
<select class="custom-form-control bg-transparent placeholder-single  " name="plan_time_id" id="plan_time_id" required>
<option value>Select option</option>
<option value="1">Weekly
</option>
<option value="2">Monthly
</option>
<option value="3">Yearly
</option>
</select>
<div class="invalid-feedback" role="alert">
</div>
</div>
</div>
<div class="col-12 col-lg-6">
<div class="mb-2 modal-select">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium">Return type
<span class="text-danger">*</span></label>
<select class="custom-form-control bg-transparent placeholder-single" name="return_type" id="return_type" required>
<option value="1">
LIFE TIME</option>
<option value="2">
REPEAT</option>
</select>
</div>
</div>
</div>
<div class="row capitalBackRow">
<div class="col-12 col-lg-6">
<div class="mb-2 modal-select">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium" for="repeat_time">Repeat time <span class="text-danger">*</span></label>
<input name="repeat_time" id="repeat_time" class="custom-form-control bg-transparent " type="text" />
<div class="invalid-feedback" role="alert">
</div>
</div>
</div>
<div class="col-12 col-lg-6">
<div class="mb-2 modal-select">
<label class="col-form-label text-start text-color-1 fs-16
                                        fw-medium">Capital
Back
<span class="text-danger">*</span></label>
<select class="custom-form-control bg-transparent basic-single " name="capital_back" id="capital_back">
<option value>Select option</option>
<option value="1">YES</option>
<option value="0">NO</option>
</select>
</div>
</div>
</div>
<div class="row">
<div class="mb-3">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium" for="image">Image</label>
<div class="border-all mb-3 p-2 radius-10 w-max-content" id="preview_file_image">
<img width="80" height="50" class="preview_image" src="https://nishuelaravel.bdtask-demo.com/backend/assets/img/package.png" alt />
</div>
<div class="custom-file-button position-relative mb-3">
<input type="file" name="image" id="image" accept="image/*" class="custom-form-control file-preview  " data-previewDiv="preview_file_image" />
</div>
<div class="invalid-feedback" role="alert">
</div>
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
<script type="text/javascript">$(function(){window.LaravelDataTables=window.LaravelDataTables||{};window.LaravelDataTables["packages-table"]=$("#packages-table").DataTable({"serverSide":true,"processing":true,"ajax":{"url":"https:\/\/nishuelaravel.bdtask-demo.com\/backend\/admin\/package","type":"GET","data":function(data) {
            for (var i = 0, len = data.columns.length; i < len; i++) {
                if (!data.columns[i].search.value) delete data.columns[i].search;
                if (data.columns[i].searchable === true) delete data.columns[i].searchable;
                if (data.columns[i].orderable === true) delete data.columns[i].orderable;
                if (data.columns[i].data === data.columns[i].name) delete data.columns[i].name;
            }
            delete data.search.regex;}},"columns":[{"data":"DT_RowIndex","name":"DT_RowIndex","title":"Sl","orderable":false,"searchable":false,"width":30,"className":"text-center"},{"data":"name","name":"name","title":"Name","orderable":true,"searchable":true},{"data":"plan_time_id","name":"plan_time_id","title":"Plan time","orderable":true,"searchable":true},{"data":"min_price","name":"min_price","title":"Price","orderable":true,"searchable":true},{"data":"interest","name":"interest","title":"Interest","orderable":true,"searchable":true},{"data":"return_type","name":"return_type","title":"Return type","orderable":true,"searchable":true},{"data":"repeat_time","name":"repeat_time","title":"Repeat time","orderable":true,"searchable":true},{"data":"capital_back","name":"capital_back","title":"Capital back","orderable":true,"searchable":true},{"data":"status","name":"status","title":"Status","orderable":true,"searchable":true,"className":"text-center"},{"data":"action","name":"action","title":"Action","orderable":false,"searchable":false,"width":60,"className":"text-center"}],"order":[[0,"desc"]],"dom":"<'row m-3'<'col-md-4'l><'col-md-4 text-center'B><'col-md-4'f>>rt<'bottom'<'row'<'col-md-6'i><'col-md-6'p>>><'clear'>","responsive":true,"autoWidth":false,"headerCallback":function(thead, data, start, end, display) {
                            $(thead).addClass("bg-primary");
                            $(thead).find("th").addClass("text-white");
                            $("#packages-table").removeClass("table-striped table-hover");
                        },"buttons":[{"extend":"excel","text":"<i class=\"fa fa-file-excel\"><\/i> Excel","className":"btn btn-success box-shadow--4dp btn-sm-menu"},{"extend":"csv","text":"<i class=\"fa fa-file-csv\"><\/i> CSV","className":"btn btn-success box-shadow--4dp btn-sm-menu"},{"extend":"pdf","text":"<i class=\"fa fa-file-pdf\"><\/i> PDF","className":"btn btn-success box-shadow--4dp btn-sm-menu"},{"extend":"print","text":"<i class=\"fa fa-print\"><\/i> Print","className":"btn btn-success box-shadow--4dp btn-sm-menu","attr":{"target":"_blank"}},{"extend":"reset","text":"<i class=\"fa fa-undo-alt\"><\/i> Reset","className":"btn btn-success box-shadow--4dp btn-sm-menu"}]});});</script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/assets/js/datatables.active.min.js"></script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/module-assets/Package/js/package.js"></script>

</body>
</html>