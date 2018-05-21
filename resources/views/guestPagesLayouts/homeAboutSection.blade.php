<!-- Container (About Section) -->
<div id="about" class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <h2>Apie svetainę</h2>
            <h3>Mentoriams</h3>
            <h4>Padėkite sau būti geriau matomais internete.</h4>
            <h3>Studentams</h3>
            <h4>Raskite tinkamiausią mokytoją ar korepetitorių.</h4>

            <div class="panel-footer">
                <a href="{{ route('mentors.create') }}" class="btn btn-lg">Registruotis Mentoriui</a>
                <a href="{{ route('students.create') }}" class="btn btn-lg">Registruotis Studentui</a>
            </div>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-education logo"></span>
        </div>
    </div>
</div>