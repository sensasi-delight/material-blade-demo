@extends('layouts.main')

@section('title', 'Progress Indicator')

@section('main')
    <section>
        <h2>Demos</h2>

        <h3>Linear Progress</h3>

        <h4>Basic</h4>
        <x-mbc::LinearProgress aria-label="Linear progress example 1" />

        <h4>Determinate</h4>
        <p>Set the <code>value</code> attribute to make it determinate progress</p>
        <x-mbc::LinearProgress value=".3" aria-label="Linear progress example 2" />

        <h4>Buffered</h4>
        <x-mbc::LinearProgress value=".5" bufferValue=".6" aria-label="Linear progress example 3" />

        <h4>Manipulate with Javascript</h4>
        <p>Progress Value:</p>
        <input type="range" min="0" max="100" value="0" oninput="setLinearProgressValue('linear-progress-5', this.value)">

        <p>Buffer Value:</p>
        <input type="range" min="0" max="100" value="100" oninput="setLinearProgressBuffer('linear-progress-5', this.value)">

        <p>Result:</p>
        <x-mbc::LinearProgress value="0" id="linear-progress-5" aria-label="Linear progress example 5" />






        <h3>Circular Progress</h3>

        <h4>Basic</h4>
        <x-mbc::CircularProgress aria-label="Circular progress example 1" />

        <h4>Determinate</h4>
        <p>Set the <code>value</code> attribute to make it determinate progress</p>
        <x-mbc::CircularProgress value=".75" aria-label="Circular progress example 2" />

        <h4>Size</h4>
        <x-mbc::CircularProgress size="large" aria-label="Circular progress example 3" />
        <x-mbc::CircularProgress size="medium" aria-label="Circular progress example 4" />
        <x-mbc::CircularProgress size="small" aria-label="Circular progress example 5" />

        <h4>Manipulate with Javascript</h4>
        <p>Progress Value:</p>
        <input type="range" min="0" max="100" value="0" oninput="setCircularProgressValue('circular-progress-6', this.value)">

        <p>Result:</p>
        <x-mbc::CircularProgress value="0" id="circular-progress-6" aria-label="Circular progress example 6" />
    </section>

    <section>
      <h2>Source Code:</h2>
      <p>
        @php
          $url = sourceCodeGithubUrl('resources/views/pages/progress-indicator.blade.php')
        @endphp
        <a href="{{ $url }}" target="_blank">{{ $url }}</a>
      </p>
  </section>

    <section>
        <h2>References</h2>

        <ul>
            @foreach ([
              'https://material.io/develop/web/components/linear-progress',
              'https://github.com/material-components/material-components-web/blob/v14.0.0/packages/mdc-linear-progress/README.md',
              'https://github.com/material-components/material-components-web/blob/v14.0.0/packages/mdc-circular-progress/README.md',
              'https://material-components.github.io/material-components-web-catalog/#/component/linear-progress-indicator'
            ] as $url)
                <li>
                    <a href="{{ $url }}" target="_blank">{{ $url }}</a>
                </li>
            @endforeach
        </ul>
    </section>

    <script>
        const setLinearProgressValue = (id, value) => {
            document.getElementById(id).linearProgress.progress = (value === '0' ? 0 : (value / 100));
        }

        const setLinearProgressBuffer = (id, value) => {
            document.getElementById(id).linearProgress.buffer = (value === '0' ? 0 : (value / 100));
        }

        const setCircularProgressValue = (id, value) => {
            document.getElementById(id).circularProgress.progress = (value === '0' ? 0 : (value / 100));
        }
    </script>
@endsection
