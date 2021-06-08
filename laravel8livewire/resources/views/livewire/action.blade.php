<div>
    <button type="button" wire:click="addTwoNumbers(32,55)">Sum</button> <br>

    <textarea wire:keydown.enter="DisplayMessage($event.target.value)"></textarea> <br>

    <form wire:submit.prevent="getSum">
        Enter Num 1:<input wire:model="num1" name="num1" type="text">
        Enter Num 2:<input wire:model="num2" name="num2" type="text">
        <button type="submit">Submit</button>
    </form>

    Sum:{{ $sum }} <br>

    Message: {{ $message }}
</div>
