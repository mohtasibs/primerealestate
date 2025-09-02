@php
$articles = [
    [
        'img' => 'assets/img/ai-education.jpg',
        'title' => 'The Future of AI in Education',
        'date' => 'Jan 10, 2024',
    ],
    [
        'img' => 'assets/img/programming.jpg',
        'title' => 'Top 5 Programming Languages in 2024',
        'date' => 'Feb 5, 2024',
    ],
    [
        'img' => 'assets/img/online-learning.png',
        'title' => 'Why Online Learning is the Future',
        'date' => 'Mar 2, 2024',
    ],
    [
        'img' => 'assets/img/cybersecurity.jpg',
        'title' => 'Cybersecurity Trends Every Student Should Know',
        'date' => 'Mar 20, 2024',
    ],
    [
        'img' => 'assets/img/academic-writing.png',
        'title' => 'How to Improve Academic Writing Skills',
        'date' => 'Apr 8, 2024',
    ],
];
@endphp

@foreach ($articles as $item)
    <li>
        <div class="postThumb">
            <a href="{{ url('/blog-detail') }}" class="postImg">
                <figure><img src="{{ asset($item['img']) }}" class="img-fluid rounded" alt="Post Image"></figure>
            </a>
        </div>
        <div class="postCaps">
            <h6><a href="{{ url('/blog-detail') }}" class="link">{{ $item['title'] }}</a></h6>
            <span>{{ $item['date'] }}</span>
        </div>
    </li>
@endforeach
