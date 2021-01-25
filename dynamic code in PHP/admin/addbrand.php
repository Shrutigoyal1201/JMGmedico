<?php include"header.php" ?>
<?php include"sidebar.php" ?>
            
           
      <div class="content-wrapper">
        <div class="container">


          <div class="row">
             
            <div class="col-md-6">
              <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Brand Images</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form role="form" method="post" action="inbrand.php" enctype= "multipart/form-data"> 
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
                      <button type="submit" name="submiti" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
              </div>
            </div>

            <div class="col-md-6">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Brands Names</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="post" action="inbrand.php"> 
                  <div class="card-body">
                    
                      <div class="form-group">
                        <label>Brand Names</label>
                        <input type="text" class="form-control" placeholder="Enter brand's name" name="name">
                      </div>

                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" name="submitl" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
            <!-- /.card -->
          </div>


        </div>
      </div>

<?php include"dbcon.php" ?>