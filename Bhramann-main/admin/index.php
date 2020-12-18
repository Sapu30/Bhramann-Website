<?php

session_start();

?>

<!doctype html>
<html lang="en">

<head>
    <title>ADMIN</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/c0fc838bea.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2&display=swap" rel="stylesheet">

</head>

<body>
    <!---Nav bar-->
    <nav class="navbar navbar-expand-md navbar-light">
        <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#navbar">
<span class="navbar-toggler-icon"></span>

</button>
        <div class="collapse navbar-collapse" id="navbar">
            <div class="container-fluid">
                <div class="row">
                    <!---Sidebar-->
                    <div class=" col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
                        <a href="#" class="navbar-brand text-white d-block
                mx-auto text-center py-3 mb-4" style="font-size: 32px; font-family:cursive;"><i class="fa fa-paper-plane text-light fa-6"> Bhramann</i></a>

                        <ul class="navbar-nav flex-column mt-4">
                            <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2
                    current"><i class="fas fa-home text-light fa-lg mr-3"></i>
                Dashboard</a></li>
                            <li class="nav-item"><a href="change-password.php" class="nav-link text-white p-3 mb-2
                    sidebar-link"><i class="fas fa-user text-light fa-lg mr-3"></i>
                Profile</a></li>
                            <li class="nav-item"><a href="pack.html" class="nav-link text-white p-3 mb-2
                    sidebar-link"><i class="fas fa-briefcase text-light fa-lg mr-3"></i>
                Tour Packages</a></li>
                            <li class="nav-item"><a href="manage-user.html" class="nav-link text-white p-3 mb-2
                    sidebar-link"><i class="fas fa-users text-light fa-lg mr-3"></i>
                Manage Users</a></li>
                            <li class="nav-item"><a href="booking.html" class="nav-link text-white p-3 mb-2
                    sidebar-link"><i class="fas fa-book text-light fa-lg mr-3"></i>
                Manage Booking</a></li>
                            <li class="nav-item"><a href="issues.html" class="nav-link text-white p-3 mb-2
                    sidebar-link"><i class="fa fa-folder-open text-light fa-lg mr-3"></i>
                Manage Issues</a></li>
                            

                    </div> 
                    <!---end of side bar-->
                    <!---Top Nav-->
                    <div class="col-xl-10 col-lg-9 col-md-8 ml-auto top-bar fixed-top py-2 top-nav">
                        <div class="row align-item-center">
                            <div class="col-md-4">
                                <h4 class="text-light text-uppercase mb-0">ADMIN PANEL</h4>
                            </div>
                            <div class="col-md-5">
                                <h4 style="color:white">WELCOME &nbsp;ADMINISTRATOR</h4>
                            </div>
                            <div class="col-md-3">
                                <ul class="navbar-nav">
                                    <li class="nav-item icon-parent">
                                        <a href="#" class="nav-link icon-bullet">
                                            <i class="fas fa-comments text-light fa-lg"></i></a>
                                        <li class="nav-item icon-parent">
                                            <a href="#" class="nav-link icon-bullet">
                                                <i class="fas fa-bell text-light fa-lg"></i></a>
                                               
                                            <li class="nav-item ml-md-auto">
                                                <a href="#" class="nav-link" data-toggle="modal" data-target="#sign-out">
                                                    <i class="fas fa-sign-out-alt text-danger fa-lg"></i></a>
                                </ul>
                            </div>
                        </div>
                    </div> 
                    <!---End of Top Nav-->
                </div>
            </div>
        </div>
    </nav>
    <!----End of Navbar-->
    <!---Modal-->
    <div class="modal" id="sign-out">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Signout</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    press the button
                </div>
                <div class="modal-footer">
                    <a href="http://localhost/Bhramann-main/admin/login.php"><button type="button" class="btn btn-success">
                    Leave </button></a>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                    Cancel    </button>
                </div>
            </div>
        </div>
    </div>
    <!---End of Modal-->
    <!---Cards-->
    <section>
        <div class="container-fluid">
       <div class="row">
                <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                    <div class="row pt-md-5 mt-md-3 mb-5">
                        <div class="col-xl-3 col-sm-6 p-2">
                            <div class="card card-common" style="width:350px;height:200px;">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fas fa-briefcase fa-3x text-info"></i>
                                        <div class="text-right text-dark">
                                            <h5> Packages Sales</h5>
                                            <h3>Rs 10,000.00</h3>
                                        </div>
                                    </div>
                                </div> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                <div class="card-footer text-dark">
                                    <i class="fas fa-spinner fa-pulse text-info mr-3"></i>
                                    <span>Updating</span>
                                </div>
                            </div> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

                        </div> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                        <div class="col-xl-3 col-sm-6 p-2">
                            <div class="card card-common" style="width:350px;height:200px;">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fas fa-money-bill-alt fa-3x text-success"></i>
                                        <div class="text-right text-dark">
                                            <h5>Expenses</h5>
                                            <h3>Rs 6000.00</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-dark">
                                    <i class="fas fa-spinner fa-pulse text-success mr-3"></i>
                                    <span>Updating</span>
                                </div>
                            </div>

                        </div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                        <div class="col-xl-3 col-sm-6 p-2">
                            <div class="card card-common" style="width:350px;height:200px;">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fas fa-users fa-3x text-warning"></i>
                                        <div class="text-right text-dark">
                                            <h5>Users</h5>
                                            <h3>1000.00</h3>
                                        </div>
                                    </div>
                                </div> 
                                <div class="card-footer text-dark">
                                    <i class="fas fa-spinner fa-pulse text-warning mr-3"></i>
                                    <span>Updating</span>
                                </div>
                            </div>

                        </div> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                        <div class="col-xl-3 col-sm-6 p-2">
                            <div class="card card-common" style="width:350px;height:200px;">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fas fa-book fa-3x "></i>
                                        <div class="text-right text-dark">
                                            <h5>Bookings</h5>
                                            <h3>1,000.00</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-dark">
                                    <i class="fas fa-spinner fa-pulse mr-3"></i>
                                    <span>Updating</span>
                                </div>
                            </div>

                        </div> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 

                        <div class="col-xl-3 col-sm-6 p-2">
                            <div class="card card-common" style="width:350px;height:200px;">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fas fa-chart-line fa-3x text-danger"></i>
                                        <div class="text-right text-dark">
                                            <h5>Visitors</h5>
                                            <h3>3,000.00</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-dark">
                                    <i class="fas fa-spinner fa-pulse text-danger mr-3"></i>
                                    <span>Updating</span>
                                </div>
                            </div>

                        </div>        
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!---End of Cards-->
    <!--table-->
    <!--<section>
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-12 mb-4 mb-xl-0">
                            <h3 class="text-dark text-center mb-3">
                                Staff Salary
                            </h3>
                            <table class="table table-striped bg-light text-center">
                                <thead>
                                    <tr class="text-dark">
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Salary</th>
                                        <th>Date</th>
                                        <th>Contact</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td>Jade</td>
                                        <td>$6000</td>
                                        <td>10-09-2019</td>
                                        <td><button type="button" class="btn btn-danger btn-sm">Message</button></td>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <td>Jane</td>
                                        <td>$5000</td>
                                        <td>10-09-2019</td>
                                        <td><button type="button" class="btn btn-danger btn-sm">Message</button></td>
                                    </tr>
                                    <tr>
                                        <th>3</th>
                                        <td>Elon</td>
                                        <td>$7000</td>
                                        <td>10-09-2019</td>
                                        <td><button type="button" class="btn btn-danger btn-sm">Message</button></td>
                                    </tr>
                                    <tr>
                                        <th>4</th>
                                        <td>Dave</td>
                                        <td>$9000</td>
                                        <td>10-09-2019</td>
                                        <td><button type="button" class="btn btn-danger btn-sm">Message</button></td>
                                    </tr>
                                </tbody>
                            </table>-->
                            <!---Pagination-->
                            <!--   <nav class="color">
                           <ul class="pagination justify-content-center">
                               <li class="page-item">
                                   <a href="#" class="page-link py-2 px-3">
                                       <span>&laquo;</span>
                                   </a>
                               </li>
                               <li class="page-item active">
                                    <a href="#" class="page-link py-2 px-3">
                                        1
                                    </a>
                                </li>
                                <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                            2
                                        </a>
                                    </li>
                                    <li class="page-item">
                                            <a href="#" class="page-link py-2 px-3">
                                                3
                                            </a>
                                        </li>
                               <li class="page-item">
                                    <a href="#" class="page-link py-2 px-3">
                                        <span>&raquo;</span>
                                    </a>
                                </li>

                           </ul>
                       </nav>
