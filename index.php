<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="css/style.css" />
  <title>Covid-19 Testing Management System</title>

  </head>
  <body onload="bodyLoaded()">
    <div class="preloader"></div>
    <div class="scrollToTop"></div>
    <nav>
      <div class="container">
        <div class="brand">
          <div class="logo">
            <img src="assets/Logo.png" alt="" />
          </div>
          <div class="responsive-toggle">
            <i class="fas fa-bars"></i>
          </div>
        </div>

        <div class="links">
          <ul>
            <li><a href="#about" id="nav-link">Overview</a></li>
            <li><a href="#contagion" id="nav-link">Contagion</a></li>
            <li><a href="#symptoms" id="nav-link">Symptoms</a></li>
            <li><a href="#solution" id="nav-link">Prevention</a></li>
            <li><button onclick="location.href='login.php'">Admin</button></li>
          </ul>
        </div>
      </div>
    </nav>
    <section class="starter">
      <div class="info">
        <h3 class="subTitle">COVID-19 Alert</h3>
        <h1 class="title">Stay At Home Quarantine To Stop Corona Virus</h1>
        <h5 class="description">
        <b>Historic & Unparalleled Achievement ! India’s Glorious Journey of
                    200 CRORE VACCINATION <br>
          "India is set to defeat Covid-19. Every Indian is making it possible."</b>
                              - PM Narendra Modi
        </h5>
        <button onclick="location.href='new-user-testing.php'">Check Your Status</button>

      </div>
      <div class="image">
        <img src="assets/starter.png" alt="" />
      </div>
    </section>
    <section class="about" id="about">
      <div class="image">
        <img src="assets/whatIsCovid.png" alt="" />
      </div>
      <div class="info">
        <h4 class="subTitle">What Is Covid-19</h4>
        <h2 class="title">Coronavirus</h2>
        <p class="description">
          Corona Viruses are a type of Virus. Coronavirus disease 2019 (COVID-19) is a contagious disease
           caused by the coronavirus SARS-CoV-2. A newly identified type has caused a recent
          outbreak of Respiratory illness now called COVID-19.
        </p>
        <!-- <button>Learn More</button> -->
      </div>
    </section>
    <section class="contagion" id="contagion">
      <div class="info">
        <h4 class="subTitle">Covid-19</h4>
        <h2 class="title">Contagion</h2>
        <p class="description">
        COVID‑19 transmission occurs when infectious particles are breathed in or come into contact 
        with the eyes, nose, or mouth. The risk is highest when people are in close proximity, 
        but small airborne particles containing the virus can remain suspended in the air and 
        travel over longer distances, particularly indoors. Transmission can also occur when people
         touch their eyes,nose or mouth after touching surfaces or objects that have been contaminated by the virus. 
        </p>
      </div>
      <div class="content">
        <div class="virus">
        </div>
        <div class="cards">
          <div class="card">
            <img src="assets/airTransmission.png" alt="" />
            <div class="text">
              <h3 class="title"> Transmission</h3>
              <p class="description">
                Objectively evolve tactical expertise before extensible
                initiatives.
              </p>
            </div>
          </div>
          <div class="card">
            <img src="assets/humanContact.png" alt="" />
            <div class="text">
              <h3 class="title">Human Contacts</h3>
              <p class="description">
                Washing your hands is one of the simplest ways you can protect.
              </p>
            </div>
          </div>
          <div class="card">
            <img src="assets/containedObject.png" alt="" />
            <div class="text">
                <h3 class="title">   Air Transmission</h3>
              <p class="description">
                Use the tissue while Sneezing. In this Way, You Can Protect Your
                Droplets.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="symptoms" id="symptoms">
      <div class="info">
        <h4 class="subTitle">Covid-19</h4>
        <h2 class="title">Symptoms</h2>
        <p class="description">
        The symptoms of COVID‑19 are variable but often include fever,fatigue, cough, breathing difficulties,
         loss of smell, and loss of taste.Symptoms may begin one to fourteen days after 
        exposure to the virus. At least a third of people who are infected do not develop noticeable 
        symptoms. One who develop symptoms noticeable enough to be classified as patients.
        </p>
      </div>
      <div class="image">
        <img src="assets/symptoms.png" alt="" />
      </div>
    </section>
    <section class="solutions" id="solution">
      <div class="virus">
        <img src="assets/virus3.png" alt="" />
      </div>
      <div class="virus2">
        <img src="assets/virus1.png" alt="" />
      </div>
      <div class="virus3">
        <img src="assets/virus4.png" alt="" />
      </div>

      <div class="info">
        <h4 class="subTitle">Covid-19</h4>
        <h2 class="title">What Should We Do <span>?</span></h2>
        <p class="description">
        Those diagnosed with COVID‑19 or who believe they may be infected are advised by the CDC 
        to stay home except to get medical care, call ahead before visiting a healthcare provider, 
        wear a face mask before entering the healthcare provider's office and when in any room or 
        vehicle with another person, cover coughs and sneezes with a tissue, 
        regularly wash hands with soap and water and avoid sharing personal household items
        </p>
      </div>
      <div class="content">
        <div class="solution">
          <div class="solution-info">
            <div class="round">01</div>
            <div class="info-container">
              <h2 class="title">Wear Masks</h2>
              <p class="description">
              The use of face masks is intended as source control to limit transmission of the virus and for
               personal protection to prevent infection.Properly worn masks both limit the respiratory droplets 
               and aerosols spread by infected individuals and help protect healthy individuals from infection.
               Masks vary in how well they work, with N95 and surgical masks outperforming cloth masks,
               but even cloth masks, with their variability in fabric type and mask fit, 
               provide wearers with substantial protection from particles carrying COVID-19
              </p>
            </div>
          </div>
          <div class="image">
            <img src="assets/girl1.png" alt="" />
          </div>
        </div>
        <div class="solution">
          <div class="image">
            <img src="assets/girl2.png" alt="" />
          </div>
          <div class="solution-info">
            <div class="round">02</div>
            <div class="info-container">
              <h2 class="title">Wash your hands</h2>
              <p class="description">
              Thorough hand hygiene after any cough or sneeze is required.The WHO also recommends that
               individuals wash hands often with soap and water for at least twenty seconds, especially after 
               going to the toilet or when hands are visibly dirty, before eating and after blowing one's nose.
              When soap and water are not available,the CDC recommends using an alcohol-based hand sanitiser with at least 60% alcohol.
              </p>
            </div>
          </div>
        </div>
        <div class="solution">
          <div class="solution-info">
            <div class="round">03</div>
            <div class="info-container">
              <h2 class="title">Vaccine</h2>
              <p class="description">
              Initially, most COVID‑19 vaccines were two-dose vaccines, with the sole exception being the 
              single-dose Janssen COVID‑19 vaccine.However, immunity from the vaccines has been found
               to wane over time, requiring people to get booster doses of the vaccine to maintain protection
                against COVID‑19.The COVID‑19 vaccines are widely credited for their role in reducing the 
                spread of COVID‑19 and reducing the severity and death caused by COVID‑19
              </p>
            </div>
          </div>
          <div class="image">
            <img src="assets/girl3.png" alt="" />
          </div>
        </div>
        <div class="solution">
          <div class="image">
            <img src="assets/girl4.png" alt="" />
          </div>
          <div class="solution-info">
            <div class="round">04</div>
            <div class="info-container">
              <h2 class="title">Avoid Contacts</h2>
              <p class="description">
              Social distancing (also known as physical distancing) includes infection control actions intended
               to slow the spread of the disease by minimising close contact between individuals. 
               Methods include quarantines; travel restrictions; and the closing of schools, workplaces,
                stadiums, theatres, or shopping centres.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="logo">
        <img src="assets/Logo.png" alt="" />
      </div>
      <div class="links">
        <ul>
          <li><a href="https://www.instagram.com/" class="fab fa-instagram"></a></li>
          <li><a href="https://www.facebook.com/" class="fab fa-facebook"></a></li>
          <li><a href="https://twitter.com/?lang=en" class="fab fa-twitter"></a></li>
          <li><a href="https://www.youtube.com/" class="fab fa-youtube"></a></li>
        </ul>
      </div>
    </footer>
    <span class="copyright">2023 &copy; Made with love by Anutiksha </span>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/script.js"></script>
  </body>
</html>

