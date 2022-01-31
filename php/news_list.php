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
    foreach ($newsData as $news) {
    ?>
      <br><br>
      <div class="container d-flex justify-content-around">
        <div class="row">
          <div class="col-4">
            <div class="card rounded-3" style="width: 50rem;">
              <img class="card-img-top" src="<?php echo $news->imgURL ?>" style="height: 25rem;" alt="News Image">
              <div class="card-body">
                <h5 class="card-title"><?php echo $news->title ?></h5>
                <h6 class="card-subtitle mb-3 text-muted"><cite title="Source Title"><?php echo $news->source ?></cite></h6>
                <p class="card-text"><?php echo $news->description ?></p>
              </div>
              <div class="card-body">
                <a class="btn btn-dark" href="<?php echo $news->link ?>" target="_blank" class="card-link">See More</a>
                <a class="btn btn-dark mx-2" href="<?php echo $news->shareURL ?>" target="_blank" class="card-link">Shared Link</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
    <br><br><br><br>
    <?php
  }

  function newsEmptyFromApiNews($newsData) {
    ?>
    <br><br>
      <div class="container text-center mb-3">
        <div class="card bg-secondary rounded-3">
          <div class="card-header h4 pt-2 text-white align-middle" style="height: 6rem;"><br>
            Latest News
          </div>
        </div>
      </div>
    <?php
  }
?>