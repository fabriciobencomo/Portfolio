<div class="video" id="home">
    <div class="overlay">
        <div class="container contenido-video">  
          <h2>Hello I'm <span>Fabricio Bencomo</span>.</h2>
          <h2>I'm Full-Stack Web Developer</h2>
          <a href="/" class="boton-blanco">Let's Go</a>

          <?php if($mensaje):?>
          <p class="mensaje_form"><?php echo $mensaje?></p>
          <?php endif; ?>
        </div>
    </div>
    <video preload="auto" autoplay muted loop>
        <source src="./build/video/black.mp4" type="video/mp4">
        <source src="./build/video/black.ogg" type="video/ogg">
        <source src="./build/video/black.webm" type="video/webm">
    </video>
  </div>
  <div class="navbar">
    <nav class="container nav">
      <a href="#home">Home</a>
      <a href="#about">About</a>
      <a href="#portfolio">Portfolio</a>
      <a href="#contact">Contact</a>
    </nav>
    <div class="burger">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>
  </div>
  <main id="about" class="aboutMe">
    <h2 class="about-title">About</h2>
    <ul class="about-content">
      <li class="list-item">
          <div class="iconos">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="68" height="68" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
              <circle cx="12" cy="7" r="4" />
              <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
            </svg>
          </div>
          <div class="text container">
            <h3>Who I Am?</h3>
            <p> I am a junior software developer located in Carabobo, Venezuela. I started to develop in 2019 and in 2021 I focus my knowledge on web development, I am currently looking for experience.</p>
            <div>
              <h4>Soft Skills</h4>
              <ul>
                <li>Responsable</li>
                <li>Honest</li>
                <li>Positive</li>
                <li>Patient</li>
                <li>Consistent</li>
              </ul>
            </div>
          </div>
      </li>
      <li class="list-item">
        <div class="iconos">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-school" width="68" height="68" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6" />
            <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4" />
          </svg>
        </div>
        <div class="text container">
          <h3>Education</h3>
          <p> I started studying systems engineering in 2019 at the UBA (Argentina). In 2020 I change university, I am currently studying at Unitec (Venezuela). I also complement my knowledge with courses from external study platforms. 
            I really value learning because it allows me to continue growing as a developer. Knowledge is the best weapon to face the future
          </p>
          <h4>"Never Stop To learn"<h4>
        </div>
      </li>
      <li class="list-item">
        <div class="iconos">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-code" width="68" height="68" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <polyline points="7 8 3 12 7 16" />
            <polyline points="17 8 21 12 17 16" />
            <line x1="14" y1="4" x2="10" y2="20" />
          </svg>
        </div>
        <div class="text container">
          <h3>Skillset</h3>
          <p>My websites are built with the MVC architecture using the active Record format as models. The languages ​​I use are: HTML, SASS, CSS, Javascript, MySQL And PHP</p>
          <div>
            <h4>Dev Tools And Frameworks</h4>
            <ul>
              <li>Terminal</li>
              <li>Laravel</li>
              <li>Vue</li>
              <li>GitHub & Git</li>
              <li>Tailwind Css</li>
              <li>Bootstrap</li>
            </ul>
          </div>
        </div>
      </li>
  </ul>
  </main>
  <section class="projects inactive" id="portfolio" >
    <h2 class="project-title">Portfolio</h2>
    <div class="modal none">
    </div>
    <div class="container project-content">
    </div>
  </section>
  <section class="formulario" id="contact">
    <div class="formulario-content">
      <h2 class="contact-title">Contact</h2>
      <form action="/" class="container form" method="POST">
        <input type="text" name="contacto[name]" id="name" placeholder="Name" required> 
        <input type="mail" name="contacto[mail]" id="mail" placeholder="Email" required>   
        <textarea name="contacto[message]" id="message" cols="30" rows="10" placeholder="Additional details"></textarea>        
        <input type="submit" value="Submit" class="boton-blanco">
      </form>
    </div>
  </section>