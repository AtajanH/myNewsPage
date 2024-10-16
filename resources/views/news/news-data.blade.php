<div class="row mt-4">
    @foreach($news as $item)
        <a href="{{ route('news.show', $item->id) }}" class="text-decoration-none text-dark">
            <div class="col-10 md-4 mb-4" style="width: 700px">
                <div class="card">
                    <h1 class="card-title text-left mb-3 ml-3 mr-3">{{ $item->name }}</h1>
                    <img src="{{ $item->image }}" class="card-img-top" alt="{{ $item->name }}">
                    <p class="card-text text-right mb-3 mr-3 mt-3">Дата создания: {{ Str::limit($item->created_at->toDateString(), 100) }}</p>
                </div>
            </div>
        </a>
    @endforeach
</div>


<!-- Пагинация -->
<div class="pagination justify-content-center mb-5">
    {{ $news->links('vendor\pagination\bootstrap-4') }} <!---->
</div>