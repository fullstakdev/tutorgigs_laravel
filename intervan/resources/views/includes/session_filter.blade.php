<style>
  .select2-container--default .select2-selection--single .select2-selection__rendered .select2-selection__clear:after{ display:none }
</style>
<form method="GET" action="">
        <div class="form-row">
          <div class="form-group col-sm-12 col-md-3">
            <label class="label-control">District</label>
            <select class="form-control" name="district" id="district">
              <option value="">--Choose District--</option>
              @foreach($district_wise_school_list as $d)
                <option value="{{$d->id}}" {{request()->get('district')==$d->id?'selected':''}}>{{$d->district_name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group col-sm-12 col-md-3">
            <label class="label-control">School</label>
            <select class="form-control" name="school" id="d_school">
              <option value="">--Choose School--</option>
              @foreach($schools as $s)

                <option value="{{$s->SchoolId}}" {{request()->get('school')==$s->SchoolId?'selected':''}}>{{$s->SchoolName}}</option>
                }
              @endforeach
            </select>
          </div>
          <div class="form-group col-sm-12 col-md-3">
            <label class="label-control">Grade</label>
            <select class="form-control" name="grade" id="grade_id">
              <option value="">--Choose Grade--</option>
              @foreach($grades as $g)
                <option value="{{$g->id}}" {{request()->get('grade')==$g->id?'selected' : ''}}>{{$g->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group col-md-2">
            <button type="submit" class="btn btn-info" style="margin-top: 1.9rem;">Filter</button>
          </div>

        </div>
      </form>