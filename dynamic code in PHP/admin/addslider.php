<?php include"header.php" ?>
<?php include"sidebar.php" ?>
            
           
      <div class="content-wrapper">
        <div class="container">


          <div class="row">
             
            <div class="col-md-6">
              <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Index Slider</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form role="form" method="post" action="inslider.php" enctype= "multipart/form-data"> 
                    <div class="card-body">

                      <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" placeholder="Enter title" name="title">
                      </div>

                      <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control"placeholder="Enter details about your firm" name="des"></textarea>
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
                      <button type="submit" name="submiti" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
              </div>
            </div>

            <div class="col-md-6">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Products Slider</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="post" action="inslider.php" enctype= "multipart/form-data"> 
                  <div class="card-body">
                    
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
                    <button type="submit" name="submitp" class="btn btn-primary">Submit</button>
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
                    <h3 class="card-title">Brands Slider</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form role="form" method="post" action="inslider.php" enctype= "multipart/form-data"> 
                    <div class="card-body">
                      
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
                      <button type="submit" name="submitb" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
              </div>
            </div>

            <div class="col-md-6">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Contact Slider</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="post" action="inslider.php" enctype= "multipart/form-data"> 
                  <div class="card-body">
                    
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
                    <button type="submit" name="submitc" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
            <!-- /.card -->
          </div>


        </div>
      </div>

<?php include"dbcon.php" ?>