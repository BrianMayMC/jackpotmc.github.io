<?php
    include("functions/functions.php");
    require_once("inc/header-rest.php");
?>
                    <span>Staff</span>
                </div>
            </div>
        </header>
        <main class="main">
            <div class="fullpage-holder">
                <div class="main-section .mn-sec">
                    <div class="section-title" data-aos="fade-down">
                        <span class="top">LIST OF OUR</span>
                        <span class="bottom">STAFF MEMBERS</span>
                    </div>
                    <div class="content">
                        <div class="staff-section aos-init aos-animate">
                            <div class="staff-members">
                                <div class="staff-panel-heading aos-init aos-animate" data-aos="fade-down">
                                    <div class="staff owner">
                                        <span class="staff-title">Owner</span>
                                    </div>
                                </div>
                                <div class="staff-panel aos-init aos-animate" data-aos="fade-down">
                                    <?php
                                        $query = "SELECT * FROM $staffTable"." WHERE rank='$rank'";
                                        $res_data = mysqli_query($conn,$query);
                                        while($staff = mysqli_fetch_array($res_data)){
                                    ?>
                                        <div class="staff-panel-body">
                                            <div class="staff-member">
                                                <a href="#">
                                                    <img src="https://visage.surgeplay.com/full/256/<?php echo $staff['uuid']?>">
                                                    <div class="staff-name">
                                                        <span><?php echo $staff['username']??''; ?></span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    <?php
                                        } ?> 
                                </div>
                                <div class="staff-panel-heading aos-init aos-animate" data-aos="fade-down">
                                    <div class="staff manager">
                                        <span class="staff-title">Manager</span>
                                    </div>
                                </div>
                                <div class="staff-panel aos-init aos-animate" data-aos="fade-down">  
                                    <?php
                                        $rank="manager";
                                        $query = "SELECT * FROM $staffTable"." WHERE rank='$rank'";
                                        $res_data = mysqli_query($conn,$query);
                                        while($staff = mysqli_fetch_array($res_data)){
                                    ?>
                                        <div class="staff-panel-body">
                                            <div class="staff-member">
                                                <a href="#">
                                                    <img src="https://visage.surgeplay.com/full/256/<?php echo $staff['uuid']?>">
                                                    <div class="staff-name">
                                                        <span><?php echo $staff['username']??''; ?></span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    <?php
                                        } ?> 
                                </div>
                                <div class="staff-panel-heading aos-init aos-animate" data-aos="fade-down">
                                    <div class="staff admin">
                                        <span class="staff-title">Admin</span>
                                    </div>
                                </div>
                                <div class="staff-panel aos-init aos-animate" data-aos="fade-down">  
                                    <?php
                                        $rank="admin";
                                        $query = "SELECT * FROM $staffTable"." WHERE rank='$rank'";
                                        $res_data = mysqli_query($conn,$query);
                                        while($staff = mysqli_fetch_array($res_data)){
                                    ?>
                                        <div class="staff-panel-body">
                                            <div class="staff-member">
                                                <a href="#">
                                                    <img src="https://visage.surgeplay.com/full/256/<?php echo $staff['uuid']?>">
                                                    <div class="staff-name">
                                                        <span><?php echo $staff['username']??''; ?></span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    <?php
                                        } ?> 
                                </div>
                                <div class="staff-panel-heading aos-init aos-animate" data-aos="fade-down">
                                    <div class="staff srmod">
                                        <span class="staff-title">Sr. Moderator</span>
                                    </div>
                                </div>
                                <div class="staff-panel aos-init aos-animate" data-aos="fade-down">  
                                    <?php
                                        $rank="srmod";
                                        $query = "SELECT * FROM $staffTable"." WHERE rank='$rank'";
                                        $res_data = mysqli_query($conn,$query);
                                        while($staff = mysqli_fetch_array($res_data)){
                                    ?>
                                        <div class="staff-panel-body">
                                            <div class="staff-member">
                                                <a href="#">
                                                    <img src="https://visage.surgeplay.com/full/256/<?php echo $staff['uuid']?>">
                                                    <div class="staff-name">
                                                        <span><?php echo $staff['username']??''; ?></span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    <?php
                                        } ?> 
                                </div>
                                <div class="staff-panel-heading aos-init aos-animate" data-aos="fade-down">
                                    <div class="staff mod">
                                        <span class="staff-title">Moderator</span>
                                    </div>
                                </div>
                                <div class="staff-panel aos-init aos-animate" data-aos="fade-down">  
                                    <?php
                                        $rank="mod";
                                        $query = "SELECT * FROM $staffTable"." WHERE rank='$rank'";
                                        $res_data = mysqli_query($conn,$query);
                                        while($staff = mysqli_fetch_array($res_data)){
                                    ?>
                                        <div class="staff-panel-body">
                                            <div class="staff-member">
                                                <a href="#">
                                                    <img src="https://visage.surgeplay.com/full/256/<?php echo $staff['uuid']?>">
                                                    <div class="staff-name">
                                                        <span><?php echo $staff['username']??''; ?></span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    <?php
                                        } ?> 
                                </div>
                                <div class="staff-panel-heading aos-init aos-animate" data-aos="fade-down">
                                    <div class="staff trialmod">
                                        <span class="staff-title">Trial Mod</span>
                                    </div>
                                </div>
                                <div class="staff-panel aos-init aos-animate" data-aos="fade-down">  
                                    <?php
                                        $rank="trialmod";
                                        $query = "SELECT * FROM $staffTable"." WHERE rank='$rank'";
                                        $res_data = mysqli_query($conn,$query);
                                        while($staff = mysqli_fetch_array($res_data)){
                                    ?>
                                        <div class="staff-panel-body">
                                            <div class="staff-member">
                                                <a href="#">
                                                    <img src="https://visage.surgeplay.com/full/256/<?php echo $staff['uuid']?>">
                                                    <div class="staff-name">
                                                        <span><?php echo $staff['username']??''; ?></span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    <?php
                                        } ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
<?php
    require_once("inc/footer.php");
?>