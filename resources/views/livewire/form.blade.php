<div>

    Name : <br><input type="text" wire:model.debounce.2000ms = "name" /><br>

    
    Mesage: <br>
    <textarea wire:model.debounce.3000ms="message"></textarea><br>

    Marital Status:<br>
    Single <input type="radio" value="Single" wire:model="marital_status" ><br>
    Married <input type="radio" value="Married" wire:model="marital_status" ><br>

    Favourite Color : <br>

    Red <input type="checkbox" value="Red" wire:model="colors" /><br>
    Green <input type="checkbox" value="Green" wire:model="colors" /><br>
    Blue <input type="checkbox" value="Blue" wire:model="colors" /><br>

    Favorite Fruit: <br>
    <select wire:model="fruit" >
        <option value="">Select Fruit</option>
        <option value="Apple">Apple</option>
        <option value="Mange">Mange</option>
        <option value="banana">banana</option>
    </select>
    
    <hr>
    name : {{$name}} <br>
    message : {{$message}} <br>
    Marital Status : {{$marital_status}} <br>
    Favourite Colors : 
    <ul>
        @foreach ($colors as $color)
            <li>{{$color}}</li>
        @endforeach
    </ul>
    <br>
    Favorite Fruit : {{$fruit}}

</div>
