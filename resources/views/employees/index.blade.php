<x-layout>
    <main>
        <div class="content-wrap">
        <table class="flex justify-center">
            <tr>
                <th class="border-2">Id</th>
                <th class="border-2">Name</th>
                <th class="border-2">Email</th>
            </tr>
        @foreach($data as $employee)
            <tr>
                <th class="border-2">{{$employee->id}}</th>
                <th class="border-2">{{$employee->Name}}</th>
                <th class="border-2">{{$employee->Email}}</th>
            </tr>
        @endforeach
        <a class="flex justify-center" href="{{url('/employees/create')}}">Create new employee</a>
        </table>
        </div>
    </main>
</x-layout>
