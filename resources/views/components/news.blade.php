@php

$news = [
[
'date' => 'March 8, 2025',
'title' => 'Archon Gives Back to Mother Nature',
'image' => 'news1.png'
],
[
'date' => 'March 8, 2025',
'title' => 'Archon, Sinotruk Strengthen Partnership',
'image' => 'news2.png'
],
[
'date' => 'March 8, 2025',
'title' => 'Philcon Event 2025',
'image' => 'news3.png'
]
];

@endphp


<section class="section news">

    <div class="container">

        <div class="section-heading">

            <span class="golden-text">
                Latest News
            </span>

            <h2>
                We are
                <span>Archon</span>
            </h2>

        </div>


        <div class="news-grid">

            @foreach ($news as $article)

            <article class="news-card">

                <div class="news-image">

                    <img
                        src="{{ asset('images/' . $article['image']) }}"
                        alt="{{ $article['title'] }}">

                </div>


                <div class="news-info">

                    <h5>
                        {{ $article['date'] }}
                    </h5>

                    <h3>
                        {{ $article['title'] }}
                    </h3>

                    <a href="#">
                        <span class="golden-text">→</span>
                        Read Article
                    </a>

                </div>

            </article>

            @endforeach

        </div>

    </div>

</section>