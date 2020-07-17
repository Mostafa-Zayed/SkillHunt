<div class="card-header">
    <i class="fa fa-table"></i> Data Of {{ucfirst($models)}}</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                @foreach($fields as $field)
                    <th>{{ucfirst($field)}}</th>
                @endforeach
            </tr>
            </thead>
            <tfoot>
            <tr>
                @foreach($fields as $field)
                    <th>{{ucfirst($field)}}</th>
                @endforeach
            </tr>
            </tfoot>
