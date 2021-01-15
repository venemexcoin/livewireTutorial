<div>
    <style>
        nav svg {
            height: 12px;
            width: 20px;
            color: black;
        }
    </style>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>All Users</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-stiped">
                                <div class="theader">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                    </tr>
                                </div>
                                <div class="tbody">
                                    @foreach ($users as $user)
                                    <tr>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                    </tr>
                                            @endforeach

                            </table>
                            {{$users->links()}}
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
