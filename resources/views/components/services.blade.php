<section
    id="services"
    class="section">

    <div class="container service-card">

        <div class="service-grid">

            <!-- left side of the grid -->
            <div class="service-left">
                <span class="golden-text">
                    Our Services
                </span>

                <h2>
                    The Best After Sales
                    <strong class="">In Maintenance</strong>
                </h2>

                <br>

                <p>
                    An excellent After-Sales Maintenance Service with
                    state of the art facility and highly skilled After-Sales
                    support team.
                </p>

                <br>
                <p>
                    We will assign a dedicated After-Sales Representative to cater to your servicing
                    needs. A highlt skilled mechanics are always ready to assist in all
                    technical concerns.
                </p>

                <div class="service-image">

                    <img src="{{ asset('images/img-services.png') }}" alt="Services">

                </div>
            </div>


            <!-- right side of the grid -->
            <div class="service-content">

                <div class="service-list">

                    <div class="service-item">

                        <h3>
                            <strong>Preventive</strong>
                            Maintenance Services
                        </h3>

                        <span class="service-arrow">↗</span>
                        <p class="service-description">
                            To keep your units in tip-top shape and great condition, we conduct PMS.
                        </p>
                    </div>

                    <div class="service-item">
                        <h3>
                            <strong>Truck</strong>
                            Rehab
                        </h3>

                        <span class="service-arrow">↗</span>
                        <p class="service-description">
                            Text Here
                        </p>
                    </div>

                    <div class="service-item">
                        <h3>
                            <strong>On-site</strong>
                            Rescue
                        </h3>

                        <span class="service-arrow">↗</span>

                        <p class="service-description">
                            Text Here
                        </p>
                    </div>

                    <div class="service-item">
                        <h3>
                            <strong>Repair</strong>
                            or Replace
                        </h3>
                        <span class="service-arrow">↗</span>
                        <p class="service-description">
                            Text Here
                        </p>
                    </div>

                    <div class="service-item">
                        <h3>
                            Overhauling
                        </h3>
                        <span class="service-arrow">↗</span>
                        <p class="service-description">
                            Text Here
                        </p>
                    </div>

                </div>

            </div>

        </div>

</section>

<!-- script to expand/hide the description of each service item -->
<script>
    document.querySelectorAll('.service-item').forEach(item => {

        item.addEventListener('click', () => {

            // Close other items
            document.querySelectorAll('.service-item').forEach(otherItem => {

                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                }

            });

            // Toggle clicked item
            item.classList.toggle('active');

        });

    });
</script>