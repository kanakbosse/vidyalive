<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route("dashboard.home") }}" class="brand-link">
        <span class="brand-text font-weight-bold px-2">{{ config('app.sitesettings')::first()->site_title }}</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset("uploads/author/".(auth()->user()->profile ?? "default.webp")) }}" class="img-circle elevation-2" alt="{{ auth()->user()->name }}"/>
            </div>
            <div class="info">
                <a target="_blank" href="{{ route("frontend.user", auth()->user()->username) }}" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route("dashboard.home") }}" class="nav-link {{ request()->route()->getName() == "dashboard.home" ? "active" : "" }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item {{ in_array(request()->route()->getName(), ["dashboard.posts.index", "dashboard.posts.create","dashboard.posts.edit", "dashboard.posts.trashed"]) ? "menu-open" : "" }}">
                    <a href="#" class="nav-link {{ in_array(request()->route()->getName(), ["dashboard.posts.index", "dashboard.posts.create", "dashboard.posts.edit", "dashboard.posts.trashed"]) ? "active" : "" }}">
                        <i class="nav-icon fas fa-pencil-alt"></i>
                        <p>Posts<i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route("dashboard.posts.index") }}" class="nav-link {{ request()->route()->getName() == "dashboard.posts.index" ? "active" : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Posts</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("dashboard.posts.create") }}" class="nav-link {{ request()->route()->getName() == "dashboard.posts.create" ? "active" : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>New Post</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("dashboard.posts.trashed") }}" class="nav-link {{ request()->route()->getName() == "dashboard.posts.trashed" ? "active" : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Trashed Posts</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ in_array(request()->route()->getName(), ["dashboard.media.index", "dashboard.media.create"]) ? "menu-open" : "" }}">
                    <a href="#" class="nav-link {{ in_array(request()->route()->getName(), ["dashboard.media.index", "dashboard.media.create"]) ? "active" : "" }}">
                        <i class="nav-icon fas fa-image"></i>
                        <p>Media<i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route("dashboard.media.index") }}" class="nav-link {{ request()->route()->getName() == "dashboard.media.index" ? "active" : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Media</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("dashboard.media.create") }}" class="nav-link {{ request()->route()->getName() == "dashboard.media.create" ? "active" : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>New Media</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ in_array(request()->route()->getName(), ["dashboard.comments.index", "dashboard.comments.create","dashboard.comments.edit", "dashboard.comments.trashed"]) ? "menu-open" : "" }}">
                    <a href="#" class="nav-link {{ in_array(request()->route()->getName(), ["dashboard.comments.index", "dashboard.comments.create", "dashboard.comments.edit", "dashboard.comments.trashed"]) ? "active" : "" }}">
                        <i class="nav-icon fas fa-comment-alt"></i>
                        <p>Comments<i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route("dashboard.comments.index") }}" class="nav-link {{ request()->route()->getName() == "dashboard.comments.index" ? "active" : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Comments</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("dashboard.comments.trashed") }}" class="nav-link {{ request()->route()->getName() == "dashboard.comments.trashed" ? "active" : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Trashed Comments</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{ in_array(request()->route()->getName(), ["dashboard.banner.index", "dashboard.banner.create","dashboard.banner.edit", "dashboard.banner.trashed"]) ? "menu-open" : "" }}">
                    <a href="#" class="nav-link {{ in_array(request()->route()->getName(), ["dashboard.banner.index", "dashboard.banner.create", "dashboard.banner.edit", "dashboard.banner.trashed"]) ? "active" : "" }}">
                        <i class="nav-icon fas fa-th-list"></i>
                        <p>banner<i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route("dashboard.banner.index") }}" class="nav-link {{ request()->route()->getName() == "dashboard.banner.index" ? "active" : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All banner</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("dashboard.banner.create") }}" class="nav-link {{ request()->route()->getName() == "dashboard.banner.create" ? "active" : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>New Banner</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("dashboard.banner.trashed") }}" class="nav-link {{ request()->route()->getName() == "dashboard.banner.trashed" ? "active" : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Trashed banner</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ in_array(request()->route()->getName(), ["dashboard.unibanner.index", "dashboard.unibanner.create","dashboard.unibanner.edit", "dashboard.unibanner.trashed"]) ? "menu-open" : "" }}">
                    <a href="#" class="nav-link {{ in_array(request()->route()->getName(), ["dashboard.unibanner.index", "dashboard.unibanner.create", "dashboard.unibanner.edit", "dashboard.unibanner.trashed"]) ? "active" : "" }}">
                        <i class="nav-icon fas fa-th-list"></i>
                        <p>University Logo<i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route("dashboard.unibanner.index") }}" class="nav-link {{ request()->route()->getName() == "dashboard.unibanner.index" ? "active" : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All logo</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("dashboard.unibanner.create") }}" class="nav-link {{ request()->route()->getName() == "dashboard.unibanner.create" ? "active" : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>New logo</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("dashboard.unibanner.trashed") }}" class="nav-link {{ request()->route()->getName() == "dashboard.unibanner.trashed" ? "active" : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Trashed logo</p>
                            </a>
                        </li>
                    </ul>
                </li>
               
                @if (auth()->user()->role == 3)
                <li class="nav-item {{ in_array(request()->route()->getName(), ["dashboard.categories.index", "dashboard.categories.create","dashboard.categories.edit", "dashboard.categories.trashed"]) ? "menu-open" : "" }}">
                    <a href="#" class="nav-link {{ in_array(request()->route()->getName(), ["dashboard.categories.index", "dashboard.categories.create", "dashboard.categories.edit", "dashboard.categories.trashed"]) ? "active" : "" }}">
                        <i class="nav-icon fas fa-th-list"></i>
                        <p>Courses<i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route("dashboard.categories.index") }}" class="nav-link {{ request()->route()->getName() == "dashboard.categories.index" ? "active" : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Courses</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("dashboard.categories.create") }}" class="nav-link {{ request()->route()->getName() == "dashboard.categories.create" ? "active" : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>New Courses</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("dashboard.categories.trashed") }}" class="nav-link {{ request()->route()->getName() == "dashboard.categories.trashed" ? "active" : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Trashed Courses</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route("dashboard.tags.index") }}" class="nav-link {{ request()->route()->getName() == "dashboard.tags.index" ? "active" : "" }}">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>Tags<i class="right fas fa-angle-left"></i></p>
                    </a>
                </li>
                <li class="nav-item {{ in_array(request()->route()->getName(), ["dashboard.users.index", "dashboard.users.create","dashboard.users.edit"]) ? "menu-open" : "" }}">
                    <a href="#" class="nav-link {{ in_array(request()->route()->getName(), ["dashboard.users.index", "dashboard.users.create", "dashboard.users.edit"]) ? "active" : "" }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Users<i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route("dashboard.users.index") }}" class="nav-link {{ request()->route()->getName() == "dashboard.users.index" ? "active" : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Users</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("dashboard.users.create") }}" class="nav-link {{ request()->route()->getName() == "dashboard.users.create" ? "active" : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>New User</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ in_array(request()->route()->getName(), ["dashboard.exams.index", "dashboard.exams.create", "dashboard.exams.edit", "dashboard.exams.trashed"]) ? "menu-open" : "" }}">
                    <a href="#" class="nav-link {{ in_array(request()->route()->getName(), ["dashboard.exams.index", "dashboard.exams.create", "dashboard.exams.edit", "dashboard.exams.trashed"]) ? "active" : "" }}">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>Entrance Exam<i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route("dashboard.exams.index") }}" class="nav-link {{ request()->route()->getName() == "dashboard.exams.index" ? "active" : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Exams</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("dashboard.exams.create") }}" class="nav-link {{ request()->route()->getName() == "dashboard.exams.create" ? "active" : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>New Exam</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("dashboard.exams.trashed") }}" class="nav-link {{ request()->route()->getName() == "dashboard.exams.trashed" ? "active" : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Trashed Exams</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ in_array(request()->route()->getName(), ["dashboard.pages.index", "dashboard.pages.create", "dashboard.pages.edit", "dashboard.pages.trashed"]) ? "menu-open" : "" }}">
                    <a href="#" class="nav-link {{ in_array(request()->route()->getName(), ["dashboard.pages.index", "dashboard.pages.create", "dashboard.pages.edit", "dashboard.pages.trashed"]) ? "active" : "" }}">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>Pages<i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route("dashboard.pages.index") }}" class="nav-link {{ request()->route()->getName() == "dashboard.pages.index" ? "active" : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Pages</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("dashboard.pages.create") }}" class="nav-link {{ request()->route()->getName() == "dashboard.pages.create" ? "active" : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>New Page</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("dashboard.pages.trashed") }}" class="nav-link {{ request()->route()->getName() == "dashboard.pages.trashed" ? "active" : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Trashed Pages</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ in_array(request()->route()->getName(), ["dashboard.location.index", "dashboard.location.create", "dashboard.location.edit", "dashboard.location.trashed"]) ? "menu-open" : "" }}">
                    <a href="#" class="nav-link {{ in_array(request()->route()->getName(), ["dashboard.location.index", "dashboard.location.create", "dashboard.location.edit", "dashboard.location.trashed"]) ? "active" : "" }}">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>location<i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route("dashboard.location.index") }}" class="nav-link {{ request()->route()->getName() == "dashboard.location.index" ? "active" : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All location</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("dashboard.location.create") }}" class="nav-link {{ request()->route()->getName() == "dashboard.location.create" ? "active" : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>New location</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("dashboard.location.trashed") }}" class="nav-link {{ request()->route()->getName() == "dashboard.location.trashed" ? "active" : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Trashed location</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
                <li class="nav-item {{ in_array(request()->route()->getName(), ["dashboard.settings.password", "dashboard.settings.menus.footer", "dashboard.settings.menus.header", "dashboard.settings.site", "dashboard.settings.profile","dashboard.settings.social.media"]) ? "menu-open" : "" }}">
                    <a href="#" class="nav-link {{ in_array(request()->route()->getName(), ["dashboard.settings.password", "dashboard.settings.menus.footer", "dashboard.settings.menus.header", "dashboard.settings.site", "dashboard.settings.profile", "dashboard.settings.social.media"]) ? "active" : "" }}">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>Settings<i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route("dashboard.settings.profile") }}" class="nav-link {{ request()->route()->getName() == "dashboard.settings.profile" ? "active" : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Profile</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("dashboard.settings.password") }}" class="nav-link {{ request()->route()->getName() == "dashboard.settings.password" ? "active" : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Change Password</p>
                            </a>
                        </li>
                        @if (auth()->user()->role == 3)
                        <li class="nav-item">
                            <a href="{{ route("dashboard.settings.site") }}" class="nav-link {{ request()->route()->getName() == "dashboard.settings.site" ? "active" : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Site Settings</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("dashboard.settings.social.media") }}" class="nav-link {{ request()->route()->getName() == "dashboard.settings.social.media" ? "active" : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Social Media</p>
                            </a>
                        </li>
                        <li class="nav-item {{ in_array(request()->route()->getName(), ["dashboard.settings.menus.header", "dashboard.settings.menus.footer"]) ? "menu-open" : "" }}">
                            <a href="#" class="nav-link {{ in_array(request()->route()->getName(), ["dashboard.settings.menus.header", "dashboard.settings.menus.footer"]) ? "active" : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Menus
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route("dashboard.settings.menus.header") }}" class="nav-link {{ request()->route()->getName() == "dashboard.settings.menus.header" ? "active" : "" }}">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Header Menu</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("dashboard.settings.menus.footer") }}" class="nav-link {{ request()->route()->getName() == "dashboard.settings.menus.footer" ? "active" : "" }}">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Footer Menu</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </li>
                <li class="nav-header"></li>
                <li class="nav-item">
                    <a class="btn nav-link text-left" onclick="document.getElementById('logout').submit()">
                        <form method="POST" id="logout" action="{{ route("auth.logout") }}">
                            @csrf
                            <i class="nav-icon fa fa-sign-out-alt"></i>
                            <p>Log Out</p>
                        </form>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
