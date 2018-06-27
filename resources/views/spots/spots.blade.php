@if ($spots)
    <div class="row">
        @foreach ($spots as $spot)
            <div class="spot">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            <img src="{{ $spot->icon }}" alt="">
                        </div>
                        <div class="panel-body">
                            <p class="spot-title"><a href="#">{{ $spot->name }}</a></p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif