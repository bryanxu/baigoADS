            </div>
        </div>
    </div>

    <footer class="container-fluid bg-footer clearfix">
        <div class="pull-left">
            <img class="img-responsive" src="<?php echo BG_URL_STATIC; ?>console/<?php echo BG_DEFAULT_UI; ?>/image/logo.png">
        </div>
        <div class="pull-right">
            <?php echo PRD_ADS_POWERED; ?>
            <?php if (BG_DEFAULT_UI == "default") { ?>
                <a href="<?php echo PRD_ADS_URL; ?>" target="_blank"><?php echo PRD_ADS_NAME; ?></a>
            <?php } else {
                echo BG_DEFAULT_UI; ?> ADS
            <?php } ?>
            <?php echo PRD_ADS_VER; ?>
        </div>
    </footer>
