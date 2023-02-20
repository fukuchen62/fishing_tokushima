{{-- カードの構造 --}}
<li><img src="{{ $fish_link }}" width="300" height="200" alt="魚の画像">
        <div class="description__box">
            <h3>{{ $fish_name }}</h3>
                <p class="description__text">{{ $fish_detail }}</p>
                    <div class="feed">
                        <p><img src="../storage/images/fish_ebi.png"  alt="エビの画像" width="35" height="40">美味しい食べ方：{{ $fish_cooking1 }}、{{ $fish_cooking2 }}、{{ $fish_cooking3 }}</p>
                    </div>
        </div>
</li>
