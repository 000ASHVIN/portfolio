<div class="row">
    <div class="col-12">
        {!!Form::label('title', 'Title')!!}
        {!!Form::text('title', null, ['class' => 'form-control'])!!}
        @error('title')
            <span class="invalid-feedback" role="alert" style="display: block;">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row">
    <div class="col-12">
        {!!Form::label('site_id', 'Site')!!}
        <select name="site_id" id="site" class="form-control">
            @foreach ($sites as $site)
            <option value="{{$site->id}}"
                @isset($site_information)
                    @if($site->id == $site_information->site_id)
                        selected
                    @endif
                @endisset>{{$site->name}}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="row">
    <div class="col-12">
        {!!Form::label('description', 'Discription')!!}
        {!!Form::text('description', null, ['class' => 'form-control'])!!}  
    </div>
</div>

<div class="row">
    <div class="col-12">
        {!!Form::label('type', 'Type')!!}
        {!!Form::select('type', ['admin' => 'Admin', 'frontend' => 'Frontend'], null, ['class' => 'form-control'])!!}
    </div>
</div>

<div class="row">
    <div class="col-12">
        {!!Form::label('image', 'Type')!!}
        {{ Form::file('image', ['class' => 'form-control-file']) }}
        @error('image')
            <span class="invalid-feedback" role="alert" style="display: block;">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>


<div class="row">
    <div class="col-12 text-center">
        {!!Form::submit('save', ['class' => 'btn btn-info'])!!}
    </div>
</div>

