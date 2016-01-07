<!-- Navigation -->
<div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="medium">
    <button class="menu-icon" type="button" data-toggle></button>
    <div class="title-bar-title">Menu</div>
</div>

<div class="top-bar" id="main-menu">
    <div class="top-bar-left">
        <ul class="dropdown menu" data-dropdown-menu>
            <li class="menu-text">Catalogue produit e-Star-Wars</li>
        </ul>
    </div>
    <div class="top-bar-right">
        <ul class="menu vertical medium-horizontal" data-responsive-menu="drilldown medium-dropdown">
            <li><a href="/">Accueil</a></li>
            @forelse($categories as $category)
                <li><a href="#">{{$category->title}}</a></li>
            @empty
                <li>{{trans('app.nocategory')}}</li>
            @endforelse
            <li><a href="contact">Contact</a></li>
            <li><a href="#">Login</a></li>
        </ul>
    </div>
</div>
<br>
<!-- /navigation -->