<li> 
    <a href="{{ route('home') }}"><i class="fe fe-home"></i> <span>Accueil</span></a>
</li>
<li class="menu-title">
    <span>Contenu</span>
</li>
<li class="submenu">
    <a href="#"><i class="fa fa-rocket"></i> <span> Categories</span> <span class="menu-arrow"></span></a>
    <ul style="display: none;">
        <li><a class="item-nav" href="{{ route('categorie.create') }}">Ajouter</a></li>
        <li><a class="item-nav" href="{{ route('categorie.index') }}">Liste</a></li>
    </ul>
</li>
<li class="submenu">
    <a href="#"><i class="fa fa-file-text-o"></i> <span> Articles</span> <span class="menu-arrow"></span></a>
    <ul style="display: none;">
        <li><a class="item-nav" href="{{ route('article.create') }}">Ajouter</a></li>
        <li><a class="item-nav" href="{{ route('article.index') }}">Liste</a></li>
    </ul>
</li>
<li class="menu-title">
    <span>Plan de Lecture</span>
</li><li class="submenu">
    <a href="#"><i class="fe fe-text-align-left"></i> <span> Versets</span> <span class="menu-arrow"></span></a>
    <ul style="display: none;">
        <li><a class="item-nav" href="{{ route('verset.create') }}">Ajouter</a></li>
        <li><a class="item-nav" href="{{ route('verset.index') }}">Liste</a></li>
    </ul>
</li>
<li class="submenu">
    <a href="#"><i class="fa fa-group"></i> <span> Invités</span> <span class="menu-arrow"></span></a>
    <ul style="display: none;">
        <li><a class="item-nav" href="{{ route('invite.create') }}">Ajouter</a></li>
        <li><a class="item-nav" href="{{ route('invite.index') }}">Liste</a></li>
    </ul>
</li>
