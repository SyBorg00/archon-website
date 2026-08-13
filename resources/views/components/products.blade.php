<section id="products" class="section products">

    <div class="container">

        <div class="section-heading">

            <span class="golden-text">
                Durable & Efficient
            </span>

            <h2>
                Featured Products
            </h2>

        </div>


        <div class="product-grid">

            @foreach ($products as $product)

            <article class="product-card">

                <div class="product-image">

                    <!-- {{-- Yellow rectangle --}} -->
                    <div class="product-highlight"></div>


                    <!-- {{-- Truck image --}} -->
                    <!-- src="{{ asset('images/' . $product['image']) }}" original link using hardcoded array-->
                    <!-- alt="{{ $product['name'] }}"> -->
                    <img
                        src="{{ asset('images/' . $product->image_url) }}"

                        alt="{{ $product->name }}">


                    <!-- {{-- Color palette --}} -->
                    <div class="product-colors">

                        <span
                            class="color-dot"
                            style="--dot-color: #ffffff;">
                        </span>

                        <span
                            class="color-dot"
                            style="--dot-color: #d9533f;">
                        </span>

                        <span
                            class="color-dot"
                            style="--dot-color: #263a83;">
                        </span>

                    </div>


                    {{-- Action buttons --}}
                    <div class="product-actions">

                        <a href="#" class="quick-view">
                            Quick View
                        </a>

                        <a href="#" class="compare">
                            Compare
                        </a>

                    </div>

                </div>


                <div class="product-info">

                    <h3>
                        {{ $product['name'] }}
                    </h3>

                </div>

            </article>

            @endforeach

        </div>

    </div>

</section>


<!-- for the clicking event -->
<script>
    document.addEventListener('DOMContentLoaded', function() {

        const productCards = document.querySelectorAll('.product-card');


        productCards.forEach(function(card) {

            card.addEventListener('click', function(event) {

                if (event.target.closest('.product-actions')) {
                    return;
                }


                productCards.forEach(function(otherCard) {

                    if (otherCard !== card) {
                        otherCard.classList.remove('active');
                    }

                });
                card.classList.toggle('active');

            });

        });

        document.addEventListener('click', function(event) {

            if (!event.target.closest('.product-card')) {

                productCards.forEach(function(card) {

                    card.classList.remove('active');

                });

            }

        });

    });
</script>

<!-- this is a fallback incase the database loading does not work -->
{{-- @php

$products = [
[
'name' => 'Howo V7-X Dump Truck',
'image' => 'truck1.png'
],
[
'name' => 'Howo V7 Dump Truck',
'image' => 'truck2.png'
],
[
'name' => 'Howo TX Dump Truck',
'image' => 'truck3.png'
],
[
'name' => 'Howo A7 | T7 Prime Mover',
'image' => 'truck4.png'
],
[
'name' => 'Howo 7 Prime Truck',
'image' => 'truck5.png'
],
[
'name' => 'Howo A7 | T7 Dump Truck',
'image' => 'truck6.png'
]
];

@endphp --}}