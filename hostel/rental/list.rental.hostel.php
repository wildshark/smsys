<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 20-Jun-18
 * Time: 3:26 PM
 */

function get_hostel_rental_details($conn){

    $sql='SELECT * FROM get_hostel_rental';
    $result=$conn->query($sql);
    while ($r=$result->fetch_assoc()){

        echo "
            <tr>
                    <td class='center'>
                        <label class='pos-rel'>
                            <input type='checkbox' class='ace' />
                            <span class='lbl'></span>
                        </label>
                    </td>

                    <td>
                        {$r['tranDate']}
                    </td>
                    <td>{$r['church_name']}</td>
                    <td class='hidden-480'>{$r['start_date']}</td>
                    <td>{$r['end_date']}</td>

                    <td class='hidden-480'>
                        {$r['NoOfDays']}
                    </td>

                    <td>
                        <div class='hidden-sm hidden-xs action-buttons'>
                            <a class='blue' href='hostel.php?page=edit-hostel-rental&id={$r['rentalID'] }&box=1&msg=1'>
                                <i class='ace-icon fa fa-search-plus bigger-130'></i>
                            </a>

                            <a class='green' href='model.php?ui=hostel&submit=status-rental&id={$r['rentalID']}&days={$r['NoOfDays']}'>
                                <i class='ace-icon fa fa-flag bigger-130'></i>
                            </a>

                            <a class='red' href='model.php?ui=hostel&submit=del-rental&id={$r['rentalID'] }&box=1&msg=1'>
                                <i class='ace-icon fa fa-trash-o bigger-130'></i>
                            </a>
                        </div>                   
                    </td>
                </tr>
        ";
    }
}
?>

<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal">New Rental Booking</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" action="model.php">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="ui" value="hostel">

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Date:</label>
                        <input type="date" name="date" class="form-control" id="recipient-name">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Name Of Group:</label>
                        <input type="text" name="name-of-group" class="form-control" id="recipient-name">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Contact Address:</label>
                        <input type="text" name="contact-address" class="form-control" id="recipient-name">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Mobile 1:</label>
                        <input type="text" name="mobile-1" class="form-control" id="recipient-name">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Mobile 2:</label>
                        <input type="text" name="mobile-2" class="form-control" id="recipient-name">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Type of rental need:</label>
                        <select name="rental-type" class="form-control" id="recipient-name">
                            <?php get_rental_list($conn);?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Population:</label>
                        <input type="number" name="population" class="form-control" id="recipient-name">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Ref. Number:</label>
                        <input type="text" name="ref-number" value="<?php echo 'H'.date("dYm")?>" class="form-control" id="recipient-name">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Bill Amount:</label>
                        <input type="number" name="bill-amount" class="form-control" id="recipient-name">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Discount:</label>
                        <input type="number" name="discount" class="form-control" id="recipient-name">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Date of arrival:</label>
                        <input type="date" name="start-date" class="form-control" id="recipient-name">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Date of departure:</label>
                        <input type="date" name="end-date" class="form-control" id="recipient-name">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" value="add-rental" class="btn btn-primary">Submit</button>
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
                    <th>Date</th>
                    <th class="hidden-480">Name of Group</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Day(s) Left</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                <?php get_hostel_rental_details($conn);?>
                </tbody>
            </table>
        </div>
    </div>
</div>

