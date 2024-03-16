@if(session('status'))
                        <div class="alert alert-success">{{session('status')}}</div>
                        @endif
                        @if(session('error'))
                        <div class="alert alert-danger">{{session('error')}}</div>
                        @endif

                        @if(count($errors))                       
                        <div  class="alert alert-danger">
                        {{--$errors is an array $err is like i variable  --}}
                        <strong> Validation errors:</strong>
                        <ul>   
                        @foreach($errors->all() as $err)
                            <li> {{$err}} </li>   
                        
                        @endforeach
                            </ul>
                        </div>
                        @endif