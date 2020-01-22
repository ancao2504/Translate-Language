<?php  date_default_timezone_set('Asia/Ho_Chi_Minh'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tra cứu từ điển</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="img/globe-2x.png">
        <link rel="stylesheet" href="CSS/styles.css">           
        <link rel="stylesheet" href="CSS/dictionary.css">           
        <link href="CSS/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <link rel="stylesheet" href="CSS/font-awesome.min.css">
        <script src="JS/jquery-1.12.4.js"></script>
        <script src="JS/jquery-ui.js"></script>
        <script src="JS//bootstrap.min.js" crossorigin="anonymous"></script>
        <script src="JS/loadAjax.js"></script>
    </head>
<body >
<!-- BODY -->
<div class="main-translate">
    <div class="container">
        <div class="page-header">
            <h1>TRA CỨU TỪ ĐIỂN ONLINE</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel with-nav-tabs panel-primary">
                    <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1primary" data-toggle="tab">Tra từ online</a></li>
                            <li><a href="#tab2primary" data-toggle="tab">Dịch đoạn văn bản</a></li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab1primary">
                                <div class="text-center">
                                    <div class="icon-dictionary">
                                        <img src="img/image.png" alt="Forest">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 input-enter-word">
                                        <input class="form-control input_box" id="wordEV" type="text" placeholder=" Nhập từ khóa cần tìm" required/>
                                        <input class="form-control input_box hidden" id="wordVE" type="text" placeholder=" Nhập từ khóa cần tìm" required/>
                                        <input class="form-control input_box hidden" id="wordVV" type="text" placeholder=" Nhập từ khóa cần tìm" required/>
                                    </div>
                                    <div class="col-md-3 select-dictionary-parent">
                                        <select class="form-control" id="dictionary" name="dictionary">
                                            <option value="EV" >Anh - Việt</option>
                                            <option value="VE" >Việt - Anh</option>
                                            <option value="VV" >Việt - Việt</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 button-search-word">
                                        <button class="btn btn-warning" type="submit" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>Tìm kiếm</button>
                                    </div>
                                    <!-- print result -->
                                    <div class="result-dictionary" id="result"></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab2primary">
                                <div class="col-md-6 mobile-translate">
                                    <textarea rows="10" class="col-md-12 textarea-padding-10" name="word" id="word" placeholder="Nội dung cần dịch"></textarea>  
                                </div>

                                <div class="col-md-6 mobile-translate padding-top-10-target">
                                    <textarea rows="10" class="col-md-12 textarea-padding-10" id="result-target"></textarea>
                                </div>
                                <div class="col-md-6 div-translate mobile-translate">
                                    <div class="col-md-4 select-source">
                                        <select name="source" id="source" class="form-control">
                                            <option selected value="en">English</option>
                                            <option value="vi">Vietnamese</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 swap-button">
                                        <div id="SwapButton" onclick="swap();">
                                            <i class="fa fa-exchange" aria-hidden="true"></i>
                                        </div>
                                       
                                    </div>
                                     <div class="col-md-3 select-target">
                                        <select name="target" id="target" class="form-control">
                                            <option value="en">English</option>
                                            <option selected value="vi">Vietnamese</option>
                                        </select>
                                    </div>
                                    <button class="btn btn-primary button-translate">Translate</button> 
                                </div>
                            </div>
                        </div>                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>            
    <!-- END BODY -->
    <!--FOOTER-->
    <footer class="container-fluid text-center starter-template">    
        <p><span class="footer-tody">Hôm nay là ngày <?php echo date('Y-m-d H:i'); ?></span></p>
    </footer>
    <!--END FOOTER-->
    <script src="JS/dictionary.js"></script>
    <script src="JS/translate.js"></script>
</div>
</body>  
</html>