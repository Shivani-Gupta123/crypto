<?php include('header.php') ?>


<div class="body-content">
<div class="body-content">
<div class="row gy-4">
<div class="col-12">
<div class="card py-4 px-3 radius-15">
<div class="d-flex flex-column flex-lg-row gap-3 justify-content-between align-items-center mb-3">
<h3 class="fs-24 mb-0 text-color-2 fw-medium lh-1">Manage plan</h3>
<div class="border radius-10 p-1">
<a href="#" data-bs-toggle="modal" data-bs-target="#stake_add_modal" class="btn btn-save lh-sm">
<span class="me-1">Add new</span><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1 6H11M6 1V11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
</svg>
</a>
</div>
</div>

<div class="table-responsive">
<table class="table" id="stake-table"><thead><tr><th title="Plan name" width="250">Plan name</th><th title="Interest (%)">Interest (%)</th><th title="Duration (days)">Duration (days)</th><th title="Prices">Prices</th><th title="Status">Status</th><th title="Created at">Created at</th><th title="Action" width="60">Action</th></tr></thead></table>
</div>

</div>
</div>
</div>
<div class="modal fade" id="stake_add_modal" tabindex="-1" aria-labelledby="stakeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
<div class="modal-content radius-35">
<div class="modal-header p-4">
<h5 class="modal-title text-color-5 fs-20 fw-medium" id="stakeModalLabel">New plan
</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body p-4 pt-2">
<form action="https://nishuelaravel.bdtask-demo.com/backend/admin/stake" data-insert="https://nishuelaravel.bdtask-demo.com/backend/admin/stake" method="post" class="needs-validation" data="showCallBackData" id="stake_form" novalidate enctype="multipart/form-data">
<input type="hidden" name="_token" value="wg4G36cOThJoNQEBu6DmGlNtTZKtBuYYQpsofzKm" autocomplete="off"> <div class="row mb-3">
<div class="col-12">
<div class="mb-2">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium">Accept currency<span class="text-danger">*</span></label>
<select class="custom-form-control bg-transparent form-select " name="accept_currency" id="accept_currency">
<option value>Select Option</option>
<option value="1">United States Dollar</option>
<option value="4">Litecoin Testnet</option>
<option value="5">Bitcoin</option>
<option value="6">Ethereum</option>
<option value="7">Solana</option>
</select>
<div class="invalid-feedback" role="alert">
</div>
</div>
</div>
<div class="col-12">
<div class="mb-2">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium">Plan name<span class="text-danger">*</span></label>
<input class="custom-form-control bg-transparent " type="text" name="stake_title" id="stake_title" required />
<div class="invalid-feedback" role="alert">
</div>
</div>
</div>
</div>
<div class="row">
<div class="mb-3">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium" for="image">Image</label>
<div class="border-all mb-3 p-2 radius-10 w-max-content" id="preview_file_image">
<img width="80" height="50" class="preview_image" src="https://nishuelaravel.bdtask-demo.com/backend/storage/upload/stake/stake-a.e82f9f17.png" alt />
</div>
<div class="custom-file-button position-relative mb-3">
<input type="file" name="image" id="image" accept="image/*" class="custom-form-control file-preview  " data-previewDiv="preview_file_image" />
</div>
<div class="invalid-feedback" role="alert">
</div>
</div>
</div>
<div class="align-items-center gap-2">
<span class="text-primary fw-semi-bold">Prices</span>
<hr class="my-2 divider-color w-100" />
</div>
<div class="row mb-3">
<div class="col-12 col-lg-6">
<div class="mb-2">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium">Duration (days)<span class="text-danger">*</span></label>
<input class="custom-form-control bg-transparent " type="text" name="duration[]" required />
<div class="invalid-feedback" role="alert">
</div>
</div>
<div class="mb-2">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium">Min locked amount<span class="text-danger">*</span></label>
<input class="custom-form-control bg-transparent " type="text" name="min_value[]" required />
<div class="invalid-feedback" role="alert">
</div>
</div>
</div>
<div class="col-12 col-lg-6">
<div class="mb-2">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium">Interest(%)<span class="text-danger">*</span></label>
<div class="position-relative">
<input class="custom-form-control bg-transparent " type="text" name="interest_rate[]" required />
<span class="invest">%</span>
<div class="invalid-feedback" role="alert">
</div>
</div>
</div>
<div class="mb-2">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium">Max locked amount<span class="text-danger">*</span></label>
<input class="custom-form-control bg-transparent " type="text" name="max_value[]" required />
<div class="invalid-feedback" role="alert">
</div>
</div>
</div>
</div>
<div class="row mb-3">
<div class="rates-section"></div>
<div class="col-12">
<div class="text-center mt-3">
<a href="#" id="addNewRates" data-bs-toggle="modal" data-bs-target="#stake_add_modal" class="btn btn-catalina-blue lh-sm">
<span class="me-1">Add new</span><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1 6H11M6 1V11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
</svg>
</a>
</div>
</div>
</div>
<button type="submit" class="btn btn-save w-100 actionBtn">Submit</button>
</form>
</div>
</div>
</div>
</div>
<div class="modal fade" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true" id="_edit_modal">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" modalTitle="Update Plan">
<div class="modal-content radius-35">
<div class="modal-header p-4">
<h5 class="modal-title text-color-5 fs-20 fw-medium" id="editModalLabel">Update Plan</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body p-4 pt-2 edit-modal">
</div>
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
<script type="text/javascript">$(function(){window.LaravelDataTables=window.LaravelDataTables||{};window.LaravelDataTables["stake-table"]=$("#stake-table").DataTable({"serverSide":true,"processing":true,"ajax":{"url":"https:\/\/nishuelaravel.bdtask-demo.com\/backend\/admin\/stake","type":"GET","data":function(data) {
            for (var i = 0, len = data.columns.length; i < len; i++) {
                if (!data.columns[i].search.value) delete data.columns[i].search;
                if (data.columns[i].searchable === true) delete data.columns[i].searchable;
                if (data.columns[i].orderable === true) delete data.columns[i].orderable;
                if (data.columns[i].data === data.columns[i].name) delete data.columns[i].name;
            }
            delete data.search.regex;}},"columns":[{"data":"stake_name","name":"stake_name","title":"Plan name","orderable":false,"searchable":false,"width":250},{"data":"rates","name":"rates","title":"Interest (%)","orderable":false,"searchable":false},{"data":"duration","name":"duration","title":"Duration (days)","orderable":false,"searchable":false},{"data":"price","name":"price","title":"Prices","orderable":false,"searchable":false},{"data":"status","name":"status","title":"Status","orderable":true,"searchable":true},{"data":"created_at","name":"created_at","title":"Created at","orderable":true,"searchable":true},{"data":"action","name":"action","title":"Action","orderable":false,"searchable":false,"width":60,"className":"text-center"}],"responsive":true,"order":[[0,"desc"]],"dom":"<'row m-3'<'col-md-4'l><'col-md-4 text-center'B><'col-md-4'f>>rt<'bottom'<'row'<'col-md-6'i><'col-md-6'p>>><'clear'>","autoWidth":false,"headerCallback":function(thead, data, start, end, display) {
                            $(thead).addClass("bg-primary");
                            $(thead).find("th").addClass("text-white");
                            $("#stake-table").removeClass("table-striped table-hover");
                        },"buttons":[{"extend":"excel","text":"<i class=\"fa fa-file-excel\"><\/i> Excel","className":"btn btn-success box-shadow--4dp btn-sm-menu"},{"extend":"csv","text":"<i class=\"fa fa-file-csv\"><\/i> CSV","className":"btn btn-success box-shadow--4dp btn-sm-menu"},{"extend":"pdf","text":"<i class=\"fa fa-file-pdf\"><\/i> PDF","className":"btn btn-success box-shadow--4dp btn-sm-menu"},{"extend":"print","text":"<i class=\"fa fa-print\"><\/i> Print","className":"btn btn-success box-shadow--4dp btn-sm-menu","attr":{"target":"_blank"}},{"extend":"reset","text":"<i class=\"fa fa-undo-alt\"><\/i> Reset","className":"btn btn-success box-shadow--4dp btn-sm-menu"}]});});</script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/assets/js/datatables.active.min.js"></script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/module-assets/Stake/js/app.js"></script>

</body>
</html>