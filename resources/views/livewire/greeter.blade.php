<div>

    <form
        wire:submit="changeGreeting()"
    >

        <div class="mt-2" >

        <select
            type="text"
            class="p-4 border rounded-md bg-gray-100"
            wire:model.fill="greeting"
        >
            <option value="Hello">Hello</option>
            <option value="Hi">Hi</option>
            <option value="Hey" selected>Hey</option>
            <option value="Howdy">Howdy</option>
        </select>

            <input
                id="newName"
                type="text"
                class="p-4 border rounded-md bg-gray-100"
                wire:model.live="name"
            >

        </div>
        <div class="mt-2">
            <button
                type="submit"
                class="text-white font-medium rounded-md px-4 py-2 bg-blue-600"

            >
                Greet
            </button>
        </div>
    </form>
    @if($greetingMessage!=='')
        <div>
            {{$greetingMessage}}
        </div>
    @endif
</div>
