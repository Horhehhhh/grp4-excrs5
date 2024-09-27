<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Portfolio</title>
    <link rel="stylesheet" href="index1.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                Group <span>4</span><li><a href="#home">Home</a></li>
                <li><a href="groupmate1.html">Our Team</a></li>
                <a href="logout.php" class="btn btn-warning">LogOut</a>
            </ul>
        </nav>
    </header>

    <section id="home">
        <h1>Welcome to Our Team Portfolio</h1>
        <p>Meet our talented team!</p>
    </section>

    <section id="team">
        <h2>Our Team</h2>
        <?php
          
        $team_members = [
            ['name' => 'Gubatao', 'img' => 'jona.jpg', 'link' => 'http://localhost/new_project_grp4\jonalyn.php'],
            ['name' => 'Manlangit', 'img' => 'jabby.jpg', 'link' => 'http://localhost/new_project_grp4\jabby.php'],
            ['name' => 'Galgana', 'img' => 'vincent.jpg', 'link' => 'http://localhost/new_project_grp4\vincent.php'],
            ['name' => 'Conchada', 'img' => 'allen.jpg', 'link' => 'http://localhost/new_project_grp4\allen.php'],
            ['name' => 'Carmelina', 'img' => 'cwell.png', 'link' => 'http://localhost/new_project_grp4\carmelina.php']
        ];

        
        foreach ($team_members as $member) {
            echo '<div class="team-member">';
            echo '<a href="' . htmlspecialchars($member['link']) . '">';
            echo '<img src="' . htmlspecialchars($member['img']) . '" alt="' . htmlspecialchars($member['name']) . '">';
            echo '</a>';
            echo '<p>' . htmlspecialchars($member['name']) . '</p>';
            echo '</div>';
        }
        ?>
        
    </section>

    <section id="contact">
       
    </section>

    <footer>
        <p>&copy; <?php echo date("D/M/Y"); ?> Click the Profile for more info.</p>
    </footer>

    <script src="main.js"></script>
</body>
</html>