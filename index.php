<?php
    include("functions/functions.php");
    require_once("inc/header.php");
?>
        <main class="main">
            <div class="fullpage-holder">
                <div class="server-info-section">
                    <div class="info-holder" data-aos="fade-right">
                        <div class="left-side">
                            <img src="assets/img/hcf.jpg"/>
                        </div>
                        <div class="right-side">
                            <div class="border-top"></div>
                            <div class="titles">
                                <span>What is</span>
                                <span class="colored">Hardcore factions?</span>
                            </div>
                            <div class="info-text">
                                <span><span class="colored">›</span> Hardcore Factions is a hardcore gamemode where your main goal is to get rich and make others raidable. Read up here (shorturl.at/jyIK7) for more information on how to play this exciting, competitive PvP gamemode.</span>
                            </div>
                        </div>
                    </div>
                    <div class="info-holder info-two" data-aos="fade-left">
                        <div class="left-side">
                            <div class="border-top"></div>
                            <div class="titles">
                                <span>What is</span>
                                <span class="colored">Lifesteal SMP?</span>
                            </div>
                            <div class="info-text">
                                <span><span class="colored">›</span> Lifesteal SMP is a survival multiplayer experience with a twist. Players are able to steal each others health by killing each other. So let's say you join one of our Lifesteal realms for the first time, you'll spawn with 10 hearts just like in vanilla Minecraft. You venture out of spawn into the wild and find another new player that you 1v1 to the death. You kill them, which adds an extra heart to your health permanently, now at 11 hearts. The other player lost a heart, since you stole it from them.</span>
                            </div>
                        </div>
                        <div class="right-side">
                            <img src="assets/img/lifestealsmp.jpg"/>
                        </div>
                    </div>
                </div>
                <div class="server-info-section single-section">
                    <div class="info-holder" data-aos="fade-down">
                        <div class="left-side">
                            <img src="assets/img/bordersmp.jpg"/>
                        </div>
                        <div class="right-side">
                            <div class="border-top"></div>
                            <div class="titles">
                                <span>What is</span>
                                <span class="colored">Border SMP?</span>
                            </div>
                            <div class="info-text">
                                <span><span class="colored">›</span> Border SMP is a unique, fast paced gamemode where the world border revolves around a pig, centered within the border that is controlled by players or roams freely. Many more updates to come to this gamemode soon.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lbs-section" id="lbsPg">
                    <div class="section-title" data-aos="fade-down">
                        <span class="top">Become the best</span>
                        <span class="bottom">Check our leaderboards</span>
                    </div>
                    <div class="lbs-content">
                        <div class="left-side" data-aos="fade-right">
                            <img src="assets/img/player.png"/>
                        </div>
                        <div class="right-side">
                            <div class="lbs-menu" data-aos="fade-up">
                                <ul class="tab-list" id="lbs-tabs">
                                    <li class="tab-item"><label class="tab-trigger active" for="tab1">LifestealSMP</label></li>
                                    <li class="tab-item"><label class="tab-trigger" for="tab2">BorderSMP</label></li>
                                    <li class="tab-item"><label class="tab-trigger" for="tab3">HCF</label></li>
                                </ul>
                            </div>
                            <div class="lbs-box">
                                <input type="radio" class="tab-toggle" name="tab-toggle" id="tab1" checked="">
                                <input type="radio" class="tab-toggle" name="tab-toggle" id="tab2">
                                <input type="radio" class="tab-toggle" name="tab-toggle" id="tab3">
                                <div class="tab-container">
                                    <div class="tab-content">
                                        <div class="col-lg-12">
                                            <div class="table-wrapper aos-init aos-animate" data-aos="fade-down">
                                                <table class="fl-table" id="lbs-tbl">
                                                    <?php
                                                        if(is_array($fetchData)){      
                                                            $sn=1;
                                                            foreach($fetchData as $data){
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
                                                            <?php echo $fetchData; ?>
                                                        </td>
                                                    <tr>
                                                        <?php
                                                        }
                                                        ?>
                                                </table>
                                            </div>
                                            <a href="leaderboards.php" class="btn btn-see-more"><span>Show more...</span></a>
                                        </div>
                                    </div>


                                    <div class="tab-content">
                                        <div class="col-lg-12">
                                            <div class="table-wrapper aos-init aos-animate" data-aos="fade-down">
                                                <table class="fl-table" id="lbs-tbl">
                                                    <?php
                                                        $tableName="bordersmp";
                                                        $fetchData = fetch_data($db, $tableName, $columns);
                                                        if(is_array($fetchData)){      
                                                            $sn=1;
                                                            foreach($fetchData as $data){
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
                                                            <?php echo $fetchData; ?>
                                                        </td>
                                                    <tr>
                                                    <?php
                                                        }
                                                    ?>
                                                </table>
                                            </div>
                                            <a href="leaderboards.php" class="btn btn-see-more"><span>Show more...</span></a>
                                        </div>
                                    </div>


                                    <div class="tab-content">
                                        <div class="col-lg-12">
                                            <div class="table-wrapper aos-init aos-animate" data-aos="fade-down">
                                                <table class="fl-table" id="lbs-tbl">
                                                    <?php
                                                        $tableName="hcf";
                                                        $fetchData = fetch_data($db, $tableName, $columns);
                                                        if(is_array($fetchData)){      
                                                            $sn=1;
                                                            foreach($fetchData as $data){
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
                                                            <?php echo $fetchData; ?>
                                                        </td>
                                                    <tr>
                                                    <?php
                                                        }
                                                    ?>
                                                </table>
                                            </div>
                                            <a href="leaderboards.php" class="btn btn-see-more"><span>Show more...</span></a>
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