<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once '../components/head.php'; ?>
</head>

<body>
    <?php require_once '../components/header.php'; ?>

    <div class="center-content">
        <div class="title">Projects</div>
        <div class="subtitleProjects">These are all my </div>
        <div class="subtitleProjects">Projects public</div>
    </div>

    <div class="lang-bar">
        <span>These are all they code languages I have coded in,<br>I only know the basics </span>

        <div class="lang-list">
            <p class="lang-p">Python</p>
            <p class="lang-p">HTML</p>
            <p class="lang-p">CSS</p>
            <p class="lang-p">PHP</p>
            <p class="lang-p">C#</p>
            <P class="lang-p">Java Script</p>

        </div>
    </div>

    <div class="projects-section">
        <div class="lang-block" id="lang-python">
            <div class="projects-title">Projects</div>
            <div class="project-list">
                <div class="project-card">
                    <div class="project-img">
                        <img src="https://via.placeholder.com/80x80?text=IMG" alt="Project" />
                    </div>
                    <div class="project-info">
                        <div class="project-title">Title</div>
                        <div class="project-body">Body text for whatever you'd like to say. Add main takeaway points,
                            quotes, anecdotes, or even a very very short story.</div>
                        <div class="button-wrapper">
                            <button class="see-more-btn" onclick="toggleOverlay(this)">See More</button>
                            <button class="git-link" onclick="window.open('https://github.com/dashboard', '_blank')">
                                Go to the repository
                            </button>
                        </div>




                    </div>
                    <!-- Overlay venster -->
                    <div class="project-overlay" style="display:none;">
                        <div class="overlay-content">
                            <h2>Project Details</h2>
                            <p>
                                This is additional information about the project. You can add anything you want to display as an overlay here.
                            </p>
                            <button class="close-overlay-btn" onclick="toggleOverlay(this)">Close</button>
                        </div>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-img">
                        <img src="https://via.placeholder.com/80x80?text=IMG" alt="Project" />
                    </div>
                    <div class="project-info">
                        <div class="project-title">Title</div>
                        <div class="project-body">Body text for whatever you'd like to say. Add main takeaway points,
                            quotes, anecdotes, or even a very very short story.</div>
                        <div class="button-wrapper">
                            <button class="see-more-btn" onclick="toggleOverlay(this)">See More</button>
                            <button class="git-link" onclick="window.open('https://github.com/dashboard', '_blank')">
                                Go to the repository
                            </button>
                        </div>
                    </div>
                    <!-- Overlay venster -->
                    <div class="project-overlay" style="display:none;">
                        <div class="overlay-content">
                            <h2>Project Details</h2>
                            <p>
                                This is additional information about the project. You can add anything you want to display as an overlay here.
                            </p>
                            <button class="close-overlay-btn" onclick="toggleOverlay(this)">Close</button>
                        </div>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-img">
                        <img src="https://via.placeholder.com/80x80?text=IMG" alt="Project" />
                    </div>
                    <div class="project-info">
                        <div class="project-title">Title</div>
                        <div class="project-body">Body text for whatever you'd like to say. Add main takeaway points,
                            quotes, anecdotes, or even a very very short story.</div>
                        <div class="button-wrapper">
                            <button class="see-more-btn" onclick="toggleOverlay(this)">See More</button>
                            <button class="git-link" onclick="window.open('https://github.com/dashboard', '_blank')">
                                Go to the repository
                            </button>
                        </div>
                    </div>
                    <!-- Overlay venster -->
                    <div class="project-overlay" style="display:none;">
                        <div class="overlay-content">
                            <h2>Project Details</h2>
                            <p>
                                This is additional information about the project. You can add anything you want to display as an overlay here.
                            </p>
                            <button class="close-overlay-btn" onclick="toggleOverlay(this)">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>


        function toggleOverlay(btn) {
            // Find the overlay in the current project card
            const card = btn.closest('.project-card');
            const overlay = card.querySelector('.project-overlay');
            if (overlay.style.display === 'flex') {
                overlay.style.display = 'none';
                document.body.style.overflow = ''; 
            } else {
                // Close other overlays
                document.querySelectorAll('.project-overlay').forEach(o => o.style.display = 'none');
                overlay.style.display = 'flex';
                document.body.style.overflow = 'hidden'; 
            }
        }
        // Close overlay when you click outside the content
        document.addEventListener('click', function (e) {
            document.querySelectorAll('.project-overlay').forEach(overlay => {
                if (overlay.style.display === 'flex' && !overlay.querySelector('.overlay-content').contains(e.target) && !e.target.classList.contains('see-more-btn')) {
                    overlay.style.display = 'none';
                    document.body.style.overflow = '';
                }
            });
        });
    </script>
</body>

</html>