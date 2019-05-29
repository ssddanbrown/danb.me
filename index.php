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
  <style>
    <?php include('src/styles.css'); ?>
  </style>

  <link rel="preconnect" href="https://fonts.gstatic.com/">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">

</head>
<body>

  <aside>
    <canvas id="sidebar" height="100%" width="100%"></canvas>
  </aside>

  <section>

    <div class="content-wrap">
      <header>
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

      <section class="container" id="blog">
        <h2>Latest Blog Posts</h2>
        <?php foreach($feed->channel->item as $post): ?>
          <?php $date = (new DateTime($post->pubDate))->format('Y-m-d'); ?>
          <article class="blogpost">
            <p><a href="<?php echo $post->link; ?>"><?php echo $date . ' &nbsp; ' . $post->title; ?></a></p>
          </article>
        <?php endforeach; ?>
      </section>

      <?php 
        $projectData = file_get_contents('projects.json');
        $projects = json_decode($projectData)->projects;
       ?>

      <section class="container" id="projects">
        <h2>Latest Projects</h2>

        <div class="project-container">
          <?php foreach($projects as $project): ?>
            <a href="<?php echo $project->link ?>" draggable="false" target="_href" class="project">
              <h3><?php echo $project->title ?></h3>
              <p class="summary"><?php echo htmlentities($project->description); ?></p>
              <p class="tech"><?php foreach($project->skills as $skill): ?><span><?php echo htmlentities($skill); ?></span><?php endforeach; ?></p>
            </a>
          <?php endforeach; ?>
        </div>

      </section>
    </div>
  </section>
  
  <!-- JavaScript -->
  <script type="text/javascript" async src="src/script.js"></script>
</body>
</html>
