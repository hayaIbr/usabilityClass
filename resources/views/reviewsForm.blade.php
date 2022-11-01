<form action="{{ url('setReviews') }}">
 
<br></br>



<form>


            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $errors)
                    <li> {{$errors}} </li>
                    @endforeach
                </ul>
    </div>
    @endif


<div class="form-group">
    <label for="formGroupExampleInput"> اضف اسم التطبيق </label>  <br></br>

    <input type="text" class="form-control" name="nameApp" id="formGroupExampleInput" placeholder="اسم التطبيق . .">
  </div>


  <br></br>

<div class="form-group">
    <label for="exampleFormControlTextarea1"> اضف المراجعات هنا أو اختر ملف </label>  <br></br>
    <textarea class="form-control" name="reviewsInput" id="exampleFormControlTextarea1" rows="3" placeholder=" الاراء والمراجعات . ."></textarea>
  </div>


  <div class="form-group">
    <input type="file" class="form-control-file" id="exampleFormControlFile1"> 
  </div>


  <br></br>

  <label for="exampleFormControlTextarea1">اختر التصنيف المناسب  </label>

  <br></br>

  <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox1"> الرضا</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2"> التمام </label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
  <label class="form-check-label" for="inlineCheckbox3"> التعلم </label>
</div>

<br></br>
<br></br>


<button class= "btn btn-primary" type="submit">التالي</button>
</form>

<style>
    textarea {
        resize: none;
        border: 10px solid blue;

</style>
