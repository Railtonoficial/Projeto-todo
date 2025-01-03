<div class="task" {{$data['is_done'] ? 'task_done' : 'task_pending'}}>
    <div class="title">
        <input type="checkbox" onchange="taskUpdate(this)" data-id="{{$data['id']}}"
        @if($data && $data['is_done'])
            checked
            @endif
        />
        <h3 class="task_title">{{$data['title'] ?? ''}}</h3>
    </div>
    <div class="priority">
        <div class="sphere"></div>
        <div>{{$data['category']->title ?? ''}}</div>
    </div>
    <div class="actions">
        <a href="{{route('task.edit', ['id' => $data ['id']])}}">
            <img src="/assets/images/icon-edit.png"/>
        </a>
        <a href="{{route('task.delete', ['id' => $data ['id']])}}">
            <img src="/assets/images/icon-delete.png"/>
        </a>
    </div>
</div>
