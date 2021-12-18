@extends('layouts.user')
@section('nav-home','active-link')
@section('content')
    <!-- Banner -->
    <section class="py-5 px-20 banner">
        <div class="flex justify-center mt-10">
            <div class="text-center">
                <div class="grid grid-cols-1 md:grid-cols-2 text-center">
                    <img src="{{ asset('assets/images/new-logo.png') }}" alt="Spyder-code" class="md:h-80 mt-10">
                    <div class="md:mt-20">
                        <p class="text-xl md:text-3xl text-primary">I have a new website app, mobile app, and games every month.</p>
                        <div class="flex justify-center my-10 md:mx-1">
                            <div class="mr-5 md:mx-10">
                                <p>Game App</p>
                                <span><i class="uil uil-robot"></i> 200</span>
                            </div>
                            <div class="mr-5 lg:mx-10">
                                <p>Website App</p>
                                <span><i class="uil uil-desktop"></i> 200</span>
                            </div>
                            <div class="mr-5 lg:mx-10">
                                <p>Mobile App</p>
                                <span><i class="uil uil-mobile-android-alt"></i> 200</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content -->
    <section class="mt-10 px-4 md:px-24 py-10 content">
        <div class="flex flex-col md:flex-row">
            <div class="w-full md:w-3/4 md:mr-10">
                <!-- Game App -->
                <p class="text-3xl my-4">Game</p>
                <hr>
                <br>
                <div class="grid grid-cols-1 md:grid-cols-2">
                    @foreach ($game as $item)
                    <div class="item-app p-5 rounded-xl">
                        <img src="{{ $item->image }}" class="h-48 w-full" alt="{{ $item->name }}">
                        <div class="text-center mt-3">
                            <h2 class="text-l mt-5"><a href="#">{{ $item->name }}</a></h2>
                            <div class="flex flex-wrap justify-center my-2">
                                @foreach ($item->label as $label_item)
                                    <a href="{{ route('user.search.label',['name'=>$label_item->label->name]) }}" class="mr-3 text-xs text-blue-400">#{{ $label_item->label->name}}</a>
                                @endforeach
                            </div>
                            <hr>
                            <div class="flex mt-4 justify-center text-primary">
                                <div class="mr-5">
                                    <span><i class="uil uil-eye"></i> {{ $item->viewer }} Views</span>
                                </div>
                                <div class="mr-5">
                                    <span><i class="uil uil-share"></i> 200 Share</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- End Game App -->

                <!-- Mobile App -->
                <p class="text-3xl my-4">Mobile</p>
                <hr>
                <br>
                <div class="grid grid-cols-1 md:grid-cols-2">
                    @foreach ($mobile as $item)
                    <div class="item-app p-5 rounded-xl">
                        <img src="{{ $item->image }}" class="h-48 w-full" alt="{{ $item->name }}">
                        <div class="text-center mt-3">
                            <h2 class="text-l mt-5"><a href="#">{{ $item->name }}</a></h2>
                            <div class="flex flex-wrap justify-center my-2">
                                @foreach ($item->label as $label_item)
                                    <a href="{{ route('user.search.label',['name'=>$label_item->label->name]) }}" class="mr-3 text-xs text-blue-400">#{{ $label_item->label->name}}</a>
                                @endforeach
                            </div>
                            <hr>
                            <div class="flex mt-4 justify-center text-primary">
                                <div class="mr-5">
                                    <span><i class="uil uil-eye"></i> {{ $item->viewer }} Views</span>
                                </div>
                                <div class="mr-5">
                                    <span><i class="uil uil-share"></i> 200 Share</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- End Mobile App -->

                <!-- Website App -->
                <p class="text-3xl my-4">Website</p>
                <hr>
                <br>
                <div class="grid grid-cols-1 md:grid-cols-2">
                    @foreach ($website as $item)
                    <div class="item-app p-5 rounded-xl">
                        <img src="{{ $item->image }}" class="h-48 w-full" alt="{{ $item->name }}">
                        <div class="text-center mt-3">
                            <h2 class="text-l mt-5"><a href="#">{{ $item->name }}</a></h2>
                            <div class="flex flex-wrap justify-center my-2">
                                @foreach ($item->label as $label_item)
                                    <a href="{{ route('user.search.label',['name'=>$label_item->label->name]) }}" class="mr-3 text-xs text-blue-400">#{{ $label_item->label->name}}</a>
                                @endforeach
                            </div>
                            <hr>
                            <div class="flex mt-4 justify-center text-primary">
                                <div class="mr-5">
                                    <span><i class="uil uil-eye"></i> {{ $item->viewer }} Views</span>
                                </div>
                                <div class="mr-5">
                                    <span><i class="uil uil-share"></i> 200 Share</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- End Website App -->

            </div>
            <!-- Right Content -->
            <div class="w-full md:w-1/4">

                <!-- Category -->
                <div class="border bg-primary mt-10 border-blue-200">
                    <div class="py-2 border-b border-blue-200 text-center">
                        Category
                    </div>
                    @foreach ($category as $item)
                    <div class="text-xs border-b-2 border-blue-400 item p-3 flex justify-between">
                        <a href="{{ route('user.search.category',['name'=>$item->name]) }}"> > {{ $item->name }}</a>
                        <span>({{ $item->app->count() }})</span>
                    </div>
                    @endforeach
                </div>

                <!-- Labels -->
                <div class="border bg-primary border-blue-200 mt-10">
                    <div class="py-2 border-b border-blue-200 text-center">
                        Labels
                    </div>
                    <div class="flex flex-wrap text-xs p-4">
                        @foreach ($label as $item)
                            <div class="m-2 border border-blue-200 p-2 rounded-full">
                                <a href="{{ route('user.search.label',['name'=>$item->name]) }}">{{ $item->name }}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
