
<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#create-school">Issue Book</button>

<div class="modal fade" id="create-school" tabindex="-1" role="dialog" aria-labelledby="create-school" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <form method="GET" action="model.php" enctype="multipart/form-data">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class='modal-body'>
                <input type='hidden' name='ui' value='library'>

                <div class='form-group'>
                    <label for='recipient-name' class='form-control-label'> Supplier Name </label>
                    <input type='date' name='supplier-name' value='' placeholder="Name" class='form-control' id='recipient-name'>
                </div>

                <div class='form-group'>
                    <label for='recipient-name' class='form-control-label'> Company/Book Shop</label>
                    <input type='date' name='company' value='' placeholder="Company Name" class='form-control' id='recipient-name'>
                </div>

                <div class='form-group'>
                    <label for='recipient-name' class='form-control-label'> Mobile No#</label>
                    <input type='date' name='mobile' value='' placeholder="Mobile No#" class='form-control' id='recipient-name'>
                </div>

                <div class='form-group'>
                    <label for='recipient-name' class='form-control-label'> Email </label>
                    <input type='date' name='email' value='' placeholder="Email" class='form-control' id='recipient-name'>
                </div>

                <div class='form-group'>
                    <label for='recipient-name' class='form-control-label'> Address </label>
                    <input type='date' name='address' value='' placeholder="Address" class='form-control' id='recipient-name'>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="submit" value="add-issue-book" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
</div>


<div class="row">
    <div class="col-xs-12">

        <div class="clearfix">
            <div class="pull-right tableTools-container"></div>
        </div>
        <div class="table-header">
            Results for "Latest Registered Domains"
        </div>

        <!-- div.table-responsive -->

        <!-- div.dataTables_borderWrap -->
        <div>
            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th class="center">
                        <label class="pos-rel">
                            <input type="checkbox" class="ace" />
                            <span class="lbl"></span>
                        </label>
                    </th>
                    <th>Name</th>
                    <th class="hidden-480">Company</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                
                </tbody>
            </table>
        </div>
    </div>
</div>