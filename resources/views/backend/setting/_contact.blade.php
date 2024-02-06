
<div class="position-relative form-group">
    <label>Email</label>
    <div>
        <input type="email" class="form-control" name="email" placeholder="Enter Email Address" required value="{{old('email', settings('email') ? settings('email') : '')}}" />
        <p class="text text-danger">{{$errors->first('email')}}</p>
    </div>
</div>

<div class="position-relative form-group">
    <label>Phone</label>
    <div>
        <input type="number" class="form-control" name="phone" placeholder="Enter Phone Number" required value="{{old('phone', settings('phone') ? settings('phone') : '')}}" />
        <p class="text text-danger">{{$errors->first('phone')}}</p>
    </div>
</div>

<div class="position-relative form-group">
    <label>Address</label>
    <div>
        <textarea name="address" class="form-control" id="" rows="2" placeholder="Enter Address">{{settings('address') ? settings('address') : ''}}</textarea>
        <p class="text text-danger">{{$errors->first('address')}}</p>
    </div>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">{{$button}}</button>
</div>