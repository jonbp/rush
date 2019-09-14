<div class="previous-results">
  <div class="container">
    <h2>Previous Results</h2>

    <div class="results">
      <div class="result-row labels">
        <span>Time / Date</span>
        <span>
        <div class="icon">
          <?php echo file_get_contents('./src/svg/arrow-small.svg'); ?>
        </div>
        Download</span>
        <span>
        <div class="icon">
          <?php echo file_get_contents('./src/svg/arrow-small.svg'); ?>
        </div>
        Upload</span>
        <span>Ping</span>
        <span>Sponsor</span>
        <span>Location</span>
        <span>Distance</span>
        <span>Host IP</span>
      </div>
      <?php foreach(array_slice($csv,1) as $speedtest) { ?>
        <div class="result-row ">
          <span><?php echo $speedtest[3] ?></span>
          <span><?php echo $speedtest[6] ?>mbps</span>
          <span><?php echo $speedtest[7] ?>mbps</span>
          <span><?php echo $speedtest[5] ?>ms</span>
          <span><?php echo $speedtest[1] ?></span>
          <span><?php echo $speedtest[2] ?></span>
          <span><?php echo $speedtest[4] ?>km</span>
          <span><?php echo $speedtest[9] ?></span>
        </div>
      <?php } ?>
    </div>
  </div>
</div>