<?php require_once 'data/content.php'; ?>
        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron"><?= content($content); ?></div>
          <?php require_once 'tab.php'; ?>
        </div><!--/.col-xs-12.col-sm-9-->
  <?php require_once 'menu.php'; ?>
