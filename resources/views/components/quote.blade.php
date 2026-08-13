<section id="quote" class="section">

    <div class="container quote-container">

        <!-- Header -->
        <div class="quote-header">

            <span class="golden-text">
                Let's Get Started
            </span>

            <h2>
                Request a Quote
            </h2>

            <p>
                All qoutation are free of charge. Fill
                out the form below and we'll reach out to you.
            </p>

        </div>


        <!-- Form -->
        <div class="quote-form-area">

            @if (session('success'))

            <!-- success validation -->
            <div class="form-success">
                {{ session('success') }}
            </div>

            @endif

            <!-- error validation -->
            @if ($errors->any())

            <div class="form-errors">

                <ul>

                    @foreach ($errors->all() as $error)

                    <li>
                        {{ $error }}
                    </li>

                    @endforeach

                </ul>

            </div>

            @endif


            <form
                action="{{ route('quote.store') }}"
                method="POST"
                class="quote-form">

                @csrf


                <div class="form-grid">

                    <input
                        type="text"
                        name="name"
                        placeholder="Full Name"
                        value="{{ old('name') }}"
                        required>


                    <input
                        type="email"
                        name="email"
                        placeholder="Email Address"
                        value="{{ old('email') }}"
                        required>


                    <input
                        type="text"
                        name="phone"
                        placeholder="Phone Number"
                        value="{{ old('phone') }}"
                        required>


                    <input
                        type="text"
                        name="company"
                        placeholder="Company"
                        value="{{ old('company') }}">

                </div>

                <textarea
                    name="message"
                    placeholder="Your Message"
                    required>{{ old('message') }}</textarea>


                <label class="checkbox">

                    <input
                        type="checkbox"
                        name="privacy"
                        required>

                    I accept the privacy and terms.

                </label>


                <button
                    type="submit"
                    class="submit-button">

                    Submit Quote →

                </button>

            </form>

        </div>


        <!-- Brochure -->
        <div class="brochure-card">

            <h3 style="padding-bottom: 20px;">
                Industry <br> solutions!
            </h3>

            <p>
                Our portfolio consists of multiple clients in various
                industries. This alone is a testament to the rliability
                of our products and services. Check out our comprehensive
                brochure by clicking the button below.
            </p>

            <p>
                Don't find what you need? Then, you may request a special
                truck! We'll source it for you.
            </p>

            <div class="brochure-list">
                <a href="#">• Construction</a>
                <a href="#">• Mining</a>
                <a href="#">• Tracking</a>
                <a href="#">• Hauling</a>
                <a href="#">• Retail</a>
            </div>
            <a
                href="#"
                class="brochure-button">

                Download Brochure →

            </a>

        </div>

    </div>

</section>