<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">{{ _('PC') }}</a>
            <a href="#" class="simple-text logo-normal">{{ _('Painel Central') }}</a>
        </div>
        
        <ul class="nav">
            <li>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ _('PAINEL') }}</p>
                </a>
            </li>            
            <li>
                <a data-toggle="collapse" href="#cadastro" aria-expanded="false" class="collapsed">
                <i class="tim-icons icon-puzzle-10"></i>
                        <span class="nav-link-text">Cadastros</span>
                        <b class="caret mt-1"></b>
                </a>

                <div @if (@$page == 'User Profile') class="collapse show" @else class="collapse" @endif id="cadastro" style="">
                    <ul class="nav pl-4"> 
                        <li @if (@$pageSlug == 'profile') class="active " @endif>
                            <a href="{{ route('profile.edit')  }}">
                            <i class="tim-icons icon-single-02"></i>
                                    <p>Usuários</p>
                            </a>
                        </li>
                        <li @if (@$pageSlug == 'edit profile') class="active" @endif>
                            <a href="{{ route('user.index')  }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                    <p>Edicao usuário</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#operation" aria-expanded="false" class="collapsed">
                <i class="tim-icons icon-puzzle-10"></i>
                        <span class="nav-link-text">Operacionais</span>
                        <b class="caret mt-1"></b>
                </a>

                <div @if (@$pageSlug == 'instituicao') class="collapse show" @else class="collapse" @endif id="operation" style="">
                    <ul class="nav pl-4">                        
                        <li @if (@$pageSlug == 'instituicao') class="active " @endif>
                            <a href="{{ route('instituicao.index') }}">
                                <i class="tim-icons icon-bank"></i>
                                    <p>Instituição</p>
                            </a>
                        </li>
                        <li @if (@$pageSlug == 'group') class="active " @endif>
                            <a href="">
                                <i class="tim-icons icon-bank"></i>
                                    <p>Group</p>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#horarios" aria-expanded="false" class="collapsed">
                <i class="tim-icons icon-pin"></i>
                        <span class="nav-link-text">Horários</span>
                        <b class="caret mt-1"></b>
                </a>

                <div class="collapse" id="horarios" style="">
                    <ul class="nav pl-4">                        
                        <li>
                            <a href="{{ route('instituicao.index') }}">
                            <i class="tim-icons icon-pin"></i>
                                    <p>Horários</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li >
                <a href="{{ route('pages.icons') }}">
                    <i class="tim-icons icon-atom"></i>
                    <p>{{ _('Icons') }}</p>
                </a>
            </li>
            <li>
                <a href="{{ route('pages.maps') }}">
                    <i class="tim-icons icon-pin"></i>
                    <p>{{ _('Maps') }}</p>
                </a>
            </li>
            <li>
                <a href="{{ route('pages.notifications') }}">
                    <i class="tim-icons icon-bell-55"></i>
                    <p>{{ _('Notifications') }}</p>
                </a>
            </li>
            <li>
                <a href="{{ route('pages.tables') }}">
                    <i class="tim-icons icon-puzzle-10"></i>
                    <p>{{ _('Table List') }}</p>
                </a>
            </li>
            <li>
                <a href="{{ route('pages.typography') }}">
                    <i class="tim-icons icon-align-center"></i>
                    <p>{{ _('Typography') }}</p>
                </a>
            </li>
            <li>
                <a href="{{ route('pages.rtl') }}">
                    <i class="tim-icons icon-world"></i>
                    <p>{{ _('RTL Support') }}</p>
                </a>
            </li>
            
        </ul> 
    </div>
</div>
