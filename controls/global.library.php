<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 16-Nov-17
 * Time: 5:17 AM
 */
//UPDATE `classification` SET `status`='1' WHERE (`cataID`='29') LIMIT 1


function classification_schedules($conn){

    $sql="select * from get_classification";
    $result=$conn->query($sql);
    while ($r=$result->fetch_assoc()){
        $id=$r['cataID'];
        $cata=$r['cata_no'];
        $details=$r['details'];
        $status=$r['status'];
        if ($status == 1){
            $status="Active";
        }else{
            $status="Passive";
        }

        echo"
            <tr>
                 <td>{$id}</td>   
                 <td>{$cata}</td>
                 <td>{$details}</td>
                 <td>{$status}</td>
                 <td><a href='page.php?page=book-list-classification&q={$cata}' class='btn btn-xs btn-default'>view</a> </td>
            </tr>
        ";

    }
}

function get_classification_schedules_list($conn){

    $sql="select * from get_classification WHERE status=1";
    $result=$conn->query($sql);
    while ($r=$result->fetch_assoc()){
        $cata=$r['cata_no'];
        $details=$r['details'];
        echo"<option value='{$cata}'>".$cata." - ".$details."</option>";

    }
}

function get_book_category($conn){

    $sql="select * from get_classification";
    $result=$conn->query($sql);
    while ($r=$result->fetch_assoc()) {

        $cataID = $r['cataID'];
        $cata = $r['cata_no'];
        $details = $r['details'];
        echo "<option value='{$cataID}'>" . $cata . " - " . $details . "</option>";
    }
}

function get_book_details($conn){

    $sql="SELECT * FROM get_book_details";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    echo $totalNum =$row['book_ID'];
}

function get_total_book_issue($conn){

    $sql="SELECT * FROM get_total_book_issue";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    echo $totalNum =$row['total_book'];

}

function get_total_num_books($conn){

    $sql="SELECT *FROM get_total_num_books";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    echo $totalNum =$row['total_books'];
}

function get_cataID($conn){

    $sql="SELECT * FROM get_cataID";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    echo $cataID=$row['total_cataID'];
}

function get_category_details($conn,$q){

    $sql="select * from get_book_category WHERE cata='$q'";
    $result=$conn->query($sql);
    while ($r=$result->fetch_assoc()) {
        $catID=$r['catID'];
        $categoryID=$r['cata'];
        $category = $r['category'];
        $details = $r['details'];

        echo"
            <tr>
                 <td>{$categoryID}</td>   
                 <td>{$category}</td>
                 <td>{$details}</td>
                 <td>
                    <a href='models.php?page=page-data-category&id={$catID}&action=delete' class='btn btn-xs btn-default'>Delete</a> 
                 </td>
            </tr>
        ";
    }
}

function student_name($conn){
    $sql="select * from get_useracct";
    $result=$conn->query($sql);
    while ($r=$result->fetch_assoc()) {
        $userID=$r['UserAcctID'];
        $admissionID=$r['admissionID'];
        $full_name=$r['FullName'];

        echo "<option value='{$userID}'>".$admissionID."#-".$full_name."</option>";
    }

}

function book_list($conn){
    $sql="select * from get_book_list";
    $result=$conn->query($sql);
    while ($r=$result->fetch_assoc()) {
        $bookID=$r['BookID'];
        $call_no=$r['Call_No'];
        $title=$r['Book_Title'];

        echo "<option value='{$bookID}'>".$call_no." # ".$title."</option>";
    }

}
?>