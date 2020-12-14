<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/1936634b09.js" crossorigin="anonymous"></script>
        <script src="script.js"></script>
        <link rel="stylesheet" href="style.css" />
        <title>Custom rating system for Houtbay App</title>
    </head>
    <body>
        <div class="container">
            <div class="rating-review">
                <div class="tri table-flex">
                    <table class="table table-light">
                        <tbody>
                            <tr>
                                <!-- First table data -->
                                <td>
                                    <div class="rnb rvl">
                                        <h3>1.5/5.0</h3>
                                    </div>
                                    <div class="pdt-rate">
                                        <div class="pro-rating">
                                            <div class="clearfix rating mart8">
                                                <div class="rating-stars">
                                                    <div class="grey-stars"></div>
                                                    <div class="filled-stars" style="width: 60%;"></div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rnrn">
                                        <p class="rars">No Reviews</p>
                                    </div>
                                </td>

                                <!-- Second table data -->
                                <td>
                                    <div class="rpb">

                                        <div class="rnpb">
                                            <label> 5 <i class="fa fa-star" ></i>  </label>
                                            <div class="ropb">
                                                <div class="ripd" style="width: 20%;"></div>
                                            </div>
                                            <div class="label">(1)</div>
                                        </div>

                                        <div class="rnpb">
                                            <label for=""> 4<i class="fa fa-star"></i> </label>
                                            <div class="ropb">
                                                <div class="ripd" style="width: 50%;"></div>
                                            </div>
                                            <div class="label">(1)</div>
                                        </div>

                                        <div class="rnpb">
                                            <label for=""> 3 <i class="fa fa-star" ></i> </label>
                                            <div class="ropb">
                                                <div class="ripd" style="width: 80%;"></div>
                                            </div>
                                            <div class="label">(15)</div>
                                        </div>

                                        <div class="rnpb">
                                            <label for=""> 2 <i class="fa fa-star" ></i> </label>
                                            <div class="ropb">
                                                <div class="ripd" style="width: 30%;"></div>
                                            </div>
                                            <div class="label">(11)</div>
                                        </div>

                                        <div class="rnpb">
                                            <label for=""> 1 <i class="fa fa-star" aria-hidden="true"></i>     </label>
                                            <div class="ropb">
                                                <div class="ripd" style="width: 40%;"></div>
                                            </div>
                                            <div class="label">(13)</div>
                                        </div>
                                        
                                    </div>
                                </td>
                                <td>
                                    <div class="rrb">
                                        <p>Please Review This Applicant</p>
                                        <button class="rbtn opmd">Add Review</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="review-model" style="display:none">
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
                            <input type="hidden" value="" class="rateDate" />
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
                        <div class="uscm-secs">

                            <div class="us-img">
                                <p>B</p>
                            </div>

                            <div class="uscms">
                                <div class="us-rate">
                                    <div class="pdt-rate">
                                        <div class="pro-rating">
                                            <div class="clearfix rating mart8">
                                                <div class="rating-stars">
                                                    <div class="grey-stars"> </div>
                                                    <div class="filled-stars" style="width: 60%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="us-cmt">
                                    <p>He is the best gardener</p>
                                </div>
                                <div class="us-rm">
                                    <p>
                                        <i>
                                            <span class="cmnm">Bright</span> on
                                            <span class="cmdt"> 23 december, 2020</span>
                                        </i>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
