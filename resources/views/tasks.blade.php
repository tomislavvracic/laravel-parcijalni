<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200" style="display: flex">
                    <form action="/tasks/create" method="post" style="display: flex; flex-direction : column; width: 20%;">
                        @csrf
                        <label for="task">Novi task</label>
                        <input type="task" id="task" name="task" style="border: 1px solid black;  height : 100px">
                        <button style="padding: 5px; border: 1px solid blue; margin-top: 10px">Dodaj</button>
                    </form>
                    <div style="margin-left: 50px; display : flex; flex-direction: column; width: 50%">
                        <h2>Tasks</h2>
                        @foreach ($tasks as $task)
                            <div style="display: flex">
                                <div style="padding: 5px; border: 1px solid #ccc; margin : 10px 0px">
                                    {{$task->description}}                            
                                </div>
                                <form action="/tasks/{{$task->id}}">
                                    @method("DELETE")
                                    @csrf
                                    <button type="submit" style="margin: 10px 0px; display: flex; justify-content : center; align-items: center; color:red; margin-left: 10px; font-size: 20px; font-weight: bold">x</button>
                                </form>
                            </div>
                        @endforeach
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
