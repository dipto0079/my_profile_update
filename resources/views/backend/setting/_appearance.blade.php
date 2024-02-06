<div class="position-relative form-group">
    <label for="logo">Site Logo</label>
    <div class="d-flex justify-content-between">
        <img src="{{ settings('logo') ?  getavatar(settings('logo')) : ''}}" alt="" height="80px;">
        <input type="file" class="form-control" name="logo" />
        <p class="text text-danger">{{$errors->first('logo')}}</p>
    </div>
</div>

<div class="position-relative form-group">
    <label for="favicon">Site Favicon</label>
    <div class="d-flex justify-content-between">
        <img src="{{ settings('favicon') ?  getavatar(settings('favicon')) : ''}}" alt="" height="80px;">
        <input type="file" class="form-control" name="favicon" />
        <p class="text text-danger">{{$errors->first('favicon')}}</p>
    </div>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">{{$button}}</button>
</div>