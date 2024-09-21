<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">All Schools</div>
            <div class="card-body">
                <div class="mx-auto p-2">
                    <div class="no-tailwind">
                        {{ $dataTable->table() }}
                        </ </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @section('modals')
        <div id="schoolForm">
            <fieldset class="name">
                <legend>Name</legend>

                <editor-field name="short_name"></editor-field>
                <editor-field name="name"></editor-field>
            </fieldset>
            <fieldset class="office">
                <legend>Office</legend>

                <editor-field name="number"></editor-field>
                <editor-field name="address"></editor-field>
            </fieldset>
            <fieldset class="hr">
                <legend>HR info</legend>

                <editor-field name="website"></editor-field>
            </fieldset>
        </div>
    @endsection

    @section('javascripts')
        {{ $dataTable->scripts() }}
    @endsection
</x-app-layout>
