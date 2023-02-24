<!-- カードの構造 -->
{{-- <li class="card__p">
    <a class="card card__skin" href="{{ $plan_link }}">
        <img class="card__img" src={{ $plan_thumbnail }} alt="{{ $plan_alt }}">
            <div class="card__textbox">
                <h3>{{ $plan_title }}</h3>
            </div>
    </a>
</li> --}}
<!-- /カードの構造 -->
<li class="card__p">
    <a class="card card__skin" href="{{ $plan_link }}">
        <img class="card__img" src="{{ asset('storage/images') }}/{{ $plan_thumbnail }}" alt="{{ $plan_thumbnail }}">
        <div class="card__textbox">
            <h3 class="card__title">{{ $plan_title }}</h3>
        <!-- エリアの判定 -->
            <div class="card__flex">
                <div class="card__description">
                    @if( $plan_city_id == "1")
                        <p> 東部</p>
                @elseif($plan_city_id== "2")
                        <p> 南部</p>
                @endif
            </div>
        <!-- レベルの判定 -->
                <div class="star__box">
                    @if( $plan_level == "1")
                        <div class="level1">
                            <img class="star" src="../assets/images/star.png" alt="☆">
                        </div>
                    @elseif($plan_level == "2")
                        <div class="level2">
                            <img class="star" src="../assets/images/star.png" alt="☆">
                            <img class="star" src="../assets/images/star.png" alt="☆">
                        </div>
                    @elseif($plan_level == "3")
                        <div class="level3">
                            <img class="star" src="../assets/images/star.png" alt="☆">
                            <img class="star" src="../assets/images/star.png" alt="☆">
                            <img class="star" src="../assets/images/star.png" alt="☆">
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </a>
</li>
