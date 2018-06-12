                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="panel panel-info">
                          <div class="panel-heading align-left">
                            <h3 class="panel-title">Invitation Meeting</h3>
                          </div>
                          <div class="panel-body">
                            <div>
                                <table class="table table-bordered" id="tbl_MD_INVITE_MEETING">
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
                                           $sql="SELECT participant.meeting_id, participant.doctor_id, doctor_meeting.meeting_title, doctor_meeting.meeting_title,doctor_meeting.meeting_desc, doctor_meeting.meeting_time, doctor_meeting.meeting_date
               FROM participant INNER JOIN doctor_meeting
               ON participant.meeting_id=doctor_meeting.meeting_id 
               WHERE  participant.doctor_id= 'D001'AND participant.participant_status = '0'";
               $result = $conn->query($sql);


                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                      //$rowString = " <tr><td>". $row["meeting_title"]."</td><td>". $row["meeting_desc"]."</td><td>". $row["meeting_date"]."</td><td>". $row["meeting_time"]."</td><td><button type='button' class='btn btn-primary btn-block'>Create Room</button></td></tr>"
                      //echo $rowString;
                         echo "<tr><td>". $row["meeting_title"]."</td>
                         <td>". $row["meeting_desc"]."</td>
                         <td>". $row["meeting_date"]."</td>
                         <td>". $row["meeting_time"]."</td><td class='hidden' id='meeting_id'>". $row["meeting_id"]."</td><td class='hidden' id ='doctor_id'>". $row["doctor_id"]."</td>
                         <td><button type='button' class='btn btn-primary btn-block' id='btn_MD_JOIN_MEETING'>Join</button></td></tr>";
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
                </div>

