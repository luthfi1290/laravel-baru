<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h5 class="panel-title">Status</h5></div>
                <div class="panel-body">
                    @foreach ($books as $book)
                        <h3>Status :  {{ $book->status }}</h3><br>
                        @if ( $book->status == 'accept')
                            <h3>Detail Books </h5>
                            <h5>Title : {{ $book->title }}</h5>
                            <h5>Description : {{ $book->description }}</h5>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
