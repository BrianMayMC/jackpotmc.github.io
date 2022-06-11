<?php
    include("functions/functions.php");
    require_once("inc/header-rest.php");
?>
                    <span>Leaderboards</span>
                </div>
            </div>
        </header>
        <main class="main">
            <div class="fullpage-holder">
                <div class="main-section">
                    <div class="section-title" data-aos="fade-down">
                        <span class="top">Become the best</span>
                        <span class="bottom">Check our leaderboards</span>
                    </div>
                    <div class="content">
                        <div class="leaderboards-section aos-init aos-animate">
                            <div class="lbs-menu" data-aos="fade-up">
                                <ul class="tab-list" id="lbs-tabs">
                                    <li class="tab-item"><label class="tab-trigger active" for="tab1">LifestealSMP</label></li>
                                    <li class="tab-item"><label class="tab-trigger" for="tab2">BorderSMP</label></li>
                                    <li class="tab-item"><label class="tab-trigger" for="tab3">HCF</label></li>
                                </ul>
                            </div>
                            <div class="lbs-box" data-aos="fade-right">
                                <input type="radio" class="tab-toggle" name="tab-toggle" id="tab1" checked="">
                                <input type="radio" class="tab-toggle" name="tab-toggle" id="tab2">
                                <input type="radio" class="tab-toggle" name="tab-toggle" id="tab3">
                                <div class="tab-container">
                                    <div class="tab-content">
                                        <div class="col-lg-12">
                                            <div class="table-wrapper aos-init aos-animate" data-aos="fade-down">
                                                <table class="fl-table" id="lbs-tbl">
                                                    <?php
                                                        if(is_array($fetchDataAll)){      
                                                            $sn=1;
                                                            foreach($fetchDataAll as $data){
                                                    ?>
                                                        <tr>
                                                            <td><img src="https://visage.surgeplay.com/head/128/<?php echo $data['uuid']?>"/></td>
                                                            <td><?php echo $sn; ?></td>
                                                            <td><?php echo $data['username']??''; ?></td>
                                                            <td><?php echo $data['points']??''; ?> points</td>
                                                        </tr>
                                                        <?php
                                                        $sn++;
                                                        }} else{ ?>
                                                        <tr>
                                                            <td colspan="8">
                                                            <?php echo $fetchDataAll; ?>
                                                        </td>
                                                        </tr>
                                                        <?php
                                                        }
                                                        ?>
                                                </table>
                                            </div>
                                            <a href="leaderboards-lifestealsmp.php" class="btn btn-see-more"><span>Show more...</span></a>
                                        </div>
                                    </div>


                                    <div class="tab-content">
                                        <div class="col-lg-12">
                                            <div class="table-wrapper aos-init aos-animate" data-aos="fade-down">
                                                <table class="fl-table" id="lbs-tbl">
                                                    <?php
                                                        $tableName="bordersmp";
                                                        $fetchDataAll = fetch_data_all($db, $tableName, $columns);
                                                        if(is_array($fetchDataAll)){      
                                                            $sn=1;
                                                            foreach($fetchDataAll as $data){
                                                    ?>
                                                        <tr>
                                                            <td><img src="https://visage.surgeplay.com/head/128/<?php echo $data['uuid']?>"/></td>
                                                            <td><?php echo $sn; ?></td>
                                                            <td><?php echo $data['username']??''; ?></td>
                                                            <td><?php echo $data['points']??''; ?> points</td>
                                                        </tr>
                                                        <?php
                                                        $sn++;
                                                        }} else{ ?>
                                                        <tr>
                                                            <td colspan="8">
                                                            <?php echo $fetchDataAll; ?>
                                                        </td>
                                                        </tr>
                                                        <?php
                                                        }
                                                        ?>
                                                </table>
                                            </div>
                                            <a href="leaderboards-bordersmp.php" class="btn btn-see-more"><span>Show more...</span></a>
                                        </div>
                                    </div>


                                    <div class="tab-content">
                                        <div class="col-lg-12">
                                            <div class="table-wrapper aos-init aos-animate" data-aos="fade-down">
                                                <table class="fl-table" id="lbs-tbl">
                                                    <?php
                                                        $tableName="hcf";
                                                        $fetchDataAll = fetch_data_all($db, $tableName, $columns);
                                                        if(is_array($fetchDataAll)){      
                                                            $sn=1;
                                                            foreach($fetchDataAll as $data){
                                                    ?>
                                                        <tr>
                                                            <td><img src="https://visage.surgeplay.com/head/128/<?php echo $data['uuid']?>"/></td>
                                                            <td><?php echo $sn; ?></td>
                                                            <td><?php echo $data['username']??''; ?></td>
                                                            <td><?php echo $data['points']??''; ?> points</td>
                                                        </tr>
                                                        <?php
                                                        $sn++;
                                                        }} else{ ?>
                                                        <tr>
                                                            <td colspan="8">
                                                            <?php echo $fetchDataAll; ?>
                                                        </td>
                                                        </tr>
                                                        <?php
                                                        }
                                                        ?>
                                                </table>
                                            </div>
                                            <a href="leaderboards-hcf.php" class="btn btn-see-more"><span>Show more...</span></a>
                                        </div>
                                    </div>
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