<div>
    Name: <br>
    <input wire:model.debounce.1000ms="name" type="text"/> <br>

    Message: <br>
    <textarea wire:model="message"></textarea><br>

    Marital Status: <br>
    Single <input wire:model="marital_status" type="radio" value="Single">
    Married <input wire:model="marital_status" type="radio" value="Married">

    Favourite Color: <br>

    Red <input wire:model="colors" type="checkbox" value="Red"><br>
    Green <input wire:model="colors" type="checkbox" value="Green"><br>
    Blue <input wire:model="colors" type="checkbox" value="Blue"><br>

    Favourite Fruit: <br>
    <select wire:model="fruit">
        <option value="">Select Fruit</option>
        <option value="Apple">Apple</option>
        <option value="Mango">Mango</option>
        <option value="Banana">Banana</option>
    </select>



    <hr>
    Name: {{ $name }} <br>
    Message {{ $message }} <br>
    Marital Status: {{ $marital_status }} <br>
    Favourite Colors:
    <ul>
        @foreach ($colors as $color)
            <li>{{ $color }}</li>
        @endforeach
    </ul>
    Favourite Fruit: {{ $fruit }}
</div>
