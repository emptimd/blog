<li class="{{ Request::is('products*') ? 'active' : '' }}">
    <a href="{!! route('products.index') !!}"><i class="fa fa-edit"></i><span>Products</span></a>
</li>


<li class="{{ Request::is('productImages*') ? 'active' : '' }}">
    <a href="{!! route('productImages.index') !!}"><i class="fa fa-edit"></i><span>ProductImages</span></a>
</li>


<li class="{{ Request::is('admin/cities*') ? 'active' : '' }}">
    <a href="{!! route('admin.cities.index') !!}"><i class="fa fa-edit"></i><span>Cities</span></a>
</li>

<li class="{{ Request::is('images*') ? 'active' : '' }}">
    <a href="{!! route('admin.images.index') !!}"><i class="fa fa-edit"></i><span>Images</span></a>
</li>

<li class="{{ Request::is('testDatatablesBogdans*') ? 'active' : '' }}">
    <a href="{!! route('admin.testDatatablesBogdans.index') !!}"><i class="fa fa-edit"></i><span>TestDatatablesBogdans</span></a>
</li>


<li class="{{ Request::is('admin/projects*') ? 'active' : '' }}">
    <a href="{!! route('admin.projects.index') !!}"><i class="fa fa-edit"></i><span>Projects</span></a>
</li>


<li class="{{ Request::is('admin/yous*') ? 'active' : '' }}">
    <a href="{!! route('admin.yous.index') !!}"><i class="fa fa-edit"></i><span>Yous</span></a>
</li>

<li class="{{ Request::is('admin/aes*') ? 'active' : '' }}">
    <a href="{!! route('admin.aes.index') !!}"><i class="fa fa-edit"></i><span>Aes</span></a>
</li>



<li class="{{ Request::is('admin/families*') ? 'active' : '' }}">
    <a href="{!! route('admin.families.index') !!}"><i class="fa fa-edit"></i><span>Families</span></a>
</li>

<li class="{{ Request::is('admin/familyImages*') ? 'active' : '' }}">
    <a href="{!! route('admin.familyImages.index') !!}"><i class="fa fa-edit"></i><span>FamilyImages</span></a>
</li>


<li class="{{ Request::is('admin/news*') ? 'active' : '' }}">
    <a href="{!! route('admin.news.index') !!}"><i class="fa fa-edit"></i><span>News</span></a>
</li>

<li class="{{ Request::is('admin/tis*') ? 'active' : '' }}">
    <a href="{!! route('admin.tis.index') !!}"><i class="fa fa-edit"></i><span>Tis</span></a>
</li>

<li class="{{ Request::is('admin/languages*') ? 'active' : '' }}">
    <a href="{!! route('admin.languages.index') !!}"><i class="fa fa-edit"></i><span>Languages</span></a>
</li>

