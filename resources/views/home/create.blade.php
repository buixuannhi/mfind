@extends('layouts.home')
@section('main')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">thêm mới</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
     
    </div>
  </div>
  <form action="/action_page.php">
    <div class="mb-3 mt-3">
      <label for="email">a:</label>
      <input type="email" class="form-control" id="email" placeholder="" name="email">
    </div>
    <div class="mb-3">
      <label for="pwd">b:</label>
      <input type="password" class="form-control" id="pwd" placeholder="b" name="pswd">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</main>
@stop()