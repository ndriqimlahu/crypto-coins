<?php
  require "./api_coins.php";

  function noDataFromApi($cryptoData) {
    ?>
    <br><br>
    <div class="container border border-dark bg-secondary rounded-3 mb-3 px-5" style="position:sticky;top:0">
      <div class="table-responsive">
        <table class="table table-borderless">
          <colgroup>
            <col style="width: 6%;min-width:auto;max-width:auto;">
            <col style="width: 12%;min-width:auto;max-width:auto;">
            <col style="width: 12%;min-width:auto;max-width:auto;">
            <col style="width: 10%;min-width:auto;max-width:auto;">
            <col style="width: 10%;min-width:auto;max-width:auto;">
            <col style="width: 12%;min-width:auto;max-width:auto;">
            <col style="width: 2%;min-width:auto;max-width:auto;">
            <col style="width: 2%;min-width:auto;max-width:auto;">
            <col style="width: 2%;min-width:auto;max-width:auto;">
          <thead>
            <tr class="h6 text-white text-center align-middle">
              <th class="header" scope="col">Rank</th>
              <th class="header" scope="col">Name</th>
              <th class="header" scope="col">Price</th>
              <th class="header" scope="col">Volume</th>
              <th class="header" scope="col">Market Cap</th>
              <th class="header" scope="col">Available Supply</th>
              <th class="header" scope="col">1hour %</th>
              <th class="header" scope="col">1day %</th>
              <th class="header" scope="col">1week %</th>
            </tr><br>
          </thead>
          </colgroup>
        </table>
      </div>
    </div>
    <?php
  }
?>