
<?php

 include 'connect/dbconn.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php

        include 'head/header.php';


    ?>

 
</head>
<body>

    <div class="container-fluid">
        <div class="row">

        <?php
            include 'side/sidemenu.php';
        ?>

        <nav class="navbar navbar-fixed-top" style=" border-bottom: 1px solid #ccc;  margin-left: 17.3%;">
            <div class="container-fluid">
                <div class="row">
        

                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-left" style="margin-left: 20px;">
                            <li><a href="#" id="sidebar-menu"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
                        </ul>


                        <ul class="nav navbar-nav navbar-right" style="margin-right: 20px;">
                            <li><a href="#">Button</a></li>
                            <li><a href="#"><i class="fa fa-power-off" aria-hidden="true"></i></a></li>
                            

                        </ul>

                    </div>

                </div>

            </div>
        </nav>

            <div class="col-md-10 col-sm-8 main-content">

            <!--Main content code to be written here -->
    <div class="tab-content">


            <div class="tab-pane active" id="invitation" >
                <?php

                    include 'body/invite-meeting.php';

                ?>
            </div>

             <div class="tab-pane" id="schedule" >
                <?php

                    include 'body/schedule-meeting.php';

                ?>
            </div>
              <div  class="tab-pane" id="setup">
                <?php

                    include 'body/meeting-setup.php';

                ?>
            </div>

            <div  class="tab-pane" id="livesurgery">
                <?php

                    include 'body/live-surgery.php';

                ?>
            </div>

            <div  class="tab-pane" id="watch-live">
                <?php

                    include 'body/watch-live.php';

                ?>
            </div>
            <div  class="tab-pane" id="hahaha">
                <?php

                    include 'body/watch-live2.php';

                ?>
            </div>
            
            
    </div>

            
        </div>
    </div>

    <?php

        include 'footer/footer.php';

    ?>

</body>

</html>