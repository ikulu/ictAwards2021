
<?php 

require '../../app/action.php';

function add_or_update_params($url,$key,$value){
    $a = parse_url($url);
    $query = $a['query'] ? $a['query'] : '';
    parse_str($query,$params);
    $params[$key] = $value;
    $query = http_build_query($params);
    $result = '';
    if($a['path']){
        $result .=  $a['path'];
    }
    if($query){
        $result .=  '?' . $query;
    }
    return $result;
}

$url1 = '../../app/action.php?moreConfirm=0';
$more = "Confirm";
$forLink = 0;

    $q = $_GET['q'];
    $sql="SELECT DISTINCT(wapendekezanawapendekezwa.pendekezwaID),wapendekezwa.companyName,wapendekezanawapendekezwa.id FROM wapendekezanawapendekezwa,wapendekezwa WHERE wapendekezwa.id = wapendekezanawapendekezwa.pendekezwaID AND wapendekezanawapendekezwa.status = 'confirmed' AND wapendekezanawapendekezwa.categoriesFK = '$q'";
    // $total = "SELECT sum(cost) AS totalCost FROM matangazo WHERE issueDate BETWEEN '".$q."' AND '".$leo."'";
    // $totalCash = "SELECT sum(cost) AS totalCost FROM matangazo WHERE issueDate BETWEEN '".$q."' AND '".$leo."' AND costType = 'Cash'";
    // $totalBank = "SELECT sum(cost) AS totalCost FROM matangazo WHERE issueDate BETWEEN '".$q."' AND '".$leo."' AND costType = 'Bank'";
    // $totalMobile = "SELECT sum(cost) AS totalCost FROM matangazo WHERE issueDate BETWEEN '".$q."' AND '".$leo."' AND costType = 'Mobile Money'";

    $result = mysqli_query($con,$sql);
    // $result2 = mysqli_query($conn,$total);
    // $result3 = mysqli_query($conn,$totalCash);
    // $result4 = mysqli_query($conn,$totalBank);
    // $result5 = mysqli_query($conn,$totalMobile);

    $cls = 'display table table-hover text-nowrap';
    $cardheader = 'card-header';
    $cardtitle = 'card-title';
    $margin = 'margin-left:90px';
    $card = 'card-body table-responsive p-0';
    // while($row = mysqli_fetch_array($result2)) {
    //   if ($result2->num_rows > 0) {
    //     $cost = $row["totalCost"];
    //   }
    // }
    // while($row = mysqli_fetch_array($result3)) {
    //   if ($result3->num_rows > 0) {
    //     $cash = $row["totalCost"];
    //   }
    // }
    // while($row = mysqli_fetch_array($result4)) {
    //   if ($result4->num_rows > 0) {
    //     $bank = $row["totalCost"];
    //   }
    // }
    // while($row = mysqli_fetch_array($result5)) {
    //   if ($result4->num_rows > 0) {
    //     $mobile = $row["totalCost"];
    //   }
    // }
    
    // echo '<div class="$cardheader">
    // <h3 class="$cardtitle">Ads</h3>';
    // if ($result->num_rows > 0) {
    //   echo "<span style='$margin'>Total Cost : $cost</span>";
    //   // echo '</span><span>/=</span>';
    //   echo "<span style='$margin'>Total Cash : $cash</span>";
    //   // echo '</span><span>/=</span>';
    //   echo "<span style='$margin'>Total Bank : $bank</span>";
    //   // echo '</span><span>/=</span>';
    //   echo "<span style='$margin'>Total Mobile Money : $mobile</span>";
    //   // echo '</span><span>/=</span>';
    // }
    echo '
  </div>
  <!-- /.card-header -->
  <div class="$card">';
    echo "<table class='$cls'>
    <thead>
    ";
    $num = $result->num_rows;
    if ($result->num_rows > 0) {
      echo '<tr>
      <th>No</th>
      <th>Company Name</th>
      <th>Confirm and Notify</th>
      <th>'.$num.'</th>
    </tr>';
    }
    echo "
    </thead>
    <tbody>";
    $NO = 1;
    $link = '';
    
    if ($result->num_rows > 0) {
      while($row = mysqli_fetch_array($result)) {
        $forLink = $row["id"];
        $url = add_or_update_params($url1,'more',$forLink);
        $link = 'href="'.$url.'"';
        $class = 'class="btn btn-primary"type="button" data-toggle="modal" data-target="#exampleModal"';
        echo "<tr><td>" . $NO. "</td><td>". $row["companyName"]."</td><td><button $class>$more</button></td><td>";
        $NO++;
      }
    }else{
      echo '<tr><td>No Company Confirmed for this category yet</td></tr>';
    }
    echo "  </tr>
    </tbody>
  </table>";
?>
<html>
<body>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Confirm</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <p>Are you sure you want to confirm and send email notification to this company?</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <?php echo '<a '.$link.'>Confirm </a>' ?>
            <!-- <button type="button" class="btn btn-primary">Confirm</button> -->
        </div>
        </div>
    </div>
    </div>
</body>
</html>