<div>
    @include('livewire.create')
    <section>
        <div class="container col-md-12">
            <table class="table">
                <div class="card">
                    <div class="card-header">
                        <h3>All Students
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addStudentModal">
                                Launch demo modal
                            </button>
                        </h3>
                    </div>
                </div>
                <thead>
                <tr>
                    {{-- <th scope="col">#</th> --}}
                    <th scope="col">Name</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            {{-- <td>{{ $student->id }}</td> --}}
                            <td>{{ $student->firstname }}</td>
                            <td>{{ $student->lastname }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->phone }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</div>