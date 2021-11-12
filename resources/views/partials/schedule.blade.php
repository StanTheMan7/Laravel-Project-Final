 <!-- Schedule Area Strat -->
 <section class="schedule-area pt-85 pb-90 text-center">
    @php
        $before=Str::before($titleDesc[1]->title,'(');
        $between=Str::between($titleDesc[1]->title,'(',')');
        $after=Str::after($titleDesc[1]->title,')');
    @endphp

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                <div class="section-title">
                    @if ($before == $between && $between == $after )
                        
                    <h2>{{$before}}</h2>
                    @else
                        <h2>{{$before}} <span style="color: rgb(95, 199,174)">{{$between}}</span>{{$after}}</h2>
                    @endif
                    <p> {{$titleDesc[1]->description}}</p>
                </div>
            </div>
        </div>    
    



        <div class="row">
            <div class="col-xs-12">                             
                <div class="scehedule-table table-responsive text-center">
                    <table>
                        <thead>
                            <tr>
                                <th>Time</th>                                
                                <th>monday</th>
                                <th>tuesday</th>
                                <th>wednesday</th>
                                <th>thursday</th>
                                <th>friday</th>
                                <th>saturday</th>
                                <th>sunday</th>
                            </tr>
                        </thead>
                        <tbody class="pt-30">
                            {{-- {{dd($currentDate,$weekStartDate,$weekEndDate)}}  --}}
                            @php
                                $timeslots=["8 AM - 12 PM", "12 PM - 3 PM", "3 PM - 6 PM", "6 PM - 8 PM"];
                                $startD = new DateTime($weekStartDate);
                                $endD = new DateTime($weekEndDate);
                            @endphp 

                            @for ($j = 0; $j <= 3; $j++)
                           
                            <tr>
                                <td class="time">
                                    @if ($j == 0)
                                        <p>8:00 AM</p>
                                    @elseif ($j == 1)
                                        <p>12:00 PM</p>
                                    @elseif ($j == 2)
                                        <p>3:00 PM</p>
                                    @else
                                        <p>6:00 PM</p>
                                    @endif
                                </td>                  

                                @if ($j==2)
                                    {{-- {{dd($startD,$endD)}} --}}
                                @endif 
                                
                                @php
                                    $loopStartDate = new DateTime($startD->format('Y-m-d'));
                                    $loopEndDate = new DateTime($endD->format('Y-m-d'));
                                @endphp 

                                @for($i = $loopStartDate; $i <= $loopEndDate; $i->modify('+1 day')) 
                                    @php $dayMatch = false @endphp
                                    @foreach ($allClasses as $curr_class)                                        
                                    
                                        @php
                                            $class_date = new DateTime($curr_class->date)//strtotime($curr_class->date);
                                            //$day = date('w', $class_date)
                                        @endphp 

                                        @if ($j==2)
                                         {{-- {{dd($class_date,$startD,$endD)}}   --}}
                                        @endif 

                                        @if ($class_date >= $startD && $class_date <= $endD)
                                        
                                            @if ($curr_class->time == $timeslots[$j] &&
                                                $class_date == $i) 
                                                @php
                                                    $dayColor = '';                                                
                                                    
                                                    if ( $j==0)                                           
                                                    { $dayColor = 'purple'; }
                                                    elseif ($j == 1)
                                                        {$dayColor = 'olive'; }
                                                    elseif ($j == 2)
                                                    {  
                                                        $dayColor = 'pink';
                                                    }
                                                    else {
                                                        $dayColor = 'blue';
                                                    }
                                                    $dayMatch=true
                                                @endphp

                                                <td class="{{$dayColor}}">
                                                    <h4>{{$curr_class->title}}</h4>
                                                    <p>{{$curr_class->name}}</p>
                                                    <p>{{$curr_class->time}}</p>
                                                </td>                    
                                            @endif                                        
                                        @endif                                        
                                    @endforeach

                                    @if ($dayMatch==false)   
                                        <td></td>
                                    @endif   
                                @endfor
                            </tr>
                            @endfor                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <form style="margin-top: 20px; text-align: center"
                            action="{{ route('changeWeek') }}"
                            method="post">
                            @csrf                            
                            <button name='action' type="submit" name='button1' class="btn"
                            style="font-size: 12px; background-color: #5FC7AE;">Week 1</button>
                        </form>
        <form style="margin-top: 20px; text-align: center"
                            action="{{ route('changeWeek2') }}"
                            method="post">
                            @csrf                            
                            <button name='action' type="submit" name='button2' class="btn"
                            style="font-size: 12px; background-color: #5FC7AE;">Week 2</button>
                        </form>
        <form style="margin-top: 20px; text-align: center"
                            action="{{ route('changeWeek3') }}"
                            method="post">
                            @csrf                            
                            <button name='action' type="submit" name='button3' class="btn"
                            style="font-size: 12px; background-color: #5FC7AE;">Week 3</button>
                        </form>

        

               
           
</section>
<!-- Schedule Area End -->