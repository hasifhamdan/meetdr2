               
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="panel panel-info">
                          <div class="panel-heading align-left">
                            <h3 class="panel-title">Meetng Setup</h3>
                          </div>
                          <div class="panel-body">
                            <div>
                            
                            <p>Create New Meeting</p>
                           
                            <div class="col-md-5 col-sm-5"></div>
                            <div class="col-md-2 col-sm-2">
 <a href="#" data-toggle="modal" data-target="#meeting-modal" class="btn btn-primary btn-block"><span class="network-name">Create Meeting</span></a>                            <br>
                            <br>
                            </div>
                            <div class="col-md-5 col-sm-5"></div>

                                <table class="table table-bordered">
                                  <thead>
                                    <tr>
                                  
                                      <th>MEETING TITLE</th>
                                      <th>MEETING DESCRIPTION</th>
                                      <th>MEETIING DATE</th>
                                      <th>MEETIING TIME</th>
                                      <th>ACTION</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                  <?php
                                           $sql="SELECT * FROM doctor_meeting WHERE  doctor_meeting.meeting_created= 'D001'";
               $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                      //$rowString = " <tr><td>". $row["meeting_title"]."</td><td>". $row["meeting_desc"]."</td><td>". $row["meeting_date"]."</td><td>". $row["meeting_time"]."</td><td><button type='button' class='btn btn-primary btn-block'>Create Room</button></td></tr>"
                      //echo $rowString;
                         echo "<tr><td>". $row["meeting_title"]."</td>
                         <td>". $row["meeting_desc"]."</td>
                         <td>". $row["meeting_date"]."</td>
                         <td>". $row["meeting_time"]."</td>
                         <td><button type='button' class='btn btn-primary btn-block'>Create Room</button></td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>0 results</td></tr>";
                }
?>
                                   
          
                                  </tbody>
                                </table>


                            </div>
                          </div>
                        </div>
                    </div>


                    <div class="modal fade" id="meeting-modal" role="dialog">
                      <div class="modal-dialog">
                      
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title">Meeting Setup Form</h3>
                          </div>
                          <div class="modal-body">

                           <div class="col-md-12">
                              <label class="col-md-4 control-label" for="selectbasic">Country   :</label>
                              <div class="col-md-4">
                                <select id="selectbasic" name="Country" class="form-control">
                                  <option value="1">Option one</option>
                                  <option value="2">Option two</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-12"><br></div>
                            


                           <div class="col-md-12">
                               <label class="col-md-4 control-label" for="selectbasic">State     :</label>
                              <div class="col-md-4">
                                <select id="selectbasic" name="State" class="form-control">
                                  <option value="1">Option one</option>
                                  <option value="2">Option two</option>
                                </select>
                              </div>
                           </div>
                           <div class="col-md-12"><br></div>
                          


                           <div class="col-md-12">
                               <label class="col-md-4 control-label" for="selectbasic">Hospital Name    :</label>
                              <div class="col-md-4">
                                <select id="selectbasic" name="Hospital" class="form-control">
                                  <option value="1">Option one</option>
                                  <option value="2">Option two</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-12"><br></div>

                            <div class="col-md-12">
                               <label class="col-md-4 control-label" for="selectbasic">Doctor Name    :</label>
                              <div class="col-md-4">
                                <select id="selectbasic" name="Hospital" class="form-control">
                                  <option value="1">Option one</option>
                                  <option value="2">Option two</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-12"><br></div>

                            <table class="table table-bordered">

                             <thead>
                                    <tr>
                                      <th>Bil</th>
                                      <th>Doctor Name</th>
                                      <th>Hospital</th>
                                    </tr>
                                  </thead>
                                   <tbody>
                                   <tr>
                                   <td>1</td>
                                   <td>syah</td>
                                   <td>tanjung rambutan</td>
                                   </tr>


                                   </tbody>
                              
                            </table>


                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                        
                      </div>
                    </div>

        >
                </div>