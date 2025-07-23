<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'components/head.php'; ?>

</head>

<body>
    <?php require_once 'components/header.php'; ?>

    <div class="centerContent">
        <div class="title">PORTFOLIE</div>
        <div class="subtitle">-Your Name Here-</div>
        <div class="btnGroup">
            <button class="btn" onclick="document.getElementById('aboutMe').scrollIntoView({ behavior: 'smooth', block: 'start' });">About me</button>
            <button class="btn" onclick="window.location.href='<?php echo $base_url; ?>/page/Projects.php';">Projects</button>
        </div>
    </div>

    <div class="aboutMeWrapper" id="aboutMe">
        <div class="aboutMeTitle">About Me</div>
        <div class="aboutMeImg">
            <!-- <i class="fa-regular fa-user" style="font-size:32px; "></i> -->
            <!--  you can add your profile img here  -->
            <img src="<?php echo $base_url; ?>/img/profile.jpg">
        </div>
        <!-- 
        You can add a short description about yourself here.
        I made a short exemple of what you can add here.
        Feel free to customize this section with your own content.
         -->

        <div class="langList">
            <p class="langP">Python</p>
            <p class="langP">HTML</p>
            <p class="langP">CSS</p>
            <p class="langP">PHP</p>
            <p class="langP">C#</p>
            <P class="langP">Java Script</p>
        </div>
        <div class="aboutMeContent">
            <p>Welcome to my portfolio! Here you can find information about my projects and skills.</p>
            <p>I am passionate about coding and always eager to learn new technologies.</p>
            <p>Feel free to explore my projects and get in touch if you have any questions!</p>

        </div>

        
    </div>
    <?php require_once 'components/footer.php'; ?>

    <script>
        // Only smooth scroll fore interne anchors
        document.querySelectorAll('.navbar a').forEach(link => {
            link.addEventListener('click', function (e) {
                const href = this.getAttribute('href');
                if (href && href.startsWith('#')) {
                    const targetId = href.substring(1);
                    const target = document.getElementById(targetId);
                    if (target) {
                        e.preventDefault();
                        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }
                }
            });
        });
    </script>
</body>

</html>