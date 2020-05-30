@if (session("mensajeerror"))
    <div class="alert alert-danger alert-dismissible"data-auto-dismiss="3000">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-close"></i>ERROR</h4>
            <ul>
                <li>{{ session("mensajeerror") }}</li>
            </ul>
    </div>
@endif