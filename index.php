<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Meta Tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="initial-scale=1">
  <meta name="theme-color" content="#73B3B3" />

  <title>Dan Brown - UK Web Developer</title>

  <!-- Icons -->
  <link rel="icon" type="image/png" href="icons/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="icons/favicon-16x16.png" sizes="16x16" />

  <!-- Stylesheets -->
  <style>
    <?php include('dist/styles.css'); ?>
  </style>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

</head>
<body>

  <header>
    <div class="padded clearfix">
      <div class="logo float">Dan Brown</div>
      <ul class="inline pull-right">
        <li><a href="https://github.com/ssddanbrown" target="_blank"><i class="fa fa-github"></i></a></li>
        <li><a href="https://uk.linkedin.com/in/danjamesbrown" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="https://twitter.com/ssddanbrown" target="_blank"><i class="fa fa-twitter"></i></a></li>
      </ul>
    </div>
  </header>

  <?php 

    $projectData = file_get_contents('projects.json');
    $projects = json_decode($projectData)->projects;

   ?>

  <section class="container" id="projects">
    <h2>My Latest Projects</h2>

    <?php foreach($projects as $project): ?>
      <a href="<?php echo $project->link ?>" draggable="false" target="_href" class="card ripples <?php echo $project->color ?>">
        <h2><?php echo $project->title ?></h2>
        <p class="summary"><?php echo htmlentities($project->description); ?></p>
        <hr>
        <p class="tech"><?php foreach($project->skills as $skill): ?><span><?php echo htmlentities($skill); ?></span><?php endforeach; ?></p>
      </a>
    <?php endforeach; ?>

  </section>
  
  <!-- JavaScript -->
  <script type="text/javascript" async src="script.js"></script>
</body>
</html>
