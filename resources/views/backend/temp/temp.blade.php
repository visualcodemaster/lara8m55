{{--Only temp data--}}
<li class="m-menu__item  m-menu__item--submenu {{ Route::currentRouteName() === 'reports.purchase.return.report'  ? 'm-menu__item--open' : ''}}" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
            class="m-menu__link-text">Purchases Return Report</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
        <ul class="m-menu__subnav">
            <li class="m-menu__item {{ Route::currentRouteName() === 'reports.purchase.return.report' ? 'm-menu__item--active' : ''}}" aria-haspopup="true"><a href="{{ route('reports.purchase.return.report') }}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Purchase Return Report</span></a></li>
        </ul>
    </div>
</li>
