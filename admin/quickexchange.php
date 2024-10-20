<?php include('header.php') ?>

<div class="body-content">
<div class="body-content">
<div class="row gy-4">
<div class="col-12">
<div class="card py-4 px-3 radius-15">
<div class="d-flex flex-column flex-lg-row gap-3 justify-content-between align-items-center mb-3">
<h3 class="fs-24 mb-0 text-color-2 fw-medium lh-1">Quick exchange coin</h3>
<div class="border radius-10 p-1">
<a href="#" data-bs-toggle="modal" data-bs-target="#addQuickExchangeCoin" class="btn btn-save lh-sm">
<span class="me-1">Add coin</span><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1 6H11M6 1V11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
</svg>
</a>
</div>
</div>

<div class="table-responsive">
<table class="table" id="quick_exchange_coin_table"><thead><tr><th title="Sl" width="30">Sl</th><th title="Coin icon">Coin icon</th><th title="Coin name">Coin name</th><th title="Symbol">Symbol</th><th title="Reserve">Reserve</th><th title="Min txn amount">Min txn amount</th><th title="Status">Status</th><th title="Created at">Created at</th><th title="Action" width="60">Action</th></tr></thead></table>
</div>

</div>
</div>
</div>
<div class="modal fade" id="addQuickExchangeCoin" tabindex="-1" aria-labelledby="addQuickExchangeCoinLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable modal-lg">
<div class="modal-content radius-35">
<div class="modal-header p-4">
<h5 class="modal-title text-color-5 fs-20 fw-medium" id="addCoinModalLabel">Add coin
</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body p-4">
<form action="https://nishuelaravel.bdtask-demo.com/backend/admin/quickexchange" data-insert="https://nishuelaravel.bdtask-demo.com/backend/admin/quickexchange" method="post" class="needs-validation" data="showCallBackData" id="quick_exchange_coin_form" novalidate enctype="multipart/form-data">
<input type="hidden" name="_token" value="wg4G36cOThJoNQEBu6DmGlNtTZKtBuYYQpsofzKm" autocomplete="off"> <div class="row mb-3 g-4">
<div class="col-12 col-lg-6">
<div class="mb-2">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium">Coin name<i class="text-danger">*</i></label>
<input class="custom-form-control bg-transparent " type="text" name="coin_name" id="coin_name" required />
</div>
<div class="mb-2">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium">
Reserve balance<i class="text-danger">*</i></label>
<input class="custom-form-control bg-transparent " type="text" name="reserve_balance" id="reserve_balance" required />
</div>
<div class="mb-2">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium">
Wallet id<i class="text-danger">*</i></label>
<input class="custom-form-control bg-transparent " type="text" name="wallet_id" id="wallet_id" required />
</div>
</div>
<div class="col-12 col-lg-6">
<div class="mb-2">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium">Symbol<i class="text-danger">*</i></label>
<input class="custom-form-control bg-transparent " type="text" name="symbol" id="symbol" required />
</div>
<div class="mb-2">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium">
Min transaction amount<i class="text-danger">*</i></label>
<input class="custom-form-control bg-transparent " type="text" name="min_transaction" id="min_transaction" required />
</div>
<div class="mt-4">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium">Status<i class="text-danger">*</i></label>
<div class="d-flex gap-3">
<div class="form-check">
<input class="form-check-input" type="radio" name="status" id="active_status" value="1" checked>
<label class="form-check-label" for="active_status"> Active
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="status" id="inactive_status" value="0">
<label class="form-check-label" for="inactive_status">
Inactive </label>
</div>
</div>
</div>
</div>
<div class="mt-3 row justify-content-end">
<button class="btn btn-reset w-auto" type="reset">Reset</button>
<button class="btn btn-save ms-3 w-auto actionBtn" type="submit">Create</button>
</div>
</div>
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
<script type="text/javascript">$(function(){window.LaravelDataTables=window.LaravelDataTables||{};window.LaravelDataTables["quick_exchange_coin_table"]=$("#quick_exchange_coin_table").DataTable({"serverSide":true,"processing":true,"ajax":{"url":"https:\/\/nishuelaravel.bdtask-demo.com\/backend\/admin\/quickexchange","type":"GET","data":function(data) {
            for (var i = 0, len = data.columns.length; i < len; i++) {
                if (!data.columns[i].search.value) delete data.columns[i].search;
                if (data.columns[i].searchable === true) delete data.columns[i].searchable;
                if (data.columns[i].orderable === true) delete data.columns[i].orderable;
                if (data.columns[i].data === data.columns[i].name) delete data.columns[i].name;
            }
            delete data.search.regex;}},"columns":[{"data":"DT_RowIndex","name":"DT_RowIndex","title":"Sl","orderable":false,"searchable":false,"width":30,"className":"text-center"},{"data":"logo","name":"logo","title":"Coin icon","orderable":false,"searchable":false,"className":"text-center"},{"data":"coin_name","name":"coin_name","title":"Coin name","orderable":true,"searchable":true},{"data":"symbol","name":"symbol","title":"Symbol","orderable":true,"searchable":true},{"data":"reserve_balance","name":"reserve_balance","title":"Reserve","orderable":false,"searchable":false},{"data":"minimum_tx_amount","name":"minimum_tx_amount","title":"Min txn amount","orderable":false,"searchable":false},{"data":"status","name":"status","title":"Status","orderable":true,"searchable":true},{"data":"created_at","name":"created_at","title":"Created at","orderable":true,"searchable":true},{"data":"action","name":"action","title":"Action","orderable":false,"searchable":false,"width":60,"className":"text-center"}],"order":[[0,"desc"]],"dom":"<'row m-3'<'col-md-4'l><'col-md-4 text-center'B><'col-md-4'f>>rt<'bottom'<'row'<'col-md-6'i><'col-md-6'p>>><'clear'>","responsive":true,"autoWidth":false,"headerCallback":function(thead, data, start, end, display) {
                            $(thead).addClass("bg-primary");
                            $(thead).find("th").addClass("text-white");
                            $("#quick_exchange_coin_table").removeClass("table-striped table-hover");
                        },"buttons":[{"extend":"excel","text":"<i class=\"fa fa-file-excel\"><\/i> Excel","className":"btn btn-success box-shadow--4dp btn-sm-menu"},{"extend":"csv","text":"<i class=\"fa fa-file-csv\"><\/i> CSV","className":"btn btn-success box-shadow--4dp btn-sm-menu"},{"extend":"pdf","text":"<i class=\"fa fa-file-pdf\"><\/i> PDF","className":"btn btn-success box-shadow--4dp btn-sm-menu"},{"extend":"print","text":"<i class=\"fa fa-print\"><\/i> Print","className":"btn btn-success box-shadow--4dp btn-sm-menu","attr":{"target":"_blank"}},{"extend":"reset","text":"<i class=\"fa fa-undo-alt\"><\/i> Reset","className":"btn btn-success box-shadow--4dp btn-sm-menu"}]});});</script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/assets/js/datatables.active.min.js"></script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/module-assets/QuickExchange/js/app.js"></script>

</body>
</html>