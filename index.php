<?php  
session_start();
require "db.inc.php";

$mydate = getdate(date('U'));
$date = "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";

$sqlr = $conn->query("SELECT id FROM rate");
$numR = $sqlr->num_rows;


$sqlr = $conn->query("SELECT SUM(userReview) AS total FROM rate");
$rData = $sqlr->fetch_array();
$total = $rData['total'];

$avg = '';
if($numR != 0) {
    if(is_nan(round(($total / $numR), 1))) {
        $avg = 0;
    }
    else {
        $avg = round(($total / $numR), 1);
    }
}
else {
    $avg = 0;
}
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://kit.fontawesome.com/1936634b09.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
        <script src="script.js"></script>
        <link rel="stylesheet" href="style.css" />
        <title>Custom rating system for Houtbay App</title>
    </head>
    <body>
        <div class="container">
            <section class="rating-review" id="ratingSection" >
                <div class="tri table-flex">
                    <table>
                        <tbody>
                            <tr>
                                <!-- First table data -->
                                <td>
                                    <div class="rnb rvl">
                                        <h3><?php echo $avg; ?>/5.0</h3>
                                    </div>
                                    <div class="pdt-rate">
                                        <div class="pro-rating">
                                            <div class="clearfix rating marT8">
                                                <div class="rating-stars">
                                                    <div class="grey-stars"></div>
                                                    <div class="filled-stars" style="width:<?php echo ($avg * 20) ?>%"></div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rnrn">
                                        <p class="rars"> <?php if($numR == 0){echo "No";}else{echo $numR;}; ?> Reviews</p>
                                    </div>
                                </td>

                                <!-- Second table data -->
                                <td>
                                    <div class="rpb">

                                        <div class="rnpb">
                                            <label> 5 <i class="fa fa-star" ></i>  </label>
                                            <div class="ropb">
                                                <div class="ripb" style="width:40%"></div>
                                            </div>
                                            <label>(2)</label>
                                        </div>

                                        <div class="rnpb">
                                            <label for=""> 4<i class="fa fa-star"></i> </label>
                                            <div class="ropb">
                                                <div class="ripb" style="width:60%"></div>
                                            </div>
                                            <label>(3)</label>
                                        </div>

                                        <div class="rnpb">
                                            <label for=""> 3 <i class="fa fa-star" ></i> </label>
                                            <div class="ropb">
                                                <div class="ripb" style="width:20%"></div>
                                            </div>
                                            <label>(1)</label>
                                        </div>

                                        <div class="rnpb">
                                            <label for=""> 2 <i class="fa fa-star" ></i> </label>
                                            <div class="ropb">
                                                <div class="ripb" style="width:20%"></div>
                                            </div>
                                            <label>(1)</label>
                                        </div>

                                        <div class="rnpb">
                                            <label for=""> 1 <i class="fa fa-star" ></i>     </label>
                                            <div class="ropb">
                                                <div class="ripb" style="width:80%"></div>
                                            </div>
                                            <label>(4)</label>
                                        </div>
                                        
                                    </div>
                                </td>
                                <!-- Third table data -->
                                <td>
                                    <div class="rrb">
                                        <p>Please Review This Applicant</p>
                                        <button class="rbtn opmd">Add Review</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <div class="review-modal" style="display:none">
                        <div class="review-bg"></div>
                        <div class="rmp">

                            <div class="rpc">
                                <span>
                                    <i class="fa fa-times" ></i>
                                </span>
                            </div>
                            <div class="rps" align="center">
                                <i class="fa fa-star" data-index="0" style="display: none;" ></i>
                                <i class="fa fa-star" data-index="1"></i>
                                <i class="fa fa-star" data-index="2"></i>
                                <i class="fa fa-star" data-index="3"></i>
                                <i class="fa fa-star" data-index="4"></i>
                                <i class="fa fa-star" data-index="5"></i>
                            </div>
                            <input type="hidden" value="" class="starRateV" />
                            <input type="hidden" value="<?php echo $date ?>" class="rateDate" />

                            <div class="rptf" align="center">
                                <input type="text" class="raterName" placeholder="Enter your name..." />
                            </div>

                            <div class="rptf" align="center">
                                <textarea name="" id="" class="rateMsg" placeholder="Describe your experience with this Applicant" cols="30" rows="10"></textarea>
                            </div>
                            <div class="rate-rror" align="center"></div>
                            <div class="rpsb" align="center">
                                <button class="rpbtn">Post Review</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bri">
                    <div class="uscm">

                    <?php
                        $sqlp = "SELECT * FROM rate";
                        $resultp = $conn -> query($sqlp);
                        if(mysqli_num_rows($resultp) > 0) {
                            while($row = $resultp -> fetch_assoc()) {
                       ?>

                        <div class="uscm-secs">

                            <div class="us-img">
                                <p><?= substr($row['userName'], 0, 1); ?></p>
                            </div>

                            <div class="uscms">
                                <div class="us-rate">
                                    <div class="pdt-rate">
                                        <div class="pro-rating">
                                            <div class="clearfix rating marT8">
                                                <div class="rating-stars">
                                                    <div class="grey-stars"> </div>
                                                    <div class="filled-stars" style="width: <?= $row['userReview'] * 20 ?>%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="us-cmt">
                                    <p><?= $row['userMessage'] ?></p>
                                </div>
                                <div class="us-nm">
                                    <p>
                                        <i>By
                                            <span class="cmnm"><?= $row['userName'] ?></span> on
                                            <span class="cmdt"> <?= $row['dateReviewed'] ?></span>
                                        </i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php 
                                }
                            }

                            ?>

                    </div>
                </div>
            </section>
        </div>
       
    </body>
</html>
