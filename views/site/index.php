<?php

/* @var $this yii\web\View */






$this->title = 'My Yii Application';
?>

<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

      <?php  foreach ($users as $user){ ?>


                <div class="slider_article">
                  <h2><a class="slider_tittle" href="<?= $user->id;?>"><?=$user->name;?></a></h2>

                </div>
              </div>
                <?php } ?>









    </div>
</div>
