<?php include"header.php" ?>
<?php include"sidebar.php" ?>
        
        <div class="content-wrapper">
          <div class="container">
             <div class="row">
               
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Brand Images</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table class="table table-bordered">
                        <thead>  
                          <tr>
                            <th style="width: 10px">Id</th>
                            <th>Image</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                        include"dbcon.php"; 

                        $s="SELECT * FROM brandimg";
                        $q=mysqli_query($con,$s);
                        while($r=mysqli_fetch_array($q))
                        {
                        ?>                

                          <tr>
                            <td><?php echo $r['id']?></td>
                            <td><img src="<?php echo $r['image'] ?>" style="width:10%;"></td>
                            <td>
                              <a href="delbrand.php?id=<?php echo $r['id']?>">Delete</a>
                            </td>
                          </tr>
                        <?php } ?>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                      <ul class="pagination pagination-sm m-0 float-right">
                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- /.card -->
                </div>
                
                <div class="col-md-6">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Brand Names</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <table class="table table-bordered">
                          <thead>  
                            <tr>
                              <th style="width: 10px">Id</th>
                              <th>Names</th>
                              <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php 
                          include"dbcon.php"; 

                          $s="SELECT * FROM brandname";
                          $q=mysqli_query($con,$s);
                          while($r=mysqli_fetch_array($q))
                          {
                          ?>                

                            <tr>
                              <td><?php echo $r['id']?></td>
                              <td><?php echo $r['name'] ?></td>
                              <td>
                                <a href="delbrand.php?id=<?php echo $r['id']?>">Delete</a>
                              </td>
                            </tr>
                          <?php } ?>
                          </tbody>
                        </table>
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                          <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>
                      </div>
                    </div>
                    <!-- /.card -->
                </div>
                                 

             </div>

        </div>
      </div>
    


<?php include"dbcon.php" ?>