<?php
  require "./api_news.php";

  function newsDataFromApiNews($newsData) {
    ?>
    <br><br>
      <div class="container text-center">
        <div class="card bg-secondary rounded-3">
          <div class="card-header h4 pt-2 text-white align-middle" style="height: 6rem;"><br>
            Latest News
          </div>
        </div>
      </div>
    <?php
  }

  function newsEmptyFromApiNews($newsData) {
    //code
  }
?>