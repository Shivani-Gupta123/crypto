<?php include('header.php') ?>

<div class="body-content">
<div class="body-content">
<div class="row gy-4">
<div class="col-12">
<div class="card py-4 px-3 radius-15">
<div class="d-flex flex-column flex-lg-row gap-3 justify-content-between align-items-center mb-3">
<ul class="nav nav-pills transaction-tab" id="pills-tab" role="tablist">
<li class="nav-item allTab" data-route="https://nishuelaravel.bdtask-demo.com/backend/admin/merchant-transactions-count/all" data-si="all" onclick="statusWisePaymentTransaction
            (this,
            'all')">
<a class="nav-link active" aria-selected="true">All Transaction
(<span class="totalCount">10</span>)</a>
</li>
<li class="nav-item allTab" data-route="https://nishuelaravel.bdtask-demo.com/backend/admin/merchant-transactions-count/2" data-si="pending" onclick="statusWisePaymentTransaction
            (this,
            'pending')">
<a class="default-cursor nav-link" aria-selected="false">Pending
<span class="text-warning">
(<span class="totalPending">3</span>)
</span>
</a>
</li>
<li class="nav-item allTab" data-route="https://nishuelaravel.bdtask-demo.com/backend/admin/merchant-transactions-count/1" data-si="confirm" onclick="statusWisePaymentTransaction
            (this,
            'confirm')">
<a class="default-cursor nav-link" aria-selected="false">Confirmed
<span class="text-success">
(<span class="totalComplete">5 </span>)
</span>
</a>
</li>
<li class="nav-item allTab" data-route="https://nishuelaravel.bdtask-demo.com/backend/admin/merchant-transactions-count/3" data-si="canceled" onclick="statusWisePaymentTransaction
            (this,
            'cancel')">
<a class="default-cursor nav-link" aria-selected="false">Cancel
<span class="text-danger">
(<span class="totalCanceled">2</span>)
</span>
</a>
</li>
</ul>
</div>
<div class="tab-content" id="pills-tabContent">
<div class="tab-pane fade show active" id="pills-subscription" role="tabpanel" aria-labelledby="pills-transactions-tab">

<div class="table-responsive">
<table class="table" id="merchant-payment-info-table"><thead><tr><th title="Sl" width="30">Sl</th><th title="User">User</th><th title="Customer">Customer</th><th title="Coin">Coin</th><th title="Method">Method</th><th title="Address">Address</th><th title="Amount">Amount</th><th title="Received amount">Received amount</th><th title="Created">Created</th><th title="Status">Status</th><th title="Action" width="60">Action</th></tr></thead></table>
</div>

</div>
<div class="tab-pane fade" id="pills-complete" role="tabpanel" aria-labelledby="pills-complete-tab">
</div>
<div class="tab-pane fade" id="pills-pending" role="tabpanel" aria-labelledby="pills-pending-tab">
</div>
<div class="tab-pane fade" id="pills-canceled" role="tabpanel" aria-labelledby="pills-canceled-tab">
</div>
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
<script type="text/javascript">$(function(){window.LaravelDataTables=window.LaravelDataTables||{};window.LaravelDataTables["merchant-payment-info-table"]=$("#merchant-payment-info-table").DataTable({"serverSide":true,"processing":true,"ajax":{"url":"https:\/\/nishuelaravel.bdtask-demo.com\/backend\/admin\/merchant-transactions","type":"GET","data":function(data) {
            for (var i = 0, len = data.columns.length; i < len; i++) {
                if (!data.columns[i].search.value) delete data.columns[i].search;
                if (data.columns[i].searchable === true) delete data.columns[i].searchable;
                if (data.columns[i].orderable === true) delete data.columns[i].orderable;
                if (data.columns[i].data === data.columns[i].name) delete data.columns[i].name;
            }
            delete data.search.regex;}},"columns":[{"data":"DT_RowIndex","name":"DT_RowIndex","title":"Sl","orderable":false,"searchable":false,"width":30,"className":"text-center"},{"data":"merchant_customer_info_id","name":"merchant_customer_info_id","title":"User","orderable":true,"searchable":true},{"data":"merchant_account_id","name":"merchant_account_id","title":"Customer","orderable":true,"searchable":true},{"data":"merchant_accepted_coin","name":"merchant_accepted_coin","title":"Coin","orderable":true,"searchable":true},{"data":"payment_gateway_id","name":"payment_gateway_id","title":"Method","orderable":true,"searchable":true},{"data":"transaction_hash","name":"transaction_hash","title":"Address","orderable":true,"searchable":true},{"data":"amount","name":"amount","title":"Amount","orderable":false,"searchable":false},{"data":"received_amount","name":"received_amount","title":"Received amount","orderable":false,"searchable":false},{"data":"created_at","name":"created_at","title":"Created","orderable":true,"searchable":true},{"data":"status","name":"status","title":"Status","orderable":true,"searchable":true,"className":"text-center"},{"data":"action","name":"action","title":"Action","orderable":false,"searchable":false,"width":60,"className":"text-center"}],"order":[[0,"desc"]],"dom":"<'row m-3'<'col-md-4'l><'col-md-4 text-center'B><'col-md-4'f>>rt<'bottom'<'row'<'col-md-6'i><'col-md-6'p>>><'clear'>","responsive":true,"autoWidth":false,"headerCallback":function(thead, data, start, end, display) {
                            $(thead).addClass("bg-primary");
                            $(thead).find("th").addClass("text-white");
                            $("#merchant-payment-info-table").removeClass("table-striped table-hover");
                        },"buttons":[{"extend":"excel","text":"<i class=\"fa fa-file-excel\"><\/i> Excel","className":"btn btn-success box-shadow--4dp btn-sm-menu"},{"extend":"csv","text":"<i class=\"fa fa-file-csv\"><\/i> CSV","className":"btn btn-success box-shadow--4dp btn-sm-menu"},{"extend":"pdf","text":"<i class=\"fa fa-file-pdf\"><\/i> PDF","className":"btn btn-success box-shadow--4dp btn-sm-menu"},{"extend":"print","text":"<i class=\"fa fa-print\"><\/i> Print","className":"btn btn-success box-shadow--4dp btn-sm-menu","attr":{"target":"_blank"}},{"extend":"reset","text":"<i class=\"fa fa-undo-alt\"><\/i> Reset","className":"btn btn-success box-shadow--4dp btn-sm-menu"}]});});</script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/assets/js/datatables.active.min.js"></script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/module-assets/Merchant/js/paymentInfo.js?v=1"></script>

</body>
</html>