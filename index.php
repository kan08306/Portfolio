<?php
/* =========================
   User Info
========================= */
$firstname = 'Ken';
$lastname  = 'Bautista';
$fullname  = $firstname . ' ' . $lastname;
$location  = 'Metro Manila, Philippines';
$role      = '2nd Year College Student at FEU Tech';
$year      = '2026';

/* =========================
   About & Hobbies
========================= */
$aboutText = 'I\'m a second year student at the FEU Institute of Technology, pursuing Bachelor of Science in Information Technology specializing in Cybersecurity.

Driven to expand my knowledge in cybersecurity by strengthening both theoretical understanding and practical skills across networking, system security, and threat analysis. Committed to continuous learning through hands on practice and real world exposure to build deeper expertise and achieve long term career growth in cybersecurity.

Have one goal in mind and that is to protect the digital world.';

$hobbies = 'During my free time, I enjoy walking, reading books, watching movies or TV series, and playing online games such as Valorant, League of Legends, and console games. These activities help me relax, stay inspired, and maintain a healthy balance between productivity and enjoyment.';

$quote = 'You cannot lose what you do not have. — Marcus Aurelius';

/* =========================
   Education
========================= */
$education = [
    ['title' => 'BS IT Cybersecurity',  'school' => 'FEU Institute of Technology', 'year' => '2026'],
    ['title' => 'Senior High School',   'school' => 'Manila Cathedral School',      'year' => '2024'],
    ['title' => 'Junior High School',   'school' => 'Manila Cathedral School',      'year' => '2018'],
];

/* =========================
   Skills
========================= */
$frontendSkills = ['HTML', 'CSS', 'JavaScript'];
$backendSkills  = ['MySQL', 'Python', 'Java', 'C++', 'PHP'];
$tools          = ['VS Code', 'Figma', 'GitHub', 'Git'];
$AItools        = ['OpenAI', 'ClaudeAI'];
$noncodeSkills  = ['Photoshop', 'Microsoft Office', 'Canva'];

$skillIcons = [
    'HTML'             => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg',
    'CSS'              => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg',
    'JavaScript'       => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg',
    'MySQL'            => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg',
    'Python'           => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg',
    'Java'             => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original.svg',
    'C++'              => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/cplusplus/cplusplus-original.svg',
    'PHP'              => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg',
    'VS Code'          => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vscode/vscode-original.svg',
    'Figma'            => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg',
    'GitHub'           => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg',
    'Git'              => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg',
    'OpenAI'           => 'https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/openai.svg',
    'ClaudeAI'         => 'https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/anthropic.svg',
    'Photoshop'        => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/photoshop/photoshop-plain.svg',
    'Microsoft Office' => 'https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg',
    'Canva'            => 'https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/canva.svg',
];

$skillGroups = [
    'Frontend'       => $frontendSkills,
    'Backend'        => $backendSkills,
    'Tools'          => $tools,
    'AI Tools'       => $AItools,
    'Non-code Skills'=> $noncodeSkills,
];

/* =========================
   Certifications
========================= */
$certifications = [
    ['title' => 'Junior Cybersecurity Analyst',  'org' => 'FEU Institute of Technology / CISCO',     'year' => '2026', 'link' => 'https://www.credly.com/badges/031ee0e1-2c53-4c0a-b64f-1e32b8833220/public_url'],
    ['title' => 'Network Defense',               'org' => 'FEU Institute of Technology / CISCO',     'year' => '2026', 'link' => 'https://www.credly.com/badges/d135731a-7f88-4b5c-aff2-af6356dc2608/public_url'],
    ['title' => 'Introduction to Networks',      'org' => 'FEU Institute of Technology / CISCO',     'year' => '2026', 'link' => 'https://www.credly.com/badges/3e5de21c-f111-4b98-9351-81a153d96153/public_url'],
    ['title' => 'Introduction to Cybersecurity', 'org' => 'FEU Institute of Technology / CISCO',     'year' => '2026', 'link' => 'https://www.credly.com/badges/21ccd6b2-e0bd-42dd-a913-b9aaa2ac5bfc/public_url'],
    ['title' => 'Databases',                     'org' => 'FEU Institute of Technology / Certiport', 'year' => '2025', 'link' => 'https://www.credly.com/badges/e50b8949-e589-4a6d-85b7-8a00d342544e/public_url'],
    ['title' => 'HTML & CSS',                    'org' => 'FEU Institute of Technology / Certiport', 'year' => '2025', 'link' => 'https://www.credly.com/badges/f335ae99-48a0-4c07-b3c5-321e62ea5bda/public_url'],
    ['title' => 'Python Essentials 1',           'org' => 'Certiport',                               'year' => '2024', 'link' => 'https://www.credly.com/badges/33fd9065-8330-4ac8-8f5b-62002c69a9f3/public_url'],
];

