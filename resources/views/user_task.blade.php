<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validation Form</title>
</head>
<body>
    <form action="{{url('user_task')}}" method="POST">
        @csrf
        <div>
            <label for="task_name">Task Name:</label>
            <input type="text" name="taskname" value="{{old('task_name')}}"/>
            @error('task_name')
                <div>{{$message}}</div>
            @enderror

         </div>
         <div>
            <label for="status">Status</label>
            <select id="status" name="status">
                <option value="">--</option>
                <option value="Pending">Pending</option>
                <option value="Completed">Completed</option>
                <option value="OnProcess">On Process</option>
            </select>
            @error('status')
                <div>{{$message}}</div>
            @enderror
         </div>
         <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="5" style="width: 100%" ></textarea>
            @error('description')
                <div>{{$message}}</div>
            @enderror
         </div>
         <div>
            <label for="deadline">Deadline:</label>
            <input type="date" id="deadline" name="deadline" value="{{old ('deadline')}}"/>
            @error('deadlinen')
            <   div>{{$message}}</>
             @enderror
         </div>
         <button type="submit">Submit:</button>
     </form>
     @if(@session('success')
        <div> {session(success)}</div>
         
     @endsession)
        
     @endif
        
</body>
</html>