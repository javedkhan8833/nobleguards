<div class="leftside-menu leftside-menu-detached">

    <div class="leftbar-user">
        <a href="{{route('dashboard')}}">
            <img src="{{asset('admin/images/logo.jpg')}}" alt="user-image" height="80" class="rounded-circle shadow-sm">
            <span class="leftbar-user-name m-0 pt-2 text-centr">Admin</span>
        </a>
    </div>

    <!--- Sidemenu -->
    <ul class="side-nav">

        <li class="side-nav-title side-nav-item">Admin Dashobaord</li>

        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                <a href="{{route('dashboard')}}" class="side-nav-link">
                <i class="uil-home-alt"></i>
                {{-- <span class="badge bg-info rounded-pill float-end">4</span> --}}
                <span> Dashboards </span>
            </a>
            {{-- <div class="collapse" id="sidebarDashboards">
                <ul class="side-nav-second-level">
                    <li>
                        <a href="dashboard-analytics.html">Analytics</a>
                    </li>
                    <li>
                        <a href="dashboard-crm.html">CRM</a>
                    </li>
                    <li>
                        <a href="index.html">Ecommerce</a>
                    </li>
                    <li>
                        <a href="dashboard-projects.html">Refered Students</a>
                    </li>
                </ul>
            </div> --}}
        </li>

        <li class="side-nav-title side-nav-item">System Administration</li>

        <li class="side-nav-item">
            <a href="{{route('admin.about.index')}}" class="side-nav-link">
                <i class="uil-calender"></i>
                <span> About us </span>
            </a>
        </li>

        <li class="side-nav-item">
            <a href="{{route('admin.faq.index')}}" class="side-nav-link">
                <i class="uil-comments-alt"></i>
                <span> FAQs </span>
            </a>
        </li>

        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                <i class="uil-store"></i>
                <span> Sliders </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarEcommerce">
                <ul class="side-nav-second-level">
                    <li>
                        <a href="{{route('admin.slider.index')}}">Sliders List</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail" class="side-nav-link">
                <i class="uil-envelope"></i>
                <span> Contact Us Emails </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarEmail">
                <ul class="side-nav-second-level">
                    <li>
                        <a href="{{route('admin.contactus.contacted')}}">Inbox</a>
                    </li>
                    {{-- <li>
                        <a href="apps-email-read.html">Read Email</a>
                    </li> --}}
                </ul>
            </div>
        </li>

        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarProjects" aria-expanded="false" aria-controls="sidebarProjects" class="side-nav-link">
                <i class="uil-briefcase"></i>
                <span> Refered Students </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarProjects">
                <ul class="side-nav-second-level">
                    <li>
                        <a href="{{route('admin.refered.list')}}">List</a>
                    </li>
                </ul>
            </div>
        </li>

        {{-- <li class="side-nav-item">
            <a href="apps-social-feed.html" class="side-nav-link">
                <i class="uil-rss"></i>
                <span> Social Feed </span>
            </a>
        </li> --}}

         <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarTasks" aria-expanded="false" aria-controls="sidebarTasks" class="side-nav-link">
                <i class="uil-clipboard-alt"></i>
                <span> Courses </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarTasks">
                <ul class="side-nav-second-level">
                    <li>
                        <a href="{{route('admin.course.index')}}">List Courses</a>
                    </li>
                    <li>
                        <a href="{{route('registered.courses.list')}}">Registered Courses</a>
                    </li>
                </ul>
            </div>
        </li>
{{--
        <li class="side-nav-item">
            <a href="apps-file-manager.html" class="side-nav-link">
                <i class="uil-folder-plus"></i>
                <span> File Manager </span>
            </a>
        </li>

        <li class="side-nav-title side-nav-item">Custom</li>

        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false" aria-controls="sidebarPages" class="side-nav-link">
                <i class="uil-copy-alt"></i>
                <span> Pages </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarPages">
                <ul class="side-nav-second-level">
                    <li>
                        <a href="pages-profile.html">Profile</a>
                    </li>
                    <li>
                        <a href="pages-profile-2.html">Profile 2</a>
                    </li>
                    <li>
                        <a href="pages-invoice.html">Invoice</a>
                    </li>
                    <li>
                        <a href="pages-faq.html">FAQ</a>
                    </li>
                    <li>
                        <a href="pages-pricing.html">Pricing</a>
                    </li>
                    <li>
                        <a href="pages-maintenance.html">Maintenance</a>
                    </li>
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarPagesAuth" aria-expanded="false" aria-controls="sidebarPagesAuth">
                            <span> Authentication </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarPagesAuth">
                            <ul class="side-nav-third-level">
                                <li>
                                    <a href="pages-login.html">Login</a>
                                </li>
                                <li>
                                    <a href="pages-login-2.html">Login 2</a>
                                </li>
                                <li>
                                    <a href="pages-register.html">Register</a>
                                </li>
                                <li>
                                    <a href="pages-register-2.html">Register 2</a>
                                </li>
                                <li>
                                    <a href="pages-logout.html">Logout</a>
                                </li>
                                <li>
                                    <a href="pages-logout-2.html">Logout 2</a>
                                </li>
                                <li>
                                    <a href="pages-recoverpw.html">Recover Password</a>
                                </li>
                                <li>
                                    <a href="pages-recoverpw-2.html">Recover Password 2</a>
                                </li>
                                <li>
                                    <a href="pages-lock-screen.html">Lock Screen</a>
                                </li>
                                <li>
                                    <a href="pages-lock-screen-2.html">Lock Screen 2</a>
                                </li>
                                <li>
                                    <a href="pages-confirm-mail.html">Confirm Mail</a>
                                </li>
                                <li>
                                    <a href="pages-confirm-mail-2.html">Confirm Mail 2</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarPagesError" aria-expanded="false" aria-controls="sidebarPagesError">
                            <span> Error </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarPagesError">
                            <ul class="side-nav-third-level">
                                <li>
                                <a href="pages-404.html">Error 404</a>
                            </li>
                            <li>
                                <a href="pages-404-alt.html">Error 404-alt</a>
                            </li>
                            <li>
                                <a href="pages-500.html">Error 500</a>
                            </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="pages-starter.html">Starter Page</a>
                    </li>
                    <li>
                        <a href="pages-preloader.html">With Preloader</a>
                    </li>
                    <li>
                        <a href="pages-timeline.html">Timeline</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="side-nav-item">
            <a href="landing.html" target="_blank" class="side-nav-link">
                <i class="uil-globe"></i>
                <span class="badge bg-light text-dark float-end">New</span>
                <span> Landing </span>
            </a>
        </li>

        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarLayouts" aria-expanded="false" aria-controls="sidebarLayouts" class="side-nav-link">
                <i class="uil-window"></i>
                <span> Layouts </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarLayouts">
                <ul class="side-nav-second-level">
                    <li>
                        <a href="layouts-horizontal.html">Horizontal</a>
                    </li>
                    <li>
                        <a href="layouts-vertical.html">Vertical</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="side-nav-title side-nav-item mt-1">Components</li>

        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarBaseUI" aria-expanded="false" aria-controls="sidebarBaseUI" class="side-nav-link">
                <i class="uil-box"></i>
                <span> Base UI </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarBaseUI">
                <ul class="side-nav-second-level">
                    <li>
                        <a href="ui-accordions.html">Accordions</a>
                    </li>
                    <li>
                        <a href="ui-alerts.html">Alerts</a>
                    </li>
                    <li>
                        <a href="ui-avatars.html">Avatars</a>
                    </li>
                    <li>
                        <a href="ui-badges.html">Badges</a>
                    </li>
                    <li>
                        <a href="ui-breadcrumb.html">Breadcrumb</a>
                    </li>
                    <li>
                        <a href="ui-buttons.html">Buttons</a>
                    </li>
                    <li>
                        <a href="ui-cards.html">Cards</a>
                    </li>
                    <li>
                        <a href="ui-carousel.html">Carousel</a>
                    </li>
                    <li>
                        <a href="ui-dropdowns.html">Dropdowns</a>
                    </li>
                    <li>
                        <a href="ui-embed-video.html">Embed Video</a>
                    </li>
                    <li>
                        <a href="ui-grid.html">Grid</a>
                    </li>
                    <li>
                        <a href="ui-list-group.html">List Group</a>
                    </li>
                    <li>
                        <a href="ui-modals.html">Modals</a>
                    </li>
                    <li>
                        <a href="ui-notifications.html">Notifications</a>
                    </li>
                    <li>
                        <a href="ui-offcanvas.html">Offcanvas</a>
                    </li>
                    <li>
                        <a href="ui-placeholders.html">Placeholders</a>
                    </li>
                    <li>
                        <a href="ui-pagination.html">Pagination</a>
                    </li>
                    <li>
                        <a href="ui-popovers.html">Popovers</a>
                    </li>
                    <li>
                        <a href="ui-progress.html">Progress</a>
                    </li>
                    <li>
                        <a href="ui-ribbons.html">Ribbons</a>
                    </li>
                    <li>
                        <a href="ui-spinners.html">Spinners</a>
                    </li>
                    <li>
                        <a href="ui-tabs.html">Tabs</a>
                    </li>
                    <li>
                        <a href="ui-tooltips.html">Tooltips</a>
                    </li>
                    <li>
                        <a href="ui-typography.html">Typography</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarExtendedUI" aria-expanded="false" aria-controls="sidebarExtendedUI" class="side-nav-link">
                <i class="uil-package"></i>
                <span> Extended UI </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarExtendedUI">
                <ul class="side-nav-second-level">
                    <li>
                        <a href="extended-dragula.html">Dragula</a>
                    </li>
                    <li>
                        <a href="extended-range-slider.html">Range Slider</a>
                    </li>
                    <li>
                        <a href="extended-ratings.html">Ratings</a>
                    </li>
                    <li>
                        <a href="extended-scrollbar.html">Scrollbar</a>
                    </li>
                    <li>
                        <a href="extended-scrollspy.html">Scrollspy</a>
                    </li>
                    <li>
                        <a href="extended-treeview.html">Treeview</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="side-nav-item">
            <a href="widgets.html" class="side-nav-link">
                <i class="uil-layer-group"></i>
                <span> Widgets </span>
            </a>
        </li>

        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarIcons" aria-expanded="false" aria-controls="sidebarIcons" class="side-nav-link">
                <i class="uil-streering"></i>
                <span> Icons </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarIcons">
                <ul class="side-nav-second-level">
                    <li>
                        <a href="icons-dripicons.html">Dripicons</a>
                    </li>
                    <li>
                        <a href="icons-mdi.html">Material Design</a>
                    </li>
                    <li>
                        <a href="icons-unicons.html">Unicons</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarForms" aria-expanded="false" aria-controls="sidebarForms" class="side-nav-link">
                <i class="uil-document-layout-center"></i>
                <span> Forms </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarForms">
                <ul class="side-nav-second-level">
                    <li>
                        <a href="form-elements.html">Basic Elements</a>
                    </li>
                    <li>
                        <a href="form-advanced.html">Form Advanced</a>
                    </li>
                    <li>
                        <a href="form-validation.html">Validation</a>
                    </li>
                    <li>
                        <a href="form-wizard.html">Wizard</a>
                    </li>
                    <li>
                        <a href="form-fileuploads.html">File Uploads</a>
                    </li>
                    <li>
                        <a href="form-editors.html">Editors</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarCharts" aria-expanded="false" aria-controls="sidebarCharts" class="side-nav-link">
                <i class="uil-chart"></i>
                <span> Charts </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarCharts">
                <ul class="side-nav-second-level">
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarApexCharts" aria-expanded="false" aria-controls="sidebarApexCharts">
                            <span> Apex Charts </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarApexCharts">
                            <ul class="side-nav-third-level">
                                <li>
                                    <a href="charts-apex-area.html">Area</a>
                                </li>
                                <li>
                                    <a href="charts-apex-bar.html">Bar</a>
                                </li>
                                <li>
                                    <a href="charts-apex-bubble.html">Bubble</a>
                                </li>
                                <li>
                                    <a href="charts-apex-candlestick.html">Candlestick</a>
                                </li>
                                <li>
                                    <a href="charts-apex-column.html">Column</a>
                                </li>
                                <li>
                                    <a href="charts-apex-heatmap.html">Heatmap</a>
                                </li>
                                <li>
                                    <a href="charts-apex-line.html">Line</a>
                                </li>
                                <li>
                                    <a href="charts-apex-mixed.html">Mixed</a>
                                </li>
                                <li>
                                    <a href="charts-apex-pie.html">Pie</a>
                                </li>
                                <li>
                                    <a href="charts-apex-radar.html">Radar</a>
                                </li>
                                <li>
                                    <a href="charts-apex-radialbar.html">RadialBar</a>
                                </li>
                                <li>
                                    <a href="charts-apex-scatter.html">Scatter</a>
                                </li>
                                <li>
                                    <a href="charts-apex-sparklines.html">Sparklines</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="charts-brite.html">Britecharts</a>
                    </li>
                    <li>
                        <a href="charts-chartjs.html">Chartjs</a>
                    </li>
                    <li>
                        <a href="charts-sparkline.html">Sparklines</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarTables" aria-expanded="false" aria-controls="sidebarTables" class="side-nav-link">
                <i class="uil-table"></i>
                <span> Tables </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarTables">
                <ul class="side-nav-second-level">
                    <li>
                        <a href="tables-basic.html">Basic Tables</a>
                    </li>
                    <li>
                        <a href="tables-datatable.html">Data Tables</a>
                    </li>
                </ul>
            </div>
        </li> --}}

        {{-- <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarMaps" aria-expanded="false" aria-controls="sidebarMaps" class="side-nav-link">
                <i class="uil-location-point"></i>
                <span> Maps </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarMaps">
                <ul class="side-nav-second-level">
                    <li>
                        <a href="maps-google.html">Google Maps</a>
                    </li>
                    <li>
                        <a href="maps-vector.html">Vector Maps</a>
                    </li>
                </ul>
            </div>
        </li> --}}

        {{-- <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarMultiLevel" aria-expanded="false" aria-controls="sidebarMultiLevel" class="side-nav-link">
                <i class="uil-folder-plus"></i>
                <span> Multi Level </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarMultiLevel">
                <ul class="side-nav-second-level">
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarSecondLevel" aria-expanded="false" aria-controls="sidebarSecondLevel">
                            <span> Second Level </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarSecondLevel">
                            <ul class="side-nav-third-level">
                                <li>
                                    <a href="javascript: void(0);">Item 1</a>
                                </li>
                                <li>
                                    <a href="javascript: void(0);">Item 2</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarThirdLevel" aria-expanded="false" aria-controls="sidebarThirdLevel">
                            <span> Third Level </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarThirdLevel">
                            <ul class="side-nav-third-level">
                                <li>
                                    <a href="javascript: void(0);">Item 1</a>
                                </li>
                                <li class="side-nav-item">
                                    <a data-bs-toggle="collapse" href="#sidebarFourthLevel" aria-expanded="false" aria-controls="sidebarFourthLevel">
                                        <span> Item 2 </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="sidebarFourthLevel">
                                        <ul class="side-nav-forth-level">
                                            <li>
                                                <a href="javascript: void(0);">Item 2.1</a>
                                            </li>
                                            <li>
                                                <a href="javascript: void(0);">Item 2.2</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </li> --}}
    </ul>


    <div class="clearfix"></div>
    <!-- Sidebar -left -->

</div>
