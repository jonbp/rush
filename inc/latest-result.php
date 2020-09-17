<div class="latest-result-wrapper">
  <div class="latest-result">
    <div class="container results">
      <div class="result-info">
        <h2 class="latest-title">Latest Result
          <span class="datestamp"><?php echo $csv[0][3]; ?></span>
        </h2>
        <div class="result dl">
          <div class="figure-wrap">
            <div class="icon">
              <?php echo file_get_contents('./src/svg/arrow.svg'); ?>
            </div>
            <div class="figure">
              <?php $dl_parts = explode('.', (string)$csv[0][6]); ?>
              <span class="large"><?php echo $dl_parts[0]; ?></span>
              <span class="small">.<?php echo $dl_parts[1]; ?></span>
              <span class="label">mbps</span>
            </div>
          </div>
          <div class="result-label">Download</div>
        </div>
        <div class="result ul">
          <div class="figure-wrap">
            <div class="icon">
              <?php echo file_get_contents('./src/svg/arrow.svg'); ?>
            </div>
            <div class="figure">
              <?php $ul_parts = explode('.', (string)$csv[0][7]); ?>
              <span class="large"><?php echo $ul_parts[0]; ?></span>
              <span class="small">.<?php echo $ul_parts[1]; ?></span>
              <span class="label">mbps</span>
            </div>
          </div>
          <div class="result-label">Upload</div>
        </div>
        <div class="result ping">
          <div class="figure-wrap">
            <div class="icon">
              <?php echo file_get_contents('./src/svg/ping.svg'); ?>
            </div>
            <div class="figure">
              <?php $ping_parts = explode('.', (string)$csv[0][5]); ?>
              <span class="large"><?php echo $ping_parts[0]; ?></span>
              <span class="small">.<?php echo $ping_parts[1]; ?></span>
              <span class="label">ms</span>
            </div>
          </div>
          <div class="result-label">Ping</div>
        </div>
      </div>
      <div class="result-detail">
        <h2>Result Detail</h2>
        <div class="label">Sponsor</div>
        <div class="value"><?php echo $csv[0][1]; ?></div>
        <div class="label">Location</div>
        <div class="value"><?php echo $csv[0][2]; ?></div>
        <div class="label">Distance</div>
        <div class="value"><?php echo $csv[0][4]; ?>km</div>
        <div class="label">Host IP</div>
        <div class="value"><?php echo $csv[0][9]; ?></div>
      </div>
    </div>
  </div>
</div>