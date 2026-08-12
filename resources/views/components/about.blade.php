<section
    id="about"
    class="about section">

    <div class="container about-container">

        <span class="golden-text">
            About Us
        </span>

        <h2>
            Archon is the leading provider of Sinotruk <br>
            Machineries heavy equipment in the Philippines.
        </h2>


        <div class="about-grid">

            <!-- Card 1 -->
            <div class="about-card active">

                <div class="about-card-top">
                    <span class="about-number">
                        01

                    </span>
                    <img src="{{ asset('icons/free-delivery.png') }}" alt="Free Delivery Icon" class='about-icon'>
                </div>



                <h3>
                    Free Delivery
                </h3>

                <p>
                    Gettng hold of your new truck is no hassle because we deliver
                    them to you at your doorstep!
                </p>

            </div>

            <!-- Card 2 -->
            <div class="about-card">

                <div class="about-card-top">
                    <span class="about-number">
                        02

                    </span>
                    <img src="{{ asset('icons/on-site-repair.png') }}" alt="Repair Icon" class='about-icon'>
                </div>



                <h3>
                    On-site Repair
                </h3>

                <p>
                    Having troubles with your track? Don't worry!
                    We'll be there wherever your site may be.
                </p>

            </div>

            <!-- Card 3 -->
            <div class="about-card">

                <div class="about-card-top">
                    <span class="about-number">
                        03

                    </span>
                    <img src="{{ asset('icons/one-year-warranty.png') }}" alt="Warranty Icon" class='about-icon'>
                </div>



                <h3>
                    One Year Warranty
                </h3>

                <p>
                    We prioritize your peace of mind. Rest
                    assured that all your units have a one-year
                    warranty.
                </p>

            </div>

            <!-- Card 4 -->
            <div class="about-card">

                <div class="about-card-top">
                    <span class="about-number">
                        02

                    </span>
                    <img src="{{ asset('icons/24-hours.png') }}" alt="Hour Icon" class='about-icon'>
                </div>
                <h3>
                    24-Hour Service
                </h3>

                <p>
                    We have you covered, whether at 2pm or 2am! Call
                    our sales associates and service advisors for any concerns
                    you have, and we'll respond!
                </p>
            </div>

            <!-- About Text -->
            <div class="about-text">

                <p>
                    Since 2014, Archon has set its eyes on continuous growth. What
                    started as a young entrant in the industry with only three (3) surplus units
                    on hand has now become a top plater with over 1,000 employees nationwide.
                </p>

                <p>
                    We have partnered with China's leading brands, created multiple service station
                    natonwide, and establisedh Gateway - the reliable parts provider,
                    making us a one-stop shop for all our clients.
                </p>

            </div>

        </div>




    </div>

</section>


<!-- Might as well put this mini-script in this rather 
than to clump it up in the main js file -->
<script>
    const aboutCards = document.querySelectorAll('.about-card');

    aboutCards.forEach(card => {
        card.addEventListener('click', () => {

            aboutCards.forEach(item => {
                item.classList.remove('active');
            });

            card.classList.add('active');
        });
    });
</script>