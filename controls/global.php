<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 06-Mar-18
 * Time: 5:44 AM
 *
 */

function logout (){
    require header("location: index.php");
}
function generate_academic_session(){

    $date = date("Y");
    $prev_date =  $date - 1;

    return $prev_date."/".$date;
}

function cmb_day_list($conn){
    $sql='SELECT * FROM `get_day_list`';
    $result=$conn->query($sql);
    while ($r=$result->fetch_assoc()){
        echo"<option value='{$r['dayID']}'>{$r['day_type']}</option>";
    }
}



function cmb_gender_status($conn){

    $sql='SELECT * FROM `get_gender`';
    $result=$conn->query($sql);
    while ($r=$result->fetch_assoc()){
        echo"<option value='{$r['genderID']}'>{$r['gender_type']}</option>";
    }
}

function cmb_marital_status($conn){
    $sql='SELECT * FROM `get_category_list` WHERE classificationID = 3';
    $result=$conn->query($sql);
    while ($r=$result->fetch_assoc()){
        echo"<option value='{$r['categoryID']}'>{$r['category_name']}</option>";
    }

}

function cmb_staff_category($conn){

    $sql="SELECT * FROM category_list WHERE classificationID = 2";
    $result=$conn->query($sql);
    while ($r=$result->fetch_assoc()){
        echo"<option value='{$r['categoryID']}'>{$r['category_name']}</option>";
    }
}

function cmb_working_status($conn){

    $sql="SELECT * FROM category_list WHERE classificationID = 5";
    $result=$conn->query($sql);
    while ($r=$result->fetch_assoc()){
        echo"<option value='{$r['categoryID']}'>{$r['category_name']}</option>";
    }
}

function cmb_staff_status($conn){
    //Terminated

    $sql="SELECT * FROM category_list WHERE classificationID = 4";
    $result=$conn->query($sql);
    while ($r=$result->fetch_assoc()){
        echo"<option value='{$r['categoryID']}'>{$r['category_name']}</option>";
    }
}
function Staff_access($conn){

    $access = $_GET['ui'];
    $user = "select * from get_staff_profile_summary WHERE access='$access'";
    $result = $conn->query($user);
    $u = $result->fetch_assoc();

    return $u['staff_profile_ID'];
}
function cmb_access_id($conn){

    $user = "select * from get_position";
    $result = $conn->query($user);
    while ($u = $result->fetch_assoc()){

        $positionID = $u['positionID'];
        $positionID =md5($positionID);
        echo "<option value='{$positionID}'>{$u['position']}</option>";
    }

}

function cmb_school_data($conn){

    $sql='SELECT * FROM `get_school`';
    $result=$conn->query($sql);
    while ($r=$result->fetch_assoc()){
        echo"<option value='{$r['schoolID']}'>{$r['school']}</option>";
    }
}

function cmb_administration_data($conn){

    $sql='SELECT * FROM `get_school` WHERE catID = 2';
    $result=$conn->query($sql);
    while ($r=$result->fetch_assoc()){
        echo"<option value='{$r['schoolID']}'>{$r['school']}</option>";
    }
}

function cmb_programme_data($conn){

    $sql='SELECT * FROM `get_programme`';
    $result=$conn->query($sql);
    while ($r=$result->fetch_assoc()){
        echo"<option value='{$r['progID']}'>{$r['programme']}</option>";
    }
}

function cmd_course_list($conn){

    $sql='SELECT * FROM `get_course`';
    $result=$conn->query($sql);
    while ($r=$result->fetch_assoc()){
        echo"<option value='{$r['courseID']}'>{$r['course']}/{$r['prefix']}/{$r['programme']}</option>";
    }
}

function cmb_course($conn){

    $sql='SELECT * FROM `get_course`';
    $result=$conn->query($sql);
    while ($r=$result->fetch_assoc()){
        echo"<option value='{$r['courseID']}'>{$r['course']}</option>";
    }
}

function cmb_academic_session($conn){
    //get_academic_session
    $sql='SELECT * FROM `get_academic_session`';
    $result=$conn->query($sql);
    while ($r=$result->fetch_assoc()){
        echo"<option value='{$r['year']}'>{$r['year']}</option>";
    }
}

function student_category($conn){

    $sql='SELECT * FROM `get_student_index_list`';
    $result=$conn->query($sql);
    while ($r=$result->fetch_assoc()){

    }
}

function cmb_nationality($conn){

    $sql="select * from get_countries";
    $result = $conn->query($sql);
    while($r=$result->fetch_assoc()){
        echo"<option value='{$r['countryID']}'>{$r['nationality']}</option>";
    }
}

function position($conn){

    $sql="select * from get_position";
    $result = $conn->query($sql);
    while($r=$result->fetch_assoc()){
        echo"<option value='{$r['positionID']}'>{$r['position']}</option>";
    }
}

function department($conn){

    $sql="select * from get_department";
    $result = $conn->query($sql);
    while($r=$result->fetch_assoc()){
        echo"<option value='{$r['departID']}'>{$r['department']}</option>";
    }
}

function stock_list($conn){
    //get_stock_list

    $sql="select * from get_stock_list";
    $result = $conn->query($sql);
    while($r=$result->fetch_assoc()){
        echo"<option value='{$r['stockID']}'>{$r['stock']}</option>";
    }

}

function student_index_list($conn){
    //get_stock_list

    $sql="select * from get_student_index_list";
    $result = $conn->query($sql);
    while($r=$result->fetch_assoc()){
        if (empty($r['admissionNo'])){
            $admission = "No Index Number";
        }else{
            $admission = $r['admissionNo'];
        }
        echo"<option value='{$r['studentID']}'>{$admission} - {$r['first_name']} {$r['surname']}</option>";
    }

}

function hostel_block_list($conn){
    //get_stock_list

    $sql="select * from get_hostel_block";
    $result = $conn->query($sql);
    while($r=$result->fetch_assoc()){
        echo"<option value='{$r['blockID']}'>{$r['block_name']}</option>";
    }

}

function get_list_semester($conn){
    //get_list_semester

    $sql="select * from get_list_semester";
    $result = $conn->query($sql);
    while($r=$result->fetch_assoc()){
        echo"<option value='{$r['semesterID']}'>{$r['semester']}</option>";
    }
}

function get_staff_lecturer($conn){

    $sql="select * from get_staff_lecture";
    $result = $conn->query($sql);
    while($r=$result->fetch_assoc()){
        echo"<option value='{$r['staff_profile_ID']}'>{$r['f_name']} {$r['l_name']}</option>";
    }
}