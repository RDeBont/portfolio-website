<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once '../components/head.php'; ?>
</head>

<body>
    <?php require_once '../components/header.php'; ?>

    <div class="centerContent">
        <div class="title">PROJECTS</div>
        <div class="subtitle">These are all my, Public projects </div>
        <div class="btnGroup">
            <button class="btn"
                onclick="window.location.href='<?php echo $base_url; ?>/index.php#aboutMe';">About me</button>

            <button class="btn"
                onclick="document.getElementById('Projects').scrollIntoView({ behavior: 'smooth', block: 'start' });">Projects</button>
        </div>

    </div>

    <div class="langBar">
        <span>These are all they code languages I have coded in,<br>I only know the basics </span>

        <div class="langList">
            <p class="langP">Python</p>
            <p class="langP">HTML</p>
            <p class="langP">CSS</p>
            <p class="langP">PHP</p>
            <p class="langP">C#</p>
            <P class="langP">Java Script</p>

        </div>
    </div>

    <div class="projectsSection">
        <div class="langBlock" id="Projects">
            <div class="projectsTitle">Projects</div>
            <div class="projectList">
                <div class="projectCard">
                    <div class="projectImg">
                        <img src="https://placehold.co/80x80?font=roboto" alt="Project" />
                    </div>
                    <div class="projectInfo">
                        <div class="projectTitle">Title</div>
                        <div class="projectBody">Body text for whatever you'd like to say. Add main takeaway points,
                            quotes, anecdotes, or even a very very short story.</div>
                        <div class="buttonWrapper">
                            <button class="seeMoreBtn" onclick="toggleOverlay(this)">See More</button>
                            <button class="gitLink" onclick="window.open('https://github.com/dashboard', '_blank')">
                                Go to the repository
                            </button>
                        </div>

                    </div>
                    <!-- Overlay window -->
                    <div class="projectOverlay" style="display:none;">
                        <div class="overlayContent">
                            <h2>Project Details</h2>
                            <p>
                                This is additional information about the project. You can add anything you want to
                                display as an overlay here.
                            </p>
                            <button class="closeOverlayBtn" onclick="toggleOverlay(this)">Close</button>
                        </div>
                    </div>
                </div>
                <div class="projectCard">
                    <div class="projectImg">
                        <img src="https://placehold.co/80x80?font=roboto" alt="Project" />
                    </div>
                    <div class="projectInfo">
                        <div class="projectTitle">Title</div>
                        <div class="projectBody">Body text for whatever you'd like to say. Add main takeaway points,
                            quotes, anecdotes, or even a very very short story.</div>
                        <div class="buttonWrapper">
                            <button class="seeMoreBtn" onclick="toggleOverlay(this)">See More</button>
                            <button class="gitLink" onclick="window.open('https://github.com/dashboard', '_blank')">
                                Go to the repository
                            </button>
                        </div>

                    </div>
                    <!-- Overlay window -->
                    <div class="projectOverlay" style="display:none;">
                        <div class="overlayContent">
                            <h2>Project Details</h2>
                            <p>
                                This is additional information about the project. You can add anything you want to
                                display as an overlay here.
                            </p>
                            <button class="closeOverlayBtn" onclick="toggleOverlay(this)">Close</button>
                        </div>
                    </div>
                </div>
                <div class="projectCard">
                    <div class="projectImg">
                        <img src="https://placehold.co/80x80?font=roboto" alt="Project" />
                    </div>
                    <div class="projectInfo">
                        <div class="projectTitle">Title</div>
                        <div class="projectBody">Body text for whatever you'd like to say. Add main takeaway points,
                            quotes, anecdotes, or even a very very short story.</div>
                        <div class="buttonWrapper">
                            <button class="seeMoreBtn" onclick="toggleOverlay(this)">See More</button>
                            <button class="gitLink" onclick="window.open('https://github.com/dashboard', '_blank')">
                                Go to the repository
                            </button>
                        </div>

                    </div>
                    <!-- Overlay window -->
                    <div class="projectOverlay" style="display:none;">
                        <div class="overlayContent">
                            <h2>Project Details</h2>
                            <p>
                                This is additional information about the project. You can add anything you want to
                                display as an overlay here.
                            </p>
                            <button class="closeOverlayBtn" onclick="toggleOverlay(this)">Close</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php require_once '../components/footer.php'; ?>

    <script>


        function toggleOverlay(btn) {
            // Find the overlay in the current project card
            const card = btn.closest('.projectCard');
            const overlay = card.querySelector('.projectOverlay');
            if (overlay.style.display === 'flex') {
                overlay.style.display = 'none';
                document.body.style.overflow = '';
            } else {
                // Close other overlays
                document.querySelectorAll('.projectOverlay').forEach(o => o.style.display = 'none');
                overlay.style.display = 'flex';
                document.body.style.overflow = 'hidden';
            }
        }
        // Close overlay when you click outside the content
        document.addEventListener('click', function (e) {
            document.querySelectorAll('.projectOverlay').forEach(overlay => {
                if (overlay.style.display === 'flex' && !overlay.querySelector('.overlayContent').contains(e.target) && !e.target.classList.contains('seeMoreBtn')) {
                    overlay.style.display = 'none';
                    document.body.style.overflow = '';
                }
            });
        });
        // Smooth scroll behavior
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function (e) {
                const href = this.getAttribute('href');
                const hashIndex = href.indexOf('#');
                if (hashIndex === -1) return;
                const targetId = href.substring(hashIndex + 1);
                const target = document.getElementById(targetId);
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });
    </script>
</body>

</html>