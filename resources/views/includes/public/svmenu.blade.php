<div class="col-md-4">
    <h2 class="section-title">Verenigingen</h2>
    @if(count($faculties) != 0)
        <div class="panel-group" id="accordion">
            @foreach($faculties as $faculty)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$faculty->slug}}" class="collapsed">
                            {{$faculty->title}}
                        </a>
                    </h4>
                </div>
                <div id="collapse{{$faculty->slug}}" class="panel-collapse collapse @if(isset($slug)) @if($faculty->slug == $slug) in @endif @endif">
                    <div class="panel-body">
                        <div class="list-group" style="border:0; margin-bottom: 0;">
                            @if(count($faculty->associations) != 0)
                                @foreach($faculty->associations as $association)
                                    <a href="/studieverenigingen/{{$faculty->slug}}/{{$association->slug}}" class="list-group-item">{{$association->title}}</a>
                                @endforeach
                            @else
                                Er zijn op dit moment geen verenigingen
                            @endif
                        </div>
                        <!--list-group -->
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @else
        Er zijn op dit moment geen verenigingen
    @endif
</div>