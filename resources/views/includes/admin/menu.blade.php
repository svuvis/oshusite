<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        {!! HTML::link('/admin', 'OSHU Admin', ['class'=>'navbar-brand']) !!}
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-right">
        <a href="{{action('Auth\AuthController@getLogout')}}" class="btn btn-warning" style="margin-top: 8px;margin-right: 15px">Logout</a>

    </ul>

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="{{action('AdminController@index')}}" class="{{ set_active(['admin']) }}"><i class="fa fa-info fa-fw"></i> Uitleg</a>
                </li>
                <li>
                    <a href="{{action('NewsController@index')}}" class="{{ set_active(['admin/news*']) }}"><i class="fa fa-newspaper-o fa-fw"></i> Nieuwsberichten</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-calendar fa-fw"></i> Agenda</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-beer fa-fw"></i> Studieverenigingen</a>
                </li>
                <li>
                    <a href="{{action('PagesController@edit')}}"><i class="fa fa-question fa-fw"></i> Wat doet de OSHU</a>
                </li>
                <li>
                    <a href="{{action('BoardMembersController@index')}}"><i class="fa fa-heart fa-fw"></i> OSHU Bestuur</a>
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>