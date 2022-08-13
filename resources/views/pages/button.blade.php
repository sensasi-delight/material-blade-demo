@extends('layouts.main')

@section('title', 'Button')

@section('main')
    <section>
        <h2>Basic</h2>

        <x-MaterialBlade::button>
            Regular Component
        </x-MaterialBlade::button>


        <x-MaterialBlade::button label="Anynomus Component" />

    </section>
    <section>
        <h2>Variants</h2>

        <x-MaterialBlade::button>
            Contained
        </x-MaterialBlade::button>
        <x-MaterialBlade::button label="Unelevated" variant="unelevated" />
        <x-MaterialBlade::button label="Outlined" variant="outlined" />
        <x-MaterialBlade::button label="Text" variant="text" />
    </section>

    <section>
      <h2>Anchor Tag</h2>

      <x-MaterialBlade::button href="#anchor-tag" label="Anchor Contained" />
      <x-MaterialBlade::button href="#anchor-tag" label="Anchor Unelevated" variant="unelevated" />
      <x-MaterialBlade::button href="#anchor-tag" label="Anchor Outlined" variant="outlined" />
      <x-MaterialBlade::button href="#anchor-tag" label="Anchor Text" variant="text" />

  </section>

    <section>
        <h2>Colors</h2>

        <x-MaterialBlade::button label="Primary" />
        <x-MaterialBlade::button label="Secondary" color="secondary" />
        <x-MaterialBlade::button label="Success" color="success" />
        <x-MaterialBlade::button label="Error" color="error" />
        <x-MaterialBlade::button label="Warning" color="warning" />
        <x-MaterialBlade::button label="Info" color="info" />
    </section>

    <section>
        <h2>Disabled</h2>

        <x-MaterialBlade::button label="Contained Disabled" disabled />
        <x-MaterialBlade::button label="Unelevated Disabled" variant="unelevated" disabled />
        <x-MaterialBlade::button label="Outlined Disabled" variant="outlined" disabled />
        <x-MaterialBlade::button label="Text Disabled" variant="text" disabled />
    </section>

    <section>
        <h2></h2>
    </section>

    <section>
        <h2>Sizes</h2>

        <i>On development</i>

        {{-- <x-button label="Small" size="small" />
        <x-button label="Medium" />
        <x-button label="Large" size="large" /> --}}
    </section>



@endsection
