<?php $cell = $this->cell('Navbar'); echo $cell; ?>

<div class="container">

    <div class="jumbotron ">
        <h1 class="display-4">Festival Rush</h1>
        <p class="lead">Get Answers to Film Festival Questions</p>
        <hr class="my-4">

        <p class="lead">
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </p>
    </div>

    <?php $cell = $this->cell('UpcomingFestivals'); echo $cell; ?>

    <?php $cell = $this->cell('LatestQuestions'); echo $cell; ?>

</div>

<?php $cell = $this->cell('Footer'); echo $cell; ?>






