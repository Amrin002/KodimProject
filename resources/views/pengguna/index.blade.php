@extends ('template.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Halaman Daftar Pengguna</h1>
            <div class="card">
                <div class="card-header">
                    <h5>Data Pengguna</h5>
                </div>
                <div class="card-body">
                    <!-- <a href="" class="btn btn-success mb-3"><i class="fas fa-plus-circle"></i> Tambah Pengguna</a> -->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#exampleModalCenter">
                        <i class="fas fa-plus-circle"></i> Tambah Pengguna
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Staf</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="nama">Username</label>
                                            <input type="text" class="form-control" id="name" name="nama" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" id="password" name="password" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="role">Devisi</label>
                                            <select class="form-control" id="role" name="role" required>
                                                <option value="">Pilih Devisi</option>
                                                <option value="staf 1">Staf 1</option>
                                                <option value="staf 2">Staf 2</option>
                                                <option value="staf 3">Staf 3</option>
                                                <option value="staf 4">Staf 4</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- devisi -->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary mb-3 ml-2" data-toggle="modal" data-target="#devisis">
                        <i class="fas fa-plus-circle"></i> Tambah Devisi
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="devisis" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Devisi</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->email }}</td>
                                    <td>{{ $row->role }}</td>
                                    <td>
                                        <div class="row">
                                            <a href="#" class="btn btn-warning">Edit</a>
                                            <form action="#" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger ms-2 ml-2">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection