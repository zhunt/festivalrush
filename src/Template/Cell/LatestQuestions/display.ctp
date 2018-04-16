<?php debug($questions) ?>
<div class="card-deck upcoming-festivals ">
    <div class="card-header">
        <h5 class="card-title">Latest Questions</h5>
    </div>
    <div class="card-body pr-0 pl-0">

        <?php if ($questions): ?>
        <!-- -->
            <?php foreach( $questions as $question ): ?>
                <div class="card mb-2" style="width: 100%">
                    <div class="card-body">
                        <h5 class="card-title">Q: <a href="question-page-1.html"><?php echo h($question->question) ?></a></h5>

                        <?php if ($question->festivals ): ?>
                            <?php foreach( $question->festivals as $festival ): ?>
                                <?php echo "<a href='/festival-page-1.html' class='card-link'>Festival: <b>{$festival->name}</b></a>"; ?>
                            <?php endforeach; ?>
                        <?php endif;?>

                        <?php if ($question->venues): ?>
                            <?php foreach( $question->venues as $venue ): ?>
                                <?php echo "<a href='/festival-page-1.html' class='card-link'>Venue: <b>{$venue->name}</b></a>"; ?>
                            <?php endforeach; ?>
                        <?php endif;?>

                    </div>
                </div>
            <?php endforeach; ?>

        <?php endif;?>

    </div>
</div>
