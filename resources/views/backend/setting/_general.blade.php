<div class="position-relative form-group">
    <label for="site_title">Site Title</label>
    <div>
        <input type="text" class="form-control" id="site_title" name="site_title" placeholder="Enter Site Title" required value="{{old('site_title', settings('site_title') ? settings('site_title') : '')}}" />
        <p class="text text-danger">{{$errors->first('site_title')}}</p>
    </div>
</div>
<div class="position-relative form-group">
    <label for="site_address">Site Footer</label>
    <div>
        <input type="text" class="form-control" id="site_address" name="site_footer" placeholder="Enter Site Footer" required value="{{old('site_footer', settings('site_footer') ? settings('site_footer') : '')}}" />
        <p class="text text-danger">{{$errors->first('site_footer')}}</p>
    </div>
</div>

<div class="position-relative form-group">
    <label for="site_address">Footer Text</label>
    <div>
        <textarea name="footer_text" id="" cols="40" rows="5" class="form-control" placeholder="Enter Footer Text">{{settings('footer_text') ? settings('footer_text') : ''}}</textarea>
        <p class="text text-danger">{{$errors->first('footer_text')}}</p>
    </div>
</div>

<div class="position-relative form-group">
    <label>Meta Description</label>
    <div>
        <input type="text" class="form-control" name="meta_description" placeholder="Enter Meta Description" required value="{{old('meta_description', settings('meta_description') ? settings('meta_description') : '')}}" />
        <p class="text text-danger">{{$errors->first('meta_description')}}</p>
    </div>
</div>

<div class="position-relative form-group">
    <label>Meta keywords</label>
    <div>
        <input type="text" class="form-control" name="meta_keywords" placeholder="Enter Meta Keywords" required value="{{old('meta_keywords', settings('meta_keywords') ? settings('meta_keywords') : '')}}" />
        <p class="text text-danger">{{$errors->first('meta_keywords')}}</p>
    </div>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">{{$button}}</button>
</div>