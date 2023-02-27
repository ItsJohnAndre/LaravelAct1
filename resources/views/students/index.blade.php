@include ('partials.header')
<?php $array =array('title'=>'Student System');?>
<x-nav :data="$array"/>
<x-messages />
   <header class="max-w-lg mx-auto mt-5">
    <a href="#">
        <h1 class="text-4xl font-bold text-indigo-600 text-center">Student List</h1>
    </a>
   </header>
   <section>
    <div class="overflow-x-auto relative">
        <table class="w-96 mx-auto text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-500">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        First Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Last Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Age
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Gender
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Email Address
                    </th>
                    <th scope="col" class="py-3 px-6">
                        
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr class="bg-gray-800 border-b text-white">
                    <td class="py-4 px-6">
                        {{$student->first_name}}
                    </td>
                    <td class="py-4 px-6">
                        {{$student->last_name}}
                    </td>
                    <td class="py-4 px-6">
                        {{$student->age}}
                    </td>
                    <td class="py-4 px-6">
                        {{$student->gender}}
                    </td>
                    <td class="py-4 px-6">
                        {{$student->email}}
                    </td>
                    <td class="py-4 px-6">
                        <a href="/students/{{$student->id}}" class="bg-sky-600 text-white 
                        px-4 py-1 rounded">VIEW</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mx-auto max-w-xl pt-6 p-4">
             {{ $students->links() }}
        </div>
       
    </div>
   </section>
 @include('partials.footer')