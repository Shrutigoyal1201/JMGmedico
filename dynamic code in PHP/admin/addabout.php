<?php include"header.php" ?>
<?php include"sidebar.php" ?>
            
           
      <div class="content-wrapper">
        <div class="container">


          <div class="row">
             
            <div class="col-md-6">
              <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Header- Mission & Vision</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form role="form" method="post" action="inabout.php" enctype= "multipart/form-data"> 
                    <div class="card-body">

                      <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" placeholder="Enter title" name="title">
                      </div>

                      <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control"placeholder="Enter description" name="des"></textarea>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                          </div>
                        </div>
                      </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                      <button type="submit" name="submith" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
              </div>
            </div>

            <div class="col-md-6">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Meet the team</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="post" action="inabout.php" enctype= "multipart/form-data"> 
                  <div class="card-body">
                    
                      <div class="form-group">
                        <label>Designation</label>
                        <input type="text" class="form-control" placeholder="Enter designation" name="title">
                      </div>

                      <div class="form-group">
                        <label>Name of the member</label>
                        <input type="text" class="form-control" placeholder="Enter name" name="subtitle">
                      </div>

                      <div class="form-group">
                        <label>About</label>
                        <textarea class="form-control"placeholder="Enter details of the team member" name="des"></textarea>
                      </div>

                      <div class="form-group">
                        <label>Personal info- behind the image</label>
                        <textarea class="form-control"placeholder="Enter details of the team member" name="subdes"></textarea>
                      </div>


                      <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                          </div>
                        </div>
                      </div>

                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" name="submitteam" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
            <!-- /.card -->
          </div>


          <div class="row">
             
            <div class="col-md-6">
              <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Loaction- Map & Whereabouts</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form role="form" method="post" action="inabout.php"> 
                    <div class="card-body">
                      
                      <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" placeholder="Enter title" name="title">
                      </div>

                      <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" placeholder="Enter description" name="des">
                      </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                      <button type="submit" name="submitloc" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
              </div>
            </div>

            <div class="col-md-6">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Footer - Campaign</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="post" action="inabout.php" enctype= "multipart/form-data"> 
                  <div class="card-body">

                      <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" placeholder="Enter title" name="title">
                      </div>

                      <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" placeholder="Enter description" name="des">
                      </div>
                    
                    <div class="form-group">
                      <label for="exampleInputFile">File input</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="image">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text" id="">Upload</span>
                        </div>
                      </div>
                    </div>

                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" name="submitf" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
            <!-- /.card -->
          </div>


        </div>
      </div>

<?php include"dbcon.php" ?>