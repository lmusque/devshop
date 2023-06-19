<div class="card">
    <h2 class="project-title">
        <span>
            <?= htmlspecialchars($project->title) ?>
        </span>
    </h2>
    <p>
        <img class="project-gif" src="<?= $project->gif ?>" alt="user project gif">
    </p>
    <div class="bottom-card-container">
        <!-- this has same class as the header -->
        <img class="user-profile-pic" src="<?= htmlspecialchars($project->profile_img) ?>" alt="user profile pic">
        <!-- <span class="language-tag"> <?= htmlspecialchars($language['language_name']) ?></span> -->
        <span class="language-tag"> <?php
                                    foreach ($project->languages as $language) {
                                        echo "$language ";
                                    } ?></span>
        <!-- TODO: we need to be able to display multiple tags here -->
    </div>
</div>