@extends('layouts.main')

@section('title', 'Icon')

@section('main')
<h1>Icon</h1>

List of all supported icons are available on <a href="https://fonts.google.com/icons?selected=Material+Icons" target="_blank">Google Font</a> page.
<section>
  <h2>Basic</h2>
  <x-MaterialBlade::Icon icon="home" />
  <x-MaterialBlade::Icon icon="favorite" />
  <x-MaterialBlade::Icon icon="delete" />
  <div>
    <code>
      &lt;x-MaterialBlade::Icon icon="home" /><br>
      &lt;x-MaterialBlade::Icon icon="favorite" /><br>
      &lt;x-MaterialBlade::Icon icon="delete" />
    </code>
  </div>
</section>

<section>
  <h2>Color</h2>
  <x-MaterialBlade::Icon icon="home" />
  <x-MaterialBlade::Icon icon="bluetooth" color="primary" />
  <x-MaterialBlade::Icon icon="filter_vintage" color="secondary" />
  <x-MaterialBlade::Icon icon="delete" color="error" />
  <x-MaterialBlade::Icon icon="paid" color="warning" />
  <x-MaterialBlade::Icon icon="power_settings_new" color="info" />
  <x-MaterialBlade::Icon icon="check_circle" color="success" />

  <div>
    <code>
      &lt;x-MaterialBlade::Icon icon="home" /><br>
      &lt;x-MaterialBlade::Icon icon="bluetooth" color="primary" /><br>
      &lt;x-MaterialBlade::Icon icon="filter_vintage" color="secondary" /><br>
      &lt;x-MaterialBlade::Icon icon="delete" color="error" /><br>
      &lt;x-MaterialBlade::Icon icon="paid" color="warning" /><br>
      &lt;x-MaterialBlade::Icon icon="power_settings_new" color="info" /><br>
      &lt;x-MaterialBlade::Icon icon="check_circle" color="success" />
    </code>
  </div>
</section>

<section>
  <h2>Variant</h2>
  <x-MaterialBlade::Icon icon="home:filled" />
  <x-MaterialBlade::Icon icon="home:outlined" />
  <x-MaterialBlade::Icon icon="home:round" />
  <x-MaterialBlade::Icon icon="home:sharp" />
  <x-MaterialBlade::Icon icon="home:two-tone" />

  <p>Alternative way set variant</p>
  <x-MaterialBlade::Icon icon="home" variant="filled" />
  <div>
    <code>
      &lt;x-MaterialBlade::Icon icon="home" variant="filled"/>
    </code>
  </div>
</section>
  
@endsection