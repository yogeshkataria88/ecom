<div class="be-left-sidebar">
    <div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle">{{trans('app.admin_home')}}</a>
        <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
                <div class="left-sidebar-content">
                    <ul class="sidebar-elements">
                        <li class="divider">{{trans('app.menu')}}</li>
                        <li class="{{$dashboardTab ?? ''}}" title="Dashboard"><a href="{{url('/dashboard')}}"><i
                                        class="icon mdi mdi-home"></i><span>{{trans('app.admin_home')}}</span></a>
                        </li>
                            <li title="categories" class="{{$CategoriesTab ?? ''}}"><a href="{{url('/categories')}}"><i
                                            class="icon mdi mdi-face"></i></i><span>{{trans('app.categories')}}</span></a>
                            </li>
                            
                        <li title="product" class="{{$productTab ?? ''}}"><a href="{{url('/product')}}"><i
                                            class="icon mdi mdi-face"></i></i><span>{{trans('app.product')}}</span></a>
                        </li>
                    </ul>
                    </li>
                    </ul>
                    </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>