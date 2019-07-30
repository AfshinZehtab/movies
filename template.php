<?php
    if (isset($_GET['search']) && !empty($_GET['search']))
    { ?>
        <div class="content_result shadow p-3 bg-white rounded row">
            <div class="col-3 box-left">
                <div class="content_result__title">
                        <h5><?php echo $result->title; ?> <span class="badge badge-info"><?php echo $result->year; ?></span></h5>
                </div>
                <img src="<?php echo $result->img; ?>" alt="">
            </div>
            <div class="col-9 box-right row">
                <div class="content_result__infos col-10">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <p>
                                <span class="badge badge-danger">Rating</span>
                                <?php if($result->rating != "n/A") : ?>
                                        <?php echo $result->rating ?>
                                        from
                                        <?php echo number_format($result->ratingCount)  ?>
                                <?php else : ?>
                                        -----
                                <?php endif; ?>
                            </p>
                        </li>
                        <li class="list-group-item">
                            <p>
                                <span class="badge badge-primary">Director</span>
                                <?php if($result->director != "n/A") : ?>
                                        <?php echo $result->director ?>
                                <?php else : ?>
                                        -----
                                <?php endif; ?>
                            </p>
                        </li>
                        <li class="list-group-item">
                            <p>
                                <span class="badge badge-primary">Writer</span>
                                <?php if($result->writer != "n/A") : ?>
                                        <?php echo $result->writer ?>
                                <?php else : ?>
                                        -----
                                <?php endif; ?>
                            </p>
                        </li>
                        <li class="list-group-item">
                            <p>
                                <span class="badge badge-primary">Genre</span>
                                <?php if($result->genre != "n/A") : ?>
                                        <?php echo $result->genre ?>
                                <?php else : ?>
                                        -----
                                <?php endif; ?>
                            </p>
                        </li>
                        <li class="list-group-item">
                                <p>
                                        <span class="badge badge-primary">Language</span>
                                        <?php if($result->language != "n/A") : ?>
                                                <?php echo $result->language ?>
                                        <?php else : ?>
                                                -----
                                        <?php endif; ?>
                                </p>
                        </li>
                        <?php if($result->seasons != "n/A") : ?>
                            <li class="list-group-item">
                                <p>
                                    <span class="badge badge-primary">Seasons</span>
                                    <?php echo $result->seasons ?>
                                </p>
                            </li>
                        <?php endif; ?>
                        </li>
                        <li class="list-group-item">
                            <p>
                                <span class="badge badge-primary">Stars</span>
                                <?php if($result->stars != "n/A") : ?>
                                        <?php echo $result->stars ?>
                                <?php else : ?>
                                        -----
                                <?php endif; ?>
                            </p>
                        </li>
                        <li class="list-group-item">
                            <p>
                                <?php if($result->plot != "n/A") : ?>
                                        <?php echo $result->plot ?>
                                <?php else : ?>
                                        -----
                                <?php endif; ?>
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-2">
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Download
                        </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <a class="dropdown-item btn-success" href="#">English</a>
                                <a class="dropdown-item btn-success" href="#">German</a>
                                <a class="dropdown-item btn-success" href="#">Persian</a>
                        </div>
                    </div>
                    <?php if($result->trailer != "n/A") : ?>
                        <a  class="btn btn-outline-warning mt-4" href="<?php echo $result->trailer ?>" target="_blank">
                                Trailer
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    <?php
    }
    elseif (!isset($_GET['search']))
    {
        echo "<h2 class='display-6'>Please search a Movie or Serial...</h2>";
    }
    else
    {
        echo "<h2 class='display-6' style='color: #fff'>Movie not found. 😞</h2>";
    }
?>
