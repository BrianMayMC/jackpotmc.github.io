<?php
    include("functions/functions.php");
    require_once("inc/header-rest.php");

    if (isset($_GET['pageno'])) {
        $pageno = $_GET['pageno'];
    } else {
        $pageno = 1;
    }
    $no_of_records_per_page = 10;
    $offset = ($pageno-1) * $no_of_records_per_page;

    $total_pages_sql = "SELECT COUNT(*) FROM bordersmp";
    $result = mysqli_query($conn,$total_pages_sql);
    $total_rows = mysqli_fetch_array($result)[0];
    $total_pages = ceil($total_rows / $no_of_records_per_page);

    $sql = "SELECT * FROM bordersmp ORDER BY points DESC LIMIT $offset, $no_of_records_per_page";
?>
                    <span>HCF STATS</span>
                </div>
            </div>
        </header>
        <main class="main">
            <div class="fullpage-holder">
                <div class="main-section mn-sec">
                    <div class="section-title" data-aos="fade-down">
                        <span class="top">VIEW HCF STATS BELOW</span>
                    </div>
                    <div class="content">
                        <div class="leaderboards-section aos-init aos-animate">
                            <div class="tab-container">
                                <div class="tab-content tab-cont">
                                    <div class="col-lg-12">
                                        <div class="table-wrapper aos-init aos-animate" data-aos="fade-down">
                                            <table class="fl-table" id="lbs-tbl">
                                                <?php
                                                    $res_data = mysqli_query($conn,$sql);
                                                    $sn=1;
                                                    if ($pageno > 1) {
                                                        $sn=($pageno-1)*10+1;
                                                    }
                                                    while($row = mysqli_fetch_array($res_data)){
                                                ?>
                                                    <tr>
                                                        <td><img src="https://visage.surgeplay.com/head/128/<?php echo $row['uuid']?>"/></td>
                                                        <td><?php echo $sn; ?></td>
                                                        <td><?php echo $row['username']??''; ?></td>
                                                        <td><?php echo $row['points']??''; ?> points</td>
                                                    </tr>
                                                  <?php  $sn++;}?>
                                            </table>
                                        </div>
                                        <ul class="pagination">
                                            <li><a href="?pageno=1">First</a></li>
                                            <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
                                                <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
                                            </li>
                                            <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                                                <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
                                            </li>
                                            <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
                                        </ul>
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