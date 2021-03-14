@extends('layouts.app')
@section('title', 'Halaman Home')
@section('content')
<article class="article">
<form>
    <div class="form-group">
      <label for="exampleInputName1">Name</label>
      <input type="email" class="form-control" id="exampleInputName1">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input type="password" class="form-control" id="exampleInputEmail1">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary" style="text-align: right;">Send Message</button>
  </form>
</article>
<div class="site-footer">
    <p>Copyright © 2021 Dinamika Book. All Rights Reserved </p>
</div>
@stop