-->



                            <!--End of Pagination-->
                        <!--</div>
                        <div class="col-xl-6 col-12">
                            <h3 class="text-dark text-center mb-3">Recent Payments</h3>
                            <table class="table table-color  table-hover">
                                <thead>
                                    <tr class="text-dark">
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Date</th>
                                        <th>Status</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td>Mike</td>
                                        <td>$6000</td>
                                        <td>10-09-2019</td>
                                        <td><span class="badge badge-success w-75 py-2">Approved</span></td>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <td>Mark</td>
                                        <td>$6000</td>
                                        <td>10-09-2019</td>
                                        <td><span class="badge badge-success w-75 py-2">Approved</span></td>
                                    </tr>
                                    <tr>
                                        <th>3</th>
                                        <td>David</td>
                                        <td>$6000</td>
                                        <td>10-09-2019</td>
                                        <td><span class="badge badge-danger w-75 py-2">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <th>4</th>
                                        <td>William</td>
                                        <td>$6000</td>
                                        <td>10-09-2019</td>
                                        <td><span class="badge badge-danger w-75 py-2">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <th>5</th>
                                        <td>Joseph</td>
                                        <td>$6000</td>
                                        <td>10-09-2019</td>
                                        <td><span class="badge badge-success w-75 py-2">Approved</span></td>
                                    </tr>
                                </tbody>
                            </table>-->
                            <!--  <nav>
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a href="#" class="page-link py-2 px-3">
                            <span>Previous</span>
                        </a>
                    </li>
                    <li class="page-item active">
                         <a href="#" class="page-link py-2 px-3">
                             1
                         </a>
                     </li>
                     <li class="page-item">
                             <a href="#" class="page-link py-2 px-3">
                                 2
                             </a>
                         </li>
                         <li class="page-item">
                                 <a href="#" class="page-link py-2 px-3">
                                     3
                                 </a>
                             </li>
                    <li class="page-item">
                         <a href="#" class="page-link py-2 px-3">
                             <span>Next</span>
                         </a>
                     </li>

                </ul>
            </nav>-->


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--End of table-->
    <!---Quick post-->
    <!--  <section>
          <div class="container-fluid">
              <div class="row">
                  <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                      <div class="row">
                            <div class="col-xl-6 col-12">
                                    <h4 class="text-dark p-3 mb-3">Tasks.</h4>
                                    <div class="container-fluid bg-1">
                                        <div class="row py-3 mb-4 task-border align-items-center">
                                            <div class="col-1">
                                                <input type="checkbox" checked>
                                
                                            </div>
                                            <div class="col-sm-9 col-8">
                                                Lorem ipsum dolor sit amet, consectetur 
                                                adipisicing elit.
                                            </div>
                                <div class="col-1">
                                <a href="#"data-toggle="tooltip" title="Edit"
                                data-placement="top">
                                <i class="fas fa-edit fa-lg text-success mr-2">
                                </i></a>
                                            </div>
                                <div class="col-1">
                                <a href="#"data-toggle="tooltip" title="Delete"
                                data-placement="top">
                                <i class="fas fa-trash-alt fa-lg text-danger">
                                </i></a>
                                     </div>
                                        </div>
                                    </div>
                                    <div class="container-fluid bg-2">
                                      <div class="row py-3 mb-4 task-border align-items-center">
                                          <div class="col-1">
                                              <input type="checkbox" checked>
                                
                                          </div>
                                          <div class="col-sm-9 col-8">
                                              Lorem ipsum dolor sit amet, consectetur 
                                              adipisicing elit.
                                          </div>
                                <div class="col-1">
                                <a href="#"data-toggle="tooltip" title="Edit"
                                data-placement="top">
                                <i class="fas fa-edit fa-lg text-success mr-2">
                                </i></a>
                                          </div>
                                <div class="col-1">
                                <a href="#"data-toggle="tooltip" title="Delete"
                                data-placement="top">
                                <i class="fas fa-trash-alt fa-lg text-danger">
                                </i></a>
                                   </div>
                                      </div>
                                  </div>
                                  <div class="container-fluid bg-3">
                                      <div class="row py-3 mb-4 task-border align-items-center">
                                          <div class="col-1">
                                              <input type="checkbox" checked>
                                
                                          </div>
                                          <div class="col-sm-9 col-8">
                                              Lorem ipsum dolor sit amet, consectetur 
                                              adipisicing elit.
                                          </div>
                                <div class="col-1">
                                <a href="#"data-toggle="tooltip" title="Edit"
                                data-placement="top">
                                <i class="fas fa-edit fa-lg text-success mr-2">
                                </i></a>
                                          </div>
                                <div class="col-1">
                                <a href="#"data-toggle="tooltip" title="Delete"
                                data-placement="top">
                                <i class="fas fa-trash-alt fa-lg text-danger">
                                </i></a>
                                   </div>
                                      </div>
                                  </div>
                                  <div class="container-fluid bg-4">
                                      <div class="row py-3 mb-4 task-border align-items-center">
                                          <div class="col-1">
                                              <input type="checkbox" checked>
                                
                                          </div>
                                          <div class="col-sm-9 col-8">
                                              Lorem ipsum dolor sit amet, consectetur 
                                              adipisicing elit.
                                          </div>
                                <div class="col-1">
                                <a href="#"data-toggle="tooltip" title="Edit"
                                data-placement="top">
                                <i class="fas fa-edit fa-lg text-success mr-2">
                                </i></a>
                                          </div>
                                <div class="col-1">
                                <a href="#"data-toggle="tooltip" title="Delete"
                                data-placement="top">
                                <i class="fas fa-trash-alt fa-lg text-danger">
                                </i></a>
                                   </div>
                                      </div>
                                  </div>
                                  </div>-->
    <!--End of Task List-->
    <!---Quick Post--->
    <!--    <div class="col-xl-6 mt-5">
            <div class="card rounded">
             <div class="card-body">
                 <h5 class="text-dark text-center mb-4">
                     Quick Status Post
                   </h5>
                <ul class="list-inline text-center py-3">
                 <li class="list-inline-item">
                     <a href="#"> <i class="fas fa-pencil-alt text-success"></i>
                    <span class="h6 text-dark">Status</span>
                    </a>
                    </li>
                    <li class="list-inline-item mr-4">
                            <a href="#"> <i class="fas fa-camera text-info"></i>
                           <span class="h6 text-dark">Photo</span>
                           </a>
                           </li>
                           <li class="list-inline-item mr-4">
                                <a href="#"> <i class="fas fa-map-marker text-danger"></i>
                               <span class="h6 text-dark">Check In</span>
                               </a>
                               </li>

                      </ul>
                      <form>
                          <div class="form-group">
                              <input type="text" class="form-control py-2 mb-3" 
                              placeholder="Your Status">
                              <button type="button" class="btn btn-block text-uppercase 
                              font-weight-bold text-light bg-button py-2 mb-5">Submit Post</button>
                          </div>
                      </form>-->
    <!-- <div class="row align-items-center mb-5">
        <div class="col-6">
            <div class="card bg-light">
                <i class="far fa-calendar-alt fa-8x
                                  text-info d-block m-auto py-3"></i>
                <div class="card-body">
                    <p class="card-text text-center font-weight-bold 
                           text-uppercase">Thu,Oct 10</p>
                </div>
            </div>

        </div>
        <div class="col-6">
            <div class="card bg-light">
                <i class="far fa-clock fa-8x
                                        text-danger d-block m-auto py-3"></i>
                <div class="card-body">
                    <p class="card-text text-center font-weight-bold 
                                 text-uppercase">2:15PM</p>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>


    </div>
    </div>
    </div>
    </div>

    </div>
    </section>-->

    <!---End of Quick post-->
    <!----Footer-->
    <br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto mt-3 bd-bottom">
                <div class="row border-top pt-3">
                    <div class="col-lg-6 text-center">
                        <ul class="list-inline">
                            <li class="list-inline-item mr-2">
                                
                        Copyright 
                    
                            </li>
                            <li class="list-inline-item mr-2">
                                
                            &copy;
                    
                            </li>
                            <li class="list-inline-item mr-2">
                              
                                2020,
                          
                            </li>
                            <li class="list-inline-item mr-2">
                                
                                 BHRAMANN
                             
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 text-center text-success">
                        <p style="color:black">
                        All rights are reserved </p>
                      

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---End of Footer-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
