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

    <canvas id="canvas"></canvas>

    <header class="content-wrap">
        <h1 class="logo">Dan Brown</h1>
        <div class="social-icons">
            <a href="https://twitter.com/ssddanbrown" target="_blank" class="social-icon" style="color: #1DA1F2;" title="Twitter Profile"><svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                </svg></a>
            <a href="https://github.com/ssddanbrown" target="_blank" class="social-icon" style="color: #000;" title="GitHub Profile"><svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                </svg></a>
            <a href="https://uk.linkedin.com/in/danjamesbrown" target="_blank" class="social-icon" style="color: #0A66C2;" title="LinkedIn Profile"><svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                </svg></a>
        </div>
    </header>

    <section id="about" class="content-wrap grid">

        <div class="card profile-image">
            <img src="./images/me.webp" width="1200" height="1168" alt="Image of Dan Brown" style="background-color: #c7c0b2;" class="image-cover">
        </div>

        <?php
        $feed = simplexml_load_string(file_get_contents('https://danb.me/blog/index.xml'));
        $posts = $feed->channel->item;
        $postCount = 0;
        ?>

        <section class="container p-1">
            
            <p>
                <span class="dropcap">👋</span> Hello! I'm Dan, a UK based full stack web developer with a love of open source software.
                Most of my free time is spent working on <a href="https://www.bookstackapp.com" target="_blank">BookStack</a>,
                 playing video-games or walking around the Hampshire countryside.
            </p>

            <p>
                I primarily develop in PHP using Laravel, with VueJS being my front-end framework of choice, but I also 
                dabble in Go, NodeJS and Android development.
            </p>

            <h2>Random Side Activities</h2>

            <ul>
                <li>🎥 <a href="https://www.youtube.com/c/BookStackApp" target="_blank">BookStack YouTube Channel</a></li>
                <li>🎥 <a href="https://www.youtube.com/channel/UCGDhoKgOoqPX9Gts9GIuyuQ" target="_blank">DOSS YouTube Channel</a></li>
                <li>📷 <a href="https://danb.me/gallery/" target="_blank">Photo Gallery</a></li>
            </ul>

        </section>

        <section class="container wide">
            <div id="blog">
                <h2>Latest Blog Posts</h2>
                <?php foreach ($posts as $post) : ?>
                    <?php $date = (new DateTime($post->pubDate))->format('Y-m-d'); ?>
                    <article class="blogpost">
                        <p><a href="<?php echo $post->link; ?>"><?php echo $date . ' &nbsp; ' . $post->title; ?></a></p>
                    </article>
                    <?php $postCount++; ?>
                    <?php if($postCount > 6) break; ?>
                <?php endforeach; ?>
                <p><br>📰 <a href="/blog">View all</a></p>
            </div>
        </section>

        <?php
        $projects = json_decode(file_get_contents('./data/projects.json'));
        ?>

        <section class="container wide" id="projects">
            <h2>Latest Projects</h2>

            <div class="project-container">
                <?php foreach ($projects as $project) : ?>
                    <a href="<?php echo $project->link ?>" draggable="false" rel="noopener" target="_href" class="project card">
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
</body>

</html>