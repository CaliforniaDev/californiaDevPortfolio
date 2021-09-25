<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>californiaDev.</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <nav id="top-nav">
        <a href="index.php" class="logo">
            <img class="logo-icon" src="images/character.svg" alt="californiaDev Logo" />
            <img class="logo-wordmark" src="images/logo-wordmark.svg" alt="californiaDev" />
        </a>
        <ul id="nav-menu" class="light-font">
            <li class="nav-item"><a class="nav-link" href="#hero">
                <img src="images/home_white_24dp.svg" />
                <span class="nav-item-name">HOME</span></a></li>

            <li class="nav-item"><a class="nav-link" href="#skills">
                <img src="images/code_white_24dp.svg" />
                <span class="nav-item-name">SKILLS</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#projects-section">
                <img src="images/media_white_24dp.svg" />
                <span class="nav-item-name">PROJECTS</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#contact">
                <img src="images/email_white_24dp.svg" />
                <span class="nav-item-name">CONTACT</span></a></li>
        </ul>
    </nav>
<main>


    
    <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
    <span class="nav-overlay"></span>

    <section id="hero">
        <header class="hero__col-1">
            <div class="profile-img-container">
                <img class="profile-img" src="images/profile.JPG" />
            </div>
            <div class="hero__content">
                <p>👋🏽 HI THERE! I'M</p>
                <h2><span id="leo">LEO</span> DANIELS</h2>
                <p>A <span class="blue-font">Front-end Developer</span>
                    that can create powerful, interactive applications on the web. I have an ardent desire to craft high quality web apps and
                    exceptional user experiences. I possess the ability to learn new technologies rapidly due to my love of coffee. ☕ 
                </p>
                <div class="hero__nav-menu">
                    <a href="./resume.pdf" target="_blank" id="resume-btn" class="light-font">Resumé</a>
                    <div class="hero__link-container">
                        <a href="https://github.com/CaliforniaDev" target="_blank" class="hero__link">
                            <img src="images/github-icon-link.svg" /></a>
                        <a href="https://www.instagram.com/leo.thedeveloper/" target="_blank" class="hero__link">
                            <img src="images/instagram-icon.svg"/></a>
                        <a href="mailto:leodaniels365@gmail.com" class="hero__link"><img src="images/mail-icon.svg"/></a>
                    </div>
                </div>
                
            </div>
        </header>
    </section>
    <section id="skills" class="col-2">

        <div class="skills-box">
            <div class="skills-container">
                <div class="skills__col">
                    <div class="col__content">
                        <figure class="skills__img">
                            <img src="images/pen-tool.svg" />
                        </figure>
                        <h4>UI / UX Designer</h4>
                        <p>During the inital design process. I create both a low fidelity wireframe, then an
                             interactive hi-fidelity prototype using Adobe XD. Each design goes through exstensive user testing to ensure the 
                            best possible user experience.</p>
                    </div>
                </div>
                <div class="skills__col">
                    <div class="col__content">
                        <figure class="skills__img">
                            <img src="images/desktop-icon.svg" />
                        </figure>
                        <h4>Front-end Developer</h4>
                        <p>After the client decides on a design, the next process is coming up with the software architecture
                            that best suits the project. I enjoy to write clean responsive
                            code that renders well on a variety of devices and windows. Each line of code is thoughtfully written
                            to increase performance and maintainability.
                         </p>
                    </div>

                </div>

            </div>
            <div class="container-2">
                    <h4>Skill-set & Tools</h4>
                <div class="grid-container">
                    <span class="tools-col__content">
                        <img src="images/html5-icon.svg" />
                        <p>HTML5</p>
                    </span>
                    <span class="tools-col__content">
                        <img src="images/css3-icon.svg" />
                        <p>CSS3</p>
                    </span>
                    <span class="tools-col__content">
                        <img src="images/javascript-Icon.svg" />
                        <p>JavaScript</p>
                    </span>
                    <span class="tools-col__content">
                        <img src="images/adobexd-icon.svg" />
                        <p>Adobe XD</p>
                    </span>
                    <span class="tools-col__content">
                        <img src="images/illustrator-icon.svg" />
                        <p>illustrator</p>
                    </span>
                    <span class="tools-col__content">
                        <img src="images/photoshop-icon.svg" />
                        <p>Photoshop</p>
                    </span>
                    <span class="tools-col__content">
                        <img src="images/github-icon.svg" />
                        <p>GitHub</p>
                    </span>

                </div>
                    
            </div>
        </div>
    </section>
    <section id="projects-section">

        <div class="projects-container">
            <div class="projects-section__head">
                <h2>Projects</h2>
            </div>
            <article class="project-item">
                <div class="project-item__img-container">
                    <a href="https://californiadev.github.io/CupkayzV2.0/" target="_blank">
                        <img src="images/cupkayz-project.png" alt="Cup Kayz" />
                    </a>
                </div>
                <div class="project-item-description">
                    <h3 class="light-font">Cup Kayz (Under Construction)</h3>
                    <h4>Technologies Used: <span>HTML5</span>, <span>CSS3</span>, <span>JavaScript</span>, <span>Google API</span></h4>
                    <ul>
                        <li>Responsive E-commerce web app. Can be used on a variety of devices.</li>
                        <li>Google maps api is used to render map location before checkout of each delivery.</li>
                        <li>User address input uses Autocomplete feature when entering address for quicker service.</li>
                        <li>Created a intricate low fidelity & interactive hi fidelity wireframe using a 8pt grid system within Adobe XD, before
                            coding the entire project from scratch. 
                        </li>
                        <li>Vanilla JavaScript (no libraries) </li>
                    </ul>
                    <div class="project-links">
                        <a href=" https://californiadev.github.io/CupkayzV2.0/" target="_blank">LIVE</a>
                        <a href="https://github.com/CaliforniaDev/CupkayzV2.0" target="_blank">REPO</a>
                    </div>
                    

                </div>

            </article>
            <article class="project-item">
                <div class="project-item__img-container">
                    <a href="https://californiadev.github.io/Battleship/" target="_blank">
                        <img src="images/battleship-project.png" alt="Battleship Game" />

                    </a>
                </div>
                <div class="project-item-description">
                    <h3 class="light-font">Battleship Game</h3>
                    <h4>Technologies Used: <span>HTML5</span>, <span>CSS3</span>, <span>JavaScript</span></h4>
                    <ul>
                        <li>Based on the classic Battleship game, this application was designed in raw JavaScript</li>
                        <li>It manipulates the DOM elements to output the app onto an HTML5 canvas element</li>
                        <li>Javascript algorithm is used to determine the placement of each ship to avoid ship collision and keeps each position
                            within the boards play area.
                        </li>
                        <li> Renders the user a high score by calculating the number of hit / misses to determine your accuracy.
                        </li>
                        <li>Vanilla JavaScript (no libraries)</li>
                    </ul>
                    <div class="project-links">
                        <a href=" https://californiadev.github.io/Battleship/" target="_blank">LIVE</a>
                        <a href="https://github.com/CaliforniaDev/Battleship" target="_blank">REPO</a>
                    </div>
                    

                </div>

            </article>

            <article class="project-item">
                <div class="project-item__img-container">
                    <a href="http://nybblebox.com" target="_blank">
                        <img src="images/nybblebox-project.png" alt="Nybblebox" />
                    </a>
                </div>
                <div class="project-item-description">
                    <h3 class="light-font">Nybblebox</h3>
                    <h4>Technologies Used: <span>Wordpress</span></h4>
                    <ul>
                        <li>Responsive web app used to display graphic / branding designs.</li>
                        <li>Wordpress was used for this project to complete a time efficient landing page without the need of raw code.</li>

                    </ul>
                    <div class="project-links">
                        <a href="http://nybblebox.com" target="_blank">LIVE</a>
                    </div>
                    

                </div>

            </article>
        </div>
    </section>
    <section id="contact" class="form-container">
            <form id="contact-form" class="contact-form" action="contact-form.php" method="post">
          
              <label class="light-font" for="fname">Full name</label>
              <input type="text" id="name" name="name" placeholder="Your name..">
              <label class="light-font" for="mail">Email</label>
              <input type="text" id="mail" name="firstname" placeholder="Your e-mail..">
              <label class="light-font" for="subject">Subject</label>
              <input type="text" id="subject" name="subject" placeholder="Subject">
          
              <label class="light-font" for="message">Message</label>
              <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>
          
              <button class="submit-form-btn" target="_blank" type="submit" name="submit" value="Submit">Submit</button>
          
            </form>
    </section>
    </main>

    <script src="js/main.js"></script>
</body>

</html>