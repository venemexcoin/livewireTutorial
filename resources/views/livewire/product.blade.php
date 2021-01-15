<div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-heade">
                        <div class="container">
                            <div class="from-group">
                                <h3 class="mt-4">
                                    Title
                                </h3>
                                <input type="text" class="form-control mb-3" wire:model.debounce.2000ms ="title" ><b>
                                    <h3>
                                        Name : 
                                    </h3>
                                
                                <input type="text" class="form-control" wire:model.debounce.2000ms="name" /><br>

                        </div>
                                
                    </div>
                    <div class="card-body">
                        <h3>Title : {{$title}}</h3>
                    
                        <h3>Name : {{ $name }}</h3>
                    
                        <h3>Lifecycle Hooks Method</h3>
                    
                        @foreach ($infos as $info )
                            <h4>{{ $info }}</h4>
                        @endforeach

                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
