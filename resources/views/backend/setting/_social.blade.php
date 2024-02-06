
<div class="position-relative form-group">
    <label>Facebook Link</label>
    <div>
        <input type="url" class="form-control" name="facebook" placeholder="Facebook Link" required value="{{old('facebook', settings('facebook') ? settings('facebook') : '')}}" />
        <p class="text text-danger">{{$errors->first('facebook')}}</p>
    </div>
</div>

<div class="position-relative form-group">
    <label>Instagram</label>
    <div>
        <input type="url" class="form-control" name="instagram" placeholder="Instagram Link" required value="{{old('instagram', settings('instagram') ? settings('instagram') : '')}}" />
        <p class="text text-danger">{{$errors->first('instagram')}}</p>
    </div>
</div>

<div class="position-relative form-group">
    <label>Twitter</label>
    <div>
        <input type="url" class="form-control" name="twitter" placeholder="Twitter Link" required value="{{old('twitter', settings('twitter') ? settings('twitter') : '')}}" />
        <p class="text text-danger">{{$errors->first('twitter')}}</p>
    </div>
</div>

<div class="position-relative form-group">
    <label>Youtube</label>
    <div>
        <input type="url" class="form-control" name="youtube" placeholder="Youtube Link" required value="{{old('youtube', settings('youtube') ? settings('youtube') : '')}}" />
        <p class="text text-danger">{{$errors->first('youtube')}}</p>
    </div>
</div>


<div class="form-group">
    <button type="submit" class="btn btn-primary">{{$button}}</button>
</div>