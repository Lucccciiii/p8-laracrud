<x-layout>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="flex justify-center items-center flex-col" action="{{url('/employees')}}" method="POST">
        @csrf()
        <label class="font-bold mr-5" for="Name">Name</label>
        <input class="border-2" id="Name" required type="text" placeholder="John" value="{{ old('Name') }}" >
        <label class="font-bold mr-2" for="Password">Password</label>
        <input class="border-2" id="Password" required type="Password" placeholder="password">
        <label class="font-bold" for="Email">Email</label>
        <input class="border-2" id="Email" required type="email" placeholder="Example@example.com">
        <label class="font-bold" for="Salary">Salary</label>
        <input class="border-2" id="Salary" required type="number" placeholder="50000">
        <label class="font-bold" title="Job Title" for="Job">Job</label>
        <input class="border-2" id="Job" required type="text" placeholder="CEO">
        <input class="border-2 bg-white text-black" type="submit">
    </form>
    <script>
    </script>
</x-layout>
