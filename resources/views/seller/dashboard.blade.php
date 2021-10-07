<x-app-layout>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <x-slot name="header">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Seller Dashboard') }}
                    </h2>
                </x-slot>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                        This is Seller Dashboard. You must be seller privileged to be here !
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>