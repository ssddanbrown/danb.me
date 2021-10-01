<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="theme-color" content="#73B3B3" />

    <title>Dan Brown - UK Web Developer</title>

    <!-- Icons -->
    <link rel="icon" type="image/png" href="icons/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="icons/favicon-16x16.png" sizes="16x16" />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="./src/styles.css">
    <style>
        <?php # include('src/styles.css'); 
        ?>
    </style>
</head>

<body>


    <section id="about" class="content-wrap grid">

        <div class="grid-item-wide grid-item-tall card">
            <img src="./images/me.jpg" width="100%" alt="Image of Dan Brown" class="image-cover">
        </div>

        <header class="grid-item-wide card blue">
            <h1 class="logo">Dan Brown</h1>
            <ul class="social">
                <li><a href="https://github.com/ssddanbrown" target="_blank">GitHub</a></li>
                <li><a href="https://uk.linkedin.com/in/danjamesbrown" target="_blank">LinkedIn</a></li>
                <li><a href="https://twitter.com/ssddanbrown" target="_blank">Twitter</a></li>
            </ul>
        </header>

        <?php
        $feed = simplexml_load_string(file_get_contents('https://danb.me/blog/index.xml'));
        ?>

        <section class="container card grid-item-wide" id="blog">
            <h2>Latest Blog Posts</h2>
            <?php foreach ($feed->channel->item as $post) : ?>
                <?php $date = (new DateTime($post->pubDate))->format('Y-m-d'); ?>
                <article class="blogpost">
                    <p><a href="<?php echo $post->link; ?>"><?php echo $date . ' &nbsp; ' . $post->title; ?></a></p>
                </article>
            <?php endforeach; ?>
        </section>

        <?php
        $projects = json_decode(file_get_contents('./data/projects.json'));
        ?>

        <section class="container card grid-item-wide" id="projects">
            <h2>Latest Projects</h2>

            <div class="project-container">
                <?php foreach ($projects as $project) : ?>
                    <a href="<?php echo $project->link ?>" draggable="false" rel="noopener" target="_href" class="project">
                        <h3><?php echo $project->title ?></h3>
                        <p class="summary"><?php echo htmlentities($project->description); ?></p>
                        <p class="tech"><?php foreach ($project->skills as $skill) : ?>
                                <span><?php echo htmlentities($skill); ?></span><?php endforeach; ?>
                        </p>
                    </a>
                <?php endforeach; ?>
            </div>

        </section>
    </section>

    <!-- JavaScript -->
    <script type="text/javascript" async src="src/script.js"></script>
</body>

</html>