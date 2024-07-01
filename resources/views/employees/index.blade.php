<x-layout>
    <main>
        <div class="content-wrap">
            <ul>
                @foreach($data as $employee)
                    <li>
                        <a>
                        {{$employee['Name']}}
                        </a>
                    </li>
                @endforeach
            </ul>
        <a class="flex justify-center" href="{{url('/employees/create')}}">Create new employee</a>

        </div>
    </main>
</x-layout>
