<?php include("includes/header.php")?>

      <title>KanKook - Homepage</title>

<?php include("includes/nav.php")?>
      
      <div class="container-fluid wow fadeInUp" data-wow-delay="2s">
            <div class="row ">
                  <div class="col-sm-2 ">
                        <!-- Left column -->
                        <a href="# ">
                              <strong>
                                    <i class="glyphicon glyphicon-wrench "></i> Administration</strong>
                        </a>

                        <hr>

                        <ul class="nav nav-stacked ">
                              <li class="nav-header ">
                                    <a href="admin_panel_users.html" data-toggle="collapse " data-target="#userMenu ">User Account
                                          <span class="badge badge-info ">4</span>
                                    </a>
                                    <ul class="nav nav-stacked collapse in " id="userMenu ">
                                          <li class="active ">
                                                <a href="admin_panel_recipes.html"> Recipe</a>
                                          </li>
                                          <li>
                                                <a href="admin_panel_tags.html">
                                                      Tag
                                                </a>
                                          </li>
                                    </ul>
                              </li>
                        </ul>

                              <hr>


                  </div>
                  <!-- /col-3 -->
                  <div class="col-sm-10 ">

                        <!-- column 2 -->

                        <a href="# ">
                              <strong>
                                    <i class="glyphicon glyphicon-dashboard "></i> Setting</strong>
                        </a>
                        <hr>

                        <div class="row ">
                              <!-- center left-->
                              <div class="col-md-8 ">
                                    <div class="well ">Inbox Messages
                                          <span class="badge pull-right ">3</span>
                                    </div>



                                    <!--/panel-->

                                    <div class="table-responsive ">
                                          <table class="table table-striped ">
                                                <thead>
                                                      <tr>
                                                            <th>#</th>
                                                            <th>Name</th>
                                                            <th>Date</th>
                                                            <th></th>
                                                      </tr>
                                                </thead>
                                                <tbody>
                                                      <tr>
                                                            <td>45</td>
                                                            <td>2.45%</td>
                                                            <td>Direct</td>
                                                            <td>
                                                                  <button type="save " class="btn btn-primary ">
                                                                        Edit
                                                                  </button>
                                                                  <button type="save " class="btn btn-danger ">
                                                                        Delete
                                                                  </button>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>289</td>
                                                            <td>56.2%</td>
                                                            <td>Referral</td>
                                                            <td>
                                                                  <button type="save " class="btn btn-primary ">
                                                                        Edit
                                                                  </button>
                                                                  <button type="save " class="btn btn-danger ">
                                                                        Delete
                                                                  </button>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>98</td>
                                                            <td>25%</td>
                                                            <td>Type</td>
                                                            <td>
                                                                  <button type="save " class="btn btn-primary ">
                                                                        Edit
                                                                  </button>
                                                                  <button type="save " class="btn btn-danger ">
                                                                        Delete
                                                                  </button>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>..</td>
                                                            <td>..</td>
                                                            <td>..</td>
                                                            <td>
                                                                  <button type="save " class="btn btn-primary ">
                                                                        Edit
                                                                  </button>
                                                                  <button type="save " class="btn btn-danger ">
                                                                        Delete
                                                                  </button>
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td>..</td>
                                                            <td>..</td>
                                                            <td>..</td>
                                                            <td>
                                                                  <button type="save " class="btn btn-primary ">
                                                                        Edit
                                                                  </button>
                                                                  <button type="save " class="btn btn-danger ">
                                                                        Delete
                                                                  </button>
                                                            </td>
                                                      </tr>
                                                </tbody>
                                          </table>
                                    </div>


                              </div>
                              <!--/col-->
                              <div class="col-md-4 ">
                                    <div class="panel panel-default ">
                                          <div class="panel-heading ">
                                                <h4>Notices</h4>
                                          </div>
                                          <div class="panel-body ">
                                                <div class="alert alert-info ">
                                                      <button type="button " class="close " data-dismiss="alert ">×</button>
                                                      This is a dismissable alert.. just sayin'.
                                                </div>
                                                <p>This is a dashboard-style layout that uses Bootstrap 3. You can use this
                                                      template as a starting point to create something more unique.</p>
                                                <p>Visit the Bootstrap Playground at
                                                      <a href="http://bootply.com ">Bootply</a> to tweak this layout or discover more useful code snippets.
                                                </p>
                                          </div>
                                    </div>

                                    <div class="panel panel-default ">
                                          <div class="panel-heading ">
                                                <div class="panel-title ">
                                                      <i class="glyphicon glyphicon-wrench pull-right "></i>
                                                      <h4>Post Request</h4>
                                                </div>
                                          </div>
                                          <div class="panel-body ">
                                                <form class="form form-vertical ">
                                                      <div class="control-group ">
                                                            <label>Name</label>
                                                            <div class="controls ">
                                                                  <input type="text " class="form-control
            " placeholder="Enter Name ">
                                                            </div>
                                                      </div>
                                                      <div class="control-group ">
                                                            <label>Message</label>
                                                            <div class="controls ">
                                                                  <textarea class="form-control "></textarea>
                                                            </div>
                                                      </div>
                                                      <div class="control-group ">
                                                            <label>Category</label>
                                                            <div class="controls ">
                                                                  <select class="form-control ">
                                                                        <option>options</option>
                                                                  </select>
                                                            </div>
                                                      </div>
                                                      <div class="control-group ">
                                                            <label></label>
                                                            <div class="controls ">
                                                                  <button type="save " class="btn btn-primary ">
                                                                        Save
                                                                  </button>
                                                                  <button type="save " class="btn btn-danger ">
                                                                        Reset
                                                                  </button>
                                                            </div>
                                                      </div>
                                                </form>
                                          </div>
                                          <!--/panel content-->
                                    </div>
                                    <!--/panel-->



                              </div>
                              <!--/col-span-6-->

                        </div>
                        <!--/row-->




                  </div>
                  <!--/col-span-9-->
            </div>
      </div>
      <!-- /Main -->


      <div class="modal " id="addWidgetModal ">
            <div class="modal-dialog ">
                  <div class="modal-content ">
                        <div class="modal-header ">
                              <button type="button " class="close " data-dismiss="modal " aria-hidden="true ">×</button>
                              <h4 class="modal-title ">Add Widget</h4>
                        </div>
                        <div class="modal-body ">
                              <p>Add a widget stuff here..</p>
                        </div>
                        <div class="modal-footer ">
                              <a href="# " data-dismiss="modal " class="btn ">Close</a>
                              <a href="# " class="btn btn-primary ">Save changes</a>
                        </div>
                  </div>
                  <!-- /.modal-content -->
            </div>
            <!-- /.modal-dalog -->
      </div>
      <!-- End of container -->

<?php include("includes/footer.php");?>