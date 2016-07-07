<<<<<<< HEAD
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BMGL - Think Tank Proposal Form</title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/styles.css">
        <link href="css/font-awesome.min.css" rel="stylesheet">

        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Bowlby+One+SC|Biryani:350,900|Fjalla+One' rel='stylesheet' type='text/css'>

        

        <link rel="author" href="humans.txt">
    </head>
    <body>

        
        <!-- Top content -->
        
        <div class="top-content">
            <div class="container starter-template">
                <div class="row text-center" style="color:#fff; font-family: 'Bowlby One SC', cursive;">
                    <h1 style="font-size:36px;">Think Tank Proposal Form</h1>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12 text-center"><img src="images/think-tank-small.png" class="img-responsive text-center" alt="" style="margin: 0 auto;"></div>
                        <form class="form-horizontal" name="thinkTank" id="thinkTank" style="color:#fff;">
                            <div class="col-md-8 text-right" style="margin-top:20px;">
                            
                                <div class="form-group" style="color:#fff;">
                                    <label for="proposal" class="control-label col-xs-3">Proposal</label>
                                    <div class="col-xs-9">
                                        <input type="text" class="form-control" id="inputProposal" name="proposal" placeholder="Proposal" required style = 'float:left'>
                                    </div>
                                </div>
                                <div class="form-group" style="color:#fff;">
                                    <label for="employeeName" class="control-label col-xs-3">Employee Name</label>
                                    <div class="col-xs-9">
                                        <input type="text" class="form-control" id="inputEmployeeName" name="employee" placeholder="Employee Name" required>
                                    </div>
                                </div>
                                <div class="form-group" style="color:#fff;">
                                    <label for="department" class="control-label col-xs-3">Department</label>
                                    <div class="col-xs-9">
                                        <input type="text" class="form-control" id="inputDepartment" name="department" placeholder="Department" required>
                                    </div>
                                </div>
                                <div class="form-group" style="color:#fff;">
                                    <label for="jobTitle" class="control-label col-xs-3">Job Title</label>
                                    <div class="col-xs-9">
                                        <input type="text" class="form-control" id="inputJobTitle" name="jobTitle" placeholder="Job Title" required>
                                    </div>
                                </div>
                                 <div class="form-group" style="color:#fff;">
                                    <label for="emailAddress" class="control-label col-xs-3">Email Address</label>
                                    <div class="col-xs-9">
                                        <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email Address" required>
                                    </div>
                                </div>                                                   
                            </div>
                        </div>
                    <div class="row form-border">
                            <div class="col-md-12">
                                <div class="bs-callout-white text-left">
                                    <h4>THINK TANK PROPOSAL</h4> 
                                    <p> State the reasons this proposal is needed and what problem or issue the idea/project will resolve. 
                                        Describe any market research to support the idea.</p> 
                                    <div class="form-group">                                     
                                        <div class="proposal-entry">
                                            <textarea class="form-control" id="inputReasons" name="reason" rows="5" maxlength="350"></textarea>
                                            <span id="countReasons"></span>
                                        </div>
                                    </div> 
                                </div>                            
                            </div>
                           
                            <div class="col-md-12">
                                <div class="bs-callout-white text-left">
                                    <h4>SUPPORTING INFORMATION</h4> 
                                    <p>Include any data you may have to support your idea. Attach a PowerPoint if applicable. <br /><input type="file"></p> 
                                    <div class="form-group">                                     
                                        <div class="proposal-entry">
                                            <textarea class="form-control" id="inputInformation" name="information" rows="5" maxlength="350"></textarea>
                                             <span id="countInformation"></span>
                                        </div>
                                    </div> 
                                </div>                            
                            </div>

                            <div class="col-md-12">
                                <div class="bs-callout-white text-left">
                                    <h4>PROPOSAL COSTS</h4> 
                                    <p>How your idea is different than anything currently on the market or currently being practiced.</p> 
                                    <div class="form-group">                                     
                                        <div class="proposal-entry">
                                            <textarea class="form-control" id="inputCosts" name="cost" rows="5" maxlength="350"></textarea>
                                             <span id="countCosts"></span>
                                        </div>
                                    </div> 
                                </div>                            
                            </div>

                            <div class="col-md-12">
                                <div class="bs-callout-white text-left">
                                    <h4>DIFFERENTIATOR</h4> 
                                    <p>How your idea is different than anything currently on the market or currently being practiced.</p> 
                                    <div class="form-group">                                     
                                        <div class="proposal-entry">
                                            <textarea class="form-control" id="inputDiff" name="difference" rows="5" maxlength="350"></textarea>
                                             <span id="countDiff"></span>
                                        </div>
                                    </div> 
                                </div>                            
                            </div>

                            <div class="col-md-12" style="margin-bottom: 15px;">
                                <div class="bs-callout-white text-left">
                                    <h4>RESOURCES NEEDED</h4> 
                                    <p>List the resources that are required to support the idea</p> 
                                    <div class="form-group">                                     
                                        <div class="proposal-entry">
                                            <textarea class="form-control" id="inputResource" name="resource" rows="5" maxlength="350"></textarea>
                                             <span id="countResource"></span>
                                        </div>
                                    </div> 
                                </div>                            
                            </div>
                        </form>
                        <div class="col-md-12" >
                            <div class="text-left" style="color: #fff;">                        
                                <p><i>Please share enough details about your idea for us to make an evaluation of its potential. If you have an attachment or a PowerPoint included with your submission, please provide that when you schedule your meeting with Cynthia Torres. Should you have multiple ideas that are not related, please make separate submissions.,</i></p> 
                            </div> 
                        </div> 
                        <div class="col-md-12">
                            <div class="text-left" style="margin-bottom: 15px;">                        
                                <a href="" role="button" id="submitBtn" class="btn btn-success">Submit</a>
                                <a href="" role="button" id="cancelBtn" class="btn btn-danger">Cancel</a>
                            </div> 
                        </div>                     
                    </div>
                </form>
            </div>
        </div>

        <div class="modal fade" tabindex="-1" role="dialog" id="success-modal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header" id="success-modal-header">                
                <h1 class="modal-title text-center">Submission Confirmed!</h1>
              </div>
              <div class="modal-body text-center" id="loading-modal-body">
                <h2 class="" style="color: #46beaa;">Sending To Think Tank</h2>
                
                   <div class="row" style="margin: 0px 5px;">
                        <div class="progress">
                          <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                            <span class="percent">Complete</span>
                          </div>
                        </div>
                   </div>
                           
                
                <!--<div id="movingBallG">
                    <div class="movingBallLineG"></div>
                    <div id="movingBallG_1" class="movingBallG"></div>
                </div>-->
              </div>  
              <div class="modal-body" id="success-modal-body">
                <h2 class="text-center"><i class="fa fa-check-circle fa-4x green" aria-hidden="true"></i></h2>
                <p class="text-center" style="font-size: x-large;">Thanks for your participation and valuable input! <br> You should receive an email shortly.</p>
              </div>
              <div class="modal-footer" id="success-modal-footer">
                <button type="button" class="btn btn-default" id="success-close" data-dismiss="modal">Close</button>
                
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

              

        

       
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.validate.js"></script>
        <script src="js/bootstrap.min.js"></script> 
        <script src="js/circle-progress.js"></script>        
        <script src="js/script.js"></script>


    </body>
