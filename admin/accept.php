<?php include('header.php') ?>

<div class="body-content">
<div class="body-content">
<div class="row gy-4">
<div class="col-12">
<div class="card py-4 px-3 radius-15">
<div class="d-flex flex-column flex-lg-row gap-3 justify-content-between align-items-center mb-3">
<h3 class="fs-24 mb-0 text-color-2 fw-medium lh-1">Accept currency list</h3>
<div class="border radius-10 p-1">
<a href="#" data-bs-toggle="modal" data-bs-target="#accept_currency_add_modal" class="btn btn-save lh-sm">
<span class="me-1">Add new</span><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1 6H11M6 1V11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
</svg>
</a>
</div>
</div>

<div class="table-responsive">
<table class="table" id="accept-currency-table"><thead><tr><th title="Sl" width="30">Sl</th><th title="Logo">Logo</th><th title="Name">Name</th><th title="Symbol">Symbol</th><th title="Support gateway">Support gateway</th><th title="Status">Status</th><th title="Created">Created</th><th title="Action" width="80">Action</th></tr></thead></table>
</div>

</div>
</div>
</div>
<div class="modal fade" id="accept_currency_add_modal" tabindex="-1" aria-labelledby="acceptCurrencyModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
<div class="modal-content radius-35">
<div class="modal-header p-4">
<h5 class="modal-title text-color-5 fs-20 fw-medium" id="acceptCurrencyModalLabel">
Add accept currency </h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body p-4 pt-2">
<form action="https://nishuelaravel.bdtask-demo.com/backend/admin/currency/setting/accept" data-insert="https://nishuelaravel.bdtask-demo.com/backend/admin/currency/setting/accept" method="post" class="needs-validation" data="showCallBackData" id="accept_currency_form" novalidate enctype="multipart/form-data">
<input type="hidden" name="_token" value="wg4G36cOThJoNQEBu6DmGlNtTZKtBuYYQpsofzKm" autocomplete="off"> <div class="row mb-3">
<div class="col-12">
<div class="mb-2">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium">
Currency name <span class="text-danger">*</span></label>
<input class="custom-form-control bg-transparent " type="text" name="currency_name" id="currency_name" required />
<div class="invalid-feedback" role="alert">
</div>
<span class="text-warning mt-4"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> This currency must be listed on coinmarketcap</span>
</div>
</div>
<div class="col-12">
<div class="mb-2">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium">
Currency symbol<span class="text-danger">*</span></label>
<input class="custom-form-control bg-transparent " type="text" name="currency_symbol" id="currency_symbol" required />
<div class="invalid-feedback" role="alert">
</div>
</div>
</div>
<div class="col-12">
<div class="mb-2">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium">
Accept payment gateway<span class="text-danger">*</span>
</label>
<select class="select-multiple floating-form-control placeholder-multiple " name="accept_payment_gateway[]" id="accept_payment_gateway" multiple="multiple" required>
<option value>Select Option</option>
<option value="1">CoinPayments</option>
<option value="2">Stripe</option>
</select>
<div class="invalid-feedback" role="alert">
</div>
</div>
</div>
<div class="col-12">
<div class="mt-2">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium">
Status <i class="text-danger">*</i></label>
<div class="d-flex gap-3">
<div class="form-check">
<input class="form-check-input" type="radio" name="status" id="active_status" value="1" checked>
<label class="form-check-label" for="active_status">
Active</label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="status" id="inactive_status" value="0">
<label class="form-check-label" for="inactive_status">
Inactive</label>
</div>
</div>
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
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
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
<script type="text/javascript">$(function(){window.LaravelDataTables=window.LaravelDataTables||{};window.LaravelDataTables["accept-currency-table"]=$("#accept-currency-table").DataTable({"serverSide":true,"processing":true,"ajax":{"url":"https:\/\/nishuelaravel.bdtask-demo.com\/backend\/admin\/currency\/setting\/accept","type":"GET","data":function(data) {
            for (var i = 0, len = data.columns.length; i < len; i++) {
                if (!data.columns[i].search.value) delete data.columns[i].search;
                if (data.columns[i].searchable === true) delete data.columns[i].searchable;
                if (data.columns[i].orderable === true) delete data.columns[i].orderable;
                if (data.columns[i].data === data.columns[i].name) delete data.columns[i].name;
            }
            delete data.search.regex;}},"columns":[{"data":"DT_RowIndex","name":"DT_RowIndex","title":"Sl","orderable":false,"searchable":false,"width":30,"className":"text-center"},{"data":"logo","name":"logo","title":"Logo","orderable":false,"searchable":false,"className":"text-center"},{"data":"name","name":"name","title":"Name","orderable":true,"searchable":true},{"data":"symbol","name":"symbol","title":"Symbol","orderable":true,"searchable":true},{"data":"payment_gateway","name":"payment_gateway","title":"Support gateway","orderable":false,"searchable":false},{"data":"status","name":"status","title":"Status","orderable":false,"searchable":false},{"data":"created_at","name":"created_at","title":"Created","orderable":true,"searchable":true,"defaultContent":"N\/A"},{"data":"action","name":"action","title":"Action","orderable":false,"searchable":false,"width":80,"className":"text-center"}],"order":[[0,"desc"]],"dom":"<'row m-3'<'col-md-3'l><'col-md-5 d-flex align-items-center'B><'col-md-4'f>>rt<'bottom'<'row'<'col-md-6'i><'col-md-6'p>>><'clear'>","responsive":true,"autoWidth":false,"headerCallback":function(thead, data, start, end, display) {
                    $(thead).addClass("bg-primary");
                    $(thead).find("th").addClass("text-white");
                },"buttons":[{"extend":"excel","text":"<i class=\"fa fa-file-excel\"><\/i> Excel","className":"btn btn-success data-table-btn btn-sm-menu"},{"extend":"csv","text":"<i class=\"fa fa-file-csv\"><\/i> CSV","className":"btn btn-success data-table-btn btn-sm-menu"},{"extend":"pdf","text":"<i class=\"fa fa-file-pdf\"><\/i> PDF","className":"btn btn-success data-table-btn btn-sm-menu"},{"extend":"print","text":"<i class=\"fa fa-print\"><\/i> Print","className":"btn btn-success data-table-btn btn-sm-menu","attr":{"target":"_blank"}},{"extend":"reset","text":"<i class=\"fa fa-undo-alt\"><\/i> Reset","className":"btn btn-success data-table-btn btn-sm-menu"}]});});</script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/assets/js/datatables.active.min.js"></script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/assets/js/currency/accept_currency.js"></script>

</body>
</html>