/* =========================
   Projects
========================= */
$projects = [
    ['title' => 'Penta Dogz AI',   'tag' => 'AI Fact Checker',    'site' => 'pd.ai',   'link' => 'https://chair-mute-24091396.figma.site/'],
    ['title' => 'Portfolio',       'tag' => 'Final Portfolio',     'site' => 'ken.com', 'link' => 'https://kan08306.github.io/WD-Finals-Portfolio/'],
    ['title' => 'Hero Sections',   'tag' => 'UI Sections',         'site' => 'hs.com',  'link' => 'https://kan08306.github.io/WD-Seatwork-2/'],
    ['title' => 'Header & Footer', 'tag' => 'Layout Components',   'site' => 'hf.com',  'link' => 'https://kan08306.github.io/WD-Seatwork-1/'],
];

/* =========================
   Contact
========================= */
$email1 = 'kenbautista753@gmail.com';
$email2 = 'kabautista1@fit.edu.ph';

$socialLinks = [
    'github'    => 'https://github.com/kan08306',
    'linkedin'  => 'https://www.linkedin.com/in/ken-bautista-319b12374/',
    'instagram' => 'https://www.instagram.com/neeki3_/',
    'facebook'  => 'https://www.facebook.com/ken08306',
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ken Bautista</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body class="dark-mode">

    <!-- =====================
         Header
    ===================== -->
    <header class="header">
        <input type="checkbox" id="menu-toggle" class="menu-toggle">

        <label for="menu-toggle" class="menu-logo-pill">
            <img src="./assets/img/KBlogo.png" alt="Ken Logo" class="menu-logo-img">
            <span class="menu-name"><?php echo $firstname; ?></span>
        </label>

        <nav class="menu-panel">
            <a href="#">Home</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>

            <button class="theme-option" id="theme-toggle" type="button">
                <img id="theme-icon" src="https://unpkg.com/lucide-static@latest/icons/sun.svg" alt="Theme Icon">
                <span id="theme-text">Light</span>
            </button>
        </nav>
    </header>

    <!-- =====================
         Main
    ===================== -->
    <main class="main-content">
        <div class="content-wrap">

            <!-- Profile Hero -->
            <section class="profile-hero">
                <div class="profile-photo-box">
                    <img src="./assets/img/kenpfp.png" alt="Profile" class="profile-photo">
                </div>

                <div class="profile-info">
                    <h1 class="profile-name"><?php echo $fullname; ?></h1>

                    <div class="profile-location">
                        <img src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/icons/geo-alt.svg" alt="Location Icon" class="profile-location-icon">
                        <span><?php echo $location; ?></span>
                    </div>

                    <p class="profile-role"><?php echo $role; ?></p>

                    <div class="profile-actions">
                        <a href="#projects" class="profile-btn primary-btn">Projects</a>
                        <a href="#contact"  class="profile-btn">Contacts</a>
                        <a href="#about"    class="profile-btn">About</a>
                    </div>
                </div>

                <div class="profile-side">
                    <span class="profile-badge">
                        <span class="glow-dot"></span>
                        Cybersecurity Student
                    </span>
                </div>
            </section>

            <!-- Dashboard Layout -->
            <section class="dashboard-layout">

                <!-- Left Column -->
                <div class="left-column">

                    <!-- About -->
                    <section class="card" id="about">
                        <div class="card-title">
                            <img src="https://unpkg.com/lucide-static@latest/icons/info.svg" alt="About Icon" class="card-icon-img">
                            <h2>About</h2>
                        </div>
                        <p class="about-text"><?php echo nl2br($aboutText); ?></p>
                    </section>

                    <!-- Hobbies -->
                    <section class="card">
                        <div class="card-title">
                            <img src="https://unpkg.com/lucide-static@latest/icons/book-open.svg" alt="Hobbies Icon" class="card-icon-img">
                            <h2>Hobbies</h2>
                        </div>
                        <p class="hobbies-text"><?php echo $hobbies; ?></p>
                        <p class="quote-text">"<?php echo $quote; ?>"</p>
                    </section>

                    <!-- Skills -->
                    <section class="skills-card card">
                        <div class="card-title">
                            <img src="https://unpkg.com/lucide-static@latest/icons/code-2.svg" alt="Skills Icon" class="card-icon-img">
                            <h2>Skills</h2>
                        </div>

                        <?php foreach ($skillGroups as $groupName => $skills): ?>
                            <h3 class="skill-label"><?php echo $groupName; ?></h3>
                            <div class="skill-list">
                                <?php foreach ($skills as $skill): ?>
                                    <div class="skill-item" data-skill="<?php echo $skill; ?>">
                                        <img src="<?php echo $skillIcons[$skill]; ?>" alt="<?php echo $skill; ?>">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endforeach; ?>
                    </section>

                </div><!-- /left-column -->

                <!-- Right Column -->
                <div class="right-column">

                    <!-- Education -->
                    <section class="card">
                        <div class="card-title">
                            <img src="https://unpkg.com/lucide-static@latest/icons/graduation-cap.svg" alt="Education Icon" class="card-icon-img">
                            <h2>Education</h2>
                        </div>

                        <div class="education-timeline">
                            <?php foreach ($education as $index => $item): ?>
                                <div class="timeline-item">
                                    <div class="timeline-left">
                                        <span class="timeline-dot <?php echo $index === 0 ? 'active' : ''; ?>"></span>
                                    </div>

                                    <div class="timeline-content">
                                        <h3><?php echo $item['title']; ?></h3>
                                        <p><?php echo $item['school']; ?></p>
                                    </div>

                                    <span class="year-pill"><?php echo $item['year']; ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </section>

                    <!-- Certifications -->
                    <section class="certifications-card card">
                        <div class="card-title">
                            <img src="https://unpkg.com/lucide-static@latest/icons/award.svg" alt="Certifications Icon" class="card-icon-img">
                            <h2>Certifications</h2>
                        </div>

                        <div class="cert-list">
                            <?php foreach ($certifications as $cert): ?>
                                <a href="<?php echo $cert['link']; ?>" target="_blank" class="cert-item">
                                    <div>
                                        <h3><?php echo $cert['title']; ?></h3>
                                        <p><?php echo $cert['org']; ?></p>
                                    </div>
                                    <span class="year-pill"><?php echo $cert['year']; ?></span>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </section>

                    <!-- Projects -->
                    <section class="projects-card card" id="projects">
                        <div class="card-title">
                            <img src="https://unpkg.com/lucide-static@latest/icons/folder.svg" alt="Projects Icon" class="card-icon-img">
                            <h2>Projects</h2>
                        </div>

                        <div class="project-list">
                            <?php foreach ($projects as $project): ?>
                                <a href="<?php echo $project['link']; ?>" target="_blank" class="project-item">
                                    <div class="project-info">
                                        <h3><?php echo $project['title']; ?></h3>
                                        <span><?php echo $project['tag']; ?></span>
                                    </div>
                                    <span class="project-pill"><?php echo $project['site']; ?></span>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </section>

                </div><!-- /right-column -->

            </section><!-- /dashboard-layout -->

            <!-- Contact -->
            <section class="contact-card card" id="contact">
                <div class="card-title">
                    <img src="https://unpkg.com/lucide-static@latest/icons/mail.svg" alt="Contact Icon" class="card-icon-img">
                    <h2>Contact</h2>
                </div>

                <div class="contact-grid">
                    <div class="contact-group">
                        <h3>Email</h3>
                        <a href="mailto:<?php echo $email1; ?>" class="contact-box"><?php echo $email1; ?></a>
                    </div>

                    <div class="contact-group">
                        <h3>Student Email</h3>
                        <a href="mailto:<?php echo $email2; ?>" class="contact-box"><?php echo $email2; ?></a>
                    </div>

                    <div class="contact-group">
                        <h3>Location</h3>
                        <div class="contact-box"><?php echo $location; ?></div>
                    </div>

                    <div class="contact-group">
                        <h3>Socials</h3>
                        <div class="social-list">
                            <a href="<?php echo $socialLinks['github']; ?>"    target="_blank" class="social-box">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/github.svg"    alt="GitHub">
                            </a>
                            <a href="<?php echo $socialLinks['linkedin']; ?>"  target="_blank" class="social-box">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/linkedin.svg"  alt="LinkedIn">
                            </a>
                            <a href="<?php echo $socialLinks['instagram']; ?>" target="_blank" class="social-box">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/instagram.svg" alt="Instagram">
                            </a>
                            <a href="<?php echo $socialLinks['facebook']; ?>"  target="_blank" class="social-box">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/facebook.svg"  alt="Facebook">
                            </a>
                        </div>
                    </div>
                </div>
            </section>

        </div><!-- /content-wrap -->
    </main>

    <!-- =====================
         Footer
    ===================== -->
    <footer class="footer">
        <div class="footer-inner">
            <div class="footer-left">
                <a href="#contact">Contact</a>
                <a href="#">Home</a>
                <a href="#about">About</a>
            </div>

            <div class="footer-center">
                <img src="./assets/img/KBlogo.png" alt="Logo">
            </div>

            <div class="footer-right">
                <span>&copy; 2026 Ken Bautista. All rights reserved.</span>
            </div>
        </div>
    </footer>

    <script src="./assets/js/script.js"></script>
</body>
</html>