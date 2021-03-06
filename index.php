<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home | Mirage Global</title>
    <?php include_once("divs/headtags.php"); ?>
</head>
<body>
    <main>
    <?php include_once("divs/nav.php"); ?>
        <article id="home">
            <section class="home">
                <h1>A single platform<br>for augmented reality</h1>
                <p>Mirage is the home of augmented reality, providing users with a single platform through which to access interactive AR in daily life. </p>
                <div class="btn-container">
                    <div class="btn" role="button" tabindex="0">Contact us</div>
                </div>
            </section>
            <section class="logo-big">
            </section>
        </article>
        <article id="about">
            <section class="about-topright">
                <h1>Augmented reality has a problem</h1>
                <p>The full potential of augmented reality is restricted by a lack of accessibility. AR is currently only offered as a feature on certain websites or on company-specific apps. In order to offer both businesses and consumers the full use and entertainment potential of AR, these features need to be united into a single platform.</p>
            </section>
            <section class="about-botleft">
                <h1>A single platform solution</h1>
                <p>Mirage's platform creates a space for users to interact with augmented reality in a convenient and accessible way. The platform draws together existing AR features onto a single platform and implements local data transfer techniques to create interactive multi-user experiences that enhance daily life. The platform is a new medium for socialising and creates opportunities for companies and consumers alike. Businesses can make unique AR products and services, dynamic advertisements and engaging events whilst consumers can discover a space for creativity and entertainment.</p>
            </section>
        </article>
        <article id="app">
        <h1>App</h1>
            <section>
                <div class="container">
                    <div class="container-item">
                        <div class="image-container"><img src="assets/images/ar.svg" alt="ar-interaction-icon"></div>
                        <div>
                            <h2>AR interaction</h2>
                            <p>Users can interact with AR and for the first time share the experience in real-time with friends. The platform also provides access to helpful utilities and entertaining features developed by both businesses and individuals.</p>
                        </div>
                    </div>
                    <div class="container-item">
                        <div class="image-container"><img src="assets/images/store.svg" alt="marketplace-cart-icon"></div>
                        <div>
                            <h2>Marketplace</h2>
                            <p>The marketplace enables users to acquire AR items and offers businesses and individuals the ability to earn through the sale of digital assets. Mirage also encourages a creator economy, inspiring creativity and innovation that ensures a diverse offering of products is available to users.</p>
                        </div>
                    </div>
                    <div class="container-item">
                        <div class="image-container"><img src="assets/images/social.svg" alt="social-features-networking-icon"></div>
                        <div>
                            <h2>Social features</h2>
                            <p>The platform brings people together through its various social features such as friends lists, an in-app messaging system and customisable social media add-ins that personalise your AR experience.</p>
                        </div>
                    </div>
                    <div class="container-item">
                        <div class="image-container"><img src="assets/images/gears.svg" alt="workshop-compass-icon"></div>
                        <div>
                            <h2>Workshop</h2>
                            <p>An asset creation service that makes it easier than ever to create digital assets, enabling individuals to create products to populate the marketplace and sell on the platform.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="iframe-container">
                <iframe src="https://www.youtube.com/embed/9xRTW27lQh0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </section>
        </article>
        <article id="team">
        <h1>Team</h1>
            <section>
                <div class="card">
                    <div class="image-container"><img src="assets/images/team/anthony.png" alt="anthony-duncalf"></div>
                    <div class="card-info">
                        <h3>Anthony Duncalf <span>| CEO</span></h3>
                        <p>Anthony is a co-founder and has previous experience in start-ups and the financial sector. He is responsible for the business operations, strategy and marketing as well as managing the company's finances.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="image-container"><img src="assets/images/team/josh.jpg" alt="joshua-venters"></div>
                    <div class="card-info">
                        <h3>Joshua Venters <span>| CTO</span></h3>
                        <p>Joshua is a co-founder and has a background in industry where he specialised in machine learning, computer vision and server engineering. He is responsible for the technical development of Mirage's platform.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="image-container"><img src="assets/images/team/seb.jpg" alt="sebastian-pira"></div>
                    <div class="card-info">
                        <h3>Sebastian Pira <span>| Developer</span></h3>
                        <p>Sebastian is a full stack engineer with SaaS experience. He is responsible for implementation of backend architecture on the Mirage platform.</p>
                    </div>
                </div>
            </section>
            <h1 class="h1-advisors">Advisors</h1>
            <section>
                <div class="card advisors-card">
                    <div class="image-container"><img src="assets/images/team/konstantina.jpg" alt="konstantina-psoma"></div>
                    <div class="card-info">
                        <h3>Konstanina Psoma</h3>
                        <p><span>Kaedim | CEO</span></p>
                    </div>
                </div>
            </section>
            <section class="advisors-container">
                <div class="get-in-touch-card">
                    <h2>Want to become an advisor?</h2>
                    <div class="btn-container">
                        <div id="advisor-btn" class="btn" role="button" tabindex="0">Get in touch</div>
                    </div>
                </div>
            </section>
        </article>
        <?php include_once("divs/footer.php"); ?>
    <script src="assets/js/script.js"></script>
    </main>
</body>
</html>