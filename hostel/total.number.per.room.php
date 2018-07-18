<?php
function get_room_list($conn){

    //$yearID =  $_SESSION['academic-year'];

    $sql="SELECT * FROM get_hostel_total_bed";
    $result=$conn->query($sql);
    while ($r=$result->fetch_assoc()){
        
        if (!isset($r['block_name'])){
            $block = "No Block";
        }elseif(!isset($r['room'])){
            $room = "No Room";
        }elseif(!isset($r['bed'])){
            $bed = "No bed";
        }elseif(!isset($r['total_user'])){
            $user = "Empty";
        }elseif(!isset($r['bal_user'])){
            $bal = "Empty";
        }elseif(!isset($r['yearID'])){
            $yearID ="No Academic Year";
        }else{
            $yearID = $r['yearID'];
            $block = $r['block_name'];
            $room = $r['room'];
            $bed = $r['bed'];
            $users = $r['total_user'];
            if ($r['bal_user'] == 0){
                $bal = "complete";
            }else{
                 $bal = $r['bal_user']. " user(s) left";
            }
           
        }
        
        echo "
            <tr>
                    <td class='center'>
                        <label class='pos-rel'>
                            <input type='checkbox' class='ace' />
                            <span class='lbl'></span>
                        </label>
                    </td>

                    <td>
                        {$yearID}
                    </td>
                    <td>{$block} - {$room}</td>
                    <td class='hidden-480'>{$bed}</td>
                    <td>{$users}</td>

                    <td class='hidden-480'>
                        {$bal}
                    </td>

                    <td>
                        <div class='hidden-sm hidden-xs action-buttons'>
                            <a class='blue' href='hostel.php?page=edit-hostel-rental&token={$_SESSION['user-token']}&id={$r['roomID'] }&box=1&msg=1'>
                                <i class='ace-icon fa fa-search-plus bigger-130'></i>
                            </a>

                            <a class='green' href='model.php?ui=hostel&submit=status-rental&token={$_SESSION['user-token']}&id={$r['roomID']}&box=1&msg=1'>
                                <i class='ace-icon fa fa-flag bigger-130'></i>
                            </a>

                            <a class='red' href='model.php?ui=hostel&submit=del-rental&token={$_SESSION['user-token']}&id={$r['roomID'] }&box=1&msg=1'>
                                <i class='ace-icon fa fa-trash-o bigger-130'></i>
                            </a>
                        </div>                   
                    </td>
                </tr>
        ";
    }
}
?>

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
                    <th>Academic Year</th>
                    <th class="hidden-480">Room Label</th>
                    <th>Total Bed(s)</th>
                    <th>User(s)</th>
                    <th>Bed(s) Left</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                <?php  get_room_list($conn);?>
                </tbody>
            </table>
        </div>
    </div>
</div>