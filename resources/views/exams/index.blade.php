@php
$i=0;
@endphp
<div>
    <div>
        <div style="text-align:center">
            {{ session('message') }}
        </div>
        <div style="width:100%;text-align:right">
            <a href="/create">
            <button type="button" style="width:100px; height:50px; font-size:20px">Create</button>
            </a>
        </div>
        <h1 style="width:100%;text-align:center">
            ENTRIES
        </h1>
    </div>
    <div>
        <table width="100%" style="border: 3px solid black; border-collapse">
            <thead>
                <tr style="border: 3px solid black; border-collapse: collapse;text-align:center">
                    <th style="border: 3px solid black; border-collapse: collapse" width="10px">No.</th>
                    <th style="border: 3px solid black; border-collapse: collapse" width="100px">Name</th>
                    <th style="border: 3px solid black; border-collapse: collapse" width="100px">Mobile No.</th>
                    <th style="border: 3px solid black; border-collapse: collapse" width="100px">Email</th>
                    <th style="border: 3px solid black; border-collapse: collapse" width="100px">Age</th>
                    <th style="border: 3px solid black; border-collapse: collapse" width="100px">Gender</th>
                    <th style="border: 3px solid black; border-collapse: collapse" width="100px">Hobbies</th>
                    <th style="border: 3px solid black; border-collapse: collapse" width="100px">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($exams as $exam)
                @if(!empty($exam['name']))
                <tr style="border: 3px solid yellow; border-collapse: collapse;text-align:center">

                    <td style="border: 3px solid yellow; border-collapse: collapse" width="10px">{{++$i}}</td>

                    <td style="border: 3px solid yellow; border-collapse: collapse" width="100px">{{$exam->name}}</td>

                    <td style="border: 3px solid yellow; border-collapse: collapse" width="100px">{{$exam->mobno}}</td>

                    <td style="border: 3px solid yellow; border-collapse: collapse" width="100px">{{$exam->email}}</td>

                    @if($exam->age) 
                        @if($exam->age < 18)
                        <td style="border: 3px solid yellow; border-collapse: collapse" width="100px">{{$exam->age}}</td>
                        @elseif($exam->age < 24)
                        <td style="border: 3px solid green; border-collapse: collapse" width="100px">{{$exam->age}}</td>
                        @else
                        <td style="border: 3px solid black; border-collapse: collapse" width="100px">{{$exam->age}}</td>
                        @endif
                    @else
                        <td style="border: 3px solid red ; border-collapse: collapse" width="100px">{{$exam->age}}</td>
                    @endif

                    @if($exam->gender)
                        @if($exam->gender =='male')
                        <td style="border: 3px solid orange; border-collapse: collapse" width="100px">{{$exam->gender}}</td>
                        @elseif($exam->gender =='female')
                        <td style="border: 3px solid cyan; border-collapse: collapse" width="100px">{{$exam->gender}}</td>
                        @else
                        <td style="border: 3px solid ; 
                                    border-image: linear-gradient(to right,violet,indigo,blue,green,yellow,orange,red);
                                    border-image-slice:1" width="100px">{{$exam->gender}}</td>
                        @endif
                    @else
                        <td style="border: 3px solid red; border-collapse: collapse" width="100px">{{$exam->gender}}</td>
                    @endif

                    @if($exam->hobbies)
                    <td style="border: 3px solid yellow; border-collapse: collapse" width="100px">
                        @if(is_array($exam->hobbies))
                            {{implode(',',$exam->hobbies)}}
                        @else
                            {{$exam->hobbies}}
                        @endif
                    </td>
                    @else
                    <td style="border: 3px solid red; border-collapse: collapse" width="100px">
                        @if(is_array($exam->hobbies))
                            {{implode(',',$exam->hobbies)}}
                        @else
                            {{$exam->hobbies}}
                        @endif
                    </td>
                    @endif
                    <td style="border: 3px solid yellow; border-collapse: collapse" width="100px">
                        <a href="{{ route('exams.edit', $exam->id) }}">
                            <button type="button">Edit</button>
                        </a>

                </tr>
                @endif
                @empty
                    <tr>
                        <td colspan="8">No Entries found.</td>
                    </tr>
                @endforelse
            </tbody>
            
        </table>
    </div>
</div>