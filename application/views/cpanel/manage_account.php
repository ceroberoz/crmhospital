<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CRM Hospital | Manage Account</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#"><i class="fa fa-heartbeat"></i> CRM Hospital</a>
                    </div>
                    
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="#">Link</a>
                            </li>
                            <li>
                                <a href="#">Link</a>
                            </li>
                            <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Action</a>
                                    </li>
                                    <li>
                                        <a href="#">Another action</a>
                                    </li>
                                    <li>
                                        <a href="#">Something else here</a>
                                    </li>
                                    <li class="divider">
                                    </li>
                                    <li>
                                        <a href="#">Separated link</a>
                                    </li>
                                    <li class="divider">
                                    </li>
                                    <li>
                                        <a href="#">One more separated link</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input class="form-control" type="text" />
                            </div> <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#">Link</a>
                            </li>
                            <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Action</a>
                                    </li>
                                    <li>
                                        <a href="#">Another action</a>
                                    </li>
                                    <li>
                                        <a href="#">Something else here</a>
                                    </li>
                                    <li class="divider">
                                    </li>
                                    <li>
                                        <a href="#">Separated link</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    
                </nav>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle"></i> Add Patient</button>
                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Add new patient data</h4>
                      </div>
                      <div class="modal-body">
                        <?php
                            $attribute = array('role' => 'form');
                            echo form_open_multipart('administration/patient/add',$attribute);
                            
                            $uid = $this->ion_auth->user()->row()->id;
                            echo form_hidden('uid',$uid);
                        ?>
                        <!-- <form role="form"> -->
                            <div class="form-group">
                                 <label for="exampleInputEmail1">Email address</label><input class="form-control" id="exampleInputEmail1" type="email" name="identity" />
                            </div>
                            <div class="form-group">
                                 <label for="exampleInputPassword1">Password</label><input class="form-control" id="exampleInputPassword1" type="password" name="password" />
                            </div>
                            <hr />
                            <div class="form-group">
                                 <label for="exampleInputFirstName">First Name</label><input class="form-control" id="exampleInputFirstName" type="text" name="first_name" />
                            </div>
                            <div class="form-group">
                                 <label for="exampleInputLastName">Last Name</label><input class="form-control" id="exampleInputFirstName" type="text" name="last_name" />
                            </div>
                            <div class="form-group">
                                 <label for="exampleInputAddress">Current Address</label><input class="form-control" id="exampleInputAddress" type="text" name="address" />
                            </div>
                            <div class="form-group">
                                 <label for="exampleInputAge">Birth Date</label><input placeholder="click to show datepicker" class="form-control" id="example1" type="text" name="birth_date" />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputLastName">Gender</label><br />
                                <label class="checkbox-inline"><input type="radio" value="L" name="gender">Male</label>
                                <label class="checkbox-inline"><input type="radio" value="P" name="gender">Female</label>
                            </div>
                            <div class="form-group">
                                 <label for="exampleInputPhone">Phone Number</label><input class="form-control" id="exampleInputPhone" type="text" name="phone" />
                            </div>
                            <div class="form-group">
                                 <label for="exampleInputPhoneHome">Phone Home</label><input class="form-control" id="exampleInputPhoneHome" type="text" name="phone_home" />
                            </div>
                            <div class="form-group">
                                 <label for="exampleInputKTP">No. KTP / SIM</label><input class="form-control" id="exampleInputKTP" type="text" name="identifier" />
                            </div>
                            <div class="form-group">
                                 <label for="exampleInputFile">File input</label><input id="exampleInputFile" type="file" name="upload_identifier" />
                                <p class="help-block">
                                    Upload form for KTP / SIM.
                                </p>
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        <!-- </form> -->
                        <?php echo form_close();?>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                Product
                            </th>
                            <th>
                                Payment Taken
                            </th>
                            <th>
                                Status
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                TB - Monthly
                            </td>
                            <td>
                                01/04/2012
                            </td>
                            <td>
                                Default
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                1
                            </td>
                            <td>
                                TB - Monthly
                            </td>
                            <td>
                                01/04/2012
                            </td>
                            <td>
                                Approved
                            </td>
                        </tr>
                        <tr class="success">
                            <td>
                                2
                            </td>
                            <td>
                                TB - Monthly
                            </td>
                            <td>
                                02/04/2012
                            </td>
                            <td>
                                Declined
                            </td>
                        </tr>
                        <tr class="warning">
                            <td>
                                3
                            </td>
                            <td>
                                TB - Monthly
                            </td>
                            <td>
                                03/04/2012
                            </td>
                            <td>
                                Pending
                            </td>
                        </tr>
                        <tr class="danger">
                            <td>
                                4
                            </td>
                            <td>
                                TB - Monthly
                            </td>
                            <td>
                                04/04/2012
                            </td>
                            <td>
                                Call in to confirm
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap-datepicker.js"></script>

    <!-- Load jQuery and bootstrap datepicker scripts -->
    <script type="text/javascript">
        // When the document is ready
        $(document).ready(function () {
            
            $('#example1').datepicker({
                format: "dd/mm/yyyy"
            });  
        
        });
    </script>
  </body>
</html>