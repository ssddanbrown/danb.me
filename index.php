<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="theme-color" content="#73B3B3" />

    <title>Dan Brown - UK Web Developer</title>

    <!-- Icons -->
    <link rel="icon" type="image/png" href="images/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16" />

    <!-- Stylesheets -->
    <!-- <link rel="stylesheet" href="./src/styles.css"> -->
    <style>
        <?php  include('src/styles.css'); 
        ?>
    </style>
</head>

<body>

    <div class="page-bg"></div>

    <div class="window">
        <div class="window-titlebar bezel-out">
            <h1 class="window-title">Dan Brown</h1>
            <div class="window-title-decoration">
                <div></div>
                <div></div>
            </div>
        </div>
        <div class="window-content bezel-out">

            <div class="window-flex">
                <div>
                    <div class="window-panel">
                        <div class="window-panel-inner">
                            <div class="bezel-in-thin-hard">
                                <img src="./images/me.png" width="400" height="400" alt="Image of Dan Brown" style="background-color: #c7c0b2;" class="image-cover">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dynamic">
                    <p>
                        Hello! I'm Dan, a UK based full stack web developer with a love of open source software.
                        Most of my free time is spent working on <a href="https://www.bookstackapp.com" target="_blank">BookStack</a>,
                        playing video-games or walking around the Hampshire countryside.
                    </p>

                    <p>
                        I primarily develop in PHP using Laravel, with VueJS being my front-end framework of choice, but I also 
                        dabble in Go, NodeJS and Android development.
                    </p>

                    <h2 class="window-section-title"><span>Random Side Activities</span></h2>

                    <ul>
                        <li>🎥 <a href="https://www.youtube.com/c/BookStackApp" target="_blank">BookStack YouTube Channel</a></li>
                        <li>🎥 <a href="https://www.youtube.com/channel/UCGDhoKgOoqPX9Gts9GIuyuQ" target="_blank">DOSS YouTube Channel</a></li>
                        <li>📷 <a href="https://danb.me/gallery/" target="_blank">Photo Gallery</a></li>
                    </ul>

                </div>
            </div>
        </div>

        <div class="window-content bezel-out">
            <div class="button-group center">
                <a href="https://fosstodon.org/@danb" rel="me" target="_blank" class="button" style="color: #595aff;" title="Mastodon Profile"><svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 16 16">
                    <path d="M11.19 12.195c2.016-.24 3.77-1.475 3.99-2.603.348-1.778.32-4.339.32-4.339 0-3.47-2.286-4.488-2.286-4.488C12.062.238 10.083.017 8.027 0h-.05C5.92.017 3.942.238 2.79.765c0 0-2.285 1.017-2.285 4.488l-.002.662c-.004.64-.007 1.35.011 2.091.083 3.394.626 6.74 3.78 7.57 1.454.383 2.703.463 3.709.408 1.823-.1 2.847-.647 2.847-.647l-.06-1.317s-1.303.41-2.767.36c-1.45-.05-2.98-.156-3.215-1.928a3.614 3.614 0 0 1-.033-.496s1.424.346 3.228.428c1.103.05 2.137-.064 3.188-.189zm1.613-2.47H11.13v-4.08c0-.859-.364-1.295-1.091-1.295-.804 0-1.207.517-1.207 1.541v2.233H7.168V5.89c0-1.024-.403-1.541-1.207-1.541-.727 0-1.091.436-1.091 1.296v4.079H3.197V5.522c0-.859.22-1.541.66-2.046.456-.505 1.052-.764 1.793-.764.856 0 1.504.328 1.933.983L8 4.39l.417-.695c.429-.655 1.077-.983 1.934-.983.74 0 1.336.259 1.791.764.442.505.661 1.187.661 2.046v4.203z"/>
                </svg> <span>Mastodon</span></a>
                <a href="https://github.com/ssddanbrown" target="_blank" class="button" style="color: #000;" title="GitHub Profile"><svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                    </svg> <span>GitHub</span></a>
                <a href="https://uk.linkedin.com/in/danjamesbrown" target="_blank" class="button" style="color: #0A66C2;" title="LinkedIn Profile"><svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                    </svg> <span>LinkedIn</span></a>
            </div>
        </div>

        <div class="window-content bezel-out">
            <?php
            $feed = simplexml_load_string(file_get_contents('https://danb.me/blog/index.xml'));
            $posts = $feed->channel->item;
            $postCount = 0;
            ?>

            <div class="table-panel">
                <table>
                    <thead>
                        <tr>
                            <th colspan="2"><h2>Latest Blog Posts</h2></th>
                        </tr>
                        <tr>
                            <th>Date</th>
                            <th>Post</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($posts as $post) : ?>
                            <tr>
                            <?php 
                            $postCount++;
                            if ($postCount > 10) break;
                            $date = (new DateTime($post->pubDate))->format('Y-m-d'); 
                            ?>
                            <td width="84" class="monospace"><?php echo $date; ?></td>
                            <td><a href="<?php echo $post->link; ?>"><?php echo $post->title; ?></a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <p></p>
            <div class="button-group right"><a href="/blog" class="button">All Blog Posts</a></div>
        </div>

    </div>

    <div class="window">
        <div class="window-titlebar bezel-out">
            <h2 class="window-title">Latest Projects</h1>
            <div class="window-title-decoration">
                <div></div>
                <div></div>
            </div>
        </div>
        <div class="window-content bezel-out">
            <?php
            $projects = json_decode(file_get_contents('./data/projects.json'));
            ?>

            <section class="window-panel-list">

                <?php foreach ($projects as $project) : ?>
                    <div class="window-panel">
                        <div class="window-panel-inner">
                            <h3 class="window-panel-title"><?php echo $project->title ?></h3>
                            <div class="window-panel-split-content">
                                <div>
                                    <p><?php echo htmlentities($project->description); ?></p>
                                    <div class="detail-list"><?php foreach ($project->skills as $skill) : ?>
                                        <span class="detail"><?php echo htmlentities($skill); ?></span>
                                    <?php endforeach; ?></div>
                                </div>
                                <div>
                                    <a href="<?php echo $project->link ?>" class="button">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </section>
        </div>
    </div>

</body>

</html>