@if (session("mensaje"))
    <div class="alert alert-warning alert-dismissible" data-auto-dismiss="3000">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-check"></i> Mensaje sistema Equivalencias</h5>
        <ul>
            <li>{{ session("mensaje") }}</li>
        </ul>
    </div>

@endif