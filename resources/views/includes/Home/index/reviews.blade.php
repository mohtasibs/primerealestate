@php
$reviews = [
    [
        'img' => 'assets/img/team-2.jpg',
        'name' => 'Aman Diwakar',
        'name1' => 'General Manager',
        'title' => 'One of the Superb Platform',
        'desc' => "Absolutely love Advertize! whenever I'm in need of finding a job, Advertize is my #1 go to! wouldn't look anywhere else.",
    ],
    [
        'img' => 'assets/img/team-3.jpg',
        'name' => 'Ridhika K. Sweta',
        'name1' => 'CEO of Agreeo',
        'title' => 'One of the Superb Platform',
        'desc' => "Overall, the Advertize application is a powerful tool for anyone in the job market. Its reliability, extensive job listings, and user-friendly..",
    ],
    [
        'img' => 'assets/img/team-4.jpg',
        'name' => 'Shushil Kumar Yadav',
        'name1' => 'Brand Manager',
        'title' => 'One of the Superb Platform',
        'desc' => "I love this Advertize app. it's more legit than the other ones with advertisement. Once I uploaded my resume, then employers...",
    ],
    [
        'img' => 'assets/img/team-5.jpg',
        'name' => 'Ritika K. Mishra',
        'name1' => 'HR Head at Google',
        'title' => 'One of the Superb Platform',
        'desc' => "Advertize the best job finder app out there right now.. they also protect you from spammers so the only emails I get due to...",
    ],
    [
        'img' => 'assets/img/team-6.jpg',
        'name' => 'Shree K. Patel',
        'name1' => 'Chief Executive',
        'title' => 'One of the Superb Platform',
        'desc' => "Advertize the best job finder app out there right now.. they also protect you from spammers so the only emails I get due to...",
    ],
    [
        'img' => 'assets/img/team-7.jpg',
        'name' => 'Sarwan Kumar Patel',
        'name1' => 'Chief Executive',
        'title' => 'One of the Superb Platform',
        'desc' => "Advertize the best job finder app out there right now.. they also protect you from spammers so the only emails I get due to...",
    ]
];
@endphp

@foreach ($reviews as $item)
    <div class="singleItem">
        <div class="reviews-wrappers">
            <div class="reviewsBox card border-0 rounded-4 shadow-sm">
                <div class="card-body p-xl-5 p-lg-5 p-4">
                    <div class="reviews-topHeader d-flex flex-column mb-3">
                        <div class="d-flex align-items-center justify-content-center mb-2">
                        <span class="me-1 text-sm text-warning"><i class="fa-solid fa-star"></i></span>
                        <span class="me-1 text-sm text-warning"><i class="fa-solid fa-star"></i></span>
                        <span class="me-1 text-sm text-warning"><i class="fa-solid fa-star"></i></span>
                        <span class="me-1 text-sm text-warning"><i class="fa-solid fa-star"></i></span>
                        <span class="me-1 text-sm text-warning"><i class="fa-solid fa-star"></i></span>
                        </div>
                        <div class="revws-desc text-center">
                            <p class="text-dark fw-semibold mb-1">"{{ $item['title'] }}"</p>
                            <p class="m-0 text-dark">{{ $item['desc'] }}</p>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="reviewsers d-flex flex-column mt-5">
                <div class="d-flex align-items-center flex-column flex-thumbes gap-2">
                    <div class="revws-pic"><img src="{{ asset($item['img']) }}" class="img-fluid circle" width="55" alt=""></div>
                    <div class="revws-caps text-center">
                        <h6 class="fw-medium fs-6 m-0">{{ $item['name'] }}</h6>
                        <p class="text-muted-2 text-md m-0">{{ $item['name1'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach