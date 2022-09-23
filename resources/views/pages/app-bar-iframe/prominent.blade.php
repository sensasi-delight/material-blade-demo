@extends('layouts.main')

@section('title', 'App Bar: Top - Prominent')

<style>
    body {
        margin: 0;
    }
</style>

<x-MaterialBlade::AppBar variant="prominent">
    <x-slot name="start">

        <span class="mdc-top-app-bar__title">Page title</span>
    </x-slot>

    <x-slot name="end">
        <x-MaterialBlade::IconButton icon="menu" color="inherit" aria-label="Open navigation menu" />
    </x-slot>

</x-MaterialBlade::AppBar>
<div class="mdc-top-app-bar--prominent-fixed-adjust">
    @section('main')
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ullamcorper nulla sapien, in dictum metus
            tempor
            in. Duis porta neque sed lacus efficitur ornare. Praesent faucibus ut ipsum sit amet malesuada. Nullam eu diam
            non
            nisi iaculis lobortis eget sagittis nunc. Morbi volutpat gravida urna, id laoreet odio semper tempor.
            Suspendisse at
            tincidunt libero, sed auctor felis. Donec sit amet neque augue. Proin ipsum lectus, dignissim eu imperdiet sed,
            scelerisque ac ex. Quisque suscipit, ante nec sodales rhoncus, nibh nisl blandit neque, a iaculis ligula nunc at
            velit.
        </p>

        <p>
            Vivamus aliquam sapien molestie, tempor lorem eu, commodo metus. Morbi vel mollis eros. Proin sed sollicitudin
            dui.
            Suspendisse consectetur rutrum aliquam. Mauris tempus nisi sit amet nunc scelerisque, eget lobortis nibh
            viverra.
            Nunc porta urna ac hendrerit pellentesque. Vestibulum egestas erat nibh, id volutpat tellus pulvinar vel.
            Praesent
            malesuada pulvinar varius. Nullam finibus tempor faucibus. Duis tempor nisi erat, et tempor quam eleifend in.
            Vestibulum tellus diam, rutrum in lacinia nec, vulputate quis magna. Ut neque est, euismod in facilisis eu,
            rhoncus
            eget augue. Morbi sagittis et sapien nec faucibus.
        </p>

        <p>
            Nam sit amet massa vel ex scelerisque tincidunt. Suspendisse vitae dictum velit. Donec ut risus convallis leo
            convallis cursus. Nam non ullamcorper nulla. Proin eu mauris eu dolor molestie scelerisque. Donec eros est,
            dictum
            non dui pretium, fermentum maximus nisi. In at orci metus. Sed vel massa non mauris interdum blandit vitae non
            libero. Duis at mauris nec dolor euismod pulvinar non eget mauris. In risus orci, facilisis sed ultrices et,
            condimentum quis est. Vestibulum nec augue vel enim ultrices aliquet. Vivamus bibendum dapibus nisl id
            elementum.
            Proin tincidunt venenatis porttitor. Etiam sit amet ultrices enim, vehicula posuere risus.
        </p>

        <p>
            Aenean congue cursus blandit. Sed ultricies felis sed massa bibendum, vel gravida sapien lobortis. Ut commodo
            elementum laoreet. Donec tincidunt ex est, vel sagittis tortor sodales a. Donec posuere elit sed sem laoreet, et
            auctor mauris pretium. Suspendisse ac dui porta, fermentum augue non, commodo ligula. Praesent ut neque
            tincidunt,
            eleifend enim vitae, condimentum eros. In ac nibh suscipit, varius enim eu, porttitor enim. Vestibulum non
            suscipit
            enim. Cras tempor sed urna eget auctor. Donec mollis finibus nisi tincidunt dictum. Nam at luctus felis, at
            gravida
            enim. Ut pellentesque aliquet egestas. Integer suscipit pellentesque viverra. Praesent eu dolor velit. Curabitur
            rutrum venenatis dui, eget sollicitudin arcu blandit non.
        </p>

        <p>
            Aenean fringilla faucibus lacus, a tempus enim malesuada in. Mauris in nisl at odio posuere mattis. Mauris ac
            viverra tortor. Donec purus est, posuere a nulla ac, cursus dictum elit. Nullam luctus dui eu risus pretium, ac
            suscipit nisi venenatis. Curabitur ac sapien eget arcu dictum condimentum vitae ut justo. Sed et leo accumsan,
            placerat augue a, dapibus magna. Nulla facilisi.
        </p>
    @endsection
</div>
