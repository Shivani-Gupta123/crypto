<?php include('header.php') ?>

<div class="body-content">
<div class="row gy-4">
<div class="col-12">
<div class="card py-4 px-3 radius-15">
<div class="d-flex flex-column flex-lg-row gap-3 justify-content-between align-items-center mb-3">
<h3 class="fs-24 mb-0 text-color-2 fw-medium lh-1">Withdraw pending</h3>
</div>

<div class="table-responsive">
<table class="table" id="b2x-loan-pending-withdraw-table"><thead><tr><th title="Sl" width="30">Sl</th><th title="Date">Date</th><th title="Name">Name</th><th title="Package">Package</th><th title="Interest(%)">Interest(%)</th><th title="Loan amount">Loan amount</th><th title="Hold amount">Hold amount</th><th title="Installment">Installment</th><th title="Paid instl">Paid instl</th><th title="Remain instl">Remain instl</th><th title="Loan status">Loan status</th><th title="Withdraw status">Withdraw status</th><th title="Action" width="60">Action</th></tr></thead></table>
</div>

</div>
</div>
</div>
<div class="modal fade" id="userInfo" tabindex="-1" aria-labelledby="userInfoLabel" aria-hidden="true">
<div class="modal-dialog modal-md">
<div class="modal-content radius-35">
<div class="modal-header p-4">
<h5 class="modal-title text-color-5 fs-20 fw-medium" id="modelLabel">User profile</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body p-4">
<table>
<tbody>
<tr>
<th>Name</th>
<td class="px-2">:</td>
<td id="name"></td>
</tr>
<tr>
<th>Email</th>
<td class="px-2">:</td>
<td id="email"></td>
</tr>
<tr>
<th>Mobile</th>
<td class="px-2">:</td>
<td id="phone"></td>
</tr>
<tr>
<th>User id</th>
<td class="px-2">:</td>
<td id="user_id"></td>
</tr>
</tbody>
</table>
<span class="payoutInfo"></span>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
<div class="modal fade" id="confirmation_message" tabindex="-1" aria-labelledby="userInfoLabel" aria-hidden="true">
<div class="modal-dialog modal-md">
<div class="modal-content radius-35">
<div class="modal-header p-4">
<h5 class="modal-title text-color-5 fs-20 fw-medium" id="modelLabel">Notes</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body p-4">
<form action method="post" class="needs-validation" data="showCallBackData" id="b2x-loan-confirm-form" novalidate enctype="multipart/form-data">
<input type="hidden" name="_method" value="put"> <input type="hidden" name="_token" value="wg4G36cOThJoNQEBu6DmGlNtTZKtBuYYQpsofzKm" autocomplete="off"> <div class="row mb-3 g-4">
<div class="col-12">
<div class="row">
<div class="col-12 col-lg-12">
<div class="mb-2">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium" for="checker_note">Note <span class="text-danger">*</span></label>
<textarea name="checker_note" id="checker_note" class="custom-form-control
                                        bg-transparent " placeholder="Notes" required></textarea>
<div class="invalid-feedback" role="alert">
</div>
</div>
</div>
</div>
</div>
<div class="col-12 d-lg-flex flex-lg-column justify-content-lg-end">
<div class="d-flex justify-content-end">
<button class="btn btn-reset w-auto resetBtn" type="button"><i class="fa
                                    fa-undo-alt"></i> Reset
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
<script type="text/javascript">$(function(){window.LaravelDataTables=window.LaravelDataTables||{};window.LaravelDataTables["b2x-loan-pending-withdraw-table"]=$("#b2x-loan-pending-withdraw-table").DataTable({"serverSide":true,"processing":true,"ajax":{"url":"https:\/\/nishuelaravel.bdtask-demo.com\/backend\/admin\/b2x-loans-pending-withdraw","type":"GET","data":function(data) {
            for (var i = 0, len = data.columns.length; i < len; i++) {
                if (!data.columns[i].search.value) delete data.columns[i].search;
                if (data.columns[i].searchable === true) delete data.columns[i].searchable;
                if (data.columns[i].orderable === true) delete data.columns[i].orderable;
                if (data.columns[i].data === data.columns[i].name) delete data.columns[i].name;
            }
            delete data.search.regex;}},"columns":[{"data":"DT_RowIndex","name":"DT_RowIndex","title":"Sl","orderable":false,"searchable":false,"width":30,"className":"text-center"},{"data":"created_at","name":"created_at","title":"Date","orderable":true,"searchable":true},{"data":"customer_id","name":"customer_id","title":"Name","orderable":true,"searchable":true},{"data":"b2x_loan_package_id","name":"b2x_loan_package_id","title":"Package","orderable":true,"searchable":true},{"data":"interest_percent","name":"interest_percent","title":"Interest(%)","orderable":true,"searchable":true},{"data":"loan_amount","name":"loan_amount","title":"Loan amount","orderable":true,"searchable":true},{"data":"hold_btc_amount","name":"hold_btc_amount","title":"Hold amount","orderable":true,"searchable":true},{"data":"installment_amount","name":"installment_amount","title":"Installment","orderable":true,"searchable":true},{"data":"paid_installment","name":"paid_installment","title":"Paid instl","orderable":true,"searchable":true},{"data":"remaining_installment","name":"remaining_installment","title":"Remain instl","orderable":true,"searchable":true},{"data":"status","name":"status","title":"Loan status","orderable":true,"searchable":true},{"data":"withdraw_status","name":"withdraw_status","title":"Withdraw status","orderable":true,"searchable":true},{"data":"action","name":"action","title":"Action","orderable":false,"searchable":false,"width":60,"className":"text-center"}],"order":[[0,"desc"]],"dom":"<'row m-3'<'col-md-4'l><'col-md-4 text-center'B><'col-md-4'f>>rt<'bottom'<'row'<'col-md-6'i><'col-md-6'p>>><'clear'>","responsive":true,"autoWidth":false,"headerCallback":function(thead, data, start, end, display) {
                            $(thead).addClass("bg-primary");
                            $(thead).find("th").addClass("text-white");
                            $("#b2x-loan-pending-withdraw-table").removeClass("table-striped table-hover");
                        },"buttons":[{"extend":"excel","text":"<i class=\"fa fa-file-excel\"><\/i> Excel","className":"btn btn-success box-shadow--4dp btn-sm-menu"},{"extend":"csv","text":"<i class=\"fa fa-file-csv\"><\/i> CSV","className":"btn btn-success box-shadow--4dp btn-sm-menu"},{"extend":"pdf","text":"<i class=\"fa fa-file-pdf\"><\/i> PDF","className":"btn btn-success box-shadow--4dp btn-sm-menu"},{"extend":"print","text":"<i class=\"fa fa-print\"><\/i> Print","className":"btn btn-success box-shadow--4dp btn-sm-menu","attr":{"target":"_blank"}},{"extend":"reset","text":"<i class=\"fa fa-undo-alt\"><\/i> Reset","className":"btn btn-success box-shadow--4dp btn-sm-menu"}]});});</script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/assets/js/datatables.active.min.js"></script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/module-assets/B2xloan/js/b2xloan.js"></script>

</body>
</html>