=======
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BMGL - Think Tank Proposal Form</title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/styles.css">
        <link href="css/font-awesome.min.css" rel="stylesheet">

        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Bowlby+One+SC|Biryani:400,900|Fjalla+One' rel='stylesheet' type='text/css'>

        <link rel="author" href="humans.txt">
    </head>
    <body>

        
        <!-- Top content -->
        <div class="top-content">
            <div class="container starter-template">
                <div class="row text-center" style="color:#fff; font-family: 'Bowlby One SC', cursive;">
                    <h1 style="font-size:36px;">Think Tank Proposal Form</h1>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12 text-center"><img src="images/think-tank-small.png" class="img-responsive text-center" alt="" style="margin: 0 auto;"></div>
                        <form class="form-horizontal" id="thinkTank" style="color:#fff;">
                            <div class="col-md-8 text-right" style="margin-top:20px;">
                            
                                <div class="form-group" style="color:#fff;">
                                    <label for="proposal" class="control-label col-xs-3">Proposal</label>
                                    <div class="col-xs-9">
                                        <input type="text" class="form-control" id="inputProposal" name="proposal" placeholder="Proposal">
                                    </div>
                                </div>
                                <div class="form-group" style="color:#fff;">
                                    <label for="employeeName" class="control-label col-xs-3">Employee Name</label>
                                    <div class="col-xs-9">
                                        <input type="text" class="form-control" id="inputEmployeeName" name="employee" placeholder="Employee Name">
                                    </div>
                                </div>
                                <div class="form-group" style="color:#fff;">
                                    <label for="department" class="control-label col-xs-3">Department</label>
                                    <div class="col-xs-9">
                                        <input type="text" class="form-control" id="inputDepartment" name="department" placeholder="Department">
                                    </div>
                                </div>
                                <div class="form-group" style="color:#fff;">
                                    <label for="jobTitle" class="control-label col-xs-3">Job Title</label>
                                    <div class="col-xs-9">
                                        <input type="text" class="form-control" id="inputJobTitle" name="jobTitle" placeholder="Job Title">
                                    </div>
                                </div>
                                 <div class="form-group" style="color:#fff;">
                                    <label for="emailAddress" class="control-label col-xs-3">Email Address</label>
                                    <div class="col-xs-9">
                                        <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email Address">
                                    </div>
                                </div>                                                   
                            </div>
                        </div>
                    <div class="row form-border">
                            <div class="col-md-12">
                                <div class="bs-callout-white text-left">
                                    <h4>THINK TANK PROPOSAL</h4> 
                                    <p> State the reasons this proposal is needed and what problem or issue the idea/project will resolve. 
                                        Describe any market research to support the idea.</p> 
                                    <div class="form-group">                                     
                                        <div class="proposal-entry">
                                            <textarea class="form-control" id="inputReasons" name="reason" rows="5" maxlength="500"></textarea>
                                        </div>
                                    </div> 
                                </div>                            
                            </div>
                           
                            <div class="col-md-12">
                                <div class="bs-callout-white text-left">
                                    <h4>SUPPORTING INFORMATION</h4> 
                                    <p>Include any data you may have to support your idea. Attach a PowerPoint if applicable.</p> 
                                    <div class="form-group">                                     
                                        <div class="proposal-entry">
                                            <textarea class="form-control" id="inputInformation" name="information" rows="5" maxlength="500"></textarea>
                                        </div>
                                    </div> 
                                </div>                            
                            </div>

                            <div class="col-md-12">
                                <div class="bs-callout-white text-left">
                                    <h4>PROPOSAL COSTS</h4> 
                                    <p>How your idea is different than anything currently on the market or currently being practiced.</p> 
                                    <div class="form-group">                                     
                                        <div class="proposal-entry">
                                            <textarea class="form-control" id="inputCosts" name="cost" rows="5" maxlength="500"></textarea>
                                        </div>
                                    </div> 
                                </div>                            
                            </div>

                            <div class="col-md-12">
                                <div class="bs-callout-white text-left">
                                    <h4>DIFFERENTIATOR</h4> 
                                    <p>How your idea is different than anything currently on the market or currently being practiced.</p> 
                                    <div class="form-group">                                     
                                        <div class="proposal-entry">
                                            <textarea class="form-control" id="inputDiff" name="difference" rows="5" maxlength="500"></textarea>
                                        </div>
                                    </div> 
                                </div>                            
                            </div>

                            <div class="col-md-12" style="margin-bottom: 15px;">
                                <div class="bs-callout-white text-left">
                                    <h4>RESOURCES NEEDED</h4> 
                                    <p>List the resources that are required to support the idea</p> 
                                    <div class="form-group">                                     
                                        <div class="proposal-entry">
                                            <textarea class="form-control" id="inputResource" name="resource" rows="5" maxlength="500"></textarea>
                                        </div>
                                    </div> 
                                </div>                            
                            </div>
                        </form>
                        <div class="col-md-12" >
                            <div class="text-left" style="color: #fff;">                        
                                <p><i>Please share enough details about your idea for us to make an evaluation of its potential. If you have an attachment or a PowerPoint included with your submission, please provide that when you schedule your meeting with Cynthia Torres. Should you have multiple ideas that are not related, please make separate submissions.,</i></p> 
                            </div> 
                        </div> 
                        <div class="col-md-12">
                            <div class="text-left" style="margin-bottom: 15px;">                        
                                <a href="" role="button" id="submitBtn" class="btn btn-success">Submit</a>
                                <a href="" role="button" id="cancelBtn" class="btn btn-danger">Cancel</a>
                            </div> 
                        </div>                     
                    </div>
                </form>
            </div>
        </div>

        <div class="modal fade" tabindex="-1" role="dialog" id="success-modal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                
                <h1 class="modal-title text-center">Submission Confirmed!</h1>
              </div>
              <div class="modal-body" id="success-modal-body">
                <h2 class="text-center"><i class="fa fa-check-circle fa-4x green" aria-hidden="true"></i></h2>
                <p class="text-center" style="font-size: x-large;">Thanks for your participation and valuable input! <br> You should receive an email shortly.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" id="success-close" data-dismiss="modal">Close</button>
                
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->          



        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </body>
>>>>>>> 3d9b5c6c0b5bcff09055d36915593f3609c3327b
</html>