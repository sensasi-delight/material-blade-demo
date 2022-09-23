@extends('layouts.main')

@section('main')
    <p style="color: orange">*There's nothing wrong with your device, I purposely used plain HTML to make Material Blade
        stand out more.</p>
    <h1>Material Blade</h1>

    <p>
        Material Blade is a simple package that provides the beautifulness of Google <a href="https://material.io/"
            target="_blank">Material Design</a>
        components as Laravel Blade components. Material Blade aims to make UI/UX development of your Laravel app faster,
        inspired by <a href="https://mui.com" target="_blank">MaterialUI</a>.
    </p>

    <p>
        General knowledge of Laravel and Blade components i'ts required for using this package. however, the fully
        understand
        about this feature is helpful for optimizing the usages of this package. If you never heard about <a
            href="https://laravel.com/docs/8.x/blade#components" target="_blank">Blade
            Components</a>, it is a good start to understand it and plays with Material
        Blade package.
    </p>

    <h2>Status</h2>
    <p>
        This package is still under development, please contribute to make it release faster. The status of <a
            href="https://material.io/components?platform=web" target="_blank">Material Design
            Web components</a> that implemented on this package are shown on the next
        section.
    </p>

    <h2>
        Components
    </h2>

    <ul>
      @php
        $components = [
          'App Bar',
          'Banner',
          'Button',
          'Card',
          'Checkbox',
          'Chip',
          'Data Table',
          'Floating Action Button',
          'Icon',
          'Icon Button',
          'Progress Indicator',
          'Switch',
          'Tab Bar',
          'Tooltip',
          'Typography'
        ];
      @endphp

      @foreach ($components as $component)
          <li>
              <a href="{{ route('pages.' . strtolower(str_replace(' ', '-', $component))) }}">{{ $component }}</a>
          </li>
      @endforeach
    </ul>

    <h2>
        Templates
    </h2>

    <p><i>Status: planned</i></p>
@endsection
