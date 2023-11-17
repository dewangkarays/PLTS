<x-portal::layout.admin page="{{ $page_title }}">

    @foreach ($sensors as $r)
        <h2>{{ $r->name }}</h2>
        <div class="row">
            @foreach ($r->parameters as $p)
                <div class="col-sm-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end">
                                <a href="#" class="btn btn-sm btn-primary">LOG</a>
                            </div>
                            <h6 class="text-muted fw-normal mt-0">{{ $p->name }}</h6>
                            <h3 class="mt-3 mb-3">{{ $p->last_value }} {{ $p->unit }}</h3>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div>
            @endforeach
        </div>
    @endforeach
</x-portal::layout.admin>
