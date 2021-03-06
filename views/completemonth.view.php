<?php include 'models/completemonth.model.php'; ?>
<h6 class="w3-opacity"><b>Offene Monate</b></h6>
  <div class="w3-bar">
    <?php foreach ($months as $month): ?>
      <?php if ($month['MonthCompleted'] == false): ?>
        <form name="correctday-form" action="index.php?page=timereport" method="post" class="w3-display-container w3-bar-item">
          <div>
            <p>
              <input type="submit" class="w3-button w3-black w3-small" value="<?= htmlspecialchars($month['MonthDate'], ENT_QUOTES, "UTF-8")?>" name="completemonth_submit_button">
              <input type="hidden" value="<?= htmlspecialchars($month['MonthID'], ENT_QUOTES, "UTF-8")?>" name="MonthID">
            </p>
          </div>
          <hr>
        </form>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
  <div class="w3-bar">
  <h6 class="w3-opacity"><b>Abgeschlossene Monate</b></h6>
  <?php foreach ($months as $month): ?>
    <?php if ($month['MonthCompleted'] == true): ?>
      <p class="w3-bar-item">
        <?= htmlspecialchars($month['MonthDate'], ENT_QUOTES, "UTF-8")?>
      </p>
    <?php endif; ?>
  <?php endforeach; ?>
  </div>
